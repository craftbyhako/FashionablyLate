@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form">

/* 名前　*/
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="last-name" placeholder="例：山田" />
　　　　<input type="text" name="first-name" placeholder="例：太郎" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

/*　性別　*/
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
        </div>

　　

/*  メアド　　*/
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

　
/* 　電話番号　 */
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



/*　　住所　　*/
　　 <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例：東京都千代田区千駄ヶ谷１－２－３" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>



</div>
<body>
    
</body>
</html>