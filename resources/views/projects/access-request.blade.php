<!-- Modal: cannot close until OTP verified; backdrop static, no keyboard -->
<div class="modal fade" id="accessRequestModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="accessRequestModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
         
        <div class="modal-content">
            <div class="close-btn">
            <span onclick="history.back()">&#8592;</span>
        </div>
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="accessRequestModalLabel">VIEW OUR WORK</h1>
                <p class="mb-0 mt-1 text-muted small">Share your contact details to view selected Maanicare projects.</p>
            </div>
            <div class="modal-body">
                <div id="accessRequestForm">
                    <form id="accessRequestContactForm" method="POST" action="{{ route('projects.access-request.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 form-group mb-4">
                                <input type="text" name="full_name" class="form-control" placeholder="Full name" required>
                            </div>
                            <div class="col-md-4 form-group mb-4">
                                <input type="text" name="company_name" class="form-control" placeholder="Company name" required>
                            </div>
                            <div class="col-md-4 form-group mb-4">
                                <input type="text" name="designation" class="form-control" placeholder="Designation" required>
                            </div>
                            <div class="col-md-6 form-group mb-4">
                                <input type="tel" id="accessRequestPhone" name="phone" class="form-control" placeholder="Phone number" required>
                            </div>
                            <div class="col-md-6 form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email address" required>
                            </div> 
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" id="accessRequestSubmitBtn">Request Access</button>
                                <span class="text-muted small ms-2" id="accessRequestFormMessage"></span>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="accessRequestOTPForm" class="otP" style="display: none;width="500px !important">
                    <p class="text-muted small mb-3"> Enter the 6-digit OTP sent to your mobile number.</p>
                    <form id="accessRequestOtpForm" method="POST" action="{{ route('projects.access-request.verify-otp') }}">
                        @csrf
                        <input type="hidden" name="request_id" id="accessRequestIdInput" value="">
                        <div class="row digitOtp">
                            <div class="col-12 form-group d-flex gap-5 justify-content-center flex-wrap my-5 mb-my-3">
                                <input type="text" name="otp1" class="form-control text-center" style="width: 3rem; max-width: 3rem;" maxlength="1" pattern="[0-9]" inputmode="numeric" placeholder="0" required autocomplete="one-time-code">
                                <input type="text" name="otp2" class="form-control text-center" style="width: 3rem; max-width: 3rem;" maxlength="1" pattern="[0-9]" inputmode="numeric" placeholder="0" required>
                                <input type="text" name="otp3" class="form-control text-center" style="width: 3rem; max-width: 3rem;" maxlength="1" pattern="[0-9]" inputmode="numeric" placeholder="0" required>
                                <input type="text" name="otp4" class="form-control text-center" style="width: 3rem; max-width: 3rem;" maxlength="1" pattern="[0-9]" inputmode="numeric" placeholder="0" required>
                                <input type="text" name="otp5" class="form-control text-center" style="width: 3rem; max-width: 3rem;" maxlength="1" pattern="[0-9]" inputmode="numeric" placeholder="0" required>
                                <input type="text" name="otp6" class="form-control text-center" style="width: 3rem; max-width: 3rem;" maxlength="1" pattern="[0-9]" inputmode="numeric" placeholder="0" required>
                            </div>
                            <div class="col-12 form-group col-12 form-group d-md-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary" id="accessRequestOtpSubmitBtn">Verify OTP</button>
                                
                                <div class="rightNoti text-left">
                    <p>Wait for 00:00 seconds</p>
                    <a href="#">Resend Code</a>
                </div>
                                <span class="text-muted small ms-2" id="accessRequestOtpMessage"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


