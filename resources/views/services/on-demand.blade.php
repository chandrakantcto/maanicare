@extends('layouts.app')
@section('content')
<section class="ondemand">
    <div class="container-fluid">
        <!-- TOP BAR -->
        <div class="topbar">
            <div class="label">
                <div class="check"><img src="{{ asset('storage/assets/web/img/right-round.svg') }}" alt=""></div>
                <div>On-Demand Services</div>
            </div>

            <div class="iso-row">
                <div class="iso-item">
                    <div class="iso-badge"><img src="{{ asset('storage/assets/web/img/iso-black.png') }}" alt=""></div>
                    <div>ISO 9001:2015</div>
                </div>
                <div class="iso-item">
                    <div class="iso-badge"><img src="{{ asset('storage/assets/web/img/iso-black.png') }}" alt=""></div>
                    <div>ISO 14001:2015</div>
                </div>
                <div class="iso-item">
                    <div class="iso-badge"><img src="{{ asset('storage/assets/web/img/iso-black.png') }}" alt=""></div>
                    <div>ISO 45001:2018</div>
                </div>
            </div>
        </div>

        <!-- HERO -->
        <div class="hero">
            <h1>Everyday Tasks. Handled Effortlessly.</h1>
            <p>
                Powered by BookMyTask, Maanicare’s on-demand services bring trusted professionals,
                transparent pricing, and seamless execution, right when you need it.
            </p>
            <button class="btn">Speak to a Taskforce Specialist</button>
        </div>

        <!-- MID ROW -->
        <div class="mid">

            <!-- Left Logo -->
            <div class="brand">
                <h2>
                    <img src="{{ asset('storage/assets/web/img/bookmy-task.png') }}" alt="">
                </h2>
            </div>

            <!-- Center Image -->
            <div class="team">
                <!-- ✅ Replace this image with your own -->
                <img src="{{ asset('storage/assets/web/img/fiveman-imge.png') }}" alt="Team" />
            </div>

            <!-- Right Call -->
            <div class="call">
                <div>
                    Call to request a<br />
                    <span>booking at 1800 3000 5149</span>
                </div>
            </div>

        </div>

        <!-- FEATURES -->
        <div class="features">
            <div class="feature">
                <div class="icon"><img src="{{ asset('storage/assets/web/img/calender-icon.svg') }}" alt="" width="26"></div>
                <div>30 Days Service Warranty*</div>
            </div>

            <div class="feature">
                <div class="icon"><img src="{{ asset('storage/assets/web/img/task-ins.svg') }}" alt="" width="26"></div>
                <div>Task Insurance*</div>
            </div>

            <div class="feature">
                <div class="icon"><img src="{{ asset('storage/assets/web/img/task-satisfaction.svg') }}" alt="" width="26"></div>
                <div>100% Task Satisfaction</div>
            </div>

            <div class="feature">
                <div class="icon"><img src="{{ asset('storage/assets/web/img/currency-rupee--icongolden.svg') }}" alt="" width="26"></div>
                <div>Transparent Pricing</div>
            </div>

            <div class="feature">
                <div class="icon"><img src="{{ asset('storage/assets/web/img/secuare-booking.svg') }}" alt="" width="26"></div>
                <div>Secure Booking Process</div>
            </div>
        </div>

        <div class="terms">*Terms and conditions apply</div>

    </div>
</section>



<section class="serviceLayout">
    <div class="container-fluid">
        <div class="service-wrap">
            <div class="service-img">
                <img src="{{ asset('storage/assets/web/img/full-day-services.jpg') }}" alt="Service Image">
            </div>
            <div class="services-grid">

                <div class="service-card">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/deliveryparcel.svg') }}" alt=""></div>
                    <h4>Delivery Parcel</h4>
                </div>

                <div class="service-card">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/vastuconsultation.svg') }}" alt=""></div>
                    <h4>Vastu Consultation</h4>
                </div>

                <div class="service-card">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/signagecleaning.svg') }}" alt=""></div>
                    <h4>Signage Cleaning<br>&amp; Maintenance</h4>
                </div>

                <div class="service-card">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/carpentry.svg') }}" alt=""></div>
                    <h4>Carpentry</h4>
                </div>

                <div class="service-card">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/electrical.svg') }}" alt=""></div>
                    <h4>Electrical</h4>
                </div>

                <div class="service-card">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/deepcleaning.svg') }}" alt=""></div>
                    <h4>Deep Cleaning</h4>
                </div>

                <div class="service-card">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/plumbing.svg') }}" alt=""></div>
                    <h4>Plumbing</h4>
                </div>

                <div class="service-card">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/gardnerathome.svg') }}" alt=""></div>
                    <h4>Gardner<br>At Home</h4>
                </div>

                <div class="service-card">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/carbBikecleaning.svg') }}" alt=""></div>
                    <h4>Car &amp;<br>Bike Cleaning</h4>
                </div>

                <div class="service-card">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/pest_control.svg') }}" alt=""></div>
                    <h4>Pest Control</h4>
                </div>

                <div class="service-card">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/chefathome.svg') }}" alt=""></div>
                    <h4>Chef At Home</h4>
                </div>

            </div>

        </div>

    </div>
</section>




<div class="on-demand-services">
    <section class="wrap">
        <div class="container-fluid">

            <div class="tabs" id="tabs1">
                <button class="tab-btn active" data-tab="homes1">FOR HOMES</button>
                <button class="tab-btn" data-tab="enterprises1">FOR ENTERPRISES</button>
                <button class="tab-btn" data-tab="societies1">FOR HOUSING SOCIETIES</button>
            </div>

            <!-- HOMES -->
            <div class="tab-content active" id="homes1">
                <div class="section-title">Everyday help, without stress</div>

                <div class="services-grid">
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Group 31.svg') }}"
                                alt="Electrical"></span>Electrical
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/imagesearch_roller.svg') }}"
                                alt="Electrical"></span>Paint & Polish</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Group 29.svg') }}"
                                alt="Electrical"></span>Car & Bike
                        Care</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/skillet.svg') }}"
                                alt="Electrical"></span>Kitchen
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Group 48096012.svg') }}"
                                alt="Electrical"></span>Deluxe
                        Cleaning</div>

                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/oven_gen.svg') }}"
                                alt="Electrical"></span>Appliance
                        Installation</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/acute.svg') }}"
                                alt="Electrical"></span>Express Cleaning
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/raven.svg') }}" alt="Electrical"></span>Bird
                        Netting
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Instagram post - 23.svg') }}"
                                alt="Electrical"></span>Sofa Shampooing</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/architecture.svg') }}"
                                alt="Electrical"></span>Interior &
                        Remodeling</div>

                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/plumbing.svg') }}"
                                alt="Electrical"></span>Plumbing</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/home_pin.svg') }}"
                                alt="Electrical"></span>Move-In
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/deceased.svg') }}"
                                alt="Electrical"></span>Gardening
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Instagram post - 22.svg') }}"
                                alt="Electrical"></span>Fridge Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/explore.svg') }}"
                                alt="Electrical"></span>Vastu
                        Consultation</div>

                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/water_pump.svg') }}"
                                alt="Electrical"></span>Water Tank
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Instagram post - 21.svg') }}"
                                alt="Electrical"></span>Mattress Shampooing</div>
                        <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/vacuum.svg') }}" alt="Electrical"></span>High
                        Definition
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/pest_control.svg') }}"
                                alt="Electrical"></span>Pest
                        Control</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Instagram post - 17.svg') }}"
                                alt="Electrical"></span>H2O
                        : Healthy Water</div>

                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/handyman.svg') }}"
                                alt="Electrical"></span>Carpentry
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Group 3.svg') }}"
                                alt="Electrical"></span>Chef-a-home
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Group 48096016.svg') }}"
                                alt="Electrical"></span>Washroom
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Instagram post - 25.svg') }}"
                                alt="Electrical"></span>Floor Polishing</div>
                </div>
            </div>

            <!-- ENTERPRISES -->
            <div class="tab-content" id="enterprises1">
                <div class="section-title">Professional upkeep, on demand</div>
                <div class="services-grid">
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/sprint.svg') }}" alt="Electrical"></span>Book
                        My Runner
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/window.svg') }}" alt="Electrical"></span>Post
                        Project
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Group 4809s6016.svg') }}"
                                alt="Electrical"></span>Office
                        Scan Pro</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/handsyman.svg') }}"
                                alt="Electrical"></span>Carpet
                        Shampooing</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/acutess.svg') }}"
                                alt="Electrical"></span>Event
                        Decoration</div>

                                <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/mop.svg') }}" alt="Electrical"></span>Façade
                        Cleaning
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/store.svg') }}"
                                alt="Electrical"></span>Signage
                        Maintenance</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/event_seat.svg') }}"
                                alt="Electrical"></span>Cabin
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/pest_contsrol.svg') }}"
                                alt="Electrical"></span>Deluxe
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/architectsure.svg') }}"
                                alt="Electrical"></span>Event
                        Support</div>

                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/search.svg') }}"
                                alt="Electrical"></span>Washroom
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/countertops.svg') }}"
                                alt="Electrical"></span>Chair
                        Shampooing</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Grosup 31.svg') }}"
                                alt="Electrical"></span>Electrical
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/imageseassrch_roller.svg') }}"
                                alt="Electrical"></span>Floor Polishing</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/oven_gssen.svg') }}"
                                alt="Electrical"></span>Plumbing
                    </div>

                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Instagsaram post - 20.svg') }}"
                                alt="Electrical"></span>Carpentry</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Group 4809sss6012.svg') }}"
                                alt="Electrical"></span>Pest
                        Control</div>
                            <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/decessased.svg') }}"
                                alt="Electrical"></span>Paint &
                        Polish</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Instagram post - 25.svg') }}"
                                alt="Electrical"></span>Gardening</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/bug_report.svg') }}"
                                alt="Electrical"></span>High
                        Definition Cleaning</div>

                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/festsival.svg') }}"
                                alt="Electrical"></span>Express
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/divssersity_3.svg') }}"
                                alt="Electrical"></span>Interior
                        & Remodeling</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/plusmbing.svg') }}"
                                alt="Electrical"></span>Appliance
                        Installation</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/vacusssum.svg') }}"
                                alt="Electrical"></span>Termite
                        Treatment</div>
                </div>
            </div>

            <!-- SOCIETIES -->
            <div class="tab-content" id="societies1">
                <div class="section-title">Scalable services for shared spaces</div>

                <div class="services-grid">
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/water_pump.svg') }}"
                                alt="Electrical"></span>Water Tank
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/apasrtment.svg') }}"
                                alt="Electrical"></span>Society
                        Office Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Group 31.svg') }}"
                                alt="Electrical"></span>Electrical
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/plumbing.svg') }}"
                                alt="Electrical"></span>Plumbing</div>
                        <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/imagesearch_roller.svg') }}"
                                alt="Electrical"></span>Paint & Polish</div>

                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/decessased.svg') }}"
                                alt="Electrical"></span>Make My
                        Garden</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Group 48096019.svg') }}"
                                alt="Electrical"></span>Mosquito
                        Fogging</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/bug_report.svg') }}"
                                alt="Electrical"></span>High
                        Definition Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/handyman.svg') }}"
                                alt="Electrical"></span>Carpentry
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/festsival.svg') }}"
                                alt="Electrical"></span>Express
                        Cleaning</div>

                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/build.svg') }}"
                                alt="Electrical"></span>Repairs &
                        Maintenance</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/pest_control_rodent.svg') }}"
                                alt="Electrical"></span>Rodent Control</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Group 480960ssss16.svg') }}"
                                alt="Electrical"></span>Washroom Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/pest_contsrol.svg') }}"
                                alt="Electrical"></span>Termite
                        Treatment</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/ssssss.svg') }}"
                                alt="Electrical"></span>Floor Polishing
                    </div>

                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/mop.svg') }}" alt="Electrical"></span>Façade
                        Cleaning
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/local_parking.svg') }}"
                                alt="Electrical"></span>Parking
                        Area Cleaning</div>
                            <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/pest_control.svg') }}"
                                alt="Electrical"></span>Pest
                        Control</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/sprint.svg') }}" alt="Electrical"></span>Book
                        My Runner
                    </div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/sssssqwe.svg') }}"
                                alt="Electrical"></span>Window
                        Cleaning</div>

                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/pools.svg') }}"
                                alt="Electrical"></span>Common Area
                        Cleaning</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/Group 48095841.svg') }}"
                                alt="Electrical"></span>Exclusive Services</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/view_day.svg') }}"
                                alt="Electrical"></span>Signage
                        Maintenance</div>
                    <div class="service"><span class="ico"><img src="{{ asset('storage/assets/web/img/ravSDen.svg') }}"
                                alt="Electrical"></span>Bird Netting
                    </div>
                </div>
            </div>



            <!-- ====== SECOND SAME BLOCK LIKE SCREENSHOT ====== -->
            <div class="block-gap"></div>
        </div>
    </section>



    <script>
        // Generic tabs function (works for multiple tab groups)
        function initTabs(tabsId) {
            const tabsWrap = document.getElementById(tabsId);
            const buttons = tabsWrap.querySelectorAll(".tab-btn");

            buttons.forEach(btn => {
                btn.addEventListener("click", () => {
                    // remove active from siblings
                    buttons.forEach(b => b.classList.remove("active"));
                    btn.classList.add("active");

                    // hide all contents related to these buttons
                    buttons.forEach(b => {
                        const targetId = b.getAttribute("data-tab");
                        document.getElementById(targetId).classList.remove("active");
                    });

                    // show clicked content
                    const activeId = btn.getAttribute("data-tab");
                    document.getElementById(activeId).classList.add("active");
                });
            });
        }

        initTabs("tabs1");
        initTabs("tabs2");
    </script>
</div>

<section class="trusted-section">
    <div class="container-fluid">

        <div class="trusted-wrap">

            <!-- LEFT -->
            <div class="trusted-left">
                <div class="top-label">OUTCOMES THAT MATTER</div>

                <h2>Trusted by 100,000+ Customers</h2>

                <div class="trusted-list">

                    <div class="trusted-item">
                        <div class="icon">
                            <img src="{{ asset('storage/assets/web/img/time-saved.svg') }}" alt="">
                        </div>
                        <p>Time saved</p>
                    </div>

                    <div class="trusted-item">
                        <div class="icon">
                            <img src="{{ asset('storage/assets/web/img/Support that.svg') }}" alt="">
                        </div>
                        <p>Support that stays with you till completion</p>
                    </div>

                    <div class="trusted-item">
                        <div class="icon">
                            <img src="{{ asset('storage/assets/web/img/done_all_golden.svg') }}" alt="">
                        </div>
                        <p>Spaces that run better</p>
                    </div>
                    <div class="trusted-item">
                        <div class="icon">
                            <div class="icon">
                                <img src="{{ asset('storage/assets/web/img/peaceofmind.svg') }}" alt="">
                            </div>
                        </div>
                        <p>Peace of mind, guaranteed</p>
                    </div>

                    <div class="trusted-item">
                        <div class="icon">
                            <div class="icon">
                                <img src="{{ asset('storage/assets/web/img/reliable-professionals.svg') }}" alt="">
                            </div>
                        </div>
                        <p>Reliable professionals, every time</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="trusted-right">
                <!-- ✅ Replace with your image -->
                <img src="{{ asset('storage/assets/web/img/family-img.png') }}" alt="Trusted Customers">
            </div>

        </div>

    </div>
</section>

<div class="container-fluid">
        <section class="consult-section">
            <div class="consult-container">
                <!-- Left -->
                <div class="consult-left">
                    <h1>Your Task. Our Commitment.</h1>
                    <p>
                        Your request goes straight to verified professionals, supported till completion.
                    </p>

                    <div class="consult-icons">
                        <a href="https://api.whatsapp.com/send/?phone=919833006916&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                        <a href="mailto:care@manicare.com"><i class="fa-regular fa-envelope"></i></a>
                        <a href="tel:+9833006916"><i class="fa-solid fa-phone"></i></a>
                    </div>
                </div>

                <!-- Right -->
                @include('inclides.request-consultation-form')
            </div>
        </section>
    </div>
    
    
@endsection
@section('scripts')
    
@endsection
