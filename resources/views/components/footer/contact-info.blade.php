<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="widget widget_address_outer">
        <h4 class="widget-title">Contact Us</h4>
        <ul class="widget_address">
            <li>{{ config('app.company_address', '34/7 Liverpool Street, Suite 636, London') }}</li>
            <li><a href="mailto:{{ config('app.company_email', 'info@company.com') }}">{{ config('app.company_email') }}</a></li>
            <li><a href="tel:{{ config('app.company_phone') }}">{{ config('app.company_phone') }}</a></li>
            <li><a href="tel:{{ config('app.company_phone_alt') }}">{{ config('app.company_phone_alt', '') }}</a></li>
        </ul>
    </div>
</div>
