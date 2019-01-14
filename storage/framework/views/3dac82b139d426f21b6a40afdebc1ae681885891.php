<?php $__env->startSection('content'); ?>

<center><table border="1px" style="font-size:20px; padding:10px;">
			<tr > 
				<td style="font-size:20px; padding:10px;">No</td>
				<td style="font-size:20px; padding:10px;">Product Name</td>
				<td style="font-size:20px; padding:10px;">Product Price</td>
				<td style="font-size:20px; padding:10px;">Quanity</td>
			</tr>
			<?php $__currentLoopData = $i; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td style="font-size:20px; padding:10px;"><?php echo e($key+1); ?></td>
				<td style="font-size:20px; padding:10px;"><?php echo e($val[0]->title); ?></td>
				<td style="font-size:20px; padding:10px;"><?php echo e($val[0]->price); ?></td>
				<td style="font-size:20px; padding:10px;">1</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			
		</table>
		<p><?php echo e(session()->get('deliverMessage')); ?></p>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.Admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>