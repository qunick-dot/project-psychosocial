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



<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('layouts.link', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
<section class="hero">
    <div class="hero-container">
       
        <div class="hero-overlay"></div>
        <div class="hero-image">
            <img src="<?php echo e(asset('user-assets/images/hero-section/hero-psychosocial-image.jpg')); ?>" alt="Mental wellness consultation">
        </div>
        
    </div>
</section>
<section class="services-section">
    <div class="container">
        <h2 class="section-title">Our Specialized Services</h2>
        <div class="services-grid">
            <!-- Service 1 -->
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="service-card">
                <div class="service-content">
                    <i class="fas fa-user service-icon"></i>
                    <h3 class="service-title"><?php echo e($service->title); ?></h3>
                    <p class="service-description" style=" display: -webkit-box;-webkit-line-clamp: 4; -webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                        <?php echo e($service->why_it_matters); ?>

                    </p>
                
                    <a href="<?php echo e(url('/services/' . $service->slug)); ?>" class="service-cta">Learn More</a>
                </div>
            </div>
        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section>

    

    

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
                                <img src="<?php echo e(asset('user-assets/images/blog/anxiety-treatment.jpg')); ?>" alt="Anxiety Management">
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
                                <img src="<?php echo e(asset('user-assets/images/blog/family-communication.jpg')); ?>" alt="Self-Care">
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
                                <img src="<?php echo e(asset('user-assets/images/blog/trauma-healing.jpg')); ?>" alt="Resilience">
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

    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Psychoresearch\resources\views\index.blade.php ENDPATH**/ ?>