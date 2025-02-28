// logic.js

// Back to top button functionality
function initBackToTop() {
    const backToTopButton = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });
    
    backToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Footer links hover animation with GSAP
function initFooterAnimations() {
    if (typeof gsap !== 'undefined') {
        const footerLinks = document.querySelectorAll('.footer_link');
        
        footerLinks.forEach(link => {
            link.addEventListener('mouseenter', () => {
                gsap.to(link.querySelector('i'), {
                    x: 5,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
            
            link.addEventListener('mouseleave', () => {
                gsap.to(link.querySelector('i'), {
                    x: 0,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
        });
    }
}

// Initialize all footer functionalities
function initFooter() {
    initBackToTop();
    initNewsletterForm();
    initFooterAnimations();
}

//Recruitment Process Circle with better responsiveness
function initRecruitmentProcess() {
    const processSteps = [
        { id: 1, title: "DOFE", description: "DOFE Approval", icon: "ri-government-line" },
        { id: 2, title: "Sourcing", description: "Advertisement, interview & selection", icon: "ri-search-line" },
        { id: 3, title: "Medicals", description: "Medicals & Documentations", icon: "ri-medicine-bottle-line" },
        { id: 4, title: "VISA", description: "VISA Processing", icon: "ri-passport-line" },
        { id: 5, title: "Orientation", description: "Welfare & Orientation", icon: "ri-group-line" },
        { id: 6, title: "Final Labour", description: "Final Labour Approval : DOFE", icon: "ri-file-list-3-line" },
        { id: 7, title: "Pre-Departure", description: "Pre-Departure Orientation", icon: "ri-flight-takeoff-line" },
        { id: 8, title: "Departure", description: "Departure & Clearance", icon: "ri-plane-line" },
        { id: 9, title: "Feedback", description: "Feedback", icon: "ri-feedback-line" }
    ];
    
    const processCircle = document.getElementById('processCircle');
    const processTitle = document.querySelector('.process_title');
    const processDescription = document.querySelector('.process_description');
    
    let activeIndex = 0;
    let previousIndex = 0;
    let autoplayInterval;
    
    // Create SVG path for the circle
    function createCirclePath() {
        const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        svg.setAttribute("class", "process_path");
        svg.setAttribute("viewBox", "0 0 500 500");
        
        const circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
        circle.setAttribute("cx", "250");
        circle.setAttribute("cy", "250");
        circle.setAttribute("r", "230");
        
        svg.appendChild(circle);
        processCircle.appendChild(svg);
    }
    
    // Create process items and position them around the circle
    function createProcessItems() {
        const totalSteps = processSteps.length;
        
        processSteps.forEach((step, index) => {
            // Calculate position on the circle
            const angle = (index * (2 * Math.PI / totalSteps)) - Math.PI/2; // Start from top
            
            // Create item element
            const itemElement = document.createElement('div');
            itemElement.className = 'process_item';
            itemElement.dataset.index = index;
            itemElement.dataset.angle = angle;
            itemElement.innerHTML = `
                <i class="${step.icon}"></i>
                <span>${String(step.id).padStart(2, '0')}</span>
            `;
            
            // Add click event
            itemElement.addEventListener('click', () => {
                const clickedIndex = parseInt(itemElement.dataset.index);
                animateToStep(clickedIndex);
                clearInterval(autoplayInterval);
                autoplayInterval = setInterval(nextStep, 4000);
            });
            
            processCircle.appendChild(itemElement);
        });
    }
    
    // Position items around the circle - IMPROVED FOR RESPONSIVENESS
    // Position items around the circle - IMPROVED FOR RESPONSIVENESS
function positionItems() {
    const items = document.querySelectorAll('.process_item');
    const circleWidth = processCircle.offsetWidth;
    const circleHeight = processCircle.offsetHeight;
    
    // Use the smaller of width/height to ensure circle fits
    const circleSize = Math.min(circleWidth, circleHeight);
    
    // Dynamic radius based on actual circle size (46% of radius)
    const radius = circleSize * 0.46;
    
    items.forEach(item => {
        const angle = parseFloat(item.dataset.angle);
        const x = Math.cos(angle) * radius;
        const y = Math.sin(angle) * radius;
        
        // Center the item at calculated position
        // Use percentage positioning instead of calc with px
        const centerX = 50; // percent
        const centerY = 50; // percent
        
        const xPosition = centerX + (x / circleSize * 100);
        const yPosition = centerY + (y / circleSize * 100);
        
        item.style.left = `${xPosition}%`;
        item.style.top = `${yPosition}%`;
    });
}
    
    // Animate transition to a specific step
    function animateToStep(targetIndex) {
        // Store previous index
        previousIndex = activeIndex;
        activeIndex = targetIndex;
        
        // Determine direction (clockwise or counterclockwise)
        const totalSteps = processSteps.length;
        let clockwiseDistance = (activeIndex - previousIndex + totalSteps) % totalSteps;
        let counterclockwiseDistance = (previousIndex - activeIndex + totalSteps) % totalSteps;
        
        // Choose the shortest path
        const goClockwise = clockwiseDistance <= counterclockwiseDistance;
        
        // Get all steps
        const items = document.querySelectorAll('.process_item');
        
        // First, remove active class from all
        items.forEach(item => item.classList.remove('active', 'highlight'));
        
        // Set active class for target
        items[activeIndex].classList.add('active');
        
        // Add animation classes for sequential effect
        if (previousIndex !== activeIndex) {
            const animationDuration = 400; // in ms
            const stepDelay = 150; // in ms
            
            if (goClockwise) {
                let currentIndex = previousIndex;
                let delay = 0;
                
                while (currentIndex !== activeIndex) {
                    currentIndex = (currentIndex + 1) % totalSteps;
                    
                    setTimeout((index) => {
                        items[index].classList.add('highlight');
                        setTimeout(() => {
                            items[index].classList.remove('highlight');
                        }, animationDuration);
                    }, delay, currentIndex);
                    
                    delay += stepDelay;
                }
            } else {
                let currentIndex = previousIndex;
                let delay = 0;
                
                while (currentIndex !== activeIndex) {
                    currentIndex = (currentIndex - 1 + totalSteps) % totalSteps;
                    
                    setTimeout((index) => {
                        items[index].classList.add('highlight');
                        setTimeout(() => {
                            items[index].classList.remove('highlight');
                        }, animationDuration);
                    }, delay, currentIndex);
                    
                    delay += stepDelay;
                }
            }
        }
        
        // Update center content with longer titles handling
        const step = processSteps[activeIndex];
        processTitle.textContent = `${String(step.id).padStart(2, '0')} ${step.title}`;
        processDescription.textContent = step.description;
        
        // Handle text overflow for small screens
        if (window.innerWidth <= 699) {
            // If title is too long, reduce font size on mobile
            const titleLength = processTitle.textContent.length;
            if (titleLength > 15) {
                processTitle.style.fontSize = "4vw";
            } else {
                processTitle.style.fontSize = ""; // Reset to default
            }
        } else {
            processTitle.style.fontSize = ""; // Reset to default
        }
    }
    
    // Go to next step
    function nextStep() {
        const nextIndex = (activeIndex + 1) % processSteps.length;
        animateToStep(nextIndex);
    }
    
    // Initialize
    function init() {
        createCirclePath();
        createProcessItems();
        positionItems();
        
        // Set initial active step
        animateToStep(0);
        
        // Start autoplay
        autoplayInterval = setInterval(nextStep, 4000);
        
        // Handle window resize
        window.addEventListener('resize', () => {
            positionItems();
            // Re-apply active state to update text size
            animateToStep(activeIndex);
        });
        
        // Intersection Observer for animation when in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    processCircle.style.opacity = 1;
                }
            });
        }, { threshold: 0.3 });
        
        observer.observe(processCircle);
    }
    
    init();
}
function initDestinationsCarousel() {
    // JSON data inline
    const destinationsData = {
        "destinations": [
            {
                "country": "Qatar",
                "image": "qatar.jpg",
                "alt": "Workers in Qatar"
            },
            {
                "country": "UAE",
                "image": "uae.jpg",
                "alt": "Dubai skyline"
            },
            {
                "country": "Malaysia",
                "image": "malaysia.jpg",
                "alt": "Malaysian landscape"
            },
            {
                "country": "Saudi Arabia",
                "image": "saudi-arabia.jpg",
                "alt": "Saudi Arabia landmarks"
            },
            {
                "country": "Kuwait",
                "image": "kuwait.jpg",
                "alt": "Kuwait city"
            },
            {
                "country": "Oman",
                "image": "oman.jpg",
                "alt": "Oman landscapes"
            }
        ]
    };

    // Get destinations section element
    const destinationsSection = document.querySelector('.destinations');
    
    // Create carousel container
    const carouselContainer = document.createElement('div');
    carouselContainer.className = 'destinations-container';
    destinationsSection.appendChild(carouselContainer);
    
    // Create track for cards to move along
    const track = document.createElement('div');
    track.className = 'destinations-track';
    carouselContainer.appendChild(track);
    
    // Create destination cards with loaded images
    const preloadAndCreateCard = (dest, index, totalCards) => {
        return new Promise((resolve) => {
            const card = document.createElement('div');
            card.className = 'destination-card';
            card.id = `card-${index}`;
            
            const img = document.createElement('img');
            img.src = `./resources/images/destinations/${dest.image}`;
            img.alt = dest.alt;
            
            // When image loads, resolve the promise with the card
            img.onload = () => {
                const overlay = document.createElement('div');
                overlay.className = 'overlay';
                
                const countryName = document.createElement('h4');
                countryName.className = 'country-name';
                countryName.textContent = dest.country;
                
                overlay.appendChild(countryName);
                card.appendChild(img);
                card.appendChild(overlay);
                
                resolve(card);
            };
            
            // Fallback in case image fails to load
            img.onerror = () => {
                console.error(`Failed to load image: ${dest.image}`);
                const overlay = document.createElement('div');
                overlay.className = 'overlay';
                
                const countryName = document.createElement('h4');
                countryName.className = 'country-name';
                countryName.textContent = dest.country;
                
                overlay.appendChild(countryName);
                card.appendChild(document.createElement('div')); // Empty div as placeholder
                card.appendChild(overlay);
                
                resolve(card);
            };
        });
    };
    
    // Animation and state variables
    let position = 0;
    const cardWidth = window.innerWidth > 999 ? 25 : window.innerWidth > 699 ? 42 : 72; // in vw units (including margin)
    const originalDestinations = [...destinationsData.destinations];
    let animationId;
    let isPaused = false;
    let isDragging = false;
    let startPos = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    
    // Initialize the carousel with multiple sets of cards for seamless looping
    async function initializeCarousel() {
        // Create 3 sets of cards (enough to ensure continuous looping)
        const tripleDestinations = [...originalDestinations, ...originalDestinations, ...originalDestinations];
        
        // Preload and create all cards
        const cardPromises = tripleDestinations.map((dest, index) => 
            preloadAndCreateCard(dest, index, tripleDestinations.length)
        );
        
        // Wait for all cards to be created with loaded images
        const cards = await Promise.all(cardPromises);
        
        // Add cards to track
        cards.forEach(card => track.appendChild(card));
        
        // Set initial position to show the middle set of cards
        position = -originalDestinations.length * cardWidth;
        track.style.transform = `translateX(${position}vw)`;
        
        // Start animation after all images are loaded
        startCarouselAnimation();
        
        // Setup dragging functionality
        setupDragHandlers();
        
        // Handle window resize
        window.addEventListener('resize', updateCardWidth);
    }
    
    function updateCardWidth() {
        // Update cardWidth based on current window size
        if (window.innerWidth > 999) {
            cardWidth = 25;
        } else if (window.innerWidth > 699) {
            cardWidth = 42;
        } else {
            cardWidth = 72;
        }
        
        // Adjust position to maintain visual continuity
        const cardCount = Math.floor(Math.abs(position) / cardWidth);
        position = -cardCount * cardWidth;
        track.style.transform = `translateX(${position}vw)`;
    }
    
    function setupDragHandlers() {
        // Mouse events
        carouselContainer.addEventListener('mousedown', dragStart);
        carouselContainer.addEventListener('mouseup', dragEnd);
        carouselContainer.addEventListener('mouseleave', dragEnd);
        carouselContainer.addEventListener('mousemove', drag);
        
        // Touch events
        carouselContainer.addEventListener('touchstart', dragStart);
        carouselContainer.addEventListener('touchend', dragEnd);
        carouselContainer.addEventListener('touchmove', drag);
    }
    
    function dragStart(e) {
        isPaused = true;
        isDragging = true;
        
        // Record starting position (client X for drag direction)
        startPos = getPositionX(e);
        
        // Stop any existing transition during drag
        track.style.transition = 'none';
    }
    
    function drag(e) {
        if (isDragging) {
            const currentPos = getPositionX(e);
            const diff = currentPos - startPos;
            
            // Convert pixel difference to vw units
            const vwDiff = (diff / window.innerWidth) * 100;
            
            // Update position
            currentTranslate = prevTranslate + vwDiff;
            track.style.transform = `translateX(${currentTranslate}vw)`;
        }
    }
    
    function dragEnd() {
        if (!isDragging) return;
        
        isDragging = false;
        prevTranslate = currentTranslate;
        position = currentTranslate;
        
        // Restore transition for smooth movement
        track.style.transition = 'transform 0.3s ease-out';
        
        // Check if we need to reset position for seamless looping
        checkBoundary();
        
        // Resume animation after a short delay
        setTimeout(() => {
            isPaused = false;
        }, 1000);
    }
    
    function getPositionX(e) {
        return e.type.includes('mouse') ? e.clientX : e.touches[0].clientX;
    }
    
    function checkBoundary() {
        const totalOriginalWidth = originalDestinations.length * cardWidth;
        
        // If we've gone too far left or right, reset to the middle set
        if (position > 0) {
            position = -totalOriginalWidth;
            track.style.transition = 'none';
            track.style.transform = `translateX(${position}vw)`;
            
            // Force reflow
            track.offsetHeight;
            
            // Restore transition
            track.style.transition = 'transform 0.3s ease-out';
        } else if (position < -2 * totalOriginalWidth) {
            position = -totalOriginalWidth;
            track.style.transition = 'none';
            track.style.transform = `translateX(${position}vw)`;
            
            // Force reflow
            track.offsetHeight;
            
            // Restore transition
            track.style.transition = 'transform 0.3s ease-out';
        }
        
        prevTranslate = position;
    }
    
    function startCarouselAnimation() {
        // Animation speed (vw units per frame)
        const animationSpeed = 0.03;
        
        function animate() {
            if (!isPaused) {
                position -= animationSpeed;
                track.style.transform = `translateX(${position}vw)`;
                
                // Check if we need to reset position for seamless looping
                checkBoundary();
            }
            
            animationId = requestAnimationFrame(animate);
        }
        
        // Start the animation
        animationId = requestAnimationFrame(animate);
    }
    
    // Clean up on page unload
    window.addEventListener('beforeunload', () => {
        cancelAnimationFrame(animationId);
    });
    
    // Initialize the carousel
    initializeCarousel();
    setupCounters();
}

document.addEventListener('DOMContentLoaded', () => {

    const openMenuBtn = document.querySelector('.open_menu');
    const closeMenuBtn = document.querySelector('.close_menu');
    const mobileNav = document.querySelector('.mobile_nav');
    
    console.log("Mobile nav setup", {
        openBtn: openMenuBtn, 
        closeBtn: closeMenuBtn, 
        nav: mobileNav
    });
    
    // Open menu functionality
    if (openMenuBtn && mobileNav) {
        openMenuBtn.onclick = function() {
            console.log("Open button clicked");
            mobileNav.style.display = 'block';
            mobileNav.style.opacity = '1';
            mobileNav.style.visibility = 'visible';
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        };
    }
    
    // Close menu functionality
    if (closeMenuBtn && mobileNav) {
        closeMenuBtn.onclick = function() {
            console.log("Close button clicked");
            mobileNav.style.opacity = '0';
            mobileNav.style.visibility = 'hidden';
            document.body.style.overflow = ''; // Re-enable scrolling
            
            // Optional: Hide completely after transition
            setTimeout(function() {
                if (mobileNav.style.opacity === '0') {
                    mobileNav.style.display = 'none';
                }
            }, 500); // Match your transition duration
        };
    }
    
    // Close when clicking on navigation links
    const mobilenavLinks = document.querySelectorAll('.mobile_nav_link');
    mobilenavLinks.forEach(function(link) {
        link.onclick = function() {
            mobileNav.style.opacity = '0';
            mobileNav.style.visibility = 'hidden';
            document.body.style.overflow = '';
            
            setTimeout(function() {
                mobileNav.style.display = 'none';
            }, 500);
        };
    });
    
    // Close when pressing ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileNav.style.opacity === '1') {
            mobileNav.style.opacity = '0';
            mobileNav.style.visibility = 'hidden';
            document.body.style.overflow = '';
            
            setTimeout(function() {
                mobileNav.style.display = 'none';
            }, 500);
        }
    });

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

    gsap.registerPlugin(ScrollTrigger);

    // Initial page load animation
    loadPageAnimation();
    
    // Setup scroll reveal animations
    setupScrollRevealAnimations();
    
    // Setup button hover effectss
    setupButtonHoverEffects();
    
    // Initialize destination carousel
    initDestinationsCarousel();
    initRecruitmentProcess();
    initFooter();
    initMobileNav();
});

const lenis = new Lenis({
  duration: 1.2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  direction: 'vertical', // vertical, horizontal
  gestureDirection: 'vertical', // vertical, horizontal, both
  smooth: true,
  mouseMultiplier: 1,
  smoothTouch: false,
  touchMultiplier: 1,
  infinite: false,
})

//get scroll value
lenis.on('scroll', ({ scroll, limit, velocity, direction, progress }) => {
  console.log({ scroll, limit, velocity, direction, progress })
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

function loadPageAnimation() {
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
            element.style.transition = 'opacity 0.8s ease, transform 0.8s ease, filter 0.8s ease';
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
}

// Reusable scroll reveal animation function
function setupScrollRevealAnimations() {
    // Add reveal-element class to all elements you want to animate
    const sectionsToReveal = [
        '.about_us h1',
        '.about_us h3',
        '.about_us a',
        '.stats h1',
        '.stats_box', '.services h1', '.service_card',
        '.recruitment_process h1', '.form_holder',
         '.about_hero h1', '.about_hero h3', 
        '.about_content h1', '.about_content h3', 
        '.about_image', '.mission_image', '.mission_content h1',
        '.mission_content h3', '.values_section h1', '.value_card',
        '.founder_image', '.message_content h1', '.message_content h3',
        '.founder_info', '.team h1', '.team h3', '.team_card',
        '.countries_hero h1', '.countries_hero h3', '.countries_grid h1', '.country_card', '.contact h1', '.contact h3', '.contact .button_holder',
        '.hero_service h1', 
        '.hero_service h3', 
        '.services_main h1', 
        '.service_detail_card',
        '.process_service h1',
        '.process_step',
        '.contact_service h1',
        '.contact_service h3',
        '.service_info_sidebar',
        '.contact_info h1',
        '.contact_item1',
        '.contact h1',
        '.contact h3',
        '.cta_section h1',
        '.cta_section h3',
        '.cta_section .button_holder'
    ];
    
    // Add reveal-element class to all elements that need animation
    sectionsToReveal.forEach(selector => {
        const elements = document.querySelectorAll(selector);
        elements.forEach(el => {
            if (el) {
                el.classList.add('reveal-element');
                // Set initial styles for elements to be revealed
                el.style.opacity = '0';
                el.style.transform = 'translateY(5vh)';
                el.style.filter = 'blur(0.7vw)';
                el.style.transition = 'opacity 0.8s ease, transform 0.8s ease, filter 0.8s ease';
            }
        });
    });
    
    // Create scroll triggers for each section
    document.querySelectorAll('section').forEach(section => {
        // Find all reveal elements in this section
        const revealElements = section.querySelectorAll('.reveal-element');
        
        if (revealElements.length > 0) {
            // Create a scroll trigger for this section
            ScrollTrigger.create({
                trigger: section,
                start: "top 80%", // Trigger when the top of the section is 80% from the top of the viewport
                onEnter: () => revealSection(revealElements),
                onEnterBack: () => revealSection(revealElements), // Re-trigger when scrolling back up
                onLeave: () => hideSection(revealElements),
                onLeaveBack: () => hideSection(revealElements),
                toggleActions: "play none none reverse",
                // markers: true, // For debugging, remove in production
            });
        }
    });
}

// Reveal elements in a section with delay
function revealSection(elements) {
    elements.forEach((el, index) => {
        setTimeout(() => {
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
            el.style.filter = 'blur(0)';
        }, 200 * index); // Staggered delay
    });
}

// Hide elements in a section with delay
function hideSection(elements) {
    elements.forEach((el, index) => {
        setTimeout(() => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(5vh)';
            el.style.filter = 'blur(0.7vw)';
        }, 100 * index); // Quicker reset when scrolling away
    });
}

// Setup button hover effects
function setupButtonHoverEffects() {
    // Add CSS for button hover effects
    const style = document.createElement('style');
    style.textContent = `
        .primary_button {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .primary_button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease;
            z-index: 1;
        }
        
        .primary_button:hover::before {
            left: 100%;
        }
        
        .primary_button h4 {
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }
        
        .primary_button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .primary_button:active {
            transform: translateY(-1px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        
        /* Special style for secondary buttons */
        .secondary_button:hover {
            background-color: var(--green_color);
            border-color: var(--green_color);
        }
        
        .secondary_button:hover h4 {
            color: white;
        }
    `;
    document.head.appendChild(style);
}
function setupCounters() {
    // Counter animation function
    const animateCounter = (counter, target, duration) => {
        let startTime = null;
        const startValue = parseInt(counter.textContent);
        
        const step = (timestamp) => {
            if (!startTime) startTime = timestamp;
            const progress = Math.min((timestamp - startTime) / duration, 1);
            const value = Math.floor(progress * (target - startValue) + startValue);
            counter.textContent = value;
            
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                counter.textContent = target; // Ensure we end at the exact target
            }
        };
        
        window.requestAnimationFrame(step);
    };
    
    // Setup ScrollTrigger for counters
    gsap.utils.toArray('.counter').forEach(counter => {
        const targetCount = parseInt(counter.getAttribute('data-count'));
        
        ScrollTrigger.create({
            trigger: counter,
            start: "top 80%",
            onEnter: () => animateCounter(counter, targetCount, 2000),
            onEnterBack: () => animateCounter(counter, targetCount, 2000),
            // Start at 0 when the section is out of view
            onLeave: () => { counter.textContent = "0"; },
            onLeaveBack: () => { counter.textContent = "0"; },
            toggleActions: "play none none reverse"
        });
    });
}