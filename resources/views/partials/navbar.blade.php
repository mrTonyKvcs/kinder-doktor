
<div class="topbar grayee">
    <div class="container">
        <div class="row">
            <div class="hidden-xs hidden-sm col-md-9">
                <div class="info">
                    <div class="info-item">
                        <i class="fa fa-clock-o"></i>
                        <a href="{{ route('pages.contact') }}">Rendelési idő</a>
                    </div>
                    <div class="info-item">
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
                    <div class="dropdown language">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Nyelv valasztasa
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </button>
                       
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
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
            <img src="/images/kinder_doktor.png" alt="image">
        </a>
    </div>

    <nav class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ route('pages.index') }}">Kezdolap</a>
            </li>

            <li>
                <a href="{{ route('pages.services') }}">Szolgaltatasaim</a>
            </li>

            <li>
                <a href="{{ route('blogs.index') }}">Hirek, olvasmanyok</a>
            </li>

            <li>
                <a href="{{ route('pages.contact') }}">Kapcsolat</a>
            </li>
        </ul>
    </nav>
</div>


