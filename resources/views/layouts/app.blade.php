<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <div class="header">
            <a class="navlink" href="{{ url('/') }}"><div class="header_logo">Foodie </div></a>
            <div class="header_nav">
                <a class="navlink" href="{{ url('/home') }}"><div class="header_navlinks">Sign In</div></a>
                <a class="navlink" href="{{ url('/menu') }}"><div class="header_navlinks">Menu</div></a>
            </div>
        </div>
        @include('inc.messages')
        @yield('content')
    </body>
</html>
