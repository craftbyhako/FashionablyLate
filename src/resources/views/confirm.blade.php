@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')


    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/store" method="POST">
        @csrf

        <!-- 隠しフィールドでフォームデータを保持 -->
        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
        <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
        <input type="hidden" name="email" value="{{ $contact['email'] }}">
        <input type="hidden" name="area-code" value="{{ $contact['area-code'] }}">
        <input type="hidden" name="first_part" value="{{ $contact['first_part'] }}">
        <input type="hidden" name="second_part" value="{{ $contact['second_part'] }}">
        <input type="hidden" name="address" value="{{ $contact['address'] }}">
        <input type="hidden" name="building" value="{{ $contact['building'] }}">
        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
        <input type="hidden" name="detail" value="{{ $contact['detail'] }}">




        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="name" value=" {{ $contact['last_name'] }} {{ $contact['first_name'] }}" readonly/>
                <!-- <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}"> -->

              </td>
            </tr>
           
            <tr class="confirm-table__row">
                <th class="confirm-table__header">性別</th>
                <td class="confirm-table__text">
                @php
                $gender = $contact['gender'] ?? '';
                @endphp
                
                @switch($gender)
                @case(1)
                男性
                @break
                @case(2)
                女性
                @break
                @case(3)
                その他
                @break
                @default
                未選択
                @endswitch
                </td>
            </tr>
            
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] ?? '' }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="tel" name="tel" value="{{ $contact['area-code'] ?? '' }}-{{ $contact['first_part'] ?? '' }}-{{ $contact['second_part'] ?? ''}}" readonly/>
                <input type="hidden" name="tel" value="{{ $contact['area-code'] }}-{{ $contact['first_part'] }}-{{ $contact['second_part'] }}">

              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] ?? '' }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building'] ?? '' }}" readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせの種類</th>
                <td class="confirm-table__text">
                @php
                $categories = [
                1 => '商品のお届けについて',
                2 => '商品の交換について',
                3 => '商品トラブル',
                4 => 'ショップへのお問い合わせ',
                5 => 'その他サービスについて',
                ];
                $category = $categories[$contact['category_id'] ?? '' ] ?? '選択なし';
                @endphp
                 {{ $category }}
                </td>
            </tr>


            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="text" name="detail" value="{{ $contact['detail'] ?? '' }}" readonly/>
              </td>
            </tr>
          </table>
        </div>

        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
          <button class="form__button-correction" type="button" onclick="history.back()">修正</button>
        </div>
      </form>
    </div>
 @endsection