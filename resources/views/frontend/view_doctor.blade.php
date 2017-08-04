@extends('layouts/front')

@section('title', 'Doctors')
@section('pageTitle', 'Doctors')
@section('parentName', 'Home')
@section('content')
<style type="text/css">
    .img-center {
        margin: 0 auto;
    }
    body, div{color: black}
    #footer_id{   
        background: #c9302c;
        color: white;
        font-size: 22px;
        border-bottom: 10px solid #c9302c;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
        margin-bottom: 10px;

    }
    #footer_id a{ color: white; padding-right: 10px; }
</style>
<div id="donor-register" style="height: auto">


    <div class="container" style="background:rgba(249, 249, 249, 0.24); ">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">আমাদের বিশেষজ্ঞ ডাক্তারগণ 
                </h1>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row pull-center"> 
            @foreach($data['doctor_list'] as $row)
            <div class="col-lg-4  text-center">
                <div style="    min-height: 350px; color: black; border-top: 10px solid #c9302c; padding: 20px;
                     border-top-right-radius: 10px; border-top-left-radius: 10px; background: white;">
                    <img style="width:150px; height: 150px; margin: 0 auto" 
                         class="img-circle img-responsive img-center" src="{{$row->pic_path}}" alt="pic">
                    <h3>{{$row->name}}
                        <small>{{$row->designation}}</small>
                    </h3>
                    <p>Hospital Name: {{$row->hospital}}</h4>
                    <p>Phone No: {{$row->phone}}</h4>
                </div>
                <div id="footer_id">
                    <a href="#"> <i class="fa fa-envelope"> </i></a>
                    <a href="#"> <i class="fa fa-facebook"> </i></a> 
                    <a href="#"> <i class="fa fa-linkedin"> </i></a> 
                    <a href="#"> <i class="fa fa-youtube"> </i></a> 
                    <a href="#"> <i class="fa fa-google-plus"> </i></a>  
                </div>

            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection

