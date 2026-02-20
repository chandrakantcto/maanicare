@extends('layouts.admin-auth')

@section('content')
    <div class="p-4 my-auto text-center">
        <h4 class="fs-20">Forgot Password?</h4>
        <p class="text-muted mb-3">Enter your email address and we'll send you an email with instructions to reset your
            password.</p>


        <!-- form -->
        <form action="{{ route('admin.forgot-password') }}" method="POST" class="text-start" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <a href="{{ route('admin.admin') }}" class="text-muted float-end">
                    <small>Back to login</small>
                </a>
                <label for="emailaddress" class="form-label">Email address</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" id="emailaddress"
                    name="email" value="{{ old('email') }}" required placeholder="Enter your email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-0 text-start">
                <button class="btn btn-soft-primary w-100" type="submit"><i class="ri-loop-left-line me-1 fw-bold"></i>
                    <span class="fw-bold">Reset Password</span> </button>
            </div>
        </form>
        <!-- end form-->
    </div>
@endsection
