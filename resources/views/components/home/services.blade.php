<!-- SERVICES SECTION -->
<div id="services" class="section-full p-t80 p-b50 bg-white mobile-page-padding" 
    style="background-image: url({{ asset('images/ptn-1.png') }});">
    <div class="section-content">
        <div class="container">
            <!-- TITLE -->
            <div class="section-head m-b50">
                <div class="mt-separator-outer separator-left">
                    <div class="mt-separator">
                        <h2 class="text-uppercase sep-line-one">
                            <span class="font-weight-300 site-text-primary">Our</span> Services
                        </h2>
                    </div>
                </div>
                <h3>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</h3>
            </div>

            <!-- SERVICES GRID -->
            <div class="row services-v2 no-col-gap">
                @php
                    $services = [
                        ['icon' => 'images/crane-1.png', 'title' => 'Building Construction', 'description' => 'lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.'],
                        ['icon' => 'images/renovation.png', 'title' => 'Building Renovation', 'description' => 'lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.'],
                        ['icon' => 'images/toolbox.png', 'title' => 'Building Maintenance', 'description' => 'lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.'],
                        ['icon' => 'images/compass.png', 'title' => 'Architecture Design', 'description' => 'lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.'],
                        ['icon' => 'images/idea.png', 'title' => 'Construction Consultant', 'description' => 'lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.'],
                        ['icon' => 'images/dump-truck.png', 'title' => 'Material Supply', 'description' => 'lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.'],
                        ['icon' => 'images/architecture.png', 'title' => 'House Renovation', 'description' => 'lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.'],
                        ['icon' => 'images/planning.png', 'title' => 'Interior Design', 'description' => 'lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.']
                    ];
                @endphp

                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="mt-icon-box-wraper bdr-l-1 bdr-solid bdr-gray">
                            <div class="relative p-a30">
                                <div class="icon-md inline-icon m-b15 site-text-primary scale-in-center">
                                    <span class="icon-cell">
                                        <img src="{{ asset($service['icon']) }}" alt="{{ $service['title'] }}">
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="mt-tilte m-b25">{{ $service['title'] }}</h4>
                                    <p>{{ $service['description'] }}</p>
                                    <a href="{{ route('services') }}" class="site-button-link" data-hover="Read More">
                                        Read More <i class="fa fa-angle-right arrow-animation"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
