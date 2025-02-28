@extends('layouts.navs')
@section('title', 'Home')
@section('content')
<section name="Hero Section" class="hero_section w_100 h_70vh flex_c flex_cl padding_s10 gap_xs">
    <h1 class="text_ac hero_text hero_main_text">Bridging Global Workforce Needs With <span class="secondary_text">Nepal’s Finest Talent!</span></h1>
    <h3 class="font_w500 text_ac secondary_font  gray_cl hero_text hero_subtitle">From skilled professionals to dedicated workers, we connect you with the right manpower for success. Let’s build your dream team today!</h3>
    <div class="button_holder w_100 h_fc flex_c gap_xs">
        <a href="#" class="primary_button"><h4 class="alt_text">Company's Profile</h4></a>
        <a href="/contact" class="primary_button secondary_button"><h4 class="">Get Started</h4></a>
    </div>
</section>
<section class="destinations w_100 pos_rel overflow_h">
    <!-- The orbital container will be created by JS -->
</section>
<section class="about_us w_100 align_fs_ss padding_s10 flex_c flex_cl gap_xs h_fc padding_ts">
    <h1 class="title_border">ABOUT US</h1>
    <h3 class="font_w500 text_ac text_ac_l secondary_font gray_cl hero_text hero_subtitle">S.L.D. International Pvt. Ltd. is a distinguished foreign employment agency based in Kathmandu, Nepal. Established by a group of Nepalese entrepreneurs, the company is dedicated to 
        connecting Nepalese professionals across various sectors with international employers, particularly in the Gulf region and Malaysia. Officially registered with the Department of Foreign 
        Employment under the Government of Nepal's Ministry of Labor and Transport Management (License No. 672/063/064), S.L.D. International upholds a commitment 
        to ethical recruitment practices.</h3>
    <a href="/about" class="primary_button"><h4 class="alt_text">Learn More</h4></a>
</section>

<section class="stats w_100 padding_s10 flex_c flex_cl padding_ts ">
    <h1 class="title_border reveal-element">OUR GLOBAL IMPACT</h1>
    <div class="stats_container w_100 gap_s mtop_5">
        <div class="stats_box flex_cl flex_c text_ac gap_xs reveal-element">
            <h2>Global Placements</h2>
            <h5 class="gray_cl secondary_font">We've successfully placed skilled Nepalese workers in reputable companies across the Gulf and Malaysia, ensuring safe employment and competitive compensation.</h5>
            <div class="stat_item flex_cl align_c">
                <h1 class="counter" data-count="5000">0</h1>
                <h5 class="gray_cl secondary_font">Workers Placed</h5>
            </div>
        </div>
        
        <div class="stats_box flex_cl flex_c text_ac gap_xs reveal-element">
            <h2>Client Satisfaction</h2>
            <h5 class="gray_cl secondary_font">Our commitment to quality ensures that both employers and workers find the perfect match through our specialized recruitment services.</h5>
            <div class="stat_item flex_cl align_c">
                <h1 class="counter" data-count="98">0</h1>
                <h5 class="gray_cl secondary_font">Satisfaction Rate %</h5>
            </div>
        </div>
        
        <div class="stats_box flex_cl flex_c text_ac gap_xs full justify_sb align_c reveal-element">
            <div class="stat_item flex_cl align_c">
                <h1 class="counter" data-count="15">0</h1>
                <h5 class="gray_cl secondary_font">Years of Experience</h5>
            </div>
            
            <div class="stat_item flex_cl align_c">
                <h1 class="counter" data-count="6">0</h1>
                <h5 class="gray_cl secondary_font">Countries Served</h5>
            </div>
            
            <div class="stat_item flex_cl align_c">
                <h1 class="counter" data-count="450">0<h1>
                <h5 class="gray_cl secondary_font">Partner Companies</h5>
            </div>
            
            <div class="stat_item flex_cl align_c">
                <h1 class="counter" data-count="25">0</h1>
                <h5 class="gray_cl secondary_font">Industries Covered</h5>
            </div>
        </div>
    </div>
</section>

<section class="services align_fs_ss w_100 h_fc padding_s10 flex_c flex_cl padding_ts gap_s">
    <h1 class="title_border reveal-element">OUR SERVICES</h1>

    <div class="service_holder w_100 h_fc flex_cl gap_xs">
        <a href="/services#overseas_recruitment"><div class="service_card w_100 h_25vh reveal-element pos_rel" style="background-image: url('./resources/images/services/overseas_recruitment.jpg')">
            <div class="overlay w_100 h_100 pos_abs"></div>
            <div class="service_content w_100 h_100 flex justify_sb pos_abs align_c padding_sxs">
                <h1 class="mobile_hide alt_text">01</h1>
                <h1 class="alt_text w_100 padding_sxs">OVERSEAS RECRUITMENT</h1>
                <h1 class="mobile_hide alt_text pos_rel">
                    <i class="ri-arrow-right-up-line"></i>
                    <i class="ri-arrow-right-line pos_abs"></i>
                </h1>
            </div>
        </div>
        </a>
        <a href="/services#documentation"><div class="service_card w_100 h_25vh reveal-element pos_rel" style="background-image: url('./resources/images/services/documentation.jpg')">
            <div class="overlay w_100 h_100 pos_abs"></div>
            <div class="service_content w_100 h_100 flex justify_sb pos_abs align_c padding_sxs">
                <h1 class="mobile_hide alt_text">02</h1>
                <h1 class="alt_text w_100 padding_sxs">DOCUMENTATION</h1>
                <h1 class="mobile_hide alt_text pos_rel">
                    <i class="ri-arrow-right-up-line"></i>
                    <i class="ri-arrow-right-line pos_abs"></i>
                </h1>
            </div>
        </div></a>
        <a href="/services#deployment"><div class="service_card w_100 h_25vh reveal-element pos_rel" style="background-image: url('./resources/images/services/deployment.jpg')">
            <div class="overlay w_100 h_100 pos_abs"></div>
            <div class="service_content w_100 h_100 flex justify_sb pos_abs align_c padding_sxs">
                <h1 class="mobile_hide alt_text">03</h1>
                <h1 class="alt_text w_100 padding_sxs">DEPLOYMENT</h1>
                <h1 class="mobile_hide alt_text pos_rel">
                    <i class="ri-arrow-right-up-line"></i>
                    <i class="ri-arrow-right-line pos_abs"></i>
                </h1>
            </div>
        </div></a>
    </div>
</section>
<section class="recruitment_process align_fs_ss w_100 h_fc padding_s10 flex_c flex_cl padding_ts gap_s">
    <h1 class="title_border reveal-element">Recruitment Process</h1>
    
    <div class="process_wrapper w_100 flex_c h_fc">
        <div class="process_container w_100 flex_c pos_rel">
            <!-- Center content -->
            <div class="process_center text_ac pos_abs flex_cl flex_c text_ac">
                <h2 class="process_title secondary_text"></h2>
                <h4 class="process_description gray_cl"></h4>
            </div>
            
            <!-- Process circle will be created by JS -->
            <div class="process_circle pos_rel" id="processCircle"></div>
        </div>
    </div>
</section>
<section class="contact align_fs_ss w_100 h_fc padding_s10 flex_c flex_cl padding_ts padding_bs gap_s">
    <h1 class="title_border reveal-element">Contact</h1>
    <div class="contacts_holder w_100 h_100 flex justify_sb gap_s">
        <div class="map_holder w_100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1765.6865631146893!2d85.33957950509671!3d27.736635127284583!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1740648603299!5m2!1sen!2snp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
