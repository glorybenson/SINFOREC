<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="Birth Certificate App">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SINFOREC - <?php echo e($title ?? ""); ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('logo/logo5.jpeg')); ?>">
</head>

<?php echo $__env->make('layouts.includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <div class="main-wrapper">

        <?php echo $__env->make('layouts.includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="page-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <?php echo $__env->make('layouts.includes.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</body>
<?php echo $__env->make('layouts.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html>
<?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/layouts/app.blade.php ENDPATH**/ ?>