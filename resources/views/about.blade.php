<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="{{ asset('img/logo_V.1.0.png')}}"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>@lang('about.head')</title>

    </head>

    <body>
        @include('partial.header')

        <section class="jumbotron text-center bg-banner bg-banner-6">

                <div class="container">
                    <h1 class="jumbotron-heading color-white">@lang('about.title')</h1>
                </div>
         </section>

            <div class="banner"></div>
            <div class="container">
                <div class="row">

                        <div class="col-md-8">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="thumbnail">
                                            <div class="title-area center">
                                                <h3>@lang('about.title')</h3>
                                            </div>
                                            <div class="caption-full">
                                                <tr>
                                                    <td>
                                                     <p>@lang('about.desc')</p>
                                                    </td>
                                                </tr>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="thumbnail">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-5">
                                                    <img src="http://www.goodaginginplace.com/themes/rainlab-bonjour/assets/images/uploads/61.jpg" alt="..."
                                                         class="image-square">
                                                </div>
                                                <div class="col-lg-8 col-sm-7">
                                                    <div class="caption-full">
                                                        <h3>@lang('about.2nd_topic')</h3>
                                                        <p>@lang('about.2nd_desc')</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                    <div class="col-md-4">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="thumbnail">

                                    <div class="row">

                                        <div class="title-area center">
                                            <h3 >@lang('about.side_title')</h3>
                                        </div>

                                        <div class="col-md-12">
                                            <b><p class="center">@lang('about.team.position.1')</p></b>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="center">@lang('about.team.person.1')</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="center">@lang('about.team.person.2')</p>
                                        </div>
                                        <div class="col-md-12">
                                            <b><p class="center">@lang('about.team.position.2')</p></b>
                                        </div>

                                        <div class="col-md-12">
                                            <p class="center">@lang('about.team.person.6')</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="center">@lang('about.team.person.3')</p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="center">@lang('about.team.person.4')</p>
                                        </div>



                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="thumbnail">
                                    <div class="row text-center">
                                        <a href="https://www.facebook.com/goodaginginplace/">
                                            <div class="custom-btn-facebook"></div>
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="title-area center">
                            <h3>@lang('about.support')</h3>
                        </div>

                        <div class="thumbnail">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="row">

                                        <div class="col-md-2">
                                            <img src="http://www.goodaginginplace.com/themes/rainlab-bonjour/assets/images/242x200.svg" alt="..."
                                                 class="image-square-xs img-circle">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="http://www.goodaginginplace.com/themes/rainlab-bonjour/assets/images/242x200.svg" alt="..."
                                                 class="image-square-xs img-circle">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="http://www.goodaginginplace.com/themes/rainlab-bonjour/assets/images/242x200.svg" alt="..."
                                                 class="image-square-xs img-circle">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="http://www.goodaginginplace.com/themes/rainlab-bonjour/assets/images/242x200.svg" alt="..."
                                                 class="image-square-xs img-circle">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="http://www.goodaginginplace.com/themes/rainlab-bonjour/assets/images/242x200.svg" alt="..."
                                                 class="image-square-xs img-circle">
                                        </div>
                                        <div class="col-md-2">
                                            <img src="http://www.goodaginginplace.com/themes/rainlab-bonjour/assets/images/242x200.svg" alt="..."
                                                 class="image-square-xs img-circle">
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


