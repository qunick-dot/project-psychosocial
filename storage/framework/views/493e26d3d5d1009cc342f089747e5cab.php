

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Services</h1>
        <a href="<?php echo e(route('admin.services.create')); ?>" class="btn btn-primary shadow-sm rounded-pill">
            <i class="fas fa-plus fa-sm text-white mr-1"></i> Add New Service
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show shadow-sm border-left-success" role="alert">
            <strong>Success!</strong> <?php echo e(session('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4 border-0">
        <div class="card-header bg-gradient-primary text-white py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold">Manage Services</h6>
            <div class="custom-search-box">
                <input type="text" id="serviceSearch" class="form-control form-control-sm rounded-pill" placeholder="Quick search...">
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="servicesTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Title</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Status</th>
                            <th>Created</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="service-row">
                            <td class="text-center"><?php echo e($service->id); ?></td>
                            <td class="font-weight-bold text-primary"><?php echo e($service->title); ?></td>
                            <td class="text-center">
                              
                                <?php if($service->image): ?>
                                <img src="<?php echo e(asset('storage/' . $service->image)); ?>" alt="<?php echo e($service->title); ?>"
                                class="img-fluid rounded-circle" style="width: 50px; height: 50px;">
                            <?php endif; ?>
                               
                            </td>
                            <td class="text-center">
                                <span class="badge badge-pill px-3 py-2 <?php echo e($service->is_active ? 'badge-success' : 'badge-danger'); ?>">
                                    <?php echo e($service->is_active ? 'Active' : 'Inactive'); ?>

                                </span>
                            </td>
                            <td><?php echo e($service->created_at->format('M d, Y')); ?></td>
                            <td class="text-center">
                                <div class="btn-group action-buttons" role="group"  style="display: flex;">
                                    <a href="<?php echo e(route('services.show', $service->slug)); ?>" class="btn btn-outline-info btn-sm rounded-left" target="_blank" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="<?php echo e(route('admin.services.edit', $service->id)); ?>" class="btn btn-outline-primary btn-sm" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?php echo e(route('admin.services.destroy', $service->id)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-right" onclick="return confirm('Are you sure you want to delete this service?')" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* Custom Table Styling */
    #servicesTable {
        border-collapse: separate;
        border-spacing: 0 8px;
    }
    
    #servicesTable thead th {
        border-top: none;
        border-bottom: 2px solid #4e73df;
        background-color: #f8f9fc;
        color: #4e73df;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
    }
    
    .service-row {
        transition: all 0.2s ease;
        box-shadow: 0 1px 3px rgba(0,0,0,0.08);
    }
    
    .service-row:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        background-color: #f8f9fc;
    }
    
    .service-row td {
        border-top: none;
        border-bottom: none;
        padding: 15px 10px;
    }
    
    .service-row td:first-child {
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
    }
    
    .service-row td:last-child {
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
    }
    
    /* Action Buttons */
    .action-buttons .btn {
        border-radius: 0;
        transition: all 0.2s ease;
        padding: 0.375rem 0.75rem;
    }
    
    .action-buttons .btn:hover {
        background-color: #4e73df;
        color: white;
        border-color: #4e73df;
    }
    
    /* Alert Styling */
    .alert {
        border-radius: 8px;
    }
    
    .border-left-success {
        border-left: 4px solid #1cc88a;
    }
    
    /* Card Styles */
    .card {
        border-radius: 8px;
        overflow: hidden;
    }
    
    .card-header {
        border-bottom: none;
    }
    
    .bg-gradient-primary {
        background: linear-gradient(to right, #4e73df, #224abe);
    }
    
    /* Datatable Customization */
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_length {
        padding: 15px 0;
    }
    
    .dataTables_wrapper .dataTables_filter input {
        border-radius: 20px;
        padding-left: 15px;
        border: 1px solid #e3e6f0;
    }
    
    .dataTables_wrapper .custom-select {
        border-radius: 20px;
        padding-left: 15px;
    }
    
    /* Mobile Responsive Adjustments */
    @media (max-width: 768px) {
        .action-buttons .btn {
            padding: 0.25rem 0.5rem;
        }
        
        .service-row td {
            padding: 10px 5px;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(function() {
        // Initialize DataTable with enhanced options
        var table = $('#servicesTable').DataTable({
            order: [[0, 'desc']],
            responsive: true,
            autoWidth: false,
            language: {
                search: "",
                searchPlaceholder: "Search services...",
                lengthMenu: "Show _MENU_ entries",
                info: "Showing _START_ to _END_ of _TOTAL_ services",
                paginate: {
                    first: '<i class="fas fa-angle-double-left"></i>',
                    previous: '<i class="fas fa-angle-left"></i>',
                    next: '<i class="fas fa-angle-right"></i>',
                    last: '<i class="fas fa-angle-double-right"></i>'
                }
            },
            dom: '<"top d-flex justify-content-between align-items-center"lf>rt<"bottom d-flex justify-content-between align-items-center"ip>',
            drawCallback: function() {
                $('.dataTables_paginate .paginate_button').addClass('btn btn-sm');
                $('.dataTables_paginate .paginate_button.current').addClass('btn-primary');
            }
        });
        
        // Custom search box functionality
        $('#serviceSearch').on('keyup', function() {
            table.search(this.value).draw();
        });
        
        // Add row hover effect with jQuery for better cross-browser support
        $('#servicesTable tbody').on('mouseenter', 'tr', function() {
            $(this).addClass('highlight');
        }).on('mouseleave', 'tr', function() {
            $(this).removeClass('highlight');
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\Psychoresearch\resources\views\admin\services\index.blade.php ENDPATH**/ ?>