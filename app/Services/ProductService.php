<?php

namespace App\Services;

use App\Models\Product;
use Carbon\Carbon;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

    public function saveProduct(int $userId, string $product_name, string $description, int $price, string $postage,int $buying_id, array $images)
    {
        DB::transaction(function () use ($userId, $product_name, $description, $price, $postage,$buying_id, $images) {
            $product = new Product;
            $product->user_id = $userId;
            $product->product_name = $product_name;
            $product->description = $description;
            $product->price = $price;
            $product->postage = $postage;
            $product->buying_id = $buying_id;
            /* dd($images); */
            $product->save();
            foreach ($images as $image) {
                /* Storage::putFile('public/images', $image); */
                $imageModel = File::get('storage/images/' .$image);
                $imageModel = new Image();
                $imageModel->name = $image; //->hashName()を末尾から消した
                /* dd($imageModel); */
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
