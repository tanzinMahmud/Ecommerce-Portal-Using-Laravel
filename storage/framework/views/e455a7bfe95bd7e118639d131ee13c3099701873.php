<?php
	$user=session()->get('user');

  
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
                <!-- <li><a href="<?php echo e(route('cart.show')); ?>">Cart </a></li> -->
              </ul>
            </li>
  					<li><a href="<?php echo e(route('cart.show')); ?>">Cart </a></li>
  					<li><a href="<?php echo e(route('user.index')); ?>">Dash</a></li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <!-- <button type="submit" class="btn btn-default">Submit</button> -->
          </form>
          <ul class="nav navbar-nav navbar-right">
  					<li><a href="<?php echo e(route('user.PendingOrder')); ?>">Pending Orders</a></li>
  					<li><a href="<?php echo e(route('user.DeliveredOrder')); ?>">Delivered Orders</a></li>
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

<?php echo $__env->make('Layouts.Visitor.products', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>