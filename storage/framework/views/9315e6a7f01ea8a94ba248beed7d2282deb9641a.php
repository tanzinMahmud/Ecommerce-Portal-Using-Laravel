<!DOCTYPE html>
<html>
<head>
	<title>edit Page</title>
</head>
<body>
		<p>Welcome to user edit page.</p>
		<form method="post"> 
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
						<input type="text" name="spass" value="<?php echo e($user->password); ?>">
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
				<tr>
					<td><input type="submit" value="Update"></td>
				</tr>
			</table>
		</form>
</body>
</html>