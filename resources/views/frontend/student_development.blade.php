@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    <div class="inner-banner-img development" data-ix="inner-banner-img"></div>
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$student_development->title_1}}</h1>
      </div>
    </div>
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$student_development->title_2}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="index.html" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Student Enrichment</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Development and Experiential Learning</div>
  </div>
</div>
<div class="section-content wf-section"><img src="{{ asset_frontend('images/development-graphic05.svg') }}" loading="lazy" alt="" class="development-graphic08">
  <div class="container w-container">
    <div class="align-center" data-ix="fade-in-from-bottom">{!! editor($student_development->description) !!}</div>
  </div>
  <div class="container-full w-container">
    <div class="development-row">
      <div class="development-col" data-ix="fade-in-from-bottom">
        <div class="development-b"><img src="{{ asset_frontend('images/development-graphic01.svg') }}" loading="lazy" alt="" class="development-graphic01" data-ix="development-graphic-animate01"><img src="{{ asset_frontend('images/development-graphic02.svg') }}" loading="lazy" alt="" class="development-graphic02" data-ix="development-graphic-animate02">
          <div class="development-b01-row">
            <div class="development-b-border"></div>
            <div class="development-b01-col-img">
              <div class="development-b-img internships" style="background-image:url({{$student_development->getMedia('top_image')->getResizedImage(500)}})"></div>
              <div class="development-b01-title-b">
                <h2 class="txt-color-white">{{$student_development->top_title}}</h2>
                <div class="txt-color-white">{{$student_development->top_description}}</div>
              </div>
            </div>
            <div class="development-b01-col-txt">
              {!! editor($student_development->top_content) !!}
            </div>
          </div>
        </div>
      </div>
      @foreach ($student_development->content as $item)
      <div class="development-col half" data-ix="fade-in-from-bottom">
        <div class="development-b"><img src="{{ asset_frontend('images/development-graphic03.svg') }}" loading="lazy" alt="" class="development-graphic03" data-ix="development-graphic-animate01">
          <div class="development-b02-row">
            <div class="development-b-border"></div>
            <div class="development-b02-col-img">
              <div class="development-b-img career" style="background-image:url({{$item['medias']['image'][0]['path']}})"></div>
              <div class="development-b02-title-b">
                <h2 class="txt-color-white">{{$item['title']}}</h2>
              </div>
            </div>
            <div class="development-b02-col-txt">
              <div>{!! editor($item['content']) !!}</div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="development-col" data-ix="fade-in-from-bottom">
        <div class="development-b">
          <div class="development-b01-row">
            <div class="development-b-border"></div>
            <div class="development-b01-col-img">
              <div class="development-b-img student-advising" style="background-image:url({{$student_development->getMedia('bottom_image')->getResizedImage(500)}})"></div>
              <div class="development-b01-title-b">
                <h2 class="txt-color-white">{{$student_development->bottom_title}}</h2>
              </div>
            </div>
            <div class="development-b01-col-txt">
              <div>BBA-JD students enjoy an integrated student advising service jointly offered by CUHK Business School and CUHK LAW. An academic advisor from each Faculty as well as the BBA-JD Programme Team will provide guidance on both academic development and pastoral care, ensuring that you have to tools to create a dynamic and rewarding university experience for yourself. </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.student_enrichment .nav-dropdown-link-b a').eq(0).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
  </script>
@endsection