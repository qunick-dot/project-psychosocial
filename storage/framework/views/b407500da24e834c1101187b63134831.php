

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Contact Message</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> <?php echo e($contact->name); ?></p>
            <p><strong>Email:</strong> <?php echo e($contact->email); ?></p>
            <p><strong>Phone:</strong> <?php echo e($contact->phone); ?></p>
            <p><strong>Message:</strong> <?php echo e($contact->message); ?></p>
        </div>
    </div>
    <a href="<?php echo e(route('admin.contacts.index')); ?>" class="btn btn-primary mt-3">Back to List</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\Psychoresearch\resources\views\admin\contacts\show.blade.php ENDPATH**/ ?>