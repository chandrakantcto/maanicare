@extends('layouts.admin')

@section('page-title')
    Create Project
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Create Project</h5>
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="ri-arrow-left-line"></i> Back to List
                            </a>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" id="project-form">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title" value="{{ old('title') }}" required>
                                        <small class="text-muted">Slug is generated automatically from the title.</small>
                                        @error('title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                            <option value="0">— None —</option>
                                            @foreach($categories as $c)
                                                <option value="{{ $c->id }}" {{ old('category_id') == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="Projectstatus" class="form-label">Status <span class="text-danger">*</span></label>
                                        <select class="form-select @error('status') is-invalid @enderror" id="Projectstatus" name="status" required>
                                            <option value="Active" {{ old('status', 'Active') == 'Active' ? 'selected' : '' }}>Active</option>
                                            <option value="InActive" {{ old('status') == 'InActive' ? 'selected' : '' }}>InActive</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                    id="description" name="description" rows="4">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="sector" class="form-label">Sector</label>
                                        <input type="text" class="form-control @error('sector') is-invalid @enderror"
                                            id="sector" name="sector" value="{{ old('sector') }}">
                                        @error('sector')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" class="form-control @error('location') is-invalid @enderror"
                                            id="location" name="location" value="{{ old('location') }}">
                                        @error('location')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="area_sqft" class="form-label">Area (Sq. Ft.)</label>
                                        <input type="number" class="form-control @error('area_sqft') is-invalid @enderror"
                                            id="area_sqft" name="area_sqft" value="{{ old('area_sqft') }}" min="0" step="1">
                                        @error('area_sqft')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label for="area_display" class="form-label">Area Display</label>
                                        <input type="text" class="form-control @error('area_display') is-invalid @enderror"
                                            id="area_display" name="area_display" value="{{ old('area_display') }}" placeholder="e.g. 25,000 Sq. Ft.">
                                        @error('area_display')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="special_features" class="form-label">Special Features</label>
                                        <textarea class="form-control @error('special_features') is-invalid @enderror"
                                            id="special_features" name="special_features" rows="3">{{ old('special_features') }}</textarea>
                                        @error('special_features')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="key_highlights" class="form-label">Key Highlights</label>
                                        <textarea class="form-control @error('key_highlights') is-invalid @enderror"
                                            id="key_highlights" name="key_highlights" rows="3">{{ old('key_highlights') }}</textarea>
                                        @error('key_highlights')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="services" class="form-label">Services</label>
                                <textarea class="form-control @error('services') is-invalid @enderror"
                                    id="services" name="services" rows="3" placeholder="One service per line (e.g. Fit-Out Only, MEP Design)">{{ old('services') }}</textarea>
                                <small class="text-muted">Enter one service per line. Stored as a list.</small>
                                @error('services')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="hero_image" class="form-label">Hero Image</label>
                                        <input type="file" class="form-control @error('hero_image') is-invalid @enderror"
                                            id="hero_image" name="hero_image" accept="image/*">
                                        <small class="text-muted">Max 2MB. Optional.</small>
                                        @error('hero_image')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="sort_order" class="form-label">Sort Order</label>
                                        <input type="number" class="form-control @error('sort_order') is-invalid @enderror"
                                            id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" min="0">
                                        @error('sort_order')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex align-items-end pb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_featured">Featured</label>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">
                            <h6 class="mb-3">Gallery Images</h6>
                            <p class="text-muted small">Add one or more images. Optional caption, sort order, and hero flag per image.</p>
                            <div id="images-container"></div>
                            <button type="button" class="btn btn-outline-secondary btn-sm mb-3" id="add-image-btn">
                                <i class="ri-add-line"></i> Add Image
                            </button>

                            <div class="d-flex gap-2 mt-3">
                                <button type="submit" class="btn btn-primary">Create Project</button>
                                <a href="{{ route('admin.projects.index') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <template id="image-row-template">
        <div class="image-row card mb-2" data-index="">
            <div class="card-body py-2">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <input type="file" class="form-control form-control-sm" name="images[__INDEX__][image]" accept="image/*">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control form-control-sm" name="images[__INDEX__][caption]" placeholder="Caption">
                    </div>
                    <div class="col-md-1">
                        <input type="number" class="form-control form-control-sm" name="images[__INDEX__][sort_order]" value="0" min="0">
                    </div>
                    <div class="col-md-2">
                        <select class="form-select form-select-sm" name="images[__INDEX__][status]">
                            <option value="Active">Active</option>
                            <option value="InActive">InActive</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="images[__INDEX__][is_hero]" value="1">
                            <label class="form-check-label small">Hero</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-sm btn-outline-danger remove-image-btn"><i class="ri-close-line"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </template>
@endsection

@section('scripts')
    <script>
    (function() {
        var container = document.getElementById('images-container');
        var template = document.getElementById('image-row-template');
        var index = 0;

        function addImageRow() {
            var html = template.innerHTML.replace(/__INDEX__/g, index);
            var wrap = document.createElement('div');
            wrap.innerHTML = html.trim();
            var row = wrap.firstChild;
            row.setAttribute('data-index', index);
            container.appendChild(row);
            index++;
        }

        document.getElementById('add-image-btn').addEventListener('click', addImageRow);

        container.addEventListener('click', function(e) {
            if (e.target.closest('.remove-image-btn')) {
                e.target.closest('.image-row').remove();
            }
        });
    })();
    </script>
@endsection
