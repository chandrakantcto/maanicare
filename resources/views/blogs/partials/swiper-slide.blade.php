@props(['blog'])
@php
    $defaultImg = asset('storage/assets/web/img/Rectangle 1592.jpg');
    $imgUrl = $blog->featured_image ? asset('storage/' . $blog->featured_image) : ($blog->thumbnail ? asset('storage/' . $blog->thumbnail) : $defaultImg);
@endphp
<div class="swiper-slide">
    <div class="insight-card">
        <div class="insight-img">
            <img src="{{ $imgUrl }}" alt="{{ $blog->title }}" onerror="this.onerror=null; this.src='{{ $defaultImg }}';" />
        </div>
        <p>{{ Str::limit($blog->excerpt ?? strip_tags($blog->content), 100) }}</p>
        <a href="{{ route('blog.show', $blog->slug) }}" class="read-link">Read the blog <span>↗</span></a>
    </div>
</div>
