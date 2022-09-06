<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    public function getProducts()
    {
        return Product::with('images')->orderBy('created_at', 'DESC')->get();
    }

    public function checkOwnProduct(int $userId, int $productId): bool
    {
        $product = Product::where('id', $productId)->first();
        if (!$product) {
            return false;
        }

        return $product->user_id === $userId;
    }

    public function saveProduct(int $userId, string $product_name, string $description, array $images)
    {
        DB::transaction(function () use ($userId, $product_name, $description, $images) {
            $product = new Product;
            $product->user_id = $userId;
            $product->product_name = $product_name;
            $product->description = $description;
            $product->save();
            foreach ($images as $image) {
                Storage::putFile('public/images', $image);
                $imageModel = new Image();
                $imageModel->name = $image->hashName();
                $imageModel->save();
                $product->images()->attach($imageModel->id);
            }
        });
    }
    public function deleteProduct(int $productId)
    {
        DB::transaction(function () use ($productId) {
            $product = Product::where('id', $productId)->firstOrFail();
            $product->images()->each(function ($image) use ($product){
                $filePath = 'public/images/' . $image->name;
                if(Storage::exists($filePath)){
                    Storage::delete($filePath);
                }
                $product->images()->detach($image->id);
                $image->delete();
            });

            $product->delete();
        });
    }
}
