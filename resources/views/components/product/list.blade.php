@props([
    'products' => []
])
<div class="flex flex-wrap bg-white shadow-lg mx-3 mt-3">

        @foreach($products as $product)
        <div class="w-1/5 p-3">
            <div>
                {{-- <span class="text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                    出品者：{{ $product->user->name }}
                </span> --}}

                <x-product.images :images="$product->images"/>
                <p class="mb-0">{!! nl2br(e($product->product_name)) !!}</p>
                {{-- <p class="text-gray-600">{!! nl2br(e($product->description)) !!}</p> --}}
                <p class="text-white mb-0 font-bold bg-price_color opacity-75 rounded-r-full">￥{!! nl2br(e($product->price)) !!}</p>
            </div>
            {{-- <div>
                <!-- TODO 編集と削除 -->
                <x-product.options :productId="$product->id" :userId="$product->user_id"></x-product.options>
            </div> --}}
        </div>
        @endforeach

    {{ $products->appends(request()->input())->links() }}


</div>
