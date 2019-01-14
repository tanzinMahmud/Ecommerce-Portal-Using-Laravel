
<?php

  $Category = session()->get('Category');

  $products_filter = session()->get('products_filter');

?>



	<!DOCTYPE html>
	<html>
	  <head>
	    <meta charset="utf-8">
	    <title>Home</title>
	    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
	    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('bootstrap/css/bootstrap-theme.min.css')); ?>">
	  	<!-- <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/product.css')); ?>"> -->
	    <script type="text/javascript" src="<?php echo e(asset('ajax/jquery-3.2.1.min.js')); ?>"></script>
	    <script type="text/javascript" src="<?php echo e(asset('bootstrap/js/bootstrap.js')); ?>"></script>
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
	            <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>">Sosta.com</a>
	          </div>

	          <!-- Collect the nav links, forms, and other content for toggling -->
	          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	            <ul class="nav navbar-nav">
	              <li class="active"><a href="<?php echo e(route('home.index')); ?>">Home <span class="sr-only">(current)</span></a></li>
	              <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
	                <ul class="dropdown-menu">
										<?php $__currentLoopData = $Category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                  <li><a href="<?php echo e(route('filter',[$cat->id])); ?>"><?php echo e($cat->category_name); ?></a></li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                </ul>
	              </li>
	            </ul>
							<form class="navbar-form navbar-left">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <!-- <button type="submit" class="btn btn-default">Submit</button> -->
				      </form>
	            <ul class="nav navbar-nav navbar-right">
	              <li><a href="<?php echo e(route('login.index')); ?>">Login</a></li>
		             <li><a href="<?php echo e(route('register.index')); ?>">Register</a></li>
	              <!-- <li><a href="<?php echo e(route('login.index')); ?>">Sign up</a></li> -->
	                </ul>
	              </li>
	            </ul>
	          </div><!-- /.navbar-collapse -->
	        </div><!-- /.container-fluid -->
	      </nav>
	      <!-- Nav Bar finish -->

	      <div class="jumbotron">
	          <div class="container" align="center">
	              <h1>Welcome to Sosta.com</h1>
	              <p>Where you will find everything Sosta! Sosta!</p>
	          </div>
	      </div>

	<div class="container">
			<h4>NEW COLLECTION</h4>
		<div class="row">
			<div class="container">
				<div class="container">
						<!-- <h4></h4> -->
				</div>
        <?php $__currentLoopData = $products_filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="<?php echo e(asset('uploads')); ?>/<?php echo e($sp->img_path); ?>" alt="...">
                      <h4><?php echo e($sp->title); ?></h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p><?php echo e($sp->short_desc); ?></p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price"><?php echo e('$'.$sp->price); ?></p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="<?php echo e(route('cart.index',[$sp->id])); ?>" target="_blank" >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<!-- END PRODUCTS -->
		</div>
	</div><!-------container----->

	  </body>
	</html>
