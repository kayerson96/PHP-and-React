<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>proyecto web</title>
</head>
<body>
<p>
    <a href="<?php echo e(route('home')); ?>">home</a>
    <a href="<?php echo e(route('poster')); ?>">post</a>
    <a href="<?php echo e(route('blog')); ?>">blog</a>
</p>
<hr>
<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\Users\User\OneDrive\Escritorio\platzi\php\laravel9\prueba\resources\views/template.blade.php ENDPATH**/ ?>