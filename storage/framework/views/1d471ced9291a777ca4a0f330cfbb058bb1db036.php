<!DOCTYPE html>
<html>
<head>
	<title>Create New Page</title>
</head>
<body>
		<p>Welcome to Create New Page.</p>
		<form method="post"> 
			<?php echo e(csrf_field()); ?>

			<table> 
				
				<tr>

					<td>
						Username
					</td>
					<td>
						<input type="text" name="username" value="<?php echo e(old('username')); ?>">
					</td>
				</tr>
				<tr>
					<td>
						Password
					</td>
					<td>
						<input type="Password" name="password">
					</td>
					
				</tr>
				<tr>
					
					<td>
						Types
					</td>
					
					<td>
						<input type="text" name="type">
					</td>
				</tr>
				<tr>
					<td><input type="submit" value="Create"></td>
				</tr>
			</table>
		</form>
		<?php if($errors->any()): ?>
		    <div>
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		    </div>
		<?php endif; ?>
</body>
</html>