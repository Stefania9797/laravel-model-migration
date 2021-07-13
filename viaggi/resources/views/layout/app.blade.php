<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="https://www.anywhereviaggi.it/wp-content/uploads/2020/01/logo-anywhere.png" alt="">
            </div>
            <nav>
                <a href="">Home</a>
                <a href="">Agenzia</a>
                <a href="">Destinazioni</a>
                <a href="">Contatti</a>
            </nav>
        </header>
        <main>
        @yield('content')
        </main>
        <footer>

        </footer>
    </body>
</html>