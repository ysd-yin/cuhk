@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    @if($image = $about_overview->getMedia('top_banner'))
      <div class="inner-banner-img overview" data-ix="inner-banner-img" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
    @endif
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$about_overview->banner_title_1}}</h1>
      </div>
    </div>
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$about_overview->banner_title_2}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>About</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Programme Overview</div>
  </div>
</div>
<div class="section-content bg-map wf-section">
  <div class="container w-container">
    <div class="overview-txt-b" data-ix="fade-in-from-bottom">
      <div class="heading2-b">
        <div>
          <div class="txt-mask">
            <h2>{{$about_overview->first_title_1}}</h2>
          </div>
        </div>
        <div>
          <div class="txt-mask">
            <h2 class="txt-stroke">{{$about_overview->first_title_2}}</h2>
          </div>
        </div>
      </div>
      <div>{!! editor($about_overview->first_description)!!}</div><img src="{{ asset_frontend('images/overview-logos2x.png') }}" loading="lazy" width="300" alt="" class="overview-logo">
    </div>
    <div class="home-about-img-content" data-ix="home-about-img-content">
      <div class="home-about-img-b img-bba" data-ix="home-about-img-b-bba">
        <div class="home-about-img-border"></div><img src="{{ asset_frontend('images/home-about-bba-txt.svg') }}" loading="lazy" alt="" class="home-about-img-txt-rotate" data-ix="home-about-img-txt-rotate">
        <div class="home-about-img-txt-b">
          <div class="home-about-img-txt" data-ix="home-about-img-txt">BBA</div>
        </div>
      </div>
      <div class="home-about-img-b img-jd" data-ix="home-about-img-b-jd">
        <div class="home-about-img-border"></div><img src="{{ asset_frontend('images/home-about-jd-txt.svg') }}" loading="lazy" alt="" class="home-about-img-txt-rotate" data-ix="home-about-img-txt-rotate">
        <div class="home-about-img-txt-b">
          <div class="home-about-img-txt" data-ix="home-about-img-txt">JD</div>
        </div>
      </div>
      <div class="home-about-overlap-b" data-ix="home-about-overlap-b"><img src="{{ asset_frontend('images/home-about-overlap.svg') }}" loading="lazy" alt="" class="home-about-overlap-img">
        <div class="home-about-overlap-txt">2 Degrees<br>in<br>5 Years</div>
      </div>
    </div>
    <div class="codirectors-msg-img-content-mobile" data-ix="home-about-img-content-mobile">
      <div class="home-about-img-b img-bba" data-ix="home-about-img-b-bba-mobile">
        <div class="home-about-img-border"></div><img src="{{ asset_frontend('images/home-about-bba-txt-mobile.svg') }}" loading="lazy" alt="" class="home-about-img-txt-rotate bba-mobile" data-ix="home-about-img-txt-rotate-mobile-jd">
        <div class="home-about-img-txt-b">
          <div class="home-about-img-txt" data-ix="home-about-img-txt">BBA</div>
        </div>
      </div>
      <div class="home-about-img-b img-jd" data-ix="home-about-img-b-jd-mobile">
        <div class="home-about-img-border"></div><img src="{{ asset_frontend('images/home-about-jd-txt-mobile.svg') }}" loading="lazy" alt="" class="home-about-img-txt-rotate jd-mobile" data-ix="home-about-img-txt-rotate-mobile-bba">
        <div class="home-about-img-txt-b">
          <div class="home-about-img-txt" data-ix="home-about-img-txt">JD</div>
        </div>
      </div>
      <div class="home-about-overlap-b" data-ix="home-about-overlap-b"><img src="{{ asset_frontend('images/home-about-overlap-mobile.svg') }}" loading="lazy" alt="" class="home-about-overlap-img">
        <div class="home-about-overlap-txt">2 Degrees<br>in 5 Years</div>
      </div>
    </div>
    <div data-ix="fade-in-from-bottom">{!! editor($about_overview->second_description)!!}</div>
  </div>
</div>
<div class="overview-bottom w-clearfix">
  <div class="overview-img-b">
    @if($image = $about_overview->getMedia('bottom_banner'))
    <div class="overview-img" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
    @endif
  </div>
  <div class="overview-title-b">
    <div>
      <div class="txt-mask">
        <h2 class="txt-stroke-white">{{$about_overview->third_title_1}}</h2>
      </div>
    </div>
    <div>
      <div class="txt-mask">
        <h2 class="txt-stroke-with-whitebg">{{$about_overview->third_title_2}}</h2>
      </div>
    </div>
  </div>
  <div class="w-clearfix">
    <div class="overview-bottom-content-b">
      <div class="section-content home-learn wf-section">
        <div class="overview-bottom-txt-b" data-ix="fade-in-from-left">
          <div class="overview-bottom-icon-b">
            <div class="overview-bottom-icon" data-w-id="268d51a8-1221-b2a5-a893-7a1bb3c8690a" data-animation-type="lottie" data-src="{{ asset_frontend('documents/overview-icon01.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="2.5" data-duration="0"></div>
          </div>
          <div class="overview-bottom-txt">{!! editor($about_overview->icon_description_1) !!}</div>
        </div>
        <div class="overview-bottom-txt-b" data-ix="fade-in-from-left">
          <div class="overview-bottom-icon-b">
            <div class="overview-bottom-icon" data-w-id="73c48506-151a-3607-9df7-1d646b64e4d7" data-animation-type="lottie" data-src="{{ asset_frontend('documents/home-about-icon01.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="2.0020019204587935" data-duration="0"></div>
          </div>
          <div class="overview-bottom-txt">{!! editor($about_overview->icon_description_2) !!}</div>
        </div>
        <div class="overview-bottom-txt-b" data-ix="fade-in-from-left">
          <div class="overview-bottom-icon-b">
            <div class="overview-bottom-icon">
              <div class="overview-bottom-icon" data-w-id="84446eca-1220-91e5-7a8e-6e3e292bbac7" data-animation-type="lottie" data-src="{{ asset_frontend('documents/overview-icon02.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="4.004003840917587" data-duration="0"></div>
            </div>
          </div>
          <div class="overview-bottom-txt">{!! editor($about_overview->icon_description_3) !!}</div>
        </div>
        <div class="overview-bottom-txt-b" data-ix="fade-in-from-left">
          <div class="overview-bottom-icon-b">
            <div class="overview-bottom-icon">
              <div class="overview-bottom-icon" data-w-id="eb237867-f0b2-1407-5fbb-56cb1530ecf0" data-animation-type="lottie" data-src="{{ asset_frontend('documents/overview-icon03.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="4.004003840917587" data-duration="0"></div>
            </div>
          </div>
          <div class="overview-bottom-txt">{!! editor($about_overview->icon_description_4) !!}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.about_menu .nav-dropdown-link-b a').eq(1).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
  </script>
@endsection
