@component('mail::message')
# 会員登録が完了しました!

このサイトでは、いらない商品を出品したり、お気に入りの商品を購入することができます。

@component('mail::button', ['url' => route('product.index')])
    サイトにアクセスしてみましょう!
@endcomponent

@endcomponent
