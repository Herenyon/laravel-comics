<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DC Store</title>
        <link rel="icon" type="image/x-icon" href="resources/img/favicon.ico">
         @vite('resources/js/app.js')
    </head>
    
    <body>
        @include('partials.header')
       <main>
        <section class="container-comic">

        </section>

        @yield('page.main')

       </main>
       @include('partials.footer')
    </body>
</html>

