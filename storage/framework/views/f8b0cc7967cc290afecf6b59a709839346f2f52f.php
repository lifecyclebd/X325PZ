 

<?php $__env->startSection('content'); ?>
<div class="container">

<div class="wrapper" style="height: auto; min-height: 100%;">

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1126px;">
    <!-- Content Header (Page header) -->
    <div style="margin-top: 30px;">
    </div>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <img style="width: 100%; height: auto;" class="img-responsive img-circle img" src="<?php echo e(url('/')); ?>/<?php echo e($data['donor']->pic_path); ?>" alt="User profile picture">


              <span style="float: left"> 
                <img  class="img-responsive img-circle img" src="<?php echo e(url('/')); ?>/public/images/available.png"  style="width:28px; height: 28px;" >
                </span>
              <span style="float: left; font-size: 20px; padding: 5px">
                <?php echo e($data['donor']->fname); ?> <?php echo e($data['donor']->lname); ?> 
                </span>
               <span style="clear: both;"></span> 
              <hr>
              <p class="text-muted text-center" style="font-weight:bold"><?php echo e($data['donor']->address); ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Blood Group</b> <a class="pull-right"><?php echo e($data['donor']->blood_group); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Last Donation Date</b> <a class="pull-right"><?php echo e($data['donor']->last_donation); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Number of Donation</b> <a class="pull-right"><?php echo e($data['donor']->donations_number); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Any Diseases</b> <a class="pull-right">13,287</a>
                </li>
              </ul> 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Blood Donate History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body"> 
            <table class="table table-bordered">
              <tr><td>SL</td><td>Donate Date</td><td>Place</td></tr>
              <tr><td>1</td><td>1st Jan 2016</td><td><i class="fa fa-map-marker margin-r-5"></i> Malibag, Dhaka</td></tr>
              <tr><td>2</td><td>23 April 2017</td><td><i class="fa fa-map-marker margin-r-5"></i> DMC, Dhaka-1212</td></tr>
              <tr><td>3</td><td>1 June 2017</td><td><i class="fa fa-map-marker margin-r-5"></i> Ramna, Dhaka, Bangladesh</td></tr>
            </table> 
            </div>
            <!-- /.box-body -->
          </div>


          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Blood Request History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body"> 
            <table class="table table-bordered">
              <tr><td>SL</td><td>Donate Date</td><td>Blood Group</td><td>Place</td></tr>
              <tr><td>1</td><td>1st Jan 2016</td><td>A+</td><td><i class="fa fa-map-marker margin-r-5"></i> Malibag, Dhaka</td></tr>
              <tr><td>2</td><td>23 April 2017</td><td>AB+</td><td><i class="fa fa-map-marker margin-r-5"></i> DMC, Dhaka-1212</td></tr>
              <tr><td>3</td><td>1 June 2017</td><td>AB-</td><td><i class="fa fa-map-marker margin-r-5"></i> Ramna, Dhaka, Bangladesh</td></tr>
            </table>
              

             
            </div>
               <strong><i class="fa fa-map-marker margin-r-5"></i> Present Location</strong>

              <p class="text-muted">Malibag, Dahaka-1213</p> 
          </div>




          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#profile.html#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#profile.html#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#profile.html#settings" data-toggle="tab">Settings</a></li>
              <li><a href="#profile.html#activities" data-toggle="tab">Activities</a></li>
              <li><a href="#profile.html#inbox" data-toggle="tab">Inbox  <span class="badge badge-danger">5</span></a></li>
              <li><a href="#profile.html#blood_request" data-toggle="tab">Blood Request  <span class="badge badge-danger">15</span></a></li>
              <li><a href="#profile.html#activities" data-toggle="tab">Activities</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                   <img style="width: 40px; height: 40px;" class="img-responsive img-circle img" src="<?php echo e(url('/')); ?>/<?php echo e($data['donor']->pic_path); ?>" alt="User profile picture">
                        <span class="username">
                          <a href="#profile.html#">Jonathan Burke Jr.</a>
                          <a href="#profile.html#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p> Lorem ipsum represents  </p>
                  <ul class="list-inline">
                    <li><a href="#profile.html#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#profile.html#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#profile.html#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img style="width: 40px; height: 40px;" class="img-responsive img-circle img" src="<?php echo e(url('/')); ?>/<?php echo e($data['donor']->pic_path); ?>" alt="User profile picture">
                        <span class="username">
                          <a href="#profile.html#">Sarah Ross</a>
                          <a href="#profile.html#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Sent you a message - 3 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>

                  <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" placeholder="Response">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img style="width: 40px; height: 40px;" class="img-responsive img-circle img" src="<?php echo e(url('/')); ?>/<?php echo e($data['donor']->pic_path); ?>" alt="User profile picture">
                        <span class="username">
                          <a href="#profile.html#">Adam Jones</a>
                          <a href="#profile.html#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="./AdminLTE 2 _ User Profile_files/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img style="width: 40px; height: 40px;" class="img-responsive img-circle img" src="<?php echo e(url('/')); ?>/<?php echo e($data['donor']->pic_path); ?>" alt="User profile picture">
                          <br>
                          <img style="width: 40px; height: 40px;" class="img-responsive img-circle img" src="<?php echo e(url('/')); ?>/<?php echo e($data['donor']->pic_path); ?>" alt="User profile picture">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img style="width: 40px; height: 40px;" class="img-responsive img-circle img" src="<?php echo e(url('/')); ?>/<?php echo e($data['donor']->pic_path); ?>" alt="User profile picture">
                          <br>
                       <img style="width: 40px; height: 40px;" class="img-responsive img-circle img" src="<?php echo e(url('/')); ?>/<?php echo e($data['donor']->pic_path); ?>" alt="User profile picture">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <ul class="list-inline">
                    <li><a href="#profile.html#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#profile.html#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#profile.html#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">

              <table class="table table-bordered" class="example1">
                <tr><th>SL</th><th>Published</th><th>Message</th><td>Operation</td></tr>
                <tr>
                <th>1</th>
                <th><span class="bg-red" style="color:red"> 10 Feb. 2014 <i class="fa fa-clock-o"></i> 12:05 </span></th>
                <th><a href="#profile.html#">Support Team</a> sent you an email</th><td><a href="#">Unread</a></td>
                </tr>


              </table>
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#profile.html#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        <a href="#profile.html#">Support Team</a> sent you an email
                      </div>
                      <div class="timeline-footer">
                        <a class="  btn-primary btn-xs">Read more</a>
                        <a class="  btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#profile.html#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#profile.html#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="  btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#profile.html#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="./AdminLTE 2 _ User Profile_files/150x100" alt="..." class="margin">
                        <img src="./AdminLTE 2 _ User Profile_files/150x100" alt="..." class="margin">
                        <img src="./AdminLTE 2 _ User Profile_files/150x100" alt="..." class="margin">
                        <img src="./AdminLTE 2 _ User Profile_files/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#profile.html#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->


              <div class="tab-pane" id="blood_request">
                <h3 class="life_title">Blood Request</h3>
                    <table class="table table-bordered">
                      <tr><td>SL</td><td>Donate Date</td><td>Blood Group</td><td>Place</td><td>Status</td></tr>
                      <tr><td>1</td><td>1st Jan 2016</td><td>A+</td><td><i class="fa fa-map-marker margin-r-5"></i> Malibag, Dhaka</td><td>Approved</td></tr>
                      <tr><td>2</td><td>23 April 2017</td><td>AB+</td><td><i class="fa fa-map-marker margin-r-5"></i> DMC, Dhaka-1212</td><td>Approved</td></tr>
                      <tr><td>3</td><td>1 June 2017</td><td>AB-</td><td><i class="fa fa-map-marker margin-r-5"></i> Ramna, Dhaka, Bangladesh</td><td style="color: orange">Pending</td></tr>
                  </table>
              </div>


              <div class="tab-pane" id="activities">
                <h3 class="life_title">Personal Activities</h3>
                    <table class="table table-bordered">
                      <tr><td>SL</td><td>Purpose</td><td>Blood Group</td><td>Place</td><td>Status</td></tr>
                      <tr><td>1</td><td>Donate Blood A+ in the Mirpur Hospital</td><td>A+</td><td><i class="fa fa-map-marker margin-r-5"></i> Malibag, Dhaka</td><td style="color:green">Done !</td></tr>
                      <tr><td>2</td><td>23 April 2017</td><td>AB+</td><td><i class="fa fa-map-marker margin-r-5"></i> DMC, Dhaka-1212</td><td>Approved</td></tr>
                      <tr><td>3</td><td>1 June 2017</td><td>AB-</td><td><i class="fa fa-map-marker margin-r-5"></i> Ramna, Dhaka, Bangladesh</td><td style="color: orange">Pending</td></tr>
                  </table>
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

    <div>
 

</section>
    <!-- /.content -->
  </div>
 
</div>


    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>