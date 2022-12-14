<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Buying;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\BuyingMail;

class ChargeController extends Controller
{
    public function charge(Request $request){
        // ダウンロードしたStripeのPHPライブラリのinit.phpを読み込む
require_once('/var/www/html/stripe-php/init.php');
/* require __DIR__.'/../vendor/autoload.php'; */

// APIのシークレットキー
\Stripe\Stripe::setApiKey('sk_test_51M1QWLESx0kT4rkdvZC6yi21NS5TbPm9OUrprv1RzPx6uhn0mHUV28d2x0WyH9gpAvm3sV7SIDbLqXpguWvLH5hw00qjpqjpar');

$chargeId = null;

try {
    // (1) オーソリ（与信枠の確保）
    $token = $_POST['stripeToken'];
    $charge = \Stripe\Charge::create(array(
        'amount' => 100,
        'currency' => 'jpy',
        'description' => 'test',
        'source' => $token,
        'capture' => false,
    ));
    $chargeId = $charge['id'];

    // (2) 注文データベースの更新などStripeとは関係ない処理
    // :
    // :
    // :
    $id = $request->productId;
    $post = Product::where('id',$id)->first();
    $authUser = Auth::id();
    $post->buying_id = $authUser;
    /* dd($post); */
    $post->save();

    $user = User::where('id',$authUser)->first();
    $mail = $user->email;

    /* $data = [
        'product_name' => $request->product_name,
        'price' => $request->price,
        'postage' => $request->postage,
    ]; */
        $product_name = $request->product_name;
        $price = $request->price;
        $postage = $request->postage;

    Mail::send(new BuyingMail($product_name,$price,$postage,$mail));

    // (3) 売上の確定
    $charge->capture();

    // 購入完了画面にリダイレクト
    /* header("Location: resources/views/product/complete.blade.php"); */
    return view('product.complete');
    exit;
} catch(\Throwable $e) {
    if ($chargeId !== null) {
        // 例外が発生すればオーソリを取り消す
        \Stripe\Refund::create(array(
            'charge' => $chargeId,
        ));
    }

    // エラー画面にリダイレクト
    /* header("Location: /error.html"); */
    return view('product.error');
    exit;
}
    }
}
