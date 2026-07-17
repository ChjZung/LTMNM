
<?php
    $age = (int) ($age ?? 0);
    $isAdult = $age >= 18;
?>
<span style="padding:2px 8px; border-radius:10px; font-size:12px;
background:<?php echo e($isAdult ? '#DCFCE7' : '#FEE2E2'); ?>;
color:<?php echo e($isAdult ? '#166534' : '#7F1D1D'); ?>;">

    <?php echo e($isAdult ? 'Adult (≥18)' : 'Under 18'); ?>

</span><?php /**PATH C:\laragon\www\Lab02-Framework\resources\views/components/badge.blade.php ENDPATH**/ ?>