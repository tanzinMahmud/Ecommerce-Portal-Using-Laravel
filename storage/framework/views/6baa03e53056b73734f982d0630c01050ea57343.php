<div class="left_menu"> 
		<ul>
			<li><input type="button" value="Dashboard"/></li>
			<li><a href="<?php echo e(route('cart.show')); ?>" style="text-decoration:none;"><input type="button" value="Cart"/></a></li>
			<li><a href="<?php echo e(route('logout')); ?>" style="text-decoration:none;"><input type="button" value="Logout"/></a></li>
		</ul>
</div>

<?php echo $__env->yieldContent('content'); ?>