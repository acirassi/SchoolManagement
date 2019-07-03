<?php $__env->startSection('content'); ?>

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Login
                </h1>
            </div>
        </div>
    </section>

    <div class="columns is-marginless is-centered">
        <div class="column is-5">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Login</p>
                </header>

                <div class="card-content">
                    <form class="login-form" method="POST">
                        <?php echo e(csrf_field()); ?>


                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">

                                <p class="control has-icons-left has-icons-right">
                                   <input class="input" id="email" type="email" name="email"
                                               value="<?php echo e(old('email')); ?>" required autofocus placeholder="Email-Address">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-check"></i>
                                    </span>
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
                            

                            <div class="field-body">
                                <div class="field">
                                      <p class="control has-icons-left">
                                            <input class="input" id="password" type="password" name="password" required placeholder="Password">
                                        <span class="icon is-small is-left">
                                          <i class="fas fa-lock"></i>
                                        </span>
                                      </p>
                                    
                                    <?php if($errors->has('password')): ?>
                                        <p class="help is-danger">
                                            <?php echo e($errors->first('password')); ?>

                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal" align="is-left">
                            <div class="field-label">
                               <label class="label">Log in As :</label>
                           </div>
                           <div class="field " >
                            <div class="control">
                            <div class="select">
                              <select name="user" id="user">
                                <option value="1">Student</option>
                                <option value="2">Clark</option>
                                <option value="3">Teacher</option>
                                <option value="4">Principal</option>
                              </select>
                            </div>
                          </div>

                           </div>
                        </div>
                        
                        <div class="field is-horizontal">
                            <div class="field-label"></div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <label class="checkbox">
                                            <input type="checkbox"
                                                   name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                        </label>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label"></div>

                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" name="submit" id="submit" class="button is-primary">Login</button>
                                    </div>

                                    <div class="control">
                                        <a href="<?php echo e(route('password.request')); ?>">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['submit'])){


        $user = $_POST['user'];
        if($user == 'Clark'){
          // header("/calrk");
            echo "you have selected "+$user;
        }else
        {
           // header("/home");
            echo "you  have other one.";
        }
     }   
     ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kishan\Desktop\laravel\SchoolManagement\resources\views/auth/login.blade.php ENDPATH**/ ?>