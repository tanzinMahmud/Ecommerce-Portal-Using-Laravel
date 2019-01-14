<?php
$HomeProducts = session()->get('HomeProducts');
$Category = session()->get('Category');
$user=session()->get('user');
// $product_title = session()->get('product_title');

$smart_phone = session()->get('smart_phone');
$laptop = session()->get('laptop');
$desktop = session()->get('desktop');
$apple = session()->get('apple');
$tv = session()->get('tv');
$Clothing = session()->get('Clothing');


?>





    <?php $__env->startSection('title'); ?>
		Login
	<?php $__env->stopSection(); ?>

	<?php $__env->startSection('content'); ?>

	<div class="sign_area">
		<div class="login_area">
			<form method="POST">
				<center>
					<h2>Sign In</h2>
					<input type="text" placeholder="Enter Email" name="uemail"/></br>

					<input type="password" placeholder="Enter Password" name="pass"/></br>

					<input style="width:20px;margin-left:40px;display:inline-block;float:left;" type="checkbox"  name="remember" /><h3 style="float:left;color:#fff;text-align:left;margin-top:20px;margin-left:10px;">Remember Me</h3></br>

					<input type="submit" value="Login" name="login_btn" />

					<a href="<?php echo e(route('register.index')); ?>"><input class="reg_btn" type="button" value="Register" name="reg_btn" /></a>

				</center>
			</form>
		</div>
	</div>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make(($user==null) ? 'Layouts.Visitor.header' :
		 (($user->user_type_id==2) ? 'Layouts.User.sezan' : 'Layouts.Admin.sezan'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>