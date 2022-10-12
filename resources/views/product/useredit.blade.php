<x-layout title="USEREDIT | EC2">
    <x-product.header></x-product.header>
    <div class="bg-white">
    <x-layout.single>
        <div class="rounded border-4 border-stone-200 border-solid mt-3 mb-24 mx-4">
            <div class="flex justify-center font-bold text-2xl pb-4 mt-3">お客様情報変更</div>
            <form action=""
            method="post">
            @csrf
            {{-- <p>ID: {{ $user->id }}</p>
            <input type="hidden" name="id" value="{{ $user->id }}" /> --}}

            <div class="flex justify-center">
                <div>
                    <p>名前</p>
                    <input type="text" name="name" value="{{ $user->name }}" />

                    <p>メール</p>
                    <input type="text" name="email" value="{{ $user->email }}" />

                    <p>郵便番号</p>
                    <input type="number" name="post_code" value="{{ $user->post_code }}" />

                    <p>住所</p>
                    <input type="text" name="adress" value="{{ $user->adress }}" />

                    <p>電話番号</p>
                    <input type="number" name="tell" value="{{ $user->tell }}" /><br>

                    <input type="submit" value="更新" />
                    </form>
                </div>
            </div>
            </div>
        </div>
    </x-layout.single>
    </div>
    <x-product.footer></x-product.footer>
</x-layout>
