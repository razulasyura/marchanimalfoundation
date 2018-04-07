@extends('layouts.master')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ Theme::asset('images/event/detail/'.$event->file) }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Event Detail</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
              <li><a href="#">Event</a></li>
                <li class="active text-theme-colored">@if (Request::segment(1)=='en') {{ $event->name_en }} @else {{ $event->name }} @endif</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li>
                <h5>Topics:</h5>
                <p>@if (Request::segment(1)=='en') {{ $event->name_en }} @else {{ $event->name }} @endif</p>
              </li>
              <li>
                <h5>Host:</h5>
                <p>{{ $event->host }}</p>
              </li>
              <li>
                <h5>Location:</h5>
                <p>{{ $event->location }}</p>
              </li>
              <li>
                <h5>Date:</h5>
                <p>@if (Request::segment(1)=='en') {{ $event->time_en }} @else {{ $event->time }} @endif</p>
              </li>
              {{--  <li>
                <h5>End Date:</h5>
                <p>17 April 2016</p>
              </li>  --}}
              <li>
                <h5>Share:</h5>
                <div class="styled-icons icon-sm icon-gray icon-circled">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-8">
            <img src="{{ Theme::asset('images/event/detail/'.$event->file) }}" alt="">
          </div>
        </div>
        <div class="row mt-60">
          <div class="col-md-12">
            <h4 class="mt-0">Event Description</h4>
            <p>@if (Request::segment(1)=='en') {!! $event->description_en !!} @else {!! $event->description !!} @endif</p>
          </div>
        <div class="col-md-12">
          <h4 class="mt-0">Documentation</h4>
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope grid-3 gutter clearfix">
                @foreach($gallery as $row)
                <!-- Portfolio Item Start -->
                <div class="gallery-item photography">
                  <div class="thumb">
                  <img class="img-fullwidth" src="{{ Theme::asset('images/gallery/'. $row->file) }}" alt="{{ $row->name }}">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{ Theme::asset('images/gallery/original/'. $row->file) }}"><i class="fa fa-plus"></i></a>
                          {{--  <a href="#"><i class="fa fa-link"></i></a>  --}}
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{ Theme::asset('images/gallery/'. $row->file) }}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                @endforeach
              </div>
              <!-- End Portfolio Gallery Grid -->
        </div>
        </div>
      </div>
    </section>

@stop

