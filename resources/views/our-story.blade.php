@extends('layouts.app')
@section('content')
<section class="mainbannerabouts split-section">
    <div class="split-wrap">
        <div class="container-fluid">
            <!-- LEFT CONTENT (container) -->
            <div class="split-left">
                <div class="left-inner">

                    <div class="iso-row">
                        <span><img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="" /> ISO 9001:2015</span>
                        <span><img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="" /> ISO 14001:2015</span>
                        <span><img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" alt="" /> ISO 45001:2018</span>
                    </div>

                    <h2>A commitment<br>to building better</h2>

                    <p>
                        At Manicare, a family vision that began in 1992 has grown into a pan-India ecosystem shaping
                        how people live and work. Across millions of square feet and thousands of lives, one belief
                        remains constant: environments, when done right, elevate everything. For our partners,
                        excellence here isn’t an act, it’s a culture.
                    </p>

                    <a href="{{ route('our-team') }}" class="btn">Speak to Our Team</a>

                </div>
            </div>
        </div>

        <!-- RIGHT FULL IMAGE -->
        <div class="split-right">
            <!-- Yahan apni image lagao -->
            <img src="{{ asset('storage/assets/web/img/Group 9.png') }}" alt="" />
        </div>

    </div>
</section>



<div class="container-fluid">
    <section class="secondsectionabouts services-strip">
        <div class="Servicesmainrow juatify-content--between gy-4">

            
                <div class="service-item">
                    <div class="service-icon"><img src="{{ asset('storage/assets/web/img/deployed_code.png') }}" alt="" /></div>
                    <div class="service-content">
                        <h5>Project & Fit-Out Services</h5>
                        <a href="{{ route('services.project-and-fit-out') }}">Know more</a>
                    </div>
                </div>
           

            
                <div class="service-item">
                    <div class="service-icon"><img src="{{ asset('storage/assets/web/img/contract_edit.png') }}" alt="" /></div>
                    <div class="service-content">
                        <h5>Staffing, Payroll & Compliance Services</h5>
                        <a href="{{ route('services.staffing-payroll-and-compliance') }}">Know more</a>
                    </div>
             
            </div>

            
                <div class="service-item">
                    <div class="service-icon"><img src="{{ asset('storage/assets/web/img/graph_5.png') }}" alt="" /></div>
                    <div class="service-content">
                        <h5>Integrated Facility Management Services</h5>
                        <a href="{{ route('services.integrated-facility-management') }}">Know more</a>
                    </div>
                </div>
            

            
                <div class="service-item">
                    <div class="service-icon"><img src="{{ asset('storage/assets/web/img/task_alt.png') }}" alt="" /></div>
                    <div class="service-content">
                        <h5>On-Demand Services</h5>
                        <a href="{{ route('services.on-demand') }}">Know more</a>
                    </div>
                </div>
            

        </div>
    </section>
</div>


<div class="container-fluid">
    <div class="linebottom"></div>
</div>


<section class="invisible-section">
    <div class="invisible-overlay"></div>

    <div class="invisible-content">
        <h1>The Best Work Feels Invisible.</h1>
        <p>
            When a workplace runs well, no one applauds.<br>
            They simply arrive… and everything works.
        </p>

        <ul>
            <li><img src="{{ asset('storage/assets/web/img/taddsk_alt.svg') }}" alt="" /> The site is safe.</li>
            <li><img src="{{ asset('storage/assets/web/img/taddsk_alt.svg') }}" alt="" /> The standards are consistent.</li>
            <li><img src="{{ asset('storage/assets/web/img/taddsk_alt.svg') }}" alt="" /> The workforce is compliant.</li>
            <li><img src="{{ asset('storage/assets/web/img/taddsk_alt.svg') }}" alt="" /> The facilities don’t disrupt the day.</li>
            <li><img src="{{ asset('storage/assets/web/img/taddsk_alt.svg') }}" alt="" /> The response is fast and closure is clean.</li>
            <li><img src="{{ asset('storage/assets/web/img/taddsk_alt.svg') }}" alt="" /> That “quiet ease” isn’t luck. It’s discipline, <em>designed</em>.</li>
        </ul>
    </div>
</section>

<div class="container-fluid mt-5">
    <div class="row g-4 fiveimages">

        <!-- Left Big Image -->
        <div class="col-lg-7">
            <div class="image-large">
                <img src="{{ asset('storage/assets/web/img/Rectangle 1656.png') }}" alt="" />
            </div>
        </div>

        <!-- Right Content -->
        <div class="col-lg-5">
            <div class="row g-3">

                <!-- Top Small Images -->
                <div class="col-4">
                    <div class="image-small">
                        <img src="{{ asset('storage/assets/web/img/Rectangle 1659.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="image-small">
                        <img src="{{ asset('storage/assets/web/img/Rectangle 1659.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="image-small">
                        <img src="{{ asset('storage/assets/web/img/Rectangle 1659.png') }}" alt="" />
                    </div>
                </div>

                <!-- Text Section -->
                <div class="col-12 mt-4">
                    <div class="problem-tag">THE PROBLEM WE SOLVE</div>

                    <div class="problem-title">
                        Most Businesses Don’t Need More Vendors.<br>
                        They Need More Control.
                    </div>

                    <div class="problem-text">
                        <p>In real organisations, complexity doesn’t announce itself. It accumulates.<br>
                        A different partner for every need.<br>
                            A different standard for every site.<br>
                            A different answer depending on who you call.</p>
                        <p>
                            And then the real cost begins: follow-ups, delays, exceptions,
                            rework, risk.<br>
                            We exist to reduce that cost—by building systems that don’t wobble.
                        </p>
                       
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<div class="container-fluid mt-5 newsectionclass">
    <div class="eyebrow">THE PROBLEM WE SOLVE</div>

    <!--<h1>Care Operationalised</h1>-->
     <img src="{{ asset('storage/assets/web/img/Union.png') }}" alt="" />

    <div class="subtitle">
        “Care” is often written like a soft value. We treat it like a hard standard.
    </div>

    <div class="care-label">Care is:</div>

    <div class="cards">
        <div class="card">
            <div class="icon"> <img src="{{ asset('storage/assets/web/img/filter_none.png') }}" alt="" /></div>
            <p>Clarity before execution.</p>
        </div>

        <div class="card">
            <div class="icon"> <img src="{{ asset('storage/assets/web/img/health_and_safety.png') }}" alt="" /></div>
            <p>Safety before speed.</p>
        </div>

        <div class="card">
                    <div class="icon"> <img src="{{ asset('storage/assets/web/img/grading.png') }}" alt="" /></div>
            <p>Documentation before claims.</p>
        </div>

        <div class="card">
            <div class="icon"> <img src="{{ asset('storage/assets/web/img/receipt_long.png') }}" alt="" /></div>
            <p>Governance before growth.</p>
        </div>
    </div>

    <div class="footer-text">
        Care is not what we say. It's how we run the show.
    </div>
</div>
</div>



<section class="difference mt-5">
    <div class="container-fluid">
 <div class="row">
      <div class="col-md-12 col-lg-3">
        <h2 class="title">The Difference</h2>

        
 </div>
 <div class="sideclass col-md-12 col-lg-9">
 <p class="subtitle">
            We Don’t Add Layers. We Remove Uncertainty.
        </p>
        <div class="content-grid">
            <div class="col">
                <div class="item">
                    <h4>Less fragmentation, more control</h4>
                    <p>One partner across connected operational needs.</p>
                </div>

                <div class="item">
                    <h4>Governance-led delivery</h4>
                    <p>Scopes, standards, and accountability are set upfront.
                    </p>
                </div>

                <div class="item">
                    <h4>On-ground execution with trained teams</h4>
                    <p>Not outsourced responsibility.</p>
                </div>
            </div>

            <div class="col">
                <div class="item">
                    <h4>Transparent reporting</h4>
                    <p>That leadership can actually use.</p>
                </div>

                <div class="item">
                    <h4>Documentation as a process</h4>
                    <p>So audits don’t become emergencies.</p>
                </div>

                <div class="item">
                    <h4>Consistency across locations</h4>
                    <p>Because standards shouldn’t travel differently than your brand.</p>
                </div>
            </div>
        </div>

        <p class="tagline">If it’s ours, it is simply excellent.</p>

        <div class="cta">
            <button> <a href="https://www.linkedin.com/company/maani-care/" target="_blank">Request a Conversation</a></button>
        </div>

        <div class="divider"></div>

        <div class="iso-grid">
            <div class="iso-card">
                <h5><img src="{{ asset('storage/assets/web/img/Group 1321319382.svg') }}" alt="" /></h5>
                <h3>Consistency<br> in Excellence</h3>
                <p>
                    Structured, repeatable systems to deliver consistent quality
                    across every project.
                </p>
            </div>

            <div class="iso-card">
                <h5><img src="{{ asset('storage/assets/web/img/1400410.svg') }}" alt="" /></h5>
                <h3>Built with<br> Environmental Integrity</h3>
                <p>
                    Actively manages and reduces environmental impact across
                    operations and projects.
                </p>
            </div>

            <div class="iso-card">
                <h5><img src="{{ asset('storage/assets/web/img/Group 132ddd1319384.svg') }}" alt="" /></h5>
                <h3>People First.<br> Safety Always.</h3>
                <p>
                    Prioritizes worker safety, health, and risk prevention in
                    site-based work.
                </p>
            </div>
        </div>
                </div>
</div>
    </div>
</section>





<div class="aboutssection">
<section class="hero">
    <div class="container-fluid">
        <div class="overlay"></div>

        <div class="hero-content">
            <h1>Care That Holds Even at Scale.</h1>
            <p>
                When systems hold, businesses move faster. Decisions become clearer.<br>
                Teams become steadier. Growth becomes easier.
            </p>

            <div class="buttons">
                <a href="{{ route('services.index') }}" class="btn primary">Explore Our Verticals</a>
                <button id="req-consult-headone" class="btn secondary">Get in Touch</button>
            </div>
        </div>
</div>
</section>
</div>


<div class="container-fluid">
    <section class="consult-section">
        <div class="consult-container">
            <!-- Left -->
            <div class="consult-left">
                <h1>This is where structure begins.</h1>
                <p>
                    Tell us a little about your requirements, and we’ll help you explore what’s possible for your
                    space or operations.
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

    @include('partials.insights-that-build-trust')
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".insights-swiper", {
        slidesPerView: 3,
        spaceBetween: 24,
        loop: true,
        autoplay: true,
        breakpoints: {
            0: {
                slidesPerView: 1.2,
            },
            600: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1300: {
                slidesPerView: 3.2,
            },
        },
    });
</script>
@endsection
