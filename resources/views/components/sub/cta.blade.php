<!-- CALL TO ACTION SECTION -->
<div id="cta" class="section-full p-tb80 overlay-wraper bg-center bg-parallax bg-cover"
    data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/bg-10.jpg') }});">
    <div class="overlay-main bg-black opacity-07"></div>
    <div class="container">
        <div class="section-content">
            <div class="call-us-section text-center text-white">
                <h4 class="m-b15">Let's work together</h4>
                @php
                    $phone = config('app.company_whatsapp', '94774473518');
                    $formatted = preg_replace('/^(\d{2})(\d{2})(\d{3})(\d{4})$/', '+$1 $2 $3 $4', $phone);
                @endphp
                <h2 class="call-us-number m-b15 m-b0">{{ $formatted }}</h2>
                <h4 class="call-us-address m-t0 m-b20">{{ config('app.company_address', 'Street 4 ,45 New york City') }}
                </h4>
                <a href="{{ route('contact') }}" class="site-button btn-effect">Contact Us</a>
            </div>
        </div>
    </div>
</div>