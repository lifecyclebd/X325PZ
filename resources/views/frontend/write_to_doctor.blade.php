@extends('layouts/front')
@section('title', 'Find Splutions')
@section('pageTitle', 'Find Splutions')
@section('parentName', 'Home')
@section('content')
<div class="container" style="margin-bottom: 50px">
<div class="col-md-6" style="margin-top: 65px;size: 50;">
        <div>
            <img src="public/images/pres1.jpg" class="img img-responsive img-rounded">
            <h3>To find our speacilized doctor in your area please <a href="{{url('/search-doctor')}}">Click</a> here</h3>
            <h2>Any Query : 01738719951</h2>
        </div>
    </div> 
    <div class="col-md-6">
        <p class="text-center" style="font-size: 25px;">Please fill up the form</p>
        <form class="form-horizontal" method="post" action="{{url('admin/doctor/write')}}">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="name" placeholder="Name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="age" placeholder="Age">
                </div> 
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="last_blood_pressure" placeholder="Last checked blood presure">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="any_disease" placeholder="Any previous diseases">
                </div>
                <div class="col-md-6 ">
                    <input type="email" class="form-control write_to_doctor" name="email" placeholder="Email">
                </div>
                <div class="col-md-6 ">
                    <input type="number" class="form-control write_to_doctor" name="phone" placeholder="Phone">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"  style="  margin-top: 50px;">
                    <textarea class="form-control" style="border: 5px solid #c9302c;" name="problems" rows="10" placeholder="Write your problem"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <input type="submit" name="submit" value="Send" class="submit-btn btn btn-default form-control">
                </div>
            </div>
        </form>
    </div>
    
</div> 
@endsection

