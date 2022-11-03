<x-layout title="PRODUCT_PAGE | EC2">
    <x-product.header></x-product.header>
    <div class="bg-white">
        @foreach($images as $image)
        <img alt="" class="rounded bg-neutral-100 h-48 w-48
                                object-contain mx-auto my-auto" src="{{ asset('storage/images/' . $image->name) }}">
        @endforeach
    {{-- <x-layout.single>
        <div class="bg-white my-3">
            <x-product.form.post></x-product.form.post>
        </div>
    </x-layout.single> --}}
    <div>{!! nl2br(e($product->product_name)) !!}</div>
    <div>{!! nl2br(e($product->description)) !!}</div>
    <div>{!! nl2br(e($product->price)) !!}</div>
    <div>{!! nl2br(e($product->postage)) !!}</div>
    {{-- <div>{!! nl2br(e($images->name)) !!}</div> --}}

    </div>
    <x-product.footer></x-product.footer>
    {{-- </a> --}}

</x-layout>
