<x-layout title="USEREDIT | EC2">
    <x-product.header></x-product.header>
    <div class="bg-white">
    <x-layout.single>
        <div class="{{-- rounded border-4 border-stone-200 border-solid mt-3 mb-24 --}} mx-4">
            <div class="flex justify-center font-bold text-2xl pb-4 mt-3">お客様情報変更</div>
            <form action="{{ route('product.postuseredit', ['id' => $user->id]) }}"
            method="post">
            @if(session('warning'))
                <div class="alert alert-danger">
                    {{ session('warning') }}
                </div>
            @endif
            @csrf
            {{-- <p>ID: {{ $user->id }}</p> --}}
            <input type="hidden" name="id" value="{{ $user->id }}" />

            <div class="flex justify-center w-full">
                <div>
                    <div class="flex justify-center">
                        <div class="pr-12">
                            <p class="py-2">名前</p>
                            <input class="rounded" type="text" name="name" value="{{ $user->name }}" />
                        </div>
                        <div class="pl-12">
                            <p class="py-2">メール</p>
                            <input class="rounded" type="text" name="email" value="{{ $user->email }}" />
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="pr-12">
                            <p class="py-2">郵便番号</p>
                            <input class="rounded" type="number" name="post_code" value="{{ $user->post_code }}" />

                        </div>
                        <div class="pl-12">
                            <p class="py-2">住所</p>
                            <input class="rounded" type="text" name="adress" value="{{ $user->adress }}" />
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="pr-12">
                            <p class="py-2">電話番号</p>
                            <input class="rounded" type="number" name="tell" value="{{ $user->tell }}" />
                        </div>
                        <div class="pl-12">
                            <p class="py-2">現在のパスワード</p>
                            <input class="rounded" type="password" name="current_password" value="" />
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="pr-12">
                            <p class="py-2">新しいパスワード</p>
                            <input class="rounded" type="password" name="new_password" value="" />
                        </div>
                        <div class="pl-12">
                            <p class="py-2">新しいパスワードの再入力</p>
                            <input class="rounded" type="password" name="new_password" value="" /><br>
                        </div>
                    </div>
                    {{-- <input type="submit" value="更新" /> --}}
                    <button type="submit" class="mb-24 mt-4 flex justify-center mx-auto text-white bg-indigo-500 border-0 py-2 px-8
                    focus:outline-none hover:bg-indigo-600 rounded text-lg">
                    更新</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </x-layout.single>
    </div>
    <x-product.footer></x-product.footer>
</x-layout>
