@extends('layouts/front')

@section('content')
<div class="container-fluid"> 
    <div class="col-md-8">
        
        <span class="more_news_title">{{$data['news_detail']->title}}</span>
        <hr  class="more_news">
        <div class="row border-bottom"> 
            <img src="{{url('/')}}/public/images/content/news/{{$data['news_detail']->pic_path}}" class="img img-rounded img-thumbnail" style="width: 100%; height: 430px;">
            <p class="text-justify" style="padding: 10px">
                {!!$data['news_detail']->description!!}
            </p>
        </div>
        
        <br>
    </div>
    <div class="col-md-4">
        <span class="more_news_title">More News</span>
        <hr  class="more_news">
        @foreach($data['news'] as $row)
        <div class="col-md-12 border-bottom">
            <div class="more_news_left col-md-6">
                <img style="width: 100%;height: 100px" src="{{url('/')}}/public/images/content/news/{{$row->pic_path}}" class="img-thumbnail">
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

