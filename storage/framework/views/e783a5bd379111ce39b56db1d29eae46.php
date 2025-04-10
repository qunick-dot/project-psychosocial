<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Psychosocial Counseling Services</title>
    <style>
        /* Your existing CSS remains the same */
        .dropdown-toggle.no-caret::after {
            display: none !important;
        }
        
        /* Ensure dropdown menu is visible on hover for desktop */
        @media (min-width: 992px) {
            .dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo Section -->
            <div class="logo">
                <a href="/index">
                    <img src="<?php echo e(asset('user-assets/images/logo/psychosocial_counselling_logo.jpg')); ?>" alt="Psychosocial Counselling Services Logo">
                </a>
                <h1 class="brand-name">Psychosocial Counselling Services</h1>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/index" class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="/about" class="nav-link <?php echo e(request()->is('about') ? 'active' : ''); ?>">About Us</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle no-caret" href="<?php echo e(route('services.index')); ?>" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services <i class="fas fa-chevron-down ms-2"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(url('/services/' . $service->slug)); ?>">
                                    <?php echo e($service->title); ?>

                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a href="/blog" class="nav-link <?php echo e(request()->is('blog') ? 'active' : ''); ?>">Blogs</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="/contact" class="nav-link <?php echo e(request()->is('contact') ? 'active' : ''); ?>">Contact Us</a>
                    </li>
                    
                    <li class="nav-item ms-lg-3">
                        <a href="/appointment-book" class="btn btn-primary">Book Appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Optional: Custom JS for enhanced dropdown behavior -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Bootstrap dropdowns
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl)
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.matches('.dropdown-toggle') && !e.target.closest('.dropdown-menu')) {
                var dropdowns = document.querySelectorAll('.dropdown-menu.show');
                dropdowns.forEach(function(dropdown) {
                    dropdown.classList.remove('show');
                });
            }
        });
    });
    </script>
</body>
</html><?php /**PATH D:\xampp\htdocs\Psychoresearch\resources\views\layouts\navbar.blade.php ENDPATH**/ ?>