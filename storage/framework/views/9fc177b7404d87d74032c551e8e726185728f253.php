<?php
	$user=session()->get('user');

?>

<!DOCTYPE html>
<html>
<head>
	<title>TechBD | Place Order</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
	<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	  $(function() {
	    $( "#datepicker" ).datepicker({ minDate: +1, maxDate: "+7D" ,dateFormat: 'yy/mm/dd'});
	  });
  </script>

</head>
<body>
	<header class="menu">

		<div class="container">
			<div class="leftcontainer">
				<a href="<?php echo e(route('home.index')); ?>"><h1>TechBD</h1></a>
			</div>
			<div class="rightcontainer">
				<ul>
					<li><a href="<?php echo e(route('home.index')); ?>">home</a></li>
					<li><a href="<?php echo e(route('cart.show')); ?>">Cart </a></li>
					<li><a href="<?php echo e(route('user.index')); ?>">Dash</a></li>

				</ul>
			</div>
		</div>
	</header>
	<?php echo $__env->yieldContent('content'); ?>




</body>
</html>
