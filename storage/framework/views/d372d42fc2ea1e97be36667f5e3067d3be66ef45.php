<div class="notifications">
    <div class="topnav-dropdown-header">
        <span class="notification-title">Notifications</span>
        <a href="javascript:void(0)" class="clear-noti"> <i class="feather-x-circle"></i> </a>
    </div>
    <div class="noti-content">
        <ul class="notification-list">
            <?php $notifications = auth()->user()->unreadNotifications; ?>
            <?php if(isset($notifications)): ?>
            <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li class="notification-message">
                <a>
                    <div class="media">
                        <div class="media-body">
                            <form action="" method="POST">
                                <i onclick="deleteNotification(this, '<?php echo e($notification->id); ?>', '<?php echo e(csrf_token()); ?>')" class="feather-x-circle close-notification"></i>
                            </form>
                            <p class="noti-details"><span class="noti-title"></span> <?php echo e($notification->data['message']); ?>

                                <span class="noti-title">
                                    <?php if($notification->data['data'] != ' '): ?>
                                    <b>
                                        <spaceless> - <?php echo e($notification->data['data']); ?></spaceless>
                                    </b>
                                    <?php else: ?>
                                    <?php endif; ?>
                                </span>
                            </p>
                            <p class="noti-time"><span class="notification-time"><?php echo e($notification->created_at->diffForHumans()); ?></span></p>
                        </div>
                    </div>
                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
            <?php endif; ?>

        </ul>
    </div>
    <div class="topnav-dropdown-footer">
        <a href="<?php echo e(route('delete.all.notification')); ?>" onclick="return confirm('Are you sure you want to clear all notifications?')">Clear all Notifications</a>
    </div>
</div>

<script>
    function deleteNotification(e, id, token) {
        e.closest("li").remove();
        $.ajax({
            url: "<?php echo e(route('delete.notification')); ?>",
            type: "POST",
            data: {
                _token: token,
                not_id: id
            },
            success: function(data) {
                // console.log(data)
            },
        });
    }
</script><?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/layouts/includes/notification.blade.php ENDPATH**/ ?>