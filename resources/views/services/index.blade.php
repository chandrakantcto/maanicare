@extends('layouts.app')
@section('content')
<section class="servicesone">
    <!-- Box 1 -->
    <div class="service-boxone bg1">
        <div class="service-content">
            <h3>Project &<br>Fit-Out Services</h3>
            <p>
                End-to-end interior and infrastructure projects delivered with precision, safety,
                and design excellence. From concept to completion.
            </p>
            <div class="explore">
                <a href="{{ route('services.project-and-fit-out') }}">Explore More ↗</a>
            </div>
        </div>
        <div class="icon">
            <!-- Cube Icon -->
            <img src="{{ asset('storage/assets/web/img/ewwewewe.svg') }}">
        </div>
    </div>

    <!-- Box 2 -->
    <div class="service-boxone bg2">
        <div class="service-content">
            <h3>Staffing, Payroll &<br>Compliance Services</h3>
            <p>
                Reliable workforce solutions supported by structured payroll systems,
                statutory compliance, and risk-managed processes.
            </p>
            <div class="explore">
                <a href="{{ route('services.staffing-payroll-and-compliance') }}">Explore More ↗</a>
            </div>
        </div>

        <div class="icon">
            <!-- Document Icon -->
            <img src="{{ asset('storage/assets/web/img/dddddd.svg') }}">
        </div>
    </div>

    <!-- Box 3 -->
    <div class="service-boxone bg3">
        <div class="service-content">
            <h3>Integrated Facility<br>Management Services</h3>
            <p>
                Seamless day-to-day operations covering housekeeping,
                technical services, and site management.
            </p>
            <div class="explore">
                <a href="{{ route('services.integrated-facility-management') }}">Explore More ↗</a>
            </div>
        </div>

        <div class="icon">
            <!-- Network Icon -->
            <img src="{{ asset('storage/assets/web/img/arcvf.svg') }}">
        </div>
    </div>

    <!-- Box 4 -->
    <div class="service-boxone bg4">
        <div class="service-content">
            <h3>On-Demand<br>Services</h3>
            <p>
                Flexible, responsive service support designed for speed,
                scalability, and immediate operational needs.
            </p>
            <div class="explore">
                <a href="{{ route('services.on-demand') }}">Explore More ↗</a>
            </div>
        </div>

        <div class="icon">
            <!-- Check Icon -->
            <img src="{{ asset('storage/assets/web/img/tasdddk_alt.svg') }}">
        </div>
    </div>

</section>
@endsection

@section('scripts')

@endsection