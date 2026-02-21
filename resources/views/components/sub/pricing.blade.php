<!-- PRICING SECTION -->
<div id="pricing" class="section-full text-center bg-gray bg-no-repeat p-t80 p-b50 bg-top-right mobile-page-padding our-pricing-wrap" 
    style="background-image: url({{ asset('images/bg-4.png') }});">
    <div class="container">
        <!-- TITLE -->
        <div class="section-head">
            <div class="mt-separator-outer separator-center">
                <div class="mt-separator">
                    <h2 class="text-uppercase sep-line-one">
                        <span class="font-weight-300 site-text-primary">Our</span> Pricing
                    </h2>
                </div>
            </div>
        </div>

        <!-- PRICING TABLES -->
        <div class="section-content">
            <div class="pricingtable-row">
                <div class="row d-flex justify-content-center">
                    @php
                        $pricing_plans = [
                            ['name' => 'Basic Plan', 'price' => '29', 'features' => ['Phone & Email Support', '3 Social Account', 'Branded Reports']],
                            ['name' => 'Pro Plan', 'price' => '49', 'features' => ['Phone & Email Support', '3 Social Account', 'Branded Reports']],
                            ['name' => 'Premium Plan', 'price' => '99', 'features' => ['Phone & Email Support', '3 Social Account', 'Branded Reports']]
                        ];
                    @endphp

                    @foreach($pricing_plans as $plan)
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="pricingtable-wrapper pricing-table-style-5 overflow-hide hover-shadow bdr-t-4 bdr-solid bdr-primary 
                                @if($loop->index === 2) bg-gray @else bg-white @endif">
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-title">
                                        <h4>{{ $plan['name'] }}</h4>
                                    </div>

                                    <div class="pricingtable-price">
                                        <span class="pricingtable-bx">${{ $plan['price'] }}</span>
                                        <span class="pricingtable-type">Month</span>
                                    </div>

                                    <ul class="pricingtable-features text-black">
                                        @foreach($plan['features'] as $feature)
                                            <li>{{ $feature }}</li>
                                        @endforeach
                                    </ul>

                                    <div class="pricingtable-footer">
                                        <a href="{{ route('contact') }}" class="site-button btn-effect">Purchase</a>
                                    </div>

                                    <div class="overlay-main bg-white opacity-07"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
