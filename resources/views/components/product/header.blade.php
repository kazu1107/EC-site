<div>
    <div class="px-5 h-16 flex w-full">
        <h2 class="w-3/12 text-blue-500 text-4xl font-bold my-auto">
            俵屋
        </h2>
        <form method="GET" action="{{ route('product.search') }}" class="flex justify-center h-1/2 my-auto w-full">
            <input class="" type="text" placeholder="商品名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
            <div class="my-auto w-40 pl-1">
                <button type="submit" class="inline-flex justify-center py-1 px-2 border border-transparent
                shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none
                focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">検索</button>
                <button>
                    <a href="{{ route('product.index') }}" class="no-underline inline-flex justify-center py-1 px-2
                    border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500
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
    </div>
    <div class="w-full flex my-0 mx-auto border border-solid
    border-zinc-300 pt-2 pb-2">
        <div class="w-3/12 mx-auto block"><a href="" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">ホーム</a></div>
        <div class="w-3/12 mx-auto block"><a href="" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">マイページ</a></div>
        <div class="w-3/12 mx-auto block"><a href="" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">お問い合わせ</a></div>
        <div class="w-3/12 mx-auto block"><a href="" class="no-underline text-center
            text-black px-0 pt-12px pb-10px block hover:text-red-500 hover:duration-200">個人情報保護方針</a></div>
    </div>
</div>
