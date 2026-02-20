@extends('layouts.admin')

@section('page-title')
    View Blog
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Blog Details</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="ri-edit-box-line"></i> Edit
                                </a>
                                <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="ri-arrow-left-line"></i> Back to List
                                </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th width="180">ID</th>
                                <td>{{ $blog->id }}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $blog->title }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $blog->slug }}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $blog->category?->name ?? '—' }}</td>
                            </tr>
                            <tr>
                                <th>Author</th>
                                <td>{{ $blog->author?->name ?? '—' }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <span class="badge bg-{{ $blog->status == 'Active' ? 'success' : 'secondary' }}-subtle text-{{ $blog->status == 'Active' ? 'success' : 'secondary' }}">
                                        {{ $blog->status }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Featured</th>
                                <td>{{ $blog->featured ? 'Yes' : 'No' }}</td>
                            </tr>
                            <tr>
                                <th>Published At</th>
                                <td>{{ $blog->published_at?->format('M d, Y H:i') ?? '—' }}</td>
                            </tr>
                            <tr>
                                <th>Reading Time</th>
                                <td>{{ $blog->reading_time_minutes ? $blog->reading_time_minutes . ' min' : '—' }}</td>
                            </tr>
                            <tr>
                                <th>Views</th>
                                <td>{{ number_format($blog->views_count) }}</td>
                            </tr>
                            <tr>
                                <th>Excerpt</th>
                                <td>{{ $blog->excerpt ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Content</th>
                                <td><div class="border p-3 bg-light rounded" style="max-height: 300px; overflow-y: auto;">{!! $blog->content !!}</div></td>
                            </tr>
                            <tr>
                                <th>Thumbnail</th>
                                <td>
                                    @if($blog->thumbnail)
                                        <a href="{{ asset('storage/' . $blog->thumbnail) }}" target="_blank">View image</a>
                                    @else
                                        —
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Featured Image</th>
                                <td>
                                    @if($blog->featured_image)
                                        <a href="{{ asset('storage/' . $blog->featured_image) }}" target="_blank">View image</a>
                                    @else
                                        —
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Tags</th>
                                <td>{{ $blog->tags ? implode(', ', $blog->tags) : '—' }}</td>
                            </tr>
                            <tr>
                                <th>Meta Title</th>
                                <td>{{ $blog->meta_title ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Meta Description</th>
                                <td>{{ $blog->meta_description ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Meta Keywords</th>
                                <td>{{ $blog->meta_keywords ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Canonical URL</th>
                                <td>{{ $blog->canonical_url ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $blog->created_at?->format('M d, Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $blog->updated_at?->format('M d, Y H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
