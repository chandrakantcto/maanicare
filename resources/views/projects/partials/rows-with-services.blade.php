@php
    $cardsPerRow = 3;
    $rows = array_chunk($projects ?? [], $cardsPerRow);
@endphp
@foreach ($rows as $rowIndex => $rowProjects)
    <div class="grid">
        @foreach ($rowProjects as $project)
            @include('projects.partials.card', ['project' => $project])
        @endforeach
    </div>
    @php $globalRowIndex = ($startRowIndex ?? 0) + $rowIndex; @endphp
    @if ($globalRowIndex % 2 === 0)
        @include('projects.partials.services-section')
    @endif
@endforeach
