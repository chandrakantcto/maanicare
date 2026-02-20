@extends('layouts.admin')

@section('page-title')
    Roles
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title mb-1">
                                    All Roles
                                </h5>
                            </div>

                            <ul class="nav nav-pills nav-justified " role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="{{ route('admin.roles.create') }}" class="btn btn-outline-primary">
                                        <i class="ri-add-circle-line"></i>
                                        Create Role
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