<x-layout title="BUY_CONFIRM | EC2">
    <x-product.header></x-product.header>
    <div class="bg-white">
    <x-layout.single>
        {{-- <form method="post" action="{{ route('product.buy') }}" enctype="multipart/form-data"> --}}
            {{-- <x-product.credit></x-product.credit> --}}
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
        margin-top: 16px;
        margin-bottom: 96px;
        /* margin: 16px 150px 96px; */
        margin-left: 150px;
    }
    .stripe-button-el span {
        font-size: 18px;
        padding-top: 15px;
        min-height: 60px!important;
    }
    </style>
</head>

<body>
    <form action="{{ route('product.charge') }}{{-- /app/Http/charge.php --}}" method="POST" enctype="multipart/form-data">
        @csrf
            <table class="w-4/5 mx-auto mt-3 mb-4 w-full border-collapse rounded border-2 border-stone-200 table table-striped table-hover">

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
            <td class="text-center px-3 py-2 border-2 border-stone-200">{{ $price }}円</td>
            </tr>
            <input
                name="price"
                value="{{ $price }}"
                type="hidden">

            <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200"><label>お届け先</label></th>
            <td class="text-center px-3 py-2 border-2 border-stone-200">{{ $adress }}</td>
            </tr>

            <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200"><label>発送方法</label></th>
            <td class="text-center px-3 py-2 border-2 border-stone-200">{{ $postage }}</td>
            </tr>
            <input
                name="postage"
                value="{{ $postage }}"
                type="hidden">

            <input
                name="productId"
                value="{{ $productId }}"
                type="hidden">


            </table>
        <div class="mx-auto">
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_51M1QWLESx0kT4rkdIUVr3hXCQLL34VxGqEN2SZhPhuftVrTytGf0FFdZTj1sVE5UjdTE95t2vhoB1ZioY6yZ6H9l00w2CQqjnh"
        data-amount="{{ $price }}"
        data-name="クレジット決済"
        data-locale="auto"
        data-allow-remember-me="false"
        data-label="購入する"
        data-currency="jpy">
        </script>
        </div>
    </form>
</body>
</html>


            {{-- <div class="p-2 w-full">
                <button class="mt-4 mb-24 flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">購入</button>
            </div> --}}
        {{-- </form> --}}
    </x-layout.single>
    </div>
    <x-product.footer></x-product.footer>

</x-layout>
