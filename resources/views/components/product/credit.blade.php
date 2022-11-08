<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>購入画面</title>
    <!-- 購入ボタンのCSS -->
    <style type="text/css">
    .stripe-button-el {
        width: 350px;
        max-width: 100%;
    }
    .stripe-button-el span {
        font-size: 18px;
        padding-top: 15px;
        min-height: 60px!important;
    }
    </style>
</head>

<body>
    <form action="app/Http/Controllers/Charge.php" method="POST">
        @csrf
            <table class="mt-3 mb-4 w-full border-collapse rounded border-2 border-stone-200 table table-striped table-hover">

            <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200"><label>商品名</label></th>
            <td class="text-center px-3 py-2 border-2 border-stone-200">{{ $product_name }}</td>
            </tr>
            <input
                name="product_name"
                value="{{ $product_name }}"
                type="hidden">

            <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200"><label>商品説明</label></th>
            <td class="text-center px-3 py-2 border-2 border-stone-200">{{ $product_description }}</td>
            </tr>
            <input
                name="product_description"
                value="{{ $product_description }}"
                type="hidden">


            <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200"><label>価格</label></th>
            <td class="text-center px-3 py-2 border-2 border-stone-200">{{ $price }}</td>
            </tr>
            <input
                name="price"
                value="{{ $price }}"
                type="hidden">

            <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200"><label>発送方法</label></th>
            <td class="text-center px-3 py-2 border-2 border-stone-200">{{ $postage }}</td>
            </tr>
            <input
                name="postage"
                value="{{ $postage }}"
                type="hidden">


            </table>
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_51M1QWLESx0kT4rkdIUVr3hXCQLL34VxGqEN2SZhPhuftVrTytGf0FFdZTj1sVE5UjdTE95t2vhoB1ZioY6yZ6H9l00w2CQqjnh"
        data-amount="100"
        data-name="この商品の料金は100円です"
        data-locale="auto"
        data-allow-remember-me="false"
        data-label="購入する"
        data-currency="jpy">
        </script>
    </form>
</body>
</html>
