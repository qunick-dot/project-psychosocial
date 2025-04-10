document.addEventListener('DOMContentLoaded', function() {
    // Accordion functionality
    const accordionButtons = document.querySelectorAll('.accordion-button');
    
    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Toggle active class
            this.classList.toggle('active');
            
            // Get the panel
            const panel = this.nextElementSibling;
            
            // Toggle panel visibility
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    });
    
    // Add fade-in effect to sections as they come into view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });
    
    // Elements to animate
    document.querySelectorAll('section').forEach(section => {
        observer.observe(section);
    });
    
    // Form validation
    const consultationForm = document.querySelector('.consultation-form');
    
    if (consultationForm) {
        consultationForm.addEventListener('submit', function(e) {
            const nameInput = this.querySelector('input[name="name"]');
            const emailInput = this.querySelector('input[name="email"]');
            const messageInput = this.querySelector('textarea[name="message"]');
            
            if (!nameInput.value.trim()) {
                e.preventDefault();
                showError(nameInput, 'Please enter your name');
            }
            
            if (!emailInput.value.trim()) {
                e.preventDefault();
                showError(emailInput, 'Please enter your email');
            } else if (!isValidEmail(emailInput.value)) {
                e.preventDefault();
                showError(emailInput, 'Please enter a valid email address');
            }
            
            if (!messageInput.value.trim()) {
                e.preventDefault();
                showError(messageInput, 'Please enter your message');
            }
        });
    }
    
    function showError(input, message) {
        const formGroup = input.parentElement;
        let errorElement = formGroup.querySelector('.error-message');
        
        if (!errorElement) {
            errorElement = document.createElement('div');
            errorElement.className = 'error-message';
            errorElement.style.color = '#dc3545';
            errorElement.style.fontSize = '0.875rem';
            errorElement.style.marginTop = '5px';
            formGroup.appendChild(errorElement);
        }
        
        errorElement.textContent = message;
        input.style.borderColor = '#dc3545';
        
        input.addEventListener('input', function() {
            errorElement.textContent = '';
            input.style.borderColor = '';
        }, {once: true});
    }
    
    function isValidEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
    
    // Add smooth scrolling for consultation form links
    document.querySelectorAll('a[href="#consultation"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});