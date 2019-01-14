<?php
	$user=session()->get('user');
?>

<!DOCTYPE html>
<html>
<head>
	<title>TechBD | Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css\style.css')); ?>">
	
</head>
<body>
	<header class="menu">
	
		<div class="container">
			<div class="leftcontainer">
				<a href="<?php echo e(route('home.index')); ?>"><h1>TechBD</h1></a>
			</div>
			<div class="rightcontainer">
				<h3>Welcome</h3>
				<h3><?php echo e($user->name); ?></h3>
			</div>
		</div>
	</header>
	
	


	
</body>
</html>
<?php echo $__env->make('Layouts.Admin.leftmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>