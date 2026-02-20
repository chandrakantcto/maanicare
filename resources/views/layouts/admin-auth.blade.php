<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="{{ config('app.name') }}" name="author" />
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('storage/assets/admin/images/logo.svg') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('storage/assets/admin/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('storage/assets/admin/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('storage/assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg position-relative" style="height: 100vh;">
    <div class="account-pages p-sm-5  position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-9 col-lg-11">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4 text-center">
                                        <a href="{{ route('admin.admin') }}" class="logo-light">
                                            <img src="{{ asset('storage/assets/admin/images/logo.svg') }}" alt="logo" height="28">
                                        </a>
                                        <a href="{{ route('admin.admin') }}" class="logo-dark">
                                            <img src="{{ asset('storage/assets/admin/images/logo.svg') }}" alt="dark logo" height="28">
                                        </a>
                                    </div>
                                    @yield('content')
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="{{ asset('storage/assets/admin/images/auth-img.jpg') }}" alt="" class="img-fluid rounded h-100">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
           
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            <script>
                document.write(new Date().getFullYear())
            </script> © {{ config('app.name') }}
        </span>
    </footer>

    <!-- Vendor js -->
    <script src="{{ asset('storage/assets/admin/js/vendor.min.js') }}"></script>
    <script src="{{ asset('storage/assets/admin/vendor/lucide/umd/lucide.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('storage/assets/admin/js/app.min.js') }}"></script>

    @yield('scripts')

</body>

</html>
