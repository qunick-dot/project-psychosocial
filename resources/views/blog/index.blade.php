@include('layouts.navbar')
@include('layouts.link')

<section class="blog-section">
    <div class="container">
        <div class="blog-title">
            <h1>Mental Health Blog</h1>
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

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@include('layouts.footer')

