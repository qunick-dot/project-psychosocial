
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('reviewsSlider');
    const slides = slider.querySelectorAll('.review-card');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;
    let slideInterval;
    
    // Initialize the slider
    function initSlider() {
        slides[currentIndex].classList.add('active');
        updateDots();
        startSlideInterval();
    }
    
    // Set the slide interval
    function startSlideInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            goToNextSlide();
        }, 6000);
    }
    
    // Update the slide classes
    function updateSlides() {
        slides.forEach(slide => {
            slide.classList.remove('active', 'prev', 'next');
        });
        
        slides[currentIndex].classList.add('active');
        
        const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
        const nextIndex = (currentIndex + 1) % slides.length;
        
        slides[prevIndex].classList.add('prev');
        slides[nextIndex].classList.add('next');
    }
    
    // Update the dots
    function updateDots() {
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }
    
    // Go to a specific slide
    function goToSlide(index) {
        currentIndex = index;
        updateSlides();
        updateDots();
        startSlideInterval();
    }
    
    // Go to the next slide
    function goToNextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlides();
        updateDots();
    }
    
    // Go to the previous slide
    function goToPrevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlides();
        updateDots();
    }
    
    // Event listeners
    prevBtn.addEventListener('click', () => {
        goToPrevSlide();
        startSlideInterval();
    });
    
    nextBtn.addEventListener('click', () => {
        goToNextSlide();
        startSlideInterval();
    });
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
        });
    });
    
    // Touch events for mobile swipe
    let touchStartX = 0;
    let touchEndX = 0;
    
    slider.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    
    slider.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });
    
    function handleSwipe() {
        const threshold = 50; // minimum distance for swipe
        
        if (touchEndX < touchStartX - threshold) {
            // Swipe left, go to next slide
            goToNextSlide();
            startSlideInterval();
        } else if (touchEndX > touchStartX + threshold) {
            // Swipe right, go to previous slide
            goToPrevSlide();
            startSlideInterval();
        }
    }
    
    // Pause autoplay on hover
    slider.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });
    
    slider.addEventListener('mouseleave', () => {
        startSlideInterval();
    });
    
    // Initialize the slider
    initSlider();
    updateSlides();
});

