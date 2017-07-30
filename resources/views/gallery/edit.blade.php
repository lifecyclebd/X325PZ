@extends('layouts.myapp')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Update Photo into Gallery </h3>

                <div class="box-tools pull-right">
                    <a href="{{url('/admin/viewGallery')}}" class="">      
                        <i class="fa fa-undo" aria-hidden="true"></i> back
                    </a>

                </div>
            </div>

            <div class="box-body">
                <!-- form start -->
                <form class="form-horizontal" action="{{url('/admin/updatePhoto')}}" method="post" enctype="multipart/form-data"> 
                    {!! csrf_field() !!}
                    @foreach($data['photo'] as $value)
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Select Gallery</label>
                        <div class="col-md-6">
                            <select class="form-control" name="gallery_id">
                                <option value="">-- Select Gallery --</option>
                                @foreach($data['gallery'] as $row)
                                
                                <option value="{{$row->id}}"> {{$row->gallery_name}}  </option>
                                @endforeach
                            </select>                        
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Upload Photo</label>
                        <div class="col-md-6">
                            <input id="name" type="file" class="form-control" name="photo_name" multiple="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Photo Caption</label>
                        <div class="col-md-6">
                            <input id="name" type="Text" class="form-control" value="{{$value->caption}}" name="caption" multiple="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Short Text</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" value="{{$value->sub_caption}} name="sub_caption" multiple="true">
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Add Photo
                            </button>
                        </div>
                    </div>
                </form>
                <!-- form close -->
            </div> 
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->

</div>


@endsection 