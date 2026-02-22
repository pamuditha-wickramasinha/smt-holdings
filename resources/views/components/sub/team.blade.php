<!-- TEAM SECTION -->
<div id="team" class="section-full p-t80 p-b50 square_shape1 our-team2-wrap mobile-page-padding bg-parallax bg-cover" 
    data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/bg5.jpg') }});">
    <div class="container">
        <!-- TITLE -->
        <div class="section-head text-center text-white">
            <div class="mt-separator-outer separator-center">
                <div class="mt-separator">
                    <h2 class="text-white text-uppercase sep-line-one">
                        <span class="font-weight-300 site-text-primary">Our</span> Team
                    </h2>
                </div>
            </div>
            <h2>Meet the people behind SMT Holdings</h2>
        </div>

        <!-- TEAM MEMBERS -->
        <div class="section-content">
            <div class="row">
                @php
                    $team_members = [
                        ['image' => 'images/pic4.png', 'name' => 'Avie Beaton', 'role' => 'Ceo & Architect'],
                        ['image' => 'images/pic3.png', 'name' => 'Ben Jonson', 'role' => 'Architect'],
                        ['image' => 'images/pic2.png', 'name' => 'Ashley Fletcher', 'role' => 'Finances'],
                        ['image' => 'images/pic5.png', 'name' => 'Ashley Fletcher', 'role' => 'Finances']
                    ];
                @endphp

                @foreach($team_members as $member)
                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                        <div class="our-team-2">
                            <div class="profile-image scale-in-center">
                                <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}">
                            </div>
                            <div class="figcaption text-black">
                                <h4>{{ $member['name'] }}</h4>
                                <h5>{{ $member['role'] }}</h5>
                                <div class="icons">
                                    <a href="{{ config('app.company_facebook') }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://wa.me/{{ config('app.company_whatsapp') }}" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
