@extends('layouts/front')

@section('content')
<style type="text/css">
    li {list-style-type: circle;
        margin-right: 15px !important;
    }
</style>
<div class="container-fluid">
    <div class="col-md-9">
        <span class="more_news_title" style="color: black"><strong>{{$data['news_detail']->title}}</strong></span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <p style="float: left; padding-right: 15px;">
            <img src="{{$data['news_detail']->pic_path}}" class="img img-rounded img-thumbnail" style="width: 100%; height: 350px;">
            </p>
            <p class="text-justify" style="padding-right: 20px !important; margin: 5px; float: right;   text-align: justify;
    text-justify: inter-word;">
                {!!$data['news_detail']->description!!}
            </p>
        </div>
        
        <br>
    </div>
    <div class="col-md-3">
        <span class="more_news_title" style="color: black"><strong>আরও সংবাদ</strong></span>
        <hr  class="more_news">
        @foreach($data['news'] as $row)
        <div class="col-md-12 border-bottom">
            <div class="more_news_left col-md-6">
                <img style="width: 100%;height: 100px" src="{{$row->pic_path}}" class="img-thumbnail">
            </div>
            <div class="more_news_right col-md-6">
                <h4 class=""><a class="" href="{{url('/news-detail')}}/{{$row->id}}">{{$row->title}}</a></h4>

                {{$row->created_at}}
            </div>
            <br>
        </div>
        @endforeach
    </div>
</div> 


@endsection

