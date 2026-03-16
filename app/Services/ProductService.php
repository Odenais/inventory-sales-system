<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductService
{
    public function create(array $data): Product
    {
       $product = Product::create([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'description' => $data['description'] ?? null,
            'price' => (float) $data['price'],
            'stock' => (int) $data['stock'],
            'image' => $data['image'] ?? null,
        ]);

        if (isset($data['image'])) {
            $extension = $data['image']->getClientOriginalExtension();

            $filename = $product->id . '-' . Str::slug($product->name) . '.' . $extension;

            $path = $data['image']->storeAs(
                'products',
                $filename,
                'public'
            );

            $product->update([
                'image' => $path
            ]);

            }
            return $product;
    }
}
