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
            <div class="box-header with-border">
              <h3 class="box-title">Form {{Request::segment(2)}}</h3>
            </div>
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
            <input type="text" name="name" value="{{ $data->name or "title here" }}" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Description</label>
            <textarea rows="2" name="description" class="form-control" required>{{ $data->description or "description here"}}</textarea>
          </div>

          <div class="form-group">
            <label>Image @if(isset($data))<a href="{{ url($image.$data->file)}}" target="_blank"><small>{{ $data->file}}</small></a>@endif</label>
            <input type="file" name="file" class="form-control">
          </div>
          
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
              <a href="{{ URL::previous() }}" class="btn btn-success"><i class="fa fa-arrow-circle-left "></i> Back</a>
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete"><i class="fa fa-trash"></i> Delete</button>
          </div>
            </form>
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