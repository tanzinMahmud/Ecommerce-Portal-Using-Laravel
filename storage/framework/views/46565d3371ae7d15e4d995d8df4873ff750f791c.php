<?php
	$user=session()->get('user');
?>


<?php $__env->startSection('content'); ?>

<div class="sign_area">
		<div class="login_area">
			<form method="POST">
				<center>
					<input type="text" placeholder="Enter Shipping Address" name="shipadd" /></br>
				
					
					<input type="submit" value="Confirm Order" name="order_btn" id="order_btn" />
				
				</center>
			</form>
			<p><?php echo e(session()->get('orderMessage')); ?></p>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.User.LoggedHeader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>