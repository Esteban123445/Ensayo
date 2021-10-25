<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset ('css/app.css')); ?>">
    <title>Document</title>
</head>
<body>
    <?php echo $__env->make('dashboard.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="jumbotron">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <script src="<?php echo e(asset ('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH D:\laragon\www\parcial_sw1\resources\views/dashboard/master.blade.php ENDPATH**/ ?>