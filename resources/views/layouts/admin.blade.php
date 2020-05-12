
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="GYERMEK SZAKORVOSI RENDELÉSEK,  HOMEOPÁTIA,  EGÉSZSÉGPÉNZTÁR,  SCHÜSLER ARCDIAGNOSZTIKA">
        <meta name="keywords" content="gyermekorvos kecskemét, homeopata gyermekorvos, GYERMEK SZAKORVOSI RENDELÉSEK,  HOMEOPÁTIA,  EGÉSZSÉGPÉNZTÁR,  SCHÜSLER ARCDIAGNOSZTIKA">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="3 Months">
        <meta name="author" content="Dr. Nagy Bea">
        <meta name="copyright" content="Kinder-doktor">
        <meta name="distribution" content="global">
        <meta name="language" content="HU">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="rating" content="general">

        <title>@hasSection('title') @yield('title') @else Kinder-Doktor @endif</title>

        <link rel="icon" href="/images/icon.png" type="image/png">

        <link href="{{ mix('/css/admin.css') }}" rel="stylesheet">
    </head>
    <body>

        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto pull-right">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.blogs') }}">Hírek, Olvasmányok</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Kijelentkezés') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')
        </div>

        <script src="{{ mix('/js/admin.js') }}"></script>
    </body>
</html>
