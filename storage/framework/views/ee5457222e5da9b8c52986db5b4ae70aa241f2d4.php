<?php $__env->startSection('content'); ?>
<div class="container-fluid"> 
    <div class="col-md-9">
        <div class="row ">
            <div class="col-md-6">
                <img src="<?php echo e($data['last_news']->pic_path); ?>" class="img img-rounded" style="width: 100%; height: auto">
            </div>
            <div class="col-md-6">
                <span class="related_links_news_title"><a class="" href="<?php echo e(url('/news-detail')); ?>/<?php echo e($data['last_news']->id); ?>"><strong><?php echo e($data['last_news']->title); ?></strong></a></span>
                <p class="text-justify">
                    <?php echo $data['last_news']->description; ?>

                </p>
                <a href="<?php echo e(url('/news-detail')); ?>/<?php echo e($data['last_news']->id); ?>"><button class="pull-right btn-default" style="background: none;">বিস্তারিত</button></a>
            </div>
            <br>
        </div>
        <hr  class="more_news">
        <div class="row">
            <?php $__currentLoopData = $data['recent_news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="<?php echo e(url('/news-detail')); ?>/<?php echo e($row->id); ?>"><?php echo e($row->title); ?></a></span>
                <div class="news_img col-md-6">
                    <span><img style="width: 100%;height: 150px" src="<?php echo e($row->pic_path); ?>" class="img"> </span>
                </div>
                <div class="news_text col-md-6">
                    <?php 
                    $str=substr($row->description,0,398); 
                    $str[399]=' '; 



                    ?>
                    <?php echo $str; ?>

                </div>
                <a href="<?php echo e(url('/news-detail')); ?>/<?php echo e($row->id); ?>"><button class="pull-right btn-default" style="background: none;">বিস্তারিত</button></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


    </div>
    <div class="col-md-3">
        <span class="more_news_title" style="color: black"><strong>আরও সংবাদ</strong></span>
        <hr  class="more_news">
        <?php $__currentLoopData = $data['news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12 border-bottom">
            <div class="more_news_left col-md-6">
                <img style="width: 100%;height: 100px" src="<?php echo e($row->pic_path); ?>" class="img-thumbnail">
            </div>
            <div class="more_news_right col-md-6 ">
                <h5 class=""><a class="" href="<?php echo e(url('/news-detail')); ?>/<?php echo e($row->id); ?>"><strong><?php echo e($row->title); ?></strong></a></h5>
                <?php echo e($row->created_at); ?>

            </div>
            <br>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div> 


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>