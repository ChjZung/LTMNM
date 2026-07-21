<?php $__env->startSection('title', $article->title); ?>
<?php $__env->startSection('content'); ?>
<h2>Chi tiết bài viết #<?php echo e($article->id); ?> (Route Model Binding)</h2>
<div style="background:#f9fafb;padding:16px;border:1px solid #e5e7eb;border-radius:8px;margin-top:12px">
    <h3 style="margin-top:0;color:#1d4ed8"><?php echo e($article->title); ?></h3>
    <p style="color:#374151;line-height:1.6"><?php echo e($article->body); ?></p>
</div>
<a href="<?php echo e(route('bt5.articles.index')); ?>" style="display:inline-block;margin-top:16px;color:#2563eb">&larr; Quay lại danh sách</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lab7\resources\views/bt6/articles/show.blade.php ENDPATH**/ ?>