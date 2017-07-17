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
            <img class="img-responsive" src="{{url('/')}}/public/frontend/images/news/{{$row->photo}}" alt="">
            <hr>
            <p>{{$row->description}}</p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

            @endforeach
            
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">← Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer →</a>
                </li>
            </ul>
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
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
                <h4>Blog Categories</h4>
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
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright © Your Website 2014</p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </footer>

</div>


@endsection

