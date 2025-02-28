@extends('layouts.navs')
@section('title', 'About')
@section('content')

<!-- Hero Section -->
<section class="about_hero w_100 h_50vh flex_c flex_cl padding_s10 gap_xs pos_rel">
    <div class="hero_content text_ac">
        <h1>About <span class="secondary_text">SLD International</span></h1>
        <h3 class="font_w500 secondary_font">Your Trusted Partner in Global Recruitment Since 2008</h3>
    </div>
</section>

<!-- About Us Section -->
<section class="about_company w_100 padding_s10 flex justify_sb align_c padding_ts gap_s">
    <div class="about_content w_50vw flex_cl gap_xs reveal-element">
        <h1 class="title_border text_ac">OUR COMPANY</h1>
        <h3 class="font_w500 secondary_font gray_cl">
            S.L.D. International Pvt. Ltd. is a distinguished foreign employment agency based in Kathmandu, Nepal. Established by a group of Nepalese entrepreneurs, the company is dedicated to connecting Nepalese professionals across various sectors with international employers, particularly in the Gulf region and Malaysia.
        </h3>
        <h3 class="font_w500 secondary_font gray_cl">
            Officially registered with the Department of Foreign Employment under the Government of Nepal's Ministry of Labor and Transport Management (License No. 672/063/064), S.L.D. International upholds a commitment to ethical recruitment practices.
        </h3>
        <h3 class="font_w500 secondary_font gray_cl">
            With over 15 years of experience, we have successfully placed more than 5,000 workers in reputable companies across 6 countries, maintaining a remarkable 98% satisfaction rate among both employers and employees.
        </h3>
    </div>
    <div class="about_image w_40vw reveal-element">
        <img src="{{ asset('./resources/images/about/company.jpg') }}" alt="SLD International Office" class="about_img w_100">
    </div>
</section>

<!-- Mission & Values Section -->
<section class="mission_values w_100 padding_s10 padding_ts">
    <div class="mission_section w_100 flex justify_sb align_c gap_s">
        <div class="mission_image w_40vw reveal-element">
            <img src="{{ asset('./resources/images/about/mission.jpg') }}" alt="Our Mission" class="mission_img w_100">
        </div>
        <div class="mission_content w_50vw flex_cl gap_xs reveal-element">
            <h1 class="title_border text_ac">OUR MISSION</h1>
            <h3 class="font_w500 secondary_font gray_cl">
                To bridge the gap between Nepalese talent and global employment opportunities through ethical recruitment practices, ensuring beneficial outcomes for both employers and employees.
            </h3>
            <h3 class="font_w500 secondary_font gray_cl">
                We strive to enhance the social and economic well-being of Nepalese workers by providing them with dignified employment opportunities abroad while helping international employers access a reliable and skilled workforce.
            </h3>
        </div>
    </div>
    
    <div class="values_section w_100 padding_ts flex_cl gap_s">
        <h1 class="title_border text_ac reveal-element">OUR VALUES</h1>
        <div class="values_container w_100 flex justify_sb gap_s mtop_5">
            <div class="value_card flex_cl gap_xs reveal-element">
                <div class="value_icon flex_c">
                    <i class="ri-hand-heart-line"></i>
                </div>
                <h2 class="text_ac">Integrity</h2>
                <h4 class="gray_cl secondary_font text_ac">
                    We conduct our business with the highest ethical standards, ensuring transparency in all our dealings with clients, candidates, and partners.
                </h4>
            </div>
            
            <div class="value_card flex_cl gap_xs reveal-element">
                <div class="value_icon flex_c">
                    <i class="ri-user-heart-line"></i>
                </div>
                <h2 class="text_ac">Human-Centered</h2>
                <h4 class="gray_cl secondary_font text_ac">
                    We prioritize the well-being, dignity, and rights of the workers we place, ensuring they work in safe environments with fair compensation.
                </h4>
            </div>
            
            <div class="value_card flex_cl gap_xs reveal-element">
                <div class="value_icon flex_c">
                    <i class="ri-medal-line"></i>
                </div>
                <h2 class="text_ac">Excellence</h2>
                <h4 class="gray_cl secondary_font text_ac">
                    We are committed to delivering exceptional service quality through continuous improvement and innovation in our recruitment processes.
                </h4>
            </div>
            
            <div class="value_card flex_cl gap_xs reveal-element">
                <div class="value_icon flex_c">
                    <i class="ri-team-line"></i>
                </div>
                <h2 class="text_ac">Partnership</h2>
                <h4 class="gray_cl secondary_font text_ac">
                    We build lasting relationships with our clients and candidates based on mutual trust, respect, and shared success.
                </h4>
            </div>
        </div>
    </div>
</section>

<!-- Founder's Message Section -->
<section class="founder_message w_100 padding_s10 padding_ts gap_s">
    <div class="message_container w_100 flex justify_sb align_c gap_s">
        <div class="founder_image w_40vw reveal-element">
            <img src="{{ asset('./resources/images/about/founder.jpg') }}" alt="Founder of SLD International" class="founder_img w_100">
        </div>
        <div class="message_content w_50vw flex_cl gap_xs reveal-element">
            <h1 class="title_border">MESSAGE FROM THE FOUNDER</h1>
            <div class="quote w_100">
                <h3 class="font_w500 secondary_font gray_cl quote_text">
                    <i class="ri-double-quotes-l quote_icon_left"></i>
                    Our journey began with a simple vision: to create opportunities for Nepalese workers to showcase their skills on the global stage while helping international businesses find the dedicated talent they need to thrive.
                </h3>
                <h3 class="font_w500 secondary_font gray_cl quote_text mtop_2s">
                    Over the years, we've remained committed to ethical recruitment practices, ensuring that each placement represents a win-win situation for both employers and employees. Our success is measured not just in numbers but in the thousands of lives we've helped transform through meaningful employment opportunities.
                    <i class="ri-double-quotes-r quote_icon_right"></i>
                </h3>
            </div>
            <div class="founder_info flex gap_xs mtop_2s">
                <h2>Rajesh Sharma</h2>
                <h3 class="secondary_text">Founder & Chairman</h3>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<!-- Team Section -->
<section class="team w_100 padding_s10 padding_ts padding_bs gap_s">
    <h1 class="title_border text_ac reveal-element">OUR LEADERSHIP TEAM</h1>
    <h3 class="font_w500 secondary_font gray_cl text_ac mtop_2s reveal-element">
        Meet the dedicated professionals who drive our mission forward, bringing years of industry expertise and a shared commitment to ethical recruitment practices.
    </h3>
    
    <div class="team_container w_100 flex justify_sb gap_s mtop_5">
        <!-- Team Member 1 -->
        <div class="team_card reveal-element">
            <div class="team_img_holder">
                <img src="https://images.pexels.com/photos/26692095/pexels-photo-26692095/free-photo-of-a-businesswoman-sitting-at-the-desk.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Team Member" class="team_img w_100">
                <div class="team_overlay flex_c">
                    <h2 class="team_name alt_text">Anita Gurung</h2>
                    <h3 class="alt_text font_w500">Managing Director</h3>
                </div>
            </div>
        </div>
        
        <!-- Team Member 2 -->
        <div class="team_card reveal-element">
            <div class="team_img_holder">
                <img src="https://images.pexels.com/photos/17049768/pexels-photo-17049768/free-photo-of-businessman-with-clenched-fist.jpeg" alt="Team Member" class="team_img w_100">
                <div class="team_overlay flex_c">
                    <h2 class="team_name alt_text">Sunil Thapa</h2>
                    <h3 class="alt_text font_w500">Head of Recruitment</h3>
                </div>
            </div>
        </div>
        
        <!-- Team Member 3 -->
        <div class="team_card reveal-element">
            <div class="team_img_holder">
                <img src="https://images.pexels.com/photos/5466267/pexels-photo-5466267.jpeg" alt="Team Member" class="team_img w_100">
                <div class="team_overlay flex_c">
                    <h2 class="team_name alt_text">Priya Shrestha</h2>
                    <h3 class="alt_text font_w500">Client Relations Manager</h3>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection