@extends('layouts.navs')
@section('title', 'Contact Us')
@section('content')
<section class="hero_section w_100 h_30vh flex_c pos_rel mtop_2s flex_cl padding_s10 gap_xs" >
        <h1 class="text_ac hero_text hero_main_text ">Contact Us</span></h1>
    <h3 class="font_w500 text_ac secondary_font  hero_text hero_subtitle">We're here to answer your questions and address your needs</h3>
</section>

<section class="contact_info w_100 h_fc padding_s10 flex_cl align_c  padding_ts gap_s">
    <h1 class="title_border">REACH US</h1>
    
    <div class="contact_cards w_100 grid_container gap_s">
        <!-- Office Address -->
        <div class="contact_card flex_cl align_c gap_xs">
            <div class="icon_circle flex_c">
                <i class="ri-map-pin-fill"></i>
            </div>
            <h2>Our Office</h2>
            <p class="gray_cl secondary_font text_ac">Chabahil, Kathmandu, Nepal</p>
            <p class="gray_cl secondary_font text_ac">Near Chabahil Chowk</p>
        </div>
        
        <!-- Phone -->
        <div class="contact_card flex_cl align_c gap_xs">
            <div class="icon_circle flex_c">
                <i class="ri-phone-fill"></i>
            </div>
            <h2>Phone</h2>
            <p class="gray_cl secondary_font text_ac">+977-1-4469012</p>
            <p class="gray_cl secondary_font text_ac">+977-1-4469013</p>
        </div>
        
        <!-- Email -->
        <div class="contact_card flex_cl align_c gap_xs">
            <div class="icon_circle flex_c">
                <i class="ri-mail-fill"></i>
            </div>
            <h2>Email</h2>
            <p class="gray_cl secondary_font text_ac">info@sldinternational.com.np</p>
            <p class="gray_cl secondary_font text_ac">hr@sldinternational.com.np</p>
        </div>
        
        <!-- Working Hours -->
        <div class="contact_card flex_cl align_c gap_xs">
            <div class="icon_circle flex_c">
                <i class="ri-time-fill"></i>
            </div>
            <h2>Working Hours</h2>
            <p class="gray_cl secondary_font text_ac">Sunday - Friday: 9AM - 5PM</p>
            <p class="gray_cl secondary_font text_ac">Saturday: Closed</p>
        </div>
    </div>
</section>

<section class="contact align_fs_ss w_100 h_fc padding_s10 flex_c flex_cl padding_ts padding_bs gap_s">
    <h1 class="title_border">GET IN TOUCH</h1>
    <h3 class="font_w500 secondary_font gray_cl hero_text hero_subtitle">Fill out the form below and we'll get back to you as soon as possible</h3>
    
    <div class="contacts_holder w_100 h_100 flex justify_sb gap_s">
        <div class="map_holder w_100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1765.6865631146893!2d85.33957950509671!3d27.736635127284583!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1740648603299!5m2!1sen!2snp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <form class="form_holder w_100 flex_cl gap_xs">
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
                <h3><label for="subject">Subject</label></h3><br>
                <input type="text" name="subject" id="subject" class="w_100 input secondary_font" placeholder="Enter Subject">
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

<section class="cta_section w_100 h_fc padding_s10 flex_c flex_cl padding_bs gap_xs">
    <h1 class="text_ac">Ready to Partner with Us?</h1>
    <h3 class="font_w500 text_ac secondary_font gray_cl">Let's collaborate to find the right talent for your business needs</h3>
    <div class="button_holder w_100 h_fc flex_c gap_xs">
        <a href="/about" class="primary_button"><h4 class="alt_text">Learn About Us</h4></a>
        <a href="/services" class="primary_button secondary_button"><h4 class="">Our Services</h4></a>
    </div>
</section>
@endsection