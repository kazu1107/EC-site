<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/product">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                <img class=" h-20 fill-current" src="/images/title.png">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('名前')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('メール')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Post Code -->
            <div class="mt-4">
                <x-label for="post_code" :value="__('郵便番号')" />

                <x-input id="post_code" class="block mt-1 w-full" type="number" name="post_code" :value="old('post_code')" required />

            <!-- Address -->
            <div class="mt-4">
                <x-label for="adress" :value="__('住所')" />

                <x-input id="adress" class="block mt-1 w-full" type="text" name="adress" :value="old('adress')" required />
            </div>

            <!-- Tell -->
            <div class="mt-4">
                <x-label for="tell" :value="__('電話番号')" />

                <x-input id="tell" class="block mt-1 w-full" type="number" name="tell" :value="old('tell')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('パスワードを再入力してください')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('すでに会員登録をされている方はこちら') }}
                </a>

                <x-button class="ml-4">
                    {{ __('会員登録') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
