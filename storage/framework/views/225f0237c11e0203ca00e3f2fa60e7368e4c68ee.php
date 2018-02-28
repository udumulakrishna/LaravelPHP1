<?php $__env->startSection('content'); ?>
        <!--
                <h1><?php echo e($title); ?></h1>
                <p>This is Laravel application nfrom Laravel from scratch youtube series  </p>
        -->
        <div class="jumbotron text-center">
                <h1>Welcome to Laravel</h1>
                <p>This is Laravel application from the "Laravel From Scratch" YouTube series</p>
                <p>     <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
                </p>

        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>