<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<style type="text/css">
    /* padding-bottom and top for image */
.mfp-no-margins img.mfp-img {
    padding: 0;
}
/* position of shadow behind the image */
.mfp-no-margins .mfp-figure:after {
    top: 0;
    bottom: 0;
}
/* padding for main container */
.mfp-no-margins .mfp-container {
    padding: 0;
}
.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
    opacity: 0;
    -webkit-backface-visibility: hidden;
    -webkit-transition: all 0.3s ease-out; 
    -moz-transition: all 0.3s ease-out; 
    -o-transition: all 0.3s ease-out; 
    transition: all 0.3s ease-out;
}

.mfp-with-zoom.mfp-ready .mfp-container {
        opacity: 1;
}
.mfp-with-zoom.mfp-ready.mfp-bg {
        opacity: 0.8;
}

.mfp-with-zoom.mfp-removing .mfp-container, 
.mfp-with-zoom.mfp-removing.mfp-bg {
    opacity: 0;
}
</style>

<link rel="stylesheet" href="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css')); ?>"> 
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title"> </h3>

                        <div class="box-tools pull-right">

                            <a class="btn btn-success pull-right" href="<?php echo e(url('/admin/content/create')); ?>"><i class="fa fa-plus"></i> Add Content</a>

                        </div>
                        <h3 class="box-title">Content List</h3>

                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> ID</th>
                                    <th style="width: 20%"> Title</th>
                                    <th style="width: 30%">Description</th>
                                    <th>Content Type</th>
                                    <th>Image</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row->id); ?></td>
                                    <td><?php echo e($row->content_title); ?></td>
                                    <td align="justify"><?php echo substr($row->content_description,0,200); ?></td> 
                                    <td><?php echo e($row->content_type); ?></td> 
                                    <td> 
                                                    <a class="image-popup-vertical-fit" href="<?php echo e($row->pic_path); ?>" title="Caption. Can be aligned to any side and contain any HTML.">
    <img src="<?php echo e($row->pic_path); ?>" width="75" height="75">
</a>

<a class="image-popup-vertical-fit" href="http://farm9.staticflickr.com/8241/8589392310_7b6127e243_b.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
    <img src="http://farm9.staticflickr.com/8241/8589392310_7b6127e243_s.jpg" width="75" height="75">
</a>
                                    </td> 
                                    <td> 
                                        <a href="<?php echo e(url('/admin/content')); ?>/<?php echo e($row->id); ?>/edit" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-edit"></i> </a>
                                        <a href="<?php echo e(url('/admin/content')); ?>/delete/<?php echo e($row->id); ?>" class="btn  btn-danger btn-xs"><i class="fa fa-fw fa-remove"></i></a>
                                        <a href="<?php echo e(url('/admin/content/')); ?>/<?php echo e($row->id); ?>" class="btn  btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </td>

                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content --> 
</div>
<!-- /.content-wrapper -->


<script type="text/javascript"> 
$(document).ready(function() {

    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }
        
    });

    $('.image-popup-fit-width').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
            verticalFit: false
        }
    });

    $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

});
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>