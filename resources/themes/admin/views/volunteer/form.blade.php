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
            <label>Location</label>
            <input type="text" name="location" value="{{ $data->location or "" }}" class="form-control" required>
          </div>
          </div>
          <div class="box-footer">
              <a href="{{ URL::previous() }}" class="btn btn-success"><i class="fa fa-arrow-circle-left "></i> Back</a>
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete"><i class="fa fa-trash"></i> Delete</button>
          </div>
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
<script src="//cdn.ckeditor.com/4.9.1/basic/ckeditor.js"></script>
<script>CKEDITOR.replace('editor');CKEDITOR.replace('editor_en');</script>
@stop