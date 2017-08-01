@extends('layouts/front')

@section('content')
<div class="container-fluid" style="margin-top: 30px; height: auto;"> 
    <div class="col-md-9">

        <span class="more_news_title"> {{$data['last_recent_event']->title}}</span>
        <hr  class="more_news">
        <div class="row border-bottom">
            <div class="col-md-6">
                <img src="{{$data['last_recent_event']->pic_path}}" class="img img-rounded" style="width: 100%; height: auto">
            </div>
            <div class="col-md-6">
                <p class="text-justify" style="color: black !important">
                    {!!$data['last_recent_event']->description!!}
                </p>
            </div>
            <br>
        </div>
        
        <div class="row" style="height: auto;">
            <span class="more_news_title">চলতি ঘটনাবলী </span>
            <hr>
            @foreach($data['recent_event'] as $row)
            <div class="col-md-6"> 
                <div style="    margin-bottom: 30px; min-height: 350px; background: rgba(247, 247, 247, 0.87); border: 1px solid #ddd;">
                    <div class="col-md-12">
                        <span class="related_links_news_title text-justify"><a class="" href="{{url('/recent-event')}}/{{$row->id}}">{{$row->title}}</a></span>
                    </div>
                    <div class="col-md-6">
                        <img src="{{$row->pic_path}}" class="img img-thumbnail img-responsive" style="width: 200px; height: 200px">  
                    </div>
                    <div class="col-md-6">
                        <p align="text-justify"> {!! substr($row->description,0,200)!!}</p>
                        <a href="{{url('/recent-event')}}/{{$row->id}}" class="bnt btn-danger pull-right" style="padding: 5px 15px;border-radius: 3px;text-align: center;margin: 0 auto;"> বিস্তারিত 
                     </a>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>


    </div>
    <div class="col-md-3">
        <span class="more_news_title">সাম্প্রতিক ঘটনাবলী </span>
        <hr  class="more_news">
        @foreach($data['upcoming_event'] as $row)
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="{{$row->pic_path}}" class="img-thumbnail">
            </div>
            <div class="more_news_right ">
                <a href="{{url('/upcoming-event')}}/{{$row->id}}" ><h4>{{$row->title}}</h4></a>
                {{$row->created_at}}
            </div>
            <br>
        </div>
        @endforeach
    </div>
</div> 

<div class="clearfix" style="min-height: 30px;"></div>
@endsection

