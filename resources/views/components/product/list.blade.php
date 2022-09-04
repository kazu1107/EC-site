@props([
    'products' => []
])
<div class="bg-white rounded-md shadow-lg mt-5 mb-5">
    <ul>
        @foreach($products as $product)
        <li class="border-b last:border-b-0 border-gray-200 p-4 flex items-start justify-between">
            <div>
                <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                    {{ $product->user->name }}
                </span>
                <p class="text-gray-600">{!! nl2br(e($product->product_name)) !!}</p>
                <p class="text-gray-600">{!! nl2br(e($product->description)) !!}</p>
                <x-product.images :images="$product->images"/>
            </div>
            <div>
                <!-- TODO 編集と削除 -->
                <x-product.options :productId="$product->id" :userId="$product->user_id"></x-product.options>
            </div>
        </li>
        @endforeach
    </ul>
</div>
