@if($featuredCaseStudies->isNotEmpty())
<section class="insights-section {{ $sectionClass ?? '' }}">
    <div class="container-fluid">
        <h2 class="insights-title">INSIGHTS THAT BUILD TRUST</h2>
        <div class="swiper insights-swiper">
            <div class="swiper-wrapper">
                @foreach($featuredCaseStudies as $caseStudy)
                    @include('case-studies.partials.swiper-slide', ['caseStudy' => $caseStudy])
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
