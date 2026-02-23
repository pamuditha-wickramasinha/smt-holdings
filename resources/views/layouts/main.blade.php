<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name') . ' | Home')</title>

    <!-- Meta Tags -->
    <meta name="description"
        content="@yield('meta_description', config('app.name') . ' - Professional Construction Services')">
    <meta name="keywords" content="@yield('meta_keywords', 'construction, architecture, renovation')">
    <meta name="author" content="{{ config('app.name') }}">

    <!-- FAVICONS -->
    <link rel="icon" href="{{ asset('images/logo-light.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo-light.png') }}">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- FONT & ICON STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.min.css') }}">

    <!-- LIBRARY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.min.css') }}">

    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css') }}">

    <!-- THEME STYLES (Vite) -->
    @vite(['resources/css/theme.css', 'resources/js/theme.js'])

    <!-- COLOR THEME -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('css/skin-1.css') }}">
    <!-- Dynamic color variables served as CSS -->
    <link rel="stylesheet" type="text/css" href="{{ route('theme.colors') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    @stack('vite')
    @stack('styles')
</head>

<body>
    <div class="page-wraper">
        <!-- HEADER -->
        @include('components.header.main')

        <!-- PAGE CONTENT -->
        <div class="page-content">
            @yield('content')
        </div>

        <!-- FOOTER -->
        @include('components.footer.main')

        <!-- SCROLL TO TOP -->
        <button class="scroltop">
            <span class="fa fa-angle-up relative" id="btn-vibrate"></span>
        </button>
    </div>

    <!-- LOADING AREA -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="cssload-loader">Loading</div>
        </div>
    </div>

    <!-- VENDOR SCRIPTS -->
    <script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints-sticky.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.owl-filter.js') }}"></script>
    <script src="{{ asset('js/jquery.bgscroll.js') }}"></script>

    <!-- REVOLUTION SLIDER -->
    <script src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('js/revolution-plugin.js') }}"></script>
    <script src="{{ asset('js/rev-script-2.js') }}"></script>

    <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/shortcode.js') }}"></script>
    @stack('scripts')
</body>

</html>