@extends('layouts/front')

@section('content')
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            @foreach($data['blood_news'] as $row)
            <h1 class="page-header">
                {{$row->title}}
            </h1>

            <p><span class="glyphicon glyphicon-time"></span>{{$row->created_at}}</p>
            <hr>
            <img style="width: 100%; height: 340px;" class="img-responsive img" src="{{$row->pic_path}}" alt="">
            <hr>
            <p align="justify">{!!$row->description!!}</p>
            <a class="btn btn-primary" href="#">বিস্তারিত  <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

            @endforeach
            
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">← পুরাতন </a>
                </li>
                <li class="next">
                    <a href="#">নতুন  →</a>
                </li>
            </ul>
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>আপনার ব্লগ খুজুন </h4>
                <div class="input-group">
                    <input type="text" class="form-control" style="    height: 40px;">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4> সাম্প্রতিক পোস্ট </h4>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-unstyled">
                            @foreach($data['blood_news'] as $row)
                            <li>
                                <a href="#">{{$row->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <hr>
 

</div>


@endsection

