<div>
    <div class="px-5 h-16 flex w-full h-16">
        <img class="" src="/images/title.png">
        <form method="GET" action="{{ route('product.search') }}" class="flex justify-end h-1/2 my-auto w-full mx-5">
            <input class="relative w-full mx-5" type="text" placeholder="商品名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
            <div class="absolute flex my-auto mx-5">
                <button type="submit" class="inline-flex justify-center py-1 px-2 border border-transparent
                shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none
                focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">検索</button>
                <button>
                    <a href="{{ route('product.index') }}" class="no-underline inline-flex justify-center py-1 px-2
                    border border-transparent shadow-sm text-sm font-medium text-white bg-red-500
                    hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        クリア
                    </a>
                </button>
            </div>
        </form>
        @auth
        <form method="post" action="{{ route('logout') }}" class="w-3/12">
            @csrf
            <div class="flex justify-end">
                <button
                        class="text-sm text-gray-500 hover:text-red-500 hover:duration-200 mt-3"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                >ログアウト</button>
                <img class="mt-3" src="/images/logout.png">
            </div>
        </form>
        @endauth
        @guest
        <div class="flex justify-end">

            <div class="flex">
                <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
                <x-element.button-a :href="route('register')" theme="secondary">会員登録</x-element.button-a>
                <img class="mt-3" src="/images/logout.png">

            </div>
        </div>
        @endguest
    </div>
    <div class="w-full h-full flex my-0 mx-auto border border-solid
    border-zinc-300 pt-2 pb-2">
        <div class="w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/home.png">
            <a href="" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">ホーム</a>
        </div>
        <div class="w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/login.png">
            <a href="" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">マイページ</a>
        </div>
        <div class="w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/camera.png">
            <a href="" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">出品</a>
        </div>
        <div class="w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/tell.png">
            <a href="" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">お問い合わせ</a>
        </div>
        <div class="w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/privacy.png">
            <a href="" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">個人情報保護方針</a>
        </div>
    </div>
    <div class="flex justify-end">
        <x-product.music></x-product.music>
    </div>
</div>
