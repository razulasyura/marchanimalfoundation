@extends('layouts.master')

@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ Theme::asset('images/img-breadcrumb-5.jpg') }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">About Us</h2>
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

    <!-- Section: About -->
    <section id="about2">
      <div class="container">
        <div class="section-content">
          <div class="row mt-10">
            <div class="col-sm-5 col-md-3 mb-sm-20">
              <h3 class="text-uppercase letter-space-1 mt-0">We are March Animal Foundation<span class="text-theme-colored">  Share Our Love.</span></h3>
              <p class="lead mt-20 mb-30">Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus?</p>
              <a href="#" class="btn btn-colored btn-theme-colored btn-sm">View Details</a>
            </div>
            <div class="col-sm-7 col-md-9">
              <div class="owl-carousel-3col">
                <div class="item">
                  <div class="box-hover-effect effect1 mb-sm-30">
                    <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ Theme::asset('images/img-program-1.jpg') }}" alt="..."></a> </div>
                    <div class="caption">
                      <h4 class="text-uppercase letter-space-1 mt-0">School<span class="text-theme-colored"> Education</span></h4>
                       <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit eligendi</p>
                      <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-hover-effect effect1 mb-sm-30">
                    <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ Theme::asset('images/img-program-2.jpg') }}" alt="..."></a> </div>
                    <div class="caption">
                      <h4 class="text-uppercase letter-space-1 mt-0">Sterilization and vaccination<span class="text-theme-colored"> With Subsidy</span></h4>
                       <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit eligendi</p>
                      <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-hover-effect effect1 mb-sm-30">
                    <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ Theme::asset('images/img-program-1.jpg') }}" alt="..."></a> </div>
                    <div class="caption">
                      <h4 class="text-uppercase letter-space-1 mt-0">Shelter<span class="text-theme-colored">  Medical Services</span></h4>
                       <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit eligendi</p>
                      <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-hover-effect effect1 mb-sm-30">
                    <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ Theme::asset('images/img-program-3.jpg') }}" alt="..."></a> </div>
                    <div class="caption">
                      <h4 class="text-uppercase letter-space-1 mt-0">Animal<span class="text-theme-colored"> Relief</span></h4>
                       <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit eligendi</p>
                      <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                    </div>
                  </div>
                </div>
                 <div class="item">
                  <div class="box-hover-effect effect1 mb-sm-30">
                    <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ Theme::asset('images/img-program-4.jpg') }}" alt="..."></a> </div>
                    <div class="caption">
                      <h4 class="text-uppercase letter-space-1 mt-0">Adoption<span class="text-theme-colored"> Pet</span></h4>
                       <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit eligendi</p>
                      <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="divider parallax layer-overlay overlay-deep" data-bg-img="{{ Theme::asset('images/img-breadcrumb-5.jpg') }}">
      <div class="container">
        <div class="row text-justify">
          <div class="col-md-6">
            <h4>Who we are</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p>
          </div>
          <div class="col-md-6">
            <h4>What we do</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p>
          </div>
        </div>
      </div>
    </section>
@stop

