<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
        @include('partials.head')
        @yield('head_extra')
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
        @include('partials.javascripts')
        @yield('javascript_extra')
    </body>
</html>
