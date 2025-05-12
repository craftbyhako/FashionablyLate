@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('content')


    <div class="login__content">
      <div class="login__heading">
        <h2>Login</h2>
      </div>

     @if ($errors->any())
    <div style="color:red;">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('login') }}">
    @csrf
    <label for="email">メールアドレス</label>
    <input type="email" name="email" placeholder="メールアドレス" required><br>

    <label for="password">パスワード</label>
    <input type="password" name="password" placeholder="パスワード" required><br>

    <button type="submit">ログイン</button>
  </form>

@endsection