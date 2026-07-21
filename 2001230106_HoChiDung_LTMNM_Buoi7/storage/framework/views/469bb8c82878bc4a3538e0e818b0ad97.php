<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['title' => 'Thông tin']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['title' => 'Thông tin']); ?>
<?php foreach (array_filter((['title' => 'Thông tin']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); margin-top: 16px; overflow: hidden;">
    <div style="background: #f8fafc; padding: 12px 16px; border-bottom: 1px solid #e2e8f0; font-weight: 600; color: #1e293b; font-size: 16px;">
        <?php echo e($title); ?>

    </div>
    <div style="padding: 16px; color: #334155; line-height: 1.5;">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH C:\laragon\www\lab7\resources\views/components/card.blade.php ENDPATH**/ ?>