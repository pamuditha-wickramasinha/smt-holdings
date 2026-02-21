<footer class="site-footer footer-large footer-light footer-wide">
    <!-- NEWSLETTER SECTION -->
    <div class="container">
        <div class="p-a30 call-to-action-wrap bg-no-repeat bg-center site-bg-primary" 
            style="background-image:url({{ asset('images/bg-site.png') }});">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="call-to-action-left text-black">
                        <h4 class="text-uppercase m-b10 m-t0">Subscribe to our newsletter!</h4>
                        <span>Never Miss Anything From {{ config('app.name') }} By Signing Up To Our Newsletter.</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="call-to-action-right">
                        <div class="widget_newsletter">
                            <div class="newsletter-bx">
                                <form role="search" method="post" action="{{ route('newsletter.subscribe') }}">
                                    @csrf
                                    <div class="input-group">
                                        <input name="email" class="form-control" placeholder="ENTER YOUR EMAIL" 
                                            type="email" required>
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button">
                                                <i class="fa fa-paper-plane-o"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER BLOCKS -->
    <div class="footer-top overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT COMPANY -->
                @include('components.footer.about')

                <!-- CONTACT INFO -->
                @include('components.footer.contact-info')

                <!-- USEFUL LINKS -->
                @include('components.footer.useful-links')

                <!-- RECENT POSTS -->
                @include('components.footer.recent-posts')
            </div>
        </div>
    </div>

    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <div class="mt-footer-bot-center">
                    <span class="copyrights-text">
                        © {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
