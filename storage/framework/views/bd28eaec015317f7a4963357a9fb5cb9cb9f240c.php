
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route ('Doctor.store')); ?>" method="post">
        <?php echo $__env->make('dashboard.doctors._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\parcial_sw1\resources\views/dashboard/doctors/create.blade.php ENDPATH**/ ?>