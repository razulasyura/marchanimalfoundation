@extends('layouts.master')
@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ Theme::asset('images/img-breadcrumb-2.jpg') }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Article Detail</h2>
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
        <div class="row">
          <div class="col-md-9">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="{{ Theme::asset('images/img-blog-detail.jpg') }}" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="#">KERACUNAN PARACETAMOL (INTOKSIKASI PARACETAMOL) PADA KUCING</a></h3>
                        {{--  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>  --}}
                        <span class="mb-10 text-gray-darkgray mr-10 font-13">oleh : <b>drh Wywy Goulda March</b> (Post Graduate Certificate (Small animal surgery)</span>
                      </div>
                    </div>
                  </div>
                  <p>Pernahkan kucing anda mengalami demam dan anda ingin menurunkan panasnya dengan obat manusia seperti paracetamol atau acetaminophen? Setelah pemberian obat tersebut, kucing menjadi muntah dan wajah bengkak. Tahukah anda jika paracetamol berbahaya bagi kucing? Kali ini, saya akan membahas keracunan acetaminophen atau yang sering dikenal dengan paracetamol pada kucing untuk para penyayang hewan semua.</p>
                  <p>Paracetamol atau acetaminophen adalah obat penurun panas dan pereda rasa sakit. Obat ini sangat cepat diserap dalam saluran pencernaan. Dalam waktu 30 menit, paracetamol dapat menunjukkan gejala keracunan pada kucing.</p>
                  {{--  <blockquote class="theme-colored pt-20 pb-20">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>  --}}
                  <p><b>Mengapa Paracetamol berbahaya bagi kucing</b></p>
                  <p>Kucing tidak seperti manusia yang dapat memetabolisme obat ini. Kucing memiliki enzim glukoronil transferase yang sangat sedikit (defisiensi) pada hati, yakni enzim yang dapat memetabolisme paracetamol dan membuangnya melalui ginjal. Obat ini tidak dapat dimetabolisme dengan baik sehingga menjadi metabolit yang bersifat toksik/racun yaitu NAPQI (N-acetyl-para-benzequinoneimine). NAPQI menempel pada membran sel hati dan merusak lapisan lipid sehingga mengakibatkan kerusakan sel hati (hepatocyte). Hal ini juga mengakibatkan stress oksidasi pada sel darah merah khususnya protein dalam sel darah merah yaitu haemoglobin. Hemoglobin berubah menjadi methemoglobin, yaitu sebuah bentuk yang tidak dapat mengikat dan mentranspor oksigen ke seluruh tubuh. Kondisi tersebut mengakibatkan kucing mengalami kekurangan oksigen dan anemia. Selain itu, obat ini juga dapat bersifat nephrotoxic atau merusak ginjal.</p>
                  <p>Anjing memiliki enzim glukoronil transferase yang cukup untuk memetabolisme paracetamol. Namun dalam kadar pemberian dosis yang lebih dari normal, anjing juga dapat mengalami keracunan. Oleh sebab itu, kucing lebih mudah keracunan paracetamol dibandingkan dengan anjing.</p>
                  <p><b>Berapakah dosis keracunan pada kucing: </b></p>
                  <p>Beberapa tulisan ilmiah melaporkan dosis keracunan paracetamol 50-100 mg/kg BB, tetapi pernah diteliti dosis kecil 10 mg/kg BB memperlihatkan gejala dan menyebabkan kematian pada kucing. Oleh sebab itu, berapa pun jumlah pemberian paracetamol tidak disarankan, sekalipun dengan jumlah yang sangat kecil.</p>
                  <p><b>Bagaimana keracunan paracetamol didiagnosa:</b></p>
                  <p>Diagnosa keracunan paracetamol umumnya diperoleh pertama kali dari keterangan pemilik kucing yakni diberikan obat atau tidak sengaja tertelan obat yang akan dikonsumsi pemilik. Oleh sebab itu, pemilik kucing perlu memberikan keterangan yang lengkap mengenai jumlah pemberian dan waktu obat tertelan. Hal ini sangat membantu dokter untuk mendiagnosa dengan cepat ditambah dengan pemeriksaan gejala klinis. Dokter hewan juga biasanya akan melakukan pemeriksaan urin dan darah lengkap untuk menunjang diagnosa keracunan obat tersebut.</p>
                  <p><b>Apa Gejala Klinis dari keracunan paracetamol:</b></p>
                  <p>Gejala yang biasa ditemukan antara lain depresi, muntah, turun nafsu makan, lemas, bengkak pada wajah atau jari kaki, hipersalivasi (air liur menetes berlebihan), nyeri perut, sulit bernafas, urin berwarna kecoklatan, selaput lendir kebiruan (cyanosis), hingga dapat berujung kematian.
                  <br/>
                  Pada pemeriksaan urin, warna yang terlihat berupa coklat gelap karena mengandung methemoglobin. 
                  </p>
                  <p><b>Penanganan kucing yang keracunan paracetamol:</b></p>
                  <p>
                    Jika anda menemukan gejala di atas segeralah membawa kucing ke dokter hewan terdekat untuk mendapatkan penanganan yang cepat. Dokter akan menanyakan sejarah pada pemilik kucing, apa yang telah diberikan dan informasi yang lengkap harus diberitahukan pada dokter agar dapat dilakukan terapi yang tepat pada kucing tersebut.<br/>
                    Ketika kucing dibawa ke klinik, maka prioritas utama adalah stabilisasi pernafasan. Dokter hewan akan memberikan bantuan oksigen karena kucing mengalami kesulitan bernafas. Setelah stabil, dokter akan membantu mengeluarkan paracetamol yang tertelan dengan memberikan perangsang muntah atau pemberian karbon aktif jika paracetamol baru saja tertelan sebelum 30 menit. Tetapi jika waktu tertelan paracetamol lebih dari 30 menit dan telah menunjukkan gejala klinis maka segera diberikan antidota (penawar) berupa N-acetylcysteine (NAC) baik berupa injeksi ataupun per oral. NAC digunakan untuk berikatan dengan NAPQI sehingga meminimalisir kerusakan sel.<br><br/>
                    Terapi alternatif lain adalah kombinasi cimetidine dengan NAC atau vitamin C. Kombinasi ini menunjukkan keefektifan dalam meminimalisir kerusakan hati dari pada pemberian obat secara tunggal.<br/><br/> 
                    Lamanya pengobatan tergantung dari dosis paracetamol yang tertelan dan gejala klinis yang ditimbulkan. Kerusakan hati membutuhkan waktu beberapa minggu untuk pemulihan. Oleh sebab itu, dibutuhkan kerja sama pemilik kucing untuk memberikan obat secara kontinuitas di rumah sesuai dengan resep yang diberikan dokter hewan.<br/><br/
                    Keracunan paracetamol sangat fatal pada kucing, akan tetapi hewan dapat bertahan jika kondisi dengan cepat dikenali, didiagnosa dan juga diterapi dengan cepat. Pemberian terapi tambahan berupa terapi infus intravena juga diperlukan untuk mengembalikan perfusi jaringan. Setelah kondisi wajah mengecil dan selaput lendir menunjukkan warna merah muda, pemberian makanan berupa bubur khusus untuk anoreksia sangat membantu agar memberikan energi dan menstabilkan kondisi hewan.<br/>
                  </p>
                  <p><b>Obat demam atau penghilang nyeri apa yang bisa diberikan untuk kucing:</b></p>
                  <p>
                    Ada beberapa jenis obat yang dapat diberikan pada kucing seperti ketoprofen, carprofen, meloxicam, dan asam tolfenamat. Akan tetapi, pemberian obat-obatan tersebut memerlukan perhitungan dosis yang tepat sesuai dengan berat badan kucing dan sesuai rekomendasi dokter hewan. Oleh sebab itu, jika kucing anda sakit segeralah bawa kucing kesayangan anda ke dokter hewan terdekat untuk mendapatkan penanganan yang terbaik. 
                  </p>
                  <p>
                    <b>Pustaka</b><br/>
                    Allen, Andrew L. 2003. <i>The Diagnosis of Acetaminophen Toxicosis in a Cat</i>. Saskatchewan: Can Vet J. <i>http:/ncbi.mlm.nih.gov/pmc</i>
                    <br/>
                    Streenbergen, Vera. 2013. <i>Acetaminophen and Cats, a Dangerous Combination. Illnois</i>: Veterinary Tecnician.
                  </p>
                  <div class="mt-30 mb-0">
                    <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Share:</h5>
                    <ul class="styled-icons icon-circled m-0">
                      <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                    </ul>
                  </div>
                </div>
              </article>
              {{--  <div class="tagline p-0 pt-20 mt-5">
                <div class="row">
                  <div class="col-md-8">
                    <div class="tags">
                      <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> Law, Juggement, lawyer, Cases</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="share text-right flip">
                      <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                    </div>
                  </div>
                </div>
              </div>  --}}
              {{--  <div class="author-details media-post">
                <a href="#" class="post-thumb mb-0 pull-left flip pr-20"><img class="img-thumbnail" alt="" src="images/blog/author.jpg"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-0"><a href="#" class="font-18">John Doe</a></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <ul class="styled-icons square-sm m-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="clearfix"></div>
              </div>  --}}
              <div id="comments" class="comments-area pt-50">
                <h3 class="comments-title">Comments</h3>

                <!-- Disqus Comments plugin -->
                <div id="disqus_thread"></div>
                <script>
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://children-charity-foundation.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <!-- Disqus Comments plugin end -->

              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Latest News</h5>
                <div class="latest-posts">
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
@stop