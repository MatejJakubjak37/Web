<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Demo Renewable Energy | Porto - Multipurpose Website Template</title>	

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href=" {{ asset('img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
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

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('css/skins/skin-renewable-energy.css') }}">

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
    <script src="{{asset('js/view.contact.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>

    <script src="{{asset('js/theme.init.js')}}"></script>
@yield('script')
</body>
</html>
