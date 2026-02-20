@props(['caseStudy'])
@php
    $slugToFilter = [
        'project-fit-out-services' => 'all',
        'staffing-payroll-compliance-services' => 'payroll',
        'integrated-facility-management-services' => 'facility',
        'on-demand-services' => 'ondemand',
    ];
    $filterKey = $caseStudy->category ? ($slugToFilter[$caseStudy->category->slug] ?? 'all') : 'all';
    $imgUrl = $caseStudy->hero_image ? asset('storage/' . $caseStudy->hero_image) : asset('storage/assets/web/img/Rectangle 1592.jpg');
@endphp
<div class="case-card" data-category="{{ $filterKey }}">
    <div class="case-img">
        <img src="{{ $imgUrl }}" alt="{{ $caseStudy->title }}" />
    </div>
    <p>{{ Str::limit($caseStudy->short_description, 120) }}</p>
    <a href="{{ route('case-studies.show', $caseStudy->slug) }}" class="case-link">Read the case study <span>↗</span></a>
</div>
