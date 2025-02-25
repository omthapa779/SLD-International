<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SLD International</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('./resources/css/specifics.css') }}">
    <link rel="stylesheet" href="{{ asset('./resources/css/style.css') }}">
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
            <a href="/"><h4 class="font_w500">About</h4></a>
            <a href="/"><h4 class="font_w500">Jobs</h4></a>
            <a href="/"><h4 class="font_w500">Process</h4></a>    
            <a href="/"><h4 class="font_w500">Contact</h4></a>
            <button class="open_menu"><h2 class="font_w500"><i class="ri-menu-5-line"></i></h2></button>
        </div>
    </navs>

    @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lenis@1.0.19/dist/lenis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script type="module" src="{{ asset('./resources/js/logic.js') }}"></script>
</html>