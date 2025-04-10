

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Psychosocial Service</h1>
        <a href="<?php echo e(route('admin.services.index')); ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?php echo e(route('admin.services.update', $service->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                
                <div class="row mb-3">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="title" name="title" value="<?php echo e(old('title', $service->title)); ?>" required>
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="slug" name="slug" value="<?php echo e(old('slug', $service->slug)); ?>">
                            <small class="text-muted">Leave empty to auto-generate from title</small>
                            <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['subtitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="subtitle" name="subtitle" value="<?php echo e(old('subtitle', $service->subtitle)); ?>">
                    <?php $__errorArgs = ['subtitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-3">
                    <label for="why_it_matters" class="form-label">Why It Matters</label>
                    <textarea class="form-control <?php $__errorArgs = ['why_it_matters'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="why_it_matters" name="why_it_matters" rows="4"><?php echo e(old('why_it_matters', $service->why_it_matters)); ?></textarea>
                    <?php $__errorArgs = ['why_it_matters'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="image" class="form-label">Feature Image</label>
                        <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="image" name="image">
                        <?php $__errorArgs = ['image'];
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
                        <?php if(isset($service) && $service->image): ?>
                            <div class="mt-2">
                                 <img src="<?php echo e(asset('storage/' . $service->image)); ?>" alt="<?php echo e($service->title); ?>" style="max-width: 200px; max-height: 200px; object-fit: cover;">

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Our Approach</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="approach_title" class="form-label">Approach Title</label>
                                    <input type="text" class="form-control" id="approach_title" name="approach_title" value="<?php echo e(old('approach_title', $service->approach_title)); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="approach_subtitle" class="form-label">Approach Subtitle</label>
                                    <input type="text" class="form-control" id="approach_subtitle" name="approach_subtitle" value="<?php echo e(old('approach_subtitle', $service->approach_subtitle)); ?>">
                                </div>
                            </div>
                        </div>

                        <h6 class="mb-3">Approach Items</h6>
                        <div id="approach-items-container">
                            <?php if(is_array($service->approach_items) && count($service->approach_items) > 0): ?>
                                <?php $__currentLoopData = $service->approach_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card mb-3 approach-item">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h5 class="card-title">Approach Item #<?php echo e($index + 1); ?></h5>
                                                <button type="button" class="btn btn-sm btn-danger remove-approach-item">Remove</button>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Icon Class</label>
                                                <input type="text" name="approach_item_icon[]" class="form-control" value="<?php echo e($item['icon'] ?? ''); ?>" placeholder="fas fa-check">
                                                <small class="text-muted">Use FontAwesome icon classes (e.g., fas fa-brain)</small>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" name="approach_item_title[]" class="form-control" value="<?php echo e($item['title'] ?? ''); ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea name="approach_item_description[]" class="form-control" rows="3"><?php echo e($item['description'] ?? ''); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <div class="card mb-3 approach-item">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h5 class="card-title">Approach Item #1</h5>
                                            <button type="button" class="btn btn-sm btn-danger remove-approach-item">Remove</button>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Icon Class</label>
                                            <input type="text" name="approach_item_icon[]" class="form-control" value="fas fa-user-circle" placeholder="fas fa-check">
                                            <small class="text-muted">Use FontAwesome icon classes (e.g., fas fa-brain)</small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="approach_item_title[]" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="approach_item_description[]" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <button type="button" id="add-approach-item" class="btn btn-success">
                                <i class="fas fa-plus"></i> Add Another Approach Item
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">FAQs</h5>
                    </div>
                    <div class="card-body">
                        <div id="faqs-container">
                            <?php if(is_array($service->faqs) && count($service->faqs) > 0): ?>
                                <?php $__currentLoopData = $service->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card mb-3 faq-item">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h5 class="card-title">FAQ #<?php echo e($index + 1); ?></h5>
                                                <button type="button" class="btn btn-sm btn-danger remove-faq">Remove</button>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Question</label>
                                                <input type="text" name="faq_question[]" class="form-control" value="<?php echo e($faq['question'] ?? ''); ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Answer</label>
                                                <textarea name="faq_answer[]" class="form-control" rows="3"><?php echo e($faq['answer'] ?? ''); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <div class="card mb-3 faq-item">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h5 class="card-title">FAQ #1</h5>
                                        <button type="button" class="btn btn-sm btn-danger remove-faq">Remove</button>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Question</label>
                                        <input type="text" name="faq_question[]" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Answer</label>
                                        <textarea name="faq_answer[]" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <button type="button" id="add-faq" class="btn btn-success">
                            <i class="fas fa-plus"></i> Add Another FAQ
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" <?php echo e(old('is_active', $service->is_active) ? 'checked' : ''); ?>>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">Update Service</button>
            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php $__env->stopSection(); ?>
            
            <?php $__env->startPush('scripts'); ?>
            <script src="<?php echo e(asset('user-assets/js/admin-services.js')); ?>"></script>
            <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\Psychoresearch\resources\views\admin\services\edit.blade.php ENDPATH**/ ?>