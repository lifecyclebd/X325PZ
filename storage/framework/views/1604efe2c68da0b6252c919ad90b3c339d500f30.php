<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 
    <section class="content-header">
        <h1>
            User Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img src="<?php echo e(asset('public/AdminLTE/dist/img/user2-160x160.jpg')); ?>" class="img-circle img-bordered-sm user-image" alt="User Image">

                        <h3 class="profile-username text-center"><?php echo e($data->name); ?></h3>

                        <p class="text-muted text-center">Software Engineer</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Blood Group</b> <a class="pull-right">A+</a>
                            </li>
                            <li class="list-group-item">
                                <b>Last Donotaion</b> <a class="pull-right">15 July 2017</a>
                            </li>
                            <li class="list-group-item">
                                <b>Work Durration</b> <a class="pull-right">2 hours 30 minutes</a>
                            </li>
                            <li class="list-group-item">
                                <b>Status</b> <a class="pull-right">Active</a>
                            </li>
                            <li class="list-group-item">
                                <b>E-mail</b> <a class="pull-right">admin@lifecyclebd.org</a>
                            </li>
                        </ul>
 
                    </div>
                    <!-- /.box-body -->
                </div>
               
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                        <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                        <li><a href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                            <div class="post">
                                <div class="user-block">
                                    <img src="<?php echo e(asset('public/AdminLTE/dist/img/user2-160x160.jpg')); ?>" class="img-circle img-bordered-sm user-image" alt="User Image">

                                    <span class="username">
                                        <a href="#"><?php echo e($data->name); ?></a> 
                                    </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <th>SL</th><th>Purpose</th><th>Date-Time</th><th>Operation</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td><td>Add Donor</td><td>12.12.2017 10:30pm</td><td><i class="fa fa-dashboard"></i></td>
                                    </tr>
                                    <tr>
                                        <td>2</td><td>Search A+ Donor</td><td>12.12.2017 10:30pm</td><td><i class="fa fa-dashboard"></i></td>
                                    </tr>
                                    </tbody>
                                    
                                </table>
                              
                            </div>
                            <!-- /.post -->

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <span class="text-center label label-success">Special features are comming soon..</span>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal">
                                
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?php echo e($data->name); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" value="<?php echo e($data->email); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Blood Group</label>

                                    <div class="col-sm-10">
                                        <select class="form-control" name="blood_group">
                                            <option value="A+">A+</option>
                                            <option value="A+">A-</option>
                                            <option value="A+">B+</option>
                                            <option value="A+">B-</option>
                                            <option value="A+">AB+</option>
                                            <option value="A+">AB-</option>
                                        </select>
                                     </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
  
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.myapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>