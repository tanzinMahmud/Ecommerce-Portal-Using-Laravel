<?php
	$user=session()->get('user');
	$pro=session()->get('product');
	$categories=session()->get('categories');
?>


<?php $__env->startSection('content'); ?>


	<div class="right_portion_pro"> 
		
			<div class="add_product_area">
				
				<div class="login_area">
					<h2 style="text-align:center; color:#FFF">Add Product</h2>
					<form method="POST" enctype="multipart/form-data">
						<center>
						
							<input type="text" placeholder="Product Title" name="title" value="<?php echo e($pro->title); ?>" /></br>
							
							<input type="text" placeholder="Price" name="price" value="<?php echo e($pro->price); ?>"/></br>
							
							<input type="text" placeholder="Stock" name="stock" value="<?php echo e($pro->stock); ?>"/></br>
							
							<textarea name="short_desc" placeholder="Short Description" style="width:80%;height:100px;margin-top:10px;"><?php echo e($pro->short_desc); ?></textarea>
							
							<select class="gender_class" name="cat" id="cat" >
								<option class="option_class" value="">Select Category</option>
								<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($pro->category_id==$cat->id): ?>
										<option class="option_class" value="<?php echo e($cat->category_name); ?>" selected="true"><?php echo e($cat->category_name); ?></option>
									<?php endif; ?>
									<option class="option_class" value="<?php echo e($cat->category_name); ?>"><?php echo e($cat->category_name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</select></br>
							<img src="<?php echo e(asset('uploads')); ?>/<?php echo e($pro->img_path); ?>" alt="" style="height:150px; width:200px; margin-top:20px;" />
							<input name="pic" type="file"/></br>
							<input type="submit" name="add_product_btn" id="add_product_btn" value="Update Product"/>
							
						
						</center>
					</form>
					<p><?php echo e(session()->get('addPromessage')); ?></p>
				</div>
			</div>	

	</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>