<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - <?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
        <?php $__env->startSection('sidebar'); ?>
            This is the master sidebar.
        <?php echo $__env->yieldSection(); ?>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH /home/gmoreira/laravel2/resources/views/layouts/app.blade.php ENDPATH**/ ?>