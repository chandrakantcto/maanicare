@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <section class="blog-detail">
        <div class="blog-grid">
            <!-- IMAGE COLUMN -->
            <div class="blog-image">
                @php
                    $defaultImg = asset('storage/assets/web/img/Rectangle-1646.jpg');
                    $heroImg = $blog->featured_image ? asset('storage/' . $blog->featured_image) : ($blog->thumbnail ? asset('storage/' . $blog->thumbnail) : $defaultImg);
                @endphp
                <img src="{{ $heroImg }}" alt="{{ $blog->title }}" onerror="this.onerror=null; this.src='{{ $defaultImg }}';" />
            </div>

            <!-- CONTENT COLUMN -->
            <div class="blogdetails">
                <div class="blog-meta">
                    <span>{{ $blog->reading_time_minutes ?? max(1, (int)(str_word_count(strip_tags($blog->content)) / 150)) }} MIN READ</span>
                    <span><img src="{{ asset('storage/assets/web/img/ios_share.svg') }}" />SHARE</span>
                </div>

                @if($blog->category)
                    <div class="blog-subtitle">{{ strtoupper($blog->category->name) }}</div>
                @endif

                <h1 class="blog-title">{{ $blog->title }}</h1>

                <div class="blog-content">
                    @if($blog->excerpt)
                        {!! nl2br(e($blog->excerpt)) !!}
                    @else
                        <p>{{ Str::limit(strip_tags($blog->content), 300) }}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="blog-full">
        {!! $blog->content !!}
    </section>
</div>

<div class="container-fluid">
    <section class="consult-section">
        <div class="consult-container">
            <!-- Left -->
            <div class="consult-left">
                <h1>Inspired by What You Saw?</h1>
                <p>
                    Tell us a little about your requirements, and we’ll help you explore what’s possible for
                    your space or operations.
                </p>

                <div class="consult-icons">
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-regular fa-envelope"></i></a>
                    <a href="#"><i class="fa-solid fa-phone"></i></a>
                </div>
            </div>

            <!-- Right -->
            @include('inclides.request-consultation-form')
        </div>
    </section>
</div>

<!-- Swiper CSS -->

@if($otherBlogs->isNotEmpty())
<section class="insights-section">
    <div class="container-fluid">
        <h2 class="insights-title">MORE FROM THE PAPER</h2>

        <div class="swiper insights-swiper">
            <div class="swiper-wrapper">
                @foreach($otherBlogs as $other)
                    @include('blogs.partials.swiper-slide', ['blog' => $other])
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
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