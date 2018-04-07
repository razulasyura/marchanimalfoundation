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
                <li class="active text-theme-colored">Page Title</li>
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
          <div class="owl-carousel-1col" data-dots="false">
              <div class="item">
                <div class="thumb">
                  <img src="{{ Theme::asset('images/about/img-about-1.jpg') }}" alt="">
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ Theme::asset('images/about/img-about-2.jpg') }}" alt="">
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ Theme::asset('images/about/img-about-3.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
          @if (Request::segment(1)=='en')
           <div class="col-sm-12 col-md-5">
            <h3 class="text-theme-colored text-uppercase mt-0">About Us</h3>
            <p>Welcome to March Animal Foundation, is a non-profit organization dedicated to save homeless animal, give education, and donate for pet that needs medical treatment in clinic. Our motto is “work with love for animal God’s creature”. 
            It started by hoping of the founder Dr. Wywy Goulda March as a practicioner, to introduce vet profession as a close profession to society up to remote areas. All this time, veterinarian is known as a rare profession and only for high financial owner. Beside that, so many pet are displaced on the street, and get animal cruelty from people with no good education. It is therefore, our foundation do close approach to resolve this problems.This foundation get full support from many vets as volunteers, not only private practicioners but also vet from animal husbandry department. They have same vision and mission with us to improve vet profession to society with charity action. </p>
            <p>Hope all animal surround us will get decent living opportunity, which become our duties and obligations to conserve and keep animal being as God’s creatures.</p>
            <p>Best Regard, <br/><b>March Animal Foundation</b></p>
          </div> 
          
          @else          
          <div class="col-sm-12 col-md-5">
            <h3 class="text-theme-colored text-uppercase mt-0">About Us</h3>
            <p>Selamat datang di March Animal Foundation, sebuah yayasan yang bergerak di bidang social untuk menyelamatkan hewan-hewan terlantar, memberikan edukasi dan bantuan donasi bagi hewan yang membutuhkan penanganan medis di klinik hewan. Motto yayasan kami adalah “Bergerak dengan cinta kasih bagi Hewan Ciptaan Tuhan”.</p>
           
            <p>Berawal dari adanya keinginan seorang dokter praktisi yakni drh Wywy Goulda March, sebagai founder, untuk memperkenalkan profesi dokter hewan sebagai profesi yang dekat dengan masyarakat hingga ke pelosok daerah. Selama ini, dokter hewan dikenal sebagai pekerjaan yang langka dan mahal, hanya bisa didatangi oleh kalangan dengan finansial besar. Selain itu, masih banyaknya hewan-hewan terlantar di jalanan yang tidak mendapatkan kesempatan hidup yang baik, ditambah adanya penyiksaan yang kerap dilakukan oleh orang-orang yang tidak menyukai hewan. Sehingga melalui yayasan ini, dapat dilakukan pendekatan untuk membantu menyelesaikan berbagai permasalahan ini.</p>
          </div>
          <div class="col-sm-12 col-md-12">
            <p>Berjalannya kegiatan ini juga mendapatkan dukungan dari berbagai dokter dinas peternakan di daerah dan dokter praktisi yang memiliki visi misi yang serupa. Sehingga yayasan ini dapat berjalan dengan bantuan tenaga sukarelawan yang membantu dengan senang hati.</p>
            <p>Kiranya hewan-hewan di sekitar kita mendapatkan kesempatan hidup yang layak, yang menjadi tugas dan kewajiban kita bersama untuk melestarikan dan menjaga seluruh makhluk ciptaan Tuhan. </p>
            <p>Salam<br/><b>March Animal Foundation</b></p>
          </div>
          @endif
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

