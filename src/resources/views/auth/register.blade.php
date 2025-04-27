@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="login__link">
    <a class="login__button-submit" href="/login">login</a>
</div>
<div class="register-form__content">
  <div class="register-form__heading">
    <h2>Register</h2>
  </div>
  <form class="form" action="/register" method="post">
    @csrf
    <div class="form__group">
            <label>お名前</label>
            <div class="name-inputs">
              <input type="text" name="name" placeholder="例：山田 太郎">

            </div>
        </div>
        <div class="form__error">
          @error('name')
              <p class="error-message">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
          <div class="form__group-title">
            <label>メールアドレス</label>
            <div class="name-inputs">
              <input type="email" name="email" placeholder="例：test@example.com">
          </div>
          </div>

        <div class="form__error">
          @error('email')
              <p class="error-message">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
          <div class="form__group-title">
            <label>パスワード</label>
            <div class="name-inputs">
              <input type="text" name="password" placeholder="例：coachtech1106">
          </div>
        <div class="form__error">
          @error('password')
              <p class="error-message">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>
    
    <div class="form__button">
      <button class="form__button-submit" type="submit">登録</button>
    </div>
  </form>
  
</div>
@endsection