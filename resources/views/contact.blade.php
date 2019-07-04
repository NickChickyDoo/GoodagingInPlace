<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>@lang('contact.title')</title>

    </head>

    <body>
        @include('partial.header')

        <section class="jumbotron text-center bg-banner bg-banner-2">

                <div class="container">
                    <h1 class="jumbotron-heading color-white">@lang('contact.footer.head.1')</h1>
                </div>
         </section>

            <div class="banner"></div>
            <div class="container">

                    <div class="row">
                            <div class="col-md-4 col-md-push-8">

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="thumbnail">
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <img src="http://www.goodaginginplace.com/themes/rainlab-bonjour/assets/images/uploads/71.jpg" alt="..."
                                                         class="map">
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
                                                <h3>@lang('contact.footer.head.1')</h3>
                                            </div>
                                            <div class="caption center">
                                                <p>@lang('contact.desc')</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="thumbnail">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="caption">
                                                        <p>@lang('contact.footer.p.1')</p>
                                                        <p><span class="glyphicon glyphicon-home"></span>@lang('contact.footer.p.2')</p>
                                                        <p><span class="glyphicon glyphicon-phone"></span>@lang('contact.footer.p.3')</p>
                                                        <p><span class="glyphicon glyphicon-envelope"></span>@lang('contact.footer.p.4')</p>
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


