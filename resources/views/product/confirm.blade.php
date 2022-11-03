<x-layout title="POST_CONFIRM | EC2">
    <x-product.header></x-product.header>
    <div class="bg-white">
    <x-layout.single>
        <form method="post" action="{{ route('product.create') }}" enctype="multipart/form-data">
            @csrf
            <table class="mt-3 mb-4 w-full border-collapse rounded border-2 border-stone-200 table table-striped table-hover">

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
            <td class="text-center px-3 py-2 border-2 border-stone-200">{{ $price }}</td>
            </tr>
            <input
                name="price"
                value="{{ $price }}"
                type="hidden">

            <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200"><label>発送方法</label></th>
            <td class="text-center px-3 py-2 border-2 border-stone-200">{{ $postage }}</td>
            </tr>
            <input
                name="postage"
                value="{{ $postage }}"
                type="hidden">

                @if(count($images) > 0)
                {{-- <label>画像</label> --}}
                <div x-data="{}" class="rounded flex justify-center">
                        @foreach($images as $image)
                        <tr>
                        <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200"><label>画像</label></th>
                        <td class="px-3 py-2 border-2 border-stone-200"><img alt="" class="rounded bg-neutral-100 h-48 w-48
                            object-contain mx-auto my-auto" src="{{ asset('storage/images/' . $image->name) }}"></td>
                        </tr>
                        <div class="rounded w-full bg-neutral-100">
                                    {{-- <img alt="" class="rounded bg-neutral-100 h-48 w-48
                                    object-contain mx-auto my-auto" src="{{ asset('storage/images/' . $image->name) }}"> --}}
                                    <input
                                        name="images[]"
                                        value="{{ $image->name }}"
                                        type="hidden"> {{-- fileにするとupした画像の登録はできる --}}
                        </div>
                        @endforeach
                        {{-- <input
                                        name="images[]"
                                        value="{{ $image->name }}"
                                        type="file"
                                        multiple> --}}
                    {{-- </div> --}}
                </div>
                @endif
            </table>

            <div class="p-2 w-full">
                <button class="mt-4 mb-24 flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">送信</button>
            </div>
        </form>
    </x-layout.single>
    </div>
    <x-product.footer></x-product.footer>

</x-layout>
