@foreach ($projects as $project)
    @include('projects.partials.card', ['project' => $project])
@endforeach
