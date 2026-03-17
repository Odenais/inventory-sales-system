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

    public function update(Product $product, array $data): Product
    {
        $product->update([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'description' => $data['description'] ?? null,
            'price' => $data['price'],
            'stock' => $data['stock'],
        ]);

        if (isset($data['image'])) {
            if ($product->image) {
                storage::disk('public')->delete($product->image);
            }

            $extension = $data['image']->getClientOriginalExtension();
            $filename = $product->id . '-' . Str::slug($data['name']) . '.' . $extension;
            $path = $data['image']->storeAs('products', $filename, 'public');
            $data['image'] = $path;
        }
        $product->update($data);

        return $product;
    }
}
