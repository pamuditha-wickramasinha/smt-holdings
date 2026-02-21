<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="widget widget_about">
        <div class="logo-footer clearfix p-b15">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo-light.png') }}" alt="Logo">
            </a>
        </div>
        <p class="max-w400">
            {{ config('app.company_description', 'We deliver excellence in construction, architecture, and renovation with a commitment to quality and innovation.') }}
        </p>

        <!-- SOCIAL ICONS -->
        <ul class="social-icons mt-social-links">
            <li><a href="https://www.google.com" class="fa fa-google" target="_blank"></a></li>
            <li><a href="https://rss.com" class="fa fa-rss" target="_blank"></a></li>
            <li><a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a></li>
            <li><a href="https://twitter.com" class="fa fa-twitter" target="_blank"></a></li>
            <li><a href="https://in.linkedin.com" class="fa fa-linkedin" target="_blank"></a></li>
        </ul>
    </div>
</div>
