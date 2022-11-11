<x-layout title="BUY_CONFIRM | EC2">
    <x-product.header></x-product.header>
    <div class="bg-white mt-4 mb-24">
    <x-layout.single>
        {{-- <form method="post" action="{{ route('product.buy') }}" enctype="multipart/form-data"> --}}
            {{-- <x-product.credit></x-product.credit> --}}
            <div class="text-center mb-4 mt-3 font-bold text-4xl">購入履歴
            </div>
            <div class="flex justify-center w-full">
                <div class="flex flex-col w-1/3 rounded border-2 border-menu_logo_color border-solid mr-4">
                    <div class="font-bold text-center py-2 bg-menu_logo_color">メニュー</div>
                    <a href="/user" class="text-blue-500 text-left no-underline hover:text-red-600
                                hover:duration-500 py-2 px-3">ユーザー情報</a>
                    <a href="/history" class="text-blue-500 text-left no-underline hover:text-red-600
                                hover:duration-500 py-2 px-3">注文履歴</a>
                </div>
                <div class="w-2/3 ml-4">
                    <div class="flex justify-center font-bold text-2xl pb-4 mt-3">購入履歴一覧</div>
                    <div class="container flex flex-wrap justify-center mt-3">
                        @if($posts->count() > 0)
                        @foreach($posts as $post)
                        <table class="mb-4 border-collapse rounded border-2 border-stone-200 table table-striped table-hover">

                        <tr>
                            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200">商品名</th>
                            <td class="px-3 py-2 border-2 border-stone-200">{{ $post->product_name }}</td>
                        </tr>
                        <tr>
                            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200">商品説明</th>
                            <td class="px-3 py-2 border-2 border-stone-200">{{ $post->description }}</td>
                        </tr>
                        <tr>
                            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200">価格</th>
                            <td class="px-3 py-2 border-2 border-stone-200">{{ $post->price }}</td>
                        </tr>
                        <tr>
                            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200">発送方法</th>
                            <td class="px-3 py-2 border-2 border-stone-200">{{ $post->postage }}</td>
                        </tr>
                        <tr>
                            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200">商品購入日</th>
                            <td class="px-3 py-2 border-2 border-stone-200">{{ $post->updated_at }}</td>
                        </tr>
                        {{-- ここに最下段のコメントアウト部分が入っていた --}}
                        </table>
                        @endforeach
                        @endif
                    </div>
                    @if($posts->count() < 1)
                        <div>
                            購入履歴がありません
                        </div>
                    @endif
                </div>
            </div>
            {{-- <div class="p-2 w-full">
                <button class="mt-4 mb-24 flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">購入</button>
            </div> --}}
        {{-- </form> --}}
    </x-layout.single>
    </div>
    <x-product.footer></x-product.footer>

</x-layout>
