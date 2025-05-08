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
    @include('layouts.navbar')

    <main class="container py-4">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>
</html>
