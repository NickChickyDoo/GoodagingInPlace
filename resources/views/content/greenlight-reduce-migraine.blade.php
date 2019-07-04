<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <title>@lang('greenlight.title')</title>
    </head>

    <body>
        @include('partial.header')

        <div class="container">
                <p align="center"><strong>@lang('greenlight.title')</strong></p>

                <p><center><img src="http://www.goodaginginplace.com/storage/app/media/content/GreenLight/Greenlight.jpg" style="width: 403px;" class="fr-fic fr-dib" ></center></p>

                <p>
                    <br>
                </p>

                <p data-fulltext="" data-placeholder="Translation" dir="ltr">@lang('greenlight.desc')</p>
        </div>

        @include('partial.footer')

    </body>
</html>
