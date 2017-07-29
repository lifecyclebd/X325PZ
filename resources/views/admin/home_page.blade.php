@extends('layouts.myapp')


@section('content')
<link rel="stylesheet" href="{{ asset('public/css/round-about.css') }}"> 

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

<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Donors</span>
              <span class="info-box-number">{{$data['count_donor']}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Doctors</span>
              <span class="info-box-number">{{$data['count_doctor']}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Hopitals</span>
              <span class="info-box-number">{{$data['count_hospital']}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ambulances</span>
              <span class="info-box-number">static</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <hr>



      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-envelope-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Messages</span>
              <span class="info-box-number">{{$data['count_message']}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Blood Requests</span>
              <span class="info-box-number">{{$data['count_bloodrequest']}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Send SMS</span>
              <span class="info-box-number">static</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Donors</span>
              <span class="info-box-number">static</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Donors</h2>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count counter" data-count="55" id="foo">{{$data['a_positive']}}</span>
                            <h3>A Positive   <small>(A+)</small>  </h3>
                        </div>
                        
                    </div> 
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count">{{$data['a_negative']}}</span>
                            <h3>A Negative   <small>(A-)</small>  </h3>
                        </div>
                        
                    </div> 
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count">{{$data['b_positive']}}</span>
                            <h3>B Positive   <small>(B+)</small>  </h3>
                        </div>
                        
                    </div> 
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count">{{$data['b_negative']}}</span>
                            <h3>B Negative   <small>(B-)</small>  </h3>
                        </div>
                        
                    </div> 
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count">{{$data['o_positive']}}</span>
                            <h3>O Positive   <small>(O+)</small>  </h3>
                        </div>
                        
                    </div> 
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="admin_home_sec">
                            <span class="admin_home_count">{{$data['o_negative']}}</span>
                            <h3>O Negative   <small>(O+)</small>  </h3>
                        </div>
                        
                    </div> 
                    <!-- form close -->
                </div>  
 
   

</div>
  

            <!-- /.box -->

    </section>
    <!-- /.content -->

</div>
    
<!-- /.content-wrapper -->
@endsection 

