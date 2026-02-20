@extends('layouts.app')
@section('content')
    <section class="case-section">
        <div class="container-fluid">
            <div class="case-top">
                <div>
                    <div class="case-tag">CASE STUDIES</div>
                    <h2 class="case-title">Insights That Build Trust</h2>
                </div>
                <div class="case-desc">
                    Thoughtful writing on spaces, systems, people, and operations—shaped by what we see, build, and
                    manage every day.
                </div>
            </div>

            @if($featured->isNotEmpty())
            <!-- Swiper (featured case studies) -->
            <section class="insights-section">
                <div class="swiper insights-swiper">
                    <div class="swiper-wrapper">
                        @foreach($featured as $caseStudy)
                            @include('case-studies.partials.swiper-slide', ['caseStudy' => $caseStudy])
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
        </div>
    </section>

    <div class="container-fluid">
        <section class="case-filter-section">
            <div class="case-filter-header">
                <div class="filter-title">FILTER BY VERTICAL</div>

                <div class="filter-tabs">
                    @foreach($filterTabs as $index => $tab)
                        <button class="filter-btn {{ $index === 0 ? 'active' : '' }}" data-filter="{{ $tab['filter'] }}">{{ $tab['name'] }}</button>
                    @endforeach
                </div>
            </div>

            <div class="case-grid" id="case-studies-grid">
                @foreach($caseStudies as $caseStudy)
                    @include('case-studies.partials.card', ['caseStudy' => $caseStudy])
                @endforeach
            </div>

            <div class="case-grid" id="case-studies-grid-more"></div>

            @if($hasMore)
            <div class="show-more-wrap" id="case-studies-show-more-wrap">
                <button type="button" class="show-more-btn" id="case-studies-show-more-btn" data-page="{{ $nextPage }}">SHOW MORE</button>
            </div>
            @endif
        </section>
    </div>
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
        const filterButtons = document.querySelectorAll(".filter-btn");
        function applyFilter() {
            const cards = document.querySelectorAll(".case-card");
            const activeBtn = document.querySelector(".filter-btn.active");
            const filter = activeBtn ? activeBtn.getAttribute("data-filter") : "all";
            cards.forEach((card) => {
                if (filter === "all" || card.getAttribute("data-category") === filter) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        }
        filterButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                filterButtons.forEach((b) => b.classList.remove("active"));
                btn.classList.add("active");
                applyFilter();
            });
        });

        (function() {
            var showMoreBtn = document.getElementById("case-studies-show-more-btn");
            if (!showMoreBtn) return;
            showMoreBtn.addEventListener("click", function() {
                var page = showMoreBtn.getAttribute("data-page");
                if (!page) return;
                showMoreBtn.disabled = true;
                var url = "{{ url()->current() }}?page=" + page;
                fetch(url, { headers: { "X-Requested-With": "XMLHttpRequest", "Accept": "application/json" } })
                    .then(function(r) { return r.json(); })
                    .then(function(data) {
                        var container = document.getElementById("case-studies-grid-more");
                        if (container && data.html) container.insertAdjacentHTML("beforeend", data.html);
                        if (data.has_more && data.next_page) {
                            showMoreBtn.setAttribute("data-page", data.next_page);
                            showMoreBtn.disabled = false;
                        } else {
                            var wrap = document.getElementById("case-studies-show-more-wrap");
                            if (wrap) wrap.style.display = "none";
                        }
                        applyFilter();
                    })
                    .catch(function() { showMoreBtn.disabled = false; });
            });
        })();
    </script>
@endsection
