@props(['caseStudy'])
@php
    $defaultImg = asset('storage/assets/web/img/Rectangle 1592.jpg');
    $imgUrl = $caseStudy->hero_image ? asset('storage/' . $caseStudy->hero_image) : $defaultImg;
@endphp
<div class="swiper-slide">
    <div class="insight-card">
        <div class="insight-img">
            <img src="{{ $imgUrl }}" alt="{{ $caseStudy->title }}" onerror="this.onerror=null; this.src='{{ $defaultImg }}';" />
        </div>
        <p>{{ Str::limit($caseStudy->short_description, 100) }}</p>
        <a href="{{ route('case-studies.show', $caseStudy->slug) }}" class="read-link">Read the case study <span>↗</span></a>
    </div>
</div>
