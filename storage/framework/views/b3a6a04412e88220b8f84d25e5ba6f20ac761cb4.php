<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from emr.dreamguystech.com/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 23:00:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Birth Certificate App - S'authentifier</title>

    <meta name="description" content="Birth Certificate App">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('logo/logo5.jpeg')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome/css/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome/css/all.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
</head>
<style>
    .login-new-btn {
        background-color: #4DD434;
        border-color: #4DD434;
    }
</style>

<body>
    <div class="main-wrapper login-body" style="background: none;">
        <div class="login-wrapper">
            <div class="container">
                <img class="img-fluid logo-dark mb-2" src="<?php echo e(asset('logo/logo5.jpeg')); ?>" alt="Logo">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>S'authentifier</h1>
                            <p class="account-subtitle">Accéder à notre tableau de bord</p>
                            <form method="POST" action="">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="timezone" id="timezone">
                                <div class="form-group">
                                    <label class="form-control-label">Addresse Couriel</label>
                                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Mot de Passe</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="form-control pass-input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="remember" id="cb1" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                <label class="custom-control-label" for="cb1"><?php echo e(__('Se Souvenir de moi')); ?></label>
                                            </div>
                                        </div>

                                        <?php if(Route::has('password.request')): ?>
                                        <div class="col-6 text-right">
                                            <a class="forgot-link" href="<?php echo e(route('password.request')); ?>">Mot de Passe oublier ?</a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-block btn-primary" type="submit">S'authentifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
</body>

<script>
    $(function() {
        // get user timezone
        $('#timezone').val(Intl.DateTimeFormat().resolvedOptions().timeZone)
    })
</script>
<!-- Mirrored from emr.dreamguystech.com/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 23:00:33 GMT -->

</html>
<?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/auth/login.blade.php ENDPATH**/ ?>