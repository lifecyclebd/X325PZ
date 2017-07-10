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
                        <h3 class="box-title">Testimonial List</h3>
                        <div class="box-tools pull-right">
                            <a href="{{url('/admin/testimonial/add')}}" class="">      
                                <i class="fa fa-plus" aria-hidden="true"></i> Add Testimonial
                            </a>

                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Institute</th>
                                    <th>Designation</th>
                                    <th>Title</th>
                                    <th style="width: 30%">Message</th>
                                    <th>Rank</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data['testimonial'] as $row) 
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td><img src="{{asset('/')}}/public/images/testimonial/{{$row->photo}}" class="img img-thumbnail"></td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->institution}}</td>
                                    <td>{{$row->designation}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->message}}</td>
                                    <td>{{$row->rank}}</td>
                                    <td align="center"> 
                                         <a href="{{url('admin/hospital')}}/delete" class="btn  btn-danger btn-xs"><i class="fa fa-fw fa-remove"></i></a>
                                       
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
