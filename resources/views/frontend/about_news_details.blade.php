@extends('layouts.frontend')

@section('content')
<?php 
// echo "<pre>";
//   print_r($news[0]);
// echo "</pre>";
?>
<div class="section-content news-events-details wf-section">
  <div class="breadcrumb-b news-events-details w-clearfix">
    <div class="breadcrumb">
      <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
      <a href="/about-news-events" class="breadcrumb-link">News &amp; Events</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
      <div>{{$news[0]->title}}</div>
    </div>
  </div>
  <div class="news-events-details-heading-content">
    <div class="news-events-details-graphic-l" data-ix="news-events-details-graphic-l"><img src="{{ asset_frontend('images/news-events-details-graphic-l012x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-l01" data-ix="bg-graphic-initial"><img src="{{ asset_frontend('images/news-events-details-graphic-l032x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-l03" data-ix="bg-graphic-initial"><img src="{{ asset_frontend('images/news-events-details-graphic-l022x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-l02" data-ix="bg-graphic-initial"></div>
    <div class="news-events-details-graphic-r w-clearfix" data-ix="news-events-details-graphic-r"><img src="{{ asset_frontend('images/news-events-details-graphic-r012x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-r01" data-ix="bg-graphic-initial"><img src="{{ asset_frontend('images/news-events-details-graphic-r022x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-r03" data-ix="bg-graphic-initial"><img src="{{ asset_frontend('images/news-events-details-graphic-l022x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-r02" data-ix="bg-graphic-initial"></div>
    <div class="container-900 w-container">
      <div class="news-events-details-heading-b" data-ix="fade-in-from-bottom">
        <h1 class="news-events-details-heading">{{$news[0]->title}}</h1>
        <div>
          <?php 
            $date=date_create($news[0]->post_date);
              echo date_format($date,"d M Y");
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container-900 w-container" data-ix="fade-in-from-bottom">
    @if($image = $news[0]->getMedia('thumbnail'))
      <img src="{{$image->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, (max-width: 1279px) 81vw, (max-width: 1439px) 60vw, 100vw" alt="" class="news-events-details-img">
    @endif
    {!!editor($news[0]->content)!!}
    <div class="news-events-details-bottom">
      <div class="line-animate" data-ix="line-animate"></div>
      <a data-w-id="2a54ce15-4334-54db-672d-97f1b1ce4b13" href="/about-news-events" class="news-events-details-btn-back w-inline-block">
        <div class="news-events-details-btn-back-txt">Back to Listing</div>
        <div data-is-ix2-target="1" class="btn-back-img" data-w-id="2a54ce15-4334-54db-672d-97f1b1ce4b14" data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
      </a>
    </div>
  </div>
</div>
<script>
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.about_menu .nav-dropdown-link-b a').eq(5).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
  </script>
@endsection