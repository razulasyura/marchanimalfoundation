@extends('layouts.master')
@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ Theme::asset('images/img-breadcrumb-4.jpg') }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Organizer</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-theme-colored">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Section: team -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row mb-30">
            @foreach($organizer as $row)
            <div class="col-md-4">
              <div class="team-member maxwidth400">
                <div class="thumb"><img alt="" src="{{ Theme::asset('images/organizer/'.$row->file) }}" class="img-fullwidth"></div>
                <div class="info">
                  <h4 class="mb-0">{{ $row->name }} <small>- {{ $row->title }}</small></h4>
                  {{--  <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Consectetur adipisicing elit. Tempore provident accusamus est asperiores illum eius is.</p>  --}}
                  <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-10 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
@stop