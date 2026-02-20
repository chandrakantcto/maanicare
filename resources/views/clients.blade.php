@extends('layouts.app')
@section('content')
  <div class="maiclinethero">
    <section class="trusted-section">
        <div class="container-fluid">
            <div class="trusted-content text-center">

                <h1>Trusted Where Standards Matter.</h1>

                <p class="subtitle">
                    We work with organizations that value consistency, accountability,
                    and long-term operational discipline.
                </p>

                <div class="trust-footer">
                   
                    <p class="trust-text">
                         <span class="stars">★★★★★</span>USTED BY OVER 3,00,000+ PEOPLE<br>
                        ACROSS INDUSTRIES. ACROSS ENVIRONMENTS. AT SCALE.
                    </p>
                </div>

            </div>
        </div>
    </section>
     </div>





    <section class="clineiall client-section">
        <div class="container-fluid">

            <!-- Heading -->
            <div class="row mb-3">
                <div class="col-lg-12">
                    <h2 class="client-title">
                        A representative selection of organizations we work with.
                    </h2>
                    <p class="client-subtitle">
                        Certain client engagements remain confidential by request.
                    </p>
                </div>
            </div>

            <!-- Grid -->
            <div class="row g-4" id="clients-grid">
                @foreach($clients as $client)
                    @include('clients.partials.card', ['client' => $client])
                @endforeach
            </div>

            <div class="row g-4" id="clients-grid-more"></div>

            {{--@if($hasMore)
            <div class="row mt-4" id="clients-show-more-row">
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-custom clients-show-more-btn" id="clients-show-more-btn" data-page="{{ $nextPage }}">Show More</button>
                </div>
            </div>
            @endif--}}
        </div>
    </section>


    <section class="newmaarquclass industry-marquee">

        <!-- Line 1 : LEFT to RIGHT -->
        <div class="marquee marquee-left">
            <div class="marquee-track">
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/dsdsds.svg') }}"> Pharmacy</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/enginefffering.svg') }}"> Engineering</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sdssfsf.svg') }}"> Manufacturing</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sfsfs.svg') }}"> Research & Development</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/fsfsfsfs.svg') }}"> Information Technology</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/dsfsfhhy.svg') }}"> Banking</div>
                 <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sfsfsf.svg') }}"> Residential</div>
                  <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/uyiop.svg') }}"> & More</div>
                     <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/dsdsds.svg') }}"> Pharmacy</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/enginefffering.svg') }}"> Engineering</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sdssfsf.svg') }}"> Manufacturing</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sfsfs.svg') }}"> Research & Development</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/fsfsfsfs.svg') }}"> Information Technology</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/dsfsfhhy.svg') }}"> Banking</div>
                 <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sfsfsf.svg') }}"> Residential</div>
                  <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/uyiop.svg') }}"> & More</div>
            </div>
        </div>

        <!-- Line 2 : RIGHT to LEFT -->
        <div class="marquee marquee-right">
            <div class="marquee-track">
                   <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/dsdsds.svg') }}"> Pharmacy</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/enginefffering.svg') }}"> Engineering</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sdssfsf.svg') }}"> Manufacturing</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sfsfs.svg') }}"> Research & Development</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/fsfsfsfs.svg') }}"> Information Technology</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/dsfsfhhy.svg') }}"> Banking</div>
                 <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sfsfsf.svg') }}"> Residential</div>
                  <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/uyiop.svg') }}"> & More</div>
                     <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/dsdsds.svg') }}"> Pharmacy</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/enginefffering.svg') }}"> Engineering</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sdssfsf.svg') }}"> Manufacturing</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sfsfs.svg') }}"> Research & Development</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/fsfsfsfs.svg') }}"> Information Technology</div>
                <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/dsfsfhhy.svg') }}"> Banking</div>
                 <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/sfsfsf.svg') }}"> Residential</div>
                  <div class="marquee-item"><img src="{{ asset('storage/assets/web/img/uyiop.svg') }}"> & More</div>
            </div>
        </div>

    </section>





    <section class="testimonial-section">
        <div class="container-fluid">
            <div class="row align-items-start">

                <!-- LEFT -->
                <div class="col-lg-4">
                    <h6 class="testimonial-title">WHAT THEY SAY ABOUT US</h6>

                    <div class="testimonial-arrows">
                        <div class="swiper-button-prev custom-arrow">
                            <!--<i class="fa-solid fa-chevron-left"></i>-->
                        </div>
                        <div class="swiper-button-next custom-arrow">
                            <!--<i class="fa-solid fa-chevron-right"></i>-->
                        </div>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="col-lg-8">
                    <div class="swiper testimonialSwiper">
                        <div class="swiper-wrapper">

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <p class="testimonial-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie,
                                    dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem
                                    sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum
                                    velit,
                                    sit amet feugiat lectus.
                                </p>

                                <h5 class="testimonial-name">John Doe</h5>
                                <span class="testimonial-role">
                                    Chief Executive Officer, XYZ Inc.
                                </span>
                            </div>

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <p class="testimonial-text">
                                    Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar.
                                    Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna.
                                    Curabitur vel bibendum lorem.
                                </p>

                                <h5 class="testimonial-name">Sarah Williams</h5>
                                <span class="testimonial-role">
                                    Managing Director, ABC Group
                                </span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="certified-section">
        <div class="container text-center">

            <h6 class="certified-title">
                TRUSTED & CERTIFIED BY GLOBAL STANDARDS
            </h6>

            <div class="row justify-content-center align-items-center mt-4 g-4">

                <div class="col-6 col-md-4">
                    <img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" class="img-fluid iso-logo"
                        alt="ISO 9001:2015"> <span>ISO 9001:2015</span>
                </div>

                <div class="col-6 col-md-4">
                    <img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" class="img-fluid iso-logo"
                        alt="ISO 9001:2015"> <span>ISO 14001:2015</span>
                </div>

                <div class="col-6 col-md-4">
                    <img src="{{ asset('storage/assets/web/img/iso-gray-icon.svg') }}" class="img-fluid iso-logo"
                        alt="ISO 9001:2015"> <span>ISO 45001:2018</span>
                </div>

            </div>

        </div>
    </section>








    <div class="container-fluid">
        <section class="consult-section">
            <div class="consult-container">
                <!-- Left -->
                <div class="consult-left">
                    <h1>If that’s how you operate, we’re aligned.</h1>
                    <p>
                        We work best with organizations that value structure, clarity, and accountability.
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


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            var swiper = new Swiper(".testimonialSwiper", {
                slidesPerView: 1,
                loop: true,

                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },

                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                speed: 800,
            });

        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var btn = document.getElementById("clients-show-more-btn");
            if (!btn) return;
            btn.addEventListener("click", function() {
                var page = btn.getAttribute("data-page");
                if (!page) return;
                btn.disabled = true;
                var url = "{{ url()->current() }}?page=" + page;
                fetch(url, {
                    headers: { "X-Requested-With": "XMLHttpRequest", "Accept": "application/json" }
                })
                .then(function(r) { return r.json(); })
                .then(function(data) {
                    var container = document.getElementById("clients-grid-more");
                    if (container && data.html) {
                        container.insertAdjacentHTML("beforeend", data.html);
                    }
                    if (data.has_more && data.next_page) {
                        btn.setAttribute("data-page", data.next_page);
                        btn.disabled = false;
                    } else {
                        var row = document.getElementById("clients-show-more-row");
                        if (row) row.style.display = "none";
                    }
                })
                .catch(function() { btn.disabled = false; });
            });
        });
    </script>
@endsection
