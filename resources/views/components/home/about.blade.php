<!-- ABOUT SECTION -->
<div id="about" class="section-full" style="background-image: url({{ asset('images/bg-map.png') }});">
    <!-- TOP PART -->
    <div class="services-half-section-top">
        <div class="container">
            <div class="section-head">
                <div class="mt-separator-outer separator-left text-wh">
                    <div class="mt-separator">
                        <h2 class="text-uppercase sep-line-one">
                            <span class="font-weight-300 site-text-primary">About</span> Company
                        </h2>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12">
                        <!-- IMAGE CAROUSEL -->
                        <div class="owl-carousel about-home about-home-v2 owl-dots-bottom-left">
                            @php
                                $about_images = ['images/pic8.jpg', 'images/pic6.jpg', 'images/pic9.jpg', 'images/pic2.jpg', 'images/pic3.jpg'];
                            @endphp
                            @foreach($about_images as $image)
                                <div class="item">
                                    <div class="mt-img-effect zoom-slow">
                                        <a href="{{ route('about') }}">
                                            <img src="{{ asset($image) }}" alt="About Image">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="about-home-right about-right-v2 site-bg-primary text-black p-a30">
                            <h3 class="m-t0">
                                <span class="font-weight-100">Committed</span> to superior quality and results.
                            </h3>
                            <p>
                                <strong>Contrary to popular belief, lorem Ipsum is not simply text. It has roots in a piece of 
                                classical Latin literature from 45 BC, making it over 2000 years old.</strong>
                            </p>
                            <div class="text-left">
                                <a href="{{ route('about') }}" class="site-button-secondry btn-effect">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM PART - STATISTICS -->
    <div class="services-half-section-bottom p-t80 p-b50 bg-secondry bg-cover bg-center bg-no-repeat" 
        style="background-image: url({{ asset('images/bg5.jpg') }});">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    @php
                        $stats = [
                            ['icon' => 'flaticon-city', 'number' => '2500', 'label' => 'Projects Done'],
                            ['icon' => 'flaticon-worker', 'number' => '1500', 'label' => 'Happy Client'],
                            ['icon' => 'flaticon-crane', 'number' => '840', 'label' => 'Industries Served'],
                            ['icon' => 'flaticon-art-and-design', 'number' => '180', 'label' => 'Renovate']
                        ];
                    @endphp

                    @foreach($stats as $stat)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="site-text-primary mt-icon-box-wraper left m-b30">
                                <span class="icon-md p-t10">
                                    <i class="{{ $stat['icon'] }}"></i>
                                </span>
                                <div class="icon-content text-white">
                                    <div class="counter font-50 font-weight-800 m-b5">{{ $stat['number'] }}</div>
                                    <span class="font-16">{{ $stat['label'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
