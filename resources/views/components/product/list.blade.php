@props([
    'products' => []
])
<div class="flex flex-wrap bg-white shadow-lg mx-3 mt-3">

        @foreach($products as $product)
        <div class="w-3/12 p-1">
            <div>
                {{-- <span class="text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                    出品者：{{ $product->user->name }}
                </span> --}}
                <p class="text-blue-500 mb-0 font-bold bg-neutral-200">{!! nl2br(e($product->product_name)) !!}</p>
                <x-product.images :images="$product->images"/>

                {{-- <p class="text-gray-600">{!! nl2br(e($product->description)) !!}</p> --}}
                <p class="text-red-500 mb-0 font-bold bg-neutral-200">￥{!! nl2br(e($product->price)) !!}</p>
            </div>
            {{-- <div>
                <!-- TODO 編集と削除 -->
                <x-product.options :productId="$product->id" :userId="$product->user_id"></x-product.options>
            </div> --}}
        </div>
        @endforeach

    {{ $products->appends(request()->input())->links() }}


</div>
