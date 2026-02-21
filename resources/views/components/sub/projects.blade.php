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
                <ul class="filter-navigation inline-navigation masonry-filter link-style text-uppercase">
                    <li class="active"><a data-filter="*" href="javascript:void(0);" data-hover="All">All</a></li>
                    <li><a data-filter=".cat-1" href="javascript:void(0);" data-hover="Construction">Construction</a></li>
                    <li><a data-filter=".cat-2" href="javascript:void(0);" data-hover="Renovation">Renovation</a></li>
                    <li><a data-filter=".cat-3" href="javascript:void(0);" data-hover="Outdoor">Outdoor</a></li>
                    <li><a data-filter=".cat-4" href="javascript:void(0);" data-hover="Interiors">Interiors</a></li>
                    <li><a data-filter=".cat-5" href="javascript:void(0);" data-hover="Consulting">Consulting</a></li>
                </ul>
            </div>
        </div>

        <!-- PORTFOLIO GRID -->
        <div class="section-content">
            <div class="portfolio-wrap row mfp-gallery product-stamp clearfix">
                @php
                    $projects = [
                        ['image' => 'images/pic4.jpg', 'title' => '2-storey House', 'category' => 'cat-1', 'tags' => 'Construction, interior'],
                        ['image' => 'images/pic2_2.jpg', 'title' => 'City Buildings', 'category' => 'cat-2', 'tags' => 'Buildings, Engineering'],
                        ['image' => 'images/pic3_2.jpg', 'title' => 'Living room', 'category' => 'cat-3', 'tags' => 'Aqaba, Jordan'],
                        ['image' => 'images/pic5.jpg', 'title' => 'Bridge Architecture', 'category' => 'cat-4', 'tags' => 'Design and Construction'],
                        ['image' => 'images/pic7.jpg', 'title' => 'Feugiat nulla', 'category' => 'cat-5', 'tags' => 'Engineering, interior'],
                        ['image' => 'images/pic6_1.jpg', 'title' => 'Skeptic cambridge', 'category' => 'cat-4', 'tags' => 'Construction']
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
