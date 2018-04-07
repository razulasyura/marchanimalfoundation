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
                <li><a href="#">Pages</a></li>
              <li class="active text-theme-colored">@if (Request::segment(1)=='en') {{ $program->name_en }} @else {{ $program->name }} @endif</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section> 
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-7">
            {{--  <div class="owl-carousel-1col" data-dots="false">  --}}
              <div class="item">
                <div class="thumb">
                  <img src="{{ Theme::asset('images/program/detail/'.$program->file) }}" alt="">
                </div>
              </div>
            {{--  </div>  --}}
          </div>
          <div class="col-sm-12 col-md-5">
          <h3 class="text-theme-colored text-uppercase mt-0">@if (Request::segment(1)=='en') {{ $program->name_en }} @else {{ $program->name }} @endif</h3>
          @if (Request::segment(1)=='en') {!! $program->description_en !!} @else {!! $program->description !!} @endif
          </div>
        </div>
      </div>
    </section>  

    <!-- Section: event calendar -->
    <section>
      <div class="container">
        <div class="row">
          <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="title text-black-666"> Artikel<span class="text-theme-colored"> @if (Request::segment(1)=='en') {{ $program->name_en }} @else {{ $program->name }} @endif</span></h2>
              
            </div>
          </div>
          </div>
          <div class="col-md-12">
            @foreach($blog as $row)
            <div class="upcoming-events bg-white-f3 mb-20">
              <div class="row">
                <div class="col-sm-4 pr-0 pr-sm-15">
                  <div class="thumb p-15">
                    <img class="img-fullwidth" src="{{ Theme::asset('images/article/'.$row->file) }}" alt="...">
                  </div>
                </div>
                <div class="col-sm-8 pl-0 pl-sm-15">
                  <div class="event-details p-15 mt-20">
                  <h4 class="mt-0 text-uppercase font-weight-500">@if (Request::segment(1)=='en') {{ $row->name_en }} @else {{ $row->name }} @endif</h4>
                    <p>@if (Request::segment(1)=='en') {{ $row->description_name_en }} @else {{ $row->description_name }} @endif</p>
                    <a href="{{ url(Setting::get('language').'/blog/'.$row->id) }}" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10">Details <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
                
              </div>
            </div>
            @endforeach
            <div class="row">
              <div class="col-sm-12">
                <nav>
                  <ul class="pagination theme-colored pull-right xs-pull-center mb-xs-40">
                    <?php echo $blog->render(); ?>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="divider parallax layer-overlay overlay-deep" data-bg-img="{{ Theme::asset('images/img-breadcrumb-5.jpg') }}">
      <div class="container">
        <div class="row text-justify">
         {{--   <div class="col-md-6">
            <h4>Who we are</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p>
          </div>
          <div class="col-md-6">
            <h4>What we do</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p>
          </div>  --}}
        </div>
      </div>
    </section>

  
  <!-- end main-content -->
@stop

