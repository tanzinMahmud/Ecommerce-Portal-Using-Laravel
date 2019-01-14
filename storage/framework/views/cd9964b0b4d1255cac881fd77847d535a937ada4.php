<?php
	$user=session()->get('user');
	$category=session()->get('category');
?>


<?php $__env->startSection('content'); ?>
	<div class="add_category_area">
				
		<div class="login_area">
			<h2 style="text-align:center; color:#FFF">Add Category</h2>
			<form method="POST">
				<center>
					<input type="text" placeholder="Category Title" name="cat_title" value="<?php echo e($category->category_name); ?>" /></br>
					<?php if($errors->any()): ?>
						<p><?php echo e($errors->first('cat_title')); ?></p>
					<?php endif; ?>
					
					<textarea name="short_desc"  placeholder="Short Description" style="width:80%;height:100px;margin-top:10px;" ><?php echo e($category->short_desc); ?></textarea>
					<?php if($errors->any()): ?>
						<p><?php echo e($errors->first('short_desc')); ?></p>
					<?php endif; ?>
					
					<input type="submit" name="add_category_btn" id="add_category_btn" value="Update Category"/>
					<p><?php echo e(session()->get('updateCatmessage')); ?></p>
				
				</center>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.Admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>