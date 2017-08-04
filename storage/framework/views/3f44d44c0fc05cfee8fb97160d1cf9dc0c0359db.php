<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="margin-top: 30px; height: auto;"> 
    <div class="col-md-9">

        <span class="more_news_title" style="color: black"><strong> <?php echo e($data['last_recent_event']->title); ?></strong></span>
        <hr  class="more_news">
        <div class="row border-bottom">
            <div class="col-md-6">
                <img src="<?php echo e($data['last_recent_event']->pic_path); ?>" class="img img-rounded" style="width: 100%; height: auto">
            </div>
            <div class="col-md-6">
                <p class="text-justify" style="color: black !important">
                    <?php echo $data['last_recent_event']->description; ?>

                </p>
            </div>
            <br>
        </div>
        
        <div class="row" style="height: auto;">
            <span class="more_news_title" style="color: black"><strong>চলতি ঘটনাবলী </strong></span>
            <hr>
            <?php $__currentLoopData = $data['recent_event']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6"> 
                <div style="    margin-bottom: 30px; min-height: 350px; background: rgba(247, 247, 247, 0.87); border: 1px solid #ddd;">
                    <div class="col-md-12">
                        <span class="related_links_news_title text-justify"><a class="" href="<?php echo e(url('/recent-event')); ?>/<?php echo e($row->id); ?>"><?php echo e($row->title); ?></a></span>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo e($row->pic_path); ?>" class="img img-thumbnail img-responsive" style="width: 200px; height: 200px">  
                    </div>
                    <div class="col-md-6">
                        <p align="text-justify"> <?php echo substr($row->description,0,200); ?></p>
                        <a href="<?php echo e(url('/recent-event')); ?>/<?php echo e($row->id); ?>" class="bnt btn-danger pull-right" style="padding: 5px 15px;border-radius: 3px;text-align: center;margin: 0 auto;"> বিস্তারিত 
                     </a>
                    </div>
                    
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


    </div>
    <div class="col-md-3">
        <span class="more_news_title" style="color: black"><strong>সাম্প্রতিক ঘটনাবলী</strong></span>
        <hr  class="more_news">
        <?php $__currentLoopData = $data['upcoming_event']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="<?php echo e($row->pic_path); ?>" class="img-thumbnail">
            </div>
            <div class="more_news_right ">
                <a href="<?php echo e(url('/upcoming-event')); ?>/<?php echo e($row->id); ?>" ><h4><?php echo e($row->title); ?></h4></a>
                <?php echo e($row->created_at); ?>

            </div>
            <br>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div> 

<div class="clearfix" style="min-height: 30px;"></div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>