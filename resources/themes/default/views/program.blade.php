@extends('layouts.master')

@section('content')
<!-- Start main-content -->

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ Theme::asset('images/img-breadcrumb-2.jpg') }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Program</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Name</a></li>
                <li class="active text-theme-colored">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row multi-row-clearfix">
          <div class="blog-posts">
            @foreach($program as $row)
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="{{ Theme::asset('images/program/'.$row->file) }}" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content border-1px p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    
                    <div class="media-body">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ url('program/'.$row->id) }}">{{ $row->name }}</a></h4>
                                            
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">{{ $row->description_name }}</p>
                  <a href="{{ url('program/'.$row->id) }}" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section> 

  <!-- end main-content -->
@stop

