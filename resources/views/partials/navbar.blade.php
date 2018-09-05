
<div class="topbar grayee">
    <div class="container">
        <div class="row">
            <div class="hidden-xs hidden-sm col-md-9">
                <div class="info">
                    <div class="info-item">
                        <i class="fa fa-clock-o"></i>
                        <a class="color-pink" href="{{ route('pages.contact') }}">Rendelési idő</a>
                    </div>
                    <div class="info-item color-pink">
                        <i class="fa fa-map-marker"></i>
                        Kecskemét 6000 Tövis u. 10.
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="login-language pull-right">
                    {{--<a class="ui-btn-login ui-link-gray33" href="">--}}
                        {{--<i class="fa fa-key"></i> Login--}}
                        {{--</a>--}}
                    {{--<div class="dropdown language">--}}
                        {{--<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
                            {{--Nyelv valasztasa--}}
                            {{--<i class="fa fa-caret-down" aria-hidden="true"></i>--}}
                        {{--</button>--}}
                       
                       {{--[> <ul class="dropdown-menu" aria-labelledby="dropdownMenu1"><]--}}
                            {{--[>@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)<]--}}
                                {{--[><li><]--}}
                                    {{--[><a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><]--}}
                                        {{--[>{{ $properties['native'] }}<]--}}
                                    {{--[></a><]--}}
                                {{--[></li><]--}}
                            {{--[>@endforeach<]--}}
                        {{--[></ul><]--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container container-nav">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('pages.index') }}">
            <img src="/images/kinder_doktor.png" alt="Kinder Doktor">
        </a>
    </div>

    <nav class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ route('pages.index') }}">{{ trans('navbar.home') }}</a>
            </li> 
            
            <li>
                <a href="{{ route('pages.homeopathy') }}">{{ trans('navbar.homeopathy') }}</a>
            </li>

            <li>
                <a href="{{ route('pages.schussler') }}">{{ trans('navbar.schussler') }}</a>
            </li>

            <li>
                <a href="{{ route('pages.services') }}">{{ trans('navbar.services') }}</a>
            </li>

            <li>
                <a href="{{ route('blogs.index') }}">{{ trans('navbar.news') }}</a>
            </li>

            <li>
                <a href="{{ route('pages.contact') }}">{{ trans('navbar.contact') }}</a>
            </li>
        </ul>
    </nav>
</div>


