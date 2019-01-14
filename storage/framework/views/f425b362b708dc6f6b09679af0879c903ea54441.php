<?php
	$HomeProducts=session()->get('HomeProducts');
	$user=session()->get('user');


?>





   
	<?php $__env->startSection('content'); ?>

	<div class="mainbody"> 
			<div class="main_container"> 
				<h1 style="margin:0px; padding:20px;">Featured Product:</h1>
				<div class="pro_and_cart"> 
					<div class="product_container" id="pro_area"> 

						<?php $__currentLoopData = $HomeProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HomePro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
							<div class="product"><img style="height:150px; width:80%; margin:auto;display: block;padding: 20px;" src="<?php echo e(asset('uploads')); ?>/<?php echo e($HomePro->img_path); ?>" alt="" />
								<h2 id="pro_title"><?php echo e($HomePro->title); ?></h2>
								<h3 id="pro_price">Price: <?php echo e($HomePro->price); ?> tk</h3>
								<h3 id="pro_stock">Stock: <?php echo e($HomePro->stock); ?></h3>
								<h3>
									<a href="<?php echo e(route('cart.index',[$HomePro->id])); ?>" style="background-color:green;color:#fff;font-size:20px;margin:10px;border-radius:5px;padding:5px;text-decoration:none;">Add to cart</a>
								</h3>
							</div>
						
							
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				
				</div>
				
			</div>
		
		</div>

	<?php $__env->stopSection(); ?>






<?php echo $__env->make(($user==null) ? 'Layouts.Visitor.header' :
		 (($user->user_type_id==2) ? 'Layouts.User.LoggedHeader' : 'Layouts.Admin.loggedHeader'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>