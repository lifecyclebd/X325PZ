@extends('layouts/front')

@section('content')
<div class="container-fluid"> 
    <div class="col-md-12">
        <span class="more_news_title">{{$data['read_more_detail']->title}}</span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="{{url('/')}}public/images/blood_stock.png" class="img img-rounded img-thumbnail" style="width: 60%; height: 340px;">
            <h4 style="padding: 10px">{{$data['read_more_detail']->short_description}}</h4>
            <p class="text-justify" style="padding: 10px">
                {{$data['read_more_detail']->long_description}}
            </p>
            
        </div>
        <br>
    </div>
</div> 


@endsection

