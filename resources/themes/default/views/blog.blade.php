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
              <div class="gallery-item">
                <article class="post clearfix mb-30 bg-lighter">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="{{ Theme::asset('images/article/img_blog_1.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
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
                          <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">KERACUNAN PARACETAMOL (INTOKSIKASI PARACETAMOL) PADA KUCING</a></h4>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13">oleh : <b>drh Wywy Goulda March</b></span>
                         {{--   <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                          <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>    --}}                     
                        </div>
                      </div>
                    </div>
                    <p class="mt-10">Pernahkan kucing anda mengalami demam dan anda ingin menurunkan panasnya dengan obat manusia seperti paracetamol atau acetaminophen? Setelah pemberian obat tersebut, kucing menjadi muntah dan wajah bengkak. Tahukah anda jika paracetamol berbahaya bagi kucing? Kali ini, saya akan membahas keracunan acetaminophen atau yang sering dikenal dengan paracetamol pada kucing untuk para penyayang hewan semua.</p>
                    <a href="#" class="btn-read-more">Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <!-- Blog Item End -->

               <!-- Blog Item Start -->
              <div class="gallery-item">
                <article class="post clearfix mb-30 bg-lighter">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="{{ Theme::asset('images/article/img_blog_2.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20 pr-10">
                    <div class="entry-meta media mt-0 no-bg no-border">
                     <div class="media-body pl-15">
                        <div class="event-content pull-left flip">
                          <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Infeksi Calici Virus Pada Kucing</a></h4>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13">oleh : <b>drh Wywy Goulda March</b></span>          
                        </div>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                    <a href="#" class="btn-read-more">Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <!-- Blog Item End -->

               <!-- Blog Item Start -->
              <div class="gallery-item">
                <article class="post clearfix mb-30 bg-lighter">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="{{ Theme::asset('images/article/img_blog_3.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20 pr-10">
                    <div class="entry-meta media mt-0 no-bg no-border">
                     <div class="media-body pl-15">
                        <div class="event-content pull-left flip">
                          <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Infeksi Panleukopenia Virus</a></h4>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13">oleh : <b>drh Wywy Goulda March</b></span>          
                        </div>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                    <a href="#" class="btn-read-more">Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <!-- Blog Item End -->

               <!-- Blog Item Start -->
              <div class="gallery-item">
                <article class="post clearfix mb-30 bg-lighter">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="{{ Theme::asset('images/article/img_blog_4.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20 pr-10">
                    <div class="entry-meta media mt-0 no-bg no-border">
                     <div class="media-body pl-15">
                        <div class="event-content pull-left flip">
                          <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Penyakit Kulit Scabiosis Pada Anjing dan Kucing</a></h4>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13">oleh : <b>drh Wywy Goulda March</b></span>          
                        </div>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                    <a href="#" class="btn-read-more">Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <!-- Blog Item End -->

              <!-- Blog Item Start -->
              <div class="gallery-item">
                <article class="post clearfix mb-30 bg-lighter">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="{{ Theme::asset('images/article/img_blog_5.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20 pr-10">
                    <div class="entry-meta media mt-0 no-bg no-border">
                     <div class="media-body pl-15">
                        <div class="event-content pull-left flip">
                          <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Penyakit Parvo Virus Pada Anjing</a></h4>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13">oleh : <b>drh Wywy Goulda March</b></span>          
                        </div>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                    <a href="#" class="btn-read-more">Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <!-- Blog Item End -->

            </div>
            <!-- Blog Masonry -->
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <nav>
              <ul class="pagination theme-colored xs-pull-center m-0">
                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
@stop 