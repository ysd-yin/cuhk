@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    @if($image = $student_achievement->getMedia('top_banner'))
    <div class="inner-banner-img achievement" data-ix="inner-banner-img" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
    @endif
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
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Student Enrichment</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Student Achievement and Experience</div>
  </div>
</div>
<div class="section-content no-overflow wf-section">
  <div class="container w-container">
    <div class="align-center">{!! editor($student_achievement->description) !!}</div>
  </div>
  <div class="container-full w-container">
    <div class="achievement-list-all">
      @foreach($student_achievement_post as $item)
      <div class="achievement-list w-clearfix" data-ix="fade-in-from-bottom">
        <div class="achievement-list-content-b">
          <div class="achievement-list-content">
            <div class="achievement-list-scroll sidemenu-list">
              <div class="content-name"><strong><em>{{$item['title']}}<br>{{$item['course']}}</em></strong></div>
              {!! editor($item['description']) !!}
            </div>
          </div>
          <div class="achievement-list-content-mask"></div>
          <div class="achievement-list-line"></div>
        </div>
        <div class="achievement-slider-b">
          <div data-delay="4000" data-animation="slide" class="achievement-slider w-slider" data-autoplay="true" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="w-slider-mask">
              <?php 
              $image_count = 0;
              ?>
              @foreach($item->image_list as $item2)
              <?php
              $image_count = $loop->index;
              ?>
              <div class="achievement-slide w-slide"><img src="{{$item2['medias']['image'][0]['path']}}" loading="lazy" sizes="(max-width: 991px) 90vw, 59vw" alt="" class="achievement-slide-img">
                @if(isset($item2['title']))
                <div class="achievement-img-txt">
                  <div>{{$item2['title']}}</div>
                </div>
                @endif      
              </div>
              @endforeach
            </div>
            <div class="achievement-slider-arrow-l w-slider-arrow-left"></div>
            <div class="achievement-slider-arrow-r w-slider-arrow-right"></div>
              <div id="achievement-slide-nav" class="achievement-slide-nav w-slider-nav w-round"></div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<div class="section-content achievement wf-section">
  <div class="achievement-img-b" data-ix="home-growing-img-b"><img src="{{ asset_frontend('images/home-growing-graphic01.svg') }}" loading="lazy" alt="" class="home-growing-graphic01" data-ix="home-growing-img-initial"><img src="{{ asset_frontend('images/home-growing-graphic02.svg') }}" loading="lazy" alt="" class="home-growing-graphic02" data-ix="home-growing-img-initial"><img src="{{ asset_frontend('images/development-graphic01.svg') }}" loading="lazy" alt="" class="achievement-graphic03" data-ix="home-growing-img-initial">
    @if($image = $student_achievement->getMedia('bottom_banner_1'))
      <img src="{{ $image->getResizedImage(2000) }}" loading="lazy" sizes="(max-width: 479px) 45vw, 33vw" alt="" class="home-growing-img01" data-ix="home-growing-img-initial">
    @endif
    @if($image = $student_achievement->getMedia('bottom_banner_2'))
      <img src="{{ $image->getResizedImage(2000) }}" loading="lazy" sizes="(max-width: 479px) 67vw, 50vw" alt="" class="home-growing-img03" data-ix="home-growing-img-initial">
    @endif
    @if($image = $student_achievement->getMedia('bottom_banner_3'))
      <img src="{{ $image->getResizedImage(2000) }}" loading="lazy" sizes="(max-width: 479px) 45vw, 33vw" alt="" class="home-growing-img04" data-ix="home-growing-img-initial"></div>
    @endif
</div>
<script>
  window.onload = (event) => {
    for(var i=0;i<$('.achievement-list').length;i++){
      if($('.achievement-list').eq(i).find('.achievement-slide').length <= 1){
        $('.achievement-list').eq(i).find('#achievement-slide-nav').hide();
        $('.achievement-list').eq(i).find('.achievement-slider-arrow-l').hide();
        $('.achievement-list').eq(i).find('.achievement-slider-arrow-r').hide();
      }
    }
  };
  // $('.achievement-slide').
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.student_enrichment .nav-dropdown-link-b a').eq(1).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
  </script>
@endsection