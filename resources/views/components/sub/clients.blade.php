<!-- CLIENT LOGOS SECTION -->
<div id="clients" class="section-full p-t10 bg-white">
    <div class="container">
        <div class="section-content">
            <div class="section-content p-tb10 owl-btn-vertical-center">
                <div class="owl-carousel home-client-carousel-2">
                    @php
                        $client_logos = ['w1.png', 'w2.png', 'w3.png', 'w4.png', 'w5.png', 'w6.png'];
                    @endphp

                    @foreach($client_logos as $logo)
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('images/' . $logo) }}" alt="Client Logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
