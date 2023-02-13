<?php $__env->startSection('content'); ?>

<?php
use App\Models\Post;
    $post= Post::get();
    foreach ($post as $post) {

    }
?>

<h1>hola</h1>
<a href="https://platzi.com/cursos/api-profesional/?notification_id=2517395">Hola</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\OneDrive\Escritorio\platzi\php\laravel9\prueba\resources\views/home.blade.php ENDPATH**/ ?>