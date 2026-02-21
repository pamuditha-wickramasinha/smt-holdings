<!-- SLIDER SECTION -->
<div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="construction-slider">
    <div id="rev_slider_one" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.1">
        <ul>
            @php
                $slides = [
                    [
                        'image' => 'images/slide1.jpg',
                        'title' => 'We Build Your Dream',
                        'subtitle' => 'It is a long established fact that a reader will be distracted by the readable content.',
                        'btn1_text' => 'More About',
                        'btn1_url' => '#about',
                        'btn2_text' => 'Contact Us',
                        'btn2_url' => '#contact'
                    ],
                    [
                        'image' => 'images/slide2.jpg',
                        'title' => 'From concept to creation.',
                        'subtitle' => 'It is a long established fact that a reader will be distracted by the readable content.',
                        'btn1_text' => 'More About',
                        'btn1_url' => '#about',
                        'btn2_text' => 'Contact Us',
                        'btn2_url' => '#contact'
                    ],
                    [
                        'image' => 'images/slide3.jpg',
                        'title' => 'Making dreams come to life',
                        'subtitle' => 'It is a long established fact that a reader will be distracted by the readable content.',
                        'btn1_text' => 'More About',
                        'btn1_url' => '#about',
                        'btn2_text' => 'Contact Us',
                        'btn2_url' => '#contact'
                    ]
                ];
            @endphp

            @foreach($slides as $index => $slide)
                <li data-index="rs-{{ 900 + $index }}" data-transition="fade" data-slotamount="default" 
                    data-thumb="{{ asset($slide['image']) }}" data-saveperformance="off">
                    
                    <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}" class="rev-slidebg" 
                        data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat">
                    
                    <!-- Overlay -->
                    <div class="tp-caption tp-shape tp-shapewrapper" id="slide-{{ 900 + $index }}-layer-0"
                        data-x="center" data-y="middle" data-width="full" data-height="full"
                        style="z-index: 1; background-color: rgba(0, 0, 0, 0.0);">
                    </div>

                    <!-- Title -->
                    <div class="tp-caption tp-resizeme" id="slide-{{ 900 + $index }}-layer-2"
                        data-x="left" data-hoffset="50" data-y="middle" data-voffset="-120"
                        data-fontsize="72" data-lineheight="82" data-width="700"
                        data-frames='[{"from":"y:[100%];","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"}]'
                        style="z-index: 13; white-space: normal; font-weight: 700; color:#111; font-family: 'Poppins', sans-serif; text-transform: uppercase;">
                        <div>{{ $slide['title'] }}</div>
                    </div>

                    <!-- Subtitle -->
                    <div class="tp-caption tp-resizeme" id="slide-{{ 900 + $index }}-layer-4"
                        data-x="left" data-hoffset="50" data-y="middle" data-voffset="0"
                        data-fontsize="20" data-lineheight="28" data-width="600"
                        data-frames='[{"from":"y:[100%];","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"}]'
                        style="z-index: 13; white-space: normal; font-weight: 500; color:#111; font-family: 'Poppins', sans-serif;">
                        {{ $slide['subtitle'] }}
                    </div>

                    <!-- Button 1 -->
                    <div class="tp-caption tp-resizeme" id="slide-{{ 900 + $index }}-layer-5"
                        data-x="left" data-hoffset="50" data-y="middle" data-voffset="90"
                        data-frames='[{"from":"y:[100%];","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"}]'
                        style="z-index: 100; text-transform: uppercase; margin: 10px;">
                        <a href="{{ $slide['btn1_url'] }}" class="site-button-secondry btn-effect">
                            {{ $slide['btn1_text'] }}
                        </a>
                    </div>

                    <!-- Button 2 -->
                    <div class="tp-caption tp-resizeme" id="slide-{{ 900 + $index }}-layer-6"
                        data-x="left" data-hoffset="260" data-y="middle" data-voffset="90"
                        data-frames='[{"from":"y:[100%];","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"}]'
                        style="z-index: 100; text-transform: uppercase; margin: 10px;">
                        <a href="{{ $slide['btn2_url'] }}" class="site-button btn-effect">
                            {{ $slide['btn2_text'] }}
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>
