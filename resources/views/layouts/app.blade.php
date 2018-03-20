<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="/stylesheets/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/stylesheets/medical.css">
    <link rel="stylesheet" type="text/css" href="/stylesheets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/stylesheets/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="/stylesheets/global.css">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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

</body>
</html>
