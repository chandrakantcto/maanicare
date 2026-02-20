@extends('layouts.app')

@section('content')
    <section class="text-slider-section">
        <div class="text-slider">
            <div class="slide-box" style="background-image: url({{ asset('storage/assets/web/img/slider-img1.png') }})">
                <div class="sliderTxt">
                    <h3>Integrated Services. Delivered With Care.</h3>
                    <p>
                        Maanicare is a premium, integrated services partner for businesses. Delivering projects,
                        people, and facilities with precision, accountability, and long-term value.
                    </p>
                    <div class="maiclisderbutton d-md-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-white mb-2 mb-md-0"><a href="{{ route('clients') }}">Speak to Our
                                Team</a></button>
                        <button type="button" class="btn btn-outline"><a href="{{ route('services.index') }}">Explore Our
                                Services<a /></button>
                    </div>
                    <ul class="sliderbotmTxt">
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="slide-box" style="background-image: url({{ asset('storage/assets/web/img/1321319501.jpg') }})">
                <div class="sliderTxt">
                    <h3>Spaces Built to Perform.</h3>
                    <p>
                        We plan and deliver interior and fit-out projects with control, clarity, and
                        precision—balancing design intent, timelines, safety, and execution without compromise.
                    </p>
                    <div class="maiclisderbutton d-md-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-white"><a href="{{ route('clients') }}">Speak to Our
                                Team</a></button>
                        <button type="button" class="btn btn-outline"><a href="{{ route('projects.index') }}">View Our
                                Projects</a></button>
                    </div>
                    <ul class="sliderbotmTxt">
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="slide-box" style="background-image: url({{ asset('storage/assets/web/img/sfdsff.jpg') }})">
                <div class="sliderTxt">
                    <h3>Workforces Managed With Precision.</h3>
                    <p>
                        From payroll processing to statutory compliance, we bring structure, accuracy, and
                        audit-ready discipline to workforce management so organisations stay protected and in
                        control.
                    </p>
                    <div class="maiclisderbutton d-md-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-white"><a href="{{ route('clients') }}">Speak to Our
                                Team</a></button>
                        <button type="button" class="btn btn-outline">Explore Our Approach</button>
                    </div>
                    <ul class="sliderbotmTxt">
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="slide-box" style="background-image: url({{ asset('storage/assets/web/img/retgb.jpg') }})">
                <div class="sliderTxt">
                    <h3>Facilities That Run Without Disruption.</h3>
                    <p>
                        We manage the essential systems that keep workplaces operational. Cleanliness, safety,
                        maintenance, and consistency delivered through disciplined processes and accountable teams.
                    </p>
                    <div class="maiclisderbutton d-md-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-white"><a href="{{ route('clients') }}">Speak to Our
                                Team</a></button>
                        <button type="button" class="btn btn-outline">See How We Operate</button>
                    </div>
                    <ul class="sliderbotmTxt">
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                        <li>
                            <span><img src="{{ asset('storage/assets/web/img/iso-mark.svg') }}" alt=""
                                    width="30" /> <b>ISO
                                    9001:2015</b></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="servicesMain">
                <div class="servicesColumn justify-content-between">
                    <div class="servicesInner">
                        <img src="{{ asset('storage/assets/web/img/deployed_code.svg') }}" alt="" width="30" />
                        <strong>Project & Fit-Out Services</strong>
                    </div>
                    <div class="servicesInner">
                        <img src="{{ asset('storage/assets/web/img/contract_edit.svg') }}" alt="" width="30" />
                        <strong>Staffing, Payroll & Compliance Services</strong>
                    </div>
                    <div class="servicesInner">
                        <img src="{{ asset('storage/assets/web/img/graph_5.svg') }}" width="30" />
                        <strong>Integrated Facility Management Services</strong>
                    </div>
                    <div class="servicesInner justify-content-lg-end">
                        <img src="{{ asset('storage/assets/web/img/task_alt.svg') }}" alt="" width="30" />
                        <strong>On-Demand Services</strong>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="weSection">
        <div class="container-fluid">
            <div class="row my-5 justify-content-center">
                <div class="col-md-5 d-flex align-items-center">
                    <div>
                        <h2>WHO WE ARE</h2>
                        <p class="md-md-3 mb-5">
                            For over three decades, Maanicare has shaped spaces that shape people. We operate across
                            India at the intersection of infrastructure, people, and operations. Bringing structure,
                            care, and accountability to environments that must work, every day.
                        </p>
                        <p>
                            This is more than delivery. It’s a legacy. A partnership. A promise that life works
                            better wherever we step in.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="serviceSection">
        <div class="container-fluid">
            <div class="haedingMore mb-3 mb-md-5">
                <div class="row justify-content-between align-items-baseline">
                    <div class="col-md-6">
                        <h4>More Than Services.<br> A System That Works.</h4>
                    </div>
                    <div class="col-md-5">
                        <p>
                            Behind every well-run workplace is a structure you don’t see. <br>Maanicare operates across
                            projects, people, and facilities. Bringing order to complexity and ensuring every moving
                            part works in sync, every single day.</p>

                    </div>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="service-card">
                    <div class="card-image">
                        <img src="{{ asset('storage/assets/web/img/projectserviceimg2.jpg') }}"
                            alt="Project & Fit-Out" />
                    </div>
                    <div class="card-content">
                        <div class="card-tag">
                            <img src="{{ asset('storage/assets/web/img/deployed_code.svg') }}" alt=""
                                width="30" />
                            <p class="card-text">
                                <span class="d-block"> PROJECT & FIT-OUT SERVICES </span>
                                End-to-end interior and infrastructure projects delivered with precision, safety, and design
                                excellence. From concept to completion.
                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('services.project-and-fit-out') }}" class="card-link"> View Projects
                            </a><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}" alt=""
                                class="ms-2" />
                        </div>
                    </div>
                </div>
                <div class="service-card">
                    <div class="card-image">
                        <img src="{{ asset('storage/assets/web/img/projectserviceimg-1.jpg') }}"
                            alt="Project & Fit-Out" />
                    </div>
                    <div class="card-content">
                        <div class="card-tag">
                            <img src="{{ asset('storage/assets/web/img/contract_edit.svg') }}" alt=""
                                width="30" />
                            <p class="card-text">
                                <span class="d-block"> Staffing, Payroll & Compliance Services </span>
                                Reliable workforce solutions supported by structured payroll systems, statutory compliance,
                                and risk-managed processes.
                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('services.staffing-payroll-and-compliance') }}" class="card-link"> Explore
                                Workforce Solutions </a><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}"
                                alt="" class="ms-2" />
                        </div>
                    </div>
                </div>
                <div class="service-card">
                    <div class="card-image">
                        <img src="{{ asset('storage/assets/web/img/three.png') }}" alt="Project & Fit-Out" />
                    </div>
                    <div class="card-content">
                        <div class="card-tag">
                            <img src="{{ asset('storage/assets/web/img/graph_5.svg') }}" alt=""
                                width="30" />
                            <p class="card-text">
                                <span class="d-block"> Integrated Facility Management Services </span>
                                Seamless day-to-day operations covering housekeeping, technical services, and site
                                management, ensuring workdays without disruption.
                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('services.integrated-facility-management') }}" class="card-link"> Discover
                                IFM Services </a><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}"
                                alt="" class="ms-2" />
                        </div>
                    </div>
                </div>

                <div class="service-card">
                    <div class="card-image">
                        <img src="{{ asset('storage/assets/web/img/fours.jpg') }}" alt="Project & Fit-Out" />
                    </div>
                    <div class="card-content">
                        <div class="card-tag">
                            <img src="{{ asset('storage/assets/web/img/graph_5.svg') }}" alt=""
                                width="30" />
                            <p class="card-text">
                                <span class="d-block"> On-Demand Services </span>
                                Flexible, responsive service support designed for speed, scalability, and immediate
                                operational needs.
                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('services.on-demand') }}" class="card-link"> See On-Demand Offerings
                            </a><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}" alt=""
                                class="ms-2" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="impact-section">
        <div class="impact-container">
            <!-- Left Title -->
            <div class="impact-title">
                <p class="subtitle">THE IMPACT WE MAKE</p>
            </div>
            <!-- Right Grid -->
            <div class="impact-grid">
                <div class="impact-card">
                    <span class="count">01</span>
                    <h3>10+ Mn sq. ft.</h3>
                    <p>Developed</p>
                </div>

                <div class="impact-card">
                    <span class="count">02</span>
                    <h3>40,000 sq. ft.</h3>
                    <p>Joinery Factory</p>
                </div>

                <div class="impact-card">
                    <span class="count">03</span>
                    <h3>2,500+</h3>
                    <p>Workmen On-Roll</p>
                </div>

                <div class="impact-card">
                    <span class="count">04</span>
                    <h3>4.5+ Million sq. ft.</h3>
                    <p>Designed</p>
                </div>

                <div class="impact-card">
                    <span class="count">05</span>
                    <h3>₹1.5 Billion+</h3>
                    <p>Worth of Projects Executed</p>
                </div>

                <div class="impact-card">
                    <span class="count">06</span>
                    <h3>800+</h3>
                    <p>Projects Completed</p>
                </div>

                <div class="impact-card">
                    <span class="count">07</span>
                    <h3>1.5 Lakh sq. ft.</h3>
                    <p>State-of-the-art Manufacturing</p>
                </div>

                <div class="impact-card">
                    <span class="count">08</span>
                    <h3>500+ Experts</h3>
                    <p>Dedicated to delivering excellence</p>
                </div>
            </div>
        </div>
    </section>

    <section class="threeimagesclass spaces-section pb-0">
        <div class="container-fluid">
            <div class="d-md-flex justify-content-between align-items-center mb-md-4 mb-3">
                <p class="section-eyebrow mb-0 mb-md-2">SPACES THAT BREATHE WITH LIFE</p>
                <div class="d-flex align-items-center">
                    <a href="#" class="card-link ms-md-2 ms-0 my-md-0 my-2" tabindex="0"> Bishop Towers
                    </a><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}" alt=""
                        class="ms-2" />
                </div>
            </div>
        </div>
        <div class="spaces-container">
            <!-- LEFT CONTENT -->
            <div class="spaces-left">
                <div class="small-image">
                    <img src="{{ asset('storage/assets/web/img/space-first.jpg') }}" alt="" />
                </div>
                <div class="ms-md-5 ms-0 me-0">
                    <p class="description">
                        From planning and design to execution and handover, Manicare delivers fit-out projects with
                        a focus on quality, safety, and long-term performance.
                    </p>
                    <div class="service-list">
                        <div class="service-item">
                            <sup>01</sup>
                            <h4>Interior Design</h4>
                        </div>
                        <div class="service-item">
                            <sup>02</sup>
                            <h4>Joinery & Modular Facility</h4>
                        </div>
                        <div class="service-item">
                            <sup>03</sup>
                            <h4>Landscape Design</h4>
                        </div>
                        <div class="service-item border-0">
                            <sup>04</sup>
                            <h4>Sustainability Design</h4>
                        </div>
                    </div>
                    <div class="classp d-md-flex justify-content-between align-items-center">
                        <span class="text-gray fw-normal">& many more services</span>
                        <div class="d-flex align-items-center">
                            <a href="#" class="allthem card-link ms-md-2 ms-0 my-md-0 my-2" tabindex="0">
                                Discover Them All </a><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}"
                                alt="" class="ms-2" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="spaces-right">
                <img src="{{ asset('storage/assets/web/img/space-second.jpg') }}" alt="" />
            </div>
        </div>
    </section>

    <section class="spaces-section">
        <div class="container-fluid">
            <div class="d-md-flex justify-content-between align-items-center mb-md-4 mb-3">
                <p class="section-eyebrow mb-3 mb-md-2">Trusted by industry leaders</p>
                <div class="d-flex align-items-center beyond">
                    <a href="{{ route('clients') }}" class="ms-md-2 ms-0 my-md-0 my-2" tabindex="0"> discover the
                        beyond </a><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}" alt=""
                        class="ms-2" />
                </div>
            </div>
            <ul class="logosUl">
                <li><img src="{{ asset('storage/assets/web/img/All Cargo Logo.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Amarchand Logo.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Apollo Tyres.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/DSP Black rock.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Emerson.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Finestar.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Fosroc.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Gulf Air.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Hathway.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Hinduja Logo.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Jagran BW.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Jio Hotstar BW.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Karma.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Lucas Film.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Lupin Limited.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Mid Day Logo.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Network 18 BW.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('storage/assets/web/img/Primal.jpg') }}" alt="" /></li>
                <!--<li><img src="{{ asset('storage/assets/web/img/Simens.jpg') }}" alt="" /></li>-->
                <!--<li><img src="{{ asset('storage/assets/web/img/Tata Tele Service.jpg') }}" alt="" /></li>-->
                <!--<li><img src="{{ asset('storage/assets/web/img/TLC Logo B&W.jpg') }}" alt="" /></li>-->
                <!--<li><img src="{{ asset('storage/assets/web/img/zaydus.jpg') }}" alt="" /></li>-->
            </ul>
        </div>
    </section>

    <section class="sectors-section keysecretore">
        <div class="container-fluid">
            <h2 class="section-title">KEY SECTORS WE SERVE</h2>
        </div>
        <div class="swiper sectorsSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide sector-card">
                    <img src="{{ asset('storage/assets/web/img/Mask group (3).png') }}" />
                    <div class="sector-label">
                        <img src="{{ asset('storage/assets/web/img/pill.svg') }}" alt="" width="20" />
                        Pharmacy
                    </div>
                </div>

                <div class="swiper-slide sector-card">
                    <img src="{{ asset('storage/assets/web/img/Mask group (4).png') }}" />
                    <div class="sector-label">
                        <img src="{{ asset('storage/assets/web/img/engineering.svg') }}" alt=""
                            width="20" /> Engineering
                    </div>
                </div>

                <div class="swiper-slide sector-card">
                    <img src="{{ asset('storage/assets/web/img/Mask group (5).png') }}" />
                    <div class="sector-label">
                        <img src="{{ asset('storage/assets/web/img/factory.svg') }}" alt="" width="20" />
                        Manufacturing
                    </div>
                </div>

                <div class="swiper-slide sector-card">
                    <img src="{{ asset('storage/assets/web/img/Mask group (6).png') }}" />
                    <div class="sector-label"><img src="{{ asset('storage/assets/web/img/biotech.svg') }}"
                            alt="" width="20" />
                        Research & Development</div>
                </div>


                <div class="swiper-slide sector-card">
                    <img src="{{ asset('storage/assets/web/img/Mask group (7).png') }}" />
                    <div class="sector-label"><img src="{{ asset('storage/assets/web/img/memory.svg') }}" alt=""
                            width="20" />
                        Information Technology</div>
                </div>

                <div class="swiper-slide sector-card">
                    <img src="{{ asset('storage/assets/web/img/Mask group (8).png') }}" />
                    <div class="sector-label"><img src="{{ asset('storage/assets/web/img/account_balance.svg') }}"
                            alt="" width="20" />
                        Banking</div>
                </div>

                <div class="swiper-slide sector-card">
                    <img src="{{ asset('storage/assets/web/img/Mask group (9).png') }}" />
                    <div class="sector-label"><img src="{{ asset('storage/assets/web/img/home.svg') }}" alt=""
                            width="20" />
                        Residential</div>
                </div>

                <div class="swiper-slide sector-card">
                    <img src="{{ asset('storage/assets/web/img/Mask group (10).png') }}" />
                    <div class="sector-label"><img src="{{ asset('storage/assets/web/img/more_horiz.svg') }}"
                            alt="" width="20" />
                        & More</div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev swiper-prev-legacy-slider-69985434a0dd8"></div>
            <div class="swiper-button-next swiper-next-legacy-slider-69985434a0dd8"></div>
        </div>
    </section>

    <section class="why-us-section">
        <div class="row">
            <div class="why-container">
                <!-- Top Content -->
                <div class="col-md-12 col-lg-2 ">
                    <div class="why-header">
                        <span class="why-tag">WHY US</span>

                    </div>
                </div>

                <!-- Features Grid -->
                <div class="col-md-12 col-lg-10">
                    <p class="why-text">
                        Maanicare integrates people, projects, and processes under one accountable framework. Delivering
                        consistent execution, assured compliance, and spaces built to perform.
                    </p>
                    <div class="why-grid">
                        <div class="why-item">
                            <div class="icon"><img src="{{ asset('storage/assets/web/img/Integrated.svg') }}"
                                    alt="" /></div>
                            <div>
                                <h4>INTEGRATED</h4>
                                <p>
                                    Integrated services under one accountable partner, reducing complexity and coordination
                                    gaps
                                </p>
                            </div>
                        </div>

                        <div class="why-item">
                            <div class="icon"><img src="{{ asset('storage/assets/web/img/compliance-Focused.svg') }}"
                                    alt="" /></div>
                            <div>
                                <h4>COMPLIANCE FOCUSED</h4>
                                <p>
                                    Strong governance and compliance-led processes, designed to be audit-ready at every
                                    stage
                                </p>
                            </div>
                        </div>

                        <div class="why-item">
                            <div class="icon"><img src="{{ asset('storage/assets/web/img/experienced-Teams.svg') }}"
                                    alt="" /></div>
                            <div>
                                <h4>EXPERIENCED TEAMS</h4>
                                <p>Experienced on-ground teams backed by structured planning and central oversight</p>
                            </div>
                        </div>

                        <div class="why-item">
                            <div class="icon"><img src="{{ asset('storage/assets/web/img/monitoring.svg') }}"
                                    alt="" /></div>
                            <div>
                                <h4>TRANSPARENT KPI’S</h4>
                                <p>Transparent reporting and performance benchmarks for clear visibility and control</p>
                            </div>
                        </div>

                        <div class="why-item">
                            <div class="icon"><img src="{{ asset('storage/assets/web/img/peoplefirst.svg') }}"
                                    alt="" /></div>
                            <div>
                                <h4>PEOPLE FIRST</h4>
                                <p>Safety-first execution and people-centric practices embedded across all operations</p>
                            </div>
                        </div>

                        <div class="why-item">
                            <div class="icon"><img src="{{ asset('storage/assets/web/img/expand_content.svg') }}"
                                    alt="" /></div>
                            <div>
                                <h4>SCALABLE SOLUTIONS</h4>
                                <p>
                                    Consistent delivery at scale, ensuring reliability across sites, cities, and service
                                    lines
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="sustainability-section">
        <!-- Top Content -->
        <div class="sustainability-top">
            <h2 class="title">Sustainability & Us</h2>
            <p class="subtitle">BUILDING RESPONSIBLY. OPERATING THOUGHTFULLY.</p>

            <div class="sustainability-grid">
                <div class="sustain-item">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/restore_from_trash.svg') }}"
                            alt="" /></div>
                    <span class="line"></span>
                    <p>Waste segregation and responsible disposal across projects and facilities.</p>
                </div>

                <div class="sustain-item">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/energy_savings_leaf.svg') }}"
                            alt="" /></div>
                    <span class="line"></span>
                    <p>Resource-efficient fit-out planning to reduce material waste and rework.</p>
                </div>

                <div class="sustain-item">
                    <div class="icon"><img src="{{ asset('storage/assets/web/img/cycle.svg') }}" alt="" />
                    </div>
                    <span class="line"></span>
                    <p>Continuous process reviews to improve efficiency and reduce operational waste.</p>
                </div>
            </div>
        </div>

        <!-- Image -->
        <div class="sustainability-image">
            <!--<img src="{{ asset('storage/assets/web/img/bg-sec.jpg') }}" alt="Sustainability" />-->
            <video autoplay muted loop playsinline>
                <source src="{{ asset('storage/assets/web/img/0_Trees_Swaying_3840x2160 (1).mp4') }}" type="video/mp4">
            </video>
        </div>
        <!-- Bottom Content -->
        <div class="sustainability-bottom">
            <p>
                At Maanicare, sustainability is built into how we work, not added on. Across projects, people, and
                facilities, we focus on efficient use of resources, safe working environments, and compliance-led
                processes that deliver long-term value. Our approach is practical, measurable, and continuously
                improving.
            </p>

            <div class="d-flex align-items-center beyond">
                <a href="{{ route('our-story') }}" class="ms-md-2 ms-0 my-md-0 my-2 knowMorebtn" tabindex="0"> know
                    more about us
                </a><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}" alt="" class="ms-2" />
            </div>
        </div>
    </section>
    <!--<section class="featured-section">-->
    <!--    <h3 class="featured-title">AS FEATURED ON</h3>-->

    <!--    <div class="featured-logos">-->
    <!--        <span><img src="{{ asset('storage/assets/web/img/patch.png') }}" alt="" /></span>-->
    <!--        <span><img src="{{ asset('storage/assets/web/img/houston.png') }}" alt="" /></span>-->
    <!--        <span><img src="{{ asset('storage/assets/web/img/newhaven-register.png') }}" alt="" /></span>-->
    <!--        <span><img src="{{ asset('storage/assets/web/img/theday.png') }}" alt="" /></span>-->
    <!--        <span><img src="{{ asset('storage/assets/web/img/your-state.png') }}" alt="" /></span>-->
    <!--        <span><img src="{{ asset('storage/assets/web/img/i9s.png') }}" alt="" /></span>-->
    <!--        <span><img src="{{ asset('storage/assets/web/img/houston.png') }}" alt="" /></span>-->
    <!--        <span><img src="{{ asset('storage/assets/web/img/city-ins.png') }}" alt="" /></span>-->
    <!--        <span><img src="{{ asset('storage/assets/web/img/ct-post.png') }}" alt="" /></span>-->
    <!--    </div>-->
    <!--</section>-->
    <section class="marquhome trust-section">
        <div class="container-fluid">
            <div class="trust-top d-flex align-items-center gap-2">
                <ul class="stratclass d-flex gap-1">
                    <li><img src="{{ asset('storage/assets/web/img/star.png') }}" alt="" width="20" /></li>
                    <li><img src="{{ asset('storage/assets/web/img/star.png') }}" alt="" width="20" /></li>
                    <li><img src="{{ asset('storage/assets/web/img/star.png') }}" alt="" width="20" /></li>
                    <li><img src="{{ asset('storage/assets/web/img/star.png') }}" alt="" width="20" /></li>
                    <li><img src="{{ asset('storage/assets/web/img/star.png') }}" alt="" width="20" /></li>
                </ul>
                <span>TRUSTED BY OVER 3,00,000+ PEOPLE</span>
            </div>
        </div>

        <!-- Line 1 -->
        <div class="marquee">
            <div class="marquee__track left">
                <span>“Everything feels more organised, without constant follow-ups.” Neha P.</span>
                <span>•</span>
                <span>“Reliable teams. Clear systems.” Rohan M.</span>

                <!-- duplicate -->
                <span>“Everything feels more organised, without constant follow-ups.” Neha P.</span>
                <span>•</span>
                <span>“Reliable teams. Clear systems.” Rohan M.</span>
            </div>
        </div>

        <!-- Line 2 -->
        <div class="marquee">
            <div class="mainbichline marquee__track right">
                <span>“Consistent execution, zero surprises.” Rohan M.</span>
                <span>•</span>
                <span>“They think beyond delivery.” Amit R.</span>

                <!-- duplicate -->
                <span>“Consistent execution, zero surprises.” Rohan M.</span>
                <span>•</span>
                <span>“They think beyond delivery.” Amit R.</span>
            </div>
        </div>

        <!-- Line 3 -->
        <div class="marquee">
            <div class="marquee__track left slow">
                <span>“Operational excellence at every step.” Amit R.</span>
                <span>•</span>
                <span>“Clear communication, strong governance.” Neha P.</span>

                <!-- duplicate -->
                <span>“Operational excellence at every step.” Amit R.</span>
                <span>•</span>
                <span>“Clear communication, strong governance.” Neha P.</span>
            </div>
        </div>
    </section>
    <section class="homeinsights insights-section">
        <div class="insights-wrapper">
            <!-- LEFT IMAGE -->
            <div class="insights-image left">
                <img src="{{ asset('storage/assets/web/img/insight-1.jpg') }}" alt="Sustainability" />
            </div>

            <!-- CENTER CONTENT -->
            <div class="insights-content">
                <h6>INSIGHTS THAT BUILD TRUST</h6>

                <ul class="insights-list">
                    @forelse($featuredCaseStudies as $caseStudy)
                        <li>
                            <span>{{ $caseStudy->title }}</span>
                            <a href="{{ route('case-studies.show', $caseStudy->slug) }}" class="insight-link">
                                <i><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}"
                                        alt="" /></i>
                            </a>
                        </li>
                    @empty
                        <li>
                            <span>No featured case studies yet.</span>
                            <i><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}" alt="" /></i>
                        </li>
                    @endforelse
                </ul>

                <a href="{{ route('case-studies') }}" class="explore-btn">
                    EXPLORE MORE <span><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}"
                            alt="" /></span>
                </a>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="insights-image right">
                <img src="{{ asset('storage/assets/web/img/insight-2.jpg') }}" alt="Sustainability" />
            </div>
        </div>
    </section>
    <section class="certifications">
        <h4>TRUSTED & CERTIFIED BY GLOBAL STANDARDS</h4>

        <div class="certification-logos">
            <div class="cert-item">
                <img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="ISO" />
                <span>ISO 9001:2015</span>
            </div>

            <div class="cert-item">
                <img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="ISO" />
                <span>ISO 14001:2015</span>
            </div>

            <div class="cert-item">
                <img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="ISO" />
                <span>ISO 45001:2018</span>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container-fluid">
            <div class="consult-section">
                <div class="consult-container">
                    <!-- Left -->
                    <div class="consult-left">
                        <h1>Let’s Build Something That Works. Long Term.</h1>
                        <p>
                            Whether you’re planning a project, managing facilities, or scaling operations, our team
                            is ready to support you.
                        </p>

                        <div class="consult-icons">
                            <a
                                href="https://api.whatsapp.com/send/?phone=919833006916&text&type=phone_number&app_absent=0"><img
                                    src="{{ asset('storage/assets/web/img/watsap-white-icon.svg') }}"
                                    alt="" /></a>
                            <a href="mailto:care@manicare.com"><img
                                    src="{{ asset('storage/assets/web/img/mail-white-icon.svg') }}"
                                    alt="" /></a>
                            <a href="tel:+9833006916"><img
                                    src="{{ asset('storage/assets/web/img/call-white-icon.svg') }}"
                                    alt="" /></a>
                        </div>
                    </div>

                    <!-- Right -->
                    @include('inclides.request-consultation-form')
                </div>
            </div>
        </div>
    </section>
    <section class="blogslisder paper-section">
        <div class="container-fluid">
            <div class="paper-header">
                <h3>THE PAPER</h3>
                <div class="d-flex align-items-center beyond">
                    <a href="{{ route('blog') }}" class="ms-md-2 ms-0 my-md-0 my-2" tabindex="0"> Discover Them All
                    </a><img src="{{ asset('storage/assets/web/img/arrow-golden.svg') }}" alt=""
                        class="ms-2" />
                </div>
            </div>
        </div>

        <div class="swiper paperSwiper">
            <div class="swiper-wrapper">
                @forelse(($paperBlogs ?? []) as $blog)
                    @php
                        $defaultImg = asset('storage/assets/web/img/paper-one.jpg');
                        $imgUrl = $blog->featured_image
                            ? asset('storage/' . $blog->featured_image)
                            : ($blog->thumbnail
                                ? asset('storage/' . $blog->thumbnail)
                                : $defaultImg);
                    @endphp
                    <div class="swiper-slide">
                        <div class="paper-card">
                            <img src="{{ $imgUrl }}" alt="{{ $blog->title }}"
                                onerror="this.onerror=null; this.src='{{ $defaultImg }}';" />
                            <div class="tags">
                                <span class="tag blog">Blog</span>
                                @if ($blog->category)
                                    <span class="tag payroll">{{ $blog->category->name }}</span>
                                @endif
                                @if ($blog->tags && is_array($blog->tags))
                                    @foreach (array_slice($blog->tags, 0, 2) as $tag)
                                        <span class="tag">{{ is_string($tag) ? $tag : $tag['name'] ?? '' }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <p>{{ Str::limit($blog->title ?? strip_tags($blog->title), 120) }}</p>
                            <a href="{{ route('blog.show', $blog->slug) }}">Read More <img
                                    src="{{ asset('storage/assets/web/img/purple-arrow.svg') }}" alt=""
                                    width="16" /></a>
                        </div>
                    </div>
                @empty
                    {{-- Fallback if no blogs: show nothing or a single placeholder slide --}}
                @endforelse
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $(".text-slider").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                vertical: true,
                verticalSwiping: true,
                autoplay: true,
                autoplaySpeed: 2500,
                arrows: false,
                dots: true,
                loop: true,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                }, ],
            });
            $(".card-wrapper").slick({
                slidesToShow: 2.3, // desktop
                slidesToScroll: 1,
                // loop: false,
                spaceBetween: 0,
                // infinite: false, // end cut effect
                autoplay: true,
                autoplaySpeed: 2500,
                // loop: false,
                arrows: false,
                dots: true,
                // pauseOnHover: false,

                responsive: [{
                        breakpoint: 1200, // laptop / small desktop
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 992, // tablet landscape
                        settings: {
                            slidesToShow: 1.5,
                        },
                    },
                    {
                        breakpoint: 768, // tablet portrait
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                    {
                        breakpoint: 576, // mobile
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            new Swiper(".sectorsSwiper", {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                    reverseDirection: false,
                },
                // pagination: {
                //     el: ".swiper-pagination",
                //     clickable: true,
                // },
                // navigation: {
                //     nextEl: ".swiper-next-legacy-slider-69985434a0dd8",
                //     prevEl: ".swiper-prev-legacy-slider-69985434a0dd8",
                // },
                breakpoints: {
                    320: { slidesPerView: 1, spaceBetween: 0   , centeredSlides: true },
                    768: { slidesPerView: 2, spaceBetween: 0 },
                    1024: { slidesPerView: 4, spaceBetween: 0 },
                    1200: { slidesPerView: 5, spaceBetween: 0 },
                    1400: { slidesPerView: 6, spaceBetween: 0 },
                    //1600: { slidesPerView: 7, spaceBetween: 0 },
                },
            });

            const paperSwiper = new Swiper(".paperSwiper", {
                loop: true,
                loopAdditionalSlides: 4,
                spaceBetween: 0,
                autoplay: true,
                // slidesPerView: 1.5,
                speed: 800,
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                    },
                    1024: {
                        slidesPerView: 3.7,
                    },
                },
            });
        });
    </script>
@endsection
