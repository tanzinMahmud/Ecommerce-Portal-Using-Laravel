<!DOCTYPE html>
<html>
<head>
	<title>Details Page</title>
</head>
<body>
		<p>Welcome to user details page.</p>
		<table> 
			<tr>
				<td>
					Id
				</td>
				<td>
					<?php echo e($user->id); ?>

				</td>
			</tr>
			<tr>

				<td>
					Username
				</td>
				<td>
					<?php echo e($user->username); ?>

				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<?php echo e($user->password); ?>

				</td>
				
			</tr>
			<tr>
				
				<td>
					Types
				</td>
				
				<td>
					<?php echo e($user->type); ?>

				</td>
			</tr>
		</table>
</body>
</html>