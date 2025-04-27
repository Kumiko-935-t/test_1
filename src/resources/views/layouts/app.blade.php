<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
        <a class="header__logo" href="/">
        Fashionably Late
        </a>

        @auth
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit" style="background:none; border:none; color:blue; cursor:pointer;">
                logout
            </button>
        </form>
        @endauth
        </div>
    </header>

    <main>
    @yield('content')
    </main>
</body>

</html>
