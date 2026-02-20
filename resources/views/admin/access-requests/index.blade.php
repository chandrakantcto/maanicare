@extends('layouts.admin')

@section('page-title')
    Access Requests
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
                                <h5 class="card-title mb-1">All Access Requests (Project View)</h5>
                                <p class="text-muted small mb-0">Logs of users who requested access and verified OTP. Same user may appear multiple times (visit history).</p>
                            </div>
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
