<?php $__env->startSection('content'); ?>

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <div class="box box-body">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Content Management</h3>
                <div class="box-tools pull-right">
                    <a href="<?php echo e(url('/admin/content')); ?>" class="">      
                        <i class="fa fa-undo" aria-hidden="true"></i> back
                    </a>

                </div>
            </div>
            <div class="box-body">
                <!-- form start -->
                <form method="post" action="<?php echo e(url('admin/content/store')); ?>" class="form-horizontal" enctype="multipart/form-data"> 
                    <?php echo csrf_field(); ?> 
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Content Title</label>
                        <div class="col-md-10">
                            <input id="name" type="text" class="form-control" name="content_title" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Details </label>
                        <div class="col-md-10">
                            <textarea id="ckeditor" name="content_description" class="form-control ckeditor"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Featured Image</label>

                        <div class="col-md-10">
                            <input type="file" name="pic_path" > 
                        </div>
                    </div> 
                    <div class="form-group">
                            <label class="control-label col-sm-2">Select Publish Mode</label>
                            <div class="col-sm-3"> 
                                <select name="access_mode" class="form-control" >
                                    <option value="1"> Public</option>
                                    <option value="2"> Admin</option>
                                    <option value="3"> Only Me</option>
                                </select>
                            </div>                    
                            <label class="control-label col-sm-3">Sort Order</label>
                            <div class="col-sm-4">
                                <input type="number" name="post_order" class="form-control" placeholder=" Post Order">
                            </div>
                    </div>
 
                     <div class="form-group">
                            <label class=" control-label   col-sm-2">Post Published Date</label>
                            <div class="col-sm-3">
                                <input type="date" name="published_date" class="form-control" >
                            </div>

                            <label class="control-label col-sm-3">Select Content Type</label>
                            <div class=" col-sm-4">
                                <select name="content_type" class="form-control" id="mySelector">
                                    <option value="1">What People Say</option> 
                                    <option value="2">Upcoming Event</option> 
                                    <option value="3">Recent Events</option>  
                                    <option value="4">Blog</option> 
                                    <option value="5">More About Blood</option> 
                                    <option value="6">About Us</option> 
                                    <option value="7">News </option> 
                                    <option value="8">Post </option> 
                                    <option value="9">Page </option> 

                                </select>
                            </div>
                    </div> 
                 

                    <hr>
                    <div class="col-md-12 hidden " id="h1" class="what_people_say" style="background: #eee; padding: 10px; ">
                     
                        <div class="form-group">
                            <label class="control-label col-sm-2">Name</label>
                            <div class="col-sm-3 ">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <label class=" control-label   col-sm-3">Designation</label>
                            <div class="   col-sm-4">
                                <input type="text" name="designation" class="form-control" placeholder="Designation">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label    col-sm-2">Institution Name</label>
                            <div class="   col-sm-3 ">
                                <input type="text" name="institution" class="form-control" placeholder="Institution Name">
                            </div> 
                            <label class=" control-label   col-sm-3">Email</label>
                            <div class="col-sm-4">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class=" control-label col-sm-2">Phone</label>
                            <div class="col-sm-3">
                                <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                            </div> 
                            <label class="control-label col-sm-3">Blood Group</label>
                            <div class="col-sm-4 ">
                                <select name="blood_group" class="form-control">
                                    <option value="A+">A+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="B+">B+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-3">Facebook Url</label>
                              <div class="input-group col-sm-8 ">
                                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                <input id="email" type="text" class="form-control" value="http://www.facebook.com/" name="fb_url" placeholder="username">
                              </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Twitter Url</label>
                              <div class="input-group col-sm-8 ">
                                <span class="input-group-addon"> </i><i class="fa fa-twitter"></i></span>
                                <input id="email" type="text" class="form-control" value="http://www.twitter.com/" name="twitter_url" placeholder="username">
                              </div>                              

                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Personal Web Url</label>
                              <div class="input-group col-sm-8 ">
                                <span class="input-group-addon"> <i class="fa fa-chrome"></i> </span>
                                <input id="email" type="text" class="form-control" value="http://www.demo.com/" name="web_url" placeholder="username">
                              </div>  
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Linked Url</label>
                              <div class="input-group col-sm-8 ">
                                <span class="input-group-addon"> <i class="fa fa-linkedin"></i></span>
                                <input id="email" type="text" value="http://www.linkedin.com/" class="form-control" name="linked_url" placeholder="username">
                              </div>                              

                        </div>

 

                    </div>
                 
                    <div class="col-md-12 hidden  " id="h2" class="events" style="background: #eee; padding: 10px;">                 
                        <div class="form-group">
                            <label class="control-label col-sm-2">Event Location</label>
                            <div class="col-sm-10">
                                <input type="text" name="location" class="form-control" placeholder="Location">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Event Start Date Time</label>
                            <div class="col-sm-10 controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                            <input type="text" value="" name="event_start_date"  class="form-control"> 
                            <span class="add-on"><i class="icon-remove"></i></span>
                            <span class="add-on"><i class="icon-th"></i></span>                
                            </div>
                            <input type="hidden" id="dtp_input1" value="" class="form-control" /><br/>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Event End  Date Time</label>
                            <div class="col-sm-10 controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                <input type="text" value="" name="event_end_date"  class="form-control"> 
                                <span class="add-on"><i class="icon-remove"></i></span>
                                <span class="add-on"><i class="icon-th"></i></span>                
                            </div>
                            <input type="hidden" id="dtp_input1" value="" class="form-control" /><br/>
                        </div>    
                    </div>
                    <div class="col-md-12 hidden  " id="h3" class="events" style="background: #eee; padding: 10px;">                 
                        <div class="form-group">
                            <label class="control-label col-sm-2">Event Location</label>
                            <div class="col-sm-10">
                                <input type="text" name="location" class="form-control" placeholder="Location">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Event Start Date Time</label>
                            <div class="col-sm-10 controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                            <input type="text" value="" name="event_start_date"  class="form-control"> 
                            <span class="add-on"><i class="icon-remove"></i></span>
                            <span class="add-on"><i class="icon-th"></i></span>                
                            </div>
                            <input type="hidden" id="dtp_input1" value="" class="form-control" /><br/>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Event End  Date Time</label>
                            <div class="col-sm-10 controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                <input type="text" value="" name="event_end_date"  class="form-control"> 
                                <span class="add-on"><i class="icon-remove"></i></span>
                                <span class="add-on"><i class="icon-th"></i></span>                
                            </div>
                            <input type="hidden" id="dtp_input1" value="" class="form-control" /><br/>
                        </div>    
                    </div>

                    <div class="col-md-12  hidden " id="h4" class="blog" style="background: #eee; padding: 10px;">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Select Blog Category</label>
                            <div class="col-sm-3">
                                <select name="blog_category" class="form-control" >
                                    <option value="health"> Health</option>
                                    <?php $__currentLoopData = $data['all_blog_categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->category_name); ?>"> <?php echo e($row->category_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>  
                            <label class="control-label col-sm-3">Blog Publish Date Time</label>
                            <div class="col-sm-4 controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                        
                                <input type="text" value=""   class="form-control"> 
             
                                <span class="add-on"><i class="icon-remove"></i></span>
                                <span class="add-on"><i class="icon-th"></i></span>                
                            </div>
                            <input type="hidden" id="dtp_input1" value="" class="form-control" /><br/>
                        </div> 
                         
                        
                        <div class="form-group">
                            <label class="control-label col-sm-2">Select Publish Mode</label>
                            <div class="col-sm-3"> 
                                <select name="blog_category" class="form-control" >
                                    <option value="1"> Public</option>
                                    <option value="2"> Admin</option>
                                    <option value="3"> Only Me</option>
                                </select>
                            </div>
                            <label class="control-label col-sm-3">Sort Order</label>
                            <div class="col-sm-4">
                                <input type="number" name="sort_order" class="form-control" placeholder=" Post Order">
                            </div>
                        </div> 
                         
                    </div>
                  

                 

                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-8" style="margin-top: 15px">
                            <button type="submit" class="btn btn-primary col-md-3">
                                Create 
                            </button>
                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                    <!-- form close -->
            </div>  
        </div>  
    </div> 

</div>
<!-- /.content-wrapper -->

<script src="<?php echo e(asset('public/js/jquery-1.8.3.min.js')); ?>" charset="UTF-8"></script>
<script src="<?php echo e(asset('public/AdminLTE/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/bootstrap-datetimepicker.js')); ?>" charset="UTF-8"></script>
<script src="<?php echo e(asset('public/js/locales/bootstrap-datetimepicker.fr.js')); ?>" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>


<?php $__env->stopSection(); ?> 


<?php $__env->startSection('script_link'); ?>
<!-- ./wrapper --> 
<!-- jQuery 2.2.3 -->
<script src="<?php echo e(asset('public/AdminLTE/plugins/ckeditor/ckeditor.js')); ?>"></script>
<script src="<?php echo e(asset('public/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo e(asset('public/AdminLTE/bootstrap/js/bootstrap.min.js')); ?>"></script>


<script src="<?php echo e(asset('public/AdminLTE/plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('public/AdminLTE/plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>
<link href="<?php echo e(asset('/public')); ?>/AdminLTE/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('/public')); ?>/AdminLTE/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('/public')); ?>/AdminLTE/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('/public')); ?>/AdminLTE/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
  


<script src="<?php echo e(asset('public/AdminLTE/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/AdminLTE/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/AdminLTE/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/AdminLTE/plugins/clockface/js/clockface.js')); ?>"></script>




 
<!-- DataTables -->
<script src="<?php echo e(asset('public/AdminLTE/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
 <script src="<?php echo e(asset('public/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>
  
<!-- SlimScroll -->
 <script src="<?php echo e(asset('public/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js')); ?>"></script> 

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css"> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>

<?php $__env->stopSection(); ?> 


<?php $__env->startSection('javascript_code'); ?>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker();
            });
        </script> 

<script type="text/javascript"> 

 $(function () {
                $('#datetimepicker1').datetimepicker();
            });

$("#mySelector").change(function () {
 //   alert('123');
    if( $(this).val() == 1){
        $('#h1').removeClass('hidden');
        $('#h2').addClass('hidden');
        $('#h3').addClass('hidden'); 
        $('#h4').addClass('hidden'); 
    }
    else if( $(this).val() == 2){
        $('#h2').removeClass('hidden');
        $('#h1').addClass('hidden');
        $('#h3').addClass('hidden'); 
        $('#h4').addClass('hidden'); 
    }
    else if( $(this).val() == 3){

        $('#h3').removeClass('hidden');
        $('#h2').addClass('hidden');
        $('#h1').addClass('hidden'); 
        $('#h4').addClass('hidden'); 
    } 
    else if( $(this).val() == 4){

        $('#h4').removeClass('hidden');
        $('#h2').addClass('hidden');
        $('#h3').addClass('hidden'); 
        $('#h1').addClass('hidden'); 
    } 
    else{

        $('#h1').addClass('hidden'); 
        $('#h2').addClass('hidden'); 
        $('#h3').addClass('hidden'); 
        $('#h4').addClass('hidden'); 
    }
  });
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>