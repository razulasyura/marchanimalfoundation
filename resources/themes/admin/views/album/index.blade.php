@extends('layouts.master')
@section('css')
<!-- DataTables -->

<link rel="stylesheet" href="{{ Theme::asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              {{-- <h3 class="box-title">{{ $pageTitle }}</h3> --}}
              <a class="btn btn-primary" href="{{action($create)}}" onclick="return confirm('Are you sure you create new data ?');">Create New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php ($no=1) 
                @foreach($data as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->description }}</td>
                    <td>
                    <a class="btn btn-primary" href="{{action($edit,$row->id)}}" onclick="return confirm('Are you sure you want to edit this data ?');">Edit</a>
                    <form action="{{action($destroy, $row->id)}}" method="POST">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to edit this data ?');">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </tfoot>
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
@stop
@section('js')
<!-- DataTables -->


<script src="{{ Theme::asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ Theme::asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#dataTable').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    })
  })
</script>
@stop