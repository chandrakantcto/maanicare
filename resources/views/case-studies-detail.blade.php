@extends('layouts.app')

@section('meta')
    @php
        $shareUrl = route('case-studies.show', $caseStudy->slug);
        $shareImage = $caseStudy->hero_image ? asset('storage/' . $caseStudy->hero_image) : asset('storage/assets/web/img/Rectangle-1646.jpg');
        $shareDesc = $caseStudy->short_description ? Str::limit(strip_tags($caseStudy->short_description), 160) : $caseStudy->title;
    @endphp
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ $shareUrl }}">
    <meta property="og:title" content="{{ $caseStudy->title }}">
    <meta property="og:description" content="{{ $shareDesc }}">
    <meta property="og:image" content="{{ $shareImage }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $caseStudy->title }}">
    <meta name="twitter:description" content="{{ $shareDesc }}">
    <meta name="twitter:image" content="{{ $shareImage }}">  
@endsection

@section('content')
    <div class="container-fluid">
        <section class="blog-detail">
            <div class="blog-grid">
                <div class="blog-image">
                    @php
                        $heroImg = $caseStudy->hero_image ? asset('storage/' . $caseStudy->hero_image) : asset('storage/assets/web/img/Rectangle-1646.jpg');
                    @endphp
                    <img src="{{ $heroImg }}" alt="{{ $caseStudy->title }}" />
                </div>
                <div class="blogdetails">
                    <div class="blog-meta">
                        <span>{{ $caseStudy->published_at ? $caseStudy->published_at->diffForHumans() : '—' }}</span>
                        @include('partials.share-dropdown', [
                            'shareTitle' => $caseStudy->title,
                            'shareUrl' => route('case-studies.show', $caseStudy->slug),
                            'shareImage' => $heroImg ?? '',
                        ])
                    </div>
                    @if($caseStudy->subtitle)
                        <div class="blog-subtitle">{{ $caseStudy->subtitle }}</div>
                    @endif
                    <h1 class="blog-title">{{ $caseStudy->title }}</h1>
                    <div class="blog-content">
                        @if($caseStudy->short_description)
                            {!! nl2br(e($caseStudy->short_description)) !!}
                        @endif
                    </div>
                </div>
            </div>
        </section>

        @if($caseStudy->vision_heading || $caseStudy->vision_intro_paragraph || ($caseStudy->vision_bullets && count($caseStudy->vision_bullets)) || $caseStudy->vision_transition_text || $caseStudy->vision_closing_line)
        <section class="blog-full casestudy">
            @if($caseStudy->vision_heading)
                <h1 class="case-main-title">{{ $caseStudy->vision_heading }}</h1>
            @endif
            <div class="case-intro">
                @if($caseStudy->vision_intro_paragraph)
                    <p>{!! nl2br(e($caseStudy->vision_intro_paragraph)) !!}</p>
                @endif
                @if($caseStudy->vision_bullets && count($caseStudy->vision_bullets))
                    <ul>
                        @foreach($caseStudy->vision_bullets as $bullet)
                            <li>{{ $bullet }}</li>
                        @endforeach
                    </ul>
                @endif
                @if($caseStudy->vision_transition_text)
                    <p>{!! nl2br(e($caseStudy->vision_transition_text)) !!}</p>
                @endif
                @if($caseStudy->vision_closing_line)
                    <p><em>{{ $caseStudy->vision_closing_line }}</em></p>
                @endif
            </div>
            <div class="divider"></div>
        </section>
        @endif

        @foreach($caseStudy->sections as $section)
        <section class="blog-full casestudy">
            <section class="case-detail-section">
                @if($section->show_title && $section->title)
                    <h2 class="case-sub-title">{{ $section->title }}</h2>
                @endif
                @if($section->content)
                    <div class="case-intro">
                        <div class="case-block">
                            {!! $section->content !!}
                        </div>
                    </div>
                @endif
                <div class="divider"></div>
            </section>
        </section>
        @endforeach

        @if($caseStudy->client_name || $caseStudy->project_name || $caseStudy->project_location)
        <section class="vantara-section">
            <div class="container summary-grid">
                <div class="summary-title">
                    <h2>Executive Summary</h2>
                </div>
                <div class="summary-content">
                    @if($caseStudy->project_name)
                    <div class="summary-row">
                        <div class="icon"><img src="{{ asset('storage/assets/web/img/assignment_turned_in.svg') }}" alt=""></div>
                        <div>
                            <h5>Project</h5>
                            <p>{{ $caseStudy->project_name }}</p>
                        </div>
                    </div>
                    @endif
                    @if($caseStudy->client_name)
                    <div class="summary-row">
                        <div class="icon"><img src="{{ asset('storage/assets/web/img/diversity_2.svg') }}" alt=""></div>
                        <div>
                            <h5>Client</h5>
                            <p>{{ $caseStudy->client_name }}</p>
                        </div>
                    </div>
                    @endif
                    @if($caseStudy->project_location)
                    <div class="summary-row no-border">
                        <div class="icon"><img src="{{ asset('storage/assets/web/img/expand_content.svg') }}" alt=""></div>
                        <div>
                            <h5>Location</h5>
                            <p>{{ $caseStudy->project_location }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>
        <div class="divider"></div>
        @endif
    </div>

    <div class="container-fluid">
        <section class="consult-section">
            <div class="consult-container">
                <!-- Left -->
                <div class="consult-left">
                    <h1>Inspired by<br />What You Saw?</h1>
                    <p>
                        Tell us a little about your requirements, and we'll help you explore what's possible for
                        your space or operations.
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
