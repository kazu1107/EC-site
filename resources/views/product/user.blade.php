{{-- @extends('layouts.app') --}}
{{-- <x-guest-layout> --}}
<x-layout title="USER | EC2">
    <x-product.header></x-product.header>
{{-- @section('項目','ユーザー詳細')
@section('content') --}}
{{-- <section> --}}
<x-layout.single>
<div class="flex justify-center font-bold text-2xl pb-4">マイページ</div>
<div class="container flex justify-center mt-3 mb-24">
    @if($authUser)
    @if(!empty($user))
    <table class="border-collapse rounded border-2 border-stone-200 table table-striped table-hover">
    {{-- <thead>
        ここに入れた項目は見出しになる
    </thead> --}}
    <tr>
        <th class="px-5 py-2 border-2 border-stone-200">ID</th>
        <td class="px-5 py-2 border-2 border-stone-200">{{ $user->id }}</td>
    </tr>
    <tr>
        <th class="px-5 py-2 border-2 border-stone-200">名前</th>
        <td class="px-5 py-2 border-2 border-stone-200">{{ $user->name }}</td>
    </tr>
    <tr>
        <th class="px-5 py-2 border-2 border-stone-200">アドレス</th>
        <td class="px-5 py-2 border-2 border-stone-200">{{ $user->email }}</td>
    </tr>
    <tr>
        <th class="px-5 py-2 border-2 border-stone-200">郵便番号</th>
        <td class="px-5 py-2 border-2 border-stone-200">{{ $user->post_code }}</td>
    </tr>
    <tr>
        <th class="px-5 py-2 border-2 border-stone-200">住所</th>
        <td class="px-5 py-2 border-2 border-stone-200">{{ $user->adress }}</td>
    </tr>
    <tr>
        <th class="px-5 py-2 border-2 border-stone-200">電話番号</th>
        <td class="px-5 py-2 border-2 border-stone-200">{{ $user->tell }}</td>
    </tr>
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
    </table>
    @endif
    @endif
</div>
</x-layout.single>
{{-- </section> --}}
{{-- @endsection --}}
    <x-product.footer></x-product.footer>
{{-- </x-guest-layout> --}}
</x-layout>
