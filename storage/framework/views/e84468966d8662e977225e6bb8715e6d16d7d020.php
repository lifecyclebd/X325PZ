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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"> 
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header with-border" style="background: #eee">
                        <h3 class="box-title"> </h3>

                        <div class="box-tools pull-right">
                        <a class="btn btn-xs btn-info pull-left" href="<?php echo e(url('/admin/content/search-content')); ?>" style="margin-right: 5px"><i class="fa fa-search"></i> Search Content </a>  
                        <a class="btn btn-xs btn-success pull-right" href="<?php echo e(url('/admin/content/create')); ?>"><i class="fa fa-plus"></i> Add Content</a>

                        </div>
                        <h3 class="box-title">Content List</h3>

                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> ID</th>
                                    <th style="width: 60%"> Title</th> 
                                    <th>Content Type</th>
                                    <th>Image</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row->id); ?></td>
                                    <td><a href="<?php echo e(url('/admin/content/')); ?>/<?php echo e($row->id); ?>" > <?php echo e($row->content_title); ?> </a></td> 
                                    <td><?php echo e($row->content_type); ?></td> 
                                    <td> 

                                        <div class="popup-gallery">
                                        <a href="<?php echo e($row->pic_path); ?>" title="<?php echo e($row->content_title); ?>  -  [ <?php echo e($row->content_type); ?> ]" ><i class="fa fa-picture-o" aria-hidden="true"></i>
                                  View</a>
                                </div>

                                    </td> 
                                    <td> 
                                        <a href="<?php echo e(url('/admin/content')); ?>/<?php echo e($row->id); ?>/edit" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit content"><i class="fa fa-fw fa-edit"></i> </a>
                                        <a href="" class="btn  btn-danger btn-xs" title="Delete content" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-remove"></i></a>

 

<!-- Modal -->
                                        <div id="myModal" class="modal fade" role="dialog">
                                          <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header" style="background: red; color: white">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Delete Content</h4>
                                              </div>
                                              <div class="modal-body">
                                                <p style="font-size: 20px; color: red">Are you sure, Do you want to delete this content? </p>
                                              </div>
                                              <div class="modal-footer" style="background: #eee">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <a href="<?php echo e(url('/admin/content')); ?>/delete/<?php echo e($row->id); ?>"  class="btn btn-success"  >Confirm</a>
                                                
                                              </div>
                                            </div>

                                          </div>
                                        </div>


                                        <a href="<?php echo e(url('/admin/content/')); ?>/<?php echo e($row->id); ?>" data-toggle="tooltip" title="Show content" class="btn  btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i>
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
<?php $__env->stopSection(); ?>






<?php $__env->startSection('script_link'); ?> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('javascript_code'); ?>
    <script type="text/javascript">  
        $(document).ready(function() {

            $('.popup-gallery').magnificPopup({

                delegate: 'a',

                type: 'image',

                tLoading: 'Loading image #%curr%...',

                mainClass: 'mfp-img-mobile',

                gallery: {

                    enabled: true,

                    navigateByImgClick: true,

                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image

                },

                image: {

                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

                    titleSrc: function(item) {

                        return item.el.attr('title') + '<small>by lifecycle</small>';

                    }

                }

            });

        });
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>