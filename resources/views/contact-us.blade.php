@extends('layouts.app')
@section('content')
    <section class="contact-section py-5 tosectionsclas">
        <div class="conatctusclas container-fluid">
            <div class="row">
                <span class="small-title">Contact us</span>
                <h1 class="main-heading">Let’s Build Environments That Work Better</h1>
                <p class="mb-4">
                    Whether you’re planning a new project, streamlining facilities, managing workforce operations,
                    or enabling on-demand services, Maanicare is here to help. We partner with organisations to
                    deliver environments, systems, and services that are reliable, compliant, and built to perform.
                    Today and long term.
                </p>
            </div>

            <div class="row g-4 align-items-stretch">
                <!-- LEFT IMAGE -->
                <div class="col-lg-5">
                    <div class="contact-img">
                        <img src="{{asset('storage/assets/web/img/Mask-group.png')}}" alt="Building" />
                    </div>
                </div>

                <!-- RIGHT FORM -->
                <div class="col-lg-7 text-white">
                    <span class="small-title">Start a Conversation</span>
                    <p class="mb-4">
                        Share a few details and we’ll connect you with the right specialist from our team. Projects,
                        facilities, workforce, or on-demand services, based on your needs.
                    </p>

                    <form class="js-ajax-form" action="{{ route('contact-enquiry.store') }}" method="POST" data-success-message="Thank you! Your message has been sent. We will get back to you soon.">
                        @csrf
                        <div class="row mb-0 mb-md-4">
                            <div class="col-md-6">
                                <input class="form-control custom-input" name="full_name" placeholder="Full name" required />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control custom-input" name="designation" placeholder="Designation" />
                            </div>
                        </div>

                        <div class="row mb-0 mb-md-4">
                            <div class="col-md-6">
                                <input class="form-control custom-input" name="company_name" placeholder="Company name" />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control custom-input" name="company_website" placeholder="Company website" />
                            </div>
                        </div>

                        <div class="row mb-0 mb-md-4">
                            <div class="col-md-6">
                                <input class="form-control custom-input" name="email" type="email" placeholder="Email address" required />
                            </div>
                            <div class="col-md-6">
                                <input class="form-control custom-input" name="phone" type="tel" placeholder="Phone number" />
                            </div>
                        </div>

                        <div class="row mb-0 mb-md-4">
                            <div class="col-md-6">
                                <select class="form-control custom-input" name="preferred_date_reach">
                                    <option value="">Preferred date to reach you?</option>
                                    <option value="Morning">Morning</option>
                                    <option value="Afternoon">Afternoon</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                            <div class="col-md-6 select-wrapper">
                                <select class="form-control custom-input" name="preferred_time_reach">
                                    <option value="">Preferred time to reach you?</option>
                                    <option value="Morning">Morning</option>
                                    <option value="Afternoon">Afternoon</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0 mb-md-4">
                            <div class="col-md-6 select-wrapper">
                                <select class="form-control custom-input" name="industry">
                                    <option value="">Industry</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Residential">Residential</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Hospitality">Hospitality</option>
                                    <option value="Retail">Retail</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6 select-wrapper">
                                <select class="form-control custom-input" name="service_of_interest">
                                    <option value="">Service of Interest</option>
                                    <option value="Project & Fit-Out">Project & Fit-Out</option>
                                    <option value="Integrated Facility Management">Integrated Facility Management</option>
                                    <option value="Staffing, Payroll & Compliance">Staffing, Payroll & Compliance</option>
                                    <option value="On-Demand">On-Demand</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <textarea class="form-control custom-textarea mb-4" name="message" placeholder="Your message"></textarea>

                        <div class="js-form-message mb-2" style="display: none;"></div>

                        <button type="submit" class="btn btn-custom">Request a Consultation</button>

                        <p class="privacy-text mt-3">
                            No pressure. No generic pitches. Just relevant expertise. <br/> <b>We respect your privacy.
                                Your information is never shared. </b>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <div class="container-fluid secondsection mt-3">
        <div class="row">
            <div class="small-heading">PREFER A DIRECT CONVERSATION?</div>
            <div class="main-heading">Some discussions are better one-to-one.</div>

            <div class="info-row">
                <div class="info-box">
                    <img src="{{asset('storage/assets/web/img/mail.svg')}}" />
                    <div>
                        <div class="info-title">Email us</div>
                        <div class="info-text"><a href="mailto:care@maanicare.com">care@maanicare.com</a></div>
                    </div>
                </div>

                <div class="info-box">
                    <img src="{{asset('storage/assets/web/img/what.svg')}}" />
                    <div>
                        <div class="info-title">Chat with us</div>
                        <div class="info-text"><a href="https://wa.me/919833006916" target="_blank">+91 9833006916</a></div>
                    </div>
                </div>

                <div class="info-box">
                    <img src="{{asset('storage/assets/web/img/calendar_month.svg')}}" />
                    <div>
                        <div class="info-title">Working Hours</div>
                        <div class="info-text">Mon to Sat, 9:30 AM – 6:30 PM</div>
                    </div>
                </div>

                <div class="info-box">
                    <img src="{{asset('storage/assets/web/img/caladddal (2).svg')}}" />
                    <div>
                        <div class="info-title">Speak to us</div>
                        <div class="info-text"><a href="tel:022 3511 3076 / 77 / 78">022 3511 3076 / 77 / 78</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="divider-wrap">
            <div class="custom-divider"></div>
        </div>
    </div>

    <section class="locationsclass visit-section">
        <div class="container-fluid">
            <div class="small-title">VISIT US</div>
            <div class="main-title">We look forward to welcoming you.</div>

            <div class="location-grid">
                <div class="location-box">
                    <img src="{{asset('storage/assets/web/img/location_on.svg')}}" />
                    <div>
                        <div class="location-title">Headoffice</div>
                        <div class="location-text">
                            Unit No. 101, B Wing, First Floor, Samarth Aishwarya, Oshiwara, Andheri West, Mumbai,
                            Maharashtra – 053.
                            <br /><a href="https://maps.app.goo.gl/XzUw8XKTm1TmSfRh8" target="_blank">Get Directions</a>
                        </div>
                    </div>
                </div>

                <div class="location-box">  
                    <img src="{{asset('storage/assets/web/img/location_on.svg')}}" />
                    <div>
                        <div class="location-title">Workshop – Western Zone</div>
                        <div class="location-text">
                            Tenement No. 296/2354, Shree Ganesh Co-operative Housing Society Ltd, M.G. Road,
                            Goregaon (West), Mumbai – 104.
                            <br><a href="https://maps.app.goo.gl/kDBpRaN9pPXFzbS5A" target="_blank">Get Directions</a>
                        </div>
                    </div>
                </div>

                <div class="location-box">
                    <img src="{{asset('storage/assets/web/img/location_on.svg')}}" />
                    <div>
                        <div class="location-title">Innovation Centre</div>
                        <div class="location-text">
                            Survey No. And Hissa No.16/1-4 at Village Tware, Taluka Sudhagad, District Raigad,
                            Maharashtra. 
                            <br /><a href="https://maps.app.goo.gl/bJxXfzxwrPD4wHZm6?g_st=iw" target="_blank">Get Directions</a>
                        </div>
                    </div>
                </div>

                <div class="location-box">
                    <img src="{{asset('storage/assets/web/img/location_on.svg')}}" />
                    <div>
                        <div class="location-title">Bengaluru</div>
                        <div class="location-text">
                            #39, Dr. Chica Road, Kothanur, Bengaluru 560 077.
                            <br><a href="https://maps.app.goo.gl/XsPsdFca7zu75Nqk9?g_st=iw" target="_blank">Get Directions</a>
                        </div>
                    </div>
                </div>

                <div class="location-box">
                    <img src="{{asset('storage/assets/web/img/location_on.svg')}}" />
                    <div>
                        <div class="location-title">Chennai</div>
                        <div class="location-text">
                            Old #2, New #3, Iyyamperumal Street, Royapettah, Chennai 600 014.
                            <br><a href="https://maps.app.goo.gl/adCS1H8HZdcRKrpf" target="_blank">Get Directions</a>
                        </div>
                    </div>
                </div>

                <div class="location-box">
                    <img src="{{asset('storage/assets/web/img/location_on.svg')}}" />
                    <div>
                        <div class="location-title">Delhi</div>
                        <div class="location-text">
                            101 – C Sharbati Niwas, Hari Nagar, Ashram Main Mathura Road, New Delhi – 110 014.
                            <br /><a href="https://maps.app.goo.gl/R5FLFQ1m3ws1C4aE6" target="_blank">Get Directions</a>
                        </div>
                    </div>
                </div>

                <div class="location-box">
                    <img src="{{asset('storage/assets/web/img/location_on.svg')}}" />
                    <div>
                        <div class="location-title">Jamnagar</div>
                        <div class="location-text">
                            Office No. 124, Parth Hotel, Moti Khavdi Main Gate, Moti Khavdi Jamnagar – 361 140.
                            <br /><a href="https://maps.app.goo.gl/jGqRk6QyviUieRY49" target="_blank">Get Directions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAP -->
        <div class="map-wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.1381754930812!2d72.829263!3d19.145428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b61874cbfe41%3A0x2c5de705203f6b49!2sMaani%20Care%20System%20(India)%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1770899914156!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <div class="container-fluid">
        <div class="divider-wrap">
            <div class="custom-divider"></div>
        </div>
    </div>

    <section class="faq-section mb-5">
        <div class="container-fluid">
            <div class="faq-wrap">
                <!-- LEFT -->
                <div class="faq-left">FREQUENTLY ASKED<br />QUESTIONS</div>

                <!-- RIGHT -->
                <div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Which industries do you typically work with?</span>
                            <div class="faq-icon">+</div>
                        </div>
                        <div class="faq-answer">
                            We work across industries where consistency, compliance, and operational continuity matter. This includes corporate offices, industrial and manufacturing facilities, healthcare and institutional environments, commercial and retail spaces, and residential or mixed-use developments. While each sector has unique requirements, 
                            the standard we operate by remains consistent.
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do you offer end-to-end services or only specific modules?</span>
                            <div class="faq-icon">+</div>
                        </div>
                        <div class="faq-answer">
                            Both. MaaniCare is designed to work end-to-end across projects, people, and facilities—but we are equally effective when engaged for specific modules. Whether you need a single service or an integrated engagement across multiple verticals, 
                            our approach remains structured and accountable.
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do you ensure quality and consistency across locations?</span>
                            <div class="faq-icon">+</div>
                        </div>
                        <div class="faq-answer">
                           Consistency is built through systems, not supervision alone. We define clear standards, train teams against documented processes, deploy on-ground leadership, and track performance through structured reporting. 
                           This ensures outcomes remain consistent across sites, teams, and geographies.
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Can you support projects with strict compliance or audit requirements?</span>
                            <div class="faq-icon">+</div>
                        </div>
                        <div class="faq-answer">
                            Yes. Governance and compliance are central to how we operate. Our processes are designed to be audit-ready, with clear documentation, statutory adherence, safety protocols, and traceable reporting. We regularly support environments with strict regulatory and compliance expectations.
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do you provide a dedicated point of contact?</span>
                            <div class="faq-icon">+</div>
                        </div>
                        <div class="faq-answer">
                            Yes. Every engagement is supported by a clearly defined point of contact responsible for coordination, communication, and closure. This ensures clarity, faster decision-making, and reduced dependency on multiple touchpoints.
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do you handle data confidentiality and privacy?</span>
                            <div class="faq-icon">+</div>
                        </div>
                        <div class="faq-answer">
                       We treat confidentiality as a responsibility, not a policy checkbox. Access controls, limited data sharing, secure documentation practices, and discretion in communication are built into our operations. Client data is used strictly for service delivery and protected accordingly.
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What is your typical engagement timeline?</span>
                            <div class="faq-icon">+</div>
                        </div>
                        <div class="faq-answer">
                            Timelines vary based on scope, scale, and complexity. That said, our engagements are structured from the outset—with clear milestones, responsibilities, and reporting cadence—so expectations are aligned early and delivery remains predictable.
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Can you scale services as our organisation grows?</span>
                            <div class="faq-icon">+</div>
                        </div>
                        <div class="faq-answer">
                           Yes. Our systems are designed to scale—across locations, teams, and service requirements. As organizations grow or evolve, we adapt the scope and structure without resetting standards or disrupting ongoing operations.
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do you work with existing vendors or systems?</span>
                            <div class="faq-icon">+</div>
                        </div>
                        <div class="faq-answer">
                           Where required, yes. We can integrate with existing vendors, tools, or systems while bringing clarity around roles, accountability, and performance standards. Our priority is continuity and control—not unnecessary replacement.
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What makes MaaniCare different from other service providers?</span>
                            <div class="faq-icon">+</div>
                        </div>
                        <div class="faq-answer">
                          We don’t operate as a collection of disconnected services. We operate as a single, accountable partner focused on outcomes. Our differentiation lies in governance-led delivery, on-ground execution, clear ownership, and consistency across environments. We reduce complexity instead of adding layers—and we close work properly.
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        document.querySelectorAll(".faq-item").forEach((item) => {
            item.addEventListener("click", () => {
                item.classList.toggle("active");
            });
        });
    </script>
@endsection
