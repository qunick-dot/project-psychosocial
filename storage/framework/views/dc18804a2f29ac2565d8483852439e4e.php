

<?php $__env->startSection('content'); ?>
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">Blog</h1>
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="bg-white rounded-lg shadow overflow-hidden">
                <?php if($post->image): ?>
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>" class="w-full h-full object-cover">
                    </div>
                <?php else: ?>
                    <div class="h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                        <span>Post Image</span>
                    </div>
                <?php endif; ?>
                
                <div class="p-6">
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-blue-600 font-semibold"><?php echo e($post->category); ?></span>
                        <span class="text-gray-500"><?php echo e($post->published_at->format('M d, Y')); ?></span>
                    </div>
                    
                    <h3 class="text-xl font-bold mb-3"><?php echo e($post->title); ?></h3>
                    
                    <p class="text-gray-700 mb-4"><?php echo e($post->excerpt); ?></p>
                    
                    <a href="<?php echo e(route('blog.show', $post)); ?>" class="inline-block text-blue-600 font-semibold hover:text-blue-800">
                        Read More →
                    </a>
                </div>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="mt-8">
        <?php echo e($posts->links()); ?>

    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\Psychoresearch\resources\views\blog\show.blade.php ENDPATH**/ ?>