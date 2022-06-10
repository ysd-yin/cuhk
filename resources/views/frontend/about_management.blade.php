@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    @if($image = $about_management->getMedia('top_banner'))
      <div class="inner-banner-img management" data-ix="inner-banner-img" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
    @endif
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$about_management->title_1}}</h1>
      </div>
    </div>
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$about_management->title_2}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>About</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Programme Management</div>
  </div>
</div>
<div class="section-content wf-section">
  <div class="container-full w-container">
    <div class="management-row">
      @foreach ($about_management->post as $index)
      <div class="management-col">
        <div class="management-b" data-ix="card-scroll-appear">
          @if($index['medias'])
          <img src="{{$index['medias']['image'][0]['path']}}" loading="lazy" alt="" class="img">
          @endif
          <div class="management-txt-b">
            <div class="content-name"><em>{{$index['name']}}</em></div>
            <div>{!! editor($index['post']) !!}</div>
          </div>
          <div class="gradient-line management-line"></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<script>
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.about_menu .nav-dropdown-link-b a').eq(2).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
  </script>
@endsection
