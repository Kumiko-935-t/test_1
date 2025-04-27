@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="admin-page">
    <h2>Admin</h2>


    <section class="admin-search" style="padding: 1rem;">
    <form action="{{ route('admin') }}" method="GET" style="display: flex; flex-wrap: wrap; gap: 1rem;">
        <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください">

        <select name="gender">
            <option value="">性別</option>
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="3">その他</option>
        </select>

        <select name="category">
            <option value="">お問い合わせの種類</option>
            <option value="">商品のお届けについて</option>
            <option value="">商品のお届けについて</option>
            <option value="">商品トラブル</option>
            <option value="">ショップへの問い合わせ</option>
            <option value="">その他</option>

        </select>

        <input type="date" name="date">

        <button type="submit">検索</button>
        <a href="{{ route('admin') }}">リセット</a>
    </form>
</section>
@endsection