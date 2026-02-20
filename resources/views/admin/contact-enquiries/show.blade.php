@extends('layouts.admin')

@section('page-title')
    Contact Enquiry Details
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Contact Enquiry</h5>
                            <a href="{{ route('admin.contact-enquiries.index') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="ri-arrow-left-line"></i> Back to List
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <tr><th width="200">ID</th><td>{{ $contact_enquiry->id }}</td></tr>
                            <tr><th>Full Name</th><td>{{ $contact_enquiry->full_name }}</td></tr>
                            <tr><th>Designation</th><td>{{ $contact_enquiry->designation ?: '—' }}</td></tr>
                            <tr><th>Company Name</th><td>{{ $contact_enquiry->company_name ?: '—' }}</td></tr>
                            <tr><th>Company Website</th><td>{{ $contact_enquiry->company_website ?: '—' }}</td></tr>
                            <tr><th>Email</th><td>{{ $contact_enquiry->email }}</td></tr>
                            <tr><th>Phone</th><td>{{ $contact_enquiry->phone ?: '—' }}</td></tr>
                            <tr><th>Preferred Date to Reach</th><td>{{ $contact_enquiry->preferred_date_reach ?: '—' }}</td></tr>
                            <tr><th>Preferred Time to Reach</th><td>{{ $contact_enquiry->preferred_time_reach ?: '—' }}</td></tr>
                            <tr><th>Industry</th><td>{{ $contact_enquiry->industry ?: '—' }}</td></tr>
                            <tr><th>Service of Interest</th><td>{{ $contact_enquiry->service_of_interest ?: '—' }}</td></tr>
                            <tr><th>Message</th><td>{{ $contact_enquiry->message ?: '—' }}</td></tr>
                            <tr><th>Submitted At</th><td>{{ $contact_enquiry->created_at?->format('M d, Y H:i') }}</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
