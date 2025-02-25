@extends('layouts.navs')
@section('title', 'Home')
@section('content')
<section name="Hero Section" class="hero_section w_100 h_70vh flex_c flex_cl padding_s10 gap_xs">
    <h1 class="text_ac hero_text hero_main_text">Bridging Global Workforce Needs With <span class="secondary_text">Nepal’s Finest Talent!</span></h1>
    <h3 class="font_w500 text_ac secondary_font  gray_cl hero_text hero_subtitle">From skilled professionals to dedicated workers, we connect you with the right manpower for success. Let’s build your dream team today!</h3>
    <div class="button_holder w_100 h_fc flex_c gap_xs">
        <a href="#" class="primary_button"><h4 class="alt_text">Company's Profile</h4></a>
        <a href="#" class="primary_button secondary_button"><h4 class="">Get Started</h4></a>
    </div>
</section>
<section class="destinations w_100 pos_rel overflow_h">
    <!-- The orbital container will be created by JS -->
</section>
<section class="about_us w_100 padding_s10 flex_c flex_cl gap_xs h_fc padding_ts">
    <h1 class="title_border">ABOUT US</h1>
    <h3 class="font_w500 text_ac secondary_font gray_cl hero_text hero_subtitle">S.L.D. International Pvt. Ltd. is a distinguished foreign employment agency based in Kathmandu, Nepal. Established by a group of Nepalese entrepreneurs, the company is dedicated to 
        connecting Nepalese professionals across various sectors with international employers, particularly in the Gulf region and Malaysia. Officially registered with the Department of Foreign 
        Employment under the Government of Nepal's Ministry of Labor and Transport Management (License No. 672/063/064), S.L.D. International upholds a commitment 
        to ethical recruitment practices.</h3>
    <a href="#" class="primary_button"><h4 class="alt_text">Learn More</h4></a>
</section>

<section class="stats w_100 padding_s10 flex_c flex_cl padding_ts padding_bs">
    <h1 class="title_border reveal-element">OUR GLOBAL IMPACT</h1>
    <div class="stats_container mtop_5">
        <div class="stats_box reveal-element">
            <h2>Global Placements</h2>
            <h5 class="gray_cl secondary_font">We've successfully placed skilled Nepalese workers in reputable companies across the Gulf and Malaysia, ensuring safe employment and competitive compensation.</h5>
            <div class="stat_item">
                <div class="counter" data-count="5000">0</div>
                <h5 class="gray_cl secondary_font">Workers Placed</h5>
            </div>
        </div>
        
        <div class="stats_box reveal-element">
            <h2>Client Satisfaction</h2>
            <h5 class="gray_cl secondary_font">Our commitment to quality ensures that both employers and workers find the perfect match through our specialized recruitment services.</h5>
            <div class="stat_item">
                <div class="counter" data-count="98">0</div>
                <h5 class="gray_cl secondary_font">Satisfaction Rate %</h5>
            </div>
        </div>
        
        <div class="stats_box full reveal-element">
            <div class="stat_item">
                <div class="counter" data-count="15">0</div>
                <h5 class="gray_cl secondary_font">Years of Experience</h5>
            </div>
            
            <div class="stat_item">
                <div class="counter" data-count="6">0</div>
                <h5 class="gray_cl secondary_font">Countries Served</h5>
            </div>
            
            <div class="stat_item">
                <div class="counter" data-count="450">0</div>
                <h5 class="gray_cl secondary_font">Partner Companies</h5>
            </div>
            
            <div class="stat_item">
                <div class="counter" data-count="25">0</div>
                <h5 class="gray_cl secondary_font">Industries Covered</h5>
            </div>
        </div>
    </div>
</section>
@endsection