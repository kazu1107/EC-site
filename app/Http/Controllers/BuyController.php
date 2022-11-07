<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\BuyRequest;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BuyController extends Controller
{
    public function buy(BuyRequest $request)
    {

    $data = [
            'product_description' => $request->product_description,
            'price' => $request->price,
            'product_name' => $request->product_name,
            'postage' => $request->postage,
            /* 'images' => $request->images */ // .*をimagesの後ろから削除
    ];
    /* $images = $request->images;
    foreach ($images as $image) {
        Storage::putFile('public/images', $image);
        $imageModel = new Image();
        $imageModel->name = $image->hashName();
        $image->name = $imageModel->name;
    } */
    /* dd($request); */


    return view('product.buy_confirm', $data);
    }
}
