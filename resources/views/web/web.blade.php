<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type"               content="website" />
    <meta property="og:url"                content="{{url()->current()}}" />
    <meta property="og:image"              content="{{asset(config('app.path_img').'/background-social.png')}}" />
    @yield('header')
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <title>@hasSection('title')@yield('title') : Profesionálne Klampiarske a Pokrývačské práce | Kvalitné Strešné Riešenia @else{{config('app.name')}} : Profesionálne Klampiarske a Pokrývačské práce | Kvalitné Strešné Riešenia @endif</title>

    <link rel="shortcut icon" type="image/svg" href="{{ config('app.path_img').'/kmetik_logo.svg'}}"/>

    <!-- Mobile Metas -->

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('css/demo-renewable-energy.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href=" {{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{asset(config('app.path_web_asset').'/css/google-reviews.css?v=').config('app.version')}}">

    <!-- Head Libs -->
    <script src=" {{ asset('js/modernizr.min.js') }}"></script>



    @yield('style')
</head>
<body class="alternative-font-7">
    <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/f12da5daa7e1eff64bac8479e35183b9.js"></script>

    <div class="body">
        @include('web.partials.header')
        <div role="main" class="main">
            @yield('content')
        </div>
        @include('web.partials.footer')
    </div>


    <script src="{{asset('js/plugins.min.js')}}"></script>

    <script src="{{asset('js/theme.js')}}"></script>

    <script src="{{asset('js/demo-renewable-energy.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>

    <script src="{{asset('js/theme.init.js')}}"></script>
    @yield('script')
</body>
</html>
