<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Models\Product;
use App\Services\ProductService;

class CreateController extends Controller
{
    public function __invoke(CreateRequest $request, ProductService $productService)
    {
        $productService->saveProduct(
            $request->userId(),
            $request->product(),
            $request->name(),
            $request->images() //ここたぶんミスしている
        );
        return redirect()->route('product.index');
    }
}
