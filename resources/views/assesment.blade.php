<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="{{ asset('img/logo_V.1.0.png')}}"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>@lang('assesment.home-self-assessment.head')</title>

    </head>

    <body>
        @include('partial.header')

        <section class="jumbotron text-center bg-banner bg-banner-3">

                <div class="container">
                    <h1 class="jumbotron-heading color-white">@lang('home.assessment_manu')</h1>
                </div>
         </section>

        <div class="banner"></div>
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-pull-4">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="thumbnail">

                                <div class="title-area center">
                                    <h3> @lang('assesment.home-self-assessment.title')</h3>
                                </div>

                                <div class="caption-full">
                                    <p>@lang('assesment.home-self-assessment.desc')</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="title-area">
                                <h3 class="removeTop">@lang('assesment.home-self-assessment.2nd_title')</h3>
                            </div>

                            <div class="thumbnail">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5">
                                        <img src="http://www.goodaginginplace.com/themes/rainlab-bonjour/assets/images/uploads/31.png" alt="..."
                                             class="image-square">
                                    </div>
                                    <div class="col-lg-8 col-sm-7">
                                    <div class="caption">
                                            <h3>@lang('assesment.home-self-assessment.2nd_topic')</h3>
                                            <p>@lang('assesment.home-self-assessment.2nd_desc')</p>
                                            <p class="pull-right link"><a href="#">@lang('nav.link')</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- <div class="col-md-4 col-md-push-8">

                        <div class="row">
                            <div class="col-md-8">

                                <div class="title-area center">
                                    <h3>@lang('assesment.home-self-assessment.side_title')</h3>
                                </div>

                                <div class="thumbnail">
                                    <div class="row">

                                        <div class="col-lg-5 col-sm-6">
                                            <img src="{{ asset('themes/rainlab-bonjour/assets/images/242x200.svg') }}" alt="..."
                                                 class="image-square-sm">
                                        </div>

                                        <div class="col-lg-7 col-sm-6">
                                            <div class="caption side">
                                                <p>Recent</p>
                                                <p class="pull-right link"><a href="#">@lang('nav.link')</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> --}}


                </div>
            </div>

        </div>

        @include('partial.footer')

    </body>
</html>


