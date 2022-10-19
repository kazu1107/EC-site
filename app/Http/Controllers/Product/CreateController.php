<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Models\Product;
use App\Services\ProductService;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request, ProductService $productService)
    {
        $productService->saveProduct(
            $request->userId(),
            $request->name(),
            $request->product_description(), //_descriptionを追記
            $request->price(),
            $request->postage(),
            $request->images() //ここたぶんミスしている
        );
        return redirect()->route('product.index');
    }
}
