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

          <form role="form" method="POST" action="{{ action($action) }}">
          {{csrf_field()}}
          <div class="box-body">
          <div class="form-group">
            <label>Application</label>
            <input type="text" name="application" value="{{ Setting::get('application')}}" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Motto</label>
            <input type="text" name="motto" value="{{ Setting::get('motto')}}" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ Setting::get('phone')}}" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" value="{{ Setting::get('email')}}" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="form-control" required>{{ Setting::get('address')}}</textarea>
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