@extends('layouts.app')
@section('content')
<section class="section-payroll">
    <!-- TOP IMAGES -->
    <div class="top-images">
        <div class="img-card">
            <img src="{{ asset('storage/assets/web/img/main-img1.jpg') }}" alt="Office Image 1">
        </div>

        <div class="img-card">
            <img src="{{ asset('storage/assets/web/img/main-img2.jpg') }}" alt="Office Image 2">
        </div>
    </div>
    <div class="container-fluid">


        <!-- BOTTOM CONTENT -->
        <div class="payroll-content">
            <div class="content">
                <div class="label">
                    <img src="{{ asset('storage/assets/web/img/payroll-icon.svg') }}" alt="">
                    <span>Staffing, Payroll & Compliance Services</span>
                </div>

                <h1>People Systems Built for Scale and Trust.</h1>

                <p class="desc">

                    From recruitment to payroll to compliance, Manicare manages the entire employee journey with

                    precision, empathy, and accountability.
                </p>

                <div class="certs">
                    <div class="cert">
                        <img src="{{ asset('storage/assets/web/img/iso-black.png') }}" alt="" width="32">
                        <span>ISO 9001:2015</span>
                    </div>

                    <div class="cert">
                        <img src="{{ asset('storage/assets/web/img/iso-black.png') }}" alt="" width="32">
                        <span>ISO 14001:2015</span>
                    </div>

                    <div class="cert">
                        <img src="{{ asset('storage/assets/web/img/iso-black.png') }}" alt="" width="32">
                        <span>ISO 45001:2018</span>
                    </div>
                </div>
            </div>

            <div class="cta">
                <button class="btn">Speak to a Workforce Specialist</button>
            </div>

        </div>

    </div>
</section>

<section class="maannicareWhy">
    <div class="container-fluid">

        <div class="why-title">WHY MAANICARE</div>

        <div class="features">
            <div class="feature">End-to-end <br> workforce ownership</div>
            <div class="feature">On-time, <br> accurate payroll cycles</div>
            <div class="feature">Audit-ready <br> compliance processes</div>
            <div class="feature">Technology-enabled <br> reporting</div>
            <div class="feature">Human-centric <br> governance</div>
        </div>

        <div class="big-text">
            Maanicare brings clarity to complexity. Combining systems,
            expertise, and care to build workforces that run smoother and
            stand on trust.
        </div>

    </div>

    <!-- FULL WIDTH IMAGE -->
    <div class="image-box">
        <img src="{{ asset('storage/assets/web/img/paperwork.jpg') }}" alt="Meeting Room" />

        <!-- Overlay Text -->
        <div class="overlay-text container">
            <div class="overlay-left">PEOPLE ARE NOT PAPERWORK</div>

            <div class="overlay-right">
                At Maanicare, workforce management is treated as a living system.
                We combine structured processes with human understanding to create
                teams that feel supported, stay compliant, and perform consistently.
            </div>
        </div>
    </div>

</section>

<section class="onePartner">
    <div class="container-fluid">

        <div class="services-layout">

            <!-- LEFT TEXT -->
            <div class="left-title">
                ONE PARTNER.<br>
                ONE SYSTEM.<br>
                FULL ACCOUNTABILITY.
            </div>

            <!-- RIGHT CARDS -->
            <div class="cards-grid">

                <!-- Card 1 -->
                <div class="card">
                    <div class="icon">
                        <img src="{{ asset('storage/assets/web/img/recruitment-staffing-icon.svg') }}" alt="" width="70">
                    </div>
                    <h3>Recruitment & Staffing</h3>
                    <p>
                        We identify and place talent through structured assessments,
                        building leadership and frontline teams.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <div class="icon">
                        <img src="{{ asset('storage/assets/web/img/onboarding-icon.svg') }}" alt="" width="70">
                    </div>
                    <h3>Onboarding</h3>
                    <p>
                        Structured onboarding embeds mission, values, and clarity.
                        Creating confident employees from their very first day.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <div class="icon">
                        <img src="{{ asset('storage/assets/web/img/payroll-management-icon.svg') }}" alt="" width="70">
                    </div>
                    <h3>Payroll Management</h3>
                    <p>
                        Automated systems and expert oversight ensure accurate,
                        timely payroll with seamless access and zero disruption.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="card">
                    <div class="icon">
                        <img src="{{ asset('storage/assets/web/img/compliance-icon.svg') }}" alt="" width="70">
                    </div>
                    <h3>Compliance</h3>
                    <p>
                        Statutory filings and regulatory updates, keeping
                        organisations compliant and audit-ready.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="card">
                    <div class="icon">
                        <img src="{{ asset('storage/assets/web/img/s.trategic-consulting.svg') }}" alt="" width="70">
                    </div>
                    <h3>Strategic Consulting</h3>
                    <p>
                        We guide workforce decisions on scaling and optimisation to
                        keep organisations agile and future-aligned.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="card">
                    <div class="icon">
                        <img src="{{ asset('storage/assets/web/img/data-reporting-icon.svg') }}" alt="" width="70">
                    </div>
                    <h3>Data & Reporting</h3>
                    <p>
                        Clear dashboards transform workforce data into insights
                        that drive clarity, speed, and smarter decisions.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="structuredSecure">
    <div class="container-fluid">
        <div class="top-area">
            <!-- LEFT IMAGE -->
            <div class="photo">
                <img src="{{ asset('storage/assets/web/img/audit-ready-img.jpg') }}" alt="">
            </div>

            <!-- RIGHT LIST -->
            <div class="right-content">
                <div class="mini-title">STRUCTURED. SECURE. AUDIT-READY.</div>

                <div class="list">

                    <div class="list-item">
                        <div class="arrow"><img src="{{ asset('storage/assets/web/img/arrow_forward.svg') }}" alt=""></div>
                        <div class="list-text">Defined SOPs and approval frameworks</div>
                    </div>

                    <div class="list-item">
                        <div class="arrow"><img src="{{ asset('storage/assets/web/img/arrow_forward.svg') }}" alt=""></div>
                        <div class="list-text">Automated payroll and compliance systems</div>
                    </div>

                    <div class="list-item">
                        <div class="arrow"><img src="{{ asset('storage/assets/web/img/arrow_forward.svg') }}" alt=""></div>
                        <div class="list-text">Real-time dashboards and reporting</div>
                    </div>

                    <div class="list-item">
                        <div class="arrow"><img src="{{ asset('storage/assets/web/img/arrow_forward.svg') }}" alt=""></div>
                        <div class="list-text">Confidential data handling</div>
                    </div>

                    <div class="list-item">
                        <div class="arrow"><img src="{{ asset('storage/assets/web/img/arrow_forward.svg') }}" alt=""></div>
                        <div class="list-text">Ethical workforce governance</div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- ================= BOTTOM ================= -->
    <div class="support-area">
        <div class="container-fluid">

            <div class="support-title">WHO WE SUPPORT</div>

            <div class="support-grid">

                <div class="support-card">
                    <div class="icon">
                        <img src="{{ asset('storage/assets/web/img/show_chart.svg') }}" alt="" width="100">
                    </div>
                    <h4>Growing<br>Enterprises</h4>
                </div>

                <div class="support-card">
                    <div class="icon">
                        <img src="{{ asset('storage/assets/web/img/multi-location-golden.svg') }}" alt="" width="80">
                    </div>
                    <h4>Multi-location<br>Organisations</h4>
                </div>

                <div class="support-card">
                    <div class="icon">
                        <img src="{{ asset('storage/assets/web/img/manufacturing-golden.svg') }}" alt="" width="80">
                    </div>
                    <h4>Manufacturing<br>& Industrial Units</h4>
                </div>

                <div class="support-card">
                    <div class="icon">
                        <img src="{{ asset('storage/assets/web/img/corporate-golden.svg') }}" alt="" width="80">
                    </div>
                    <h4>Corporate<br>Offices</h4>
                </div>

                <div class="support-card">
                    <div class="icon">
                        <img src="{{ asset('storage/assets/web/img/groups.svg') }}" alt="" width="95">
                    </div>
                    <h4>Project-based<br>Workforces</h4>
                </div>

            </div>
        </div>
    </div>

</section>

<div class="container-fluid">
        <section class="consult-section">
            <div class="consult-container">
                <!-- Left -->
                <div class="consult-left">
                    <h1>Let Your Workforce Run Effortlessly</h1>
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
                        $imgUrl = $blog->featured_image ? asset('storage/' . $blog->featured_image) : ($blog->thumbnail ? asset('storage/' . $blog->thumbnail) : $defaultImg);
                    @endphp
                    <div class="swiper-slide">
                        <div class="paper-card">
                            <img src="{{ $imgUrl }}" alt="{{ $blog->title }}" onerror="this.onerror=null; this.src='{{ $defaultImg }}';" />
                            <div class="tags">
                                <span class="tag blog">Blog</span>
                                @if($blog->category)
                                    <span class="tag payroll">{{ $blog->category->name }}</span>
                                @endif
                                @if($blog->tags && is_array($blog->tags))
                                    @foreach(array_slice($blog->tags, 0, 2) as $tag)
                                        <span class="tag">{{ is_string($tag) ? $tag : ($tag['name'] ?? '') }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <p>{{ Str::limit($blog->excerpt ?? strip_tags($blog->content), 120) }}</p>
                            <a href="{{ route('blog.show', $blog->slug) }}">Read More <img src="{{ asset('storage/assets/web/img/purple-arrow.svg') }}" alt="" width="16" /></a>
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
            const paperSwiper = new Swiper(".paperSwiper", {
                loop: true,
                loopAdditionalSlides: 4,
                spaceBetween: 0,
                autoplay: true,
                slidesPerView: 1.5,
                speed: 800,
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3.7,
                    },
                },
            });
        });
    </script>
    
@endsection 