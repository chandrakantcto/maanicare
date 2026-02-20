@extends('layouts.app')

@section('content')
    <div class="project-and-fit-out">
        <section class="hero">
            <div class="hero-left">
                <span class="badge text-start">
                    <img src="{{ asset('storage/assets/web/img/deployed_code.svg') }}" alt=""> Project & Fit-Out
                    Services</span>

                <h1>
                    One Partner.<br />
                    Total Project Ownership.
                </h1>

                <p>
                    From concept to handover, Manicare delivers projects with certainty,
                    clarity, and accountability. So your only choice is to move forward.
                </p>

                <a href="#" class="btn-primary">Request a Project Consultation</a>

                <div class="iso">
                    <span><img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="" width="30">
                        ISO 9001:2015</span>
                    <span><img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="" width="30">
                        ISO 14001:2015</span>
                    <span><img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="" width="30">
                        ISO 45001:2018</span>
                </div>
            </div>

            <div class="hero-right">
                <div class="grid">
                    <img src="{{ asset('storage/assets/web/img/Frdddame 1321320107.png') }}" />
                    <!--<img src="{{ asset('storage/assets/web/img/grid-img2.jpg') }}" />-->
                    <!--<img src="{{ asset('storage/assets/web/img/grid-img3.jpg') }}" />-->
                    <!--<img src="{{ asset('storage/assets/web/img/grid-img4.jpg') }}" />-->
                    <!--<img src="{{ asset('storage/assets/web/img/grid-img5.jpg') }}" />-->
                    <!--<img src="{{ asset('storage/assets/web/img/grid-img6.jpg') }}" />-->
                </div>
            </div>
        </section>
    </div>
    <section class="one-point-solution">
        <div class="container-fluid">
            <!-- Heading -->
            <div class="row mb-3 mb-lg-5">
                <div class="col-lg-4">
                    <h6 class="small-title">A ONE POINT SOLUTION</h6>
                </div>
                <div class="col-lg-8">
                    <p class="section-desc">
                        At Manicane, choice comes with certainty. Every service is delivered with clear communication,
                        disciplined timelines, and unwavering quality, powered by teams who take ownership at every
                        step.
                    </p>
                </div>
            </div>

            <!-- Cards -->
            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
                    <div class="service-box">
                        <img src="{{ asset('storage/assets/web/img/assignmedddddnt.svg') }}" alt="" width="60px">
                        <h5>Survey & Planning<br><span>(Including Liaison)</span></h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-box">
                        <img src="{{ asset('storage/assets/web/img/design_sdddervices.svg') }}" alt="" width="60px">
                        <h5>Architecture<br>& Rendering</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-box">
                        <img src="{{ asset('storage/assets/web/img/arcswffhitecture.svg') }}" alt="" width="60px">
                        <h5>Structural Design<br>& Execution</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-box">
                        <img src="{{ asset('storage/assets/web/img/deplodsdsdsdsyed_code (1).svg') }}" alt="" width="60px">
                        <h5>Interior Design<br>& Execution</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-box">
                        <img src="{{ asset('storage/assets/web/img/frame_inspdsect.svg') }}" alt="" width="60px">
                        <h5>MEP Design,<br>Consultation & Execution</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-box">
                        <img src="{{ asset('storage/assets/web/img/accodghjunt_tree.svg') }}" alt="" width="60px">
                        <h5>Project Management<br>& Consultancy</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-box">
                        <img src="{{ asset('storage/assets/web/img/landscape_2_efdfddit.svg') }}" alt=""
                            width="60px">
                        <h5>Landscape Design<br>& Execution</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-box">
                        <img src="{{ asset('storage/assets/web/img/carpeddddnter.svg') }}" alt="" width="60px">
                        <h5>Customized Woodwork<br>& Furniture</h5>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="discoverImg">
        <img src="{{ asset('storage/assets/web/img/discover-img.jpg') }}" alt="">
    </section>
    <section class="discover-work">
        <!-- TITLE BAR -->
        <div class="container-fluid discover-bar">
            <div class="d-flex justify-content-between align-items-center">
                <h5>DISCOVER OUR WORK <span>‹ ›</span></h5>
                <a href="#" class="view-gallery">View Gallery</a>
            </div>
        </div>

        <!-- SWIPER -->
        <div class="container-fluid px-0">
            <div class="swiper workSwiper">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="work-card">
                            <img src="{{ asset('storage/assets/web/img/towers.png') }}" alt="">
                            <div class="work-info">
                                <h6>Bishop Towers <img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}"
                                        alt=""></h6>
                                <p>Hospitality • 25,000 Sq. Ft.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="work-card">
                            <img src="{{ asset('storage/assets/web/img/rectangle.jpg') }}" alt="">
                            <div class="work-info">
                                <h6>Piramal Enclave <img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}"
                                        alt=""></h6>
                                <p>Hospitality • 25,000 Sq. Ft.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="work-card">
                            <img src="{{ asset('storage/assets/web/img/nursery.jpg') }}" alt="">
                            <div class="work-info">
                                <h6>Home Nursery <img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}"
                                        alt=""></h6>
                                <p>Hospitality • 25,000 Sq. Ft.</p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="swiper-slide">-->
                    <!--    <div class="work-card">-->
                    <!--        <img src="{{ asset('storage/assets/web/img/nursery.jpg') }}" alt="">-->
                    <!--        <div class="work-info">-->
                    <!--            <h6>Home Nursery <img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}"-->
                    <!--                    alt=""></h6>-->
                    <!--            <p>Hospitality • 25,000 Sq. Ft.</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                </div>
            </div>
        </div>

    </section>
    <section class="why-choose-section">
        <div class="container-fluid p-0">
            <div class="row g-0 align-items-stretch">

                <!-- LEFT IMAGE -->
                <div class="col-lg-7 image-col">
                    <img src="{{ asset('storage/assets/web/img/maanicare-img.png') }}" alt="Maanicare Building"
                        class="img-fluid w-100 h-100 object-fit-cover">
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-5 content-col d-flex align-items-center">
                    <div class="content-box">

                        <h6 class="section-tag">
                            WHY ORGANIZATIONS CHOOSE MAANICARE
                        </h6>

                        <p class="intro-text">
                            Maanicare brings design, execution, and accountability together under one roof,
                            eliminating fragmentation, reducing risk, and delivering projects with clarity
                            and control.
                        </p>

                        <ul class="feature-list">
                            <li>One accountable partner across design, build, and execution</li>
                            <li>Integrated teams that protect design intent through delivery</li>
                            <li>Disciplined timelines and governed processes</li>
                            <li>In-house manufacturing for precision and control</li>
                            <li>Transparent communication and milestone tracking</li>
                            <li>Quality-first execution, audit-ready processes</li>
                        </ul>
                        <a href="https://maanicare.archsoftwares.com/our-story" class="explore-link">
                            Explore More <span><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}"
                                    alt=""></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="process-section">
        <div class="container-fluid">

            <!-- Heading -->
            <div class="process-header d-flex align-items-center gap-4">
                <div>
                    <h2>FROM IDEA TO HANDOVER. OWNED END-TO-END.</h2>
                    <p>
                        Single-point accountability across architecture, RCC, MEP, interiors,
                        bespoke joinery, and final delivery.
                    </p>
                </div>
                <div class="process-arrows">
                    <div class="swiper-button-prev process-prev"></div>
                    <div class="swiper-button-next process-next"></div>
                </div>
            </div>
            <div class="swiper processSwiper">
                <div class="swiper-wrapper handOver">
                    <div class="swiper-slide d-md-flex align-items-end">
                        <img src="{{ asset('storage/assets/web/img/surveyPlanning.jpg') }}" alt="">
                        <div class="contentSlider">
                            <h4>Survey & Planning </br>(incl. Liaison)</h4>
                            <p class="p-0 m-0">Every project begins with detailed site surveys, technical assessments, and statutory coordination. We align feasibility, 
                            compliance, and intent early—setting a clear, risk-free foundation for execution.</p>
                        </div>
                    </div>
                    <div class="swiper-slide d-md-flex align-items-end">
                        <img src="{{ asset('storage/assets/web/img/drawing-living-room.jpg') }}" alt="">
                        <div class="contentSlider">
                            <h4>Design Strategy & <br>Estimation</h4>
                            <p class="p-0 m-0">Concepts are translated into actionable design strategies with precise material selections, budgets, and timelines. 
                            Every decision is evaluated for performance, cost efficiency, and long-term value.</p>
                        </div>
                    </div>
                    <div class="swiper-slide d-md-flex align-items-end">
                        <img src="{{ asset('storage/assets/web/img/Mask group (11).png') }}" alt="">
                        <div class="contentSlider">
                            <h4>GFC & <br>Procurement</h4>
                            <p class="p-0 m-0">On-site execution is led with disciplined project control. 
                            Teams, timelines, and trades are managed seamlessly to deliver consistent quality with minimal disruption and zero ambiguity.</p>
                        </div>
                    </div>
                    <div class="swiper-slide d-md-flex align-items-end">
                        <img src="{{ asset('storage/assets/web/img/Mask group (12).png') }}" alt="">
                        <div class="contentSlider">
                            <h4>Execution &<br> Project Management</h4>
                            <p class="p-0 m-0">On-site execution is led with disciplined project control. 
                            Teams, timelines, and trades are managed seamlessly to deliver consistent quality with minimal disruption and zero ambiguity.</p>
                        </div>
                    </div>
                    <div class="swiper-slide d-md-flex align-items-end">
                        <img src="{{ asset('storage/assets/web/img/Mask group (13).png') }}" alt="">
                        <div class="contentSlider">
                            <h4>Quality <br>Review</h4>
                            <p class="p-0 m-0">Structured inspections, mock-ups, and quality benchmarks are applied at every stage. 
                            Each element is reviewed to ensure it meets design standards, performance expectations, and safety norms.</p>
                        </div>
                    </div>
                    <div class="swiper-slide d-md-flex align-items-end">
                        <img src="{{ asset('storage/assets/web/img/Mask group (14).png') }}" alt="">
                        <div class="contentSlider">
                            <h4>Final <br>Handover</h4>
                            <p class="p-0 m-0">A comprehensive final review is conducted before transition. 
                            The space is delivered fully resolved, documented, and ready. Reflecting the original vision in every detail.</p>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </section>
    <section class="built-around-you">
        <div class="container-fluid">

            <span class="small-title">BUILT AROUND YOU</span>

            <h2 class="main-title">
                Because a Project Is Never Just a Project
            </h2>

            <p class="description">
                Every space we build will hold decisions, conversations, and everyday rituals.
                We design and execute with that responsibility. Quietly, thoughtfully, and with care.
            </p>

        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="spaceBeing">
                <div class="container-fluid">
                    <div class="title">Spaces We Bring To Life</div>
                    <div class="divider"></div>

                    <div class="rowsssclas services justify-content-between">
                        <div class="col-lg-2 col-md-4 col-6 mb-4">
                            <p>Luxury Residences</p>
                            <p>Healthcare</p>
                            <p>Environmental & Conservation</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 mb-4">
                            <p>Commercial</p>
                            <p>Pharma / Life Sciences</p>
                            <p>Mixed-use</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 mb-4">
                            <p>Hospitality</p>
                            <p>Retail</p>
                            <p>Special Projects</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 mb-4">
                            <p>Industrial</p>
                            <p>Hospitality & Leisure</p>
                            <p>Government & Civic</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-12 mb-4 display: flex; justify-content-lg-end">
                            <p>Infrastructure / Civil</p>
                            <p>Institutional</p>
                            <p>Religious / Cultural</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="houseJurney">
        <div class="container-fluid">
            <div class="row align-items-start">

                <!-- LEFT -->
                <div class="col-lg-5 mb-2  mb-lg-0">
                    <div class="eyebrow">WHERE DESIGN MEETS CRAFT</div>
                    <h1 class="heading">
                        In-House Joinery &<br>
                        Modular Manufacturing
                    </h1>
                    <a href="#" class="cta">
                        Schedule a Discovery Call <img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}"
                            alt="">
                    </a>
                </div>

                <!-- RIGHT -->
                <div class="col-lg-7">
                    <div class="service-item">
                        <img src="{{ asset('storage/assets/web/img/carpenter-golden.svg') }}" alt=""
                            width="40">
                        Solid Wood Secondary Processing & Finishing
                    </div>

                    <div class="service-item">
                        <img src="{{ asset('storage/assets/web/img/dashboard-golden.svg') }}" alt=""
                            width="40">
                        Modular Works including Panel Fabrication & Customization
                    </div>

                    <div class="service-item">
                        <img src="{{ asset('storage/assets/web/img/chair-golden.svg') }}" alt="" width="40">
                        Professional Upholstery Services
                    </div>

                    <div class="service-item">
                        <img src="{{ asset('storage/assets/web/img/blinds-golden.svg') }}" alt=""
                            width="40">
                        Veneer Application & Treatment
                    </div>

                    <div class="service-item">
                        <img src="{{ asset('storage/assets/web/img/precision-lacquering-golden.svg') }}" alt=""
                            width="40">
                        Precision Lacquering & Coating
                    </div>

                    <div class="service-item">
                        <img src="{{ asset('storage/assets/web/img/layers-golden.svg') }}" alt=""
                            width="40">
                        Metal Tubing, Sheet Metal Fabrication & Assembly
                    </div>

                    <div class="service-item">
                        <img src="{{ asset('storage/assets/web/img/roller-golden.svg') }}" alt=""
                            width="40">
                        High-Quality Coating & Finishing
                    </div>

                    <div class="service-item border-bottom-0">
                        <img src="{{ asset('storage/assets/web/img/advanced-stone-golden.svg') }}" alt=""
                            width="40">
                        Advanced Stone & Glass Cutting Solutions
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="goveranceQuality">
        <div class="container-fluid">

            <div class="section-title">
                QUALITY & GOVERNANCE = RISK REDUCTION
            </div>

            <div class="row g-5 m-0">

                <div class="col-lg-3 col-md-6">
                    <div class="card-custom">
                        <div class="number">01</div>
                        <h3>Structured Quality Checks<br>& Site Supervision</h3>
                        <div class="line"></div>
                        <p>
                            Quality is controlled through defined checklists, on-site supervision,
                            and regular inspections. Every stage is monitored to ensure execution
                            meets approved standards and design intent.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-custom">
                        <div class="number">02</div>
                        <h3>Mock-ups and<br>stage-wise approvals</h3>
                        <div class="line"></div>
                        <p>
                            Critical elements are validated through mock-ups and phased approvals.
                            This ensures alignment before execution progresses, reducing rework and
                            maintaining consistency.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-custom">
                        <div class="number">03</div>
                        <h3>Disciplined timelines<br>and reporting</h3>
                        <div class="line"></div>
                        <p>
                            Projects are driven by structured schedules and milestone-based reporting.
                            Clear visibility across timelines enables proactive decisions, predictable
                            delivery, and controlled execution.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-custom">
                        <div class="number">04</div>
                        <h3>Audit-ready<br>governance processes</h3>
                        <div class="line"></div>
                        <p>
                            Documented workflows, compliance checks, and approvals create full
                            traceability. Frameworks ensure accountability, risk mitigation, and
                            readiness for audits at every stage.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    @include('partials.insights-that-build-trust', ['sectionClass' => 'mt-5'])

     <div class="container-fluid">
        <section class="consult-section">
            <div class="consult-container">
                <!-- Left -->
                <div class="consult-left">
                    <h1>Let’s Build With Certainty</h1>
                    <p>
                        Speak to our project team and explore how Maanicare can deliver your next space, end to end.
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

        const workSwiper = new Swiper(".workSwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            loop: true,

            navigation: {
                nextEl: ".work-next",
                prevEl: ".work-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3
                },
            },
        });


        var swiper = new Swiper(".processSwiper", {
            slidesPerView: 2.4,
            spaceBetween: 30,
            loop: true,

            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: ".process-next",
                prevEl: ".process-prev",
            },

            speed: 900,

            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 2.2
                }
            }
        });
    </script>
@endsection
