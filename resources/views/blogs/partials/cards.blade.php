@foreach ($blogs as $blog)
    @include('blogs.partials.card', ['blog' => $blog])
@endforeach
