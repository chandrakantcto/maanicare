<div class="consult-right">
    <form class="js-ajax-form" action="{{ route('consultation-request.store') }}" method="POST" data-success-message="Thank you! Your consultation request has been submitted successfully.">
        @csrf
        <div class="consult-grid">
            <input type="text" name="full_name" placeholder="Full name" required />
            <input type="text" name="designation" placeholder="Designation" />

            <input type="text" name="company_name" placeholder="Company name" />
            <input type="text" name="company_website" placeholder="Company Website" />

            <input type="email" name="email" placeholder="Email Address" required />
            <input type="tel" name="phone" placeholder="Phone Number" />

            <select name="preferred_reach_time">
                <option value="">Preferred Date to Reach You?</option>
                <option value="Morning">Morning</option>
                <option value="Afternoon">Afternoon</option>
                <option value="Evening">Evening</option>
            </select>
            {{-- Good time: Flatpickr (single line, one picker, works in all browsers including Safari) --}}
            <div class="consult-grid-good-reach consult-grid-good-reach--single">
                <label for="good_reach_time" class="consult-good-reach-label">Good time to reach you?</label>
                <input type="text" name="good_reach_time" id="good_reach_time" placeholder="Select date and time" readonly autocomplete="off">
            </div>
        </div>

        <div class="js-form-message mb-2" style="display: none;"></div>

        <button type="submit" class="consult-btn">REQUEST A CONSULTATION</button>
    </form>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<style>
.consult-grid-good-reach--single { display: flex; flex-direction: column; gap: 0.25rem; }
.consult-grid-good-reach--single #good_reach_time { min-width: 0; width: 100%; }
</style>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
(function() {
    document.addEventListener('DOMContentLoaded', function() {
        var input = document.getElementById('good_reach_time');
        if (input && typeof flatpickr !== 'undefined') {
            flatpickr(input, {
                enableTime: true,
                dateFormat: 'Y-m-d H:i',
                time_24hr: true,
                allowInput: false,
                defaultHour: 9,
                defaultMinute: 0,
                minDate: 'today'
            });
        }
    });
})();
</script>
