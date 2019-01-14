

<div class="left_menu"> 
		<ul>
			<li><input type="button" value="Dashboard" onclick="showdash()"/></li>
			<li><input type="button" name="product" value="Products" onclick="showtpro()"/>
				<ul>
					<li><a href="<?php echo e(route('Product.addProudct')); ?>">Add Product</a></li>
					<li><a href="<?php echo e(route('Product.delete')); ?>">Delete Product</a></li>
					<li><a href="<?php echo e(route('Product.update')); ?>">Update Proudct</a></li>
				</ul>
			</li>
			<li><input type="button" value="Category"/>
				<ul>
					<li><a href="<?php echo e(route('Category.addCategory')); ?>">Add Category</a></li>
					<li><a href="<?php echo e(route('Category.delete')); ?>">Delete Category</a></li>
					<li><a href="<?php echo e(route('Category.update')); ?>">Update Category</a></li>
				</ul>
			</li>
			<li><input type="button" value="Orders"/>
				<ul>
					<li><a href="<?php echo e(route('Order.PendingOrder')); ?>">Pending Orders</a></li>
					<li><a href="<?php echo e(route('Order.DeliveredOrder')); ?>">Delivered Orders</a></li>
				</ul>
			</li>
			<li><a href="<?php echo e(route('Admin.showUser')); ?>" style="text-decoration: none;"><input type="button" value="Users"/></a></li>
			<li><a href="<?php echo e(route('logout')); ?>" style="text-decoration: none;"><input type="button" value="Logout"/></a></li>
		</ul>
	</div>

	<?php echo $__env->yieldContent('content'); ?>


