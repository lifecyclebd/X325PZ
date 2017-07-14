@extends('layouts/front')

@section('title', 'Blood Request')
@section('pageTitle', 'Blood Request')
@section('parentName', 'Home')
@section('content')

<div class="container"> 
    <div class="col-md-offset-2 col-md-8">
        <p class="text-center" style="font-size: 25px;">Send a blood request</p>
        <form class="form-horizontal" method="post" action="{{url('/blood-request-store')}}">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="request_blood_group" placeholder="Blood Group">
                    
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="patient_name" placeholder="Patient Name">
                </div> 
                <div class="col-md-6">
                    <input type="text" class="form-control write_to_doctor" name="patient_phone" placeholder="Patient Phone">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="patient_place" placeholder="Patient Location">
                </div>
                <div class="col-md-6 ">
                    <input type="number" class="form-control write_to_doctor" name="number_blood_bag" placeholder="Blood Bag">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="disease" placeholder="Disease">
                </div>
                <div class="col-md-6 ">
                    <input type="text" class="form-control write_to_doctor" name="relation" placeholder="Relation">
                </div>
                <div class="col-md-6 ">
                    <input type="date" class="form-control write_to_doctor" name="opration_time" placeholder="Operation Time">
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <input type="submit" name="submit" value="Send Request" class="submit-btn form-control">
                </div>
            </div>
        </form>
    </div>
</div> 

@endsection