<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post"> 
		<?php echo e(csrf_field()); ?>

		Name: <input type="text" name="suname"></br>
		Email: <input type="password" name="spass"></br>
		<input type="submit" value="Login">
		</br>
		
	</form>
	<div><?php echo e(session('msg')); ?></div>
</body>
</html>