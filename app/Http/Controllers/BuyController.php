<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\BuyRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class BuyController extends Controller
{
    public function buy(BuyRequest $request)
    {
    $id = Auth::id();
    $post = User::where('id',$id)->first();

    $data = [
            'product_description' => $request->product_description,
            'price' => $request->price,
            'product_name' => $request->product_name,
            'postage' => $request->postage,
            'productId' => $request->productId,
            'adress'=>$post->adress,
            /* 'images' => $request->images */ // .*をimagesの後ろから削除
    ];


    /* dd($data); */
    /* $adress = $post->adress; */

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
