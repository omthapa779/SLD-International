// logic.js
document.addEventListener('DOMContentLoaded', () => {
    // Select all elements that need animation
    const logoHolder = document.querySelector('.logo_holder');
    const navLinks = document.querySelectorAll('.nav_links a');
    const heroTitle = document.querySelector('.hero_section h1');
    const heroSubtitle = document.querySelector('.hero_section h3');
    const buttonHolder = document.querySelector('.button_holder');
    
    // Initially hide elements
    [logoHolder, heroTitle, heroSubtitle, buttonHolder].forEach(element => {
        if (element) {  // Check if element exists
            element.style.opacity = '0';
            element.style.transform = 'translateY(5vh)';
            element.style.filter = 'blur(0.7vw)';
        }
    });

    navLinks.forEach(link => {
        link.style.opacity = '0';
        link.style.transform = 'translateY(5vh)';
        link.style.filter = 'blur(0.7vw)';
    });

    // Create loading screen
    const loadingScreen = document.createElement('div');
    loadingScreen.className = 'loading_screen';
    
    loadingScreen.innerHTML = `
        <div class="loading_content w_40vw text_ac pos_rel">
            <img src="${window.location.origin}/resources/images/logo.png" alt="SLD Logo" class="loading_logo">
            <div class="loading_bar_container">
                <div class="loading_bar"></div>
            </div>
            <h3 class="loading_text">Connecting Global Opportunities...</h3>
        </div>
    `;
    
    document.body.appendChild(loadingScreen);

    // Initialize loading
    let progress = 0;
    const loadingBar = loadingScreen.querySelector('.loading_bar');
    
    const loadingInterval = setInterval(() => {
        progress += Math.random() * 2;
        if (progress > 100) {
            progress = 100;
            clearInterval(loadingInterval);
            setTimeout(startRevealSequence, 500);
        }
        loadingBar.style.width = `${progress}%`;
    }, 30);

    function startRevealSequence() {
        // Fade out loading screen
        loadingScreen.style.opacity = '0';
        
        setTimeout(() => {
            loadingScreen.remove();
            
            // Reveal logo
            revealElement(logoHolder, 0);
            
            // Reveal nav links with delay
            navLinks.forEach((link, index) => {
                revealElement(link, 200 + (index * 100));
            });

            // Reveal hero section elements with delay
            revealElement(heroTitle, 800);
            revealElement(heroSubtitle, 1000);
            
            // Reveal button holder with buttons
            revealElement(buttonHolder, 1200);
        }, 800);
    }

    function revealElement(element, delay) {
        if (!element) return;  // Guard clause for null elements
        
        setTimeout(() => {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
            element.style.filter = 'blur(0)';
        }, delay);
    }

    // Preload images
    const imagesToPreload = [
        '/resources/images/logo.png'
    ];

    Promise.all(imagesToPreload.map(src => {
        return new Promise((resolve, reject) => {
            const img = new Image();
            img.src = src;
            img.onload = resolve;
            img.onerror = reject;
        });
    })).catch(error => {
        console.error('Error preloading images:', error);
    });
});