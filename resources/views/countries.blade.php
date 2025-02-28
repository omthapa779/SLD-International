@extends('layouts.navs')
@section('title', 'Countries')
@section('content')
<section class="countries_hero w_100 h_50vh flex_c flex_cl padding_s10 gap_xs">
    <h1 class="text_ac hero_text hero_main_text reveal-element">Explore Our <span class="secondary_text">Global Destinations</span></h1>
    <h3 class="font_w500 text_ac secondary_font gray_cl hero_text hero_subtitle reveal-element">Discover the nations where we connect Nepalese talent with leading employers around the world.</h3>
</section>

<section class="countries_grid w_100 padding_s10 flex_c flex_cl padding_ts padding_bs gap_s">
    <h1 class="title_border reveal-element">OUR DESTINATIONS</h1>
    
    <div class="countries_container w_100 gap_s mtop_5">
        <!-- Country Cards -->
        <a href="/countries/qatar" class="country_card reveal-element">
            <div class="country_image w_100 h_25vh pos_rel" style="background-image: url('./resources/images/destinations/qatar.jpg'); background-size: cover; background-position: center;">
                <div class="overlay_country w_100 h_100 pos_abs"></div>
                <div class="country_content w_100 h_100 flex_c pos_abs">
                    <h2 class="alt_text text_ac">Qatar</h2>
                </div>
            </div>
        </a>
        
        <a href="/countries/uae" class="country_card reveal-element">
            <div class="country_image w_100 h_25vh pos_rel" style="background-image: url('./resources/images/destinations/uae.jpg'); background-size: cover; background-position: center;">
                <div class="overlay_country w_100 h_100 pos_abs"></div>
                <div class="country_content w_100 h_100 flex_c pos_abs">
                    <h2 class="alt_text text_ac">United Arab Emirates</h2>
                </div>
            </div>
        </a>
        
        <a href="/countries/kuwait" class="country_card reveal-element">
            <div class="country_image w_100 h_25vh pos_rel" style="background-image: url('./resources/images/destinations/kuwait.jpg'); background-size: cover; background-position: center;">
                <div class="overlay_country w_100 h_100 pos_abs"></div>
                <div class="country_content w_100 h_100 flex_c pos_abs">
                    <h2 class="alt_text text_ac">Kuwait</h2>
                </div>
            </div>
        </a>        
        <a href="/countries/malaysia" class="country_card reveal-element">
            <div class="country_image w_100 h_25vh pos_rel" style="background-image: url('./resources/images/destinations/malaysia.jpg'); background-size: cover; background-position: center;">
                <div class="overlay_country w_100 h_100 pos_abs"></div>
                <div class="country_content w_100 h_100 flex_c pos_abs">
                    <h2 class="alt_text text_ac">Malaysia</h2>
                </div>
            </div>
        </a>
    </div>
</section>

<section class="contact_country align_fs_ss w_100 h_fc padding_s10 flex_c flex_cl padding_ts padding_bs gap_s">
    <h1 class="title_border reveal-element">Interested in Our Services?</h1>
    <h3 class="font_w500 text_ac secondary_font gray_cl reveal-element">Contact us today to discuss your manpower needs for any of these destinations</h3>
    <div class="button_holder w_100 h_fc flex_c gap_xs reveal-element">
        <a href="/contact" class="primary_button"><h4 class="alt_text">Get In Touch</h4></a>
    </div>
</section>
@endsection