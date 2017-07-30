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
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group" style="margin-bottom: 30px">
                <div class="col-md-4">
                  <select class="form-control">
                    <?php $__currentLoopData = $data['donor']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value=""><?php echo e($row->email); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="col-md-4">
                  <select class="form-control">
                    <option value="A+">A+</option>
                    <option value="AB+">AB+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="AB-">AB-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option> 
                  </select>
                </div>
                <div class="col-md-4">
                  <input class="form-control btn btn-primary" value="Search" type="submit" >
                </div>
                
              </div>
              <div class="form-group">
                    <ul class="wysihtml5-toolbar" style=""><li class="dropdown">
  
  
</li>




</li>
</ul><textarea id="compose-textarea" class="form-control" style="height: 300px; display: none;">                      
                    </textarea><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="display: block; background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(210, 214, 222); border-style: solid; border-width: 1px; clear: none; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 6px 12px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: baseline; text-align: start; box-sizing: border-box; box-shadow: none; border-radius: 0px; width: 100%; height: 300px;"></iframe>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" style="width: 100px" class="btn btn-primary"><i class="fa fa-envelope-o"></i>  Send</button>
              </div>
            </div>
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