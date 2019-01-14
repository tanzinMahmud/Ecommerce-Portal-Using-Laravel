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

<div class="container">
    <h4>NEW COLLECTION</h4>
  <div class="row">
    <div class="container">
      <div class="container">
          <h4>Desktop</h4>
      </div>
        <?php $__currentLoopData = $desktop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="<?php echo e(asset('uploads')); ?>/<?php echo e($sp->img_path); ?>" alt="...">
                      <h4><?php echo e($sp->title); ?></h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p><?php echo e($sp->short_desc); ?></p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price"><?php echo e('$'.$sp->price); ?></p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="<?php echo e(route('cart.index',[$sp->id])); ?>" target="_blank" >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="container">
        <div class="container">
          <h4>Television</h4>
        </div>
        <?php $__currentLoopData = $tv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="<?php echo e(asset('uploads')); ?>/<?php echo e($sp->img_path); ?>" alt="...">
                      <h4><?php echo e($sp->title); ?></h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p><?php echo e($sp->short_desc); ?></p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price"><?php echo e('$'.$sp->price); ?></p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="<?php echo e(route('cart.index',[$sp->id])); ?>" target="_blank" >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="container">
        <div class="container">
          <h4>Clothing</h4>
        </div>
        <?php $__currentLoopData = $Clothing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="<?php echo e(asset('uploads')); ?>/<?php echo e($sp->img_path); ?>" alt="...">
                      <h4><?php echo e($sp->title); ?></h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p><?php echo e($sp->short_desc); ?></p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price"><?php echo e('$'.$sp->price); ?></p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="<?php echo e(route('cart.index',[$sp->id])); ?>" target="_blank" >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="container">
        <div class="container">
          <h4>Apple</h4>
        </div>
        <?php $__currentLoopData = $apple; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="<?php echo e(asset('uploads')); ?>/<?php echo e($sp->img_path); ?>" alt="...">
                      <h4><?php echo e($sp->title); ?></h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p><?php echo e($sp->short_desc); ?></p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price"><?php echo e('$'.$sp->price); ?></p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="<?php echo e(route('cart.index',[$sp->id])); ?>" target="_blank" >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="container">
        <div class="container">
          <h4>Smart Phones</h4>
        </div>
        <?php $__currentLoopData = $smart_phone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="<?php echo e(asset('uploads')); ?>/<?php echo e($sp->img_path); ?>" alt="...">
                      <h4><?php echo e($sp->title); ?></h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p><?php echo e($sp->short_desc); ?></p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price"><?php echo e('$'.$sp->price); ?></p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="<?php echo e(route('cart.index',[$sp->id])); ?>" target="_blank" >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="container">
        <div class="container">
          <h4>Laptop</h4>
        </div>
        <?php $__currentLoopData = $laptop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="<?php echo e(asset('uploads')); ?>/<?php echo e($sp->img_path); ?>" alt="...">
                      <h4><?php echo e($sp->title); ?></h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p><?php echo e($sp->short_desc); ?></p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price"><?php echo e('$'.$sp->price); ?></p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="<?php echo e(route('cart.index',[$sp->id])); ?>" target="_blank" >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- END PRODUCTS -->
  </div>
</div><!-------container----->
<?php echo $__env->yieldContent('content'); ?>
</body>
</html>