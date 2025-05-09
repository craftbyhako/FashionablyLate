@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="contact-form" action='/confirm' method="post">
        @csrf
{{-- 名前 --}}
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}" />
              <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}" />
            </div>
        </div>
        <div class="form__error">
            @error('last_name')
            {{ $message }}
            @enderror
            @error('first_name')
            {{ $message }}
            @enderror
        <!--バリデーション機能を実装したら記述します。-->
        </div>
    </div>

{{-- 性別 --}}
    <div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
    <label class="gender__label">
        <input type="radio" name="gender" value="1" 
        {{ old('gender', isset($contact['gender']) ? $contact['gender'] : 1) == 1 ? 'checked' : '' }}>
             男性
    </label>
    <label class="gender__label">
    <input type="radio" name="gender" value="2" 
        {{ old('gender', isset($contact['gender']) ? $contact['gender'] : 1) == 2 ? 'checked' : '' }}>
    女性
</label>
<label class="gender__label">
    <input type="radio" name="gender" value="3" 
        {{ old('gender', isset($contact['gender']) ? $contact['gender'] : 1) == 3 ? 'checked' : '' }}>
    その他
</label>
    </div>
</div>
        <div class="form__error">
             @error('gender')
            {{ $message }}
            @enderror
        <!--バリデーション機能を実装したら記述します。-->
        </div>
    </div>

{{-- メアド --}}
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}"/>
            </div>
            <div class="form__error">
                 @error('email')
                {{ $message }}
                @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

{{-- 電話 --}}
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="area-code" placeholder="080" value="{{ old('area-code') }}" />
              <input type="text" name="first_part" placeholder="1234" value="{{ old('first_part') }}" />
              <input type="text" name="second_part" placeholder="5678" value="{{ old('second_part') }}" />
            </div>
            <div class="form__error">
                 @error('tel')
                {{ $message }}
                @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>



{{-- 住所 --}}
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例：東京都千代田区千駄ヶ谷１－２－３" value="{{ old('address') }}" />
            </div>
        </div>
        <div class="form__error">
            @error('address')
            {{ $message }}
            @enderror
              <!--バリデーション機能を実装したら記述します。-->
        </div>
    </div>

{{-- 建物名 --}}
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">建物名</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例：千駄ヶ谷マンション１０１" value="{{ old('building') }}" />
            </div>
        </div>
        <div class="form__error">
             
              <!--バリデーション機能を実装したら記述します。-->
        </div>
    </div>

    {{-- お問合せの種類 --}}
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <select class="category__group" name="category_id" required>
            <option value="" disabled {{ old('category_id') === null ? 'selected' : '' }}>選択してください</option>
            <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>商品のお届けについて</option>
            <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>商品の交換について</option>
            <option value="3" {{ old('category_id') == 3 ? 'selected' : '' }}>商品トラブル</option>
            <option value="4" {{ old('category_id') == 4 ? 'selected' : '' }}>ショップへのお問い合わせ</option>
            <option value="5" {{ old('category_id') == 5 ? 'selected' : '' }}>その他サービスについて</option>
            </select>
        </div>
    </div>
            <div class="form__error">
                 @error('category_id')
                {{ $message }}
                @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

{{-- お問合せ内容 --}}
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="お問合わせ内容をご記載ください">{{ old('detail') }}</textarea>

            </div>
        </div>
    </div>
    <div class="form__error">
                 @error('detail')
                {{ $message }}
                @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        
{{-- ボタン --}}
    <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
