<div class="header">
    <div class="header-left">
        <a href="<?php echo e(route('home')); ?>" class="logo"><?php echo e(config('app.name')); ?>

            <!-- <img src="assets/img/logo.svg" alt="Logo"> -->
        </a>
        <a href="<?php echo e(route('home')); ?>" class="logo logo-small"><?php echo e(config('app.name')); ?>

            <!-- <img src="assets/img/logo.svg" alt="Logo"> -->
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fas fa-bars"></i>
    </a>

    <div class="top-nav-search">
        <!-- <img class="img-fluid logo-dark mb-2" src="<?php echo e(asset('logo/logo5.jpeg')); ?>" alt="Logo"> -->
    </div>
    <div class="top-nav-search ml-5">
        <h5 style="margin-top: 18px; position: relative; width:360px">
            <?php echo e(\Carbon\Carbon::now()->timezone(Auth::user()->timezone)->format('D, M j, Y \a\t g:ia')); ?>

        </h5>
    </div>

    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link notifications-item">
                <i class="fa fa-bell"></i> <span class="badge badge-pill">
                    <?php $notifications = auth()->user()->unreadNotifications; ?>
                    <?php if(isset($notifications)): ?>
                        <?php echo e($notifications->count() ?? 0); ?>

                    <?php else: ?>
                        0
                    <?php endif; ?>
                </span>
            </a>
        </li>

        <li class="nav-item dropdown has-arrow main-drop ml-md-3">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img src="<?php echo e(asset('avatar.png')); ?>" alt="">
                    <span class="status online"></span></span>
            </a>
            <div class="dropdown-menu">
                <!-- <a class="dropdown-item" href="<?php echo e(route('my.profile')); ?>"><i class="feather-user"></i> My Profile</a>
                <a class="dropdown-item" href="<?php echo e(route('change.password')); ?>"><i class="fa fa-lock"></i> Change Password</a> -->
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="feather-power"></i> Logout
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </a>
        </li>
    </ul>

</div>
<?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/layouts/includes/nav.blade.php ENDPATH**/ ?>