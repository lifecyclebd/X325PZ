@extends('layouts.myapp')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"> </h3>

                <div class="box-tools pull-right">
                    <a href="{{url('/admin/testimonial')}}" class="">      
                        <i class="fa fa-undo" aria-hidden="true"></i> back
                    </a>

                </div>
            </div>
            <div class="box-body"> 
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Testimonial</h3>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form class="form-horizontal" action="{{url('/admin/testimonial/store')}}" method="post" enctype='multipart/form-data'  >
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Designation</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="designation"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Institution</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="institution"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="title"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Web Url</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="web_url"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">FB Url</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="fb_url"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Linked In Url</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="linkdin_url"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Rank</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="rank"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Photo</label>
                            <div class="col-md-6">
                                <input id="email" type="file" class="form-control" name="photo"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Message</label>
                            <div class="col-md-6">
                                <textarea  type="text" class="form-control" name="message"  required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                        </form>
                        <!-- form close -->
                    </div> 
                </div>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
@endsection 