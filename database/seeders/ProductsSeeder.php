<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Product::factory()->count(10)->create()->each(fn($product) =>
                Image::factory()->count(4)->create()->each(fn($image) =>
                    $product->images()->attach($image->id)
            )
        );
    }
}
