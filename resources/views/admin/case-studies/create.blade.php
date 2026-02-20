@extends('layouts.admin')

@section('page-title')
    Create Case Study
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Create Case Study</h5>
                            <a href="{{ route('admin.case-studies.index') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="ri-arrow-left-line"></i> Back to List
                            </a>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('admin.case-studies.store') }}" method="POST" enctype="multipart/form-data" id="case-study-form">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title" value="{{ old('title') }}" required>
                                        <small class="text-muted">Slug is generated automatically from the title and kept unique.</small>
                                        @error('title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Service Category</label>
                                        <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                            <option value="0">Select a Category</option>
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
                                        <label for="subtitle" class="form-label">Subtitle</label>
                                        <input type="text" class="form-control @error('subtitle') is-invalid @enderror"
                                            id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
                                        @error('subtitle')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="hero_image" class="form-label">Hero Image</label>
                                <input type="file" class="form-control @error('hero_image') is-invalid @enderror"
                                    id="hero_image" name="hero_image" accept="image/*">
                                @error('hero_image')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="short_description" class="form-label">Short Description</label>
                                <textarea class="form-control @error('short_description') is-invalid @enderror"
                                    id="short_description" name="short_description" rows="3">{{ old('short_description') }}</textarea>
                                @error('short_description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <hr class="my-4">
                            <h6 class="mb-3">Vision Section</h6>
                            <div class="mb-3">
                                <label for="vision_heading" class="form-label">Vision Heading</label>
                                <input type="text" class="form-control @error('vision_heading') is-invalid @enderror"
                                    id="vision_heading" name="vision_heading" value="{{ old('vision_heading') }}">
                                @error('vision_heading')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="vision_intro_paragraph" class="form-label">Vision Intro Paragraph</label>
                                <textarea class="form-control @error('vision_intro_paragraph') is-invalid @enderror"
                                    id="vision_intro_paragraph" name="vision_intro_paragraph" rows="4">{{ old('vision_intro_paragraph') }}</textarea>
                                @error('vision_intro_paragraph')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Vision Bullets</label>
                                <div id="vision-bullets-list">
                                    @foreach(old('vision_bullets', []) as $bullet)
                                        <div class="input-group mb-2 vision-bullet-row">
                                            <input type="text" class="form-control" name="vision_bullets[]" value="{{ $bullet }}">
                                            <button type="button" class="btn btn-outline-danger vision-bullet-remove" title="Remove"><i class="ri-close-line"></i></button>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="button" class="btn btn-outline-secondary btn-sm mt-1" id="add-vision-bullet"><i class="ri-add-line"></i> Add bullet</button>
                            </div>
                            <div class="mb-3">
                                <label for="vision_transition_text" class="form-label">Vision Transition Text</label>
                                <textarea class="form-control @error('vision_transition_text') is-invalid @enderror"
                                    id="vision_transition_text" name="vision_transition_text" rows="3">{{ old('vision_transition_text') }}</textarea>
                                @error('vision_transition_text')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="vision_closing_line" class="form-label">Vision Closing Line</label>
                                <input type="text" class="form-control @error('vision_closing_line') is-invalid @enderror"
                                    id="vision_closing_line" name="vision_closing_line" value="{{ old('vision_closing_line') }}">
                                @error('vision_closing_line')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <hr class="my-4">
                            <h6 class="mb-3">Project Details</h6>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="client_name" class="form-label">Client Name</label>
                                        <input type="text" class="form-control @error('client_name') is-invalid @enderror"
                                            id="client_name" name="client_name" value="{{ old('client_name') }}">
                                        @error('client_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="project_name" class="form-label">Project Name</label>
                                        <input type="text" class="form-control @error('project_name') is-invalid @enderror"
                                            id="project_name" name="project_name" value="{{ old('project_name') }}">
                                        @error('project_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="project_location" class="form-label">Project Location</label>
                                        <input type="text" class="form-control @error('project_location') is-invalid @enderror"
                                            id="project_location" name="project_location" value="{{ old('project_location') }}">
                                        @error('project_location')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">
                            <h6 class="mb-3">Dynamic Sections</h6>
                            <p class="text-muted small">Add sections with title and rich content. You can reorder by dragging, and remove or clone sections.</p>
                            <div id="sections-container" class="mb-3"></div>
                            <button type="button" class="btn btn-outline-primary" id="add-section-btn"><i class="ri-add-circle-line"></i> Add New Section</button>

                            <hr class="my-4">
                            <h6 class="mb-3">SEO</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="meta_title" class="form-label">Meta Title</label>
                                        <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                            id="meta_title" name="meta_title" value="{{ old('meta_title') }}">
                                        @error('meta_title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea class="form-control @error('meta_description') is-invalid @enderror"
                                            id="meta_description" name="meta_description" rows="2">{{ old('meta_description') }}</textarea>
                                        @error('meta_description')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">
                            <h6 class="mb-3">Publish & Featured</h6>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_published">Published</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_featured">Featured</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="published_at" class="form-label">Published At</label>
                                        <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror"
                                            id="published_at" name="published_at" value="{{ old('published_at') }}">
                                        @error('published_at')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-2 mt-3">
                                <button type="submit" class="btn btn-primary">Create Case Study</button>
                                <a href="{{ route('admin.case-studies.index') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Template for one section row (hidden). Cloned and filled by JS. --}}
    <template id="section-row-template">
        <div class="section-row card mb-3" data-section-index="">
            <div class="card-header d-flex align-items-center py-2">
                <span class="section-handle me-2 cursor-grab text-muted" title="Drag to reorder"><i class="ri-draggable"></i></span>
                <strong class="section-title-label">Section</strong>
                <div class="ms-auto">
                    <button type="button" class="btn btn-sm btn-outline-secondary section-clone-btn" title="Clone section"><i class="ri-file-copy-line"></i></button>
                    <button type="button" class="btn btn-sm btn-outline-danger section-remove-btn" title="Remove section"><i class="ri-delete-bin-line"></i></button>
                </div>
            </div>
            <div class="card-body">
                <input type="hidden" class="section-id" name="sections[__INDEX__][id]" value="">
                <input type="hidden" class="section-order" name="sections[__INDEX__][order]" value="0">
                <div class="mb-3">
                    <label class="form-label">Section Title</label>
                    <input type="text" class="form-control section-title" name="sections[__INDEX__][title]" value="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Content</label>
                    <textarea class="form-control section-content rich-editor" name="sections[__INDEX__][content]" id="section_content___INDEX__" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="form-check">
                            <input class="form-check-input section-show-title" type="checkbox" name="sections[__INDEX__][show_title]" value="1" checked>
                            <label class="form-check-label">Show Title</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-check">
                            <input class="form-check-input section-is-visible" type="checkbox" name="sections[__INDEX__][is_visible]" value="1" checked>
                            <label class="form-check-label">Visible</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>
    <x-editor-scripts />
    <script>
    (function() {
        var sectionIndex = 0;
        var container = document.getElementById('sections-container');
        var template = document.getElementById('section-row-template');
        var form = document.getElementById('case-study-form');

        function nextIndex() { return sectionIndex++; }

        function addSection(data) {
            data = data || {};
            var idx = nextIndex();
            var html = template.innerHTML
                .replace(/__INDEX__/g, idx);
            var wrap = document.createElement('div');
            wrap.innerHTML = html.trim();
            var row = wrap.firstChild;
            row.setAttribute('data-section-index', idx);
            if (data.title !== undefined) row.querySelector('.section-title').value = data.title;
            if (data.content !== undefined) row.querySelector('.section-content').value = data.content;
            if (data.show_title !== undefined) row.querySelector('.section-show-title').checked = !!data.show_title;
            if (data.is_visible !== undefined) row.querySelector('.section-is-visible').checked = !!data.is_visible;
            if (data.id) row.querySelector('.section-id').value = data.id;
            row.querySelector('.section-order').value = container.querySelectorAll('.section-row').length;
            var textarea = row.querySelector('.section-content');
            textarea.id = 'section_content_' + idx;
            container.appendChild(row);
            if (window.initSectionEditor) window.initSectionEditor(textarea.id);
            renumberSectionOrder();
            return row;
        }

        function renumberSectionOrder() {
            [].forEach.call(container.querySelectorAll('.section-row'), function(row, i) {
                row.querySelector('.section-order').value = i;
            });
        }

        function renumberSectionNames() {
            var rows = container.querySelectorAll('.section-row');
            rows.forEach(function(row, i) {
                row.querySelector('.section-id').name = 'sections[' + i + '][id]';
                row.querySelector('.section-order').name = 'sections[' + i + '][order]';
                row.querySelector('.section-order').value = i;
                row.querySelector('.section-title').name = 'sections[' + i + '][title]';
                var content = row.querySelector('.section-content');
                content.name = 'sections[' + i + '][content]';
                if (window.tinymce && tinymce.get(content.id)) {
                    tinymce.get(content.id).setContent(tinymce.get(content.id).getContent());
                }
                row.querySelector('.section-show-title').name = 'sections[' + i + '][show_title]';
                row.querySelector('.section-is-visible').name = 'sections[' + i + '][is_visible]';
            });
        }

        function getSectionData(row) {
            var contentEl = row.querySelector('.section-content');
            var html = (window.tinymce && contentEl && tinymce.get(contentEl.id)) ? tinymce.get(contentEl.id).getContent() : (contentEl ? contentEl.value : '');
            return {
                id: row.querySelector('.section-id').value || null,
                title: row.querySelector('.section-title').value,
                content: html,
                show_title: row.querySelector('.section-show-title').checked,
                is_visible: row.querySelector('.section-is-visible').checked
            };
        }

        document.getElementById('add-section-btn').addEventListener('click', function() {
            addSection({ show_title: true, is_visible: true });
        });

        container.addEventListener('click', function(e) {
            var removeBtn = e.target.closest('.section-remove-btn');
            var cloneBtn = e.target.closest('.section-clone-btn');
            if (removeBtn) {
                var row = removeBtn.closest('.section-row');
                var edId = row.querySelector('.section-content').id;
                if (window.tinymce && tinymce.get(edId)) tinymce.get(edId).remove();
                row.remove();
                renumberSectionOrder();
            } else if (cloneBtn) {
                var row = cloneBtn.closest('.section-row');
                var title = row.querySelector('.section-title').value;
                var content = row.querySelector('.section-content');
                var html = (window.tinymce && tinymce.get(content.id)) ? tinymce.get(content.id).getContent() : content.value;
                addSection({ title: title, content: html, show_title: row.querySelector('.section-show-title').checked, is_visible: row.querySelector('.section-is-visible').checked });
            }
        });

        if (typeof Sortable !== 'undefined') {
            new Sortable(container, {
                handle: '.section-handle',
                animation: 150,
                onEnd: function() { renumberSectionOrder(); }
            });
        } else {
            container.classList.add('sortable-fallback');
        }

        form.addEventListener('submit', function() {
            if (window.tinymce) tinymce.triggerSave();
            renumberSectionNames();
        });

        document.getElementById('add-vision-bullet').addEventListener('click', function() {
            var div = document.createElement('div');
            div.className = 'input-group mb-2 vision-bullet-row';
            div.innerHTML = '<input type="text" class="form-control" name="vision_bullets[]">' +
                '<button type="button" class="btn btn-outline-danger vision-bullet-remove" title="Remove"><i class="ri-close-line"></i></button>';
            document.getElementById('vision-bullets-list').appendChild(div);
        });
        document.getElementById('vision-bullets-list').addEventListener('click', function(e) {
            if (e.target.closest('.vision-bullet-remove')) e.target.closest('.vision-bullet-row').remove();
        });
    })();
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var uploadUrl = '{{ route(config("editor.upload_route")) }}';
        var csrfToken = document.querySelector('meta[name="csrf-token"]') ? document.querySelector('meta[name="csrf-token"]').getAttribute('content') : '';
        window.initSectionEditor = function(id) {
            if (!id || typeof tinymce === 'undefined') return;
            tinymce.init({
                selector: '#' + id,
                height: 350,
                menubar: false,
                plugins: '{{ config("editor.tinymce.plugins") }}',
                toolbar: '{{ config("editor.tinymce.toolbar") }}',
                content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; font-size: 14px; }',
                branding: false,
                resize: true,
                statusbar: true,
                promotion: false,
                automatic_uploads: true,
                images_upload_handler: function (blobInfo, progress) {
                    return new Promise(function (resolve, reject) {
                        var xhr = new XMLHttpRequest();
                        var formData = new FormData();
                        formData.append('file', blobInfo.blob(), blobInfo.filename());
                        formData.append('_token', csrfToken);
                        xhr.open('POST', uploadUrl);
                        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                        xhr.setRequestHeader('Accept', 'application/json');
                        xhr.upload.onprogress = function (e) {
                            if (e.lengthComputable) progress(Math.round((e.loaded / e.total) * 100));
                        };
                        xhr.onload = function () {
                            if (xhr.status < 200 || xhr.status >= 300) { reject('Upload failed'); return; }
                            try { resolve(JSON.parse(xhr.responseText).location); } catch (e) { reject('Invalid response'); }
                        };
                        xhr.onerror = function () { reject('Network error'); };
                        xhr.send(formData);
                    });
                },
                file_picker_callback: function (callback, value, meta) {
                    if (meta.filetype !== 'image') return;
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');
                    input.onchange = function () {
                        var file = this.files[0];
                        if (!file) return;
                        var formData = new FormData();
                        formData.append('file', file);
                        formData.append('_token', csrfToken);
                        fetch(uploadUrl, { method: 'POST', body: formData, headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' } })
                            .then(function (r) { return r.json(); })
                            .then(function (data) { callback(data.location, { alt: file.name }); })
                            .catch(function () { console.error('Image upload failed'); });
                    };
                    input.click();
                }
            });
        };
    });
    </script>
@endsection
