<?php $__env->startSection('title','Danh sách bài viết (BT4 & BT5)'); ?>
<?php $__env->startSection('content'); ?>
<h2>Danh sách bài viết</h2>
<a href="<?php echo e(route('bt5.articles.create')); ?>" style="display:inline-block;margin-bottom:10px;padding:6px 12px;background:#2563eb;color:#fff;text-decoration:none;border-radius:4px">+ Tạo bài viết mới</a>
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
<a href="<?php echo e(route('bt5.articles.show',$a['id'])); ?>">Xem</a> |
<a href="<?php echo e(route('bt5.articles.edit',$a['id'])); ?>">Sửa</a> |
<form action="<?php echo e(route('bt5.articles.destroy',$a['id'])); ?>" method="post" style="display:inline">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" onclick="return confirm('Xoá?')">Xoá</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<tr><td colspan="3">Chưa có bài viết.</td></tr>
<?php endif; ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lab7\resources\views/bt5/articles/index.blade.php ENDPATH**/ ?>