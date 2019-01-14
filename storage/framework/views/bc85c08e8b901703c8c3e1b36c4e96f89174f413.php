<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Welcome</p> | <a href="<?php echo e(route('create.index')); ?>">Create New</a>

	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li>
		<a href="<?php echo e(route('details.index',[$user->id])); ?>"><?php echo e($user->username); ?></a>
		 | <a href="<?php echo e(route('edit.index',[$user->id])); ?>">edit</a>
		  | <a href="<?php echo e(route('delete.deleteuser',[$user->id])); ?>">delete</a>
		   
	</li> 
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<p><?php echo e(session('msg')); ?></p>
	

</body>
</html>