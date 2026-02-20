@extends('layouts.admin')

@section('page-title')
    Edit Blog
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Edit Blog</h5>
                            <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="ri-arrow-left-line"></i> Back to List
                            </a>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title" value="{{ old('title', $blog->title) }}" required>
                                        <small class="text-muted">Slug is generated from the title. Current: <strong>{{ $blog->slug }}</strong></small>
                                        @error('title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                            <option value="0" {{ old('category_id', $blog->category_id) == 0 ? 'selected' : '' }}>— None —</option>
                                            @foreach($categories as $c)
                                                <option value="{{ $c->id }}" {{ old('category_id', $blog->category_id) == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="author_id" class="form-label">Author</label>
                                        <select class="form-select @error('author_id') is-invalid @enderror" id="author_id" name="author_id">
                                            <option value="0" {{ old('author_id', $blog->author_id) == 0 ? 'selected' : '' }}>— Current user —</option>
                                            @foreach($authors as $a)
                                                <option value="{{ $a->id }}" {{ old('author_id', $blog->author_id) == $a->id ? 'selected' : '' }}>{{ $a->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('author_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="excerpt" class="form-label">Excerpt</label>
                                <textarea class="form-control @error('excerpt') is-invalid @enderror"
                                    id="excerpt" name="excerpt" rows="2">{{ old('excerpt', $blog->excerpt) }}</textarea>
                                @error('excerpt')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                                <x-rich-editor
                                    name="content"
                                    id="content"
                                    :value="old('content', $blog->content)"
                                    placeholder="Write your post here… You can paste or upload images anywhere in the content."
                                    :height="420"
                                    :required="true"
                                    :error="$errors->first('content')"
                                />
                                <small class="text-muted">Use the toolbar to format text and insert images anywhere. Images: paste or use the image button.</small>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="thumbnail" class="form-label">Thumbnail</label>
                                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                                            id="thumbnail" name="thumbnail" accept="image/*">
                                        @if($blog->thumbnail)
                                            <small class="text-muted">Current: <a href="{{ asset('storage/' . $blog->thumbnail) }}" target="_blank">View</a></small>
                                        @endif
                                        @error('thumbnail')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="featured_image" class="form-label">Featured Image</label>
                                        <input type="file" class="form-control @error('featured_image') is-invalid @enderror"
                                            id="featured_image" name="featured_image" accept="image/*">
                                        @if($blog->featured_image)
                                            <small class="text-muted">Current: <a href="{{ asset('storage/' . $blog->featured_image) }}" target="_blank">View</a></small>
                                        @endif
                                        @error('featured_image')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="published_at" class="form-label">Published At</label>
                                        <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror"
                                            id="published_at" name="published_at" value="{{ old('published_at', $blog->published_at?->format('Y-m-d\TH:i')) }}">
                                        @error('published_at')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="featured" class="form-label">Featured</label>
                                        <select class="form-select @error('featured') is-invalid @enderror" id="featured" name="featured">
                                            <option value="0" {{ old('featured', $blog->featured) == 0 ? 'selected' : '' }}>No</option>
                                            <option value="1" {{ old('featured', $blog->featured) == 1 ? 'selected' : '' }}>Yes</option>
                                        </select>
                                        @error('featured')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="reading_time_minutes" class="form-label">Reading Time (minutes)</label>
                                        <input type="number" class="form-control @error('reading_time_minutes') is-invalid @enderror"
                                            id="reading_time_minutes" name="reading_time_minutes" value="{{ old('reading_time_minutes', $blog->reading_time_minutes) }}" min="0">
                                        @error('reading_time_minutes')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="tags" class="form-label">Tags</label>
                                <input type="text" class="form-control @error('tags') is-invalid @enderror"
                                    id="tags" name="tags" value="{{ old('tags', $blog->tags ? implode(', ', $blog->tags) : '') }}" placeholder="Comma-separated">
                                @error('tags')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="meta_title" class="form-label">Meta Title</label>
                                        <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                            id="meta_title" name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}">
                                        @error('meta_title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                        <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror"
                                            id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords', $blog->meta_keywords) }}">
                                        @error('meta_keywords')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea class="form-control @error('meta_description') is-invalid @enderror"
                                            id="meta_description" name="meta_description" rows="2">{{ old('meta_description', $blog->meta_description) }}</textarea>
                                        @error('meta_description')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="canonical_url" class="form-label">Canonical URL</label>
                                        <input type="url" class="form-control @error('canonical_url') is-invalid @enderror"
                                            id="canonical_url" name="canonical_url" value="{{ old('canonical_url', $blog->canonical_url) }}">
                                        @error('canonical_url')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="Blogstatus" class="form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-select @error('status') is-invalid @enderror" id="Blogstatus" name="status" required>
                                    <option value="Active" {{ old('status', $blog->status) == 'Active' ? 'selected' : '' }}>Active</option>
                                    <option value="InActive" {{ old('status', $blog->status) == 'InActive' ? 'selected' : '' }}>InActive</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Update Blog</button>
                                <a href="{{ route('admin.blogs.index') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <x-editor-scripts />
@endsection
