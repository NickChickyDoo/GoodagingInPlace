<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="icon" type="image/png" href="{{ asset('img/logo_V.1.0.png')}}"/>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <title>@lang('forest.title')</title>
    </head>

    <body>
        @include('partial.header')

        <div class="container" style="font-family: 'Prompt', sans-serif;">
            <p align="center"><strong>@lang('forest.title')</strong></p>

            <p>
                <center>
                    <img alt="" src = "{{ asset('img/forest/japanese-forest-bathing.jpg') }}" width="60%">
                </center>
            </p>

            <p><b>@lang('forest.p0')</b></p>

            <p data-fulltext="" data-placeholder="Translation" dir="ltr">@lang('forest.desc')

	<br>@lang('forest.p1')
	<br>
    <br><strong>Can view the video at the link below:</strong>
    <br>
	<iframe width="1029" height="579" src="https://www.youtube.com/embed/vI7ymWLexyk" frameborder="0" allowfullscreen=""></iframe>
</p>
        </div>

        @include('partial.footer')

    </body>
</html>
