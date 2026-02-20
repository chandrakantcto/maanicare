<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-1">

            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a href="index.html" class="logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('storage/assets/admin/images/logo.svg') }}" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('storage/assets/admin/images/logo-sm.svg') }}" alt="small logo">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="index.html" class="logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('storage/assets/admin/images/logo-dark.svg') }}" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('storage/assets/admin/images/logo-sm.svg') }}" alt="small logo">
                    </span>
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- Page Title -->
            <h4 class="page-title d-none d-sm-block">
                @yield('page-title')
            </h4>
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">
            <li class="dropdown d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-magnify fs-2"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="search" class="form-control" placeholder="Search ..."
                            aria-label="Recipient's username">
                    </form>
                </div>
            </li>

           

           

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-notification-3-line fs-22"></i>
                    <span class="noti-icon-badge badge text-bg-pink">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-16 fw-semibold"> Notification</h6>
                            </div>
                            <div class="col-auto">
                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                    <small>Clear All</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div style="max-height: 300px;" data-simplebar>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary-subtle">
                                <i class="mdi mdi-account text-primary"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="noti-time">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning-subtle">
                                <i class="mdi mdi-account-plus text-warning"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="noti-time">5 hours ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger-subtle">
                                <i class="mdi mdi-heart text-danger"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <small class="noti-time">3 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-pink-subtle">
                                <span class="mdi mdi-account-box text-pink"></span>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admi
                                <small class="noti-time">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-purple-subtle">
                                <i class="mdi mdi-account-plus text-purple"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="noti-time">7 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success-subtle text-success">
                            </div>
                            <p class="notify-details">Carlos Crouch liked <b>Admin</b>.
                                <small class="noti-time">Carlos Crouch liked</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);"
                        class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                        View All
                    </a>

                </div>
            </li>

            <li class="d-none d-sm-inline-block">
                <div class="nav-link" id="light-dark-mode">
                    <i class="ri-moon-line fs-22"></i>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="{{ asset('storage/assets/admin/images/users/avatar-1.jpg') }}" alt="user-image" width="32"
                            class="rounded-circle">
                    </span>
                    <span class="d-lg-block d-none">
                        <h5 class="my-0 fw-normal">{{ Auth::user()->name }}<i
                                class="ri-arrow-down-s-line fs-22 d-none d-sm-inline-block align-middle"></i>
                        </h5>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="pages-profile.html" class="dropdown-item">
                        <i class="ri-account-pin-circle-line fs-16 align-middle me-1 "></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="pages-profile.html" class="dropdown-item">
                        <i class="ri-settings-4-line fs-16 align-middle me-1"></i>
                        <span>Settings</span>
                    </a>
                    <!-- item-->
                    <a href="{{ route('admin.logout') }}" class="dropdown-item">
                        <i class="ri-logout-circle-r-line align-middle me-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
