@extends('layouts/front')

@section('title', 'Search Hospitals')
@section('pageTitle', 'Search Hospitals')
@section('parentName', 'Health')
@section('content')
<div class="all_hospitals">
    <div class="container">   

        <form class="form-horizontal" method="post" action="{{url('/search-hospital')}}">
            {!! csrf_field() !!}
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="division" class="form-control find_search_button divisions">
                        @foreach($data['division'] as $row)
                            <option value="{{$row->id}}">{{$row->division_name}}</option>
                        @endforeach
                    </select>
                </span>
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="district" id="districts" class="form-control find_search_button districts">
                        
                    </select>
                </span>
                <span class="input-group-addon" id="basic-addon1" style="width: 25%;"> 
                    <select name="upazila" id="upazillas" class="form-control find_search_button">
                        
                    </select>
                </span>
                
                <span class="input-group-addon" id="basic-addon1"> 
                    <button class="col-xs-12 btn btn-xs btn-search find_search_button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <hr>
        <div class="row" style="min-height: 500px;">
            <div class="col-md-3 col-xs-12">
                <h2>Summary</h2>
                <ul class="list-group">
                    <li class="list-group-item">Total Hospital <span class="badge">12</span></li>
                    <li class="list-group-item">Total Doctor <span class="badge">5</span></li>
                    <li class="list-group-item">Area <span class="badge">Dhaka</span> <span class="badge">Khulna</span> </li>
                </ul>
            </div>
            <div class="col-md-9 col-xs-12">
                <h2>Hospital List</h2>
                <table class="table table-striped table-bordered example1" id="example1">
                    <thead>
                        <tr style="text-align: center">
                            <th>SL</th><th>Hospital Name</th><th>Chamber</th><th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['hospital_list'] as $row)
                        <tr>
                            <td>{{$row->id}}</td>  
                            <td>
                                <span style="float: left; margin-right: 10px;">

                                    <i class="fa fa-home" style="font-size: 20px;"></i>
                                </span>
                                <span style="font-weight: bold; float:left">
                                    <a href="#"> {{$row->hospital_name}}</a>
                                </span></td>
                                
                                <td>
                                <i class="fa fa-map-marker"></i>
                                {{$row->location}}
                            </td>
                            <td>{{$row->phone}}</td>
                        </tr>  
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>  

 
<!-- DataTables -->
<script src="{{ asset('public/AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{ asset('public/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
 
<script type="text/javascript">
   $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection

