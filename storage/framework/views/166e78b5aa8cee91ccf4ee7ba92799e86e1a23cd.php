<?php
	$CartProducts=session()->get('Cart');
	$CartTotalPrice=session()->get('CartTotalPrice');
	$CartTotalQuantity=session()->get('CartTotalQuantity');
	$user=session()->get('user');

?>


<?php $__env->startSection('content'); ?>
	<div class="cart_product" id="cart"> 
		<center>
			<?php if($CartProducts!=null): ?>
			<table border="1px" style="font-size:20px; padding:10px;margin-bottom:20px;">
				
				<tr > 
					<td style="font-size:20px; padding:10px;">ID</td>
					<td style="font-size:20px; padding:10px;">Title</td>
					<td style="font-size:20px; padding:10px;">Price</td>
					<td style="font-size:20px; padding:10px;">Quantity</td>
				</tr>

				<?php $__currentLoopData = $CartProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cpro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				 <tr > 
						<td style="font-size:20px; padding:10px;"><?php echo e($cpro->id); ?></td>
						<td style="font-size:20px; padding:10px;"><?php echo e($cpro->title); ?></td>
						<td style="font-size:20px; padding:10px;"><?php echo e($cpro->price); ?></td>
						<td style="font-size:20px; padding:10px;"> 1</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				<tr > 
					<td style="font-size:20px; padding:10px;"></td>
					<td style="font-size:20px; padding:10px;">Total</td>
					<td style="font-size:20px; padding:10px;"><?php echo e($CartTotalPrice); ?> tk</td>
					<td style="font-size:20px; padding:10px;"><?php echo e($CartTotalQuantity); ?></td>
				</tr>
				
			</table>
				
			<center><a href="<?php echo e(route('order.index')); ?>" style="text-decoration:none;color:#fff;background-color:green;padding:10px;">Place Order</a></center>
			<?php endif; ?>
		</center>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(($user==null) ? 'Layouts.Visitor.header' :
		 (($user->user_type_id==2) ? 'Layouts.User.LoggedHeader' : 'Layouts.Admin.loggedHeader'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>