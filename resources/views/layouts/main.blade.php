<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>@yield('title', 'La Molisana') - sito ufficiale</title>
    </head>
    <body>
        @include('Partials.header')
        <main>
            @yield('mainContent')
        </main>
        @include('Partials.footer')
    </body>
</html>