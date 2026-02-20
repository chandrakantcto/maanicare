@extends('layouts.admin')

@section('page-title')
    Edit Role
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Edit Role</h5>
                            <a href="{{ route('admin.roles.index') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="ri-arrow-left-line"></i> Back to List
                            </a>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('admin.roles.update', $role) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name', $role->name) }}" required>
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                    <select class="form-control">
                                        <option value="Active" {{ old('status', $role->status) == 'Active' ? 'selected' : '' }}>Active</option>
                                        <option value="InActive" {{ old('status', $role->status) == 'InActive' ? 'selected' : '' }}>InActive</option>
                                    </select>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="statusRole" class="form-label">Status <span class="text-danger">*</span></label>
                                        <select class="form-control @error('statusRole') is-invalid @enderror" id="statusRole" name="statusRole" required>
                                            <option value="Active" {{ old('status', $role->status) == 'Active' ? 'selected' : '' }}>Active</option>
                                            <option value="InActive" {{ old('status', $role->status) == 'InActive' ? 'selected' : '' }}>InActive</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Update Role</button>
                                <a href="{{ route('admin.roles.index') }}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
