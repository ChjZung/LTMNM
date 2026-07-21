<?php $__env->startSection('title', $article['title']); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h2>Chi tiết bài viết #<?php echo e($article['id']); ?></h2>

<div style="background:#f8fafc;padding:20px;border-radius:8px;border:1px solid #e2e8f0;margin-top:12px">
    <h3 style="margin-top:0;color:#1e293b"><?php echo e($article['title']); ?></h3>
    <p style="color:#475569;line-height:1.6"><?php echo e($article['body']); ?></p>
</div>

<div style="margin-top:16px">
    <a href="<?php echo e(route('bt9.articles.index')); ?>" style="color:#2563eb;text-decoration:none;font-weight:500">&larr; Quay lại danh sách bằng route('bt9.articles.index')</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lab7\resources\views/bt9/articles/show.blade.php ENDPATH**/ ?>