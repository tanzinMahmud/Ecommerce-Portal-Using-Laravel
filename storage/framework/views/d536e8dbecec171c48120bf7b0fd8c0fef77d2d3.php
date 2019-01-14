<?php
	$HomeProducts=session()->get('HomeProducts');
	$user=session()->get('user');


?>


   
	<?php $__env->startSection('title'); ?>
		Sing-up
	<?php $__env->stopSection(); ?>

	<?php $__env->startSection('content'); ?>

	<div class="sign_area">
		<div class="login_area">
			<form method="POST">
				<center>
					<h2>Sing Up</h2>
					<input type="text" placeholder="Enter Name"  name="name"/></br>
					<?php if($errors->any()): ?>
						<p><?php echo e($errors->first('name')); ?></p></br>
					<?php endif; ?>
					
					<input type="text" placeholder="Enter Email" name="email"/></br>
					<?php if($errors->any()): ?>
						<p><?php echo e($errors->first('email')); ?></p></br>
					<?php endif; ?>
					
					<input type="password" placeholder="Enter Password" name="password"/></br>
					<?php if($errors->any()): ?>
						<p><?php echo e($errors->first('password')); ?></p></br>
					<?php endif; ?>
					
					<select class="gender_class" name="gender" >
						<option class="option_class" value="">Select Gender</option>
						<option class="option_class" value="male">Male</option>
						<option class="option_class" value="female">Female</option>
					</select></br>
					<?php if($errors->any()): ?>
						<p><?php echo e($errors->first('gender')); ?></p></br>
					<?php endif; ?>
					
					<input type="submit" value="Sign Up"/>
					
					<a href="<?php echo e(route('login.index')); ?>"><input  type="button" value="Back" /></a>
				
				</center>
			</form>
		</div>
	</div>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make(($user==null) ? 'Layouts.Visitor.header' :
		 (($user->user_type_id==2) ? 'Layouts.User.LoggedHeader' : 'Layouts.Admin.loggedHeader'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>