@extends('layouts.myapp')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"> </h3>

                <div class="box-tools pull-right">
                    <a href="{{url('/blog/content')}}" class="">      
                        <i class="fa fa-undo" aria-hidden="true"></i> back
                    </a>

                </div>
            </div>
            <div class="box-body"> 
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Blog</h3>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form class="form-horizontal" action="{{url('/blog/updateBlog')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!} 
                            
                            <?php $blog_list=$data['blog'];?>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Category</label>
                                <div class="col-md-10">
                                    <select name="blog_category_id" class="form-control">
                                        <option value="">-- Select Category --</option>
                                        @foreach($data['category_list'] as $row)
                                        <option value="{{$row->id}}"
                                                @if($blog_list->blog_category_id == $row->id) selected="selected" @endif)>
                                                {{$row->category_name}}  </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Title</label>

                                <div class="col-md-10">
                                    <input id="name" type="text" class="form-control" value="{{$data['blog']->title}}" name="title" required autofocus>
                                    <input type="hidden"  value="{{$data['blog']->id}}" name="id" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Description</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="description">{{$data['blog']->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Image Upload</label>

                                <div class="col-md-3">
                                    <input id="name" type="file"   name="image" required autofocus>

                                </div>
                                <div class="col-md-5">
                                    <img style="width:60%; height: auto" src="{{$data['blog']->pic_path}}" class="img img-resposive">

                                </div>
                            </div>
                            <div class="form-group pull-right">
                                <div class="col-md-12  t">
                                    <button type="submit" class="btn btn-primary">
                                        Update Blog
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- form close -->
                    </div> 
                </div>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
@endsection 