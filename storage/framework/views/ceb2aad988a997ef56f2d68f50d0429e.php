<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($service->meta_title ?? $service->title); ?></title>
    <meta name="description" content="<?php echo e($service->meta_description ?? Str::limit(strip_tags($service->subtitle ?? ''), 160)); ?>">
    <?php if($service->meta_keywords): ?>
        <meta name="keywords" content="<?php echo e($service->meta_keywords); ?>">
    <?php endif; ?>
    <!-- Open Graph / Social Media Tags -->
    <meta property="og:title" content="<?php echo e($service->meta_title ?? $service->title); ?>">
    <meta property="og:description" content="<?php echo e($service->meta_description ?? Str::limit(strip_tags($service->subtitle ?? ''), 160)); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <?php if($service->image): ?>
        <meta property="og:image" content="<?php echo e(asset('storage/' . $service->image)); ?>">
    <?php endif; ?>
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
    <link rel="canonical" href="<?php echo e(url('/services/' . $service->slug)); ?>">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Lora:wght@400;500;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #5C6AC4;
            --secondary-color: #47B881;
            --accent-color: #D4E2FC;
            --text-color: #333333;
            --light-gray: #F5F7FA;
            --dark-gray: #425A70;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Lora', serif;
            font-weight: 400;
        }
        
        /* Hero Section */
        .content-hero {
            background-color: var(--light-gray);
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .hero-title {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            max-width: 800px;
            margin-bottom: 2rem;
            color: var(--dark-gray);
        }
        
        .service-hero-image {
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            width: 500px;
            height: 500px;
        }
        
        /* Content Sections */
        section {
            padding: 5rem 0;
        }
        
        section:nth-child(even) {
            background-color: var(--light-gray);
        }
        
        .section-title {
            font-size: 2.25rem;
            margin-bottom: 2rem;
            text-align: center;
            color: var(--primary-color);
            position: relative;
            padding-bottom: 1rem;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--secondary-color);
        }
        
        .section-subtitle {
            text-align: center;
            font-size: 1.1rem;
            margin-bottom: 3rem;
            color: var(--dark-gray);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .section-description {
            max-width: 900px;
            margin: 0 auto;
        }
        
        /* Approach Section */
        .approach-list {
            list-style: none;
            padding: 0;
            margin: 3rem 0;
        }
        
        .approach-item {
            display: flex;
            margin-bottom: 2.5rem;
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .approach-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .approach-item-icon {
            font-size: 2rem;
            margin-right: 2rem;
            color: var(--secondary-color);
            background-color: var(--accent-color);
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .approach-item-content h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        /* FAQ Section */
        .faq-section {
            background-color: white;
        }
        
        .accordion-item {
            border: none;
            margin-bottom: 1rem;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }
        
        .accordion-button {
            font-family: 'Lora', serif;
            font-weight: 500;
            font-size: 1.1rem;
            padding: 1.25rem;
            color: var(--primary-color);
            background-color: white;
        }
        
        .accordion-button:not(.collapsed) {
            color: white;
            background-color: var(--primary-color);
        }
        
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0,0,0,.125);
        }
        
        .accordion-body {
            padding: 1.5rem;
            background-color: var(--light-gray);
        }
        
        /* Consultation Form */
        .consultation-form-section {
            background-color: var(--primary-color);
            color: white;
            padding: 5rem 0;
        }
        
        .consultation-form-section .section-title {
            color: white;
        }
        
        .consultation-form-section .section-title:after {
            background-color: white;
        }
        
        .consultation-form {
            background-color: white;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-color);
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
        }
        
        .form-group textarea {
            height: 150px;
            resize: vertical;
        }
        
        button[type="submit"] {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s ease;
            display: block;
            width: 100%;
        }
        
        button[type="submit"]:hover {
            background-color: #3a9c6c;
        }
        
        /* Related Services */
        .related-services {
            padding: 5rem 0;
        }
        
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
        }
        
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        
        .card-body {
            padding: 2rem !important;
        }
        
        .card-title {
            font-size: 1.3rem !important;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.5rem 1.5rem;
            font-weight: 500;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .content-hero {
                padding: 5rem 0 3rem;
            }
            
            .hero-title {
                font-size: 2.25rem;
            }
            
            .section-title {
                font-size: 1rem;
            }
            
            .approach-item {
                flex-direction: column;
                padding: 1.5rem;
            }
            
            .approach-item-icon {
                margin-right: 0;
                margin-bottom: 1.5rem;
            }
            
            .consultation-form {
                padding: 2rem;
            }
        }
    </style>
</head>
<body>
    <?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
    <div class="service-page">
        <!-- Hero Section -->
        <section class="content-hero">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Image on the left -->
                    <div class="col-lg-6 mt-4 mt-lg-0 text-center">
                        <?php if($service->image): ?>
                            <img src="<?php echo e(asset('storage/' . $service->image)); ?>" alt="<?php echo e($service->title); ?>" class="service-hero-image">
                        <?php endif; ?>
                    </div>
        
                    <!-- Text content on the right -->
                    <div class="col-lg-6">
                        <h1 class="hero-title"><?php echo e($service->title); ?></h1>
                        <p class="hero-subtitle"><?php echo e($service->subtitle); ?></p>
                        <a href="#consultation" class="btn btn-lg" style="background-color: var(--secondary-color); color: white;">
                            Get Started <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
    
        <!-- Content Section -->
        <section class="services-content">
            <div class="container">
                <h2 class="section-title">Why It Matters</h2>
                <div class="section-description">
                    <?php echo $service->why_it_matters; ?>

                </div>
            </div>
        </section>
    
        <!-- Approach Section -->
        <?php if(!empty($service->approach_items) && is_array($service->approach_items)): ?>
        <section class="approach-section">
            <div class="container">
                <h2 class="section-title"><?php echo e($service->approach_title ?? 'Our Approach'); ?></h2>
                <?php if(!empty($service->approach_subtitle)): ?>
                <p class="section-subtitle"><?php echo e($service->approach_subtitle); ?></p>
                <?php endif; ?>
                
                <div class="approach-content">
                    <ul class="approach-list">
                        <?php $__currentLoopData = $service->approach_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="approach-item">
                            <div class="approach-item-icon">
                                <i class="<?php echo e($item['icon'] ?? 'fas fa-heart'); ?>"></i>
                            </div>
                            <div class="approach-item-content">
                                <h3><?php echo e($item['title']); ?></h3>
                                <p><?php echo e($item['description']); ?></p>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </section>
        <?php endif; ?>
    
        <!-- FAQ Section -->
        <?php if(!empty($service->faqs) && is_array($service->faqs)): ?>
        <section class="faq-section">
            <div class="container">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion">
                    <?php $__currentLoopData = $service->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading<?php echo e($index); ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($index); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($index); ?>">
                                <?php echo e($faq['question']); ?>

                            </button>
                        </h3>
                        <div id="collapse<?php echo e($index); ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo e($index); ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?php echo $faq['answer']; ?>

                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <?php endif; ?>
    
        
        <!-- Consultation Form -->
       <section class="consultation-form-section" id="consultation">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-subtitle">Get in Touch</span>
            <h2 class="section-title">Request a Consultation</h2>
            <p class="section-description">Fill out the form below, and we'll get back to you shortly to schedule your consultation.</p>
        </div>
        <div class="card-body">
            <?php if(session('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

        <div class="form-container">
            <!-- Image on the Left -->
            <div class="form-image">
                <img src=<?php echo e(asset('user-assets/images/others/consultation-image.jpg')); ?> alt="Consultation Image">
            </div>

            <!-- Form on the Right -->
            <form method="POST" action="<?php echo e(route('consultations.store')); ?>" class="consultation-form">
                <?php echo csrf_field(); ?>

                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        value="<?php echo e(old('name')); ?>" placeholder="Enter your full name" required>
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            
                <div class="form-group mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        value="<?php echo e(old('email')); ?>" placeholder="Enter your email address" required>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            
                <div class="form-group mb-3">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        value="<?php echo e(old('phone')); ?>" placeholder="Enter your phone number" required>
                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            
                <div class="form-group mb-3">
                    <label for="preferred_date">Preferred Consultation Date</label>
                    <input type="date" id="preferred_date" name="preferred_date" class="form-control <?php $__errorArgs = ['preferred_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        value="<?php echo e(old('preferred_date')); ?>" required>
                    <?php $__errorArgs = ['preferred_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group mb-3">
                        <label for="preferred_time">Preferred Consultation Time</label>
                        <input type="time" id="preferred_time" name="preferred_time" class="form-control <?php $__errorArgs = ['preferred_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            value="<?php echo e(old('preferred_time')); ?>" required>
                        <?php $__errorArgs = ['preferred_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group mb-3">
                    <label for="service">Select a Service</label>
                    <select id="service" name="service" class="form-control <?php $__errorArgs = ['service'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                        <option value="">Select a Service</option>
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($service->id); ?>" <?php echo e(old('service') == $service->id ? 'selected' : ''); ?>><?php echo e($service->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </select>
                    <?php $__errorArgs = ['service'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
                <div class="form-group mb-3">
                    <label for="consultant">Choose a Consultant</label>
                    <select id="consultant" name="consultant" class="form-control <?php $__errorArgs = ['consultant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                        <option value="">Select a Consultant</option>
                        <option value="john_doe" <?php echo e(old('consultant') == 'john_doe' ? 'selected' : ''); ?>>John Doe</option>
                        <option value="sarah_smith" <?php echo e(old('consultant') == 'sarah_smith' ? 'selected' : ''); ?>>Sarah Smith</option>
                        <option value="michael_brown" <?php echo e(old('consultant') == 'michael_brown' ? 'selected' : ''); ?>>Michael Brown</option>
                    </select>
                    <?php $__errorArgs = ['consultant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            
                <div class="form-group mb-3">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" class="form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        rows="5" placeholder="Tell us about your needs" required><?php echo e(old('message')); ?></textarea>
                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </div>
            </form>
            
        </div>
    </div>
</section>
        <!-- Related Services with Improved Card Design -->
        <section class="related-services">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title">Other Services You Might Be Interested In</h2>
                    </div>
                </div>
                
                <div class="row">
                    <?php $__currentLoopData = \App\Models\Service::where('id', '!=', $service->id)->where('is_active', true)->take(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedService): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow border-0">
                            <?php if($relatedService->image): ?>
                                <img src="<?php echo e(asset('storage/' . $relatedService->image)); ?>" alt="<?php echo e($relatedService->title); ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                            <?php endif; ?>
                            <div class="card-body p-4">
                                <h3 class="card-title h5 mb-3"><?php echo e($relatedService->title); ?></h3>
                                <p class="card-text text-muted mb-4"><?php echo e(Str::limit($relatedService->subtitle ?? '', 100)); ?></p>
                                <a href="<?php echo e(route('services.show', $relatedService->slug)); ?>" class="btn btn-outline-primary">
                                    Learn More <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        
        <!-- Trust Indicators Section (New) -->
        <section class="trust-indicators" style="background-color: var(--light-gray);">
            <div class="container">
                <h2 class="section-title">Why Trust Us</h2>
                <div class="row text-center">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="trust-item">
                            <div class="icon-wrapper mb-3">
                                <i class="fas fa-certificate fa-3x" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="h5 mb-3">Licensed Professionals</h3>
                            <p>Our team consists of certified therapists with years of experience and specialized training.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="trust-item">
                            <div class="icon-wrapper mb-3">
                                <i class="fas fa-shield-alt fa-3x" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="h5 mb-3">Confidential & Secure</h3>
                            <p>We prioritize your privacy with confidential sessions and secure information handling.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="trust-item">
                            <div class="icon-wrapper mb-3">
                                <i class="fas fa-heart fa-3x" style="color: var(--primary-color);"></i>
                            </div>
                            <h3 class="h5 mb-3">Personalized Care</h3>
                            <p>We develop individualized treatment plans tailored to your unique needs and goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

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

        
    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html><?php /**PATH D:\xampp\htdocs\Psychoresearch\resources\views\services\show.blade.php ENDPATH**/ ?>