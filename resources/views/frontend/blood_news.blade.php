@extends('layouts/front')

@section('title', 'Blood News')
@section('pageTitle', 'Blood News')
@section('parentName', 'Home')
@section('content')
<!--about-->
<div id="blood_news">
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-md-6 thumbnail">
                    <img src="{{url('/')}}/public/frontend/images/donor_register.jpg" class="img img-responsive" style="width:100%">
                </div>
                <div class="col-md-6">
                    <div class="about-heading">
                        <h3 class="text-left">Blood</h3> 
                        <p class="text-justify">
                            Blood consists of a liquid called plasma, red blood cells, white blood cells and platelets. Red bloods cells deliver oxygen from your lungs to your tissues and organs, white blood cells fight infection as part of your body's defense system, and platelets help blood clot when you experience a cut or wound. Blood is a constantly circulating fluid providing the body with nutrition, oxygen, and waste removal. Your blood group depends on which antigens occur on the surface of your red blood cells.
                        </p>
                    </div>
                </div>
            </div>
        </div>   	
    </div>
</div>
<div class="related_links">
    <div class="container">
        <div class="row">
            <h3 class="related_links_title">Related News</h3>
        </div>
        <div class="row">
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="#">
                       Blood from young animals can revitalise old ones
                    </a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/child-birth.jpg" class="img"> </span>
                </div>
                <div class="news_text col-md-6">
                    Blood consists of a liquid called plasma, red blood cells, white blood cells and platelets. 
                </div>
            </div>
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="#">Blood from young animals can revitalise old ones</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/london_gari_hamla.jpg" class="img img-thumbnail"> </span>
                </div>
                <div class="news_text col-md-6">
                   Blood consists of a liquid called plasma, red blood cells, white blood cells and platelets. 
                </div>
            </div> 
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="#">
                        Blood from young animals can revitalise old ones</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/child-birth.jpg" class="img img-thumbnail"> </span>
                </div>
                <div class="news_text col-md-6">
                    Blood consists of a liquid called plasma, red blood cells, white blood cells and platelets. 
                 </div>
            </div>
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="#">
                        Blood from young animals can revitalise old ones</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/london_gari_hamla.jpg" class="img img-thumbnail"> </span>
                </div>
                <div class="news_text col-md-6">
                    Blood consists of a liquid called plasma, red blood cells, white blood cells and platelets. 
                </div>
            </div> 


        </div>
    </div>
</div>

</div>
@endsection