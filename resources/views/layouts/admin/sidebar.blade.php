<div class="leftside-menu">

    <!-- Logo Light -->
    <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('storage/assets/admin/images/logo.svg') }}" alt="logo" style="width: 100%;">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('storage/assets/admin/images/logo-sm.svg') }}" alt="small logo" style="width: 100%;">
        </span>
    </a>

    <!-- Logo Dark -->
    <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('storage/assets/admin/images/logo-dark.svg') }}" alt="dark logo" style="width: 100%;">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('storage/assets/admin/images/logo-sm.svg') }}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -->
    <div data-simplebar>
        <ul class="side-nav">
            <li class="side-nav-title">Main</li>

            <li class="side-nav-item">
                <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                    <i class="ri-dashboard-2-line"></i>
                    <span> Dashboard </span>
                    {{-- <span class="badge bg-success float-end">9+</span> --}}
                </a>
            </li>

            <li class="side-nav-title">App</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesinvoice" aria-expanded="false"
                    aria-controls="sidebarPagesinvoice" class="side-nav-link">
                    <i class="ri-article-line"></i>
                    <span>Masters Management</span>
                    <span class="menu-arrow"></span>

                </a>
                <div class="collapse" id="sidebarPagesinvoice">
                    <ul class="side-nav-second-level">
                        <li class="side-nav-item">
                            <a class="side-nav-link" href="{{ route('admin.blog-categories.index') }}">Blog Categories</a>
                        </li>
                        <li class="side-nav-item">
                            <a class="side-nav-link" href="{{ route('admin.case-study-categories.index') }}">Case Study Categories</a>
                        </li>
                        <li class="side-nav-item">
                            <a class="side-nav-link" href="{{ route('admin.roles.index') }}">Roles</a>
                        </li>
                        <li class="side-nav-item">
                            <a class="side-nav-link" href="{{ route('admin.project-categories.index') }}">Project Categories</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.blogs.index') }}" class="side-nav-link">
                    <i class="ri-article-line"></i>
                    <span> Blogs</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.case-studies.index') }}" class="side-nav-link">
                    <i class="ri-file-list-3-line"></i>
                    <span> Case Studies</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.projects.index') }}" class="side-nav-link">
                    <i class="ri-stack-line"></i>
                    <span> Projects</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.clients.index') }}" class="side-nav-link">
                    <i class="ri-user-star-line"></i>
                    <span> Clients</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.access-requests.index') }}" class="side-nav-link">
                    <i class="ri-lock-password-line"></i>
                    <span> Access Requests</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.consultation-requests.index') }}" class="side-nav-link">
                    <i class="ri-customer-service-2-line"></i>
                    <span> Consultation Requests</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.contact-enquiries.index') }}" class="side-nav-link">
                    <i class="ri-mail-line"></i>
                    <span> Contact Enquiries</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.newsletter-subscribers.index') }}" class="side-nav-link">
                    <i class="ri-mail-send-line"></i>
                    <span> Newsletter Subscribers</span>
                </a>
            </li>

            {{-- <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                    <i class="ri-stack-line"></i>
                    <span> Products</span>

                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-kanban-board.html" class="side-nav-link">
                    <i class="ri-artboard-line"></i>
                    <span> Kanban Board</span>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
