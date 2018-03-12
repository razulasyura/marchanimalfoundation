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
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="{{ Theme::asset('images/program/edukasi.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content border-1px p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    
                    <div class="media-body">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Edukasi Sekolah</a></h4>
                                            
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">MAF memberikan penyuluhan edukasi terhadap anak-anak sekolah untuk menumbuhkan pengetahuan tentang hewan dan rasa sayang terhadap hewan.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="{{ Theme::asset('images/program/vaksin.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
               <div class="entry-content border-1px p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    
                    <div class="media-body">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Sterilisasi dan Vaksinasi Bersubsidi Di Daerah</a></h4>
                                            
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Melalui kerja sama dengan dokter hewan praktek dan dinas di daerah, yayasan kami memberikan pelayanan sterilisasi dan vaksinasi anjing-kucing dengan harga subsidi khusus hewan domestic.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="{{ Theme::asset('images/program/shelter.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content border-1px p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    
                    <div class="media-body">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Layanan Medis Shelter</a></h4>
                                            
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Program ini memberikan bantuan potongan biaya sebesar 50% untuk biaya operasi bagi shelter atau tempat panti asuhan hewan.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="{{ Theme::asset('images/program/satwa.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content border-1px p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    
                    <div class="media-body">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Pertolongan Satwa</a></h4>
                                            
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Yayasan kami bergerak dalam membantu satwa yang terlantar, yang berada dalam keadaan bahaya atau membutuhkan pertolongan medis.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="{{ Theme::asset('images/program/vaksin.jpg') }}" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
               <div class="entry-content border-1px p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    
                    <div class="media-body">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Pembiayaan Medis Pasien Gratis</a></h4>
                                            
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Pembiayaan Medis Pasien Gratis
Yayasan kami memberikan kesempatan bagi 5 (lima) pasien yang tidak memiliki finansial dalam pemberian pengobatan maupun tindakan bedah yang menjadi pasien di March animal clinic</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section> 

  <!-- end main-content -->
@stop

