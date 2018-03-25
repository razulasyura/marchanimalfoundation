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
                  <div class="post-thumb thumb"> <img src="{{ Theme::asset('images/article/'.$blog->file) }}" alt="" class="img-responsive img-fullwidth"> </div>
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
                      <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="#">{{ $blog->name }}</a></h3>
                        {{--  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>  --}}
                        <span class="mb-10 text-gray-darkgray mr-10 font-13">oleh : <b>drh Wywy Goulda March</b> (Post Graduate Certificate (Small animal surgery)</span>
                      </div>
                    </div>
                  </div>
                  {{--  content here  --}}
                  {!! $blog->description !!}
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
s.src = 'https://marchanimalfoundation-org.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Latest Articles</h5>
                <div class="latest-posts">
                  @foreach($list as $row)
                  <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="#"><img src="{{ Theme::asset('images/article/'.$row->file) }}" width="75px" height="75px" alt=""></a>
                    <div class="post-right">
                    <h5 class="post-title mt-0"><a href="{{ url('blog/'.$row->id) }}">{!! str_limit($row->name) !!}</a></h5>
                    {{--  <p>{!! str_limit($row->description,40) !!}</p>  --}}
                    </div>
                  </article>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
@stop
