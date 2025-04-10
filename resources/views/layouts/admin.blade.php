<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Dashboard')</title>
  <link rel="stylesheet" href="{{ asset('admin-assets/css/admin.css') }}">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="app-container">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="sidebar-header">
        <h2><i class="fas fa-cogs"></i> Admin Panel</h2>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li><a href="{{ route('admin.dashboard') }}" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
          <li><a href="{{ route('admin.services.index') }}"><i class="fas fa-cogs"></i> Services</a></li>
          <li><a href="#"><i class="fas fa-users"></i> Users</a></li>
          <li><a href="#"><i class="fas fa-star"></i> Reviews</a></li>
          <li><a href="#"><i class="fas fa-blog"></i> Blog Posts</a></li>
          <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
          <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
      </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <div class="header">
        <div class="user-profile">
          <img src="{{ asset('user-assets/images/logo/psychosocial_counselling_logo.jpg') }}" alt="Admin Profile">
          <span>Admin User</span>
          <i class="fas fa-chevron-down" style="margin-left: 10px;"></i>
        </div>
      </div>
      
      <div class="content-wrapper">
        @yield('content')
      </div>
    </div>
  </div>
</body>
</html>