<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="margin-top: 30px;"> 
    <div class="col-md-9">
        <span class="more_news_title"><?php echo e($data['read_more_detail']->title); ?></span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="<?php echo e(asset('/')); ?>public/images/<?php echo e($data['read_more_detail']->photo); ?>" class="img img-rounded img-thumbnail" style="width: 100%; height: 540px;">
            <h4 style="padding: 10px"></h4>
            <p class="text-justify" style="padding: 10px"> <?php echo e($data['read_more_detail']->short_description); ?> 
                <?php echo e($data['read_more_detail']->long_description); ?>

            </p>
            
        </div>
        <br>
    </div>
    <div class="col-md-3">
    <h3>Relative Post</h3>

    <span class="more_news_title"><?php echo e($data['read_more_detail']->title); ?></span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="<?php echo e(asset('/')); ?>public/images/<?php echo e($data['read_more_detail']->photo); ?>" class="img img-rounded img-thumbnail" style="width: 100%; height: auto;">
            <h4 style="padding: 10px"></h4>
            <p class="text-justify" style="padding: 10px"> <?php echo e($data['read_more_detail']->short_description); ?> 
                <?php echo e(substr($data['read_more_detail']->long_description,0,150)); ?> ...<a href="">Read more</a>
            </p>
            
        </div>
        <br>

    </div>
</div> 


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>