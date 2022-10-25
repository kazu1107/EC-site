<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\CreateRequest;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfirmController extends Controller
{
    public function confirm(CreateRequest $request)
    {
        /* $request->validate([
            'product_description' => 'required|max:255',
            'product_name' => 'required|max:40',
            'price' => 'required|max:100000',
            'images' => 'array|max:4',
            'postage' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]); */
    /* $product = new Product($request->all()); */
    /* $product = $request->all(); */
    $data = [
        'product_description' => $request->product_description,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'postage' => $request->postage,
            /* 'images' => $request->images */ // .*をimagesの後ろから削除
    ];
    $images = $request->images;
    foreach ($images as $image) {
        Storage::putFile('public/images', $image);
        $imageModel = new Image();
        $imageModel->name = $image->hashName();
        /* $imageModel->save(); */
    }
    /* dd($data); */
    /* dd($imageModel); */
    dd($images);


    return view('product.confirm', $data, compact('imageModel', 'images'));
    }
}
