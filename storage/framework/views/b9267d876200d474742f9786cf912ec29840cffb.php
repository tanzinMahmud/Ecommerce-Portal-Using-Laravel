
<!DOCTYPE html>
<html>
<head>
	<title>Sosta.com | <?php echo $__env->yieldContent('title'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css\style.css')); ?>">
	
</head>
<body>
	<header class="menu">
	
		<div class="container">
			<div class="leftcontainer">
				<a href="<?php echo e(route('home.index')); ?>"><h1>SOSTA.COM</h1></a>
			</div>
			<div class="rightcontainer">
				<ul>
					<li><a href="<?php echo e(route('home.index')); ?>">home</a></li>
					<li><a href="">about</a></li>
					<li><a href="">products</a></li>
					<li><a href="">contact </a></li>
					<li><a href="<?php echo e(route('cart.show')); ?>">cart </a></li>
					<li><a href="<?php echo e(route('login.index')); ?>">login</a></li>
				
				</ul>
			</div>
		</div>
	</header>
	<?php echo $__env->yieldContent('content'); ?>
	


	
</body>
</html>

