{{-- @extends('layouts.app') --}}
{{-- <x-guest-layout> --}}
<x-layout title="USER | EC2">
    <x-product.header></x-product.header>
{{-- @section('項目','ユーザー詳細')
@section('content') --}}
{{-- <section> --}}
<x-layout.single>
<div class="text-center mb-4 mt-3 font-bold text-4xl">マイページ
</div>
<div class="flex justify-center w-full">
<div class="flex flex-col w-1/3 rounded border-2 border-menu_logo_color border-solid mb-24 mr-4">
    <div class="font-bold text-center py-2 bg-menu_logo_color">メニュー</div>
    <a href="/user" class="text-blue-500 text-left no-underline hover:text-red-600
                hover:duration-500 py-2 px-3">ユーザー情報</a>
    <a href="/history" class="text-blue-500 text-left no-underline hover:text-red-600
                hover:duration-500 py-2 px-3">注文履歴</a>
</div>
<div class="w-2/3 ml-4">
    <div class="flex justify-center font-bold text-2xl pb-4 mt-3">ユーザー情報</div>
    <div class="container flex justify-center mt-3">
        @if($authUser)
        @if(!empty($user))
        <table class="border-collapse rounded border-2 border-stone-200 table table-striped table-hover">
        {{-- <thead>
            ここに入れた項目は見出しになる
        </thead> --}}
        {{-- <tr>
            <th class="px-5 py-2 border-2 border-stone-200">ID</th>
            <td class="px-5 py-2 border-2 border-stone-200">{{ $user->id }}</td>
        </tr> --}}
        <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200">名前</th>
            <td class="px-3 py-2 border-2 border-stone-200">{{ $user->name }}</td>
        </tr>
        <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200">メール</th>
            <td class="px-3 py-2 border-2 border-stone-200">{{ $user->email }}</td>
        </tr>
        <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200">郵便番号</th>
            <td class="px-3 py-2 border-2 border-stone-200">{{ $user->post_code }}</td>
        </tr>
        <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200">住所</th>
            <td class="px-3 py-2 border-2 border-stone-200">{{ $user->adress }}</td>
        </tr>
        <tr>
            <th class="bg-stone-100 text-left px-3 py-2 border-2 border-stone-200">電話番号</th>
            <td class="px-3 py-2 border-2 border-stone-200">{{ $user->tell }}</td>
        </tr>
        {{-- ここに最下段のコメントアウト部分が入っていた --}}
        </table>
        @endif
        @endif
    </div>
    <div class="text-center text-red-500 pb-4 mt-3 px-3 ">
        ※{{-- パスワードは表示されていませんが、 --}}
        パスワードも変更ボタンから変更できます。
    </div>
    <div class="p-2 w-1/3 mx-auto">
    <a href="/useredit/{{ $user->id }}" class="mb-24 mt-4 flex justify-center mx-auto text-white bg-indigo-500 border-0 py-2 px-4
    focus:outline-none hover:bg-indigo-600 rounded text-lg">変更</a>
    </div>
</div>
</div>
</x-layout.single>
{{-- </section> --}}
{{-- @endsection --}}
    <x-product.footer></x-product.footer>
{{-- </x-guest-layout> --}}
</x-layout>


{{-- <tr>
        <th class="px-3 py-2 border-2 border-stone-200">パスワード</th>
        <td class="px-3 py-2 border-2 border-stone-200">{{ $user->password }}</td>
    </tr> --}}
    {{-- <tr>
        <th>ID</th>
        <th>名前</th>
        <th>アドレス</th>
        <th>郵便番号</th>
        <th>住所</th>
        <th>電話番号</th>
    </tr>
    <tbody>
        <tr>
        <td></td>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->post_code }}</td>
        <td>{{ $user->adress }}</td>
        <td>{{ $user->tell }}</td>
        </tr>
    </tbody> --}}
