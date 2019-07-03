<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'School Management')); ?> </title>

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
         <link rel="stylesheet" href="<?php echo e(asset('css/bulma.min.css')); ?>">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar has-shadow">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="<?php echo e(url('/')); ?>" class="navbar-item">School Management</a>

                        <div class="navbar-burger burger" data-target="navMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="navbar-menu" id="navMenu">
                        <div class="navbar-start"></div>

                        <div class="navbar navbar-dark">
                            <?php if(Auth::guest()): ?>
                                <a class="navbar-item " href="<?php echo e(route('login')); ?>">Login</a>
                                <a class="navbar-item " href="<?php echo e(route('register')); ?>">Register</a>
                            <?php else: ?>
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link" href="#"><?php echo e(Auth::user()->name); ?></a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                              style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </nav>
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\Users\kishan\Desktop\laravel\SchoolManagement\resources\views/layouts/app.blade.php ENDPATH**/ ?>