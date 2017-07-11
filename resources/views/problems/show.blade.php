@extends('layouts.myapp')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            User Profile
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom"style="padding: 50px;">
                    <!-- Post -->
                    <div class="post">

                        <div class="user-block">
                            <img src="{{asset('public/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle img-bordered-sm user-image" alt="User Image">

                            <span class="username">
                                <a href="#">{{$data->name}}</a> 
                            </span>
                            <span class="description">Shared publicly - 7:30 PM today</span>
                            <div class="box-tools pull-right">
                                <a href="{{url('admin/doctor/problem-view')}}" class="">      
                                    <i class="fa fa-undo" aria-hidden="true"></i> back
                                </a>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3"><strong>Name:</strong> {{$data->name}}</div>
                            <div class=" col-md-3"><strong>Age:</strong> {{$data->age}}</div>
                            <div class=" col-md-3"><strong>LAst Checked Blood Pressure:</strong> {{$data->last_blood_pressure}}</div>
                            <div class=" col-md-3"><strong>Any Disease:</strong> {{$data->any_disease}}</div>
                        </div>
                        <!-- /.user-block -->
                        <div class="well" style="margin-top: 50px">
                            {{$data->problems}}
                        </div>

                        <form>
                            <textarea class="form-control ckeditor" id="ckeditor" name="doctor_suggestions"></textarea>
                            
                            <input style="margin-top: 10px" class="pull-right btn btn-primary" type="submit" value="Feedback">
                        </form>
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
</div>
<!-- /.content-wrapper -->
@endsection 