<?php
	$user=session()->get('user');
	$products=session()->get('products');
	$categories=session()->get('categories');
?>


<?php $__env->startSection('content'); ?>
		<div class="delete_area_right"> 
	
		<div class="add_category_area" style="margin-left: 0px;width: 50%; float:left;">
				
			<div class="login_area">
				<h2 style="text-align:center; color:#FFF">Select Category</h2>
				<form method="POST">
					<center>
						<select class="gender_class" name="cat" id="cat" >
							<option class="option_class" value="">Select Category</option>
							<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option class="option_class" value="<?php echo e($cat->category_name); ?>"><?php echo e($cat->category_name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</select></br>
						
						<input type="submit" name="selectCat" id="selectCat" value="Select"/>
						
					
					</center>
				</form>
			</div>
		</div>
		<div class="delete_pro_area"> 
			<table border="1px" style="font-size:20px; padding:10px;">
				
				<?php if($products !=null): ?>
				<tr > 
					<td style="font-size:20px; padding:10px;">ID</td>
					<td style="font-size:20px; padding:10px;">Title</td>
					<td style="font-size:20px; padding:10px;">Price</td>
					<td style="font-size:20px; padding:10px;">Delete</td>
				</tr>
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr > 
						<td style="font-size:20px; padding:10px;"><?php echo e($pro->id); ?></td>
						<td style="font-size:20px; padding:10px;"><?php echo e($pro->title); ?></td>
						<td style="font-size:20px; padding:10px;"><?php echo e($pro->price); ?></td>
						<td style="font-size:20px; padding:10px;"> <a href="<?php echo e(route('Product.destroy',[$pro->id])); ?>">delete</a></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			</table>
		</div>
	
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>