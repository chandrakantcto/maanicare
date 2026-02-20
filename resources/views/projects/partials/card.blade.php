@props(['project'])
@php
    $imgUrl = $project->hero_image ? asset('storage/' . $project->hero_image) : asset('storage/assets/web/img/Rectangle 1656.png');
    $sector = $project->sector ?: ($project->category?->name ?? '');
    $area = $project->area_display ?: ($project->area_sqft ? number_format($project->area_sqft) . ' Sq. Ft.' : '');
@endphp
<div>
<div class="card" data-project-id="{{ $project->id }}">
    <div class="thumb">
        <img src="{{ $imgUrl }}" alt="{{ $project->title }}" />
    </div>

    <div class="cta-overlay">
        <div class="cta-box">
            <div>
                <p>FROM BLUEPRINT TO BUILT.<br />DONE RIGHT.</p>
                <h2>Like what you see?</h2>
                <button type="button" class="cta-btn project-detail-btn">Plan your project today</button>
                <a href="{{ route('contact-us') }}" class="cta-link">Get in touch</a>
                <span><img src="{{ asset('storage/assets/web/img/Group 10.png') }}" alt="Building" /></span>
            </div>
        </div>
    </div>

    
</div>
<div class="meta">
        <div class="title-row">
            <div class="project-title">{{ $project->title }}</div>
            <div class="arrow">↗</div>
        </div>
        <div class="small">
            {{ $sector }}{{ $area ? ' ' . $area : '' }}
        </div>
    </div>
    </div>