<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>@lang('insight.insight_head')</title>

    </head>

    <body>
        @include('partial.header')

        <section class="jumbotron text-center bg-banner bg-banner-2">

                <div class="container">
                    <h1 class="jumbotron-heading color-white">@lang('home.news_manu')</h1>
                </div>
         </section>

        <div class="banner"></div>

        <div class="container">

                <div class="row">
                    <div class="col-md-4 col-md-push-8">

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="title-area center">
                                        <div class="caption-full">
                                            <h3>@lang('insight.insight_side_title')</h3> {{-- เนื้อหาล่าสุด --}}
                                        </div>
                                    </div>

                                    <div class="thumbnail">
                                            <div class="row">

                                                <div class="col-lg-5 col-sm-6">
                                                    <img src="{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home1.jpg') }}" alt="..."
                                                        class="image-square-sm">
                                                </div>

                                            <div class="col-lg-7 col-sm-6">
                                                <div class="caption side">
                                                    <b>@lang('buildHome.title')</b>
                                                    <p>@lang('buildHome.desc')</p>
                                                    <p class="pull-right link"><a href="/guidelines-creating-home-elderly">@lang('nav.link')</a></p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="thumbnail">
                                    <div class="row">

                                        <div class="col-lg-5 col-sm-6">
                                            <img src="http://www.goodaginginplace.com/storage/app/media/content/GreenLight/Greenlight.jpg" alt="..."
                                                class="image-square-sm">
                                        </div>

                                        <div class="col-lg-7 col-sm-6">
                                            <div class="caption side"><b>
                                                @lang('forest.title')</b>
                                                <p>@lang('forest.desc')</p>
                                                <p class="pull-right link"><a href="/forest-therapy">@lang('nav.link')</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="thumbnail">
                                    <div class="row">

                                        <div class="col-lg-5 col-sm-6">
                                            <img src="http://www.boloblog.com/wp-content/uploads/2017/11/sony_aibo_playing_reuters_1509533598683.jpg" alt="..."
                                                class="image-square-sm">
                                        </div>

                                        <div class="col-lg-7 col-sm-6">
                                            <div class="caption side">
                                                    <b>@lang('aipet.title')</b>
                                                    <p>@lang('aipet.desc')</p>
                                                <p class="pull-right link"><a href="/ai-pet">@lang('nav.link')</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-8 col-md-pull-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="thumbnail">
                                    <div class="title-area center">
                                        <h3>@lang('insight.insight_title')</h3>
                                    </div>
                                    <div class="caption">
                                        <p>@lang('insight.insight_desc')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-area">
                                <h3 class="removeTop">@lang('insight.insight_2nd_title')</h3>
                            </div>

                            <div class="thumbnail">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5">
                                        <img src="{{ asset('themes/rainlab-bonjour/assets/images/uploads/1.jpg') }}" alt="..."
                                             class="image-square">
                                    </div>
                                    <div class="col-lg-8 col-sm-7">
                                        <div class="caption">
                                            <h3>@lang('insight.insight_2nd_title')</h3>
                                            <p>@lang('insight.insight_2nd_desc')</p>
                                            <p class="pull-right link"><a href="#">@lang('nav.link')</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="thumbnail">
                            <div class="row">

                                <div class="col-md-12">
                                    <img src="{{ asset('themes/rainlab-bonjour/assets/images/242x200.svg') }}" alt="..."
                                         class="image-portrait">
                                </div>

                                <div class="col-md-12">
                                    <div class="caption">
                                        <h3>@lang('home.home_title')</h3>
                                        <p>@lang('home.home_desc')</p>
                                        <p class="pull-right link"><a href="#">@lang('nav.link')</a></p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        @include('partial.footer')

    </body>
</html>


