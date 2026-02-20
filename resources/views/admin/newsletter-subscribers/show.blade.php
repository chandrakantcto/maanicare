@extends('layouts.admin')

@section('page-title')
    Newsletter Subscriber Details
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-0">Newsletter Subscriber</h5>
                            <a href="{{ route('admin.newsletter-subscribers.index') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="ri-arrow-left-line"></i> Back to List
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <tr><th width="200">ID</th><td>{{ $newsletter_subscriber->id }}</td></tr>
                            <tr><th>Name</th><td>{{ $newsletter_subscriber->name }}</td></tr>
                            <tr><th>Email</th><td>{{ $newsletter_subscriber->email }}</td></tr>
                            <tr><th>Subscribed At</th><td>{{ $newsletter_subscriber->created_at?->format('M d, Y H:i') }}</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
