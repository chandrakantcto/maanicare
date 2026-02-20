@extends('layouts.app')
@section('content')
    <div class="ourtranclass hero-grey">
        <img src="{{ asset('storage/assets/web/img/geary.png') }}">
    </div>

    <!-- Black Content Section -->
    <section class="ourtranclass hero-contentour">
        <div class="container-fluid">
            <div class="row align-items-start">

                <!-- Left -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="hero-title">
                        People Make<br>
                        Systems Real.
                    </h2>
                </div>

                <!-- Right -->
                <div class="col-lg-6">
                    <p class="hero-text">
                        Operations work when people understand the standard and are empowered
                        to uphold it. We invest in training, clarity, and on-ground leadership
                        so our teams don’t simply complete tasks, they protect safety,
                        consistency, and outcomes.
                        <br>
                        Because well-supported people are what make systems hold, even under
                        pressure.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="teasclass standard-section">
        <div class="container-fluid px-0">
            <div class="row g-0">

                <!-- Left Grey Panel -->
                <div class="col-lg-6 left-panel">
                    <img src="{{ asset('storage/assets/web/img/Rectangle-1646.jpg') }}" alt="" />
                </div>

                <!-- Right Purple Panel -->
                <div class="col-lg-6 right-panel">
                    <div class="content">

                        <h1>
                            The Standard Is<br>
                            Carried by People.
                        </h1>

                        <p>
                            Systems matter. Processes matter. Structure matters. But over the
                            years, I’ve learned that none of it holds unless the people
                            responsible for it understand why the standard exists and feel
                            accountable for upholding it, even when no one is watching.
                        </p>

                        <p>
                            Manicare was built from the ground up with this belief. We don’t
                            operate in ideal conditions. We operate in real environments. Busy
                            sites, active workplaces, tight timelines, and high expectations.
                            In those conditions, intention alone isn’t enough. What matters is
                            discipline, clarity, and consistency on the ground.
                        </p>

                        <p>
                            From day one, our focus has been on building teams that take
                            ownership. Teams that understand their role, respect the environment
                            they operate in, and finish the work properly. Not partially. Not
                            eventually. Completely. As we’ve grown, that belief has only
                            strengthened.
                        </p>

                        <p>
                            Everything we do, from planning to execution to reporting, is
                            designed to support the people carrying the standard forward.
                            Because in the end, systems may guide the work. But it’s people who
                            make it endure.
                        </p>

                        <div class="signature">
                            Vinod B. Chaturvedi, Chairman & Managing Director
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="leadership-section mt-5">
        <div class="container-fluid">

            <div class="section-title mb-3">LEADERSHIP</div>

            <div class="swiper leadershipSwiper">
                <div class="swiper-wrapper">

                    <!-- Card -->
                    <div class="swiper-slide">
                        <div class="leader-card">

                            <div class="leader-content">
                                <h3>Abhishek<br>Chaturvedi</h3>
                                <span class="designation">Group Director & CEO</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>

                            <!-- IMAGE AREA -->
                            <div class="leader-image">
                                <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                            </div>

                            <a href="#" class="linkedin">in</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="leader-card">
                            <div class="leader-content">
                                <h3>Yamuna<br>Dutt</h3>
                                <span class="designation">Director of Operations</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="leader-image">
                                <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                            </div>
                            <a href="#" class="linkedin">in</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="leader-card">
                            <div class="leader-content">
                                <h3>Anmol<br>Chaturvedi</h3>
                                <span class="designation">Director of Contracts & Supply Chain</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="leader-image">
                                <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                            </div>
                            <a href="#" class="linkedin">in</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="leader-card">
                            <div class="leader-content">
                                <h3>Deepak<br>Patel</h3>
                                <span class="designation">Chief Finance Officer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="leader-image">
                                <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                            </div>
                            <a href="#" class="linkedin">in</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="leader-card">
                            <div class="leader-content">
                                <h3>Deepak<br>Patel</h3>
                                <span class="designation">Chief Finance Officer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="leader-image">
                                <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                            </div>
                            <a href="#" class="linkedin">in</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="core-team-section mt-5">
        <div class="container-fluid">

            <div class="section-title mb-3">THE CORE TEAM</div>

            <div class="row g-4">

                <!-- Card -->
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <!-- Repeat Cards -->
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <!-- Add more as needed -->

            </div>

            <div class="row g-4">

                <!-- Card -->
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <!-- Repeat Cards -->
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <!-- Add more as needed -->

            </div>

            <div class="row g-4">

                <!-- Card -->
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <!-- Repeat Cards -->
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('storage/assets/web/img/Rectangle 15s92.jpg') }}" alt="" />
                        </div>
                        <h4>Yamuna Dutt</h4>
                        <span>Director of Operations</span>
                    </div>
                </div>

                <!-- Add more as needed -->

            </div>


        </div>
    </section>



    <div class="container-fluid mt-5">
        <section class="members-section">
            <h2>5,000+ Members &amp; Counting...</h2>
        </section>
    </div>

    <section class="marquteamflmy family-section">
        <div class="container-fluid">

            <div class="section-title mb-3 mt-5">THE FAMILY</div>

        </div>
        <!-- ROW 1 (Left to Right) -->
        <div class="marquee">
            <div class="marquee-track">
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                        <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
            </div>
        </div>

        <!-- ROW 2 (Right to Left) -->
        <div class="marquee reverse">
            <div class="marquee-track">
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                        <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
            </div>
        </div>

        <!-- ROW 3 -->
        <div class="marquee">
            <div class="marquee-track">
                <div class="family-card"> <img src="images/Rectangle 1592.jpg" alt="" /> <span
                        class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
            </div>
        </div>

        <!-- ROW 4 -->
        <div class="marquee reverse">
            <div class="marquee-track">
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
                <div class="family-card"> <img src="{{ asset('storage/assets/web/img/Rectangle 1592.jpg') }}"
                        alt="" /> <span class="nameclass">Firstname L.Initial</span></div>
            </div>
        </div>


    </section>

        <section class="join-team mt-5 mb-5">
            <div class="join-content">
                <h2>Join the Team That Holds the Standard.</h2>

                <p>
                    We look for people who take responsibility seriously.<br>
                    People who show up, follow the process, and finish the work flawlessly.
                </p>

                <div class="join-buttons">
                    <a href="mailto:care@manicare.com" class="btn primary">Checkout our current openings</a>
                    <a href="https://www.linkedin.com/company/maani-care/jobs/" target="_blank" class="btn outline">Drop us your resume</a>
                </div>
            </div>
        </section>


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


    <script>
        new Swiper(".leadershipSwiper", {
            loop: false, // 🔴 FIX
            spaceBetween: 10,
            slidesPerView: 4,
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 4
                }
            }
        });
    </script>
@endsection
