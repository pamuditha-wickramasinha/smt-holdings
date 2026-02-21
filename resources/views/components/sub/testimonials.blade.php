<!-- TESTIMONIALS SECTION -->
<div id="testimonials" class="section-full p-t80 p-b50 site-bg-dark square_shape2 square_shape1 bg-moving mobile-page-padding" 
    style="background-image: url({{ asset('images/bg-6.png') }});">
    <div class="container">
        <div class="section-content">
            <!-- TITLE -->
            <div class="section-head">
                <div class="mt-separator-outer separator-center">
                    <div class="mt-separator">
                        <h2 class="text-white text-uppercase sep-line-one">
                            <span class="font-weight-300 site-text-primary">Client</span> Testimonials
                        </h2>
                    </div>
                </div>
            </div>

            <!-- TESTIMONIAL CAROUSEL -->
            <div class="owl-carousel testimonial-home-2 m-b30">
                @php
                    $testimonials = [
                        ['image' => 'images/pic1.jpg', 'name' => 'Shelly Johnson', 'role' => 'Business Person'],
                        ['image' => 'images/pic2_1.jpg', 'name' => 'Shelly Johnson', 'role' => 'Business Person'],
                        ['image' => 'images/pic3_1.jpg', 'name' => 'Shelly Johnson', 'role' => 'Business Person']
                    ];
                @endphp

                @foreach($testimonials as $testimonial)
                    <div class="item">
                        <div class="testimonial-home-2-inner">
                            <div class="testimonial-1 testimonial-bg m-a30 hover-animation-1 text-center text-white">
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic radius shadow scale-in-center">
                                        <img src="{{ asset($testimonial['image']) }}" width="100" height="100" 
                                            alt="{{ $testimonial['name'] }}">
                                    </div>
                                </div>

                                <div class="testimonial-text">
                                    <span class="fa fa-quote-right"></span>
                                    <p>Excellent Customer support!. The template itself is very extended. simply dummy text of 
                                    the printing and industry. the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                </div>

                                <div class="testimonial-detail clearfix">
                                    <h4 class="testimonial-name m-b5">{{ $testimonial['name'] }} -</h4>
                                    <span class="testimonial-position">{{ $testimonial['role'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
