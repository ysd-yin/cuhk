@extends('layouts.frontend')

@section('content')
<style>
  @media only screen and (max-width: 991px) {
  .student-voices-list-txt-quote{
    -webkit-line-clamp: 4 !important;
    }
  }
  .student-voices-list-txt-quote{
    text-overflow: ellipsis;
    -webkit-line-clamp: 5;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
<div class="section-content student-voices-details wf-section">
  <div class="breadcrumb-b news-events-details w-clearfix">
    <div class="breadcrumb">
      <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
      <a href="/student-voices" class="breadcrumb-link">Student Voices</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
      <div>{{$student_voices_details[0]['name']}}</div>
    </div>
  </div>
  <div class="student-voices-details-graphic-l" data-ix="news-events-details-graphic-l"><img src="{{ asset_frontend('images/news-events-details-graphic-l012x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-l01" data-ix="bg-graphic-initial"><img src="{{ asset_frontend('images/news-events-details-graphic-l032x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-l03" data-ix="bg-graphic-initial"><img src="{{ asset_frontend('images/news-events-details-graphic-l022x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-l02" data-ix="bg-graphic-initial"></div>
  <div class="student-voices-details-graphic-r w-clearfix" data-ix="news-events-details-graphic-r"><img src="{{ asset_frontend('images/news-events-details-graphic-r012x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-r01" data-ix="bg-graphic-initial"><img src="{{ asset_frontend('images/news-events-details-graphic-r022x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-r03" data-ix="bg-graphic-initial"><img src="{{ asset_frontend('images/news-events-details-graphic-l022x.svg') }}" loading="lazy" alt="" class="news-events-details-graphic-r02" data-ix="bg-graphic-initial"></div>
  <div class="container-900 w-container" data-ix="fade-in-from-bottom">
    <div class="student-voices-details-b">
      <div class="student-voices-details-img"><img src="{{$student_voices_details[0]->getMedia('image')->getResizedImage(500)}}" loading="lazy" sizes="(max-width: 479px) 54vw, (max-width: 767px) 36vw, (max-width: 991px) 39vw, (max-width: 1279px) 35vw, (max-width: 1439px) 26vw, 100vw" alt="" class="img"><img src="{{ asset_frontend('images/student-voices-slide-mask-mobile2x.png') }}" loading="lazy" alt="" class="student-voices-details-img-mask"></div>
      <div class="student-voices-details-content-b">
        <div class="student-voices-details-txt-b">
          <div class="content-name"><em>{{$student_voices_details[0]['title']}}</em></div>
          <p>{!! editor($student_voices_details[0]['post']) !!}</p>
          <div class="student-voices-details-txt-quote"><img src="{{ asset_frontend('images/student-voices-graphic-quote.svg') }}" loading="lazy" alt="" class="student-voices-details-quote">
            <div>{!! editor($student_voices_details[0]['description']) !!}</div>
          </div>
        </div>
        <div class="student-voices-content-line"></div>
      </div>
      <div class="student-voices-details-btn-back-b">
        <a data-w-id="a2ca07b1-9e3b-5dc4-6c13-d4e43c84613b" href="/student-voices" class="btn-arrow w-inline-block">
          <div data-is-ix2-target="1" class="img" data-w-id="a2ca07b1-9e3b-5dc4-6c13-d4e43c84613c" data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="section-content wf-section">
  <div class="container-full w-container">
    <div class="heading2-b">
      <div class="align-center">
        <div class="txt-mask">
          <h2 data-ix="txt-appear-from-bottom">More Student Experience</h2>
        </div>
      </div>
    </div>
    <div data-delay="4000" data-animation="slide" class="student-voices-details-slider w-slider" data-autoplay="false" data-easing="ease" data-ix="fade-in-from-bottom" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
      <div class="student-voices-details-slide-mask w-slider-mask">
        @foreach ($student_voices as $item)
        <div class="student-voices-details-slide w-slide">
          <a href="/student-voices-details?id={{$item->id}}" aria-current="page" class="student-voices-list-b w-inline-block w--current"><img src="{{$item->getMedia('image')->getResizedImage(500)}}" loading="lazy" sizes="(max-width: 767px) 39vw, 18vw" alt="" class="student-voices-list-img">
            <div class="student-voices-list-content-b">
              <div class="student-voices-list-txt-b">
                <div class="student-voices-list-txt-quote"><img src="{{ asset_frontend('images/student-voices-graphic-quote.svg') }}" loading="lazy" alt="" class="student-voices-list-quote">
                  <div>{!! editor($item->description) !!}</div>
                </div>
                <div class="student-voices-slide-txt-info">
                  <div class="content-name"><em>{{$item->title}}</em></div>
                  <div>{!! editor($item->post) !!}</div>
                </div>
              </div>
              <div class="student-voices-content-line"></div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
      <div class="hidden w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="hidden w-slider-arrow-right">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="student-voices-details-slider-nav w-slider-nav w-round"></div>
    </div>
  </div>
</div>
@endsection