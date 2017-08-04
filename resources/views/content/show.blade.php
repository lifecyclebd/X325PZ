@extends('layouts.myapp')


@section('content')
<style type="text/css">
    img{
          max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
    }
    img:hover {
  -moz-transform: scale(1.4);
  -webkit-transform: scale(1.1);
  transform: scale(1.4);
  border:2px solid red;
}
h4{
    text-transform: uppercase;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header with-border" style="background: #eee"> 

                        <div class="box-tools pull-right">

                        <a class="btn btn-xs btn-info pull-left" href="{{ url('/admin/content/search-content') }}" style="margin-right: 5px"><i class="fa fa-search"></i> Search Content </a> 

                            <a href="{{url('/admin/content')}}" class="btn btn-danger btn-xs" style="margin-right: 5px">      
                                <i class="fa fa-undo" aria-hidden="true"></i> View All </a> 
                        <a class="btn btn-xs btn-success pull-right" href="{{ url('/admin/content/create') }}" style="margin-right: 5px"><i class="fa fa-plus"></i> Add Content</a>
                            </a>

                        </div>
                        <h3 class="box-title">Content :: Details Page</h3>

                    </div>

                    <!-- /.box-header -->
                    <div class="box-body" style="min-height: 300px">

                        <h3 class="">{{$data['content']->title}}</h3>
                        <hr>
                        <div class="col-md-4">
                            <img src="{{$data['content']->pic_path}}" style="width: 50%; height: auto">
                        </div>
                        <div class="col-md-8">
                            {!! $data['content']->description  !!}
                            <hr>
                            <?php 
                                if(!empty($data['content']->location)) echo '<h4>Location: '. $data['content']->location.'</h4>' ;
                                 

                                if(!empty($data['content']->blood_group)) echo '<h4>blood_group: '. $data['content']->blood_group.'</h4>' ;
                                if(!empty($data['content']->published_date)) echo '<h4>published_date: '. $data['content']->published_date.'</h4>' ;
                                if(!empty($data['content']->access_mode)) echo '<h4>access_mode: '. $data['content']->access_mode.'</h4>' ;
                                if(!empty($data['content']->post_order)) echo '<h4>post_order: '. $data['content']->post_order.'</h4>' ;
                                if(!empty($data['content']->event_start_date)) echo '<h4>event_start_date: '. $data['content']->event_start_date.'</h4>' ;
                                if(!empty($data['content']->event_end_date)) echo '<h4>event_end_date: '. $data['content']->event_end_date.'</h4>' ;
                                if(!empty($data['content']->blog_category)) echo '<h4>blog_category: '. $data['content']->blog_category.'</h4>' ;
                                if(!empty($data['content']->content_type)) echo '<h4>content_type: '. $data['content']->content_type.'</h4>' ;
                                if(!empty($data['content']->phone)) echo '<h4>phone: '. $data['content']->phone.'</h4>' ;
                                if(!empty($data['content']->email)) echo '<h4>email: '. $data['content']->email.'</h4>' ;
                                if(!empty($data['content']->institution)) echo '<h4>institution: '. $data['content']->institution.'</h4>' ;
                                if(!empty($data['content']->designation)) echo '<h4>designation: '. $data['content']->designation.'</h4>' ;
                                if(!empty($data['content']->name)) echo '<h4>name: '. $data['content']->name.'</h4>' ;

 
                            ?>
                        </div>
   
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer pull-right" style="background: #eee">

                        <hr>
                              <a href="{{url('/admin/content')}}/{{$data['content']->id}}/edit" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit content"><i class="fa fa-fw fa-edit"></i>  Edit Content </a>
                                        <a href="" class="btn  btn-danger btn-xs" title="Delete content" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-remove"></i> Delete Content </a>

 

<!-- Modal -->
                                        <div id="myModal" class="modal fade" role="dialog">
                                          <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header" style="background: red; color: white">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Delete Content</h4>
                                              </div>
                                              <div class="modal-body">
                                                <p style="font-size: 20px; color: red">Are you sure, Do you want to delete this content? </p>
                                              </div>
                                              <div class="modal-footer" style="background: #eee">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <a href="{{url('/admin/content')}}/delete/{{$data['content']->id}}"  class="btn btn-success"  >Confirm</a>
                                                
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                    </div>
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

    <?php
    //  }
    //  }
    ?>
</div>
<!-- /.content-wrapper -->
@endsection 