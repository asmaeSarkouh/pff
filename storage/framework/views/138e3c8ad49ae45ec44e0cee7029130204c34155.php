<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>

            <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?></title>
        <?php else: ?>
            <title><?php echo e(config('app.name')); ?></title>
        <?php endif; ?>

        <!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo e(url(asset('favicon.ico'))); ?>">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Styles -->
        <?php echo $__env->yieldContent('app'); ?>
        <?php echo \Livewire\Livewire::styles(); ?>


        <!-- Scripts -->
        <script src="<?php echo e(url(mix('js/app.js'))); ?>" defer></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <?php echo $__env->yieldContent('style'); ?>
    </head>

    <body>
        
        <?php echo $__env->yieldContent('body'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>

       
    </body>
</html>
<?php /**PATH C:\Users\azer\Desktop\laravel\front-end-tall\resources\views/layouts/base.blade.php ENDPATH**/ ?>