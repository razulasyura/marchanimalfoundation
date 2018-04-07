@extends('layouts.master')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ Theme::asset('images/img-breadcrumb-3.jpg') }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Gallery</h2>
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
    
    <!-- Gallery Grid 3 -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
            
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
          <div class="row">
            <br/>
          </div>
          <div class="row">
            <div class="col-sm-12">
            <nav>
              <ul class="pagination theme-colored pull-right xs-pull-center m-0">
                {{ $gallery->render() }}
              </ul>
            </nav>
          </div>
          </div>
        </div>
      </div>
    </section>

@stop

