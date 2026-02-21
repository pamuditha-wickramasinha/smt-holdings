<div class="contact-slide-hide" style="background-image:url({{ asset('images/bg-5.png') }})">
    <div class="contact-nav">
        <a href="javascript:void(0)" class="contact_close">✕</a>
        <div class="contact-nav-form p-a30">
            <div class="contact-info m-b30">
                <!-- PHONE -->
                <div class="mt-icon-box-wraper center p-b30">
                    <div class="icon-xs m-b20 scale-in-center">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="icon-content">
                        <h5 class="m-t0 font-weight-500">Phone number</h5>
                        <p>{{ config('app.company_phone', '(075) 123-7654') }}</p>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="mt-icon-box-wraper center p-b30">
                    <div class="icon-xs m-b20 scale-in-center">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="icon-content">
                        <h5 class="m-t0 font-weight-500">Email address</h5>
                        <p>{{ config('app.company_email', 'info@company.com') }}</p>
                    </div>
                </div>

                <!-- ADDRESS -->
                <div class="mt-icon-box-wraper center p-b30">
                    <div class="icon-xs m-b20 scale-in-center">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="icon-content">
                        <h5 class="m-t0 font-weight-500">Address info</h5>
                        <p>{{ config('app.company_address', '201 Liverpool Street, Suite 721, London') }}</p>
                    </div>
                </div>
            </div>

            <!-- SOCIAL LINKS -->
            <div class="full-social-bg">
                <ul>
                    <li><a href="https://www.facebook.com" class="facebook" target="_blank"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.google.com" class="google" target="_blank"><i class="fa fa-google"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com" class="instagram" target="_blank"><i
                                class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.tumblr.com" class="tumblr" target="_blank"><i class="fa fa-tumblr"></i></a>
                    </li>
                    <li><a href="https://twitter.com" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com" class="youtube" target="_blank"><i
                                class="fa fa-youtube"></i></a></li>
                </ul>
            </div>

            <!-- FOOTER TEXT -->
            <div class="text-center">
                <h4 class="font-weight-600">© {{ date('Y') }} {{ config('app.name') }}</h4>
            </div>
        </div>
    </div>
</div>