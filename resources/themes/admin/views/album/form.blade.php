@extends('layouts.master')
@section('content')
    {{-- error notice --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
          @if(isset($data))
            <form role="form" method="POST" action="{{ action($action, $data->id) }}" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
          @else
            <form role="form" method="POST" action="{{ action($action) }}" enctype="multipart/form-data">
          @endif
          {{csrf_field()}}
          @if(isset($data))
          <input name="_method" type="hidden" value="PATCH">
          @endif
          <div class="box-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ $data->name or "" }}" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $data->description or "" }}</textarea>
          </div>
          </div>
          <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
          </div>
            </form>
          <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop
@section('js')
@stop