<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Expert Team | PsychoCounselling</title>
    <meta name="description" content="Meet our team of licensed therapists and counsellors dedicated to your mental wellbeing.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #5d5fef;
            --primary-light: #e0e1ff;
            --secondary: #ff7e5d;
            --dark: #2a2a48;
            --light: #f8f9ff;
            --gray: #6b6b84;
            --light-gray: #e9e9f0;
            --white: #ffffff;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            line-height: 1.6;
            background-color: var(--light);
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        .page-header {
            text-align: center;
            padding: 80px 0 40px;
            background: linear-gradient(135deg, var(--primary) 0%, #6c63ff 100%);
            color: var(--white);
            margin-bottom: 60px;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }

        .page-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .page-header p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }

        /* Team Grid - Updated for 3 columns */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            padding: 0 0 80px;
        }

        .team-member {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            position: relative;
            z-index: 1;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .member-image {
            position: relative;
            height: 320px;
            overflow: hidden;
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .team-member:hover .member-image img {
            transform: scale(1.05);
        }

        .member-details {
            padding: 25px;
            position: relative;
        }

        .member-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .member-title {
            color: var(--secondary);
            font-weight: 500;
            font-size: 0.9rem;
            margin-bottom: 15px;
            display: block;
        }

        .member-bio {
            color: var(--gray);
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .member-social {
            display: flex;
            gap: 12px;
        }

        .member-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--primary-light);
            color: var(--primary);
            transition: var(--transition);
            text-decoration: none;
        }

        .member-social a:hover {
            background: var(--primary);
            color: var(--white);
        }

        .specialty-tag {
            position: absolute;
            top: -15px;
            right: 20px;
            background: var(--secondary);
            color: var(--white);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            box-shadow: 0 5px 15px rgba(255, 126, 93, 0.3);
        }

        /* Section Intro */
        .section-intro {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }

        .section-intro h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .section-intro p {
            color: var(--gray);
        }

        /* CTA Section */
        .cta-section {
            background: var(--primary);
            padding: 80px 0;
            text-align: center;
            color: var(--white);
            margin-top: 40px;
            clip-path: polygon(0 10%, 100% 0, 100% 100%, 0% 100%);
        }

        .cta-section h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        .cta-section p {
            max-width: 600px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(--white);
            color: var(--primary);
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-outline {
            background: transparent;
            color: var(--white);
            border: 2px solid var(--white);
            margin-left: 15px;
        }

        .btn-outline:hover {
            background: var(--white);
            color: var(--primary);
        }

        /* Responsive Adjustments */
        @media (max-width: 1024px) {
            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .page-header {
                padding: 60px 0 30px;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }

            .page-header h1 {
                font-size: 2.2rem;
            }

            .team-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .cta-section {
                clip-path: polygon(0 5%, 100% 0, 100% 100%, 0% 100%);
            }

            .btn {
                display: block;
                width: 100%;
                max-width: 250px;
                margin: 0 auto 15px;
            }

            .btn-outline {
                margin-left: auto;
            }
        }

        /* Performance Optimizations */
        img {
            max-width: 100%;
            height: auto;
            vertical-align: middle;
            font-style: italic;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .lazy-load {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .lazy-loaded {
            opacity: 1;
        }
    </style>
</head>
<body>
    <header class="page-header">
        <div class="container">
            <h1>Our Compassionate Team</h1>
            <p>Meet our licensed therapists and counsellors who are dedicated to helping you navigate life's challenges with professional care and empathy.</p>
        </div>
    </header>

    <main class="container">
        <div class="section-intro">
            <h2>Expert Care Tailored to You</h2>
            <p>Each member of our team brings unique expertise and approaches to create a personalized therapeutic experience for every client.</p>
        </div>

        <div class="team-grid">
            <!-- Team Member 1 -->
            <div class="team-member">
                <div class="member-image">
                    <img class="lazy-load" data-src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dr. Sarah Johnson" width="400" height="500">
                </div>
                <div class="member-details">
                    <span class="specialty-tag">Anxiety Specialist</span>
                    <h3 class="member-name">Dr. Sarah Johnson</h3>
                    <span class="member-title">PhD, Clinical Psychologist</span>
                    <p class="member-bio">With over 15 years of experience, Dr. Johnson specializes in cognitive behavioral therapy for anxiety disorders and stress management.</p>
                    <div class="member-social">
                        <a href="#" aria-label="LinkedIn profile"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Professional website"><i class="fas fa-globe"></i></a>
                        <a href="#" aria-label="Send email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-member">
                <div class="member-image">
                    <img class="lazy-load" data-src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Michael Chen" width="400" height="500">
                </div>
                <div class="member-details">
                    <span class="specialty-tag">Trauma Therapist</span>
                    <h3 class="member-name">Michael Chen</h3>
                    <span class="member-title">LCSW, EMDR Certified</span>
                    <p class="member-bio">Michael specializes in trauma recovery using EMDR and somatic experiencing approaches to help clients heal from painful experiences.</p>
                    <div class="member-social">
                        <a href="#" aria-label="LinkedIn profile"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Professional website"><i class="fas fa-globe"></i></a>
                        <a href="#" aria-label="Send email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-member">
                <div class="member-image">
                    <img class="lazy-load" data-src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dr. Amina Rodriguez" width="400" height="500">
                </div>
                <div class="member-details">
                    <span class="specialty-tag">Child & Family</span>
                    <h3 class="member-name">Dr. Amina Rodriguez</h3>
                    <span class="member-title">PsyD, Child Psychologist</span>
                    <p class="member-bio">Dr. Rodriguez focuses on child development, parenting support, and family therapy using play-based and attachment-focused methods.</p>
                    <div class="member-social">
                        <a href="#" aria-label="LinkedIn profile"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Professional website"><i class="fas fa-globe"></i></a>
                        <a href="#" aria-label="Send email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="cta-section">
        <div class="container">
            <h2>Ready to Begin Your Healing Journey?</h2>
            <p>Our team is here to support you with compassionate, professional care tailored to your unique needs.</p>
            <a href="#" class="btn">Book a Consultation</a>
            <a href="#" class="btn btn-outline">Learn About Our Approach</a>
        </div>
    </section>

    <script>
        // Lazy loading implementation
        document.addEventListener("DOMContentLoaded", function() {
            const lazyImages = [].slice.call(document.querySelectorAll("img.lazy-load"));
            
            if ("IntersectionObserver" in window) {
                let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            lazyImage.classList.remove("lazy-load");
                            lazyImage.classList.add("lazy-loaded");
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });

                lazyImages.forEach(function(lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            } else {
                // Fallback for browsers without IntersectionObserver
                lazyImages.forEach(function(lazyImage) {
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove("lazy-load");
                    lazyImage.classList.add("lazy-loaded");
                });
            }
        });

        // Load Font Awesome if needed
        if (!document.querySelector('.fa')) {
            const faScript = document.createElement('script');
            faScript.src = 'https://kit.fontawesome.com/a076d05399.js';
            faScript.crossOrigin = 'anonymous';
            document.head.appendChild(faScript);
        }
    </script>
</body>
</html>