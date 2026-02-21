<div id="contact" class="section-full site-bg-dark">
    <div class="section-content">
        <div class="container get-in-touch-form">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-home1-left contact-home1-left-v2 site-bg-dark p-a30 m-b30 p-t50">
                        <h3 class="text-white m-t0 m-b30">
                            <span class="font-weight-100">Get In</span> Touch
                        </h3>

                        <div class="contact-details text-white p-t10">
                            <div class="info-block m-b30">
                                <h4 style="color: #ffb800; font-weight: 600;" class="m-b5 m-t0">Address</h4>
                                <p style="font-size: 16px; opacity: 0.8; line-height: 1.6;" class="m-b0">
                                    123 Construction Avenue,<br>
                                    Building City, State 12345
                                </p>
                            </div>

                            <div class="info-block m-b30">
                                <h4 style="color: #ffb800; font-weight: 600;" class="m-b5 m-t0">Email</h4>
                                <p style="font-size: 16px; opacity: 0.8;" class="m-b0">
                                    <a href="mailto:info@yourdomain.com" class="text-white"
                                        style="text-decoration: none;">info@yourdomain.com</a>
                                </p>
                            </div>

                            <div class="info-block m-b30">
                                <h4 style="color: #ffb800; font-weight: 600;" class="m-b5 m-t0">Phone</h4>
                                <p style="font-size: 16px; opacity: 0.8;" class="m-b0">
                                    <a href="tel:+1234567890" class="text-white" style="text-decoration: none;">+1 (234)
                                        567-8900</a>
                                </p>
                            </div>

                            <hr style="border-color: rgba(255,255,255,0.1); margin: 40px 0 20px 0;">

                            <div class="social-block">
                                <h4 style="color: #ffb800; font-weight: 600; font-size: 18px;" class="m-b15">Connect
                                    With Us</h4>
                                <ul class="list-inline" style="display: flex; gap: 15px; padding: 0; list-style: none;">
                                    <li>
                                        <a href="https://facebook.com/yourprofile" target="_blank"
                                            style="background: #3b5998; color: white; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 4px; text-decoration: none; transition: 0.3s;">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('app.company_phone')) }}"
                                            target="_blank"
                                            style="background: #25d366; color: white; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 4px; text-decoration: none; transition: 0.3s;">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

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