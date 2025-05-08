<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
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
          <li><a href="/admin/dashboard" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
          <li><a href="{{ route('admin.services.index') }}"><i class="fas fa-cogs"></i> Service Management</a></li>
          <li><a href="{{ route('admin.counselors.index') }}"><i class="fas fa-users"></i> Team Management</a></li>
          <li><a href="{{ route('admin.reviews.index')}}"><i class="fas fa-star"></i> Review Management</a></li>
          <li><a href="{{route("admin.blogs.index")}}"><i class="fas fa-blog"></i> Blog Posts</a></li>
          <li><a href="#settings"><i class="fas fa-cog"></i> Settings</a></li>
          <li><a href="#logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
      </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <div class="header">
        <div>
          <h2 id="page-title">Dashboard</h2>
        </div>
        <div class="user-profile">
          <img src="{{asset('user-assets/images/logo/psychosocial_counselling_logo.jpg')}}" alt="Admin Profile">
          <span>Admin User</span>
          <i class="fas fa-chevron-down" style="margin-left: 10px;"></i>
        </div>
      </div>

      <div class="content-wrapper">
        <!-- Dashboard Tab -->
        <div id="dashboard" class="tab-content active">
          <div class="stats-container">
            <div class="stat-card">
              <div class="stat-icon bg-primary">
                <i class="fas fa-users"></i>
              </div>
              <div class="stat-info">
                <h3></h3>
                <p>Total Users</p>
              </div>
            </div>
            <div class="stat-card">
              <div class="stat-icon bg-success">
                <i class="fas fa-cogs"></i>
              </div>
              <div class="stat-info">
                <h3>24</h3>
                <p>Services</p>
              </div>
            </div>
            <div class="stat-card">
              <div class="stat-icon bg-warning">
                <i class="fas fa-star"></i>
              </div>
              <div class="stat-info">
                <h3>1,147</h3>
                <p>Reviews</p>
              </div>
            </div>
            <div class="stat-card">
              <div class="stat-icon bg-info">
                <i class="fas fa-blog"></i>
              </div>
              <div class="stat-info">
                <h3>38</h3>
                <p>Blog Posts</p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h3>Recent Activity</h3>
              <button class="btn btn-primary">View All</button>
            </div>
            
            <div class="card-body">
              
              <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Service</th>
                        <th>Consultant</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @if(isset($consultations) && $consultations->count() > 0)
                  @foreach($consultations as $consultation)
                      <tr>
                          <td>{{ $consultation->id }}</td>
                          <td>{{ $consultation->name }}</td>
                          <td>{{ $consultation->email }}</td>
                          <td>{{ $consultation->phone }}</td>
                          <td>{{ $consultation->service}}</td>
                          <td>{{ $consultation->preferred_date}}</td>
                          <td>{{ $consultation->preferred_time}}</td>
                          <td>{{ $consultation->preferred_date->format('F d, Y') }}</td>
                          <td>{{ $consultation->consultant }}</td>
                          <td>
                              <span class="status-badge {{ strtolower($consultation->status) }}">
                                  {{ $consultation->status }}
                              </span>
                          </td>
                          <td>
                              <form method="POST" action="{{ route('consultations.update-status', $consultation->id) }}">
                                  @csrf
                                  <button type="submit" name="status" value="Approved" class="approve-btn">Approve</button>
                                  <button type="submit" name="status" value="Declined" class="decline-btn">Decline</button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
              @else
                  <tr>
                      <td colspan="8">No consultation appointments found.</td>
                  </tr>
              @endif
                </tbody>
              </table>
          
          </div>
        </div>

        <!-- Services Tab -->
        <div id="services" class="tab-content">
          <div class="card">
            <div class="card-header">
              <h3>Services Management</h3>
              <button class="btn btn-primary">Add New Service</button>
            </div>
            <div class="card-body">
              <p>Services content will appear here</p>
            </div>
          </div>
        </div>

        <!-- Users Tab -->
        <div id="users" class="tab-content">
          <div class="card">
            <div class="card-header">
              <h3>Users Management</h3>
              <button class="btn btn-primary">Add New User</button>
            </div>
            <div class="card-body">
              <p>Users content will appear here</p>
            </div>
          </div>
        </div>

        <!-- Reviews Tab -->
        <div id="reviews" class="tab-content">
          <div class="card">
            <div class="card-header">
              <h3>Reviews Management</h3>
              <div>
                <button class="btn btn-primary">Export</button>
                <button class="btn btn-success" style="margin-left: 10px;">Filter</button>
              </div>
            </div>
            <div class="card-body">
              <p>Reviews content will appear here</p>
            </div>
          </div>
        </div>

        <!-- Blog Tab -->
        <div id="blog" class="tab-content">
          <div class="card">
            <div class="card-header">
              <h3>Blog Management</h3>
              <button class="btn btn-primary">Create Post</button>
            </div>
            <div class="card-body">
              <p>Blog content will appear here</p>
            </div>
          </div>
        </div>

        <!-- Settings Tab -->
        <div id="settings" class="tab-content">
          <div class="card">
            <div class="card-header">
              <h3>Account Settings</h3>
            </div>
            <div class="card-body">
              <form id="settings-form">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" id="username" value="admin" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" value="admin@example.com" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">New Password</label>
                  <input type="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                  <label for="confirm-password">Confirm Password</label>
                  <input type="password" id="confirm-password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </form>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header">
              <h3>Site Settings</h3>
            </div>
            <div class="card-body">
              <form id="site-settings-form">
                <div class="form-group">
                  <label for="site-title">Site Title</label>
                  <input type="text" id="site-title" value="Admin Dashboard" class="form-control">
                </div>
                <div class="form-group">
                  <label for="site-description">Site Description</label>
                  <textarea id="site-description" class="form-control" rows="3">Admin dashboard for managing website content and users.</textarea>
                </div>
                <div class="form-group">
                  <label>Theme</label>
                  <div class="theme-options">
                    <div class="theme-option active">
                      <div class="color-preview" style="background-color: #4361ee;"></div>
                      <span>Default</span>
                    </div>
                    <div class="theme-option">
                      <div class="color-preview" style="background-color: #4cc9f0;"></div>
                      <span>Ocean</span>
                    </div>
                    <div class="theme-option">
                      <div class="color-preview" style="background-color: #f72585;"></div>
                      <span>Pink</span>
                    </div>
                    <div class="theme-option">
                      <div class="color-preview" style="background-color: #7209b7;"></div>
                      <span>Purple</span>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Save Settings</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Tab navigation
      const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
      
      sidebarLinks.forEach(link => {
        link.addEventListener('click', function(e) {
          // Skip if it's an external link or not a tab toggle
          if (this.getAttribute('href').startsWith('http') || 
              !this.getAttribute('href').startsWith('#')) {
            return true;
          }
          
          e.preventDefault();
          
          // Handle logout
          if (this.getAttribute('href') === '#logout') {
            if (confirm('Are you sure you want to logout?')) {
              window.location.href = '/login.html';
            }
            return;
          }
          
          // Update active link
          sidebarLinks.forEach(l => l.classList.remove('active'));
          this.classList.add('active');
          
          // Get target tab
          const targetId = this.getAttribute('href').substring(1);
          
          // Hide all tabs and show target
          document.querySelectorAll('.tab-content').forEach(tab => {
            tab.classList.remove('active');
          });
          
          const targetTab = document.getElementById(targetId);
          if (targetTab) {
            targetTab.classList.add('active');
            document.getElementById('page-title').textContent = this.textContent.trim();
          }
        });
      });

      // Theme selection
      const themeOptions = document.querySelectorAll('.theme-option');
      themeOptions.forEach(option => {
        option.addEventListener('click', function() {
          themeOptions.forEach(opt => opt.classList.remove('active'));
          this.classList.add('active');
        });
      });

      // Mobile menu toggle (would need a hamburger button added to header)
      // This is just a placeholder for mobile functionality
      document.querySelector('.user-profile').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('active');
      });

      const toggles = document.querySelectorAll('.action-toggle');
    toggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            const menu = this.nextElementSibling;
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        });
    });
    
    // Close menus when clicking outside
    document.addEventListener('click', function() {
        document.querySelectorAll('.action-menu').forEach(menu => {
            menu.style.display = 'none';
        });
    });
    
    // Handle status updates
    const approveButtons = document.querySelectorAll('.approve-btn');
    const declineButtons = document.querySelectorAll('.decline-btn');
    
    approveButtons.forEach(button => {
        button.addEventListener('click', function() {
            updateStatus(this.dataset.id, this.dataset.status);
        });
    });
    
    declineButtons.forEach(button => {
        button.addEventListener('click', function() {
            updateStatus(this.dataset.id, this.dataset.status);
        });
    });
    
    function updateStatus(id, status) {
        // Create CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
        // Send AJAX request
        fetch('http://127.0.0.1:8000//consultations/' + id + '/status', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: JSON.stringify({ status: status })
        })
        // .then(response => response.json())
        // .then(data => {
        //     if (data.success) {
        //         // Update the status badge
        //         const statusBadge = document.querySelector('#consultation-' + id + ' .status-badge');
        //         statusBadge.textContent = status;
        //         statusBadge.className = 'status-badge ' + status.toLowerCase();
                
        //         // Show success message
        //         const alertDiv = document.createElement('div');
        //         alertDiv.className = 'alert alert-success alert-dismissible fade show';
        //         alertDiv.innerHTML = `
        //             Status updated to ${status} successfully.
        //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //         `;
                
        //         const cardBody = document.querySelector('.card-body');
        //         cardBody.insertBefore(alertDiv, cardBody.firstChild);
                
        //         // Auto dismiss alert after 3 seconds
        //         setTimeout(() => {
        //             alertDiv.remove();
        //         }, 3000);
        //     }
        // })
        // .catch(error => {
        //     console.error('Error:', error);
        //     alert('An error occurred while updating the status.');
        // });
        .then(response => {
    console.log('Raw Response:', response);
    return response.json();
})
    }
});

  

  </script>
</body>
</html>