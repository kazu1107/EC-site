<div>
    <div class="bg-stone-100 flex w-full px-3">
        <div class="w-3/12 flex flex-col my-0 pt-4 pb-4 px-3">
            <div class="">
                <div class="no-underline text-black text-lg font-bold">外部リンク</div>
            </div>
            <div class="">
                <a href="https://github.com/kazu1107" class="underline text-black hover:text-red-600
                hover:duration-500 hover:underline-offset-4">Github</a>
            </div>
        </div>
        <div class="w-3/12 flex flex-col my-0 pt-4 pb-4 px-3">
            <div class="">
                <div class="no-underline text-black text-lg font-bold">メニュー</div>
            </div>
            <div class="">
                <a href="/product" class="underline text-black hover:text-red-600
                hover:duration-500 hover:underline-offset-4">ホーム</a>
            </div>
            @auth
            <div class="">
                <a href="/user" class="underline text-black hover:text-red-600
                hover:duration-500 hover:underline-offset-4">マイページ</a>
            </div>
            <div class="">
                <a href="/postform" class="underline text-black hover:text-red-600
                hover:duration-500 hover:underline-offset-4">出品</a>
            </div>
            @endauth
            @guest
            <div class="">
                <a href="login" class="underline text-black hover:text-red-600
                hover:duration-500 hover:underline-offset-4">マイページ</a>
            </div>
            <div class="">
                <a href="login" class="underline text-black hover:text-red-600
                hover:duration-500 hover:underline-offset-4">出品</a>
            </div>
            @endguest
            <div class="">
                <a href="/contact" class="underline text-black hover:text-red-600
                hover:duration-500 hover:underline-offset-4">お問い合わせ</a>
            </div>
            <div class="">
                <a href="/protect" class="underline text-black hover:text-red-600
                hover:duration-500 hover:underline-offset-4">利用規約</a>
        </div>
    </div>
</div>
<div class="bg-stone-100 flex h-20 w-full border-t">
    <a href="https://github.com/kazu1107" class="h-8 my-auto pl-3 w-full">
        <img class="h-8 pl-3" src="/images/github.png">
    </a>
    <div class="h-20 flex justify-end pr-4 w-full">
            <div class="text-gray-500 text-sm my-auto pr-4">Copyright © 2022 - <?php echo date('Y'); ?> ONZE. All Rights Reserved.</div>
    </div>
</div>
