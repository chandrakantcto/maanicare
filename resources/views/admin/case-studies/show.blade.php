@extends('layouts.admin')

@section('page-title')
    Case Study: {{ $case_study->title }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">{{ $case_study->title }}</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.case-studies.edit', $case_study) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="ri-pencil-line"></i> Edit
                                </a>
                                <a href="{{ route('admin.case-studies.index') }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="ri-arrow-left-line"></i> Back to List
                                </a>
                            </div>
                        </div>

                        @if($case_study->hero_image)
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $case_study->hero_image) }}" alt="{{ $case_study->title }}" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
                            </div>
                        @endif

                        <dl class="row mb-0">
                            <dt class="col-sm-3">Slug</dt>
                            <dd class="col-sm-9">{{ $case_study->slug }}</dd>

                            <dt class="col-sm-3">Service Category</dt>
                            <dd class="col-sm-9">{{ $case_study->category?->name ?? '—' }}</dd>

                            <dt class="col-sm-3">Subtitle</dt>
                            <dd class="col-sm-9">{{ $case_study->subtitle ?? '—' }}</dd>

                            <dt class="col-sm-3">Short Description</dt>
                            <dd class="col-sm-9">{{ $case_study->short_description ?: '—' }}</dd>

                            <dt class="col-sm-3">Status</dt>
                            <dd class="col-sm-9">
                                @if($case_study->is_published)
                                    <span class="badge bg-success-subtle text-success">Published</span>
                                    @if($case_study->published_at)
                                        ({{ $case_study->published_at->format('M d, Y H:i') }})
                                    @endif
                                @else
                                    <span class="badge bg-secondary-subtle text-secondary">Draft</span>
                                @endif
                                @if($case_study->is_featured)
                                    <span class="badge bg-warning-subtle text-warning ms-1">Featured</span>
                                @endif
                            </dd>

                            <dt class="col-sm-3">Client / Project / Location</dt>
                            <dd class="col-sm-9">{{ $case_study->client_name ?: '—' }} / {{ $case_study->project_name ?: '—' }} / {{ $case_study->project_location ?: '—' }}</dd>
                        </dl>

                        @if($case_study->vision_heading || $case_study->vision_intro_paragraph || ($case_study->vision_bullets && count($case_study->vision_bullets)))
                            <hr class="my-4">
                            <h6>Vision Section</h6>
                            @if($case_study->vision_heading)
                                <h6 class="text-muted">{{ $case_study->vision_heading }}</h6>
                            @endif
                            @if($case_study->vision_intro_paragraph)
                                <p>{!! nl2br(e($case_study->vision_intro_paragraph)) !!}</p>
                            @endif
                            @if($case_study->vision_bullets && count($case_study->vision_bullets))
                                <ul>
                                    @foreach($case_study->vision_bullets as $b)
                                        <li>{{ $b }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            @if($case_study->vision_transition_text)
                                <p>{!! nl2br(e($case_study->vision_transition_text)) !!}</p>
                            @endif
                            @if($case_study->vision_closing_line)
                                <p class="fw-semibold">{{ $case_study->vision_closing_line }}</p>
                            @endif
                        @endif

                        @if($case_study->sections->count() > 0)
                            <hr class="my-4">
                            <h6>Dynamic Sections</h6>
                            @foreach($case_study->sections as $section)
                                @if($section->is_visible)
                                    <div class="mb-4">
                                        @if($section->show_title && $section->title)
                                            <h6>{{ $section->title }}</h6>
                                        @endif
                                        <div class="case-study-section-content">{!! $section->content !!}</div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                        @if($case_study->meta_title || $case_study->meta_description)
                            <hr class="my-4">
                            <h6>SEO</h6>
                            <dl class="row mb-0">
                                @if($case_study->meta_title)
                                    <dt class="col-sm-3">Meta Title</dt>
                                    <dd class="col-sm-9">{{ $case_study->meta_title }}</dd>
                                @endif
                                @if($case_study->meta_description)
                                    <dt class="col-sm-3">Meta Description</dt>
                                    <dd class="col-sm-9">{{ $case_study->meta_description }}</dd>
                                @endif
                            </dl>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
