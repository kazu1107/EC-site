<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\CreateRequest;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

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
            'images.*' => $request->images
    ];
    /* dd($data); */

    return view('product.confirm', $data);
    }
}
