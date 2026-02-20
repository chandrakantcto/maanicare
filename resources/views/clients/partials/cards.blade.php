@foreach ($clients as $client)
    @include('clients.partials.card', ['client' => $client])
@endforeach
