@extends('layouts.master')

@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ Theme::asset('images/img-breadcrumb-2.jpg') }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Article</h2>
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

    <!-- Section: Blog -->
   
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row blog-posts">
          <div class="col-md-12">
            <!-- Blog Masonry -->
            <div id="grid" class="gallery-isotope grid-2 masonry gutter-30 clearfix">
              <!-- Blog Item Start -->
              @foreach($blog as $row)
              <div class="gallery-item">
                <article class="post clearfix mb-30 bg-lighter">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="{{ Theme::asset('images/article/'.$row->file) }}" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20 pr-10">
                    <div class="entry-meta media mt-0 no-bg no-border">
                     {{--   <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>  --}}
                      <div class="media-body pl-15">
                        <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">{{ $row->name }}</a></h4>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13">oleh : <b>{{ $row->author }}</b></span>
                         {{--   <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                          <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>    --}}                     
                        </div>
                      </div>
                    </div>
                    <p class="mt-10">
                      {{ $row->description_name }}
                    </p>
                    <a href="#" class="btn-read-more">Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              @endforeach
              <!-- Blog Item End -->
            </div>
            <!-- Blog Masonry -->
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <nav>
              <ul class="pagination theme-colored pull-right xs-pull-center m-0">
                 <?php echo $blog->render(); ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
@stop 