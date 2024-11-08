<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Login</title>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) ||
        file_exists(public_path('hot'))) @vite(['resources/css/app.css',
        'resources/js/app.js']) @else @endif
        <!--  -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body
        style="width: 100vw; height: 100vh"
        class="d-flex flex-column justify-content-center align-items-center"
    >
        <img
            class="rounded-5 shadow"
            style="width: 50vw"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgmclrsZLGU1kpsOkR6dtKadwm-677hjMD70z05xznaoWSsz2AX5D1bO8U2U2sskejQwc&usqp=CAU"
            alt="logo"
        />
        <header>
            @if (Route::has('login'))
            <nav class="mt-4 d-flex gap-3">
                @auth
                <a href="{{ url('/home') }}" class="btn btn-primary shadow">
                    Home
                </a>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary shadow">
                    Log in
                </a>
                @if (Route::has('register'))
                <a
                    href="{{ route('register') }} "
                    class="btn btn-primary shadow"
                >
                    Register
                </a>
                @endif @endauth
            </nav>
            @endif
        </header>
    </body>
</html>
