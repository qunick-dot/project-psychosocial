

<?php $__env->startSection('meta'); ?>
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
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo e(url('/services/' . $service->slug)); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="service-page">
    <!-- Hero Section -->
    <section class="service-hero py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3"><?php echo e($service->title); ?></h1>
                    <?php if($service->subtitle): ?>
                        <p class="lead mb-4"><?php echo e($service->subtitle); ?></p>
                    <?php endif; ?>
                    <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
                </div>
                <div class="col-lg-6">
                    <?php if($service->image): ?>
                        <img src="<?php echo e(asset('storage/' . $service->image)); ?>" alt="<?php echo e($service->title); ?>" class="img-fluid rounded shadow">
                    <?php else: ?>
                        <div class="bg-light rounded shadow p-5 text-center">
                            <i class="fa fa-image fa-4x text-muted"></i>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Why It Matters Section -->
    <?php if($service->why_it_matters): ?>
    <section class="why-matters py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-4">Why It Matters</h2>
                    <div class="card shadow border-0">
                        <div class="card-body p-4">
                            <div class="why-matters-content">
                                <?php echo nl2br(e($service->why_it_matters)); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Our Approach Section -->
    <?php if($service->approach_items && count($service->approach_items) > 0): ?>
    <section class="our-approach py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2><?php echo e($service->approach_title ?? 'Our Approach'); ?></h2>
                    <?php if($service->approach_subtitle): ?>
                        <p class="lead"><?php echo e($service->approach_subtitle); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="row">
                <?php $__currentLoopData = $service->approach_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body">
                            <div class="approach-item-number mb-3">
                                <span class="badge bg-primary rounded-circle p-3"><?php echo e($index + 1); ?></span>
                            </div>
                            <h3 class="card-title h5"><?php echo e($item['title'] ?? ''); ?></h3>
                            <p class="card-text"><?php echo e($item['description'] ?? ''); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- FAQs Section -->
    <?php if($service->faqs && count($service->faqs) > 0): ?>
    <section class="faqs py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <?php $__currentLoopData = $service->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="accordion-item mb-3 shadow-sm border-0">
                            <h2 class="accordion-header" id="heading<?php echo e($index); ?>">
                                <button class="accordion-button <?php echo e($index === 0 ? '' : 'collapsed'); ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($index); ?>" aria-expanded="<?php echo e($index === 0 ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo e($index); ?>">
                                    <?php echo e($faq['question'] ?? ''); ?>

                                </button>
                            </h2>
                            <div id="collapse<?php echo e($index); ?>" class="accordion-collapse collapse <?php echo e($index === 0 ? 'show' : ''); ?>" aria-labelledby="heading<?php echo e($index); ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <?php echo e($faq['answer'] ?? ''); ?>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-4">Get Started Today</h2>
                    <p class="lead mb-5">Ready to learn more about our <?php echo e($service->title); ?> service? Contact us today for a consultation.</p>
                    
                    <div class="card shadow border-0">
                        <div class="card-body p-4">
                            <form action="/contact" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="service" value="<?php echo e($service->title); ?>">
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                </div>
                                
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\Psychoresearch\resources\views\admin\services\show.blade.php ENDPATH**/ ?>