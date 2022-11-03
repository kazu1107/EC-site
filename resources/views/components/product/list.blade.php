@props([
    'products' => []
])
<div class="flex flex-wrap bg-white mt-3 mx-3">

        @foreach($products as $product)
        <div class="w-4/12 md:w-1/5 p-3">
            <div>
                {{-- <span class="text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                    出品者：{{ $product->user->name }}
                </span> --}}
                <a href="{{ route('product_page.index', ['productId' => $product->id]) }}" class="relative">
                <x-product.images :images="$product->images"/>
                    <div class="absolute bottom-0">
                        <p class="text-white mb-0 font-bold bg-price_color opacity-90 rounded-r-full">￥{!! nl2br(e($product->price)) !!}&nbsp;&nbsp;</p>
                    </div>
                </a>
                <p class="mb-0 truncate">{!! nl2br(e($product->product_name)) !!}</p>
                {{-- <div>{{$product->id}}</div> --}}
                {{-- <p class="text-gray-600">{!! nl2br(e($product->description)) !!}</p> --}}
            </div>
            {{-- <div>
                <!-- TODO 編集と削除 -->
                <x-product.options :productId="$product->id" :userId="$product->user_id"></x-product.options>
            </div> --}}
        </div>
        @endforeach
</div>
<div class="w-full">
    {{ $products->appends(request()->input())->links('vendor.pagination.sample-pagination') }}
</div>

