@props([
    'products' => []
])
<div class="bg-white shadow-lg mb-5">
    <ul>
        @foreach($products as $product)
        <li class="border-b last:border-b-0 border-gray-200 p-4 flex items-start justify-between">
            <div>
                <span class="inline-block text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                    出品者：{{ $product->user->name }}
                </span>
                <p class="text-blue-500">{!! nl2br(e($product->product_name)) !!}</p>
                <p class="text-gray-600">{!! nl2br(e($product->description)) !!}</p>
                <p class="text-red-500">￥{!! nl2br(e($product->price)) !!}</p>
                <x-product.images :images="$product->images"/>
            </div>
            <div>
                <!-- TODO 編集と削除 -->
                <x-product.options :productId="$product->id" :userId="$product->user_id"></x-product.options>
            </div>
        </li>
        @endforeach
    </ul>
    {{ $products->appends(request()->input())->links() }}


</div>
