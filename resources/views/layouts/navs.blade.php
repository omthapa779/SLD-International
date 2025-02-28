<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SLD International</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('./resources/css/specifics.css') }}">
    <link rel="stylesheet" href="{{ asset('./resources/css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css">
</head>
<body>
    <div class="main_container flex_cl">
    <div class="govt_lic w_100 h_5vh padding_s10 flex justify_sb align_c">
        <h5 class="font_w500 alt_text">Govt. Lic No. : 672/063/64</h5>
        <div class="socials_holder h_100 flex align_c gap_xs">
            <h4 class="alt_text font_w500"><i class="ri-facebook-circle-fill"></i></h4>
            <h4 class="alt_text font_w500"><i class="ri-whatsapp-fill"></i></h4>
            <h4 class="alt_text font_w500"><i class="ri-tiktok-fill"></i></h4>
        </div>
    </div>
    <navs class="navbar w_100 padding_s10 mtop_2s flex justify_sb align_c">
        <div class="logo_holder h_100 flex align_c gap_xs">
            <img src="{{ asset('./resources/images/logo.png') }}" alt="Logo of SLD international" class="logo h_100">
            <div class="logo_text_holder flex_cl justify_c h_100">
                <h2 class="primary_font line_h70">SLD</h2>
                <h3 class="primary_font">International</h3>
             </div>
            </div>
        <div class="nav_links h_100 flex align_c gap_s">
            <a href="/"><h4 class="font_w500">Home</h4></a>
            <a href="/about"><h4 class="font_w500">About</h4></a>
            <a href="/countries"><h4 class="font_w500">Countries</h4></a>
            <a href="/services"><h4 class="font_w500">Services</h4></a>    
            <a href="/contact"><h4 class="font_w500">Contact</h4></a>
            <button class="open_menu"><h2 class="font_w500"><i class="ri-menu-5-line"></i></h2></button>
        </div>
    </navs>
    <!-- Mobile Navigation -->
<div class="mobile_nav pos_fixed z_1000 d_none">
    <div class="mobile_nav_container flex_cl w_100 h_100 padding_s10">
        <div class="mobile_nav_top w_100 h_10vh flex justify_sb align_c">
            <div class="logo_holder_nav h_100">
            <img src="{{ asset('./resources/images/logo.png') }}" alt="Logo of SLD international" class="logo_nav h_100">
            </div>
            <button class="close_menu"><h2 class="font_w500 alt_text" style=""><i class="ri-close-line"></i></h2></button>
        </div>
        
        <div class="mobile_nav_links flex_cl justify_c align_c h_100 gap_s">
            <a href="/" class="mobile_nav_link"><h2 class="alt_text font_w500">Home</h2></a>
            <a href="/about" class="mobile_nav_link"><h2 class="alt_text font_w500">About</h2></a>
            <a href="/countries" class="mobile_nav_link"><h2 class="alt_text font_w500">Countries</h2></a>
            <a href="/services" class="mobile_nav_link"><h2 class="alt_text font_w500">Services</h2></a>    
            <a href="/contact" class="mobile_nav_link"><h2 class="alt_text font_w500">Contact</h2></a>
        </div>
        
        <div class="mobile_nav_socials flex justify_c align_c gap_s">
            <a href="#" class="mobile_social flex_c"><i class="ri-facebook-fill"></i></a>
            <a href="#" class="mobile_social flex_c"><i class="ri-instagram-line"></i></a>
            <a href="#" class="mobile_social flex_c"><i class="ri-linkedin-fill"></i></a>
            <a href="#" class="mobile_social flex_c"><i class="ri-whatsapp-line"></i></a>
            <a href="#" class="mobile_social flex_c"><i class="ri-tiktok-line"></i></a>
        </div>
    </div>
</div>

    @yield('content')
    <footer class="footer w_100 padding_s10 padding_bs flex_cl gap_s">
    <div class="footer_top w_100 flex justify_sb gap_s">
        <!-- Company Info -->
        <div class="footer_col flex_cl gap_xs">
            <div class="footer_logo flex align_c gap_xs">
                <img src="{{ asset('./resources/images/logo.png') }}" alt="SLD International Logo" class="footer_logo_img">
                <div class="logo_text_holder flex_cl justify_c">
                    <h2 class="alt_text line_h70">SLD</h2>
                    <h3 class="alt_text">International</h3>
                </div>
            </div>
            <h5 class="alt_text secondary_font font_w500">Bridging Global Workforce Needs With Nepal's Finest Talent!</h5>
            <div class="footer_socials flex gap_xs">
                <h3 class="font_w500"><a href="#" class="social_icon flex_c"><i class="ri-facebook-fill"></i></a></h3>
                <h3 class="font_w500"><a href="#" class="social_icon flex_c"><i class="ri-instagram-line"></i></a></h3>
                <h3 class="font_w500"><a href="#" class="social_icon flex_c"><i class="ri-linkedin-fill"></i></a></h3>
                <h3 class="font_w500"><a href="#" class="social_icon flex_c"><i class="ri-whatsapp-line"></i></a></h3>
                <h3 class="font_w500"><a href="#" class="social_icon flex_c"><i class="ri-tiktok-line"></i></a></h3>
            </div>
        </div>
        
        <!-- Quick Links -->
        <div class="footer_col flex_cl gap_xs">
            <h3 class="alt_text footer_title">Quick Links</h3>
            <ul class="footer_links flex_cl gap_xs">
                <li><h4 class="font_w500"><a href="/" class="footer_link"><i class="ri-arrow-right-s-line"></i> Home</a></h4></li>
                <li><h4 class="font_w500"><a href="/about" class="footer_link"><i class="ri-arrow-right-s-line"></i> About Us</a></h4></li>
                <li><h4 class="font_w500"><a href="/services" class="footer_link"><i class="ri-arrow-right-s-line"></i> Services</a></h4></li>
                <li><h4 class="font_w500"><a href="/countries" class="footer_link"><i class="ri-arrow-right-s-line"></i> Countries</a></h4></li>
                <li><h4 class="font_w500"><a href="/contact" class="footer_link"><i class="ri-arrow-right-s-line"></i> Contact Us</a></h4></li>
            </ul>
        </div>
        
        <!-- Services -->
        <div class="footer_col flex_cl gap_xs">
            <h3 class="alt_text footer_title">Our Services</h3>
            <ul class="footer_links flex_cl gap_xs">
                <li><h4 class="font_w500"><a href="/services#overseas_recruitment" class="footer_link"><i class="ri-arrow-right-s-line"></i> Overseas Recruitment</a></h4></li>
                <li><h4 class="font_w500"><a href="/services#documentation" class="footer_link"><i class="ri-arrow-right-s-line"></i> Documentation</a></h4></li>
                <li><h4 class="font_w500"><a href="/services#deployment" class="footer_link"><i class="ri-arrow-right-s-line"></i> Deployment</a></h4></li>
            </ul>
        </div>
        
        <!-- Contact Info -->
        <div class="footer_col flex_cl gap_xs">
            <h3 class="alt_text footer_title">Contact Us</h3>
            <ul class="footer_contact flex_cl gap_xs">
                <li class="contact_item flex align_c gap_xs">
                    <i class="ri-map-pin-2-fill contact_icon"></i>
                    <h5 class="alt_text secondary_font font_w500">Kathmandu, Nepal</h5>
                </li>
                <li class="contact_item flex align_c gap_xs">
                    <i class="ri-phone-fill contact_icon"></i>
                    <h5 class="alt_text secondary_font font_w500">+977-01-4123456</h5>
                </li>
                <li class="contact_item flex align_c gap_xs">
                    <i class="ri-mail-fill contact_icon"></i>
                    <h5 class="alt_text secondary_font font_w500">info@sldinternational.com</h5>
                </li>
                <li class="contact_item flex align_c gap_xs">
                    <i class="ri-time-fill contact_icon"></i>
                    <h5 class="alt_text secondary_font font_w500">Sun - Fri: 9:00 AM - 5:00 PM</h5>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="footer_divider w_100"></div>
    
    <div class="footer_bottom w_100 flex justify_sb align_c">
        <h5 class="alt_text secondary_font">© 2025 SLD International Pvt. Ltd. All Rights Reserved.</h5>
        <h5 class="alt_text secondary_font">Designed by <a href="https://tilasmi.co" class="tilasmi_link" target="_blank">Tilasmi <i class="ri-external-link-line"></i></a></h5>
    </div>
    
    <!-- Back to top button -->
    <button id="backToTop" class="back_to_top flex_c">
        <i class="ri-arrow-up-line"></i>
    </button>
</footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lenis@1.0.19/dist/lenis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script type="module" src="{{ asset('./resources/js/logic.js') }}"></script>
<script src="{{ asset('./resources/js/contact-form.js') }}"></script>
</html>