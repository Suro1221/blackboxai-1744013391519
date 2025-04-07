// Dark/Light mode toggle
const themeToggle = document.getElementById('theme-toggle');
const html = document.documentElement;

// Check for saved theme preference
if (localStorage.getItem('theme') === 'dark') {
    html.classList.add('dark');
    if (themeToggle) themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
}

// Mobile menu toggle
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileMenuToggle && mobileMenu) {
    mobileMenuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        mobileMenuToggle.innerHTML = mobileMenu.classList.contains('hidden') 
            ? '<i class="fas fa-bars"></i>' 
            : '<i class="fas fa-times"></i>';
    });
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Initialize animations when GSAP is loaded
function initAnimations() {
    if (typeof gsap !== 'undefined') {
        gsap.from('header', { 
            opacity: 0, 
            y: -20, 
            duration: 0.8, 
            ease: "power2.out" 
        });

        gsap.from('.hero-content', { 
            opacity: 0, 
            y: 30, 
            duration: 1, 
            delay: 0.3,
            ease: "power2.out" 
        });
    }
}

// Check if GSAP is already loaded or wait for it
if (typeof gsap !== 'undefined') {
    initAnimations();
} else {
    document.addEventListener('DOMContentLoaded', initAnimations);
}

// Theme toggle event listener
if (themeToggle) {
    themeToggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        const isDark = html.classList.contains('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        themeToggle.innerHTML = isDark 
            ? '<i class="fas fa-sun"></i>' 
            : '<i class="fas fa-moon"></i>';
    });
}

// Service card hover effects
document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        gsap.to(card, {
            scale: 1.05,
            duration: 0.3,
            ease: "power2.out"
        });
    });
    card.addEventListener('mouseleave', () => {
        gsap.to(card, {
            scale: 1,
            duration: 0.3,
            ease: "power2.out"
        });
    });
});