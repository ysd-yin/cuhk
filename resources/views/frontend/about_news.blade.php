@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    @if($image = $news_page->getMedia('top_banner'))
      <div class="inner-banner-img news-events" data-ix="inner-banner-img" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
    @endif
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$news_page->news_title}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>About</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>News &amp; Events</div>
  </div>
</div>
<div class="section-content wf-section">
  <div class="container-full w-container">
    <div class="listing-content-b">
      @foreach($about_news as $index)
      <div class="news-events-listing-b">
        <a href="about-news-events-details?id={{$index->id}}" class="news-events-listing w-inline-block" data-ix="news-events-listing">
          <div class="listing-hover-bg"></div><img src="{{ asset_frontend('images/listing-graphic.svg') }}" loading="lazy" alt="" class="listing-graphic"><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-hover">
          <div class="news-events-col-l">
            <?php
              $date=date_create($index->post_date);
              echo date_format($date,"d M Y");
            ?></div>
          <div class="news-events-col-r">
            <div>{{$index->title}}</div>
            <div class="news-events-line"></div>
            <div class="news-events-line-hover"></div>
          </div><img src="{{ asset_frontend('images/arrow-more.svg') }}" loading="lazy" alt="" class="listing-arrow"><img src="{{ asset_frontend('images/arrow-more-hover.svg') }}" loading="lazy" alt="" class="listing-arrow-hover">
        </a>
      </div>
      @endforeach
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