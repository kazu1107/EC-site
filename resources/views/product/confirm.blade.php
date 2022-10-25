<x-layout title="POST_CONFIRM | EC2">
    <x-product.header></x-product.header>
    <div class="bg-white">
    <x-layout.single>
        {{-- <div class="bg-white mt-3 mb-24">
                                {!! Form::open(['url' => '/product/create',
                                                'class' => 'form-horizontal',
                                                'id' => 'post-input']) !!}

                                @foreach($product->getAttributes() as $key => $value)
                                    @if(isset($value))
                                        @if(is_array($value))
                                            @foreach($value as $subValue)
                                                <input name="{{ $key }}[]" type="hidden" value="{{ $subValue }}">
                                            @endforeach
                                        @else
                                            {!! Form::hidden($key, $value) !!}
                                        @endif

                                    @endif
                                @endforeach

                                {!! Form::submit('戻る', ['name' => 'action', 'class' => 'btn']) !!}
                                {!! Form::submit('送信', ['name' => 'action', 'class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
        </div> --}}
        <form method="POST" action="{{ route('product.create') }}">
            @csrf

            <label>商品名</label>
            {{ $product_name }}
            <input
                name="product_name"
                value="{{ $product_name }}"
                type="hidden">

            <label>商品説明</label>
            {{ $product_description }}
            <input
                name="product_description"
                value="{{ $product_description }}"
                type="hidden">


            <label>価格</label>
            {{ $price }}
            <input
                name="price"
                value="{{ $price }}"
                type="hidden">

            <label>発送方法</label>
            {{ $postage }}
            <input
                name="postage"
                value="{{ $postage }}"
                type="hidden">

                @if(count($images) > 0)
                <div x-data="{}" class="rounded flex justify-center">
                    {{-- <div class="flex justify-center -mx-2"> --}}
                        @foreach($images as $image)
                        <div class="rounded w-full bg-neutral-100">
                            {{-- <div class="bg-gray-400"> --}}
                                {{-- <a @click="$dispatch('img-modal', {  imgModalSrc: '{{ asset('storage/images/' . $image->name)  }}' })" class="cursor-pointer"> --}}
                                    {{-- <img src="{{ $image }}"> --}}
                                    <img alt="{{ $imageModel->name }}" class="rounded bg-neutral-100 h-48 w-48
                                    object-contain mx-auto my-auto" src="{{ asset('storage/images/' . $imageModel->name) }}">
                                    <input
                                        name="images"
                                        value="{{ $image }}"
                                        type="hidden">
                                {{-- </a> --}}
                            {{-- </div> --}}
                        </div>
                        @endforeach
                    {{-- </div> --}}
                </div>
                @endif
            {{-- {{ $images }}
            <input
                name="images"
                value="{{ $images }}"
                type="hidden"> --}}
            {{-- @foreach($images as $image)
            <p class="mb-0 truncate">{!! nl2br(e($image)) !!}</p>
            @endforeach --}}


            <button type="submit" name="action" value="submit">
                送信する
            </button>
        </form>
    </x-layout.single>
    </div>
    <x-product.footer></x-product.footer>

</x-layout>
