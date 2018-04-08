@extends('layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">{{ $pageTitle }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          @if(isset($data))
            <form role="form" method="{{ $method }}" action="{{action('Admin\UserController@update', $data->id)}}">
            <input name="_method" type="hidden" value="PATCH">
          @else
            <form role="form" method="{{ $method }}" action="{{ action($action) }}">
          @endif
          {{csrf_field()}}
          <div class="box-body">
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div><br />
          @endif
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ $data->name or "" }}" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Email address</label>
            <input type="email" name="email" value="{{ $data->email or "" }}" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="" class="form-control" required>
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
        <!--/.col (left) -->
       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop