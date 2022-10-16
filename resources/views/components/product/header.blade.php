<div class="bg-white">
    <div class="px-3 h-16 flex w-full">
        <a href="/product" class="w-full pl-3">
            <img class="h-16" src="/images/title.png">
        </a>
        <form method="GET" action="{{ route('product.search') }}" class="rounded relative flex justify-end h-10 my-auto mx-5">
            <input class="relative w-48 md:w-96 h-10 rounded" type="text" placeholder="商品名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
            <div class="right-2 h-10 absolute flex my-auto">
                <button type="submit" class="rounded inline-flex justify-center my-auto py-1 px-2 border border-transparent
                shadow-sm text-sm font-medium text-white bg-title_blue hover:bg-blue-600 focus:outline-none
                focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">検索</button>
                {{-- <button>
                    <a href="{{ route('product.index') }}" class="no-underline inline-flex justify-center py-1 px-2
                    border border-transparent shadow-sm text-sm font-medium text-white bg-red-500
                    hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        クリア
                    </a>
                </button> --}}
            </div>
        </form>
        {{-- <div class=" bg-gray-200">
            <div class="container h-screen flex justify-center items-center">
                <div class="relative">
                    <div class="absolute top-4 left-3">
                        <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                    </div>
                <input type="text" class="h-14 w-96 pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none" placeholder="Search anything...">
                    <div class="absolute top-2 right-2">

                        <button class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">Search</button>

                    </div>
                </div>
            </div>
        </div> --}}
        @auth
        <form method="post" action="{{ route('logout') }}" class="w-full pr-3">
            @csrf
            <div class="flex justify-end">
                <button
                        class="text-sm text-gray-500 hover:text-red-500 hover:duration-200 mt-3"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                >ログアウト</button>
                {{-- <img class="mt-3" src="/images/logout.png"> --}}
            </div>
        </form>
        @endauth
        @guest
        <div class="w-full pr-3">
            <div class="flex justify-end">
                <x-element.button-a :href="route('login')">ログイン&nbsp;</x-element.button-a>
                <x-element.button-a :href="route('register')" theme="secondary">会員登録</x-element.button-a>
                {{-- <img class="mt-3" src="/images/header_icon1.png"> --}}
            </div>
        </div>
        @endguest
    </div>
    <div class="w-full h-full md:flex my-0 mx-auto border border-solid
    border-zinc-300 md:pt-2 md:pb-2">
        <div class="md:w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/home.png">
            <a href="/product" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">ホーム</a>
        </div>
        @auth
        <div class="border-t md:border-t-0 border-solid md:w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/login.png">
            <a href="/user" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">マイページ</a>
        </div>
        <div class="border-t md:border-t-0 border-solid md:w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/camera.png">
            <a href="/postform" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">出品</a>
        </div>
        @endauth
        @guest
        <div class="border-t md:border-t-0 border-solid md:w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/login.png">
            <a href="login" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">マイページ</a>
        </div>
        <div class="border-t md:border-t-0 border-solid md:w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/camera.png">
            <a href="login" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">出品</a>
        </div>
        @endguest
        <div class="border-t md:border-t-0 border-solid md:w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/tell.png">
            <a href="/contact" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">お問い合わせ</a>
        </div>
        <div class="border-t md:border-t-0 border-solid md:w-1/5 mx-auto flex justify-center">
            <img class="h-1/2 my-auto px-1" src="/images/privacy.png">
            <a href="/protect" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">利用規約</a>
        </div>
    </div>
    <div class="flex justify-end pr-3">
        <x-product.music></x-product.music>
    </div>
</div>

