

<?php $__env->startSection('title', 'So sánh nguồn dữ liệu'); ?>
<?php $__env->startSection('content'); ?>
    <h2>So sánh nguồn dữ liệu: Mảng tĩnh vs CSDL (Eloquent)</h2>
    <nav style="margin-bottom:12px">
        <a href="<?php echo e(url('/students/combined?source=array')); ?>">Tab: Tĩnh
            (Array)</a> |

        <a href="<?php echo e(url('/students/combined?source=db')); ?>">Tab: CSDL
            (Eloquent)</a>
    </nav>
    <?php if($source === 'array'): ?>
        <h3>Nguồn: Mảng tĩnh</h3>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ tên</th>
                    <th>Tuổi</th>
                    <th>Giới
                        tính</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $static; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($s['name']); ?></td>
                        <td><?php echo e($s['age']); ?></td>
                        <td><?php echo e($s['gender']); ?></td>
                        <td><?php echo e($s['email']); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <h3>Nguồn: CSDL (Eloquent) – có phân trang</h3>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ tên</th>
                    <th>Tuổi</th>
                    <th>Giới
                        tính</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $db; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration + ($db->currentPage() - 1) * $db->perPage()); ?></td>
                                <td><?php echo e($s->name); ?></td>
                                <td><?php echo e($s->age); ?></td>
                                <td><?php echo e($s->gender); ?></td>
                                <td><?php echo e($s->email); ?></td>
                            </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div style="margin-top:12px">
            <?php echo e($db->appends(['source' => 'db'])->links()); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Lab02-Framework\resources\views/students/combined.blade.php ENDPATH**/ ?>