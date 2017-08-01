<?php $__env->startSection('content'); ?>
<style type="text/css">
    a{
        color: blue;
    }
    a:hover{
        color:red;
    }
    </style>
<div class="container-fluid" style="margin-top: 30px"> 
    <div class="col-md-9">

        <span class="more_news_title"><?php echo e($data['upcoming_detail']->title); ?></span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="<?php echo e($data['upcoming_detail']->pic_path); ?>" class="img img-rounded img-thumbnail" style="width: 100%; height: 540px;">
            <p class="text-justify" style="padding: 10px">
                <?php echo $data['upcoming_detail']->description; ?>

            </p>
        </div>

        <br>
    </div>
    <div class="col-md-3">
        <span class="more_news_title">সাম্প্রতিক ঘটনাবলী </span>
        <hr  class="more_news">
        <?php $__currentLoopData = $data['upcoming']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="<?php echo e($row->pic_path); ?>" class="img-thumbnail">
            </div>
            <div class="more_news_right ">
                <a href="<?php echo e(url('/upcoming-event')); ?>/<?php echo e($row->id); ?>"><h4><?php echo e($row->title); ?></h4></a>
                <?php echo e($row->created_at); ?>

            </div>
            <br>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div> 


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>