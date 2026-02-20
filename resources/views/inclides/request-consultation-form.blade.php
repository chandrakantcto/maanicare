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
            {{-- <select name="good_reach_time">
                <option value="">Good Time to Reach You?</option>
                <option value="Morning">Morning</option>
                <option value="Afternoon">Afternoon</option>
                <option value="Evening">Evening</option>
            </select> --}}
            <input type="datetime-local" name="good_reach_time" id="good_reach_time">
            
        </div>

        <div class="js-form-message mb-2" style="display: none;"></div>

        <button type="submit" class="consult-btn">REQUEST A CONSULTATION</button>
    </form>
</div>
