@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせありがとうございました</h2>
      </div>
      <div class="form__button">
      <a href="{{ url('/')}}" class="form__button-submit" type="submit">HOME</a>
@endsection