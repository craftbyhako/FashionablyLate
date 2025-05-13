<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
      <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">FashionablyLate
            </a>
            <nav class="header__nav">
            @if (Auth::check())
                <!-- ログイン中: Logoutボタン -->
                <form class="form" method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="nav__button">Logout</button>
                </form>
            @else
                <!-- 未ログイン: Login/Register -->
                <a href="{{ route('login') }}" class="nav__button">Login</a>
                <a href="{{ route('register') }}" class="nav__button">Register</a>
            @endif
        </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>