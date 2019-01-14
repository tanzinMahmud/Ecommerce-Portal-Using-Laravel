<?php
	$user=session()->get('user');
?>


<?php $__env->startSection('content'); ?>

<center>
	<h3>User Home</h3>
<p>Welcome <strong><?php echo e($user->name); ?></strong></p>
</center>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>