@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    <div class="inner-banner-img career" data-ix="inner-banner-img"></div>
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$career_prospects->title}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Career Prospects</div>
  </div>
</div>
<div class="section-content bg-career wf-section">
  <div class="container w-container">
    <div class="align-center" data-ix="fade-in-from-bottom">{!! editor($career_prospects->description) !!}</div>
  </div>
</div>
<div class="section-content bg-home-career wf-section">
  <div data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5ad0" class="career-content-b">
    <div class="career-title-b">
      <div class="career-title-txt-b">
        <div class="txt-mask">
          <h2 class="career-title-heading01" data-ix="txt-appear-from-bottom">{{$career_prospects->bottom_title}}</h2>
        </div>
        <div class="career-title-txt" data-ix="fade-in-from-bottom">{{$career_prospects->bottom_description}}</div>
      </div>
    </div>
    <div data-is-ix2-target="1" class="career-line" data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5adc" data-animation-type="lottie" data-src="{{ asset_frontend('documents/home-career-line.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="10" data-duration="0" data-ix2-initial-state="0"></div>
    <div class="career-line-mobile" data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5add" data-animation-type="lottie" data-src="{{ asset_frontend('documents/home-career-line-mobile.json') }}" data-loop="0" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="10" data-duration="0"></div>
    <div data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5ade" class="career-txt-b-large _01">
      <div class="career-txt-bg" data-ix="home-career-txt-bg03">
        <div class="career-txt-b-border"></div>
        <div class="career-txt"><img src="{{$career_prospects->getMedia('ball_1')->getResizedImage(200)}}" loading="lazy" alt="" class="career-icon-large">
          <div>{{$career_prospects->ball_1_text}}</div>
        </div>
      </div>
    </div>
    <div data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5ae3" class="career-txt-b-small _02">
      <div class="career-txt-bg" data-ix="home-career-txt-bg03">
        <div class="career-txt-b-border"></div>
        <div class="career-txt"><img src="{{$career_prospects->getMedia('ball_2')->getResizedImage(200)}}" loading="lazy" alt="" class="career-icon-small">
          <div>{{$career_prospects->ball_2_text}}</div>
        </div>
      </div>
    </div>
    <div data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5ae8" class="career-txt-b-large _03">
      <div class="career-txt-bg" data-ix="home-career-txt-bg03">
        <div class="career-txt-b-border"></div>
        <div class="career-txt"><img src="{{$career_prospects->getMedia('ball_3')->getResizedImage(200)}}" loading="lazy" alt="" class="career-icon-large">
          <div>{{$career_prospects->ball_3_text}}</div>
        </div>
      </div>
    </div>
    <div data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5aed" class="career-txt-b-large _04">
      <div class="career-txt-bg" data-ix="home-career-txt-bg03">
        <div class="career-txt-b-border"></div>
        <div class="career-txt"><img src="{{$career_prospects->getMedia('ball_4')->getResizedImage(200)}}" loading="lazy" alt="" class="career-icon-large">
          <div>{{$career_prospects->ball_4_text}}</div>
        </div>
      </div>
    </div>
    <div data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5af2" class="career-txt-b-small _05">
      <div class="career-txt-bg" data-ix="home-career-txt-bg03">
        <div class="career-txt-b-border"></div>
        <div class="career-txt"><img src="{{$career_prospects->getMedia('ball_5')->getResizedImage(200)}}" loading="lazy" alt="" class="career-icon-small">
          <div>{{$career_prospects->ball_5_text}}</div>
        </div>
      </div>
    </div>
    <div data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5af7" class="career-txt-b-large _06">
      <div class="career-txt-bg" data-ix="home-career-txt-bg03">
        <div class="career-txt-b-border"></div>
        <div class="career-txt"><img src="{{$career_prospects->getMedia('ball_6')->getResizedImage(200)}}" loading="lazy" alt="" class="career-icon-large">
          <div>{{$career_prospects->ball_6_text}}</div>
        </div>
      </div>
    </div>
    <div data-w-id="ae470fae-aaa6-2a04-179e-a425403644df" class="career-txt-b-large _07">
      <div class="career-txt-bg" data-ix="home-career-txt-bg03">
        <div class="career-txt-b-border"></div>
        <div class="career-txt"><img src="{{$career_prospects->getMedia('ball_7')->getResizedImage(200)}}" loading="lazy" alt="" class="career-icon-large">
          <div>{{$career_prospects->ball_7_text}}</div>
        </div>
      </div>
    </div>
    <div data-w-id="f083adb3-303e-6b9e-ed36-59e2ae88e2e7" class="career-txt-b-large _08">
      <div class="career-txt-bg" data-ix="home-career-txt-bg03">
        <div class="career-txt-b-border"></div>
        <div class="career-txt"><img src="{{$career_prospects->getMedia('ball_8')->getResizedImage(200)}}" loading="lazy" alt="" class="career-icon-large">
          <div>{{$career_prospects->ball_8_text}}</div>
        </div>
      </div>
    </div>
    <div data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5b06" class="career-graphic _01"><img src="{{ asset_frontend('images/home-career-dot.svg') }}" loading="lazy" alt="" class="img" data-ix="home-career-graphic-img01"></div>
    <div data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5b08" class="career-graphic _02"><img src="{{ asset_frontend('images/home-career-dot.svg') }}" loading="lazy" alt="" class="img" data-ix="home-career-graphic-img02"></div>
    <div data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5b0a" class="career-graphic _03"><img src="{{ asset_frontend('images/home-career-dot.svg') }}" loading="lazy" alt="" class="img" data-ix="home-career-graphic-img02"></div>
    <div data-w-id="32e29eaf-c9de-4fbd-9610-1ac64a4e5b0c" class="career-graphic _04"><img src="{{ asset_frontend('images/home-career-dot.svg') }}" loading="lazy" alt="" class="img" data-ix="home-career-graphic-img01"></div>
  </div>
</div>
@endsection