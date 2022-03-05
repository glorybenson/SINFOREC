<div class="flash-container">
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script>
	<?php if(Session::has('info')): ?>
		toastr.info("<?php echo e(session('error')); ?>");
	<?php elseif(Session::has('success')): ?>
		toastr.success("<?php echo e(session('success')); ?>", "Success");
	<?php elseif(Session::has('error')): ?>
		toastr.error("<?php echo e(session('error')); ?>", "Something Went Wrong!");
	<?php elseif(Session::has('warning')): ?>
		toastr.warning("<?php echo e(session('warning')); ?>", "Try Again!");
	<?php elseif(Session::has('status')): ?>
		toastr.success("<?php echo e(session('status')); ?>", "Success");
	<?php elseif(Session::has('permission_warning')): ?>
		toastr.warning("<?php echo e(session('permission_warning')); ?>", "Warning!");
	<?php endif; ?>
  </script>
</div><?php /**PATH /home/hephhay/Documents/web/Birth/resources/views/layouts/includes/alert.blade.php ENDPATH**/ ?>