<?php

namespace App\Http\Controllers\Product\Update;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use App\Services\ProductService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class PutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request, ProductService $productService)
    {
        if (!$productService->checkOwnProduct($request->user()->id, $request->id())) {
            throw new AccessDeniedHttpException();
        }
        $product = Product::where('id', $request->id())->firstOrFail();
        $product->product_name = $request->product0();
        $product->description = $request->product();
        $product->save();
        return redirect()
            ->route('product.update.index', ['productId' => $product->id])
            ->with('feedback.success', "出品内容を更新しました");
    }
}
