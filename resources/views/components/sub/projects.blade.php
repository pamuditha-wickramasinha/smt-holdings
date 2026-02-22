<!-- PROJECTS SECTION -->
<div id="projects" class="section-full p-t80 p-b50 square_shape2 mobile-page-padding our-project2-wrap">
    <div class="container">
        <!-- TITLE -->
        <div class="section-head">
            <div class="mt-separator-outer separator-center">
                <div class="mt-separator">
                    <h2 class="text-uppercase sep-line-one">
                        <span class="font-weight-300 site-text-primary">Our</span> Project
                    </h2>
                </div>
            </div>
        </div>

        <!-- FILTER -->
        <div class="section-content">
            <div class="filter-wrap text-center">
                <!-- <ul class="filter-navigation inline-navigation masonry-filter link-style text-uppercase">
                    <li class="active"><a data-filter="*" href="javascript:void(0);" data-hover="All">All</a></li>
                    <li><a data-filter=".cat-1" href="javascript:void(0);" data-hover="Paving">Paving</a></li>
                    <li><a data-filter=".cat-2" href="javascript:void(0);" data-hover="Construction">Construction</a></li>
                    <li><a data-filter=".cat-3" href="javascript:void(0);" data-hover="Road Work">Road Work</a></li>
                    <li><a data-filter=".cat-4" href="javascript:void(0);" data-hover="Civil Works">Civil Works</a></li>
                    <li><a data-filter=".cat-5" href="javascript:void(0);" data-hover="Renovation">Renovation</a></li>
                </ul> -->
            </div>
        </div>

        <!-- PORTFOLIO GRID -->
        <div class="section-content">
            <div class="portfolio-wrap row mfp-gallery product-stamp clearfix">
                @php
                    $projects = [
                        ['image' => 'images/PP-1.jpeg', 'title' => 'Covered Parking Paving', 'category' => 'cat-1', 'tags' => 'Commercial, Interlock'],
                        ['image' => 'images/PP-2.jpeg', 'title' => 'Residential Driveway', 'category' => 'cat-2', 'tags' => 'Residential, Paving'],
                        ['image' => 'images/PP-3.jpeg', 'title' => 'Decorative Garden Paving', 'category' => 'cat-3', 'tags' => 'Landscaping, Design'],
                        ['image' => 'images/PP-4.jpeg', 'title' => 'Grass Track Driveway', 'category' => 'cat-4', 'tags' => 'Residential, Garden'],
                        ['image' => 'images/PP-5.jpeg', 'title' => 'Garden Stepping Stones', 'category' => 'cat-5', 'tags' => 'Landscaping, Pathway'],
                        ['image' => 'images/PP-1.jpeg', 'title' => 'Industrial Parking Space', 'category' => 'cat-1', 'tags' => 'Commercial, Paving']
                    ];
                @endphp

                @foreach($projects as $project)
                    <div class="masonry-item {{ $project['category'] }} col-lg-4 col-md-6 m-b30">
                        <div class="image-effect-one hover-shadow">
                            <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
                            <div class="figcaption">
                                <h4>{{ $project['title'] }}</h4>
                                <p>{{ $project['tags'] }}</p>
                                <a href="javascript:void(0)"><i class="link-plus site-bg-primary"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
