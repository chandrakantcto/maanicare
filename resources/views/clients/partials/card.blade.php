@props(['client'])
@php
    $imgUrl = $client->image ? asset('storage/' . $client->image) : asset('storage/assets/web/img/Mask group1.jpg');
@endphp
<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="client-card">
        <div class="client-img">
            <img src="{{ $imgUrl }}" alt="{{ $client->name }}" />
        </div>
        <h6>{{ $client->name }}</h6>
        <span>{{-- Client model has no category --}}</span>
    </div>
</div>
