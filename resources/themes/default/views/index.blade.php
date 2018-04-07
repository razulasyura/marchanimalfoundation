@extends('layouts.master')

@section('content')
    <!-- Section: home -->
    {{--  <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

               <!-- SLIDE 1 -->
              @foreach($slide as $row)
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x1280" data-rotate="0" data-saveperformance="off" data-title="{{ $row->name }}" data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{ Theme::asset('images/slide/'.$row->file) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              @endforeach
              <!-- LAYERS -->
	            </li>
            </ul>
          </div><!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [600, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>  --}}
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

	             <!-- SLIDE 1 -->
	            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
	                <!-- MAIN IMAGE -->
	                <img src="{{ Theme::asset('images/slide/'.$slide[0]['file']) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
	                <!-- LAYERS -->

	                {{--  <!-- LAYER NR. 1 -->
	                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent text-white font-raleway pl-30 pr-30"
	                  id="rs-1-layer-1"
	                
	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['-90']" 
	                  data-fontsize="['28']"
	                  data-lineheight="['54']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">For the poor children 
	                </div>  --}}

	                <!-- LAYER NR. 2 -->
	                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
	                  id="rs-1-layer-2"

	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['-20']"
	                  data-fontsize="['48']"
	                  data-lineheight="['70']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">@if (Request::segment(1)=='en') {{ $slide[0]['name_en'] }} @else {{ $slide[0]['name'] }} @endif
	                </div>

	                <!-- LAYER NR. 3 -->
	                <div class="tp-caption tp-resizeme text-white text-center" 
	                  id="rs-1-layer-3"

	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['50']"
	                  data-fontsize="['16']"
	                  data-lineheight="['28']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">@if (Request::segment(1)=='en') {!! $slide[0]['description_en'] !!} @else {!! $slide[0]['description'] !!} @endif
	                </div>

	                <!-- LAYER NR. 4 -->
	                <div class="tp-caption tp-resizeme" 
	                  id="rs-1-layer-4"

	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['115']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;"
	                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
	                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
	                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" target="_blank" href="{{ $slide[0]['link'] }}">Detail</a> 
	                </div>
	            </li>

	             <!-- SLIDE 2 -->
	            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
	                <!-- MAIN IMAGE -->
	                <img src="{{ Theme::asset('images/slide/'.$slide[1]['file']) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
	                <!-- LAYERS -->

	                <!-- LAYER NR. 1 -->
	                {{--  <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
	                  id="rs-2-layer-1"

	                  data-x="['left']"
	                  data-hoffset="['30']"
	                  data-y="['middle']"
	                  data-voffset="['-110']" 
	                  data-fontsize="['110']"
	                  data-lineheight="['120']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:700;">Donate
	                </div>  --}}

	                <!-- LAYER NR. 2 -->
	                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
	                  id="rs-2-layer-2"

	                  data-x="['left']"
	                  data-hoffset="['35']"
	                  data-y="['middle']"
	                  data-voffset="['-25']" 
	                  data-fontsize="['35']"
	                  data-lineheight="['54']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:600; border-radius: 30px;">@if (Request::segment(1)=='en') {{ $slide[1]['name_en'] }} @else {{ $slide[1]['name'] }} @endif 
	                </div>

	                <!-- LAYER NR. 3 -->
	                <div class="tp-caption tp-resizeme text-white" 
	                  id="rs-2-layer-3"

	                  data-x="['left']"
	                  data-hoffset="['35']"
	                  data-y="['middle']"
	                  data-voffset="['30']"
	                  data-fontsize="['16']"
	                  data-lineheight="['28']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">@if (Request::segment(1)=='en') {!! $slide[1]['description_en'] !!} @else {!! $slide[1]['description'] !!} @endif
	                </div>

	                <!-- LAYER NR. 4 -->
	                <div class="tp-caption tp-resizeme" 
	                  id="rs-2-layer-4"

	                  data-x="['left']"
	                  data-hoffset="['35']"
	                  data-y="['middle']"
	                  data-voffset="['95']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;"
	                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
	                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
	                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" target="_blank" href="{{ $slide[1]['link'] }}">Detail</a> 
	                </div>
	            </li>

              <!-- SLIDE 3 -->
            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ Theme::asset('images/slide/'.$slide[2]['file']) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['64']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">@if (Request::segment(1)=='en') {{ $slide[2]['name_en'] }} @else {{ $slide[2]['name'] }} @endif
                </div>

                <!-- LAYER NR. 2 -->
                {{--  <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['32']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">For Their Better Future 
                </div>  --}}

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">@if (Request::segment(1)=='en') {!! $slide[2]['description_en'] !!} @else {!! $slide[2]['description'] !!} @endif
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" target="_blank" href="{{ $slide[2]['link'] }}">Detail</a> 
                </div>
            </li>

            </ul>
          </div><!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [600, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>  

    <!-- Section: how can help? 3 -->
    <section id="services">
      <div class="container pb-60">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="title text-black-666">Our <span class="text-theme-colored"> Program</span></h2>
              
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          @foreach($program as $row)
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="service-block">
              <div class="thumb">
                <img src="{{ Theme::asset('images/program/front/'.$row->file) }}" class="img-fullwidth" alt="">
                <div class="desc">
                <p class="text-white">@if (Request::segment(1)=='en') {!! $row->description_name_en !!} @else {!! $row->description_name !!} @endif</p>
                </div>
              </div>
              <div class="content">
              <h4 class="mt-0 text-black">@if (Request::segment(1)=='en') {!! $row->name_en !!} @else {!! $row->name !!} @endif</h4>
                  <div class="mt-10"> <a href="{{ url(Setting::get('language').'/program/'.$row->id) }}" class="btn btn-theme-colored btn-sm">Read More</a> </div>
              </div>
            </div>          
          </div>
          @endforeach
        </div>
      </div>
    </section>
    
    <!-- Section: Blog -->
    <section>
      <div class="container pt-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="title text-black-666">Recent <span class="text-theme-colored"> Event</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <div class="owl-carousel-3col owl-nav-top mb-sm-80" data-dots="true">
              @foreach($event as $row)
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="{{ Theme::asset('images/event/front/'.$row->file) }}" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        {{--  <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>  --}}
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="{{ url(Setting::get('language').'/event/'.$row->id) }}">@if (Request::segment(1)=='en') {{ $row->name_en }} @else {{ $row->name }} @endif</a></h5>
                  <p class="text-left mb-20 mt-15 font-13">@if (Request::segment(1)=='en') {{ $row->description_name_en }} @else {{ $row->description_name }} @endif</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ url(Setting::get('language').'/event/'.$row->id) }}">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      {{--  <li><a class="text-theme-colored" href="#">Admin |</a></li>
                      <li><span class="text-theme-colored">Nov 13, 2017</span></li>  --}}
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div> 
              @endforeach     
            </div>
          </div>
        </div>
      </div>
    </section>
@stop

