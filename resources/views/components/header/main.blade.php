<header class="site-header header-style-2 mobile-sider-drawer-menu">
    <!-- HEADER TOP INFO -->
    <div class="header-middle bg-white">
        <div class="container">
            <div class="logo-header">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo-light.png') }}" width="216" height="37" alt="Logo">
                </a>
            </div>
            <div class="header-info">
                <ul>
                    <li>
                        <div class="icon-sm">
                            <span class="icon-cell site-text-primary">
                                <i class="fa fa-map-marker"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <strong>{{ config('app.company_location', 'Newyork, USA') }}</strong>
                            <span>{{ config('app.company_address', 'Flat 544, Reynolds Neck Str') }}</span>
                        </div>
                    </li>
                    <li>
                        <div class="icon-sm">
                            <span class="icon-cell site-text-primary">
                                <i class="fa fa-phone"></i>
                            </span>
                        </div>
                        <div class="icon-content">
                            <strong>{{ config('app.company_phone', '+324 123 45 978') }}</strong>
                            <span>Mon - Friday: 9.00 to 18.00</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- MAIN NAVIGATION BAR -->
    <div class="sticky-header main-bar-wraper">
        <div class="main-bar header-botton nav-bg-secondry">
            <div class="container">
                <!-- MOBILE TOGGLE -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                    class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>

                <!-- EXTRA NAV (SEARCH & CONTACT) -->
                <div class="extra-nav">
                    <!-- <div class="extra-cell">
                        <a href="#search">
                            <i class="fa fa-search"></i>
                        </a>
                    </div> -->
                    <div class="extra-cell">
                        <a href="#" class="contact-slide-show">
                            <i class="fa fa-angle-left arrow-animation"></i>
                        </a>
                    </div>
                </div>

                <!-- CONTACT SIDEBAR -->
                @include('components.header.contact-sidebar')

                <!-- SEARCH FORM -->
                @include('components.header.search-form')

                <!-- MAIN NAVIGATION MENU -->
                @include('components.header.navigation')
            </div>
        </div>
    </div>
</header>