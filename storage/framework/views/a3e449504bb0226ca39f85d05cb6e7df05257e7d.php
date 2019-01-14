<?php
	$user=session()->get('user');
	$categories=session()->get('categories');
?>


<?php $__env->startSection('content'); ?>


	<div class="right_portion_pro"> 
		
			<div class="add_product_area">
				
				<div class="login_area">
					<h2 style="text-align:center; color:#FFF">Add Product</h2>
					<form method="POST" enctype="multipart/form-data">
						<center>
						
							<input type="text" placeholder="Product Title" name="title"/>
							</br>
								<?php if($errors->any()): ?>
									<p><?php echo e($errors->first('title')); ?></p></br>
								<?php endif; ?>

							<input type="text" placeholder="Price" name="price" />
							</br>
							<?php if($errors->any()): ?>
								<p><?php echo e($errors->first('price')); ?></p></br>
							<?php endif; ?>

							<input type="text" placeholder="Stock" name="stock" />
							</br>
							<?php if($errors->any()): ?>
								<p><?php echo e($errors->first('stock')); ?></p></br>
							<?php endif; ?>

							
							
							<textarea name="short_desc" placeholder="Short Description" style="width:80%;height:100px;margin-top:10px;"></textarea>
							</br>
							<?php if($errors->any()): ?>
								<p><?php echo e($errors->first('short_desc')); ?></p>
							<?php endif; ?>

							
							<select class="gender_class" name="cat" id="cat" >
								<option class="option_class" value="">Select Category</option>
								<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option class="option_class" value="<?php echo e($cat->category_name); ?>"><?php echo e($cat->category_name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</select></br>
							<?php if($errors->any()): ?>
								<p><?php echo e($errors->first('cat')); ?></p>
							<?php endif; ?>
							<input name="pic" type="file"/></br>
							<input type="submit" name="add_product_btn" id="add_product_btn" value="Add Product"/>

							
							
						
						</center>
					</form>
					<p><?php echo e(session()->get('addPromessage')); ?></p>
				</div>
			</div>	

	</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.Admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>