@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form action="{{ route('contact.confirm') }}" method="post">
    @csrf

        <div class="form__group">
            <label>お名前 <span class="required">※</span></label>
            <div class="name-inputs">
              <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="例：山田">
              <input type="text" name="first_name" value="{{ old('first_name') }}"placeholder="例：太郎">
            </div>
        </div>
            <div class="form__error">
            @error('last_name')
              <p class="error-message">{{ $message }}</p>
            @enderror

            @error('first_name')
              <p class="error-message">{{ $message }}</p>
            @enderror
            </div>
        </div>

        <div class="form-group">
            <label>性別 <span class="required">※</span></label>
            <div class="gender-options">
              <label><input type="radio" name="gender" value="1" checked="checked"> 男性</label>
              <label><input type="radio" name="gender" value="2"> 女性</label>
              <label><input type="radio" name="gender" value="3"> その他</label>
            </div>
        </div>
            <div class="form__error">
              @error('gender')
              <p class="error-message">{{ $message }}</p>
              @enderror
            </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <label>メールアドレス <span class="required">※</span></label>
              <input type="text" name="email" value="{{ old('email') }}"placeholder="例：test@example.com">
          </div>
          <div class="form__error">
              @error('email')
              <p class="error-message">{{ $message }}</p>
              @enderror
            </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <label>電話番号 <span class="required">※</span></label>
          <div class="tel-inputs">
              <input type="text" name="tel1" value="{{ old('tel1') }}"placeholder="080">
                -
              <input type="text" name="tel2" value="{{ old('tel2') }}"placeholder="1234">
                -
              <input type="text" name="tel3" value="{{ old('tel3') }}"placeholder="5678">
            </div>
            <div class="form__error">
              @error('tel1')
              <p class="error-message">{{ $message }}</p>
              @enderror

              @error('tel2')
              <p class="error-message">{{ $message }}</p>
              @enderror

              @error('tel3')
              <p class="error-message">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group">
            <label>住所 <span class="required">※</span></label>
            <input type="text" name="address" value="{{ old('address') }}"placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
        </div>
        <div class="form__error">
              @error('address')
              <p class="error-message">{{ $message }}</p>
              @enderror
        </div>

        <div class="form-group">
            <label>建物名</label>
            <input type="text" name="building" value="{{ old('building') }}"placeholder="例: 千駄ヶ谷マンション101">
        </div>
        <div class="form__error">
              @error('building')
              <p class="error-message">{{ $message }}</p>
              @enderror
        </div>

        <div class="form-group">
            <label>お問い合わせの種類 <span class="required">※</span></label>
            <select name="category_id">
                <option value="">選択してください</option>
                {{-- @foreach($categories as $category) --}}
                <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>商品について</option>
                <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>配送について</option>
                {{-- @endforeach --}}
            </select>
        </div>
        <div class="form__error">
              @error('category_id')
              <p class="error-message">{{ $message }}</p>
              @enderror
        </div>

        <div class="form-group">
            <label>お問い合わせ内容 <span class="required">※</span></label>
            <textarea name="detail" rows="5" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
        </div>
        <div class="form__error">
              @error('detail')
              <p class="error-message">{{ $message }}</p>
              @enderror
        </div>

        <div class="submit-btn">
            <button type="submit">確認画面</button>
        </div>
      </form>
    </div>
@endsection
