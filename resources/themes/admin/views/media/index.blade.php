@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.1/jquery.fancybox.min.css" />
<link rel="stylesheet" href="{{ Theme::asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ $pageTitle }}</h3>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{action($create)}}">Create New</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">                      
                    @foreach($data as $row)
                    <li>
                      <a data-fancybox="gallery" href="{{ url($image.'original/'.$row->file)}}"><img src="{{ url($image.$row->file)}}"></a>
                    </li>
                  @endforeach
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    {{ $data->render() }}
                  </ul>
                  {{-- <a href="javascript:void(0)" class="uppercase">View All Users</a> --}}
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->

@stop
@section('js')
{{-- fancybox --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.1/jquery.fancybox.min.js"></script>
<!-- DataTables -->
<script src="{{ Theme::asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ Theme::asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#dataTable').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
@stop