@extends('layouts.navs')
@section('title', 'Services')
@section('content')
<section class="hero_service w_100 h_50vh flex_c flex_cl padding_s10 gap_xs">
    <h1 class="text_ac hero_text hero_main_text reveal-element">Our Comprehensive <span class="secondary_text">Services</span></h1>
    <h3 class="font_w500 text_ac secondary_font gray_cl hero_text hero_subtitle reveal-element">We provide end-to-end recruitment solutions connecting Nepalese talent with global employers.</h3>
</section>

<section class="services_main w_100 padding_s10 flex_c flex_cl padding_ts gap_s">
    <h1 class="title_border reveal-element">WHAT WE OFFER</h1>
    
    <div class="service_details_container w_100 flex_cl gap_xs mtop_5">
        <!-- Service 1 -->
        <div id="overseas_recruitment" class="service_detail_card reveal-element flex_cl gap_s">
            <div class="service_image w_100 h_35vh pos_rel" style="background-image: url('./resources/images/services/overseas_recruitment.jpg'); background-size: cover; background-position: center;">
                <div class="overlay w_100 h_100 pos_abs"></div>
                <div class="service_number pos_abs">
                    <h1 class="alt_text">01</h1>
                </div>
            </div>
            <div class="service_info padding_sxs flex_cl gap_xs">
                <h2>OVERSEAS RECRUITMENT</h2>
                <h3 class="font_w500 secondary_font gray_cl">We specialize in identifying, screening, and selecting qualified Nepalese workers for various industries including hospitality, construction, manufacturing, security, healthcare, and domestic services.</h3>
                <ul class="service_features secondary_font gray_cl">
                    <li><h4>Customized recruitment based on employer specifications</h4></li>
                    <li><h4>Rigorous skill assessment and verification</h4></li>
                    <li><h4>Comprehensive interview and selection process</h4></li>
                    <li><h4>Background and reference checks</h4></li>
                </ul>
            </div>
        </div>
        
        <!-- Service 2 -->
        <div id="documentation" class="service_detail_card reveal-element flex_cl gap_s">
            <div class="service_image w_100 h_35vh pos_rel" style="background-image: url('./resources/images/services/documentation.jpg'); background-size: cover; background-position: center;">
                <div class="overlay w_100 h_100 pos_abs"></div>
                <div class="service_number pos_abs">
                    <h1 class="alt_text">02</h1>
                </div>
            </div>
            <div class="service_info padding_sxs flex_cl gap_xs">
                <h2>DOCUMENTATION</h2>
                <h3 class="font_w500 secondary_font gray_cl">Our documentation services ensure smooth processing of all necessary paperwork for international employment, in full compliance with both Nepalese and destination country regulations.</h3>
                <ul class="service_features secondary_font gray_cl">
                    <li><h4>Visa application assistance</h4></li>
                    <li><h4>Work permit processing</h4></li>
                    <li><h4>Labor approval documentation</h4></li>
                    <li><h4>Medical examination coordination</h4></li>
                    <li><h4>Legal verification and attestation services</h4></li>
                </ul>
            </div>
        </div>
        
        <!-- Service 3 -->
        <div id="deployment" class="service_detail_card reveal-element flex_cl gap_s">
            <div class="service_image w_100 h_35vh pos_rel" style="background-image: url('./resources/images/services/deployment.jpg'); background-size: cover; background-position: center;">
                <div class="overlay w_100 h_100 pos_abs"></div>
                <div class="service_number pos_abs">
                    <h1 class="alt_text">03</h1>
                </div>
            </div>
            <div class="service_info padding_sxs flex_cl gap_xs">
                <h2>DEPLOYMENT</h2>
                <h3 class="font_w500 secondary_font gray_cl">We facilitate the safe and efficient deployment of workers to their overseas employment destinations, ensuring they're well-prepared for their new roles.</h3>
                <ul class="service_features secondary_font gray_cl">
                    <li><h4>Pre-departure orientation and training</h4></li>
                    <li><h4>Cultural adaptation guidance</h4></li>
                    <li><h4>Travel arrangements and coordination</h4></li>
                    <li><h4>Employment contract briefing</h4></li>
                    <li><h4>Post-deployment support and follow-up</h4></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="process_service w_100 padding_s10 flex_c flex_cl padding_ts gap_s">
    <h1 class="title_border reveal-element">OUR PROCESS</h1>
    
    <div class="process_steps_container w_100 mtop_5">
        <div class="process_timeline w_100 pos_rel">
            <!-- Timeline line -->
            <div class="timeline_line pos_abs"></div>
            
            <!-- Step 1 -->
            <div class="process_step reveal-element">
                <div class="step_number flex_c">
                    <h2 class="alt_text">1</h2>
                </div>
                <div class="step_content">
                    <h2>Client Consultation</h2>
                    <h4 class="secondary_font gray_cl">We begin by understanding your specific requirements, including job descriptions, qualifications, and quantity of workers needed.</h4>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="process_step reveal-element">
                <div class="step_number flex_c">
                    <h2 class="alt_text">2</h2>
                </div>
                <div class="step_content">
                    <h2>Candidate Sourcing</h2>
                    <h4 class="secondary_font gray_cl">We advertise positions and utilize our database to identify qualified candidates matching your requirements.</h4>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="process_step reveal-element">
                <div class="step_number flex_c">
                    <h2 class="alt_text">3</h2>
                </div>
                <div class="step_content">
                    <h2>Screening & Selection</h2>
                    <h4 class="secondary_font gray_cl">Candidates undergo interviews, skill tests, and background checks to ensure they meet all requirements.</h4>
                </div>
            </div>
            
            <!-- Step 4 -->
            <div class="process_step reveal-element">
                <div class="step_number flex_c">
                    <h2 class="alt_text">4</h2>
                </div>
                <div class="step_content">
                    <h2>Documentation</h2>
                    <h4 class="secondary_font gray_cl">We process all necessary paperwork, visas, and work permits in compliance with all regulations.</h4>
                </div>
            </div>
            
            <!-- Step 5 -->
            <div class="process_step reveal-element">
                <div class="step_number flex_c">
                    <h2 class="alt_text">5</h2>
                </div>
                <div class="step_content">
                    <h2>Pre-Deployment Preparation</h2>
                    <h4 class="secondary_font gray_cl">Selected candidates receive orientation and training to prepare them for their new roles.</h4>
                </div>
            </div>
            
            <!-- Step 6 -->
            <div class="process_step reveal-element">
                <div class="step_number flex_c">
                    <h2 class="alt_text">6</h2>
                </div>
                <div class="step_content">
                    <h2>Deployment & Follow-up</h2>
                    <h4 class="secondary_font gray_cl">We coordinate travel arrangements and provide ongoing support after deployment.</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact_service align_fs_ss w_100 h_fc padding_s10 flex_c flex_cl padding_ts padding_bs gap_s">
    <h1 class="title_border reveal-element">Request Our Services</h1>
    <h3 class="font_w500 text_ac secondary_font gray_cl reveal-element">Get in touch to discuss how we can fulfill your manpower requirements</h3>
    
    <div class="service_form_container w_100 gap_s mtop_5 flex">
        <div class="service_info_sidebar w_100 reveal-element flex_cl gap_s">
            <h2>Why Choose Us?</h2>
            <div class="service_highlight flex_cl gap_xs">
                <h3 class="secondary_text"><i class="ri-check-line"></i> Licensed & Compliant</h3>
                <h4 class="secondary_font gray_cl">Fully registered with Nepal's Department of Foreign Employment (License No. 672/063/064)</h4>
            </div>
            
            <div class="service_highlight flex_cl gap_xs">
                <h3 class="secondary_text"><i class="ri-check-line"></i> Ethical Recruitment</h3>
                <h4 class="secondary_font gray_cl">We prioritize worker welfare and adhere to ethical recruitment standards</h4>
            </div>
            
            <div class="service_highlight flex_cl gap_xs">
                <h3 class="secondary_text"><i class="ri-check-line"></i> 15+ Years Experience</h3>
                <h4 class="secondary_font gray_cl">Extensive experience in connecting Nepalese workers with global employers</h4>
            </div>
            
            <div class="service_highlight flex_cl gap_xs">
                <h3 class="secondary_text"><i class="ri-check-line"></i> End-to-End Solution</h3>
                <h4 class="secondary_font gray_cl">Comprehensive services from recruitment through deployment</h4>
            </div>
        </div>
        
        <form class="form_holder w_100 reveal-element flex_cl gap_xs">
            <div class="input-group w_100">
                <h3><label for="fullname">Full Name</label></h3><br>
                <input type="text" name="fullname" id="fullname" class="w_100 input secondary_font" placeholder="Enter Your Full Name">
            </div>
            <div class="input-group w_100">
                <h3><label for="phone">Phone Number</label></h3><br>
                <input type="tel" name="phone" id="phone" class="w_100 input secondary_font" placeholder="Enter Your Phone Number">
            </div>
            <div class="input-group w_100">
                <h3><label for="email">Email</label></h3><br>
                <input type="email" name="email" id="email" class="w_100 input secondary_font" placeholder="Enter Your Email">
            </div>
            <div class="input-group w_100">
                <h3><label for="message">Your Message</label></h3><br>
                <textarea name="message" id="message" class="w_100 input secondary_font" placeholder="Enter Your Message" rows="4"></textarea>
            </div>
            <button type="submit" class="primary_button w_100">
                <h3 class="alt_text">Send Message</h3>
            </button>
        </form>
    </div>
</section>
@endsection