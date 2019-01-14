<?php
	$user=session()->get('user');
	$Category = session()->get('Category');
	// $product_title = session()->get('product_title');

	$smart_phone = session()->get('smart_phone');
	$laptop = session()->get('laptop');
	$desktop = session()->get('desktop');
	$apple = session()->get('apple');
	$tv = session()->get('tv');
	$Clothing = session()->get('Clothing');

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>

  </head>
  <body>


    <!-- Nav Bar -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>">Ecommerce Portal</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo e(route('home.index')); ?>">Home <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
              <ul class="dropdown-menu">
								<li><a href="<?php echo e(route('Category.addCategory')); ?>">Add Category</a></li>
								<li><a href="<?php echo e(route('Category.delete')); ?>">Delete Category</a></li>
								<li><a href="<?php echo e(route('Category.update')); ?>">Update Category</a></li>
                <!-- <li><a href="<?php echo e(route('cart.show')); ?>">Cart </a></li> -->
              </ul>
            </li>
						<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
              <ul class="dropdown-menu">
								<li><a href="<?php echo e(route('Product.addProudct')); ?>">Add Product</a></li>
								<li><a href="<?php echo e(route('Product.delete')); ?>">Delete Product</a></li>
								<li><a href="<?php echo e(route('Product.update')); ?>">Update Proudct</a></li>
              </ul>
            </li>
						<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Order <span class="caret"></span></a>
              <ul class="dropdown-menu">
								<li><a href="<?php echo e(route('Order.PendingOrder')); ?>">Pending Orders</a></li>
								<li><a href="<?php echo e(route('Order.DeliveredOrder')); ?>">Delivered Orders</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" id="searchBar" name="search" onkeyup="searchProduct(this.value,'<?=asset("uploads")?>')" class="form-control" placeholder="Search">
            </div>
            <!-- <button type="submit" class="btn btn-default">Submit</button> -->
          </form>
          <ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo e(route('Admin.showUser')); ?>" style="text-decoration:none;">Users</a></li>
      			<li><a href="<?php echo e(route('logout')); ?>" style="text-decoration:none;">Logout</a></li>
            </li>
          </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- Nav Bar finish -->

    

  </body>
</html>

<?php echo $__env->make('Layouts.Admin.products', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>