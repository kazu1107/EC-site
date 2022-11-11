<x-layout title="ERROR | EC2">
    <x-product.header></x-product.header>
    <div class="bg-white">
    <x-layout.single>
        <div class="rounded border-4 border-stone-200 border-solid text-center mt-4 mb-24">
            <div class="pt-4 mb-12 font-bold text-3xl">決済処理でエラーが発生しました。</div>
            <div class="mb-4">お手数ですが、もう一度商品ページから購入手続きをしてください。</div>
            <div class="px-2 py-4 w-1/3 mx-auto">
                <a href="/product" class="flex justify-center mx-auto text-white bg-indigo-500 border-0 py-2 px-4
                focus:outline-none hover:bg-indigo-600 rounded text-lg">TOPへ戻る</a>
            </div>
        </div>
    </x-layout.single>
    </div>
    <x-product.footer></x-product.footer>

</x-layout>
