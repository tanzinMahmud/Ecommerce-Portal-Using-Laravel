<?php
	$user=session()->get('user');
	$users=session()->get('users');
?>


<?php $__env->startSection('content'); ?>

<center><table border="1px" style="font-size:20px; padding:10px;">
			<tr > 
				<td style="font-size:20px; padding:10px;">User Id</td>
				<td style="font-size:20px; padding:10px;">Name</td>
				<td style="font-size:20px; padding:10px;">Email</td>
				<td style="font-size:20px; padding:10px;">Gender</td>
				<td style="font-size:20px; padding:10px;">Type</td>
		
			
			</tr>

			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="#"> 
				<tr > 
					<td style="font-size:20px; padding:10px;"><?php echo e($usr->id); ?></td>
					<td style="font-size:20px; padding:10px;"><?php echo e($usr->name); ?></td>
					<td style="font-size:20px; padding:10px;"><?php echo e($usr->email); ?></td>
					<td style="font-size:20px; padding:10px;"><?php echo e($usr->gender); ?></td>
					<td style="font-size:20px; padding:10px;"><?php echo e($usr->type_name); ?></td>
				
					
				</tr>
			</a>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
		<p><?php echo e(session()->get('deliverMessage')); ?></p>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.Admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>