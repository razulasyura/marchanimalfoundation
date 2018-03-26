<header id="header" class="header">
    <div class="header-top bg-theme-colored sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">+62 859 6677 8889</a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 9:00 to 17:00 </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">marchanimalfoundation@gmail.com</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="mt-sm-10 mb-sm-10">
                  <!-- Modal: Appointment Starts -->
                  {{-- <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10 ajaxload-popup" href="#">Donate Now</a> --}}
                </li>
                <li class="mt-sm-10 mb-sm-10">
                  <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10" href="http://bit.ly/MAFregistrasi" target="_blank">Join Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-6">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="#"><img src="{{ Theme::asset('images/logo-wide.png') }}" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right flip sm-text-center">
                <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-envelope text-theme-colored font-18"></i> Mail Us Today</div>
                <a class="font-12 text-gray" href="#"> marchanimalfoundation@gmail.com</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right flip sm-text-center">
                <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-phone-square text-theme-colored font-18"></i> +62 859 6677 8889</div>
                <a class="font-12 text-gray" href="#">Call us for more details!</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right flip sm-text-center">
                <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-building-o text-theme-colored font-18"></i> Location</div>
                <a class="font-12 text-gray" href="#"> Bogor, Indonesia</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
        <div class="container">
          <nav id="menuzord" class="menuzord default bg-light">
            <ul class="menuzord-menu">
              <li><a href="{{ url('home') }}">Home</a></li>
              <li><a href="#">About</a>
                <ul class="dropdown">
                  <li><a href="{{ url('about') }}">About</a></li>
                  <li><a href="{{ url('organizer') }}">Organizer</a></li>
                  {{-- <li><a href="{{ url('volunteer') }}">Volunteer</a></li> --}}
                </ul>
              </li>
              <li><a href="{{ url('program') }}">Program</a></li>
              <li><a href="{{ url('event') }}">Event</a></li>
              <li><a href="{{ url('blog') }}">Article</a></li>
              {{--  <li><a href="{{ url('vetenarian') }}">Vetenarian</a></li>  --}}
              <li><a href="{{ url('volunteer') }}">Volunteer</a></li>              
              <li><a href="{{ url('gallery') }}">Gallery</a></li>                        
              <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
            <ul class="list-inline pull-right flip hidden-sm hidden-xs">
              <li>
                {{-- <a class="btn btn-colored btn-flat btn-theme-colored mt-15 ajaxload-popup" href="#" >Donate Now</a> --}}
              </li>
              <li>
                <a class="btn btn-colored btn-flat btn-theme-colored mt-15" href="http://bit.ly/MAFregistrasi" target="_blank" >Join Us</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>	