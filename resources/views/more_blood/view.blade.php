@extends('layouts.myapp')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">More About Blood</h3>
                        
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data['more_blood'] as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->short_description}}</td> 
                                    <td>{{$row->long_description}}</td>
                                    <td>{{$row->photo}}</td>
                                    <td> 
                                        <a href="{{url('/admin/more-blood')}}/edit/{{$row->id}}" class="btn btn-primary btn-xs"><i class="fa fa-fw fa-edit"></i> Edit </a>
                                        
                                    </td>

                                </tr>

                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->  
</div>
<!-- /.content-wrapper -->
@endsection 