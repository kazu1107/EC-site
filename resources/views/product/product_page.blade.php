

<x-layout title="PRODUCT_PAGE | EC2">
    <x-product.header></x-product.header>
    <div class="bg-white w-full flex px-3 pt-4 pb-24">

        <div class="w-1/2 px-3 flex flex-wrap h-1/2">
            {{-- @foreach($images as $image)
            <div class="w-1/2">
                <img alt="" class="rounded bg-neutral-100
                            object-contain mx-auto my-auto" src="{{ asset('storage/images/' . $image->name) }}">
            </div>
            @endforeach --}}

            <x-product.listimages :images="$images"></x-product.listimages>
        </div>
    {{-- <x-layout.single>
        <div class="bg-white my-3">
            <x-product.form.post></x-product.form.post>
        </div>
    </x-layout.single> --}}

    <div class="w-1/2 pl-24 pr-3">
        <div class="py-2 font-bold text-3xl">{!! nl2br(e($product->product_name)) !!}</div>
        <div class="flex">
        <div class="py-2 text-red-500 font-bold text-2xl">￥{{$product->price}}</div>
        <div class="py-2 my-auto">(税込) 送料込み</div>
        </div>
        <div class="py-2 w-full">
            <button class="w-full my-4 flex justify-center mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">商品を購入する</button>
        </div>
        <div class="py-2 text-stone-500 font-bold text-2xl">商品の説明</div>
        <div class="py-2">{!! nl2br(e($product->description)) !!}</div>
        <div class="py-2">発送方法：{!! nl2br(e($product->postage)) !!}</div>
    </div>
    {{-- <div>{!! nl2br(e($images->name)) !!}</div> --}}

    </div>
    <x-product.footer></x-product.footer>
    {{-- </a> --}}

</x-layout>

