<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
        @include('partial.meta')

    </head>

    <body>

        @include('partial.header')


        @include('partial.contentHome')

        @include('partial.footer')

    </body>
</html>


