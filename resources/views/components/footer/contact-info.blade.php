<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="widget widget_address_outer">
        <h4 class="widget-title">Contact Us</h4>
        <ul class="widget_address list-unstyled">
            <li class="m-b20">
                <div class="contact-info">
                    <p class="m-b0">{{ config('app.company_address', '34/7 Liverpool Street, Suite 636, London') }}</p>
                </div>
            </li>

            <li class="m-b20">
                <div class="contact-info">
                    <h6 class="m-t0 m-b5" style="text-transform: uppercase; font-size: 13px;">Email Us
                    </h6>
                    <a href="mailto:{{ config('app.company_email', 'info@company.com') }}" class="text-dark">
                        {{ config('app.company_email', 'info@company.com') }}
                    </a>
                </div>
            </li>

            <li class="m-b0">
                <div class="contact-info">
                    <h6 class="m-t0 m-b5" style="text-transform: uppercase; font-size: 13px;">Call Us
                    </h6>
                    <a href="tel:{{ config('app.company_phone') }}" class="text-dark d-block">
                        {{ config('app.company_phone', '+1 123 456 7890') }}
                    </a>
                    @if(config('app.company_phone_alt'))
                    <a href="tel:{{ config('app.company_phone_alt') }}" class="text-dark d-block">
                        {{ config('app.company_phone_alt') }}
                    </a>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</div>