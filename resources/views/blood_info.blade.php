@extends('layouts/front')

@section('content')
<!--about-->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-md-6 thumbnail">
                    <img src="{{url('/')}}/public/frontend/images/inner-header-bg.jpg" class="img img-responsive" style="width:100%">
                </div>
                <div class="col-md-6">
                    <div class="about-heading">
                        <h3 class="text-left">জেনে রাখা উচিত</h3> 
                        <p class="text-justify">

                            রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু দুঃখের ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে। বর্তমানে বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ মারা যাচ্ছে রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল প্রান্তের পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়। একজন মুমূর্ষু রোগীকে তার প্রিয়জনের মাঝে সুস্থভাবে ফিরিয়ে আনা থেকে আনন্দের আর কিছু হতে পারে না। জরুরি রক্তের প্রয়োজনে মুমূর্ষু রোগীদের পাশে থাকুন। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং।
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
                <span class="related_links_news_title"><a class="" href="#">আকাশে জন্ম নিল শিশু, আজীবন বিনামূল্যে আকাশ ভ্রমণ</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/child-birth.jpg" class="img"> </span>
                </div>
                <div class="news_text col-md-6">
                    বিমানটি তখন ৩৫ হাজার ফুট উঁচুতে, হঠাৎ করেই গর্ভবতী এক নারীর ব্যথা শুরু হলো। নির্ধারিত সময়ের আগেই প্রসব বেদনা শুরু হলো ওই নারীর।
                </div>
            </div>
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="#">লন্ডনে ফের পথচারীদের উপর গাড়ি হামলা</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/london_gari_hamla.jpg" class="img img-thumbnail"> </span>
                </div>
                <div class="news_text col-md-6">
                    লন্ডনে এবার একটি মসজিদের কাছে পথচারীদের ওপর গাড়ি চাপা দেয়ার ঘটনা ঘটেছে।
                </div>
            </div> 
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="#">আকাশে জন্ম নিল শিশু, আজীবন বিনামূল্যে আকাশ ভ্রমণ</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/child-birth.jpg" class="img img-thumbnail"> </span>
                </div>
                <div class="news_text col-md-6">
                    বিমানটি তখন ৩৫ হাজার ফুট উঁচুতে, হঠাৎ করেই গর্ভবতী এক নারীর ব্যথা শুরু হলো। নির্ধারিত সময়ের আগেই প্রসব বেদনা শুরু হলো ওই নারীর।
                </div>
            </div>
            <div class="col-md-6 news"> 
                <span class="related_links_news_title"><a class="" href="#">লন্ডনে ফের পথচারীদের উপর গাড়ি হামলা</a></span>
                <div class="news_img col-md-6">
                    <span><img src="{{url('/')}}/public/frontend/images/news/london_gari_hamla.jpg" class="img img-thumbnail"> </span>
                </div>
                <div class="news_text col-md-6">
                    লন্ডনে এবার একটি মসজিদের কাছে পথচারীদের ওপর গাড়ি চাপা দেয়ার ঘটনা ঘটেছে।
                </div>
            </div> 


        </div>
    </div>
</div>


@endsection