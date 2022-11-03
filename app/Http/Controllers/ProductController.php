<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\Product;
use App\Models\ProductImage;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, ProductService $productService)
    {
        /* $products = $productService->getProducts(); */
        $productId = (int) $request->route('productId');
        /* dd($productId); */
        /* if (!$productService->checkOwnProduct($request->user()->id, $productId)) {
            throw new AccessDeniedHttpException();
        } ここのコメントアウト部分は自身が出品した商品のみにアクセスできるようにする*/
        $product = Product::with('images')->where('id', $productId)->firstOrFail();
        $images = $product->images;
        /* dd($products); */
        /* dd($images); */
        return view('product.product_page')->with([
            'product' => $product,
            'images' => $images,
        ]);
    }
}
