@extends('layouts.admin')

@section('page-title')
    View Role
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Role Details</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="ri-edit-box-line"></i> Edit
                                </a>
                                <a href="{{ route('admin.roles.index') }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="ri-arrow-left-line"></i> Back to List
                                </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th width="180">ID</th>
                                <td>{{ $role->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $role->name }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <span class="badge bg-{{ $role->status == 'Active' ? 'success' : 'secondary' }}-subtle text-{{ $role->status == 'Active' ? 'success' : 'secondary' }}">
                                        {{ $role->status }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $role->created_at->format('M d, Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $role->updated_at->format('M d, Y H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
