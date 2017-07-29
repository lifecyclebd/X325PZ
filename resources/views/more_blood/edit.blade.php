@extends('layouts.myapp')


@section('content')
<style type="text/css">

    #map {
        height: 100%;
    } 

    #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
    }

    #infowindow-content .title {
        font-weight: bold;
    }

    #infowindow-content {
        display: none;
    }

    #map #infowindow-content {
        display: inline;
    }



    #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
    }

    .pac-controls {
        display: inline-block;
        padding: 5px 11px;
    }

    .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }




    #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
    }
    #target {
        width: 345px;
    }
</style>


<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit More about blood</h3>

                <div class="box-tools pull-right">
                    <a href="{{url('/admin/more-blood/view')}}" class="">      
                        <i class="fa fa-undo" aria-hidden="true"></i> back
                    </a>

                </div>
            </div>

            <div class="box-body">
                <!-- form start -->
                <form class="form-horizontal" action="{{url('/admin/more-blood/update')}}" method="post" enctype= "multipart/form-data"> 
                    {!! csrf_field() !!}
                  
                    
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Title</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" value="{{$data['edit_more_blood']->title}}" name="title">
                            <input type="hidden"value="{{$data['edit_more_blood']->id}}" name="id">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Short Description</label>
                        <div class="col-md-6">
                            <textarea name="short_description" class="form-control">{{$data['edit_more_blood']->short_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Long Description</label>
                        <div class="col-md-6">
                            <textarea name="long_description" class="form-control">{{$data['edit_more_blood']->long_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Picture</label>
                        <div class="col-md-3">
                            <input id="name" type="file" class="form-control" name="photo"  autofocus>
                        </div> 
                        <div class="col-md-5">
                            <img style="width:60%; height: auto" src="{{asset('/')}}public/images/{{$data['edit_more_blood']->photo}}" class="img img-resposive">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>

                </form>
                <!-- form close -->
            </div> 
        </div>
    </section>
    <!-- /.content -->

</div>
@endsection 