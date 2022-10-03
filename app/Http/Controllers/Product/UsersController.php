<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Services\ProductService;

class UsersController extends Controller
{

    /**
    * ユーザー一覧
    * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    */

    public function __invoke(Request $request, ProductService $productService)
    {
        // $products = $productService->getProducts();
         // 検索フォームで入力された値を取得する
        $products = Product::paginate(20);

        $search = $request->input('search');

        // クエリビルダ
        $query = Product::query();

       // もし検索フォームにキーワードが入力されたら
        if ($search) {

            // 全角スペースを半角に変換
            $spaceConversion = mb_convert_kana($search, 's');

            // 単語を半角スペースで区切り、配列にする（例："山田 翔" → ["山田", "翔"]）
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);


            // 単語をループで回し、ユーザーネームと部分一致するものがあれば、$queryとして保持される
            foreach($wordArraySearched as $value) {
                $query->where('product_name', 'like', '%'.$value.'%');
            }

            // 上記で取得した$queryをページネートにし、変数$usersに代入

        }
        $products = $query->orderBy('created_at', 'DESC')->paginate(20);

        // ビューにusersとsearchを変数として渡す
        return view('product.index')
            ->with([
                'products' => $products,
                'search' => $search,
            ]);
    }
}
