@props(['blog'])
@php
    $defaultImg = asset('storage/assets/web/img/Mask group1.jpg');
    $imgUrl = $blog->featured_image ? asset('storage/' . $blog->featured_image) : ($blog->thumbnail ? asset('storage/' . $blog->thumbnail) : $defaultImg);
@endphp
<div class="col-lg-4 col-md-6">
    <div class="blog-card">
        <div class="blog-image">
            <img src="{{ $imgUrl }}" alt="{{ $blog->title }}" onerror="this.onerror=null; this.src='{{ $defaultImg }}';" />
        </div>

        <div class="blog-tags">
            <span class="tag blog">Blog</span>
            @if($blog->category)
                <span class="tag payroll">{{ $blog->category->name }}</span>
            @endif
            @if($blog->tags && is_array($blog->tags))
                @foreach(array_slice($blog->tags, 0, 2) as $tag)
                    <span class="tag">{{ is_string($tag) ? $tag : ($tag['name'] ?? '') }}</span>
                @endforeach
            @endif
        </div>

        <div class="blog-text">
            {{ Str::limit($blog->excerpt ?? strip_tags($blog->content), 120) }}
        </div>

        <a href="{{ route('blog.show', $blog->slug) }}" class="read-more">Read More →</a>
    </div>
</div>
