@extends('layouts.frontend')

@section('content')
<style>
  @media only screen and (max-width: 991px) {
  .student-voices-slide-txt, .student-voices-content {
    -webkit-line-clamp: 4 !important;
    }
  }
  .student-voices-slide-txt, .student-voices-content{
    text-overflow: ellipsis;
    -webkit-line-clamp: 5;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    <div class="inner-banner-img student-voices" data-ix="inner-banner-img"></div>
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$student_voices_page->title}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="index.html" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Student Voices</div>
  </div>
</div>
<div class="section-content bg-student-voices wf-section">
  <div class="container-full w-container">
    <div class="heading-b">
      <div class="txt-mask">
        <h2 data-ix="txt-appear-from-bottom">Student’s Highlight</h2>
      </div>
    </div>
  </div>
  <div class="container w-container">
    <div data-delay="4000" data-animation="slide" class="student-voices-slider w-slider" data-autoplay="true" data-easing="ease" data-ix="student-voices-slider" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="600" data-infinite="true">
      <div class="student-voices-slide-mask w-slider-mask">
        @foreach ($student_highlight as $item)
        <div class="student-voices-slide w-slide" data-ix="student-voices-slide">
          <a href="/student-voices-details?id={{$item->id}}" class="student-voices-slide-b w-inline-block">
            <div class="student-voices-slide-row">
              <div class="student-voices-slide-img-b">
                <img src="{{$item->getMedia('image')->getResizedImage(500)}}" loading="lazy" sizes="(max-width: 479px) 73vw, (max-width: 767px) 36vw, (max-width: 1279px) 41vw, (max-width: 1439px) 33vw, 29vw" alt="" class="img"><img src="{{ asset_frontend('images/student-voices-slide-mask.svg') }}" loading="lazy" alt="" class="student-voices-slide-img-mask" data-ix="student-voices-slide-img-mask"></div>
              <div class="student-voices-slide-content-b"><img src="{{ asset_frontend('images/student-voices-slide-mask-mobile2x.png') }}" loading="lazy" alt="" class="student-voices-slide-img-mask-mobile" data-ix="student-voices-slide-img-mask-mobile">
                <div class="student-voices-slide-txt-b">
                  <div class="student-voices-slide-txt-quote"><img src="{{ asset_frontend('images/student-voices-graphic-quote.svg') }}" loading="lazy" alt="" class="student-voices-slide-quote">
                    <div class="student-voices-slide-txt">
                      {!! editor($item->description) !!}
                    </div>
                  </div>
                  <div class="student-voices-slide-txt-info">
                    <div class="content-name" data-ix="fade-in-from-left"><em>{{$item->name}}</em></div>
                    <ul role="list" class="w-list-unstyled">
                      <li>
                        <div class="txt-color-bk">{{$item->post}}</div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="gradient-line"></div>
          </a>
        </div>
        @endforeach
      </div>
      <div class="student-voices-slide-arrow-l w-slider-arrow-left"></div>
      <div class="student-voices-slide-arrow-r w-slider-arrow-right"></div>
      <div class="hidden w-slider-nav w-round"></div>
    </div>
  </div>
</div>
<div class="section-content wf-section">
  <div class="container-full w-container">
    <div class="student-voices-row">
      @foreach ($student_voices as $item)
      <div class="student-voices-col" data-ix="fade-in-from-bottom">
        <a href="/student-voices-details?id={{$item->id}}" class="student-voices-list-b w-inline-block"><img src="{{$item->getMedia('image')->getResizedImage(500)}}" loading="lazy" sizes="(max-width: 767px) 39vw, 18vw" alt="" class="student-voices-list-img">
          <div class="student-voices-list-content-b">
            <div class="student-voices-list-txt-b">
              <div class="student-voices-list-txt-quote"><img src="{{ asset_frontend('images/student-voices-graphic-quote.svg') }}" loading="lazy" alt="" class="student-voices-list-quote">
                <div class="student-voices-content">{!! editor($item->description) !!}</div>
              </div>
              <div class="student-voices-slide-txt-info">
                <div class="content-name"><em>{{$item->name}}</em></div>
                <div>{{$item->post}}</div>
              </div>
            </div>
            <div class="student-voices-content-line"></div>
          </div>
        </a>
      </div>
      @endforeach
      <div class="student-voices-expand" data-ix="student-voices-expand">
        <div class="student-voices-col" data-ix="fade-in-from-bottom">
          <a href="student-voices-details.html" class="student-voices-list-b w-inline-block"><img src="{{ asset_frontend('images/student-voices-img-max2x.jpg') }}" loading="lazy" sizes="(max-width: 767px) 39vw, 18vw" alt="" class="student-voices-list-img">
            <div class="student-voices-list-content-b">
              <div class="student-voices-list-txt-b">
                <div class="student-voices-list-txt-quote"><img src="{{ asset_frontend('images/student-voices-graphic-quote.svg') }}" loading="lazy" alt="" class="student-voices-list-quote">
                  <div>At first glance, I was impressed by the CUHK BBA-JD Programme as it is very eye-catching and distinctive. I wondered how business and law …</div>
                </div>
                <div class="student-voices-slide-txt-info">
                  <div class="content-name"><em>Max Chan</em></div>
                  <div>BBA-JD, Class of 2022</div>
                </div>
              </div>
              <div class="student-voices-content-line"></div>
            </div>
          </a>
        </div>
        <div class="student-voices-col" data-ix="fade-in-from-bottom">
          <a href="student-voices-details.html" class="student-voices-list-b w-inline-block"><img src="{{ asset_frontend('images/student-voices-img-rosie2x.jpg') }}" loading="lazy" sizes="(max-width: 767px) 39vw, 18vw" alt="" class="student-voices-list-img">
            <div class="student-voices-list-content-b">
              <div class="student-voices-list-txt-b">
                <div class="student-voices-list-txt-quote"><img src="{{ asset_frontend('images/student-voices-graphic-quote.svg') }}" loading="lazy" alt="" class="student-voices-list-quote">
                  <div>In addition to the packed study schedule being one of the features of the 5-year double degree programme, CUHK BBA-JD has …</div>
                </div>
                <div class="student-voices-slide-txt-info">
                  <div class="content-name"><em>Rosie Tang</em></div>
                  <div>BBA-JD, Class of 2023</div>
                </div>
              </div>
              <div class="student-voices-content-line"></div>
            </div>
          </a>
        </div>
        <div class="student-voices-col" data-ix="fade-in-from-bottom">
          <a href="student-voices-details.html" class="student-voices-list-b w-inline-block"><img src="{{ asset_frontend('images/student-voices-img-peony2x.jpg') }}" loading="lazy" sizes="(max-width: 767px) 39vw, 18vw" alt="" class="student-voices-list-img">
            <div class="student-voices-list-content-b">
              <div class="student-voices-list-txt-b">
                <div class="student-voices-list-txt-quote"><img src="{{ asset_frontend('images/student-voices-graphic-quote.svg') }}" loading="lazy" alt="" class="student-voices-list-quote">
                  <div>In my years in the CUHK BBA-JD Programme, I have built a solid foundation of practical knowledge and other transferrable skills …</div>
                </div>
                <div class="student-voices-slide-txt-info">
                  <div class="content-name"><em>Peony Leung</em></div>
                  <div>BBA-JD, Class of 2023</div>
                </div>
              </div>
              <div class="student-voices-content-line"></div>
            </div>
          </a>
        </div>
        <div class="student-voices-col" data-ix="fade-in-from-bottom">
          <a href="student-voices-details.html" class="student-voices-list-b w-inline-block"><img src="{{ asset_frontend('images/student-voices-img-ngyeeyan2x.jpg') }}" loading="lazy" sizes="(max-width: 767px) 39vw, 18vw" alt="" class="student-voices-list-img">
            <div class="student-voices-list-content-b">
              <div class="student-voices-list-txt-b">
                <div class="student-voices-list-txt-quote"><img src="{{ asset_frontend('images/student-voices-graphic-quote.svg') }}" loading="lazy" alt="" class="student-voices-list-quote">
                  <div>The CUHK BBA-JD Programme has been an exciting journey. With the guidance of my professors and friends, I have managed to …</div>
                </div>
                <div class="student-voices-slide-txt-info">
                  <div class="content-name"><em>Ng Yee Yan</em></div>
                  <div>BBA-JD, Class of 2022</div>
                </div>
              </div>
              <div class="student-voices-content-line"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="student-voices-btn-b" data-ix="fade-in-from-bottom">
        <a href="#" class="content-link-btn w-inline-block" data-ix="student-voices-btn-load">
          <div class="content-link-btn-hover"></div>
          <div class="content-link-btn-txt">Load More</div>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection