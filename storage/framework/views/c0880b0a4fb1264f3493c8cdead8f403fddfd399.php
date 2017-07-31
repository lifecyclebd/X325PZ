<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('/')); ?>/public/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<div class="content-wrapper" style="min-height: 946px;">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
          <form action="<?php echo e(url('admin/mailbox/store')); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="box-body">
                
                  <div class="input-group" style="margin-bottom: 30px">
                    <span class="input-group-addon" id="basic-addon1">To </span> 
                      <select class="form-control" name="email">
                        <?php $__currentLoopData = $data['donor']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($row->email); ?>"><?php echo e($row->email); ?> - <?php echo e($row->blood_group); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                    <div class="form-group"> 
                      <div class="col-md-12">
                      <textarea class="form-control col-md-12 ckeditor" name="message" id="ckeditor">
                         We need 2 bags A+ blood, Please inform us, If you are available now. 


                         <br>
                         <br>
                         <br>
                         <br>
                         <br>
                         System Administrator<br>
                          support@lifecyclebd.org

                      </textarea>
                      </div>
                    </div>  
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" style="width: 100px" class="btn btn-primary"><i class="fa fa-envelope-o"></i>  Send</button>
              </div>
            </div>
          </form>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
            
        </div> 
    </section>
    <!-- /.content -->
</div>
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>