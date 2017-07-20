@extends('layouts/front')

@section('content')
<div class="container-fluid"> 
    <div class="col-md-9">

        <span class="more_news_title">রোজায় স্বাস্থ্য</span>
        <hr  class="more_news">
        <div class="row border-bottom">
            <div class="col-md-6">
                <img src="{{url('/')}}/public/images/Blood_Donor_24.jpg" class="img img-rounded" style="width: 100%; height: auto">
            </div>
            <div class="col-md-6">
                <p class="text-justify">
                    Blood Donor 24 is a team of emergency response donors who pledge to respond and give blood within 24 hours, when we need it most.

If you can give blood at our centres in Aberdeen, Dundee, Edinburgh, Glasgow or Inverness, you are uniquely placed to help if we're faced with an urgent demand for your blood group.

Demand for blood is unpredictable, and lower levels of a particular blood group can occur for many reasons. This could be as the result of a major incident, or simply because of low attendances over a holiday period. Should the need for a specific blood group arise, eligible Blood Donor 24 members will receive a telephone call asking them to donate within 24 hours.

If you would like to join Blood Donor 24, ask about it the next time you're giving blood. We'll sign you up and put you on standby for emergency alert should there be a sudden need for your blood group.
                </p>
                <button class="pull-right btn-default" style="background: none;">More Details</button>
            </div>
            <br>
        </div>
        <div class="row">
            @foreach($data['recent_news'] as $row)
            <div class="col-md-6 col-md-offset-1 news"> 
                <span class="related_links_news_title"><a class="" href="#">{{$row->title}}</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/images/content/news/{{$row->content_photo}}" class="img"> </span>
                </div>
                <div class="news_text col-md-6">
                    {{$row->description}}
                </div>
                <a href="{{url('/news-detail')}}/{{$row->id}}"><button class="pull-right btn-default" style="background: none;">More Details</button></a>
            </div>
            @endforeach
        </div>


    </div>
    <div class="col-md-3">
        <span class="more_news_title">More News</span>
        <hr  class="more_news">
        @foreach($data['news'] as $row)
        <div class="col-md-12 border-bottom">
            <div class="more_news_left">
                <img src="{{url('/')}}/public/images/content/news/{{$row->content_photo}}" class="img-thumbnail">
            </div>
            <div class="more_news_right ">
                <h4>{{$row->title}}</h4>
                {{$row->created_at}}
            </div>
            <br>
        </div>
        @endforeach
    </div>
</div> 


@endsection

