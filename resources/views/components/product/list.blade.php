@props([
    'products' => []
])
<div class="flex flex-wrap bg-white shadow-lg mb-5">

        @foreach($products as $product)
        <div class="w-3/12 border-b last:border-b-0 border-gray-200 p-4">
            <div>
                <span class="text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                    出品者：{{ $product->user->name }}
                </span>
                <p class="text-blue-500">{!! nl2br(e($product->product_name)) !!}</p>
                <p class="text-gray-600">{!! nl2br(e($product->description)) !!}</p>
                <p class="text-red-500">￥{!! nl2br(e($product->price)) !!}</p>

            </div>
            <div>
                <!-- TODO 編集と削除 -->
                <x-product.options :productId="$product->id" :userId="$product->user_id"></x-product.options>
            </div>
        </div>
        @endforeach

    {{ $products->appends(request()->input())->links() }}


</div>
