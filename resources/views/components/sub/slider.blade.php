<!-- HERO BANNER SECTION -->
<div id="welcome_wrapper" class="hero-banner fullscreen-container"
    style="position: relative; width: 100%; min-height: 900px; overflow: hidden; background: #000;">
    <div class="hero-slide responsive-hero-bg"
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed;">

        <!-- Responsive Background Image Styles -->
        <style>
        .responsive-hero-bg {
            background-image: url('{{ asset('images/slide1.png') }}');
        }
        @media (max-width: 768px) {
            .responsive-hero-bg {
                background-image: url('{{ asset('images/slide-mobile.jpeg') }}') !important;
            }
        }
        </style>

        <!-- Dark Overlay -->
        <div class="overlay-main bg-blue-gradient"></div>

        <!-- Content Container -->
        <div class="hero-content">

            <!-- Title -->
            <h1 class="hero-title">
                Building Your Vision
            </h1>

            <!-- Subtitle -->
            <p class="hero-subtitle">
                Specializing in Interlock Paving, Building & Road Construction and all Civil Works.
            </p>

            <!-- Buttons -->
            <div class="hero-buttons">
                <a href="#about" class="site-button-secondry btn-effect">
                    More About
                </a>
                <a href="#contact" class="site-button btn-effect">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</div>