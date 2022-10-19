<div class="p-4">
    <div class="text-center font-bold text-4xl mb-4">出品フォーム</div>
    <form action="{{ route('product.confirm') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mt-1">商品名</div>
        <div class="mt-1">
            <textarea
                name="product_name"
                rows="1"
                class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded p-2"
                placeholder="商品名を入力"></textarea>
        </div>
        <p class="mt-1 mb-3 text-sm text-gray-500">
            40文字まで
        </p>
        <div class="mt-1">商品説明</div>
        <div class="mt-1">
            <textarea
                name="product_description"
                rows="3"
                class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded p-2"
                placeholder="商品説明を入力"></textarea>
        </div>
        <p class="mt-1 mb-3 text-sm text-gray-500">
            255文字まで
        </p>
        <div class="mt-1">価格</div>
        <div class="mt-1">
            <textarea
                name="price"
                rows="1"
                class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded p-2"
                placeholder="価格を入力"></textarea>
        </div>
        <p class="mt-1 mb-3 text-sm text-gray-500">
            100円～10万円まで
        </p>
        <div class="mt-1">
            <label>{{ __('発送方法(出品者様のご負担となります)') }}
            <div class="form-check form-check-inline mt-1">
                <label><input type="radio" name="postage" class="form-check-input" value="ネコポス" {{ old ('release') == 'ネコポス' ? 'checked' : '' }} checked>
                ネコポス(送料￥200)</label>
            </div>
            <div class="form-check form-check-inline mt-1 mb-3">
                <label><input type="radio" name="postage" class="form-check-input" value="宅急便" {{ old ('release') == '宅急便' ? 'checked' : '' }}>
                宅急便(送料￥700)</label>
            </div>
            </label>
        </div>
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
        @error('postage')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror

        <div class="flex flex-wrap justify-end">
            <x-element.button>
                出品
            </x-element.button>
        </div>
    </form>
</div>
