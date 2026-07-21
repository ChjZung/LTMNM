<?php $__env->startSection('title','Danh sách bài viết - BT09'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h2>Danh sách bài viết (BT09 - Tối ưu Named Routes)</h2>

<a href="<?php echo e(route('bt9.articles.create')); ?>" style="display:inline-block;margin-bottom:12px;padding:8px 14px;background:#2563eb;color:#fff;text-decoration:none;border-radius:6px;font-weight:500">+ Tạo bài viết mới (bằng route('bt9.articles.create'))</a>

<table>
<thead>
<tr><th>ID</th><th>Tiêu đề</th><th>Hành động</th></tr>
</thead>
<tbody>
<?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>
<td><?php echo e($a['id']); ?></td>
<td><?php echo e($a['title']); ?></td>
<td>
<a href="<?php echo e(route('bt9.articles.show', $a['id'])); ?>" style="color:#2563eb">Xem (Named Route)</a>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<tr><td colspan="3">Chưa có bài viết.</td></tr>
<?php endif; ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lab7\resources\views/bt9/articles/index.blade.php ENDPATH**/ ?>