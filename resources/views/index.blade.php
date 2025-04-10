<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
    
    <title>Psychosocial Counseling Services</title>

</head>
<body>



@include('layouts.navbar')
@include('layouts.link')
    
<section class="hero">
    <div class="hero-container">
       
        <div class="hero-overlay"></div>
        <div class="hero-image">
            <img src="{{ asset('user-assets/images/hero-section/hero-psychosocial-image.jpg') }}" alt="Mental wellness consultation">
        </div>
        {{-- <div class="hero-content">
            <h1 class="hero-title">Reclaim Your Mental Wellbeing</h1>
            <p class="hero-subtitle">Compassionate psychosocial counseling for anxiety, depression, and life's challenges</p>
            <div class="hero-description">
                <p>Our expert-led therapeutic interventions build emotional resilience and lasting psychological wellness, guiding you toward a balanced, fulfilling life.</p>
            </div>
            <div class="hero-cta">
                <a href="/appointment-book" class="btn btn-primary">Schedule a Consultation</a>
            </div>
        </div> --}}
    </div>
</section>
<section class="services-section">
    <div class="container">
        <h2 class="section-title">Our Specialized Services</h2>
        <div class="services-grid">
            <!-- Service 1 -->
            @foreach($services as $service)
            <div class="service-card">
                <div class="service-content">
                    <i class="fas fa-user service-icon"></i>
                    <h3 class="service-title">{{$service->title}}</h3>
                    <p class="service-description" style=" display: -webkit-box;-webkit-line-clamp: 4; -webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                        {{$service->why_it_matters}}
                    </p>
                
                    <a href="{{url('/services/' . $service->slug)}}" class="service-cta">Learn More</a>
                </div>
            </div>
        
            @endforeach

        </div>
    </div>
</section>

    {{-- <section class="counselors-section" id="our-counselors">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-subtitle">Meet Our Team</span>
                <h2 class="section-title">Expert Counselors</h2>
                <p class="section-description">Our dedicated team of professional counselors brings years of experience and specialized training to help you navigate life's challenges.</p>
            </div>
    
            <div class="counselors-grid">
                <!-- Counselor 1 -->
                <div class="counselor-card">
                    <div class="counselor-image">
                        <img src="images/counseller/counseller1.jpeg" alt="Rabina Shahi Khadka">
                        <div class="social-links">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="counselor-info">
                        <h3 class="counselor-name">Rabina Shahi Khadka</h3>
                        <p class="counselor-title"> Psychologist</p>
                        <p class="counselor-specialty">Trauma Recovery, Anxiety Disorders</p>
                        <p class="counselor-description">Khadka specializes in evidence-based approaches to trauma recovery and anxiety management, with over 10 years of psychosocial experience.</p>
                        <a href="#counselors/rabina-shahi-khadka.html" class="btn-profile">View Profile</a>
                    </div>
                </div>
    
                <!-- Counselor 2
                <div class="counselor-card">
                    <div class="counselor-image">
                        <img src="images/counseller/counseller2.jpeg" alt="Michael Torres, LMFT">
                        <div class="social-links">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="counselor-info">
                        <h3 class="counselor-name">Michael Torres, LMFT</h3>
                        <p class="counselor-title">Licensed Marriage & Family Therapist</p>
                        <p class="counselor-specialty">Relationship Counseling, Family Systems</p>
                        <p class="counselor-description">Michael provides compassionate support for couples and families navigating relationship challenges, transitions, and communication issues.</p>
                        <a href="#counselors/michael-torres.html" class="btn-profile">View Profile</a>
                    </div>
                </div>
            </div>
     -->
            </div>
            <div class="team-cta text-center">
                <p>Our counselors are dedicated to providing personalized care tailored to your unique needs.</p>
                <a href="#team.html" class="btn-secondary">Meet Our Full Team</a>
            </div>
        </div>
    </section> --}}

    {{-- <section class="reviews-section" id="testimonials">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-subtitle">Testimonials</span>
                <h2 class="section-title">What Our Clients Say</h2>
                <p class="section-description">Read about the experiences of those who have benefited from our counseling services.</p>
            </div>
    
            <div class="reviews-container">
                <div class="reviews-slider" id="reviewsSlider">
                    <!-- Review 1 -->
                    <div class="review-card">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="review-content">
                            <p>"Working with Dr. Johnson has been transformative. I've developed coping strategies that have significantly reduced my anxiety and improved my daily life. The personalized approach and genuine care made all the difference."</p>
                        </div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="reviewer-info">
                            <div class="reviewer-image">
                                <img src="images/reviews_image/review.jpg" alt="Client">
                            </div>
                            <div class="reviewer-details">
                                <h4 class="reviewer-name">Rebecca M.</h4>
                                <p class="reviewer-subtitle">Anxiety Management Client</p>
                            </div>
                        </div>
                    </div>
    
                    <!-- Review 2 -->
                    <div class="review-card">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="review-content">
                            <p>"The family counseling sessions helped us navigate a difficult time with our teenager. Michael's techniques improved our communication and brought us closer together. We're grateful for his guidance and support."</p>
                        </div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="reviewer-info">
                            <div class="reviewer-image">
                                <img src="images/reviews_image/review.jpg" alt="Client">
                            </div>
                            <div class="reviewer-details">
                                <h4 class="reviewer-name">Thomas & Sarah K.</h4>
                                <p class="reviewer-subtitle">Family Counseling Clients</p>
                            </div>
                        </div>
                    </div>
    
                    <!-- Review 3 -->
                    <div class="review-card">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="review-content">
                            <p>"After my traumatic experience, I didn't think I'd ever feel normal again. Dr. Patel's trauma-focused therapy gave me tools to process my feelings and rebuild my sense of safety. I'm finally moving forward with hope."</p>
                        </div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="reviewer-info">
                            <div class="reviewer-image">
                                <img src="images/reviews_image/review.jpg" alt="Client">
                            </div>
                            <div class="reviewer-details">
                                <h4 class="reviewer-name">David L.</h4>
                                <p class="reviewer-subtitle">Trauma Recovery Client</p>
                            </div>
                        </div>
                    </div>
    
                    <!-- Review 4 -->
                    <div class="review-card">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="review-content">
                            <p>"The group therapy sessions for grief have been a lifeline. Sharing with others who understand and learning from James's compassionate guidance has helped me process my loss and find strength I didn't know I had."</p>
                        </div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="reviewer-info">
                            <div class="reviewer-image">
                                <img src="images/reviews_image/review.jpg" alt="Client">
                            </div>
                            <div class="reviewer-details">
                                <h4 class="reviewer-name">Jennifer R.</h4>
                                <p class="reviewer-subtitle">Grief Support Group Member</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slider-controls">
                    <button id="prevBtn" class="slider-btn" aria-label="Previous testimonial">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="slider-dots" id="sliderDots">
                        <span class="dot active" data-index="0"></span>
                        <span class="dot" data-index="1"></span>
                        <span class="dot" data-index="2"></span>
                        <span class="dot" data-index="3"></span>
                    </div>
                    <button id="nextBtn" class="slider-btn" aria-label="Next testimonial">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            
            <div class="reviews-cta text-center">
                <p>Join hundreds of satisfied clients who have transformed their lives through our services.</p>
                <a href="./reviews.html" class="btn-secondary">Read More Reviews</a>
            </div>
        </div>
    </section> --}}

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button">
                                What are some signs of poor mental health?
                            </button>
                        </h3>
                        <div class="accordion-collapse">
                            <div class="accordion-body">
                                Signs of poor mental health include persistent sadness, excessive worry, changes in sleep or appetite, withdrawal from social activities, and difficulty concentrating.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed">
                                How can I improve my mental health?
                            </button>
                        </h3>
                        <div class="accordion-collapse">
                            <div class="accordion-body">
                                You can improve your mental health by practicing self-care, staying connected with loved ones, exercising regularly, eating a balanced diet, and seeking professional help when needed.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed">
                                Where can I find help for mental health issues?
                            </button>
                        </h3>
                        <div class="accordion-collapse">
                            <div class="accordion-body">
                                You can reach out to mental health professionals, such as therapists or counselors, or contact organizations like the National Alliance on Mental Illness (NAMI) or Crisis Text Line for support.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="blog-section">
            <div class="container">
                <div class="blog-title">
                    <h1>Blogs</h1>
                    <p>Explore our latest articles on mental health, self-care, and well-being</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="blog-post">
                            <div class="blog-img">
                                <img src="{{asset('user-assets/images/blog/anxiety-treatment.jpg')}}" alt="Anxiety Management">
                            </div>
                            <div class="blog-content">
                                <span class="category-badge">Mental Health</span>
                                <span class="category-badge">Anxiety</span>
                                <h2>Understanding Anxiety and How to Manage It</h2>
                                <div class="blog-meta">
                                    <div class="author">
                                        <a href="#">Dr. Jane Doe</a>
                                    </div>
                                    <div class="date">
                                        <i class="far fa-calendar-alt me-1"></i> October 10, 2023
                                    </div>
                                </div>
                                <p>Anxiety is a common mental health issue that affects millions of people worldwide. In this blog post, we explore the symptoms, causes, and effective strategies to manage anxiety...</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="blog-post">
                            <div class="blog-img">
                                <img src="{{asset('user-assets/images/blog/family-communication.jpg')}}" alt="Self-Care">
                            </div>
                            <div class="blog-content">
                                <span class="category-badge">Self-Care</span>
                                <span class="category-badge">Wellness</span>
                                <h2>The Importance of Self-Care in Mental Health</h2>
                                <div class="blog-meta">
                                    <div class="author">
                                        <a href="#">Dr. John Smith</a>
                                    </div>
                                    <div class="date">
                                        <i class="far fa-calendar-alt me-1"></i> October 5, 2023
                                    </div>
                                </div>
                                <p>Self-care is crucial for maintaining mental health. Learn about the different ways you can incorporate self-care into your daily routine to improve your well-being...</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="blog-post">
                            <div class="blog-img">
                                <img src="{{asset('user-assets/images/blog/trauma-healing.jpg')}}" alt="Resilience">
                            </div>
                            <div class="blog-content">
                                <span class="category-badge">Resilience</span>
                                <span class="category-badge">Coping</span>
                                <h2>How to Build Resilience in Tough Times</h2>
                                <div class="blog-meta">
                                    <div class="author">
                                        <a href="#">Dr. Emily Brown</a>
                                    </div>
                                    <div class="date">
                                        <i class="far fa-calendar-alt me-1"></i> September 28, 2023
                                    </div>
                                </div>
                                <p>Resilience is the ability to bounce back from adversity. Discover practical tips and techniques to build resilience and cope with life's challenges...</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </section>

    {{-- <section class="consultation-form-section" id="consultation">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-subtitle">Get in Touch</span>
                <h2 class="section-title">Request a Consultation</h2>
                <p class="section-description">Fill out the form below, and we'll get back to you shortly to schedule your consultation.</p>
            </div>
    
            <div class="form-container">
                <!-- Image on the Left -->
                <div class="form-image">
                    <img src={{asset('user-assets/images/others/consultation-image.jpg')}} alt="Consultation Image">
                </div>
    
                <!-- Form on the Right -->
                <form class="consultation-form">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                    </div>
                
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>
                
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                
                    <div class="form-group">
                        <label for="date">Preferred Consultation Date</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                
                    <div class="form-group">
                        <label for="consultant">Choose a Consultant</label>
                        <select id="consultant" name="consultant" required>
                            <option value="">Select a Consultant</option>
                            <option value="john_doe">John Doe</option>
                            <option value="sarah_smith">Sarah Smith</option>
                            <option value="michael_brown">Michael Brown</option>
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell us about your needs" required></textarea>
                    </div>
                
                    <div class="form-group">
                        <button type="submit" class="btn-submit">Submit Request</button>
                    </div>
                </form>
                
            </div>
        </div>
    </section> --}}

    <script>
        // Simple accordion functionality for the FAQ section
        document.querySelectorAll('.accordion-button').forEach(button => {
        button.addEventListener('click', () => {
            const accordionItem = button.closest('.accordion-item');
            const collapse = accordionItem.querySelector('.accordion-collapse');
            
            // Toggle the current item
            const isCollapsed = collapse.style.display === 'none' || !collapse.style.display;
            
            // First hide all accordion content
            document.querySelectorAll('.accordion-collapse').forEach(item => {
                item.style.display = 'none';
            });
            
            // Reset all buttons to collapsed state
            document.querySelectorAll('.accordion-button').forEach(btn => {
                btn.classList.add('collapsed');
                btn.setAttribute('aria-expanded', 'false');
            });
            
            // Then show/hide the clicked one
            if (isCollapsed) {
                collapse.style.display = 'block';
                button.classList.remove('collapsed');
                button.setAttribute('aria-expanded', 'true');
            } else {
                collapse.style.display = 'none';
                button.classList.add('collapsed');
                button.setAttribute('aria-expanded', 'false');
            }
        });
        
        // Initialize - hide all except the first one
        const accordionItem = button.closest('.accordion-item');
        const collapse = accordionItem.querySelector('.accordion-collapse');
        if (!button.classList.contains('collapsed')) {
            collapse.style.display = 'block';
        } else {
            collapse.style.display = 'none';
        }
    });
    </script>

    @include('layouts.footer')
</body>
</html>
