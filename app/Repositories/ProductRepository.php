<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;


class ProductRepository implements ProductRepositoryInterface
{
    public function getPaginatedProducts($perPage = 8)
    {
        $products = $this->getAll(); // Assuming getAll() returns a Collection
        $currentPage = Paginator::resolveCurrentPage() ?: 1;

        // Manually Paginate
        $currentItems = $products->slice(($currentPage - 1) * $perPage, $perPage)->values();
        return new LengthAwarePaginator($currentItems, $products->count(), $perPage, $currentPage, [
            'path' => request()->url(),
            'query' => request()->query()
        ]);
    }

    public function getRandomRecentProducts($limit = 10)
    {
        return Product::whereBetween('created_at', [Carbon::now()->subDays(5), Carbon::now()->subDays(2)])
                      ->inRandomOrder()
                      ->limit($limit)
                      ->get();
    }

    public function getAll()
    {
        return Product::with('subcategory')->get();
    }

    public function findById($id)
    {
        $product = Product::findOrFail($id);

        $sessionKey = 'product_viewed_' . $id;

        if (!session()->has($sessionKey)) {
            $product->increment('views');
            session([$sessionKey => true]);
        }

        return $product;

    }

    public function create(array $data)
    {
        $imageUrls = []; // Array to store multiple image URLs

        if (!empty($data['images'])) {
            foreach ($data['images'] as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName(); // Generate a unique name
                $image->move(public_path('products'), $imageName); // Move to public folder
                $imageUrls[] = 'products/' . $imageName; // Save only relative path
            }
        }

        // Convert array to JSON and store it in the database
        $data['images'] = json_encode($imageUrls);
        $data['size'] = json_encode($data['size']);  // Store size as JSON
        $data['color'] = json_encode($data['color']); // Store color as JSON

        return Product::create($data);
    }


    public function update($id, array $data)
    {
        $product = Product::findOrFail($id);

        // Handle multiple images
        $imageUrls = json_decode($product->images, true) ?? []; // Preserve existing images

        if (!empty($data['images'])) {
            foreach ($data['images'] as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('products'), $imageName);
                $imageUrls[] = 'products/' . $imageName;
            }
        }

        // Convert array to JSON and store it in the database
        $data['images'] = json_encode($imageUrls);
        $data['size'] = json_encode($data['size'] ?? []);
        $data['color'] = json_encode($data['color'] ?? []);

        $product->update($data);

        return $product;
    }


    public function delete($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            Storage::delete('public/' . $product->image);
        }
        return Product::destroy($id);
    }
}
