@extends('layouts/front')


@section('title', 'Find Hospitals')
@section('pageTitle', 'Find Hospitals')
@section('parentName', 'Health')
@section('content')
<div class="find_hospital">
    <div class="container">  
        <h2 class="find_hospital_title">Find Doctor</h2>
        <p style="margin-top: 120px"></p>
        <form class="form-horizontal" method="post" action="{{url('/view-doctor')}}">
            {!! csrf_field() !!} 
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="divisions" class="form-control find_search_button">
                        <option value="Dhaka">Select Specialities</option>
                        @foreach($data['doctor_specialities'] as $row)                        
                        <option value="{{$row->name}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                </span>
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="divisions" class="form-control find_search_button">
                        <option value="Dhaka">Select Upazila</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Khulna">Dhaka</option>
                    </select>
                </span>
                <input type="text" class="col-xs-12 form-control find_search" placeholder="Hospital name" aria-describedby="basic-addon1">
                <span class="input-group-addon" id="basic-addon1">
                        <button class="col-xs-12 btn btn-xs btn-search find_search_button">
                            <i class="fa fa-search"></i>
                        </button>
                </span>
            </div>
        </form>
    </div>
</div> 

@endsection

