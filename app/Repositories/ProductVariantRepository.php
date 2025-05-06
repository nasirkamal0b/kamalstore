<?php

namespace App\Repositories;

use App\Models\ProductVariant;
use App\Repositories\Interfaces\ProductVariantRepositoryInterface;


class ProductVariantRepository implements ProductVariantRepositoryInterface
{
    public function getAll()
    {
        return ProductVariant::all();
    }

    public function findById($id)
    {
        return ProductVariant::findOrFail($id);
    }

    public function create(array $data)
    {
        return ProductVariant::create($data);
    }

    public function update($id, array $data)
    {
        $variant = ProductVariant::findOrFail($id);
        $variant->update($data);
        return $variant;
    }

    public function delete($id)
    {
        return ProductVariant::destroy($id);
    }
}
