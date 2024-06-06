<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@hasSection('title')@yield('title') | {{config('app.name')}} @else{{config('app.name')}} | Klempiarské práce Kmetik @endif</title>

    <link rel="shortcut icon" type="image/svg" href="{{ config('app.path_img').'/kmetik_logo_white.svg'}}"/>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

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

    <!-- Head Libs -->
    <script src=" {{ asset('js/modernizr.min.js') }}"></script>



    <meta property="og:type"               content="website" />
    <meta property="og:url"                content="{{url()->current()}}" />
    <meta property="og:image"              content="{{asset(config('app.path_img').'/background-social.webp')}}" />
    @yield('header')

    @yield('style')
</head>
<body class="alternative-font-7">

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
