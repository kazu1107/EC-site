<x-layout title="TOP | EC2">
    <div class="bg-neutral-200">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            WELCOME TO EC2 SITE!!
        </h2>
        <div class="shadow-md bg-white">
            <x-product.form.post></x-product.form.post>
        </div>
        <div class="flex justify-center mt-5">
            <x-product.list :products="$products"></x-product.list>
            <div>
                <x-product.music></x-product.music>
                <form method="GET" action="{{ route('product.search') }}">
                    <input type="text" placeholder="商品名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
                    <div>
                        <button type="submit">検索</button>
                        <button>
                            <a href="{{ route('product.index') }}" class="text-white">
                                クリア
                            </a>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </x-layout.single>
    </div>
</x-layout>
