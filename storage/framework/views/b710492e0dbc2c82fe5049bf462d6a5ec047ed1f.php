<?php $__env->startSection('content'); ?>
<style type="text/css">
    li {list-style-type: circle;
        margin-right: 15px !important;
    }
</style>
<div class="container-fluid" style="margin-top: 30px;"> 
    <div class="col-md-9">
        <span class="more_news_title" style="color: black"><strong><?php echo e($data['read_more_detail']->title); ?></strong></span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <p style="float: left; padding-right: 15px;">
                <img src="<?php echo e($data['read_more_detail']->pic_path); ?>" class="img img-rounded img-thumbnail" style="width: 500px;height: 350px;padding: 5px;margin-right: 20px;">
            </p> 
                <p class="text-justify" style="padding-right: 20px !important; margin: 5px; float: right;   text-align: justify;
    text-justify: inter-word;">
                    <?php echo $data['read_more_detail']->description; ?>  
                </p> 
        </div>
        <br>
    </div>
    <div class="col-md-3">
    <span class="more_news_title" style="color: black"><strong>এ সম্পর্কিত আরও তথ্য</strong></span>
    <hr  class="more_news">
    <?php $__currentLoopData = $data['all_news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(url('/read-more')); ?>/detail/<?php echo e($row->id); ?>"><span class="more_news_title"><?php echo e($row->title); ?></span></a>
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