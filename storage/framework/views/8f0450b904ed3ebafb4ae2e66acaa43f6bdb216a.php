<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Dashboard
                        </p>
                    </header>

                    <div class="card-content">
                        <?php echo e(Auth::user()->name); ?>, you are logged in!
                    </div>
                </nav>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kishan\Desktop\laravel\SchoolManagement\resources\views/home.blade.php ENDPATH**/ ?>