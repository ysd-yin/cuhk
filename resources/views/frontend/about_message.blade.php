@extends('layouts.frontend')

@section('content')
  <div class="section-inner-banner wf-section">
    <div class="inner-banner-img-b">
      <div class="inner-banner-img codirectors-msg" data-ix="inner-banner-img"></div>
    </div>
    <div class="inner-banner-txt-b">
      <div>
        <div class="txt-mask">
          <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$about_message->title_1}}</h1>
        </div>
      </div>
      <div>
        <div class="txt-mask">
          <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$about_message->title_2}}</h1>
        </div>
      </div>
    </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
  </div>
  <div class="breadcrumb-b w-clearfix">
    <div class="breadcrumb">
      <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
      <div>About</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
      <div>Programme Co‐Directors&#x27; Message</div>
    </div>
  </div>
  <div class="section-content wf-section">
    <div class="container-full w-container">
      <div class="codirectors-msg-row">
        <div class="codirectors-msg-col">
          <div class="codirectors-msg-img-content" data-ix="codirectors-msg-img-content">
            <div class="codirectors-msg-b codirectors-bba" data-ix="home-about-img-b-bba">
              <div class="codirectors-msg-txt-b">
                <div class="codirectors-msg-txt bba" data-ix="home-about-img-txt">BBA</div>
              </div>
            </div>
            <div class="codirectors-msg-b codirectors-jd" data-ix="home-about-img-b-jd">
              <div class="codirectors-msg-txt-b">
                <div class="codirectors-msg-txt jd" data-ix="home-about-img-txt">JD</div>
              </div>
            </div>
            <div class="codirectors-msg-overlap-b" data-ix="home-about-overlap-b"><img src="{{ asset_frontend('images/home-about-overlap.svg') }}" loading="lazy" alt="" class="codirectors-msg-overlap-img">
              <div class="codirectors-overlap-txt">2 Degrees<br>in<br>5 Years</div>
            </div>
          </div>
          <div class="codirectors-msg-img-content-mobile" data-ix="codirectors-msg-img-content-mobile">
            <div class="codirectors-msg-b codirectors-bba" data-ix="home-about-img-b-bba-mobile">
              <div class="codirectors-msg-txt-b">
                <div class="codirectors-msg-txt bba" data-ix="home-about-img-txt">BBA</div>
              </div>
            </div>
            <div class="codirectors-msg-b codirectors-jd" data-ix="home-about-img-b-jd-mobile">
              <div class="codirectors-msg-txt-b">
                <div class="codirectors-msg-txt bba" data-ix="home-about-img-txt">JD</div>
              </div>
            </div>
            <div class="codirectors-msg-overlap-b" data-ix="home-about-overlap-b"><img src="{{ asset_frontend('images/home-about-overlap-mobile.svg') }}" loading="lazy" alt="" class="codirectors-msg-overlap-img">
              <div class="codirectors-overlap-txt">2 Degrees<br>in 5 Years</div>
            </div>
          </div>
        </div>
        <div class="codirectors-msg-col">
          <div data-ix="fade-in-from-bottom">
              {!! editor($about_message->description)!!}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wf-section">
    <div class="codirectors-msg-bottom-row" data-ix="codirectors-msg-bottom"><img src="{{ asset_frontend('images/codirectors-message-graphic02.svg') }}" loading="lazy" alt="" class="codirectors-msg-bottom-graphic02" data-ix="codirectors-msg-bottom-initial">
      <div class="codirectors-msg-bottom-col" data-ix="codirectors-msg-bottom-initial"><img src="{{ asset_frontend('images/codirectors-message-graphic01.svg') }}" loading="lazy" alt="" class="codirectors-msg-bottom-graphic01" data-ix="codirectors-msg-bottom-initial">
        @if($image = $about_message->getMedia('left_image'))
            <img src="{{ $image->getResizedImage(1000) }}" loading="lazy" sizes="(max-width: 991px) 100vw, 50vw" alt="" class="codirectors-msg-bottom-img">
        @endif
        <div class="codirectors-msg-bottom-txt-b codirectors-bottom-bba">
          <div class="content-name"><em>{{$about_message->left_name}}</em></div>
          {!! editor($about_message->left_post)!!}
        </div>
      </div>
      <div class="codirectors-msg-bottom-col" data-ix="codirectors-msg-bottom-initial"><img src="{{ asset_frontend('images/codirectors-message-graphic03.svg') }}" loading="lazy" alt="" class="codirectors-msg-bottom-graphic03" data-ix="codirectors-msg-bottom-initial">
        @if($image2 = $about_message->getMedia('right_image'))
            <img src="{{ $image2->getResizedImage(1000) }}" loading="lazy" sizes="(max-width: 991px) 100vw, 50vw" alt="" class="codirectors-msg-bottom-img">
        @endif
        <div class="codirectors-msg-bottom-txt-b codirectors-bottom-jd">
          <div class="content-name"><em>{{$about_message->right_name}}</em></div>
          {!! editor($about_message->right_post)!!}
        </div>
      </div>
    </div>
  </div>
@endsection
