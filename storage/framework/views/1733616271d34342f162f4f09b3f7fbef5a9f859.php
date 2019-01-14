<?php
	$user=session()->get('user');
	$orders=session()->get('orders');
?>


<?php $__env->startSection('content'); ?>

<center><table border="1px" style="font-size:20px; padding:10px;">
			<tr > 
				<td style="font-size:20px; padding:10px;">Order Id</td>
				<td style="font-size:20px; padding:10px;">Customer Id</td>
				<td style="font-size:20px; padding:10px;">Customer Address</td>
				<td style="font-size:20px; padding:10px;">Total Amount</td>
				<td style="font-size:20px; padding:10px;">Shipping Date</td>
				<td style="font-size:20px; padding:10px;">Status</td>
				<td style="font-size:20px; padding:10px;"></td>
			</tr>

			<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="#"> 
				<tr > 
					<td style="font-size:20px; padding:10px;"><?php echo e($order->id); ?></td>
					<td style="font-size:20px; padding:10px;"><?php echo e($order->customer_id); ?></td>
					<td style="font-size:20px; padding:10px;"><?php echo e($order->customer_address); ?></td>
					<td style="font-size:20px; padding:10px;"><?php echo e($order->order_amount); ?>tk</td>
					<td style="font-size:20px; padding:10px;"><?php echo e($order->shipping_date); ?></td>
					<td style="font-size:20px; padding:10px;"><?php echo e($order->delivery_status); ?></td>
					<td style="font-size:20px; padding:10px;"> <a href="<?php echo e(route('Order.DeliverPendingOrder',[$order->id])); ?>">Deliver</a></td>
				</tr>
			</a>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
		<p><?php echo e(session()->get('deliverMessage')); ?></p>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.Admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>