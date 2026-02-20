@extends('layouts.app')
@section('content')
    <section class="projectsclass wrap">
        <div class="container-fluid">
            <!-- TABS -->
            <div class="tabs">
                <button class="tab-btn active" data-tab="all" data-category-id="0">Explore All</button>
                @foreach($categories as $cat)
                    <button class="tab-btn" data-tab="category-{{ $cat->id }}" data-category-id="{{ $cat->id }}">{{ $cat->name }}</button>
                @endforeach
            </div>

            <!-- TAB: ALL -->
            <div class="tab-content active" id="all" data-category-id="0">
                <div id="projects-container-all">
                    @include('projects.partials.rows-with-services', ['projects' => $projects, 'startRowIndex' => 0])
                </div>
                <div id="projects-grid-all-more"></div>
                <div class="show-more-wrap" data-tab-target="all">
                    @if($hasMore)
                        <button type="button" class="show-more-btn" data-page="{{ $nextPage }}" data-category-id="0">SHOW MORE</button>
                    @endif
                </div>
            </div>

            @foreach($categories as $cat)
            <div class="tab-content" id="category-{{ $cat->id }}" data-category-id="{{ $cat->id }}">
                <div class="grid" id="projects-grid-category-{{ $cat->id }}"></div>
                <div class="show-more-wrap" data-tab-target="category-{{ $cat->id }}">
                    <button type="button" class="show-more-btn hidden" data-page="1" data-category-id="{{ $cat->id }}">SHOW MORE</button>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    @include('projects.details')
    @include('projects.access-request')
@endsection

@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23/build/js/intlTelInput.min.js"></script>
    <script>
        (function() {
            var COOKIE_NAME = 'projects_access_verified';
            var COOKIE_MAX_AGE_SEC = 6 * 60 * 60;
            var accessRequestTelInput;
            function getCookie(name) {
                var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
                return v ? v[2] : null;
            }
            function setVerifiedCookie() {
                document.cookie = COOKIE_NAME + '=1; max-age=' + COOKIE_MAX_AGE_SEC + '; path=/; SameSite=Lax';
            }
            $(document).ready(function() {
                if (!getCookie(COOKIE_NAME)) $('#accessRequestModal').modal('show');
                var phoneEl = document.getElementById('accessRequestPhone');
                if (phoneEl && typeof intlTelInput !== 'undefined') {
                    accessRequestTelInput = intlTelInput(phoneEl, {
                        initialCountry: 'in',
                        preferredCountries: ['in', 'us', 'gb', 'ae', 'sa'],
                        utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@23/build/js/utils.js'
                    });
                }
            });
            $('#accessRequestContactForm').on('submit', function(e) {
                e.preventDefault();
                var form = this;
                var btn = document.getElementById('accessRequestSubmitBtn');
                var msg = document.getElementById('accessRequestFormMessage');
                msg.textContent = '';
                btn.disabled = true;
                var phoneNumber = '';
                if (accessRequestTelInput) {
                    if (!accessRequestTelInput.isValidNumber()) {
                        msg.textContent = 'Please enter a valid phone number and select your country.';
                        btn.disabled = false;
                        return;
                    }
                    phoneNumber = accessRequestTelInput.getNumber();
                } else {
                    phoneNumber = form.phone.value;
                }
                fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        full_name: form.full_name.value,
                        company_name: form.company_name.value,
                        designation: form.designation.value,
                        phone: phoneNumber,
                        email: form.email.value,
                        _token: form.querySelector('input[name="_token"]').value
                    })
                })
                .then(function(r) { return r.json(); })
                .then(function(data) {
                    if (data.success && data.step === 'otp' && data.request_id) {
                        document.getElementById('accessRequestForm').style.display = 'none';
                        document.getElementById('accessRequestIdInput').value = data.request_id;
                        document.getElementById('accessRequestOTPForm').style.display = 'block';
                        document.getElementById('accessRequestOTPForm').querySelector('input[name="otp1"]').focus();
                    } else {
                        msg.textContent = data.message || 'Something went wrong.';
                    }
                })
                .catch(function() { msg.textContent = 'Request failed. Please try again.'; })
                .finally(function() { btn.disabled = false; });
            });
            var otpInputs = document.querySelectorAll('#accessRequestOTPForm input[name^="otp"]');
            otpInputs.forEach(function(input, i) {
                input.addEventListener('input', function() {
                    if (this.value.length === 1 && i < otpInputs.length - 1) otpInputs[i + 1].focus();
                });
                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Backspace' && !this.value && i > 0) otpInputs[i - 1].focus();
                });
            });
            $('#accessRequestOtpForm').on('submit', function(e) {
                e.preventDefault();
                var form = this;
                var otp = Array.from(form.querySelectorAll('input[name^="otp"]')).map(function(inp) { return inp.value; }).join('');
                if (otp.length !== 6) {
                    document.getElementById('accessRequestOtpMessage').textContent = 'Please enter all 6 digits.';
                    return;
                }
                var btn = document.getElementById('accessRequestOtpSubmitBtn');
                var msgEl = document.getElementById('accessRequestOtpMessage');
                msgEl.textContent = '';
                btn.disabled = true;
                fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        request_id: parseInt(form.request_id.value, 10),
                        otp: otp,
                        _token: form.querySelector('input[name="_token"]').value
                    })
                })
                .then(function(r) { return r.json(); })
                .then(function(data) {
                    if (data.success) {
                        setVerifiedCookie();
                        $('#accessRequestModal').modal('hide');
                    } else {
                        msgEl.textContent = data.message || 'Invalid OTP.';
                    }
                })
                .catch(function() { msgEl.textContent = 'Request failed. Please try again.'; })
                .finally(function() { btn.disabled = false; });
            });
        })();

        (function() {
            const baseUrl = '{{ route("projects.index") }}'.replace(/\/$/, '');
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

            const popup = document.getElementById("popup");
            const closePopupBtn = document.getElementById("closePopup");

            function getProjectsUrl(page, categoryId) {
                const url = new URL(baseUrl, window.location.origin);
                url.searchParams.set('page', page);
                url.searchParams.set('category_id', categoryId);
                return url.toString();
            }

            function fetchProjects(page, categoryId, appendToSelector) {
                return fetch(getProjectsUrl(page, categoryId), {
                    method: 'GET',
                    headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
                })
                    .then(r => r.json())
                    .then(data => {
                        const container = document.querySelector(appendToSelector);
                        if (container && data.html) {
                            container.insertAdjacentHTML('beforeend', data.html);
                            bindProjectDetailButtons();
                        }
                        return data;
                    });
            }

            function bindProjectDetailButtons() {
                document.querySelectorAll('.project-detail-btn').forEach(btn => {
                    if (btn._bound) return;
                    btn._bound = true;
                    btn.addEventListener('click', function(e) {
                        e.preventDefault();
                        const card = this.closest('.card');
                        const projectId = card?.getAttribute('data-project-id');
                        if (!projectId) return;
                        openProjectModal(projectId);
                    });
                });
            }

            function openProjectModal(projectId) {
                fetch(baseUrl + '/' + projectId, {
                    method: 'GET',
                    headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
                })
                    .then(r => r.json())
                    .then(data => {
                        document.getElementById('popup-title').textContent = data.title;
                        document.getElementById('popup-sector').textContent = data.sector || '—';
                        document.getElementById('popup-location').textContent = data.location || '—';
                        document.getElementById('popup-area').textContent = data.area_sqft || '—';
                        document.getElementById('popup-special-features').textContent = data.special_features || '—';
                        document.getElementById('popup-key-highlights').textContent = data.key_highlights || '—';

                        const servicesEl = document.getElementById('popup-services');
                        servicesEl.innerHTML = '';
                        (data.services || []).forEach(s => {
                            const tag = document.createElement('span');
                            tag.className = 'tag';
                            tag.textContent = s;
                            servicesEl.appendChild(tag);
                        });

                        const mainWrapper = document.querySelector('#popup .mainSwiper .swiper-wrapper');
                        const thumbWrapper = document.querySelector('#popup .thumbSwiper .swiper-wrapper');
                        if (mainWrapper && thumbWrapper) {
                            mainWrapper.innerHTML = '';
                            thumbWrapper.innerHTML = '';
                            (data.images || []).forEach(img => {
                                mainWrapper.insertAdjacentHTML('beforeend', '<div class="swiper-slide"><img src="' + (img.url || '') + '" alt="' + (img.caption || '') + '" /></div>');
                                thumbWrapper.insertAdjacentHTML('beforeend', '<div class="swiper-slide"><img src="' + (img.url || '') + '" alt="' + (img.caption || '') + '" /></div>');
                            });
                        }

                        if (window.popupMainSwiper) window.popupMainSwiper.destroy(true, true);
                        if (window.popupThumbSwiper) window.popupThumbSwiper.destroy(true, true);

                        window.popupThumbSwiper = new Swiper("#popup .thumbSwiper", {
                            spaceBetween: 10,
                            slidesPerView: 4,
                            freeMode: true,
                            watchSlidesProgress: true,
                        });
                        window.popupMainSwiper = new Swiper("#popup .mainSwiper", {
                            spaceBetween: 10,
                            thumbs: { swiper: window.popupThumbSwiper },
                        });

                        popup.style.display = "flex";
                    })
                    .catch(err => console.error('Failed to load project', err));
            }

            closePopupBtn.addEventListener("click", () => { popup.style.display = "none"; });

            bindProjectDetailButtons();

            document.querySelectorAll('.show-more-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const page = parseInt(this.getAttribute('data-page'), 10);
                    const categoryId = this.getAttribute('data-category-id');
                    const tabTarget = this.closest('.tab-content');
                    const isAll = tabTarget.id === 'all';
                    const appendSelector = isAll ? '#projects-grid-all-more' : '#projects-grid-' + tabTarget.id;
                    const self = this;
                    self.disabled = true;
                    fetchProjects(page, categoryId, appendSelector).then(data => {
                        self.disabled = false;
                        self.setAttribute('data-page', data.next_page || (page + 1));
                        if (!data.has_more) {
                            self.classList.add('hidden');
                        }
                    }).catch(() => { self.disabled = false; });
                });
            });

            const tabBtns = document.querySelectorAll(".tab-btn");
            const tabContents = document.querySelectorAll(".tab-content");

            tabBtns.forEach(btn => {
                btn.addEventListener("click", () => {
                    tabBtns.forEach(b => b.classList.remove("active"));
                    btn.classList.add("active");
                    const tabId = btn.getAttribute("data-tab");
                    const categoryId = btn.getAttribute("data-category-id");
                    tabContents.forEach(content => {
                        content.classList.remove("active");
                        if (content.id === tabId) content.classList.add("active");
                    });

                    if (tabId !== 'all' && categoryId && parseInt(categoryId, 10) > 0) {
                        const grid = document.getElementById('projects-grid-' + tabId);
                        if (grid && grid.children.length === 0) {
                            fetchProjects(1, categoryId, '#' + grid.id).then(data => {
                                const wrap = document.querySelector('#category-' + categoryId + ' .show-more-wrap');
                                const moreBtn = wrap?.querySelector('.show-more-btn');
                                if (moreBtn) {
                                    moreBtn.classList.remove('hidden');
                                    moreBtn.setAttribute('data-page', data.next_page || 2);
                                    if (!data.has_more) moreBtn.classList.add('hidden');
                                }
                            });
                        }
                    }
                });
            });
        })();
    </script>
@endsection
