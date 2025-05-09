<?php

namespace App\Repositories;

use App\Models\Subcategory;
use App\Repositories\Interfaces\SubcategoryRepositoryInterface;

class SubcategoryRepository implements SubcategoryRepositoryInterface
{
    public function getAll()
    {
        return Subcategory::with('products')->get();
    }

    public function findById($id)
    {
        return Subcategory::findOrFail($id);
    }

    public function create(array $data)
    {
        if (isset($data['image'])) {
            $image = $data['image'];
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/subcategories'), $imageName);
            $data['image'] = 'uploads/subcategories/' . $imageName;
        }

        return Subcategory::create($data);
    }

    public function update($id, array $data)
    {
        $subcategory = Subcategory::findOrFail($id);

        if (isset($data['image'])) {
            // Delete old image if exists
            if ($subcategory->image && file_exists(public_path($subcategory->image))) {
                unlink(public_path($subcategory->image));
            }

            $image = $data['image'];
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/subcategories'), $imageName);
            $data['image'] = 'uploads/subcategories/' . $imageName;
        }

        $subcategory->update($data);
        return $subcategory;
    }

    public function delete($id)
    {
        return Subcategory::destroy($id);
    }
}
