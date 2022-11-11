<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_description','product_name','price','images','postage','images.*','buying_id','updated_at'];

    /* use HasFactory; */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function images()
    {
        return $this->belongsToMany(Image::class, 'product_images')
        ->using(ProductImage::class);
    }
}
