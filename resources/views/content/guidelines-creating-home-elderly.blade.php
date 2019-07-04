<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <title>@lang('buildHome.title')</title>
    </head>

    <body>
        @include('partial.header')
        <div class="container">
                <p>
                        <center>
                            <img alt="" src = "{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home1.jpg') }}" width="100%">
                        </center>
                    </p>

                    <h2><strong>@lang('buildHome.h2')</strong></h2>

                    <p>
                        @lang('buildHome.p1')
                    </p><br>

                    <p>
                        <center>
                            <img alt="" src = "{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home2.jpg') }}" width="60%">
                        </center>
                    </p>

                    <p>
                        <strong>@lang('buildHome.ps2')</strong>
                    </p>
                    <p>
                        @lang('buildHome.p2')
                    </p><br>

                    <p>
                        <center>
                            <img alt="" src = "{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home3.jpeg') }}" width="60%">
                        </center>
                    </p>

                    <p>
                        <strong>@lang('buildHome.ps3')</strong>
                    </p>
                    <p>
                        @lang('buildHome.p3')
                    </p>

                    <p>
                        <strong>@lang('buildHome.ps4-1')</strong> @lang('buildHome.p4-1')<br>
                        <strong>@lang('buildHome.ps4-2')</strong> @lang('buildHome.p4-2')<br>
                        <strong>@lang('buildHome.ps4-3')</strong> @lang('buildHome.p4-3')
                    </p>

                    <p>
                        <center>
                            <img alt="" src = "{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home4.jpg') }}" width="60%">
                        </center>
                    </p>

                    <p>
                        <strong>@lang('buildHome.ps5')</strong>
                    </p>
                    <p>
                        @lang('buildHome.p5')
                    </p>

                    <p>
                        <center>
                            <img alt="" src = "{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home5.jpg') }}" width="60%">
                        </center>
                    </p>

                    <p>
                        <strong>@lang('buildHome.ps6')</strong>
                    </p>
                    <p>
                        @lang('buildHome.p6')
                    </p>

                    <p>
                        <center>
                            <img alt="" src = "{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home6.jpg') }}" width="60%">
                        </center>
                    </p>

                    <p>
                        <strong>@lang('buildHome.ps7')</strong>
                    </p>
                    <p>
                        @lang('buildHome.p7')
                    </p>

                    <p>
                        <center>
                            <img alt="" src="{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home7.jpg') }}" width="60%">
                        </center>
                    </p>

                    <p>
                        <strong>@lang('buildHome.ps8')</strong>
                    </p>
                    <p>
                        @lang('buildHome.p8')
                    </p>

                    <p>
                        <strong>@lang('buildHome.ps9')</strong>
                    </p>
                    <p>
                        @lang('buildHome.p9')
                    </p>

                    <p>
                        <center>
                            <img alt="" src="{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home8.jpg') }}" width="60%">
                        </center>
                    </p>
                    <p>
                        <center>
                            <img alt="" src="{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home9.jpg') }}" width="60%">
                        </center>
                    </p>
                    <p>
                        <center>
                            <img alt="" src="{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home10.jpg') }}" width="60%">
                        </center>
                    </p>
                    <p>
                        <center>
                            <img alt="" src="{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home11.jpg') }}" width="60%">
                        </center>
                    </p>

                    <p>References : <a href ="https://www.baanlaesuan.com/129438/ideas/elder_house-2">https://www.baanlaesuan.com/129438/ideas/elder_house-2</a></p>
        </div>

        @include('partial.footer')

    </body>
</html>
