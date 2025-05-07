@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="contact-form" action='/contacts' method="post">
        @csrf

{{-- 名前 --}}
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="last_name" placeholder="例：山田" />
              <input type="text" name="first_name" placeholder="例：太郎" />
            </div>
        </div>
        <div class="form__error">
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
            <label>
            <input type="radio" name="gender" value="male" /> 男性
            </label>  
            <label>
            <input type="radio" name="gender" value="female" /> 女性
            </label>
            <label>
            <input type="radio" name="gender" value="other" /> その他
            </label>
        </div>
        <div class="form__error">
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
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
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
              <input type="tel" name="area-code" placeholder="080" />
              <input type="text" name="first_part" placeholder="1234"  />
              <input type="text" name="second_part" placeholder="5678" />
            </div>
            <div class="form__error">
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
              <input type="text" name="address" placeholder="例：東京都千代田区千駄ヶ谷１－２－３" />
            </div>
        </div>
        <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
        </div>
    </div>

{{-- 建物名 --}}
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例：千駄ヶ谷マンション１０１" />
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
            <div class="form__input--text">
             <select id="inquiry_type" name="category">
            <option value="" selected disabled>選択してください</option>
            <option value="product">商品のお届けについて</option>
            <option value="service">商品の交換について</option>
            <option value="support"> 商品トラブル</option>
            <option value="shop">ショップへのお問い合わせ</option>
               <option value="other">その他サービスについて</option>
            </select>

            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

{{-- お問合せ内容 --}}
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="お問合わせ内容をご記載ください"></textarea>
            </div>
        </div>
    </div>
        
{{-- ボタン --}}
    <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
</div>
<body>
    
</body>
</html>