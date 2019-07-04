<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="icon" type="image/png" href="{{ asset('img/logo_V.1.0.png')}}"/>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <title>@lang('aipet.title')</title>
    </head>

    <body>
        @include('partial.header')

        <div class="container">
            <p align="center"><strong>@lang('aipet.title')</strong></p>

            <p>
                <center>
                    <img alt="" src = "http://www.boloblog.com/wp-content/uploads/2017/11/sony_aibo_playing_reuters_1509533598683.jpg" width="60%">
                </center>
            </p>

            <p data-fulltext="" data-placeholder="Translation" dir="ltr">@lang('aipet.desc')
                <br>
                <br><strong>@lang('aipet.ps1')</strong>
                <br>
                <br>
                <iframe width="1029" height="579" src="https://www.youtube.com/embed/80z8DREmXSc" frameborder="0" allowfullscreen=""></iframe>
            </p>
        </div>

        @include('partial.footer')

    </body>
</html>
