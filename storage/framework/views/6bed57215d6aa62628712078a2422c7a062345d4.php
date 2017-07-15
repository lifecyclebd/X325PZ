<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('public/AdminLTE/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Egr. Rasheduzzaman</p>
                <a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        
           
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li> 
            <li class="active"><a href="<?php echo e(url('/admin/home')); ?>"><i class="fa fa-home"></i> <span>Home</span></a></li> 
            <li class="treeview">
                <a href="<?php echo e(url('/admin/view')); ?>">
                    <i class="fa fa-user"></i>
                    <span>Admin</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-rss" aria-hidden="true"></i>
                    <span>Blood Donor</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">

                    <li><a href="<?php echo e(url('/donor')); ?>"><i class="fa fa-circle-o"></i> Donor</a></li>
                    <li><a href="<?php echo e(url('/search')); ?>"><i class="fa fa-circle-o"></i> Search</a></li>
                    <li><a href="<?php echo e(url('/bloodrequest')); ?>"><i class="fa fa-circle-o"></i> Blood Request</a></li>
                    <li><a href="<?php echo e(url('/activity-list')); ?>"><i class="fa fa-circle-o"></i> Activity List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?php echo e(url('/admin/addGallery')); ?>"><i class="fa fa-circle-o"></i> Add New Gallery</a></li>
                    <li><a href="<?php echo e(url('/admin/viewGallery')); ?>"><i class="fa fa-circle-o"></i> Gallery List</a></li>
                    <li><a href="<?php echo e(url('/admin/addPhoto')); ?>"><i class="fa fa-circle-o"></i> Add Photo</a></li>
                    <li><a href="<?php echo e(url('/admin/viewPhoto')); ?>"><i class="fa fa-circle-o"></i> View Photo</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-rss" aria-hidden="true"></i>
                    <span>Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="<?php echo e(url('/blog/category')); ?>"><i class="fa fa-circle-o"></i> Category</a></li>
                    <li><a href="<?php echo e(url('/blog/content')); ?>"><i class="fa fa-circle-o"></i> Content</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Health</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;"> 
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-rss" aria-hidden="true"></i>
                            <span>Manage Doctor</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li><a href="<?php echo e(url('/')); ?>/admin/doctor/view"><i class="fa fa-circle-o"></i> Doctors</a></li>
                            <li><a href="<?php echo e(url('/admin/doctor/search_view')); ?>"><i class="fa fa-circle-o"></i> Search Doctors</a></li>
                            <li><a href="<?php echo e(url('admin/doctor/problem-view')); ?>"><i class="fa fa-circle-o"></i> Patient Problems</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo e(url('/admin/hospital/view_hospital')); ?>">
                            <i class="fa fa-users"></i>
                            <span>Manage Hospital</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo e(url('/admin/designation/view_designation')); ?>">
                            <i class="fa fa-users"></i>
                            <span>Manage Designation</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo e(url('/admin/degree/view_degree')); ?>">
                            <i class="fa fa-users"></i>
                            <span>Manage Degrees</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="<?php echo e(url('/admin/testimonial')); ?>">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Testimonials</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu"> 
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu"> 
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li> 
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <small class="label pull-left bg-yellow">12</small>
              <small class="label pull-left bg-green">16</small>
              <small class="label pull-left bg-red">5</small>
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="active">
                        <a href="<?php echo e(url('admin/mailbox/inbox')); ?>">Inbox
                            <span class="pull-right-container">
                                <span class="label label-primary pull-right">13</span>
                            </span>
                        </a>
                    </li>
                    <li><a href="<?php echo e(url('admin/mailbox/compose')); ?>">Compose
                    </a></li>
                    <li><a href="<?php echo e(url('admin/mailbox/read')); ?>">Read
                            <span class="pull-right-container">
                                <span class="label label-info pull-right">3</span>
                            </span>
                    </a></li>
                    <li><a href="<?php echo e(url('admin/mailbox/sent')); ?>">Sent
                            <span class="pull-right-container">
                                <span class="label label-success pull-right">1</span>
                            </span>
                    </a></li>
                </ul>
            </li>

 

            <li class="treeview">
                <a href="<?php echo e(url('/content')); ?>">
                    <i class="fa fa-tasks"></i>
                    <span>Content</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo e(url('/sms')); ?>">
                    <i class="fa fa-envelope"></i>
                    <span>SMS</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>