<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, ProductService $productService)
    {
        $products = $productService->getProducts();
        $products = Product::orderBy('created_at', 'DESC')->paginate(25);
        /* dd($products); */
        return view('product.index')
            ->with('products', $products);
    }
}
