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
        background: green;
    color: white;
    font-size: 22px;
    border-bottom: 10px solid green;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    margin-bottom: 10px;}
</style>
<div id="donor-register" style="height: auto">


    <div class="container" style="background:rgba(249, 249, 249, 0.8); ">

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
            <div style="background: rgba(255, 0, 0, 0.25); min-height: 440px; color: white; border-top:10px solid green; padding: 20px; border-top-right-radius: 10px;border-top-left-radius: 10px;">
                <img style="width:150px; height: 150px; margin: 0 auto" class="img-circle img-responsive img-center" src="{{$row->pic_path}}" alt="pic">
                <h3>{{$row->name}}
                    <small>{{$row->designation}}</small>
                </h3>
                <h4>Hospital Name: {{$row->hospital}}</h4>
                <h4>Phone No: {{$row->phone}}</h4>
            </div>
            <div id="footer_id">
            <i class="fa fa-envelope"> </i> Send Message</div>
           
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection

