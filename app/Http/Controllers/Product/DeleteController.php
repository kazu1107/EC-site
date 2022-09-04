<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\Product;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, ProductService $productService)
    {
        $productId = (int) $request->route('productId');
        if (!$productService->checkOwnProduct($request->user()->id, $productId)) {
            throw new AccessDeniedHttpException();
        }
        $productService->deleteProduct($productId);
        return redirect()
            ->route('product.index')
            ->with('feedback.success', "商品を削除しました");
    }
}
