@extends('layouts.myapp')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <div class="box box-body">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Content Management</h3>
                <div class="box-tools pull-right">
                    <a href="{{url('/admin/content')}}" class="">      
                        <i class="fa fa-undo" aria-hidden="true"></i> back
                    </a>

                </div>
            </div>
            <div class="box-body">
                <!-- form start -->
                <form method="post" action="{{url('admin/content/store')}}" class="form-horizontal" enctype="multipart/form-data"> 
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Content Title</label>
                        <div class="col-md-10">
                            <input id="name" type="text" class="form-control" name="title" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Details </label>
                        <div class="col-md-10">
                            <textarea id="ckeditor" name="description" class="form-control ckeditor"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Featured Image</label>

                        <div class="col-md-10">
                            <input type="file" name="pic_path" > 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Content Category</label>

                        <div class="col-md-10">
                            <select class="form-control" name="content_type"> 
                                <option value="">Select Content Type </option>
                                <option value="news">News </option>
                                <option value="upcoming_events">Upcoming Events</option>
                                <option value="recent_events">Recent Events</option>
                                <option value="more_blood">More About Blood</option>
                                <option value="about_us">About Us</option>
                                <option value="post">Post </option>
                                <option value="blog">Blog </option>
                                <option value="page">Page </option>
                                <option value="what_people_say">What People Say </option>
                            </select>

                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">
                            Create 
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <!-- form close -->
            </div>  
        </div>  
    </div> 

</div>
<!-- /.content-wrapper -->
@endsection 