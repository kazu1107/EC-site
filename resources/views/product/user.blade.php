{{-- @extends('layouts.app') --}}
<x-guest-layout>
<x-product.header></x-product.header>
{{-- @section('項目','ユーザー詳細')
@section('content') --}}
<section>
<div class="container">
    @if($authUser)
    @if(!empty($user))
    <table class="table table-striped table-hover">
    <thead>
    <tr>
        <th></th>
        <th>ID</th>
        <th>名前</th>
        <th>アドレス</th>
        {{-- <th>郵便番号</th>
        <th>住所</th>
        <th>電話番号</th> --}}
    </tr>
    </thead>
    <tbody>
        <tr>
        <td></td>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        {{-- <td>{{ $user->post_code }}</td>
        <td>{{ $user->adress }}</td>
        <td>{{ $user->tell }}</td> --}}
        </tr>
    </tbody>
    </table>
    @endif
    @endif
</div>
</section>
{{-- @endsection --}}
<x-product.footer></x-product.footer>
</x-guest-layout>
