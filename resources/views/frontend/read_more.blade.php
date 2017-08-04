@extends('layouts/front')

@section('content')
<style type="text/css">
    li {list-style-type: circle;
        margin-right: 15px !important;
    }
</style>
<div class="container-fluid" style="margin-top: 30px;"> 
    <div class="col-md-9">
        <span class="more_news_title" style="color: black"><strong>{{$data['read_more_detail']->title}}</strong></span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <p style="float: left; padding-right: 15px;">
                <img src="{{$data['read_more_detail']->pic_path}}" class="img img-rounded img-thumbnail" style="width: 500px;height: 350px;padding: 5px;margin-right: 20px;">
            </p> 
                <p class="text-justify" style="padding-right: 20px !important; margin: 5px; float: right;   text-align: justify;
    text-justify: inter-word;">
                    {!!$data['read_more_detail']->description!!}  
                </p> 
        </div>
        <br>
    </div>
    <div class="col-md-3">
    <span class="more_news_title" style="color: black"><strong>এ সম্পর্কিত আরও তথ্য</strong></span>
    <hr  class="more_news">
    @foreach($data['all_news'] as $row)
    <a href="{{url('/read-more')}}/detail/{{$row->id}}"><span class="more_news_title">{{$row->title}}</span></a>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="{{$row->pic_path}}" class="img img-rounded img-thumbnail" style="width: 150px; height: 100px;">
            
            
        </div>
        <br>
        @endforeach
    </div>
</div> 


@endsection

