<!-- NavBar Line 1 -->
<div class="container">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-family: 'Prompt', sans-serif;">
        <a class="navbar-brand" href="/"><img src="{{ asset('img\logo_V.1.0.png') }}" alt="..." width="65"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link disble" href="#"></a>
                    </li>
                </ul>

                <div class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                    <a class="nav-link " href="locale/en">EN</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link " href="locale/th">TH</a>
                            </li>
                            <li>
                                <input class="form-control mr-sm-2" type="search" placeholder="@lang('home.search_tag')" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">@lang('home.search_tag')</button>
                            </li>
                    </ul>
                </div>
            </div>
    </nav>
</div>

<!-- NavBar line 2 -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container" style="font-family: 'Prompt', sans-serif;">
            <div class="row">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <div class="col-md-auto">
                             <li class="nav-item">
                                <a class="nav-link" href="/"><b>@lang('home.home_manu')</b><span class="sr-only">(current)</span></a>
                            </li>
                        </div>

                        <div class="col-md-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/insights"><b>@lang('home.news_manu')</b></a>
                            </li>
                        </div>

                        <div class="col-md-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/home-self-assessment"><b>@lang('home.assessment_manu')</b></a>
                            </li>
                        </div>

                        <div class="col-md-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/about"><b>@lang('home.about_manu')</b></a>
                            </li>
                        </div>

                        <div class="col-md-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/contact"><b>@lang('home.contact_manu')</b></a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
</div>
