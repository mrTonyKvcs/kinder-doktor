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

        <link rel="stylesheet" type="text/css" href="/stylesheets/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/stylesheets/medical.css">
        <link rel="stylesheet" type="text/css" href="/stylesheets/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="/stylesheets/owl.theme.css">

        <link rel="stylesheet" type="text/css" href="/stylesheets/global.css">

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    </head>
    <body>

        <div class="wrapper">
            <!-- Begin header -->
            <div class="navbar navbar-main">
                @include('partials.navbar')
            </div>

            <div id="main" class="content-main">
                <div class="content-article">

                    @yield('content')

                </div>
            </div>

            @include('partials.footer')

        </div>

        <script type="text/javascript" src="/js/jquery.min.1.11.1.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>

        <script src="{{ mix('js/app.js') }}"></script>
        <!-- //map -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        {{--<script>--}}
            {{--var map;--}}
            {{--function initMap() {--}}
            {{--map = new google.maps.Map(document.getElementById('map'), {--}}
            {{--center: {lat: 51.515308, lng: 0.035494},--}}
            {{--zoom: 8--}}
            {{--});--}}
            {{--}--}}
            {{--</script>--}}
        <script type="text/javascript">
            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    navigation : true,
                    items : 5,
                    itemsDesktop : [1199,4],
                    itemsDesktopSmall : [979,3]
                });

            });
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121381682-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-121381682-1');
        </script>


    </body>
</html>
