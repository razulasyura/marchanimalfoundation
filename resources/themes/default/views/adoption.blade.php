@extends('layouts.master')
@section('content')
<!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ Theme::asset('images/img-breadcrumb-2.jpg') }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Adoption</h2>
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

    <!-- Section: Facilities -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
              <a class="image-popup-vertical-fit" title="Title Here 1" href="{{ Theme::asset('images/img-adopt-3.jpg') }}"><img src="{{ Theme::asset('images/img-adopt-3.jpg') }}" alt=""></a>
              <h3>Mercy</h3>
              <ul class="list theme-colored">
                <li><strong>Location</strong> : Shelter / March Animal Foundation</li>
                <li><strong>Kind Of Animal</strong> : Dog</li>
                <li><strong>Gender</strong> : Female</li>
                <li><strong>Age</strong> : 10 Month</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quos quae, provident aspernatur et voluptatibus saepe recusandae accusamus sit non, numquam pariatur odit veniam aut.</p>
              <a href="{{ url('adoption_detail') }}" class="btn btn-sm btn-theme-colored">Read more</a>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
              <a class="image-popup-vertical-fit" title="Title Here 1" href="{{ Theme::asset('images/img-adopt-4.jpg') }}"><img src="{{ Theme::asset('images/img-adopt-4.jpg') }}" alt=""></a>
              <h3>En en</h3>
              <ul class="list theme-colored">
                <li><strong>Location</strong> : Shelter / March Animal Foundation</li>
                <li><strong>Kind Of Animal</strong> : Cat</li>
                <li><strong>Gender</strong> : Male</li>
                <li><strong>Age</strong> : 12 Month</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quos quae, provident aspernatur et voluptatibus saepe recusandae accusamus sit non, numquam pariatur odit veniam aut.</p>
              <a href="{{ url('adoption_detail') }}" class="btn btn-sm btn-theme-colored">Read more</a>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
              <a class="image-popup-vertical-fit" title="Title Here 1" href="{{ Theme::asset('images/img-adopt-1.jpg') }}"><img src="{{ Theme::asset('images/img-adopt-1.jpg') }}" alt=""></a>
              <h3>Si Belang</h3>
              <ul class="list theme-colored">
                <li><strong>Location</strong> : Shelter / March Animal Foundation</li>
                <li><strong>Kind Of Animal</strong> : Cat</li>
                <li><strong>Gender</strong> : Male</li>
                <li><strong>Age</strong> : 10 Month</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quos quae, provident aspernatur et voluptatibus saepe recusandae accusamus sit non, numquam pariatur odit veniam aut.</p>
              <a href="{{ url('adoption_detail') }}" class="btn btn-sm btn-theme-colored">Read more</a>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 mb-40">
              <a class="image-popup-vertical-fit" title="Title Here 1" href="{{ Theme::asset('images/img-adopt-3.jpg') }}"><img src="{{ Theme::asset('images/img-adopt-3.jpg') }}" alt=""></a>
              <h3>Mercy</h3>
              <ul class="list theme-colored">
                <li><strong>Location</strong> : Shelter / March Animal Foundation</li>
                <li><strong>Kind Of Animal</strong> : Cat</li>
                <li><strong>Gender</strong> : Male</li>
                <li><strong>Age</strong> : 18 Month</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quos quae, provident aspernatur et voluptatibus saepe recusandae accusamus sit non, numquam pariatur odit veniam aut.</p>
              <a href="{{ url('adoption_detail') }}" class="btn btn-sm btn-theme-colored">Read more</a>
            </div>

          </div>
        </div>
      </div>
    </section>
@stop