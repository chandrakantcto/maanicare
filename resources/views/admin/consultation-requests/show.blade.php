@extends('layouts.admin')

@section('page-title')
    Consultation Request Details
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Consultation Request</h5>
                            <a href="{{ route('admin.consultation-requests.index') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="ri-arrow-left-line"></i> Back to List
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <tr><th width="200">ID</th><td>{{ $consultation_request->id }}</td></tr>
                            <tr><th>Full Name</th><td>{{ $consultation_request->full_name }}</td></tr>
                            <tr><th>Designation</th><td>{{ $consultation_request->designation ?: '—' }}</td></tr>
                            <tr><th>Company Name</th><td>{{ $consultation_request->company_name ?: '—' }}</td></tr>
                            <tr><th>Company Website</th><td>{{ $consultation_request->company_website ?: '—' }}</td></tr>
                            <tr><th>Email</th><td>{{ $consultation_request->email }}</td></tr>
                            <tr><th>Phone</th><td>{{ $consultation_request->phone ?: '—' }}</td></tr>
                            <tr><th>Preferred Time to Reach</th><td>{{ $consultation_request->preferred_reach_time ?: '—' }}</td></tr>
                            <tr><th>Good Time to Reach</th><td>{{ $consultation_request->good_reach_time ?: '—' }}</td></tr>
                            <tr><th>Submitted At</th><td>{{ $consultation_request->created_at?->format('M d, Y H:i') }}</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
