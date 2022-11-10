

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
    <form action="{{ route('product.buy') }}" method="POST" {{-- enctype="multipart/form-data" --}} class="w-1/2 pl-24 pr-3">
        @csrf


        <div class="py-2 font-bold text-3xl">{!! nl2br(e($product->product_name)) !!}</div>
        <input
        name="product_name"
        value="{{ $product->product_name }}"
        type="hidden">

        <div class="flex">
        <div class="py-2 text-red-500 font-bold text-2xl">￥{{$product->price}}</div>
        <div class="py-2 my-auto">(税込) 送料込み</div>
        <input
        name="price"
        value="{{ $product->price }}"
        type="hidden">
        </div>

        <div class="py-2 w-full">
            <button class="w-full my-4 flex justify-center mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">商品を購入する</button>
        </div>
        <div class="py-2 text-stone-500 font-bold text-2xl">商品の説明</div>
        <div class="py-2">{!! nl2br(e($product->description)) !!}</div>
        <input
        name="product_description"
        value="{{ $product->description }}"
        type="hidden">

        <div class="py-2">発送方法：{!! nl2br(e($product->postage)) !!}</div>
        <input
        name="postage"
        value="{{ $product->postage }}"
        type="hidden">

        <input
        name="productId"
        value="{{ $productId }}"
        type="hidden">

        @error('product_name')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror
        @error('product_description')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror
        @error('price')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror
        @error('postage')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror


    {{-- <div>{!! nl2br(e($images->name)) !!}</div> --}}




    </form>

    </div>
    <x-product.footer></x-product.footer>
    {{-- </a> --}}

</x-layout>

