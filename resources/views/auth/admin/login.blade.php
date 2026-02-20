@extends('layouts.admin-auth')

@section('content')
    <div class="p-4 my-auto text-center">

        <h4 class="fs-20">Sign In</h4>
        <p class="text-muted mb-4">Enter your email address and password to <br> access
            account.
        </p>
        <!-- form -->
        <form action="{{ route('admin.login') }}" method="POST" class="text-start" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="emailaddress" class="form-label">Email address</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" id="emailaddress"
                    name="email" value="{{ old('email') }}" required placeholder="Enter your email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <a href="{{ route('admin.forgot-password') }}" class="text-muted float-end">
                    <small>Forgot your password ?</small>
                </a>
                <label for="password" class="form-label">Password</label>
                <input class="form-control @error('password') is-invalid @enderror" name="password"
                    value="{{ old('password') }}" type="password" required placeholder="Enter your password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkbox-signin" name="remember">
                    <label class="form-check-label" for="checkbox-signin">Remember
                        me</label>
                </div>
            </div>
            <div class="mb-0 text-start">
                <button class="btn btn-soft-primary w-100" type="submit"><i class="ri-login-circle-fill me-1"></i> <span
                        class="fw-bold">Log
                        In</span> </button>
            </div>


        </form>
        <!-- end form-->
    </div>
@endsection
