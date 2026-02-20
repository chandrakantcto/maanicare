<section class="footerboxone insights-section">
    <div class="insights-container">
        <h2 class="">Industry Insights, Delivered with Care.</h2>
        <p class="text-white">
            Insights on projects, facilities, and workforce management. Shared thoughtfully, not frequently.
        </p>

        <form class="insights-form js-ajax-form" action="{{ route('newsletter-subscribe.store') }}" method="POST"
            data-success-message="Thank you! You have been subscribed to our newsletter.">
            @csrf
            <div class="inputs d-md-flex gap-3">
                <input type="text" name="name" placeholder="Your Name" required />
                <input type="email" name="email" placeholder="Email Address" required />
            </div>

            <div class="js-form-message mb-2" style="display: none;"></div>

            <button type="submit">SUBMIT REQUEST</button>
        </form>
    </div>
</section>

{{-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> --}}

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">

            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            <div class="toast-body d-flex align-items-center gap-2">
                <img src="{{asset('storage/assets/web/img/Group.svg')}}" alt="">
                <p class="m-0"> <strong class="d-block">Track your progress 
                with the OneMaanicare App</p>
            </div>
        </div>
    </div>

    
<footer class="footer">

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let btn = document.getElementById("req-consult-head");

        btn.addEventListener("click", function () {
            let modal = new bootstrap.Modal(document.getElementById("requestConsultModal"));
            modal.show();
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let btn = document.getElementById("req-consult-headone");

        btn.addEventListener("click", function () {
            let modal = new bootstrap.Modal(document.getElementById("requestConsultModal"));
            modal.show();
        });
    });
</script>
    <!-- Request Consult Modal -->
<div class="accessRequestModalss modal fade" id="requestConsultModal" tabindex="-1" aria-hidden="true" background-color:linear-gradient(to right bottom, rgb(89, 27, 66), rgb(63, 5, 41));>
    <div class="conatctformclass modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
<button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                data-bs-dismiss="modal" aria-label="Close"></button>
            <section class="">
        <div class="">
            <div class="consult-section">
                <div class="consult-container">
                    <!-- Left -->
                    <div class="consult-left">
                        <h1>Request a Consult</h1>
                        <p>
                            Whether you’re planning a project, managing facilities, or scaling operations, our team is ready to support you.
                        </p>

                        <div class="consult-icons">
                            <a href="https://api.whatsapp.com/send/?phone=919833006916&text&type=phone_number&app_absent=0"><img src="{{ asset('storage/assets/web/img/watsap-white-icon.svg') }}"
                                    alt="" /></a>
                            <a href="mailto:care@manicare.com"><img src="{{ asset('storage/assets/web/img/mail-white-icon.svg') }}"
                                    alt="" /></a>
                            <a href="tel:+9833006916"><img src="{{ asset('storage/assets/web/img/call-white-icon.svg') }}"
                                    alt="" /></a>
                        </div>
                    </div>

                    <!-- Right -->
                    @include('inclides.request-consultation-form')
                </div>
            </div>
        </div>
    </section>

        </div>
    </div>
</div>


    <div class="container-fluid">
        <!-- Left Column -->
        <div class="row">
            <div class="threefootreclass col-lg-2 text-center text-lg-start mb-4">
                <div class="mb-3 footerlogo"><img src="{{ asset('storage/assets/web/img/Layer_1.svg') }}" width="100"
                        alt="" />
                </div>
                <div class="social-icons">
                    <a href="#"><img src="{{ asset('storage/assets/web/img/wattsapp.png') }}" alt=""
                            width="35" /></a>
                    <a href="#"><img src="{{ asset('storage/assets/web/img/facebook.png') }}" alt=""
                            width="35" /></a>
                    <a href="https://www.instagram.com/maanicare?utm_source=qr"><img
                            src="{{ asset('storage/assets/web/img/instagrame.png') }}" alt=""
                            width="35" /></a>
                    <a href="https://www.linkedin.com/company/maani-care/"><img
                            src="{{ asset('storage/assets/web/img/linkdin.png') }}" alt="" width="35" /></a>
                </div>

                <div class="qr-box mt-4">
                    <img src="{{ asset('storage/assets/web/img/Frame 132132gggg0099.svg') }}"  class="oneimages" alt="" width="170" />
                     <img src="{{ asset('storage/assets/web/img/iconssss.svg') }}"  class="oneimages2" alt="" width="170" />
                </div>
            </div>

            <div class="col-lg-10">
                <div class="footerLine">
                    <h6>Services</h6>
                    <ul class="footerPoints">
                        <li><span><a href="{{ route('services.project-and-fit-out') }}">Project & Fit-Out Services</a></span></li>
                        <li><span><a href="{{ route('services.staffing-payroll-and-compliance') }}">Staffing, Payroll & Compliance Services</a></span></li>
                        <li><span><a href="{{ route('services.integrated-facility-management') }}">Integrated Facility Management Services</a></span></li>
                        <li><span><a href="{{ route('services.on-demand') }}">On-Demand Services</a></span></li>
                    </ul>
                </div>
                <!--<div class="footerLine">-->
                <!--    <h6>Solutions</h6>-->
                <!--    <ul class="footerPoints">-->
                <!--        <li><span>Lorem ipsum dolor sit amet</span></li>-->
                <!--        <li><span>Lorem ipsum dolor sit amet</span></li>-->
                <!--        <li><span>Lorem ipsum dolor sit amet</span></li>-->
                <!--        <li><span>Lorem ipsum dolor sit amet</span></li>-->
                <!--    </ul>-->
                <!--</div>-->
                <div class="footerLine">
                    <h6>About Us</h6>
                    <ul class="footerPoints">
                        <li><span><a href="{{ route('our-story') }}">Our Story</a> </span></li>
                        <li><span><a href="{{ route('our-team') }}">The Team</a></span></li>
                        <li><span><a href="{{ route('clients') }}">Clients</a></span></li>
                        <li><span><a href="#">Sustainability</a></span></li>
                    </ul>
                </div>
                <div class="footerLine">
                    <h6>Contact Us</h6>
                    <ul class="footerPoints">
                        <li><span><a href="{{ route('contact-us') }}">Contact Us</a></span></li>
                        <li>
                            <span><a href="tel:+9833006916"><img src="{{ asset('storage/assets/web/img/call.svg') }}"
                                        alt="" class="me-1" /> +91 98330
                                    06916</a></span>
                        </li>
                        <li>
                            <span><a href="https://api.whatsapp.com/send/?phone=919833006916&text&type=phone_number&app_absent=0
"
                                    target="_blank"><img src="{{ asset('storage/assets/web/img/watssappftr.svg') }}"
                                        alt="" class="me-1" />+91 98330
                                    06916</a></span>
                        </li>
                        <li>
                            <span><a href="mailto:care@manicare.com"><img
                                        src="{{ asset('storage/assets/web/img/mail (1).svg') }}" alt=""
                                        class="me-1" />care@manicare.com</a></span>
                        </li>
                        <li><span><a href="https://www.linkedin.com/company/maani-care/" target="_blank">Careers</a></span></li>
                    </ul>
                </div>
                <div class="footerLine">
                    <h6>Knowledge Hub</h6>
                    <ul class="footerPoints">
                        <li><span><a href="{{ route('case-studies') }}">Insights That Build Trust</a></span></li>
                        <li><span><a href="{{ route('blog') }}">The Paper</a></span></li>
                    </ul>
                </div>
                <div class="footerLine">
                    <h6>Our Registered Offices</h6>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('storage/assets/web/img/pin-drop.png') }}" alt=""
                            width="24" />
                        <span class="linegray ms-3"> <a href="https://maps.app.goo.gl/bJxXfzxwrPD4wHZm6?g_st=iw"
                                target="_blank">
                                <b>Head Office</b>Maanicare System India Pvt. Ltd., 1st Floor, B Wing, Unit 101,
                                Samartha Aishwarya, Off New Link Road, K L Walanalkar Marg, Andheri West, Mumbai -
                                400053</a></span>
                    </div>
                    <ul class="mt-2">
                        <li>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/assets/web/img/pin-drop.png') }}" alt=""
                                    width="24" />
                                <span class="linegray ms-3"> <a href="https://maps.app.goo.gl/tn75u8gE2k5Udazf9"
                                        target="_blank"> <b>Workshop</b>Goregaon, Mumbai</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/assets/web/img/pin-drop.png') }}" alt=""
                                    width="24" />
                                <span class="linegray ms-3"> <a
                                        href="https://maps.app.goo.gl/bJxXfzxwrPD4wHZm6?g_st=iw" target="_blank">
                                        <b>Innovation Centre</b>Raigad, Maharashtra</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/assets/web/img/pin-drop.png') }}" alt=""
                                    width="24" />
                                <span class="linegray ms-3"> <a href="https://maps.app.goo.gl/jGqRk6QyviUieRY49"
                                        target="_blank">
                                        <b>Regional Offices</b>Bengaluru, Chennai, Delhi, Jamnagar</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="mb-4">
    <img src="{{ asset('storage/assets/web/img/maanicare.png') }}" alt="" width="100%"
        class="mb-4 mt-3" />
    <div class="container-fluid">
        <div class="footerBottom">
            <ul class="bottomTxt">
                <li>©1992-2026 Maanicare System India Pvt. Ltd. All Rights Reserved</li>
                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                <li><a href="{{ route('terms-and-conditions') }}">Terms & Conditions</a></li>
            </ul>
            <strong>Designed & Developed by 8Masons</strong>
        </div>
    </div>
</div>



<script>
document.addEventListener("DOMContentLoaded", function () {

    if (window.innerWidth <= 767) {

        const footerSections = document.querySelectorAll(".footerLine");

        footerSections.forEach(section => {

            const heading = section.querySelector("h6");

            heading.addEventListener("click", function () {

                // Close all first
                footerSections.forEach(item => {
                    if (item !== section) {
                        item.classList.remove("active");
                    }
                });

                // Toggle current
                section.classList.toggle("active");

            });

        });

    }

});
</script>









