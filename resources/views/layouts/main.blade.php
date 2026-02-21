<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Meta (override in views with @section('meta_description') and @section('meta_keywords')) -->
    <meta name="description" content="@yield('meta_description', config('app.name') . ' - Welcome')">
    <meta name="keywords" content="@yield('meta_keywords', '')">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- CDN: Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- CDN: Font Awesome 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CDN: Owl Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
    <!-- CDN: Magnific Popup -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- Vite: app + theme (all local CSS/JS via Vite) -->
    @vite(['resources/css/app.css', 'resources/css/theme.css', 'resources/js/app.js', 'resources/js/theme.js'])
    @stack('vite')
    @stack('styles')
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] min-h-screen flex flex-col">
    <div class="page-wraper">
        @include('layouts.header')

        <main class="page-content">
            @yield('content')
        </main>

        @include('layouts.footer')

        <!-- BUTTON TOP -->
        <button class="scroltop"><span class="fa fa-angle-up relative" id="btn-vibrate"></span></button>
    </div>

    <!-- LOADING AREA -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="cssload-loader">Loading</div>
        </div>
    </div>

    <!-- STYLE SWITCHER -->
    <div class="styleswitcher">
        <div class="switcher-btn-bx">
            <a class="switch-btn">
                <span class="fa fa-cog fa-spin"></span>
            </a>
        </div>
        <div class="styleswitcher-inner">
            <h6 class="switcher-title">Color Skin</h6>
            <ul class="color-skins">
                <li><a class="theme-skin skin-1" href="?theme=css/skin/skin-1" title="default Theme"></a></li>
                <li><a class="theme-skin skin-2" href="?theme=css/skin/skin-2" title="pink Theme"></a></li>
                <li><a class="theme-skin skin-3" href="?theme=css/skin/skin-3" title="sky Theme"></a></li>
                <li><a class="theme-skin skin-4" href="?theme=css/skin/skin-4" title="green Theme"></a></li>
                <li><a class="theme-skin skin-5" href="?theme=css/skin/skin-5" title="red Theme"></a></li>
                <li><a class="theme-skin skin-6" href="?theme=css/skin/skin-6" title="orange Theme"></a></li>
                <li><a class="theme-skin skin-7" href="?theme=css/skin/skin-7" title="purple Theme"></a></li>
                <li><a class="theme-skin skin-8" href="?theme=css/skin/skin-8" title="blue Theme"></a></li>
            </ul>
        </div>
    </div>

    <!-- CDN: jQuery (before Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- CDN: Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <!-- CDN: Magnific Popup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- CDN: Owl Carousel -->
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

    @stack('scripts')
</body>

</html>