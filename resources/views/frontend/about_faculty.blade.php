@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    <div class="inner-banner-img faculty" data-ix="inner-banner-img"></div>
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$about_faculty->title_1}}</h1>
      </div>
    </div>
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$about_faculty->title_2}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>About</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>International Academic Faculty</div>
  </div>
</div>
<div class="section-content bg-faculty wf-section">
  <div class="container w-container">
    <div class="align-center" data-ix="fade-in-from-bottom">
      {!! editor($about_faculty->first_description) !!}
    </div>
  </div>
  <div class="container-full w-container">
    <div class="faculty-row" data-ix="faculty-row">
      <div class="faculty-col faculty-col-l" data-ix="faculty-col-l">
        <div class="faculty-b">
          <div class="faculty-txt-b" data-ix="faculty-txt-b"><img src="{{ asset_frontend('images/international-academic-faculty-icon01.svg') }}" loading="lazy" alt="">
            <div class="faculty-txt">{{$about_faculty->image_1}}</div>
          </div>
        </div>
      </div>
      <div class="faculty-col">
        <div class="faculty-b">
          <div class="faculty-txt-b" data-ix="faculty-txt-b"><img src="{{ asset_frontend('images/international-academic-faculty-icon02.svg') }}" loading="lazy" alt="">
            <div class="faculty-txt">{{$about_faculty->image_2}}</div>
          </div>
        </div>
      </div>
      <div class="faculty-col faculty-col-r" data-ix="faculty-col-r">
        <div class="faculty-b">
          <div class="faculty-txt-b" data-ix="faculty-txt-b"><img src="{{ asset_frontend('images/international-academic-faculty-icon03.svg') }}" loading="lazy" alt="">
            <div class="faculty-txt">{{$about_faculty->image_3}}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="faculty-row-mobile">
      <div class="faculty-col faculty-col-l" data-ix="fade-in-from-bottom">
        <div class="faculty-b">
          <div class="faculty-txt-b"><img src="{{ asset_frontend('images/international-academic-faculty-icon01.svg') }}" loading="lazy" alt="">
            <div class="faculty-txt">{{$about_faculty->image_1}}</div>
          </div>
        </div>
      </div>
      <div class="faculty-col" data-ix="fade-in-from-bottom">
        <div class="faculty-b">
          <div class="faculty-txt-b"><img src="{{ asset_frontend('images/international-academic-faculty-icon02.svg') }}" loading="lazy" alt="">
            <div class="faculty-txt">{{$about_faculty->image_2}}</div>
          </div>
        </div>
      </div>
      <div class="faculty-col faculty-col-r">
        <div class="faculty-b" data-ix="fade-in-from-bottom">
          <div class="faculty-txt-b"><img src="{{ asset_frontend('images/international-academic-faculty-icon03.svg') }}" loading="lazy" alt="">
            <div class="faculty-txt">{{$about_faculty->image_3}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wf-section">
  <div class="faculty-bottom-row" data-ix="faculty-bottom-row"><img src="{{ asset_frontend('images/international-academic-faculty-graphic02.svg') }}" loading="lazy" alt="" class="faculty-bottom-graphic02" data-ix="faculty-bottom-scroll-initial">
    <a data-w-id="56fbd2f8-268b-81e6-007f-f751f33b1400" href="{{$about_faculty->url_1}}" target="_blank" class="faculty-bottom-col w-inline-block" data-ix="faculty-bottom-scroll-initial">
      <div class="faculty-bottom-img-b"><img src="{{ asset_frontend('images/international-academic-faculty-graphic03.svg') }}" loading="lazy" alt="" class="faculty-bottom-graphic03" data-ix="faculty-bottom-scroll-initial"><img src="{{ asset_frontend('images/international-academic-faculty-img-bba2x.png') }}" loading="lazy" sizes="(max-width: 991px) 100vw, 50vw" alt="" class="faculty-bottom-img"></div>
      <div class="faculty-bottom-txt-b faculty-bottom-bba">
        <div class="faculty-bottom-txt-row">
          <div class="faculty-bottom-txt-col">
            <div class="content-name">{!! editor($about_faculty->url_title_1) !!}</div>
          </div>
          <div data-is-ix2-target="1" class="img faculty-bottom-btn" data-w-id="22322b97-bf5f-f858-7add-d420a245173a" data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
        </div>
      </div>
    </a>
    <a data-w-id="71c7f29e-71db-4892-f09d-4cec181d1cd6" href="{{$about_faculty->url_2}}" target="_blank" class="faculty-bottom-col w-inline-block" data-ix="faculty-bottom-scroll-initial">
      <div class="faculty-bottom-img-b"><img src="{{ asset_frontend('images/international-academic-faculty-graphic01.svg') }}" loading="lazy" alt="" class="faculty-bottom-graphic01" data-ix="faculty-bottom-scroll-initial"><img src="{{ asset_frontend('images/international-academic-faculty-img-law2x.png') }}" loading="lazy" sizes="(max-width: 991px) 100vw, 50vw" alt="" class="faculty-bottom-img"></div>
      <div class="faculty-bottom-txt-b faculty-bottom-jd">
        <div class="faculty-bottom-txt-row">
          <div class="faculty-bottom-txt-col">
            <div class="content-name">{!! editor($about_faculty->url_title_2) !!}</div>
          </div>
          <div data-is-ix2-target="1" class="img faculty-bottom-btn" data-w-id="420293cc-4406-84ef-0d64-d3b2c7fb4a36" data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
        </div>
      </div>
    </a>
  </div>
</div>
<script>
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.about_menu .nav-dropdown-link-b a').eq(3).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
  </script>
@endsection