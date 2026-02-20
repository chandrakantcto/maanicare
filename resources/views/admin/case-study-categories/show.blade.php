@extends('layouts.admin')

@section('page-title')
    View Case Study Category
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Case Study Category Details</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.case-study-categories.edit', $case_study_category) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="ri-edit-box-line"></i> Edit
                                </a>
                                <a href="{{ route('admin.case-study-categories.index') }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="ri-arrow-left-line"></i> Back to List
                                </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th width="180">ID</th>
                                <td>{{ $case_study_category->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $case_study_category->name }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $case_study_category->slug }}</td>
                            </tr>
                            <tr>
                                <th>Icon</th>
                                <td>{{ $case_study_category->icon ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Order</th>
                                <td>{{ $case_study_category->order }}</td>
                            </tr>
                            <tr>
                                <th>Active</th>
                                <td>
                                    <span class="badge bg-{{ $case_study_category->is_active ? 'success' : 'secondary' }}-subtle text-{{ $case_study_category->is_active ? 'success' : 'secondary' }}">
                                        {{ $case_study_category->is_active ? 'Yes' : 'No' }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $case_study_category->description ?: '—' }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $case_study_category->created_at?->format('M d, Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $case_study_category->updated_at?->format('M d, Y H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
