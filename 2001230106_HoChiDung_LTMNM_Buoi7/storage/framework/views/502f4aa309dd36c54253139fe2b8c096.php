<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['type' => 'submit', 'variant' => 'primary']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['type' => 'submit', 'variant' => 'primary']); ?>
<?php foreach (array_filter((['type' => 'submit', 'variant' => 'primary']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$styles = match($variant) {
    'danger' => 'background: #dc2626; color: white; border: none; padding: 8px 16px; border-radius: 6px; cursor: pointer; font-weight: 500; transition: 0.2s;',
    default => 'background: #2563eb; color: white; border: none; padding: 8px 16px; border-radius: 6px; cursor: pointer; font-weight: 500; transition: 0.2s;',
};
?>

<button type="<?php echo e($type); ?>" style="<?php echo e($styles); ?>" <?php echo e($attributes); ?>>
    <?php echo e($slot); ?>

</button>
<?php /**PATH C:\laragon\www\lab7\resources\views/components/button.blade.php ENDPATH**/ ?>