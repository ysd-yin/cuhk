@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    <div class="inner-banner-img management" data-ix="inner-banner-img"></div>
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
  </div><img src="images/home-banner-mask.svg" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="index.html" class="breadcrumb-link">Home</a><img src="images/breadcrumb-arrow.svg" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>About</div><img src="images/breadcrumb-arrow.svg" loading="lazy" alt="" class="breadcrumb-arrow">
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
          <img src="{{$index['medias']['image'][0]['path']}}" loading="lazy" sizes="(max-width: 479px) 90vw, (max-width: 767px) 43vw, 27vw" alt="" class="img">
          @endif
          <div class="management-txt-b">
            <div class="content-name"><em>{{$index['name']}}</em></div>
            <div>{{$index['post']}}</div>
          </div>
          <div class="gradient-line management-line"></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
