<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
        @include('partial.meta')

    </head>

    <body>
        @include('partial.header')

        {{-- @include('partial.slide') --}}

        <section class="jumbotron text-center bg-banner bg-banner-1">

                <div class="container">
                    <h1 class="jumbotron-heading color-white">@lang('home.banner')</h1>
                </div>
         </section>

        <div class="banner"></div>

        @include('partial.contentHome')

        @include('partial.footer')

    </body>
</html>


