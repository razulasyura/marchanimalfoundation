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
                  <h3 class="box-title"><a class="btn btn-primary" href="{{action($create)}}" onclick="return confirm('Are you sure you create new data ?');">Create New</a></h3>

                  <div class="box-tools pull-right">
                    {{-- <span class="label label-danger">8 New Members</span> --}}
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
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