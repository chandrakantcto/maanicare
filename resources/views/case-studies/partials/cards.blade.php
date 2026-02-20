@foreach ($caseStudies as $caseStudy)
    @include('case-studies.partials.card', ['caseStudy' => $caseStudy])
@endforeach
