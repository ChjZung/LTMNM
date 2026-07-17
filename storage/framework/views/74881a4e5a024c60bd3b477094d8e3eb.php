



<?php $__env->startSection('title', 'Danh sách sinh viên (DB)'); ?>

<?php $__env->startSection('content'); ?>

    <h2>Danh sách sinh viên - CSDL (Eloquent)</h2>

    
    <?php if(session('success')): ?>

        <div style="
            background:#DCFCE7;
            color:#166534;
            border:1px solid #16A34A;
            padding:12px;
            border-radius:8px;
            margin-bottom:15px;
        ">
            <?php echo e(session('success')); ?>

        </div>

    <?php endif; ?>
    <div style="margin-bottom:15px;">

        <a href="<?php echo e(url('/students/create')); ?>" style="
                background:#2563EB;
                color:white;
                padding:10px 18px;
                border-radius:8px;
                text-decoration:none;
                font-weight:bold;
           ">
            ➕ Thêm sinh viên
        </a>
    </div>
    <form method="GET" action="<?php echo e(url('/students/db')); ?>">

        <label>Lọc giới tính:</label>

        <select name="gender" onchange="this.form.submit()">
            <option value="" <?php if(empty($gender)): echo 'selected'; endif; ?>>
                Tất cả
            </option>

            <option value="male" <?php if(($gender ?? '') === 'male'): echo 'selected'; endif; ?>>
                Nam
            </option>

            <option value="female" <?php if(($gender ?? '') === 'female'): echo 'selected'; endif; ?>>
                Nữ
            </option>
        </select>

        <label>Lọc tuổi:</label>

        <select name="age" onchange="this.form.submit()">
            <option value="" <?php if(empty($age)): echo 'selected'; endif; ?>>
                Tất cả
            </option>

            <option value="under18" <?php if(($age ?? '') === 'under18'): echo 'selected'; endif; ?>>
                Dưới 18
            </option>

            <option value="adult" <?php if(($age ?? '') === 'adult'): echo 'selected'; endif; ?>>
                Từ 18 trở lên
            </option>
        </select>

    </form>

    <table border="1" cellpadding="8" cellspacing="0">

        <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Tuổi</th>
                <th>Giới tính</th>
                <th>Email</th>
                <th>Nhãn tuổi</th>
                
                <th>Lớp</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($loop->iteration + ($students->currentPage() - 1) * $students->perPage()); ?>

                    </td>

                    <td><?php echo e($s->name); ?></td>

                    <td class="<?php echo \Illuminate\Support\Arr::toCssClasses(['adult' => ($s->age ?? 0) >= 18]); ?>">
                        <?php echo e($s->age); ?>

                    </td>

                    <td><?php echo e($s->gender); ?></td>

                    <td><?php echo e($s->email); ?></td>

                    <td>
                        <?php if (isset($component)) { $__componentOriginal2ddbc40e602c342e508ac696e52f8719 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbc40e602c342e508ac696e52f8719 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge','data' => ['age' => $s->age]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['age' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($s->age)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $attributes = $__attributesOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $component = $__componentOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__componentOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
                    </td>
                    
                    <td><?php echo e($s->class_name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>

    <div style="margin-top: 12px;">
        <?php echo e($students->links()); ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Lab02-Framework\resources\views/students/index_db.blade.php ENDPATH**/ ?>