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
            $request->buying_id(),
            /* $request->images(), */ //ここたぶんミスしている
            $request->input('images'),
            $request->file('images'),
        );
        /* $images = $request->images;
        foreach ($images as $image) {
        $image = $request->file('image');

        // 画像情報がセットされていれば、保存処理を実行
        if (isset($image)) {
            // storage > public > img配下に画像が保存される
            $path = $image->store('images','public');
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // DBに登録する処理
                Product::create([
                    'images' => $path,
                ]);
                dd($request);
            }
        }
    }
        dd($images); */
        return redirect()->route('product.index');
    }
}
