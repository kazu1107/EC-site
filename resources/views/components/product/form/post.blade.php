@auth
<div class="p-4">
    <form action="{{ route('product.create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mt-1">
            <textarea
                name="product_name"
                rows="1"
                class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"
                placeholder="商品名を入力"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            40文字まで
        </p>
        <div class="mt-1">
            <textarea
                name="product_description"
                rows="3"
                class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 p-2"
                placeholder="商品説明を入力"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            255文字まで
        </p>
        <div class="mt-1">
            <textarea
                name="price"
                rows="1"
                class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 p-2"
                placeholder="価格を入力"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            100円～10万円まで
        </p>
        <x-product.form.images></x-product.form.images>

        @error('product_name')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror
        @error('product_description')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror
        @error('price')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror

        <div class="flex flex-wrap justify-end">
            <x-element.button>
                出品
            </x-element.button>
        </div>
    </form>
</div>
@endauth
@guest
<div class="flex flex-wrap justify-center">
    <div class="w-1/2 p-4 flex flex-wrap justify-evenly">
        <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
        <x-element.button-a :href="route('register')" theme="secondary">会員登録</x-element.button-a>
    </div>
</div>
@endguest
