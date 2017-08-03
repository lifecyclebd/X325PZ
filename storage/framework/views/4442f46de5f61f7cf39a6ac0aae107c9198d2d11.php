<?php $__env->startSection('content'); ?>
<style type="text/css">
    li {list-style-type: circle;
        margin-right: 15px !important;
    }
</style>
<div class="container-fluid">
    <div class="col-md-9">
        <span class="more_news_title" style="color: black"><strong><?php echo e($data['news_detail']->title); ?></strong></span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <p style="float: left; padding-right: 15px;">
            <img src="<?php echo e($data['news_detail']->pic_path); ?>" class="img img-rounded img-thumbnail" style="width: 100%; height: 350px;">
            </p>
            <p class="text-justify" style="padding-right: 20px !important; margin: 5px; float: right;   text-align: justify;
    text-justify: inter-word;">
                <?php echo $data['news_detail']->description; ?>

            </p>
        </div>
        
        <br>
    </div>
    <div class="col-md-3">
        <span class="more_news_title" style="color: black"><strong>আরও সংবাদ</strong></span>
        <hr  class="more_news">
        <?php $__currentLoopData = $data['news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12 border-bottom">
            <div class="more_news_left col-md-6">
                <img style="width: 100%;height: 100px" src="<?php echo e($row->pic_path); ?>" class="img-thumbnail">
            </div>
            <div class="more_news_right col-md-6">
                <h4 class=""><a class="" href="<?php echo e(url('/news-detail')); ?>/<?php echo e($row->id); ?>"><?php echo e($row->title); ?></a></h4>

                <?php echo e($row->created_at); ?>

            </div>
            <br>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div> 


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>