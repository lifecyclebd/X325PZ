<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('public/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Egr. Rasheduzzaman</p>
                <a href="{{ url('/profile')}}"><i class="fa fa-circle text-success"></i> Online</a>
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
            <li><a href="{{ url('/home')}}"><i class="fa fa-home"></i> <span>Home</span></a></li> 
            <li class="treeview">
                <a href="{{ url('/admin') }}">
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

                    <li><a href="{{ url('/donor') }}"><i class="fa fa-circle-o"></i> Donor</a></li>
                    <li><a href="{{ url('/search') }}"><i class="fa fa-circle-o"></i> Search</a></li>
                    <li><a href="{{ url('/bloodrequest') }}"><i class="fa fa-circle-o"></i> Blood Request</a></li>
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
                    <li><a href="{{url('/admin/addGallery')}}"><i class="fa fa-circle-o"></i> Add New Gallery</a></li>
                    <li><a href="{{url('/admin/viewGallery')}}"><i class="fa fa-circle-o"></i> Gallery List</a></li>
                    <li><a href="{{url('/admin/addPhoto')}}"><i class="fa fa-circle-o"></i> Add Photo</a></li>
                    <li><a href="{{url('/admin/viewPhoto')}}"><i class="fa fa-circle-o"></i> View Photo</a></li>
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
                    <li><a href="{{url('/blog/category')}}"><i class="fa fa-circle-o"></i> Category</a></li>
                    <li><a href="{{url('/blog/content')}}"><i class="fa fa-circle-o"></i> Content</a></li>
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
                            <li><a href="{{url('/')}}/admin/doctor/view"><i class="fa fa-circle-o"></i> Doctors</a></li>
                            <li><a href="{{url('/admin/doctor/search_view')}}"><i class="fa fa-circle-o"></i> Search Doctors</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="{{ url('/admin/hospital/view_hospital') }}">
                            <i class="fa fa-users"></i>
                            <span>Manage Hospital</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ url('/admin/designation/view_designation') }}">
                            <i class="fa fa-users"></i>
                            <span>Manage Designation</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ url('/admin/degree/view_degree') }}">
                            <i class="fa fa-users"></i>
                            <span>Manage Degrees</span>
                        </a>
                    </li>

                </ul>
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
            <li class="treeview active">
                <a href="mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="active">
                        <a href="{{url('admin/mailbox/inbox')}}">Inbox
                            <span class="pull-right-container">
                                <span class="label label-primary pull-right">13</span>
                            </span>
                        </a>
                    </li>
                    <li><a href="{{url('admin/mailbox/compose')}}">Compose</a></li>
                    <li><a href="{{url('admin/mailbox/read')}}">Read</a></li>
                    <li><a href="{{url('admin/mailbox/sent')}}">Sent</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{ url('/content') }}">
                    <i class="fa fa-tasks"></i>
                    <span>Content</span>
                </a>
            </li>
            <li class="treeview">
                <a href="{{ url('/sms') }}">
                    <i class="fa fa-envelope"></i>
                    <span>SMS</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
