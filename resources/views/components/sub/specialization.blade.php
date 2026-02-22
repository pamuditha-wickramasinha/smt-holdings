<!-- SPECIALIZATION SECTION -->
<div id="specialization" class="section-full bg-white slider-half-part about-info2-wrap">
    <div class="container">
        <div class="section-content">
            <div class="row d-flex justify-content-center">
                @php
                    $specializations = [
                        [
                            'number' => '1',
                            'icon' => 'images/compass.png',
                            'image' => 'images/1.jpg',
                            'title' => 'Interlock Paving',
                            'description' => 'Premium interlock paving for driveways, pathways, parking areas and outdoor spaces with durable, decorative finishes.'
                        ],
                        [
                            'number' => '2',
                            'icon' => 'images/crane-1.png',
                            'image' => 'images/3.jpg',
                            'title' => 'Building Construction',
                            'description' => 'Full-scale residential and commercial building construction with a focus on quality, safety and timely delivery.'
                        ],
                        [
                            'number' => '3',
                            'icon' => 'images/renovation.png',
                            'image' => 'images/2.jpg',
                            'title' => 'Road Construction',
                            'description' => 'Expert road construction and civil infrastructure works covering asphalt, concrete and all related civil works.'
                        ]
                    ];
                @endphp

                @foreach($specializations as $spec)
                    <div class="col-lg-4 col-md-6 m-b30">
                        <div class="half-blocks">
                            <div class="mt-icon-box-wraper center m-b30">
                                <div class="half-block-content icon-count-2 p-a30 p-tb50">
                                    <span class="icon-count-number">{{ $spec['number'] }}</span>
                                    <div class="mt-icon-box-lg radius bg-gray m-b20 scale-in-center">
                                        <span class="icon-cell">
                                            <img src="{{ asset($spec['icon']) }}" alt="{{ $spec['title'] }}">
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="mt-tilte m-b25">{{ $spec['title'] }}</h4>
                                        <p>{{ $spec['description'] }}</p>
                                        <!-- <a href="{{ route('services') }}" class="site-button-link" data-hover="Read More">
                                            Read More <i class="fa fa-angle-right arrow-animation"></i>
                                        </a> -->
                                    </div>
                                </div>
                                <div class="bg-cover half-blocks-bg" 
                                    style="background-image: url({{ asset($spec['image']) }});">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
