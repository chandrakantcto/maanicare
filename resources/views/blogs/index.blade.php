@extends('layouts.app')
@section('content')
    <section class="blog-section">
        <div class="container-fluid">
            <!-- HEADER -->
            <div class="row mb-4 top-blodheading">
                <div class="col-lg-7 blog-header">
                    <small>BLOGS</small>
                    <h2>The paper</h2>
                </div>
                <div class="col-lg-5 d-flex align-items-end">
                    <p>
                        Observations, lessons, and informed viewpoints drawn from real projects, real operations,
                        and real workplaces.
                    </p>
                </div>
            </div>

            <!-- BLOG GRID -->
            <div class="row" id="blogs-grid">
                @foreach($blogs as $blog)
                    @include('blogs.partials.card', ['blog' => $blog])
                @endforeach
            </div>

            <div class="row" id="blogs-grid-more"></div>

            @if($hasMore)
            <div class="show-more" id="blogs-show-more-wrap">
                <button type="button" class="btn btn-link border-0 p-0 text-decoration-none" id="blogs-show-more-btn" data-page="{{ $nextPage }}">SHOW MORE</button>
            </div>
            @endif
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        (function() {
            var btn = document.getElementById('blogs-show-more-btn');
            if (!btn) return;
            btn.addEventListener('click', function() {
                var page = btn.getAttribute('data-page');
                if (!page) return;
                btn.disabled = true;
                var url = "{{ url()->current() }}?page=" + page;
                fetch(url, { headers: { "X-Requested-With": "XMLHttpRequest", "Accept": "application/json" } })
                    .then(function(r) { return r.json(); })
                    .then(function(data) {
                        var container = document.getElementById('blogs-grid-more');
                        if (container && data.html) container.insertAdjacentHTML('beforeend', data.html);
                        if (data.has_more && data.next_page) {
                            btn.setAttribute('data-page', data.next_page);
                            btn.disabled = false;
                        } else {
                            var wrap = document.getElementById('blogs-show-more-wrap');
                            if (wrap) wrap.style.display = 'none';
                        }
                    })
                    .catch(function() { btn.disabled = false; });
            });
        })();
        
        
    </script>
@endsection
