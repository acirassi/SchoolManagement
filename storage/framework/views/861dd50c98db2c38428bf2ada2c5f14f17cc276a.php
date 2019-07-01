<?php $__env->startSection('content'); ?>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Register
                </h1>
            </div>
        </div>
    </section>

    <div class="columns is-marginless is-centered">
        <div class="column is-5">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Register</p>
                </header>

                <div class="card-content">
                    <form class="register-form" method="POST" action="<?php echo e(route('register')); ?>">

                        <?php echo e(csrf_field()); ?>


                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Name</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="name" type="name" name="name" value="<?php echo e(old('name')); ?>"
                                               required autofocus>
                                    </p>

                                    <?php if($errors->has('name')): ?>
                                        <p class="help is-danger">
                                            <?php echo e($errors->first('name')); ?>

                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">E-mail Address</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="email" type="email" name="email"
                                               value="<?php echo e(old('email')); ?>" required autofocus>
                                    </p>

                                    <?php if($errors->has('email')): ?>
                                        <p class="help is-danger">
                                            <?php echo e($errors->first('email')); ?>

                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Password</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="password" type="password" name="password" required>
                                    </p>

                                    <?php if($errors->has('password')): ?>
                                        <p class="help is-danger">
                                            <?php echo e($errors->first('password')); ?>

                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Confirm Password</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="password-confirm" type="password"
                                               name="password_confirmation" required>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label"></div>

                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kishan\Desktop\laravel\SchoolManagement\resources\views/auth/register.blade.php ENDPATH**/ ?>