@extends('layouts.admin')

@section('page-title')
    Blog Categories
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title mb-1">All Blog Categories</h5>
                            </div>
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="{{ route('admin.blog-categories.create') }}" class="btn btn-outline-primary">
                                        <i class="ri-add-circle-line"></i> Create Blog Category
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="table-responsive">
                            {{ $dataTable->table() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('layouts.admin.datatable.script')
@endsection
