<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/css/round-about.css')); ?>"> 
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Admin Home </h3>
            </div>

            <div class="box-body">
                <!-- form start -->
                <!-- Team Members Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Our Team</h2>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count">55</span>
                            <h3>A Positive   <small>(A+)</small>  </h3>
                        </div>
                        
                    </div> 
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count">55</span>
                            <h3>A Positive   <small>(A+)</small>  </h3>
                        </div>
                        
                    </div> 
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count">55</span>
                            <h3>A Positive   <small>(A+)</small>  </h3>
                        </div>
                        
                    </div> 
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count">55</span>
                            <h3>A Positive   <small>(A+)</small>  </h3>
                        </div>
                        
                    </div> 
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count">55</span>
                            <h3>A Positive   <small>(A+)</small>  </h3>
                        </div>
                        
                    </div> 
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count">55</span>
                            <h3>A Positive   <small>(A+)</small>  </h3>
                        </div>
                        
                    </div> 
                    <!-- form close -->
                </div>  
                <div class="container">
                    <div class="row">
                        <h3>Daily Activities</h3>
                        <div class="col-md-6">
                            <h4>Admin Section</h4>
                        </div>
                        <div class="col-md-6">
                            <h4>User Section</h4>
                        </div>
                    </div>
                    <hr>
                    <div class="clearfix"></div>

                    <div class="row">
                        <h3>Important Notice Activities</h3>
                        <div class="col-md-6">
                            <h4>Admin Section</h4>
                        </div>
                        <div class="col-md-6">
                            <h4>User Section</h4>
                        </div>
                    </div>
                 </div>

            <!-- /.box -->

    </section>
    <!-- /.content -->

</div>


<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>