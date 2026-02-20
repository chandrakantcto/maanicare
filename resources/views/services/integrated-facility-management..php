@extends('layouts.app')
@section('content')
    <section class="facilityManagement">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <!-- Left Image -->
                <div class="col-lg-7">
                    <!-- Replace hero.jpg with your image -->
                    <img src="{{ asset('storage/assets/web/img/intigrated-face.jpg') }}" alt="Office Interior" class="hero-image">
                </div>

                <!-- Right Content -->
                <div class="col-lg-5">
                    <div class="hero-content">
                        <div class="hero-tag"><img src="{{ asset('storage/assets/web/img/graph_5sss.svg') }}" alt=""> Integrated Facility Management Services</div>

                        <h1 class="hero-title">
                            Integrated Facilities.<br>
                            Smarter Workplaces.
                        </h1>

                        <p class="hero-desc">
                            Maanicare orchestrates people, processes, spaces, and technology to create
                            environments where businesses operate seamlessly and people thrive.
                        </p>

                        <button class="btn btn-custom">Request a Consultation</button>

                        <div class="certs">
                            <span><img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="" width="30"> ISO 9001:2015</span>
                            <span><img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="" width="30"> ISO 14001:2015</span>
                            <span><img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="" width="30"> ISO 45001:2018</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="operatingSys">
        <div class="container-fluid">

            <div class="services-top-text">
                ALL SERVICES, ONE COORDINATED OPERATING FRAMEWORK.
            </div>

            <div class="row sixlassbox justify-content-center">

                <!-- Item 1 -->
                <div class="col-6 col-md-4 col-lg-2 service-item">
                    <img src="{{ asset('storage/assets/web/img/hard&soft-icon-golden.svg') }}" alt="Hard & Soft FM" class="service-icon" width="30">
                    <div class="service-title">
                        Hard & Soft FM<br>Under One Partner
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-6 col-md-4 col-lg-2 service-item">
                    <img src="{{ asset('storage/assets/web/img/pan-india-icon-golden.svg') }}" alt="Pan India" class="service-icon" width="30">
                    <div class="service-title">
                        Pan-India<br>Capability
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-6 col-md-4 col-lg-2 service-item">
                    <img src="{{ asset('storage/assets/web/img/compliance-Focused.svg') }}" alt="Compliance" class="service-icon" width="30">
                    <div class="service-title">
                        Compliance-led<br>Operations
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="col-6 col-md-4 col-lg-2 service-item">
                    <img src="{{ asset('storage/assets/web/img/broadcast-icon-golden.svg') }}" alt="Technology" class="service-icon" width="30">
                    <div class="service-title">
                        Technology-enabled<br>Systems
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="col-6 col-md-4 col-lg-2 service-item">
                    <img src="{{ asset('storage/assets/web/img/currency-rupee--icongolden.svg') }}" alt="Cost" class="service-icon" width="30">
                    <div class="service-title">
                        Reduced Total Cost<br>of Ownership
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="built-around-you">
        <div class="container-fluid">
            <h2 class="main-title">
                More Than Maintenance. <br>
                Complete Environment Management.
            </h2>
            <p class="description">
                Integrated Facilities Management at Maanicare is designed to do more than maintain assets. We build
                unified, intelligently run environments that improve productivity, strengthen compliance, and protect
                long-term asset value.
            </p>
        </div>
    </section>

    <section class="featureStructured">
        <div class="container-fluid">
            <div class="row g-0 align-items-end">
                <!-- Left Content -->
                <div class="col-lg-4">
                    <div class="feature-left">

                        <div class="feature-title">STRUCTURED. <br> GOVERNED. PREDICTABLE.</div>
                        <ul class="feature-list">
                            <li>
                                <span class="check-icon"><img src="{{ asset('storage/assets/web/img/done-all-icon.svg') }}" alt=""
                                        width="25"></span>
                                Defined SOPs, SLAs, and KPIs
                            </li>
                            <li>
                                <span class="check-icon"><img src="{{ asset('storage/assets/web/img/done-all-icon.svg') }}" alt=""
                                        width="25"></span>
                                Preventive and predictive maintenance models
                            </li>
                            <li>
                                <span class="check-icon"><img src="{{ asset('storage/assets/web/img/done-all-icon.svg') }}" alt=""
                                        width="25"></span>
                                Statutory and compliance management
                            </li>
                            <li>
                                <span class="check-icon"><img src="{{ asset('storage/assets/web/img/done-all-icon.svg') }}" alt=""
                                        width="25"></span>
                                Digital reporting and dashboards
                            </li>
                            <li class="border-0">
                                <span class="check-icon"><img src="{{ asset('storage/assets/web/img/done-all-icon.svg') }}" alt=""
                                        width="25"></span>
                                Central governance with on-ground execution
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-8 feature-right">
                    <!-- Replace this with your image path -->
                    <img src="{{ asset('storage/assets/web/img/structured-img.jpg') }}" alt="Office Interior">
                </div>

            </div>
        </div>
    </section>

    <section class="boxesImg">
        <div class="container-fluid">
            <img src="{{ asset('storage/assets/web/img/boxesup-img.jpg') }}" alt="">
        </div>
    </section>




    <section class="what-we-do">
        <div class="container-fluid">
            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card-main">
                        <h3>WHAT WE DO</h3>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card-grey">
                        <div class="service-icon"><img src="{{ asset('storage/assets/web/img/apartment.svg') }}" alt=""></div>
                        <div class="service-title">Property & Facilities Management</div>
                        <div class="service-text">
                            Seamless management of Hard FM and Soft FM to ensure system reliability,
                            operational continuity, and safe, high-performing workplaces.
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card-grey">
                        <div class="service-icon"><img src="{{ asset('storage/assets/web/img/reset_wrench.svg') }}" alt=""></div>
                        <div class="service-title">Asset Management</div>
                        <div class="service-text">
                            Planned maintenance and lifecycle strategies are applied to protect asset value,
                            reduce breakdown risks, control costs, and maximise long-term performance.
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card-grey">
                        <div class="service-icon"><img src="{{ asset('storage/assets/web/img/activity_zone.svg') }}" alt=""></div>
                        <div class="service-title">Space Management</div>
                        <div class="service-text">
                            Moves, adds, and changes are managed with precision using data-led tools,
                            enabling efficient utilisation, better planning, and agile workplaces.
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card-grey">
                        <div class="service-icon"><img src="{{ asset('storage/assets/web/img/bolt.svg') }}" alt=""></div>
                        <div class="service-title">Energy Management</div>
                        <div class="service-text">
                            Energy usage is monitored and optimised through integrated systems,
                            helping reduce waste, improve efficiency, and eliminate over-consumption.
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card-grey">
                        <div class="service-icon"><img src="{{ asset('storage/assets/web/img/nest_eco_leaf.svg') }}" alt=""></div>
                        <div class="service-title">Sustainability Integration</div>
                        <div class="service-text">
                            Responsible practices embedded into daily operations to support compliance,
                            stability, and long-term environmental outcomes.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="outcomes-section">
        <!-- Wavy lines -->
        <div class="container-fluid outcomes-content">
            <div class="outcomes-title">Business Outcomes</div>
            <div class="row pt-3 pt-md-5 justify-content-center mainWave"
                style="background-image: url({{ asset('storage/assets/web/img/lining.png') }});background-repeat: no-repeat;background-position: center 0px;background-size: cover;min-height: 390px;">
                <ul class="pointsUl m-0">
                    <li class="">
                        <div class="outcome-item">
                            <span class="outcome-arrow"><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}" alt=""></span>
                            <span>Stronger compliance and audit readiness</span>
                        </div>

                        <div class="outcome-item">
                            <span class="outcome-arrow"><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}" alt=""></span>
                            <span>Improved workplace productivity</span>
                        </div>
                    </li>

                    <li class="">
                        <div class="outcome-item">
                            <span class="outcome-arrow"><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}" alt=""></span>
                            <span>Higher asset reliability and lifespan</span>
                        </div>

                        <div class="outcome-item">
                            <span class="outcome-arrow"><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}" alt=""></span>
                            <span>Seamless end-user experience</span>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <section class="sliderBox">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <!-- Slides -->
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group.jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (1).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (2).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (3).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (4).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (5).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (6).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (7).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (8).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (9).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (10).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (11).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (12).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (13).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (14).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (15).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (16).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (17).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (18).jpg') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('storage/assets/web/img/Mask group (19).jpg') }}" alt=""></div>

            </div>
        </div>
    </section>
    
     @include('partials.insights-that-build-trust', ['sectionClass' => 'mt-5'])

     <div class="container-fluid">
        <section class="consult-section">
            <div class="consult-container">
                <!-- Left -->
                <div class="consult-left">
                    <h1>Let Your Facilities Work Smarter</h1>
                    <p>
                        Whether you’re planning a project, managing facilities, or scaling operations, our team is ready to support you.
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 20,
            grid: {
                rows: 2,
                fill: "row",
            },
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            speed: 800,
            centeredSlides: true,
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    grid: {
                        rows: 2
                    }
                },
                768: {
                    slidesPerView: 3,
                    grid: {
                        rows: 2
                    }
                },
                1024: {
                    slidesPerView: 5,
                    grid: {
                        rows: 2
                    }
                }
            }
        });
        
         const insightsSwiper = new Swiper(".insights-swiper", {
            slidesPerView: 3,
            spaceBetween: 24,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.2
                },
                600: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
                1300: {
                    slidesPerView: 3.2
                },
            },
        });
        
    </script>
@endsection
