<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <div class="box box-body">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Update Content</h3>
                <div class="box-tools pull-right">
                    <a href="<?php echo e(url('/admin/content')); ?>" class="">      
                        <i class="fa fa-undo" aria-hidden="true"></i> back
                    </a>

                </div>
            </div>
            <div class="box-body">
                <!-- form start -->
                <form method="post" action="<?php echo e(url('/admin/content/update')); ?>" class="form-horizontal" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Title</label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control" value="<?php echo e($data->title); ?>" name="title" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Description</label>
                        <div class="col-md-8">
                            <textarea id="ckeditor" name="description"  class="form-control ckeditor"> 
                            <?php echo e($data->description); ?>

                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Content Type</label>

                        <div class="col-md-8">
                            <select class="form-control" name="content_type"> 
                                <option value="news" <?php if ($data->content_type == "news") echo 'selected="selected"'; ?> > News </option>
                                <option value="events"<?php if ($data->content_type == "events") echo 'selected="selected"'; ?> > Events</option>
                                <option value="post" <?php if ($data->content_type == "post") echo 'selected="selected"'; ?> > Post </option>
                                <option value="page" <?php if ($data->content_type == "page") echo 'selected="selected"'; ?>  > Page </option>
                            </select>

                        </div>
                    </div> 

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Featured Image</label>

                        <div class="col-md-10">
                            <input type="file" name="pic_path" > 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>

                </form>
                <!-- form close -->
            </div>  
        </div>  
    </div> 

</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>