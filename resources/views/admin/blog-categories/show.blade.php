@extends('layouts.admin')

@section('page-title')
    View Blog Category
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Blog Category Details</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.blog-categories.edit', $blog_category) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="ri-edit-box-line"></i> Edit
                                </a>
                                <a href="{{ route('admin.blog-categories.index') }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="ri-arrow-left-line"></i> Back to List
                                </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th width="180">ID</th>
                                <td>{{ $blog_category->id }}</td>
                            </tr>
                            <tr>
                                <th>Parent Category</th>
                                <td>{{ $blog_category->parent_id ? ($blog_category->parent?->name ?? '-') : '—' }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $blog_category->name }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $blog_category->slug }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <span class="badge bg-{{ $blog_category->status == 'Active' ? 'success' : 'secondary' }}-subtle text-{{ $blog_category->status == 'Active' ? 'success' : 'secondary' }}">
                                        {{ $blog_category->status }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $blog_category->description ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Meta Title</th>
                                <td>{{ $blog_category->meta_title ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Meta Description</th>
                                <td>{{ $blog_category->meta_description ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $blog_category->created_at?->format('M d, Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $blog_category->updated_at?->format('M d, Y H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
