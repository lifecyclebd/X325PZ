<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="margin-top: 30px;"> 
    <div class="col-md-9">
        <span class="more_news_title"><?php echo e($data['read_more_detail']->title); ?></span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="<?php echo e($data['read_more_detail']->pic_path); ?>" class="img img-rounded img-thumbnail" style="width: 100%; height: 540px;">
            <h4 style="padding: 10px"></h4>
            <p class="text-justify" style="padding: 10px">
                <?php echo $data['read_more_detail']->description; ?>

            </p>
            
        </div>
        <br>
    </div>
    <div class="col-md-3">
    <h3>Relative Post</h3>
    <?php $__currentLoopData = $data['all_news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($data['read_more_detail']->id); ?>"><span class="more_news_title"><?php echo e($row->title); ?></span></a>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="<?php echo e($row->pic_path); ?>" class="img img-rounded img-thumbnail" style="width: 150px; height: 100px;">
            
            
        </div>
        <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div> 


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>