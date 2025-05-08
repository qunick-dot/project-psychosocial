<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $service->meta_title ?? $service->title }}</title>
    <meta name="description" content="{{ $service->meta_description ?? Str::limit(strip_tags($service->subtitle ?? ''), 160) }}">
    @if($service->meta_keywords)
        <meta name="keywords" content="{{ $service->meta_keywords }}">
    @endif
    <!-- Open Graph / Social Media Tags -->
    <meta property="og:title" content="{{ $service->meta_title ?? $service->title }}">
    <meta property="og:description" content="{{ $service->meta_description ?? Str::limit(strip_tags($service->subtitle ?? ''), 160) }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    @if($service->image)
        <meta property="og:image" content="{{ asset('storage/' . $service->image) }}">
    @endif
    <meta name="google-site-verification" content="HmD7GoFw-5nW7WihbcMNTbp-hj6npzEAxjOs9x8XLm8" />
<meta name="sitecheckerpro-site-verification" content="e2ad86eb364cc0da2e7fa7b3b19a7450">
<meta content="all" name="robots"/>
<meta name="MSSmartTagsPreventParsing" content="TRUE"/>
<meta name="googlebot" content="INDEX, FOLLOW" />
<meta name="slurp" content="INDEX, FOLLOW" />
<meta name="teoma" content="INDEX, FOLLOW" />
<meta name="msnbot" content="INDEX, FOLLOW" />
<meta name="robots" content="all,index"/>
<meta name="allow-search" content="Yes" />
<meta name="revisit-after" content="Daily" />
<meta name="subject" CONTENT="mental health counselling in Nepal">
<meta name="author" content="Psychosocial Counselling Service">
<meta name="language" CONTENT="EN">
<meta name="rating" CONTENT="general">
<meta name="contactOrganization" CONTENT="Psycho Social Counselling P.Ltd">
<meta name="contactStreetAddress1" CONTENT="Nagarjun">
<meta name="contactZipcode" CONTENT="44600">
<meta name="contactCity" CONTENT="Kathmandu">
<meta name="contactCountry" CONTENT="Nepal">

<link rel="preconnect" href="https://www.facebook.com">
 <link rel="preconnect" href="https://bat.bing.com">
 <link rel="preconnect" href="https://www.google.com">
 <link rel="preconnect" href="https://www.google-analytics.com">
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url('/services/' . $service->slug) }}">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Lora:wght@400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('user-assets/css/services-template.css') }}">
</head>
<body>
    @include('layouts.navbar')
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/66b8466c0cca4f8a7a747a06/1i4vt6728';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>

<section class="therapy-hero">
    <div class="service-container">
        <div class="therapy-card">
            <!-- Left side content -->
            <div class="therapy-content">
                <div class="badge-wrapper">
                    <span class="therapy-badge">Professional Care</span>
                </div>
                
                <h1 class="therapy-title">{{ $service->title }}</h1>
                <p class="therapy-subtitle">{{ $service->subtitle }}</p>
                
                <div class="therapy-description">
                    <p>Begin your journey to emotional wellness with personalized mental health support tailored to your unique needs.</p>
                </div>
                
                <div class="credentials">
                    <div class="credential-item">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" fill="none">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <span>Licensed Professionals</span>
                    </div>
                    <div class="credential-item">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" fill="none">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                        <span>Flexible Scheduling</span>
                    </div>
                </div>
                
                <div class="therapy-actions">
                    <a href="/appointment-book" class="btn-primary">
                        Book Consultation
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" fill="none">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="#approach" class="btn-outline">Learn Our Approach</a>
                </div>
            </div>
            
            <!-- Right side image -->
            <div class="therapy-image-wrapper">
                <div class="image-container">
                    @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="therapy-image">
                    @endif
                    <div class="service-testimonial-card">
                        <div class="stars">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                        </div>
                        <p>"Absolutely amazing and professional staff that can handle any diagnosis and who actually want to help individuals from their hearts."</p>
                        <div class="testimonial-author">
                            <span class="author-initial">B</span>
                            <span class="author-name">Babita Hamal</span>
                        </div>
                    </div>
                </div>
                <div class="pattern-dots"></div>
            </div>
        </div>
    </div>
</section>

<!-- Why It Matters Section -->
<section class="why-matters-section" id="why">
    <div class="container">
        <div class="section-heading">
            <span class="section-tag">Benefits</span>
            <h2>Why It Matters</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="content-wrapper">
            <div class="matters-content">
                {!! $service->why_it_matters !!}
            </div>
            <div class="matters-visual">
                <div class="visual-card">
                    <div class="stat-number">94<span>%</span></div>
                    <p>of our clients report significant improvement after 6 sessions</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach Section -->
@if(!empty($service->approach_items) && is_array($service->approach_items))
<section class="approach-section" id="approach">
    <div class="container">
        <div class="section-heading">
            <span class="section-tag">Methodology</span>
            <h2>{{ $service->approach_title ?? 'Our Approach' }}</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="approach-cards">
            @foreach($service->approach_items as $index => $item)
            <div class="approach-card">
                <div class="approach-number">{{ $index + 1 }}</div>
                <div class="approach-content">
                    <h3>{{ $item['title'] }}</h3>
                    <p>{{ $item['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- FAQ Section -->
@if(!empty($service->faqs) && is_array($service->faqs))
<section class="faq-section" id="faq">
    <div class="container">
        <div class="section-heading">
            <span class="section-tag">Questions</span>
            <h2>Frequently Asked Questions</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="faq-container">
            @foreach($service->faqs as $index => $faq)
            <div class="faq-item">
                <div class="faq-question" data-bs-toggle="collapse" data-bs-target="#faqAnswer{{ $index }}">
                    <h3>{{ $faq['question'] }}</h3>
                    <div class="faq-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" fill="none">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer collapse" id="faqAnswer{{ $index }}">
                    <div class="faq-answer-content">
                        {!! $faq['answer'] !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- <!-- Consultation Form Section -->
<section class="service-consultation-section" id="consultation">
    <div class="container">
        <div class="section-heading text-center">
            <span class="section-tag">Get Started</span>
            <h2>Book Your Consultation</h2>
            <div class="heading-underline centered"></div>
            <p class="section-intro">Take the first step toward emotional well-being today. Our experts are ready to help you on your journey.</p>
        </div>
        
        <div class="service-consultation-wrapper">
            <div class="service-consultation-image">
                <img src="{{ asset('user-assets/images/others/consultation-image.jpg') }}" alt="Consultation">
                <div class="image-overlay"></div>
                <div class="service-consultation-features">
                    <div class="feature-item">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" fill="none">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Confidential Sessions</span>
                    </div>
                    <div class="feature-item">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" fill="none">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Personalized Treatment</span>
                    </div>
                    <div class="feature-item">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" fill="none">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Flexible Scheduling</span>
                    </div>
                </div>
            </div>
            
            <div class="service-consultation-form-container">
                @if (session('success'))
                <div class="success-alert">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" fill="none">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
                @endif
                
                <form method="POST" action="{{ route('consultations.store') }}" class="consultation-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Your full name" value="{{ old('name') }}" required>
                            @error('name')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="Your email" value="{{ old('email') }}" required>
                            @error('email')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Your phone number" value="{{ old('phone') }}" required>
                            @error('phone')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="service">Select Service</label>
                            <select id="service" name="service" required>
                                <option value="">Choose a service</option>
                                @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ old('service') == $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                                @endforeach
                            </select>
                            @error('service')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="preferred_date">Preferred Date</label>
                            <input type="date" id="preferred_date" name="preferred_date" value="{{ old('preferred_date') }}" required>
                            @error('preferred_date')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="preferred_time">Preferred Time</label>
                            <input type="time" id="preferred_time" name="preferred_time" value="{{ old('preferred_time') }}" required>
                            @error('preferred_time')
                            <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="consultant">Choose a Therapist</label>
                        <select id="consultant" name="consultant" required>
                            <option value="">Select a therapist</option>
                            <option value="john_doe" {{ old('consultant') == 'john_doe' ? 'selected' : '' }}>Dr. John Doe</option>
                            <option value="sarah_smith" {{ old('consultant') == 'sarah_smith' ? 'selected' : '' }}>Dr. Sarah Smith</option>
                            <option value="michael_brown" {{ old('consultant') == 'michael_brown' ? 'selected' : '' }}>Dr. Michael Brown</option>
                        </select>
                        @error('consultant')
                        <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="4" placeholder="Tell us about your needs">{{ old('message') }}</textarea>
                        @error('message')
                        <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        Schedule Consultation
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" fill="none">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section> --}}

<!-- Related Services Section -->
<section class="related-services-section">
    <div class="container">
        <div class="section-heading text-center">
            <span class="section-tag">Explore More</span>
            <h2>Other Services You Might Need</h2>
            <div class="heading-underline centered"></div>
        </div>
        
        <div class="services-grid">
            @foreach(\App\Models\Service::where('id', '!=', $service->id)->where('is_active', true)->take(3)->get() as $relatedService)
            <div class="service-card">
                <div class="service-image">
                    @if($relatedService->image)
                    <img src="{{ asset('storage/' . $relatedService->image) }}" alt="{{ $relatedService->title }}">
                    @endif
                    <div class="service-overlay"></div>
                </div>
                <div class="service-content">
                    <h3>{{ $relatedService->title }}</h3>
                    <p>{{ Str::limit($relatedService->subtitle ?? '', 100) }}</p>
                    <a href="{{ route('services.show', $relatedService->slug) }}" class="service-link">
                        Learn More
                        <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" fill="none">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="trust-section">
    <div class="container">
        <div class="section-heading text-center">
            <span class="section-tag">Our Promise</span>
            <h2>Why Choose Us</h2>
            <div class="heading-underline centered"></div>
        </div>
        
        <div class="trust-cards">
            <div class="trust-card">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" fill="none">
                        <path d="M20 7h-9m9 6h-9m9 6H5M5 7l2 2 4-4"/>
                    </svg>
                </div>
                <h3>Evidence-Based Approaches</h3>
                <p>Our therapeutic methods are grounded in scientific research and proven clinical outcomes.</p>
            </div>
            
            <div class="trust-card">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" fill="none">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <h3>Licensed Professionals</h3>
                <p>All our therapists are fully certified with specialized training and extensive experience.</p>
            </div>
            
            <div class="trust-card">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" fill="none">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </div>
                <h3>Complete Confidentiality</h3>
                <p>Your privacy is our priority. All sessions and information are strictly confidential.</p>
            </div>
        </div>
    </div>
</section>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Initialize Bootstrap tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
        

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