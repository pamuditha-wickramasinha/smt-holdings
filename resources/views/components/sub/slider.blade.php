<!-- HERO BANNER SECTION -->
<div id="welcome_wrapper" class="hero-banner fullscreen-container"
    style="position: relative; width: 100%; min-height: 900px; overflow: hidden; background: #000;">
    <div class="hero-slide"
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('{{ asset('images/slide1.jpg') }}'); background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed;">

        <!-- Styles for overlay height (95% desktop, 100% mobile) -->
        <style>
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 90%;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        @media (max-width: 990px) {
            .hero-overlay {
                height: 100%;
            }
        }
        </style>

        <!-- Dark Overlay -->
        <div class="hero-overlay"></div>

        <!-- Content Container -->
        <div
            style="position: absolute; top: 45%; left: 50px; transform: translateY(-50%); z-index: 10; max-width: 800px; color: white;">

            <!-- Title -->
            <h1
                style="font-size: 72px; line-height: 82px; font-weight: 700; margin: 0 0 30px 0; font-family: 'Poppins', sans-serif; text-transform: uppercase; color: #fff;">
                Building Your Vision
            </h1>

            <!-- Subtitle -->
            <p
                style="font-size: 20px; line-height: 28px; font-weight: 500; margin: 0 0 40px 0; font-family: 'Poppins', sans-serif; color: #fff; max-width: 600px;">
                Specializing in Interlock Paving, Building & Road Construction and all Civil Works.
            </p>

            <!-- Buttons -->
            <div style="display: flex; gap: 20px;">
                <a href="#about" class="site-button-secondry btn-effect"
                    style="display: inline-block; padding: 12px 30px; text-transform: uppercase; text-decoration: none; border-radius: 3px;">
                    More About
                </a>
                <a href="#contact" class="site-button btn-effect"
                    style="display: inline-block; padding: 12px 30px; text-transform: uppercase; text-decoration: none; border-radius: 3px;">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</div>