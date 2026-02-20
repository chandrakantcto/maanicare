@extends('layouts.admin')

@section('page-title')
    Access Request Details
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Access Request #{{ $access_request->id }}</h5>
                            <a href="{{ route('admin.access-requests.index') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="ri-arrow-left-line"></i> Back to List
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <tr><th width="200">ID</th><td>{{ $access_request->id }}</td></tr>
                            <tr><th>Full Name</th><td>{{ $access_request->full_name }}</td></tr>
                            <tr><th>Company Name</th><td>{{ $access_request->company_name ?: '—' }}</td></tr>
                            <tr><th>Designation</th><td>{{ $access_request->designation ?: '—' }}</td></tr>
                            <tr><th>Email</th><td>{{ $access_request->email }}</td></tr>
                            <tr><th>Phone</th><td>{{ $access_request->phone ?: '—' }}</td></tr>
                            <tr><th>Verified At</th><td>{{ $access_request->verified_at ? $access_request->verified_at->format('M d, Y H:i') : '—' }}</td></tr>
                            <tr><th>OTP Sent At</th><td>{{ $access_request->otp_sent_at ? $access_request->otp_sent_at->format('M d, Y H:i') : '—' }}</td></tr>
                            <tr><th>IP Address</th><td>{{ $access_request->ip_address ?: '—' }}</td></tr>
                            <tr><th>Submitted At</th><td>{{ $access_request->created_at?->format('M d, Y H:i') }}</td></tr>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Visit history (same email)</h6>
                        <p class="text-muted small">All access requests submitted with this email ({{ $access_request->email }}).</p>
                        <table class="table table-sm table-bordered">
                            <thead><tr><th>ID</th><th>Submitted At</th><th>Verified</th></tr></thead>
                            <tbody>
                                @forelse($sameEmailRequests as $r)
                                    <tr>
                                        <td>{{ $r->id }}</td>
                                        <td>{{ $r->created_at?->format('M d, Y H:i') }}</td>
                                        <td>{{ $r->verified_at ? 'Yes' : 'No' }}</td>
                                    </tr>
                                @empty
                                    <tr><td colspan="3">No other requests.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Visit history (same phone)</h6>
                        <p class="text-muted small">All access requests submitted with this phone ({{ $access_request->phone }}).</p>
                        <table class="table table-sm table-bordered">
                            <thead><tr><th>ID</th><th>Submitted At</th><th>Verified</th></tr></thead>
                            <tbody>
                                @forelse($samePhoneRequests as $r)
                                    <tr>
                                        <td>{{ $r->id }}</td>
                                        <td>{{ $r->created_at?->format('M d, Y H:i') }}</td>
                                        <td>{{ $r->verified_at ? 'Yes' : 'No' }}</td>
                                    </tr>
                                @empty
                                    <tr><td colspan="3">No other requests.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
