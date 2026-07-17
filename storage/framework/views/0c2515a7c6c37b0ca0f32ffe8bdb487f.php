



<?php $__env->startSection('title', 'Thêm sinh viên'); ?>

<?php $__env->startSection('content'); ?>

<div style="
    max-width:650px;
    margin:30px auto;
    background:#fff;
    border-radius:18px;
    box-shadow:0 8px 25px rgba(0,0,0,.12);
    overflow:hidden;
">

    <div style="
        background:linear-gradient(135deg,#2563EB,#06B6D4);
        color:white;
        text-align:center;
        padding:25px;
    ">
        <h2 style="margin:0;">➕ Thêm sinh viên mới</h2>
        <p style="margin-top:8px;">Nhập đầy đủ thông tin để lưu vào cơ sở dữ liệu</p>
    </div>

    <form method="POST" action="<?php echo e(url('/students')); ?>" style="padding:30px;">

        <?php echo csrf_field(); ?>

        
        <div style="margin-bottom:20px;">
            <label><b>Họ tên</b></label><br>

            <input
                type="text"
                name="name"
                value="<?php echo e(old('name')); ?>"
                placeholder="Nhập họ tên..."
                style="
                    width:100%;
                    padding:10px;
                    margin-top:6px;
                    border:1px solid #ccc;
                    border-radius:8px;
                ">

            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div style="color:red;margin-top:5px;">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        
        <div style="margin-bottom:20px;">
            <label><b>Email</b></label><br>

            <input
                type="email"
                name="email"
                value="<?php echo e(old('email')); ?>"
                placeholder="example@gmail.com"
                style="
                    width:100%;
                    padding:10px;
                    margin-top:6px;
                    border:1px solid #ccc;
                    border-radius:8px;
                ">

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div style="color:red;margin-top:5px;">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        
        <div style="margin-bottom:20px;">
            <label><b>Tuổi</b></label><br>

            <input
                type="number"
                name="age"
                value="<?php echo e(old('age')); ?>"
                placeholder="Nhập tuổi"
                style="
                    width:100%;
                    padding:10px;
                    margin-top:6px;
                    border:1px solid #ccc;
                    border-radius:8px;
                ">

            <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div style="color:red;margin-top:5px;">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        
        <div style="margin-bottom:25px;">
            <label><b>Giới tính</b></label><br><br>

            <label>
                <input
                    type="radio"
                    name="gender"
                    value="male"
                    <?php echo e(old('gender') == 'male' ? 'checked' : ''); ?>>
                Nam
            </label>

            &nbsp;&nbsp;&nbsp;

            <label>
                <input
                    type="radio"
                    name="gender"
                    value="female"
                    <?php echo e(old('gender') == 'female' ? 'checked' : ''); ?>>
                Nữ
            </label>

            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div style="color:red;margin-top:8px;">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="text-align:center;">

            <button
                type="submit"
                style="
                    background:#2563EB;
                    color:white;
                    border:none;
                    padding:12px 30px;
                    border-radius:10px;
                    cursor:pointer;
                    font-size:16px;
                ">
                💾 Thêm sinh viên
            </button>

            <a href="<?php echo e(url('/students/db')); ?>"
                style="
                    margin-left:15px;
                    text-decoration:none;
                    color:#555;
                    font-weight:bold;
                ">
                ← Quay lại
            </a>

        </div>

    </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Lab02-Framework\resources\views/students/create.blade.php ENDPATH**/ ?>