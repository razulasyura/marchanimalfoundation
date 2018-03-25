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
              <h2 class="title">About</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
              <li class="active text-theme-colored">{{ $program->name}}</li>
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
          <h3 class="text-theme-colored text-uppercase mt-0">{{$program->name}}</h3>
          {!!$program->description!!}
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

