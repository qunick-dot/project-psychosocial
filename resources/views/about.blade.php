
@include('layouts.navbar')
@include('layouts.link')
<section class="about-hero">
    <div class="container">
        <h1 class="hero-title">About Us</h1>
        <p class="hero-subtitle">Compassionate Care for Your Mental Wellness</p>
    </div>
</section>

<!-- Our Mission Section -->
<section class="our-mission">
    <div class="container">
        <h2 class="section-title">Our Mission</h2>
        <p class="section-description">Our team of dedicated counselors and therapists is committed to providing a safe, 
            confidential, and supportive environment where you can find the help you need. 
            Whether you are facing personal challenges, mental health concerns, or simply need 
            someone to talk to, we are here to support you every step of the way.</p>
    </div>
</section>

<section class="our-manager">
    <div class="container">
        <h2 class="section-title">Message from the Managing Director</h2>
        <div class="manager-content">
            <div class="manager-image">
                <img src="{{asset('user-assets/images/counsellor/manager.jpg')}}" alt="Rabina Shahi Khadka - Managing Director">
            </div>
            <div class="manager-message">
                <p class="greeting">Dear Visitors,</p>
                
                <p class="intro">
                    Welcome to <strong>Psychosocial Counselling Service Pvt. Ltd.</strong> As the Managing Director, 
                    I'm honored to introduce our platform, where compassion, support, and professional guidance 
                    come together to help individuals and families lead healthier, more fulfilling lives.
                </p>
                
                <p class="body-text">
                    Our team of dedicated counselors and therapists is committed to providing a safe, 
                    confidential, and supportive environment where you can find the help you need. 
                    Whether you are facing personal challenges, mental health concerns, or simply need 
                    someone to talk to, we are here to support you every step of the way.
                </p>
                
                <p class="body-text">
                    At <strong>Psychosocial Counselling Service</strong>, we believe that everyone deserves the 
                    opportunity to heal, grow, and thrive. Our goal is to empower you to take positive steps 
                    toward better mental health and well-being.
                </p>
                
                <p class="closing">
                    Thank you for trusting us with your journey toward a brighter future.
                </p>
            
                <div class="signature">
                    <p class="name">Rabina Shahi Khadka</p>
                    <p class="position">Managing Director</p>
                    <p class="company">Psychosocial Counselling Service Pvt. Ltd</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Managing Director Section Styles */
.our-manager {
    padding: 4rem 0;
    background-color: #f9f9f9;
}

.section-title:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background-color: #4d8fad;
}

.manager-content {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
    align-items: center;
}

.manager-image {
    width: 100%;
    max-width: 350px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    overflow: hidden;
}

.manager-image img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease;
}

.manager-image img:hover {
    transform: scale(1.02);
}

.manager-message {
    flex: 1;
    background-color: #fff;
    padding: 2.5rem;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.greeting {
    font-size: 1.3rem;
    color: #2e4057;
    margin-bottom: 1.5rem;
}

.intro, .body-text, .closing {
    line-height: 1.8;
    margin-bottom: 1.5rem;
    color: #555;
    font-size: 1.05rem;
}

.intro strong, .body-text strong {
    color: #4d8fad;
}

.closing {
    font-style: italic;
    margin-bottom: 2rem;
}

.signature {
    margin-top: 2rem;
    border-top: 1px solid #eee;
    padding-top: 1.5rem;
}

.signature .name {
    font-size: 1.2rem;
    font-weight: 600;
    color: #2e4057;
    margin-bottom: 0.3rem;
}

.signature .position {
    font-size: 1rem;
    color: #4d8fad;
    margin-bottom: 0.2rem;
}

.signature .company {
    font-size: 0.9rem;
    color: #777;
}

/* Responsive styles */
@media (min-width: 768px) {
    .manager-content {
        flex-direction: row;
        align-items: flex-start;
    }
    
    .manager-image {
        flex: 0 0 300px;
    }
}

@media (max-width: 767px) {
    .section-title {
        font-size: 1.8rem;
    }
    
    .manager-message {
        padding: 1.8rem;
    }
    
    .greeting {
        font-size: 1.2rem;
    }
    
    .intro, .body-text, .closing {
        font-size: 1rem;
    }
}
</style>


<section class="psycho-background">
    <div class="container">
        <h2 class="section-title">BACKGROUND</h2>
        <p class="section-description">
            Psychosocial Counselling is a therapeutic approach or a planned
            intervention that assist the counselee(individual) in alerting, improving or
            resolving his/her present behavior difficulty or discomforts. It provides
            the assistance to enhance the counselee’s personal, social, emotional, and
            intellectual development through and interactive process. Therefore, the
            goal of the counseling is to help individuals, families and communities to
            become self-sufficient, self -dependent, self-directed and to adjust
            themselves efficiently to demands of a better and meaningful life.
            Psychosocial counseling is a service provided by a skilled professional
            counselor to an individual, family, or group for the purpose of improving
            well-being, alleviating distress, and enhancing coping skills. Psychosocial
            counseling is the process of counseling an individual, family, or group
            during one or more sessions to support the process of overcoming
            environmental, emotional, or social problems that are affecting the health
            and well-being of people. Psychosocial Counselling is psychosocial
            intervention for children who have been behaving "differently",
            expressing or indicating feelings of pain, sadness, suffering, helplessness,
            anger, etc. Psychosocial counselling guides them to a state of balance
            from which they can handle and improve the situation. The purpose is to
            help the person to change /improve the present problem or situation.
            
            Psychosocial counseling emphasizes the interaction between the
            individual's and/or family's emotions, behaviors, social relationships, and
            environment. This process helps the family to access resources and
            modify behaviors, relationships, and/or circumstances in order to enhance
            health and social functioning within the community.</p>
            <br>
            <h3 class="section-title"> OBJECTIVES</h3>
            <span>GENERAL OBJECTIVES</span>
            <div class="service-features">
                <div class="feature-item">
                    <i class="fas fa-check feature-icon"></i>
                    <span> Understand the relationship between physical activity and mental
                        health.</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check feature-icon"></i>
                    <span>Describe the role physical activity can play in the
                        prevention/treatment of anxiety and depression.</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check feature-icon"></i>
                    <span>Define stress and explain the stress response.</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check feature-icon"></i>
                    <span>Comprehend the relationship between physical activity and stress.</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check feature-icon"></i>
                    <span>To improve access to mental health and psychosocial services.</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check feature-icon"></i>
                    <span>To enhances the capacity of health professionals, teachers and
                        development workers and creates awareness through improved
                        public understanding of mental health and psychosocial issues.</span>
                </div><div class="feature-item">
                    <i class="fas fa-check feature-icon"></i>
                    <span>It has been extensively working to develop human resources in
                        mental health and psychosocial counseling services.</span>
                </div>

            </div>
            <span>SPECIFIC OBJECTIVES</span>
            <div class="service-features">
                <div class="feature-item">
                    <i class="fas fa-check feature-icon"></i>
                    <span> It’s a vision of enhancing psychosocial wellbeing and promotion of
                        dignified life of the people with mental health problems.</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check feature-icon"></i>
                    <span>To increase better understanding of mental health and psychosocial
                        issues and its needs, and thereby promotes mental health awareness
                        at national and local levels through networking, capacity building
                        and awareness.</span>
                    </div>
    </div>
</section>

<section class="different-from-other">
    <div class="container">
        <h2 class="section-title">Why We Are Different From other Counselling Services?</h2>
        <p class="section-description">
            One of the strongest predictors of successful outcomes in psychotherapy
            is the amount of experience the therapist has. And ,we are so proud to
            achieved more than 2000 plus recover cases which includes people with
            dealing with anxiety ,depression and many other psycho social issues.
            
            Being an expat psychotherapist, we know it well that clients coming
            from different cultural environments need different kinds of therapy
            techniques. We use different supportive alternatives for treatment which
            includes different activities,different life skills, food check list and sleep
            checklist and different problem solving approaches and personality
            assessment etc.We don't recommend any kind of medicine.
            Our commitment to you is to be as clear and authentic as possible. we
            will help you to push yourself, by being compassionate. Combining our
            experience as a cross-cultural psychologist together with the best that
            psychotherapy has to offer and what we learn together about you — to
            know when to tread gently, and when and how to help you dig in —
            kind of like a good personal trainer.
            We focus on helping people create and experience changes in their lives,
            like: emotional evolution, better relationships with themself and with
            others, healthy and useful self-understanding, greater life satisfaction,
            etc.</p>
    </div>
</section>
<!-- Our Team Section -->
<section class="our-team">
    <div class="container">
        <h2 class="section-title">Meet Our Team</h2>
        <div class="team-grid">
            <!-- Team Member 1 -->
            <div class="team-member">
                <div class="team-image">
                    <img src="{{asset('user-assets/images/counsellor/manager.jpg')}}" alt="Rabina Shahi Khadka - Managing Director">
                </div>
                <h3 class="team-name">Rabina Shahi Khadka</h3>
                <p class="team-role">Psychologist</p>
            </div>

            <!-- Team Member 2
            <div class="team-member">
                <div class="team-image">
                    <img src="images/one.jpg" alt="John Smith">
                </div>
                <h3 class="team-name">John Smith</h3>
                <p class="team-role">Licensed Counselor</p>
            </div>

             Team Member 3 -->
            <!-- <div class="team-member">
                <div class="team-image">
                    <img src="images/one.jpg" alt="Sarah Johnson">
                </div>
                <h3 class="team-name">Sarah Johnson</h3>
                <p class="team-role">Family Therapist</p>
            </div>
        </div> --> 
    </div>
</section>

<!-- Our Values Section -->
<section class="our-values">
    <div class="container">
        <h2 class="section-title">Our Values</h2>
        <div class="values-grid">
            <!-- Value 1 -->
            <div class="value-card">
                <i class="fas fa-heart value-icon"></i>
                <h3 class="value-title">Compassion</h3>
                <p class="value-description">We approach every client with empathy and understanding.</p>
            </div>

            <!-- Value 2 -->
            <div class="value-card">
                <i class="fas fa-users value-icon"></i>
                <h3 class="value-title">Community</h3>
                <p class="value-description">We believe in building strong, supportive communities.</p>
            </div>

            <!-- Value 3 -->
            <div class="value-card">
                <i class="fas fa-lightbulb value-icon"></i>
                <h3 class="value-title">Innovation</h3>
                <p class="value-description">We use evidence-based practices to deliver effective care.</p>
            </div>

            <!-- Value 4 -->
            <div class="value-card">
                <i class="fas fa-hand-holding-heart value-icon"></i>
                <h3 class="value-title">Empowerment</h3>
                <p class="value-description">We empower our clients to take control of their mental health.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section">
    <div class="container">
        <h2 class="cta-title">Ready to Start Your Journey?</h2>
        <p class="cta-description">Contact us today to schedule a consultation and take the first step toward mental wellness.</p>
        <a href="#contact" class="btn-cta">Get Started</a>
    </div>
</section>

<!-- Footer Section -->
@include('layouts.footer')