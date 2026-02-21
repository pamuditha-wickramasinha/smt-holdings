<!-- GET IN TOUCH SECTION -->
<div id="contact" class="section-full site-bg-dark">
    <div class="section-content">
        <div class="container get-in-touch-form">
            <div class="row">
                <!-- CONTACT FORM -->
                <div class="col-lg-6 col-md-6">
                    <div class="contact-home1-left contact-home1-left-v2 site-bg-dark p-a30 m-b30 p-t50">
                        <h3 class="text-white m-t0">
                            <span class="font-weight-100">Get In</span> Touch
                        </h3>
                        <form class="cons-contact-form2 form-transparent" method="POST" action="{{ route('contact.submit') }}">
                            @csrf

                            <div class="input input-animate">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" required>
                                <span class="spin"></span>
                            </div>

                            <div class="input input-animate">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required>
                                <span class="spin"></span>
                            </div>

                            <div class="input input-animate">
                                <label for="phone">Phone</label>
                                <input type="tel" name="phone" id="phone" required>
                                <span class="spin"></span>
                            </div>

                            <div class="input input-animate">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" required></textarea>
                                <span class="spin"></span>
                            </div>

                            <div class="text-left p-t10">
                                <button type="submit" class="site-button btn-effect">
                                    Submit Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- INFO BOX -->
                <div class="get-in-touch-form-section">
                    <div class="get-in-touch-form-section-img">
                        <img src="{{ asset('images/s-pic-1.png') }}" alt="Contact">
                    </div>
                    <div class="get-in-touch-info arrow-animation">
                        <div class="mt-icon-box-wraper p-a20 left bg-white hover-shadow">
                            <div class="icon-md m-b20 scale-in-center">
                                <span class="icon-cell text-secondry">
                                    <img src="{{ asset('images/icon-img-01.png') }}" alt="Icon">
                                </span>
                            </div>
                            <div class="icon-content">
                                <h4 class="mt-tilte m-b0">Great Experience for Building Construction & Renovation</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
