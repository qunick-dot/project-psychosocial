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
        /* Custom styles for logo and brand */
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            max-height: 50px;
            margin-right: 15px;
        }
        
        .brand-name {
            font-size: 1.5rem;
            margin-bottom: 0;
        }
        
        /* Remove default dropdown caret if using custom icon */
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
        
        /* Add active state styling */
        .nav-link.active {
            font-weight: bold;
            color: #0d6efd !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/index">
                <img src="{{asset('user-assets/images/logo/psychosocial_counselling_logo.jpg')}}" alt="Logo" style="max-height: 50px; margin-right: 10px;">
                <span class="brand-name">Psychosocial Counselling Services</span>
            </a>
    
            <!-- Toggler button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- Menu items -->
                    <li class="nav-item">
                        <a href="/index" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle no-caret" href="{{route('services.index')}}" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.29289 8.79289C6.68342 8.40237 7.31658 8.40237 7.70711 8.79289L12 13.0858L16.2929 8.79289C16.6834 8.40237 17.3166 8.40237 17.7071 8.79289C18.0976 9.18342 18.0976 9.81658 17.7071 10.2071L12.7071 15.2071C12.3166 15.5976 11.6834 15.5976 11.2929 15.2071L6.29289 10.2071C5.90237 9.81658 5.90237 9.18342 6.29289 8.79289Z" fill="#000000"/>
                                </svg>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            @foreach($services as $service)
                            <li>
                                <a class="dropdown-item" href="{{ url('/services/' . $service->slug) }}">
                                    {{ $service->title }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{('blogs.index')}}" class="nav-link {{ request()->is('blog') ? 'active' : '' }}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle no-caret" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Learn More <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.29289 8.79289C6.68342 8.40237 7.31658 8.40237 7.70711 8.79289L12 13.0858L16.2929 8.79289C16.6834 8.40237 17.3166 8.40237 17.7071 8.79289C18.0976 9.18342 18.0976 9.81658 17.7071 10.2071L12.7071 15.2071C12.3166 15.5976 11.6834 15.5976 11.2929 15.2071L6.29289 10.2071C5.90237 9.81658 5.90237 9.18342 6.29289 8.79289Z" fill="#000000"/>
                                </svg>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                           
                            <li>
                                <a class="dropdown-item" href="{{ route('counselors.index') }}">
                                    Team Member
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('reviews.index') }}">
                                    Reviews
                                </a>
                            
                        </ul>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="/appointment-book" class="btn btn-primary">Book Appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>