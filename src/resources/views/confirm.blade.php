@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">

<div class="confirm__heading">
    <h2>Confirm</h2>
</div>

<form class="form" action="/thanks" method="post">
    @csrf
    <div class="confirm-table">
        <table class="confirm-table__inner">
            <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前</th>
            <td class="confirm-table__text">
            {{ $inputs['last_name'] }} {{ $inputs['first_name'] }}
        <input type="hidden" name="last_name" value="{{ $inputs['last_name'] }}">
        <input type="hidden" name="first_name" value="{{ $inputs['first_name'] }}">
        </td>
        </tr>

<tr class="confirm-table__row">
  <th class="confirm-table__header">性別</th>
  <td class="confirm-table__text">
    @php
      $gender = ['1' => '男性', '2' => '女性', '3' => 'その他'];
    @endphp
    {{ $gender[$inputs['gender']] }}
    <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
  </td>
</tr>

<tr>
  <th>メールアドレス</th>
  <td>
    {{ $inputs['email'] }}
    <input type="hidden" name="email" value="{{ $inputs['email'] }}">
  </td>
</tr>

<tr>
  <th>電話番号</th>
  <td>
    {{ $inputs['tel1'] }}-{{ $inputs['tel2'] }}-{{ $inputs['tel3'] }}
    <input type="hidden" name="tel1" value="{{ $inputs['tel1'] }}">
    <input type="hidden" name="tel2" value="{{ $inputs['tel2'] }}">
    <input type="hidden" name="tel3" value="{{ $inputs['tel3'] }}">
  </td>
</tr>

<tr>
  <th>住所</th>
  <td>
    {{ $inputs['address'] }}
    <input type="hidden" name="address" value="{{ $inputs['address'] }}">
  </td>
</tr>

<tr>
  <th>建物名</th>
  <td>
    {{ $inputs['building'] }}
    <input type="hidden" name="building" value="{{ $inputs['building'] }}">
  </td>
</tr>

<tr>
  <th>お問い合わせの種類</th>
  <td>
    @php
      $categories = ['1' => '商品について', '2' => '配送について'];
    @endphp
    {{ $categories[$inputs['category_id']] }}
    <input type="hidden" name="category_id" value="{{ $inputs['category_id'] }}">
  </td>
</tr>

<tr>
  <th>お問い合わせ内容</th>
  <td>
    {{ $inputs['detail'] }}
    <input type="hidden" name="detail" value="{{ $inputs['detail'] }}">
  </td>
</tr>

      </table>
    </div>
    <div class="form__button">
      <a href="{{ url('/thanks')}}" class="form__button-submit" type="submit">送信</a>
      <a href="{{ url('/') }}" class="form__button-submit">修正</a>

    </div>
  </form>
</div>
@endsection
