@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')
    <div class="thanks__wrapper">
        <div class="thanks__content">
            Thank you
            <div class="thanks__group">
                <div class="thanks__heading">
                 <h2>お問い合わせありがとうございます</h2>
                </div>
        
      <!-- <div class="background">
        Thank you -->
                <div class="form__button">
                    <button class="form__button-submit" type="button" onclick="redirectHome()">HOME</button>
                </div>
            </div>
        </div>
    </div>
  </main>
</body>

</html>

@endsection
