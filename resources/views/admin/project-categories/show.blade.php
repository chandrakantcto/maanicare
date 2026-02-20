@extends('layouts.admin')

@section('page-title')
    View Project Category
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Project Category Details</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.project-categories.edit', $project_category) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="ri-edit-box-line"></i> Edit
                                </a>
                                <a href="{{ route('admin.project-categories.index') }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="ri-arrow-left-line"></i> Back to List
                                </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th width="180">ID</th>
                                <td>{{ $project_category->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $project_category->name }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $project_category->slug }}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td>
                                    @if ($project_category->image)
                                        <img src="{{ asset('storage/' . $project_category->image) }}" alt="" class="rounded" style="max-height: 120px;">
                                    @else
                                        — 
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $project_category->created_at?->format('M d, Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $project_category->updated_at?->format('M d, Y H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
