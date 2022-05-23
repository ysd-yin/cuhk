@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    <div class="inner-banner-img achievement" data-ix="inner-banner-img"></div>
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$student_achievement->title_1}}</h1>
      </div>
    </div>
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$student_achievement->title_2}}</h1>
      </div>
    </div>
  </div><img src="images/home-banner-mask.svg" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="index.html" class="breadcrumb-link">Home</a><img src="images/breadcrumb-arrow.svg" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Student Enrichment</div><img src="images/breadcrumb-arrow.svg" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Student Achievement and Experience</div>
  </div>
</div>
<div class="section-content no-overflow wf-section">
  <div class="container w-container">
    <div class="align-center">{!! editor($student_achievement->description) !!}</div>
  </div>
  <div class="container-full w-container">
    <div class="achievement-list-all">
      <div class="achievement-list w-clearfix" data-ix="fade-in-from-bottom">
        <div class="achievement-list-content-b">
          <div class="achievement-list-content sidemenu-list">
            <div class="achievement-list-scroll sidemenu-list">
              <div class="content-name"><strong><em>Jodie Li and Bianca Cheng<br>BBA-JD, Class of 2023</em></strong></div>
              <ul role="list" class="content-listing">
                <li>
                  <div class="txt-color-bk">Champion - Fidelity International Student Innovation Challenge 2020</div>
                </li>
              </ul>
            </div>
          </div>
          <div class="achievement-list-content-mask"></div>
          <div class="achievement-list-line"></div>
        </div>
        <div class="achievement-slider-b">
          <div data-delay="4000" data-animation="slide" class="achievement-slider w-slider" data-autoplay="true" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="w-slider-mask">
              <div class="achievement-slide w-slide"><img src="images/achievement-slider01-img012x.jpg" loading="lazy" sizes="(max-width: 991px) 90vw, 59vw" srcset="images/achievement-slider01-img012x-p-500.jpeg 500w, images/achievement-slider01-img012x-p-800.jpeg 800w, images/achievement-slider01-img012x-p-1080.jpeg 1080w, images/achievement-slider01-img012x.jpg 1600w" alt="" class="achievement-slide-img">
                <div class="achievement-img-txt">
                  <div>Champion in the Student Innovation Challenge Competition 2020</div>
                </div>
              </div>
            </div>
            <div class="achievement-slider-arrow-l w-slider-arrow-left"></div>
            <div class="achievement-slider-arrow-r w-slider-arrow-right"></div>
            <div id="achievement-slide-nav" class="achievement-slide-nav w-slider-nav w-round"></div>
          </div>
        </div>
      </div>
      <div class="achievement-list w-clearfix" data-ix="fade-in-from-bottom">
        <div class="achievement-list-content-b">
          <div class="achievement-list-content">
            <div class="achievement-list-scroll sidemenu-list">
              <div class="content-name"><strong><em>Ng Yee Yan<br>BBA-JD, Class of 2022</em></strong></div>
              <ul role="list" class="content-listing">
                <li>
                  <div class="txt-color-bk">Overseas exchange to University Southern California, USA in Year 2 Term 2</div>
                </li>
                <li>
                  <div class="txt-color-bk">Summer internship in Slaughter and May</div>
                </li>
                <li>
                  <div class="txt-color-bk">Summer internship in Morrison &amp; Foerster</div>
                </li>
              </ul>
            </div>
          </div>
          <div class="achievement-list-content-mask"></div>
          <div class="achievement-list-line"></div>
        </div>
        <div class="achievement-slider-b">
          <div data-delay="4000" data-animation="slide" class="achievement-slider w-slider" data-autoplay="true" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="w-slider-mask">
              <div class="achievement-slide w-slide"><img src="images/achievement-slider02-img012x.jpg" loading="lazy" sizes="(max-width: 991px) 90vw, 59vw" srcset="images/achievement-slider02-img012x-p-500.jpeg 500w, images/achievement-slider02-img012x-p-800.jpeg 800w, images/achievement-slider02-img012x-p-1080.jpeg 1080w, images/achievement-slider02-img012x.jpg 1600w" alt="" class="achievement-slide-img">
                <div class="achievement-img-txt">
                  <div>Overseas exchange to University Southern California</div>
                </div>
              </div>
              <div class="achievement-slide w-slide"><img src="images/achievement-slider02-img022x.jpg" loading="lazy" sizes="(max-width: 991px) 90vw, 59vw" srcset="images/achievement-slider02-img022x-p-500.jpeg 500w, images/achievement-slider02-img022x-p-800.jpeg 800w, images/achievement-slider02-img022x-p-1080.jpeg 1080w, images/achievement-slider02-img022x.jpg 1600w" alt="" class="achievement-slide-img">
                <div class="achievement-img-txt">
                  <div>Ng Yee Yan (BBA-JD, Class of 2022)</div>
                </div>
              </div>
              <div class="achievement-slide w-slide"><img src="images/achievement-slider02-img032x.jpg" loading="lazy" sizes="(max-width: 991px) 90vw, 59vw" srcset="images/achievement-slider02-img032x-p-500.jpeg 500w, images/achievement-slider02-img032x-p-800.jpeg 800w, images/achievement-slider02-img032x-p-1080.jpeg 1080w, images/achievement-slider02-img032x.jpg 1600w" alt="" class="achievement-slide-img">
                <div class="achievement-img-txt">
                  <div>Summer internship in Slaughter and May</div>
                </div>
              </div>
              <div class="achievement-slide w-slide"><img src="images/achievement-slider02-img042x.jpg" loading="lazy" sizes="(max-width: 991px) 90vw, 59vw" srcset="images/achievement-slider02-img042x-p-500.jpeg 500w, images/achievement-slider02-img042x-p-800.jpeg 800w, images/achievement-slider02-img042x-p-1080.jpeg 1080w, images/achievement-slider02-img042x.jpg 1600w" alt="" class="achievement-slide-img">
                <div class="achievement-img-txt">
                  <div>Summer internship in Morrison &amp; Foerster</div>
                </div>
              </div>
            </div>
            <div class="achievement-slider-arrow-l w-slider-arrow-left"></div>
            <div class="achievement-slider-arrow-r w-slider-arrow-right"></div>
            <div id="achievement-slide-nav" class="achievement-slide-nav w-slider-nav w-round"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section-content achievement wf-section">
  <div class="achievement-img-b" data-ix="home-growing-img-b"><img src="images/home-growing-graphic01.svg" loading="lazy" alt="" class="home-growing-graphic01" data-ix="home-growing-img-initial"><img src="images/home-growing-graphic02.svg" loading="lazy" alt="" class="home-growing-graphic02" data-ix="home-growing-img-initial"><img src="images/development-graphic01.svg" loading="lazy" alt="" class="achievement-graphic03" data-ix="home-growing-img-initial"><img src="images/home-growing-img012x.png" loading="lazy" sizes="(max-width: 479px) 45vw, 33vw" srcset="images/home-growing-img012x-p-500.png 500w, images/home-growing-img012x.png 960w" alt="" class="home-growing-img01" data-ix="home-growing-img-initial"><img src="images/home-growing-img032x.png" loading="lazy" sizes="(max-width: 479px) 67vw, 50vw" srcset="images/home-growing-img032x-p-500.png 500w, images/home-growing-img032x-p-800.png 800w, images/home-growing-img032x-p-1080.png 1080w, images/home-growing-img032x.png 1440w" alt="" class="home-growing-img03" data-ix="home-growing-img-initial"><img src="images/home-growing-img042x.png" loading="lazy" sizes="(max-width: 479px) 45vw, 33vw" srcset="images/home-growing-img042x-p-500.png 500w, images/home-growing-img042x-p-800.png 800w, images/home-growing-img042x.png 960w" alt="" class="home-growing-img04" data-ix="home-growing-img-initial"></div>
</div>
<script>
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.student_enrichment .nav-dropdown-link-b a').eq(1).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
  </script>
@endsection