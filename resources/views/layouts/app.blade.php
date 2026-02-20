<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="icon" type="image/png" href="{{ asset('storage/assets/web/img/fa.png') }}" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.typekit.net/iyb1xkj.css" />
    <link href="{{ asset('storage/assets/web/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('storage/assets/web/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('storage/assets/web/css/style.css') }}" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <!-- Scripts -->

</head>

<body>

    @include('layouts.web.header')


    @yield('content')

    @if(!request()->is('services'))
        @include('layouts.web.footer')
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('storage/assets/web/js/popper.min.js') }}"></script>
    <script src="{{ asset('storage/assets/web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('storage/assets/web/js/slick.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @yield('scripts')
    <script>
        $(document).ready(function() {
            const toastLiveExample = document.getElementById('liveToast')
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
            toastBootstrap.show()
        })

    </script>
    <script>
    (function() {
        document.addEventListener('submit', function(e) {
            var form = e.target;
            if (!form || form.tagName !== 'FORM' || !form.classList.contains('js-ajax-form')) return;
            e.preventDefault();

            var submitBtn = form.querySelector('button[type="submit"], input[type="submit"]');
            var messageEl = form.querySelector('.js-form-message');
            var url = form.getAttribute('action');
            var method = (form.getAttribute('method') || 'GET').toUpperCase();
            var csrfToken = document.querySelector('meta[name="csrf-token"]');
            csrfToken = csrfToken ? csrfToken.getAttribute('content') : '';

            if (!url) return;

            var formData = new FormData(form);
            if (method === 'GET') {
                url = url + (url.indexOf('?') === -1 ? '?' : '&') + new URLSearchParams(formData).toString();
                formData = null;
            }

            if (submitBtn) {
                submitBtn.disabled = true;
            }
            if (messageEl) {
                messageEl.style.display = 'none';
                messageEl.textContent = '';
                messageEl.className = 'js-form-message mb-2';
            }

            fetch(url, {
                method: method,
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                }
            })
            .then(function(res) { return res.json().then(function(data) { return { ok: res.ok, data: data }; }); })
            .then(function(result) {
                var msg = result.data && result.data.message ? result.data.message : (form.getAttribute('data-success-message') || 'Submitted successfully.');
                if (result.ok && (result.data === undefined || result.data.success !== false)) {
                    if (messageEl) {
                        messageEl.style.display = 'block';
                        messageEl.textContent = msg;
                        messageEl.className = 'js-form-message mb-2 text-success';
                    } else {
                        alert(msg);
                    }
                    form.reset();
                } else {
                    var errMsg = (result.data && result.data.message) ? result.data.message : (result.data && result.data.errors ? Object.values(result.data.errors).flat().join(' ') : 'Something went wrong. Please try again.');
                    if (messageEl) {
                        messageEl.style.display = 'block';
                        messageEl.textContent = errMsg;
                        messageEl.className = 'js-form-message mb-2 text-danger';
                    } else {
                        alert(errMsg);
                    }
                }
            })
            .catch(function() {
                if (messageEl) {
                    messageEl.style.display = 'block';
                    messageEl.textContent = 'Network error. Please try again.';
                    messageEl.className = 'js-form-message mb-2 text-danger';
                } else {
                    alert('Network error. Please try again.');
                }
            })
            .finally(function() {
                if (submitBtn) submitBtn.disabled = false;
            });
        });
    })();
    </script>
    
    <script>
document.addEventListener("contextmenu", e => e.preventDefault());

document.addEventListener("selectstart", e => e.preventDefault());

document.addEventListener("keydown", function(e) {

    if (
        (e.ctrlKey && ["c","u","s","a","x"].includes(e.key.toLowerCase())) ||
        e.key === "F12"
    ) {
        e.preventDefault();
    }

});
</script>

</body>

</html>
