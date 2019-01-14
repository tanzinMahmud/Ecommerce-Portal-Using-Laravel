<?php
	$user=session()->get('user');
?>


<?php $__env->startSection('content'); ?>

<center>
	<div class="AdminReportBox"> 
		<h2>Total User: <span style="color:red;"><?php echo e(session()->get('totalusers')); ?></span></h2>
		<h2>Total Products:  <span style="color:red;"><?php echo e(session()->get('totalproducts')); ?></span></h2>
		<h2>Total Categories:  <span style="color:red;"><?php echo e(session()->get('totalcategories')); ?></span></h2>
		<h2>Today's Total Order:  <span style="color:red;"><?php echo e(session()->get('TotaltodaysOrder')); ?></span></h2>
		
	</div>
</center>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>