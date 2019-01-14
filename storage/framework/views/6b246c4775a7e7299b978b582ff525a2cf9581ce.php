<!DOCTYPE html>
<html>
<head>
	<title>Sosta.com | Registration</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css\style.css')); ?>">
</head>
<body>

	<div class="sign_area">
		<div class="login_area">
			<form method="POST">
				<center>
					<input type="text" placeholder="Enter Name" name="name"/></br>
					
					<input type="text" placeholder="Enter Email" name="email"/></br>
					
					<input type="password" placeholder="Enter Password" name="password"/></br>
					
					<select class="gender_class" name="gender" >
						<option class="option_class" value="">Select Gender</option>
						<option class="option_class" value="male">Male</option>
						<option class="option_class" value="female">Female</option>
					</select></br>
					
					<input type="submit" value="Sign Up"/>
					
					<a href="index.php"><input  type="button" value="Back" /></a>
				
				</center>
			</form>
		</div>
	</div>

</body>
</html>