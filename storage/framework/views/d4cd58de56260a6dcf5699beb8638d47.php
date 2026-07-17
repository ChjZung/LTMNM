<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div style="
    background:#fff;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.12);
    margin-bottom:20px;
    overflow:hidden;
">

    <div style="
        background:linear-gradient(135deg,#2563EB,#06B6D4);
        color:white;
        padding:15px 20px;
    ">
        <h3 style="margin:0;"><?php echo e($title); ?></h3>
    </div>

    <div style="padding:20px;">
        <?php echo e($slot); ?>

    </div>

</div><?php /**PATH C:\laragon\www\Lab02-Framework\resources\views/components/card.blade.php ENDPATH**/ ?>