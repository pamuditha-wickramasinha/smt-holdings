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
                <h3>We specialize in interlock paving, road construction, building construction and all civil engineering works.</h3>
            </div>

            <!-- SERVICES GRID -->
            <div class="row services-v2 no-col-gap">
                @php
                    $services = [
                        ['icon' => 'images/crane-1.png', 'title' => 'Building Construction', 'description' => 'We handle all types of residential and commercial building construction projects with precision and quality craftsmanship.'],
                        ['icon' => 'images/renovation.png', 'title' => 'Road Construction', 'description' => 'Professional road construction and infrastructure development services including asphalt and concrete roads.'],
                        ['icon' => 'images/toolbox.png', 'title' => 'Interlock Paving', 'description' => 'Expert interlock paving solutions for driveways, pathways, parking areas and decorative outdoor spaces.'],
                        ['icon' => 'images/compass.png', 'title' => 'Civil Works', 'description' => 'Comprehensive civil engineering works including drainage, foundations, retaining walls and site development.'],
                        ['icon' => 'images/idea.png', 'title' => 'Construction Consulting', 'description' => 'Professional advice and consultation for your construction projects from planning to completion.'],
                        ['icon' => 'images/dump-truck.png', 'title' => 'Material Supply', 'description' => 'Reliable supply of high-quality construction materials delivered to your project site on time.'],
                        ['icon' => 'images/architecture.png', 'title' => 'Building Renovation', 'description' => 'Complete building renovation and refurbishment services to restore or upgrade your existing structures.'],
                        ['icon' => 'images/planning.png', 'title' => 'Building Maintenance', 'description' => 'Ongoing maintenance services to keep your buildings in top condition and extend their lifespan.']
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
                                    <!-- <a href="{{ route('services') }}" class="site-button-link" data-hover="Read More">
                                        Read More <i class="fa fa-angle-right arrow-animation"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
