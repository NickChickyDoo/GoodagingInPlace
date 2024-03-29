<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="{{ asset('img/logo_V.1.0.png')}}"/>
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



{{-- สาระความรู้ --}}
                    <div class="col-md-8 col-md-pull-4">
                        <div class="row">

                            <div class="col-md-14">
                                <div class="thumbnail">

                                    <div class="title-area center">
                                        <h3>@lang('insight.insight_title')</h3>
                                    </div>
                                    <div class="caption">
                                        <p>@lang('insight.insight_desc')</p>
                                    </div>

                                </div>
                            </div>



{{-- เนื้อหาล่าสุด --}}
                        <div class="row">
                            <div class="col-md-12">

                                <div class="title-area">
                                    <h3 class="removeTop">@lang('insight.insight_2nd_title')</h3>
                                </div>

                                <div class="thumbnail">
                                    <div class="row">

                                        <div class="col-lg-4 col-sm-5">
                                            <img src="{{ asset('img/GUIDELINES CREATING HOME ELDERLY/Home1.jpg') }}" alt="..."
                                                class="image-square">
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="caption">
                                                <h3>@lang('buildHome.title')</h3>
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

                                        <div class="col-lg-4 col-sm-5">
                                            <img src="{{ asset('img/greenlight/Greenlight.jpg') }}" alt="..."
                                                class="image-square">
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="caption">
                                                <h3>@lang('forest.title')</h3>
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

                                        <div class="col-lg-4 col-sm-5">
                                            <img src="{{ asset('img/aipet/sony_aibo_playing_reuters_1509533598683.jpg') }}" alt="..."
                                            class="image-square">
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="caption">
                                                <h3>@lang('aipet.title')</h3>
                                                <p>@lang('aipet.desc')</p>
                                                <p class="pull-right link"><a href="/ai-pet">@lang('nav.link')</a></p>
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

                                        <div class="col-lg-4 col-sm-5">
                                            <img src="{{ asset('img/newyorker/06OLDEST02-superJumbo.jpg') }}" alt="..."
                                            class="image-square">
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="caption">
                                                <h3>@lang('newyorker.title')</h3>
                                                <p>@lang('newyorker.desc')</p>
                                                <p class="pull-right link"><a href="/these-4-new-yorkers-are-experts-living-what-do-they-know-we-dont">@lang('nav.link')</a></p>
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

                                        <div class="col-lg-4 col-sm-5">
                                            <img src="{{ asset('img/whathappen/c1.jpg') }}" alt="..."
                                            class="image-square">
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="caption">
                                                <h3>@lang('what-happen.title')</h3>
                                                <p>@lang('what-happen.desc')</p>
                                                <p class="pull-right link"><a href="/what-happens-to-our-society">@lang('nav.link')</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

{{-- วาง Content ด้านบน--}}
                    </div>
                </div>



{{-- เนื้อหายอดนิยม --}}
                    <div class="col-md-4">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="title-area center">

                                        <div class="caption-full">
                                            <h3>@lang('insight.insight_side_title')</h3>
                                        </div>
                                    </div>

                                    <div class="thumbnail">
                                        <div class="row">

                                            <div class="col-lg-5 col-sm-5">
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
                                                <img src="{{ asset('img/greenlight/Greenlight.jpg') }}" alt="..."
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
                                                <img src="{{ asset('img/aipet/sony_aibo_playing_reuters_1509533598683.jpg') }}" alt="..."
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

                </div>
            </div>

        @include('partial.footer')

    </body>
</html>


