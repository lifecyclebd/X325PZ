@extends('layouts/front')


@section('title', 'Find Hospitals')
@section('pageTitle', 'Find Hospitals')
@section('parentName', 'Health')
@section('content')
<style type="text/css">

</style>
<div class="find_hospital"  style="height: 540px;">
    <div class="container">  
        <p style="margin-top:200px"></p>
        <header>
            <h4 class="find_hospital_title" >বিশেষজ্ঞ ডাক্তারের পরামর্শ পেতে আপনার নিকটবর্তী ডাক্তার খুজুন
            </h4> 
                <p></p> 
                <form class="form-horizontal" method="post" action="{{url('/view-doctor')}}">
                    {!! csrf_field() !!} 
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                            <select name="speacilist" class="form-control find_search_button divisions" >
                                <option value="">Select Specialist</option>
                                @foreach($data['doctor_specialities'] as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </span>
                        <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                            <select name="division" class="form-control find_search_button divisions" >
                                <option value="">Select Division</option>
                                @foreach($data['division'] as $row)
                                <option value="{{$row->id}}">{{$row->division_name}}</option>
                                @endforeach
                            </select>
                        </span>
                        <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                            <select name="district" id="districts" class="form-control find_search_button districts">
                                <option value="">Select District</option>
                            </select>
                        </span>
                        <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                            <select name="upazila" id="upazillas" class="form-control find_search_button">
                                <option value="">Select Upazila</option>
                            </select>
                        </span>

                        <span class="input-group-addon" id="basic-addon1"> 
                            <input type="submit"  class="col-xs-12 btn btn-lg" style="background-color: red; color: white">

                        </span>
                    </div>
                </form>
        </header>

    </div>
</div> 

@endsection

