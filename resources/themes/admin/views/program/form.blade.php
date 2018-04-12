@extends('layouts.master')
@section('css')
@stop
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
            <label>Name (ID)</label>
            <input type="text" name="name" value="{{ $data->name or "" }}" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Subtitle</label>
            <textarea rows="4" name="description_name" class="form-control" required>{{ $data->description_name or ""}}</textarea>
          </div>

          <div class="form-group">
            <label>Description (ID)</label>
            <textarea id="editor" rows="4" name="description" class="form-control" required>{{ $data->description or ""}}</textarea>
          </div>

          </div>
          <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->

        <!-- right column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form {{Request::segment(2)}}</h3>
            </div>
          <div class="box-body">

          <div class="form-group">
            <label>Name (EN)</label>
            <input type="text" name="name_en" value="{{ $data->name_en or "" }}" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Subtitle</label>
            <textarea rows="4" name="description_name_en" class="form-control" required>{{ $data->description_name_en or ""}}</textarea>
          </div>

          <div class="form-group">
            <label>Description (EN)</label>
            <textarea id="editor_en" rows="4" name="description_en" class="form-control" required>{{ $data->description_en or ""}}</textarea>
          </div>
          </div>
          <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->

        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-default">
            <!-- /.box-header -->
            <!-- form start -->
          <div class="box-body">

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
       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop
@section('js')
<script src="//cdn.ckeditor.com/4.9.1/basic/ckeditor.js"></script>
<script>CKEDITOR.replace('editor');CKEDITOR.replace('editor_en');</script>
@stop