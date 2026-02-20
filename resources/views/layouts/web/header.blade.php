<div class="mainHeader">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 text-md-end text-center">
                <b class="headerTop"></b>
            </div>
            <div class="col-md-6">
                <span class="d-block text-center headerTop">Celebrating 30+ Years of Expertise</span>
            </div>
            <div class="col-md-3 text-md-end text-center"><a href="tel:+919833006916">
                <b class="headerTop">+91 9833006916</b></a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-body-white" id="mainNavbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('storage/assets/web/img/logo.png') }}"
                alt="" width="240" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('services.index') }}">Services</a>
                </li> --}}


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('services.index') }}" role="button">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('services.project-and-fit-out') }}">Project &
                                Fit-Out</a></li>
                        <li><a class="dropdown-item"
                                href="{{ route('services.integrated-facility-management') }}">Integrated Facility
                                Management</a></li>
                        <li><a class="dropdown-item"
                                href="{{ route('services.staffing-payroll-and-compliance') }}">Staffing, Payroll &
                                Compliance</a></li>
                        <li><a class="dropdown-item" href="{{ route('services.on-demand') }}">On-Demand</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('projects.index') }}">Projects</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button">
                        About Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('our-story') }}">Our Story</a></li>
                        <li><a class="dropdown-item" href="{{ route('our-team') }}">The Team</a></li>
                        <li><a class="dropdown-item" href="{{ route('clients') }}">Clients</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('case-studies') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('case-studies') }}">Case Studies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('contact-us') }}">Contact Us</a>
                </li>
            </ul>
            <div>
                <button type="button" id="req-consult-head"class="btn btn-primary">Request a Consult</button>

            </div>
        </div>
    </div>
</nav>


<script>
window.addEventListener("scroll", function () {
    let navbar = document.getElementById("mainNavbar");

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
</script>


