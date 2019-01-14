<?php
	$user=session()->get('user');
	$cats=session()->get('cats');
?>


<?php $__env->startSection('content'); ?>
	<center> 
		<table border="1px" style="font-size:20px; padding:10px;">
				
				<?php if($cats !=null): ?>
				<tr > 
					<td style="font-size:20px; padding:10px;">ID</td>
					<td style="font-size:20px; padding:10px;">Title</td>
					<td style="font-size:20px; padding:10px;">Short Description</td>
					<td style="font-size:20px; padding:10px;">Action</td>
				</tr>
				<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr > 
						<td style="font-size:20px; padding:10px;"><?php echo e($cat->id); ?></td>
						<td style="font-size:20px; padding:10px;"><?php echo e($cat->category_name); ?></td>
						<td style="font-size:20px; padding:10px;"><?php echo e($cat->short_desc); ?></td>
						<td style="font-size:20px; padding:10px;"> <a href="<?php echo e(route('Category.edit',[$cat->id])); ?>">Update</a></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			</table>
			<p><?php echo e(session()->get('delteCatmessage')); ?></p>
	</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.Admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>