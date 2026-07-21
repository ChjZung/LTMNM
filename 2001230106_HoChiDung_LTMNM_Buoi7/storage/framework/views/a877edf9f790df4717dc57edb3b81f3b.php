<?php
    $currentRoute = Route::currentRouteName();
?>

<div style="font-size: 14px; color: #475569; margin-bottom: 16px; padding: 10px 14px; background: #f1f5f9; border-radius: 6px; border: 1px solid #e2e8f0;">
    <a href="<?php echo e(url('/')); ?>" style="color: #2563eb; text-decoration: none; font-weight: 500;">Trang chủ</a>
    
    <?php if(str_contains($currentRoute, 'index')): ?>
        &nbsp;/&nbsp; <span style="font-weight: 600;">Danh sách bài viết</span>
    <?php elseif(str_contains($currentRoute, 'create')): ?>
        &nbsp;/&nbsp; <a href="<?php echo e(route('bt9.articles.index')); ?>" style="color: #2563eb; text-decoration: none; font-weight: 500;">Danh sách bài viết</a>
        &nbsp;/&nbsp; <span style="font-weight: 600;">Tạo bài viết mới</span>
    <?php elseif(str_contains($currentRoute, 'show')): ?>
        &nbsp;/&nbsp; <a href="<?php echo e(route('bt9.articles.index')); ?>" style="color: #2563eb; text-decoration: none; font-weight: 500;">Danh sách bài viết</a>
        &nbsp;/&nbsp; <span style="font-weight: 600;">Chi tiết bài viết</span>
    <?php else: ?>
        &nbsp;/&nbsp; <span>Tuyến đường: <?php echo e($currentRoute); ?></span>
    <?php endif; ?>
    
    <span style="float: right; color: #94a3b8; font-size: 12px;">Route Name: <code><?php echo e($currentRoute); ?></code></span>
</div>
<?php /**PATH C:\laragon\www\lab7\resources\views/partials/breadcrumb.blade.php ENDPATH**/ ?>