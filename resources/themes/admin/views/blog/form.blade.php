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
        <div class="col-md-12">
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
            <label>Name (ID)</label>
            <input type="text" name="name" value="{{ $data->name or "" }}" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Subtitle</label>
            <textarea rows="4" name="description_name" class="form-control" required>{{ $data->description_name or ""}}</textarea>
          </div>

          <div class="form-group">
            <label>Description (ID) <a target="_blank" class="btn btn-warning btn-xs" href="{{ url('/admin/media') }}"><small>add image</small></a></label>
            <textarea id="editor" rows="4" name="description" class="form-control" required>{{ $data->description or ""}}</textarea>
          </div>

          </div>
          <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->

        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-warning">
            <!-- /.box-header -->
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
            <label>Description (EN) <a target="_blank" class="btn btn-warning btn-xs" href="{{ url('/admin/media') }}"><small>add image</small></a></label>
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
          
          <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" value="{{ $data->author or "" }}" class="form-control">
          </div>

          <div class="form-group">
            <label>Author Title</label>
            <input type="text" name="author_title" value="{{ $data->author_title or "" }}" class="form-control">
          </div>

          <div class="form-group">
            <label>Category Article</label>
            <select class="form-control" name="article_id" required>
              @php ($selected='')
              @foreach($article as $row)
                @if(isset($data))
                  @if(($row->id==$data->article_id))
                  {{$selected = 'selected'}}
                  @else
                  {{$selected = ''}}
                  @endif
                @endif
                <option value="{{ $row->id }}" {{$selected}}>{{ $row->name }}</option>
              @endforeach
            </select>
          </div>

          </div>
          <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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
<script src="//cdn.ckeditor.com/4.9.1/full/ckeditor.js"></script>
<script>CKEDITOR.replace('editor');CKEDITOR.replace('editor_en');</script>
@stop