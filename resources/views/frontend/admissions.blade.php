@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    @if($image = $admissions->getMedia('top_banner'))
      <div class="inner-banner-img admission" data-ix="inner-banner-img" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
    @endif
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$admissions->title}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Admissions</div>
  </div>
</div>
<div class="section-content wf-section">
  <div class="container w-container">
    <div class="align-center m-align-left" data-ix="fade-in-from-bottom">{!! editor($admissions->description) !!}</div>
  </div>
  <div class="container-full w-container">
    <div class="admission-list">
      <div class="admission-row">
        <div class="admission-l">
          <div class="admission-l-b" data-ix="card-scroll-appear">
            <div class="admission-l-border"></div>
            <div class="admission-l-txt-b">
              <div class="admission-l-txt01">JUPAS</div>
              <div class="admission-l-txt02">Code: {{$admissions->jupas_code}}</div>
            </div>
            <div class="admission-l-btn-b">
              <a data-w-id="b382882b-6a90-b3e7-cfc1-2a1bb703c7f7" href="{{$admissions->url}}" class="admission-l-btn w-inline-block">
                <div>Apply Now</div>
                <div data-is-ix2-target="1" class="admission-l-btn-arrow" data-w-id="b382882b-6a90-b3e7-cfc1-2a1bb703c7fb" data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow-white.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
              </a>
            </div>
          </div>
        </div>
        <div class="admission-r-b" data-ix="fade-in-from-bottom">
          <p>{!! editor($admissions->jupas_description) !!}</p>
          <div class="subtitle">{!! editor($admissions->jupas_requirements) !!}</div>
          <div class="tb admission">
            <div class="tb-row bg-gold">
              <div class="tb-col admission01">
                <div><strong>Subject</strong></div>
              </div>
              <div class="tb-col admission02">
                <div><strong>Minimum Score (Weighting)</strong></div>
              </div>
            </div>
            @foreach ($admissions->jupas_details as $item)
            <div class="tb-row">
              <div class="tb-col admission01">
                <div>{{$item['subject']}}</div>
              </div>
              <div class="tb-col admission02">
                <div>{{$item['score']}}</div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="admission-list">
      <div class="admission-row">
        <div class="admission-l">
          <div class="admission-l-b" data-ix="card-scroll-appear">
            <div class="admission-l-border"></div>
            <div class="admission-l-txt-b">
              <div class="admission-l-txt02">{{$admissions->non_jupas_title}}</div>
            </div>
            <div class="admission-l-btn-b">
              <a data-w-id="88af4511-1997-6b5f-7d39-6ff04b8fe1fc" href="{{$admissions->non_jupas_url}}" class="admission-l-btn w-inline-block">
                <div><strong>{{$admissions->apply_non_jupas_title}}</strong></div>
                <div data-is-ix2-target="1" class="admission-l-btn-arrow" data-w-id="88af4511-1997-6b5f-7d39-6ff04b8fe1ff" data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow-white.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
              </a>
              <div class="admission-l-line"></div>
              <a data-w-id="67a60c37-ee39-e17b-69b2-d7bf485b83e5" href="{{$admissions->apply_internal_url}}" class="admission-l-btn w-inline-block">
                <div><strong>{{$admissions->apply_internal_title}}</strong></div>
                <div data-is-ix2-target="1" class="admission-l-btn-arrow" data-w-id="67a60c37-ee39-e17b-69b2-d7bf485b83e9" data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow-white.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
              </a>
            </div>
          </div>
        </div>
        <div class="admission-r-b" data-ix="fade-in-from-bottom">
          {!! editor($admissions->non_jupas_description) !!}
          <div class="subtitle">{{$admissions->timeline_title}}</div>
          <div class="admission-timeline">
            <div class="admission-timeline-line"></div>
            @foreach ($admissions->jupas_timeline as $item2)
            <?php 
            if($loop->index % 2 ==0){
              ?>
              <div class="admission-timeline-row01" data-ix="fade-in-from-bottom">
                <div class="admission-timeline-col01">
                  <div class="admission-timeline-month-b">
                    <div class="admission-timeline-month-txt-b">
                      <div class="admission-timeline-month-txt">{{$item2['month']}}</div>
                    </div>
                  </div>
                  <div class="admission-timeline-month-line"></div>
                  <div class="admission-timeline-txt-b01">
                    <div class="admission-timeline-dot-b _01">
                      <div class="admission-timeline-dot"></div>
                    </div>
                    <div class="admission-timeline-txt-b">
                      <div class="admission-timeline-txt">{!! editor($item2['content']) !!}</div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
            else{
              ?>
              <div class="admission-timeline-row02" data-ix="fade-in-from-bottom">
                <div class="admission-timeline-col02">
                  <div class="admission-timeline-month-b">
                    <div class="admission-timeline-month-txt-b">
                      <div class="admission-timeline-month-txt">{{$item2['month']}}</div>
                    </div>
                  </div>
                  <div class="admission-timeline-month-line"></div>
                  <div class="admission-timeline-txt-b02">
                    <div class="admission-timeline-dot-b _02">
                      <div class="admission-timeline-dot"></div>
                    </div>
                    <div class="admission-timeline-txt-b">
                      <div class="admission-timeline-txt">{!! editor($item2['content']) !!}</div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
              ?>
            @endforeach
          </div>
          <div>{!! editor($admissions->timeline_description) !!}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="tuition-fee"></div>
<div class="bottom-banner" data-ix="study-sequence-course">
  @if($image = $admissions->getMedia('tuition_banner'))
    <div class="tuition-bg" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
  @endif
  <img src="{{ asset_frontend('images/study-squence-course-graphic-l01.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-l01" data-ix="study-sequence-course-graphic-initial"><img src="{{ asset_frontend('images/study-squence-course-graphic-l02.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-l02" data-ix="study-sequence-course-graphic-initial"><img src="{{ asset_frontend('images/study-squence-course-graphic-l03.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-l03" data-ix="study-sequence-course-graphic-initial"><img src="{{ asset_frontend('images/study-squence-course-graphic-r01.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-r01" data-ix="study-sequence-course-graphic-initial"><img src="{{ asset_frontend('images/study-squence-course-graphic-l02.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-r02" data-ix="study-sequence-course-graphic-initial"><img src="{{ asset_frontend('images/study-squence-course-graphic-r03.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-r03" data-ix="study-sequence-course-graphic-initial">
  <div class="bottom-banner-txt-b">
    <div class="section-content wf-section">
      <div class="container-full w-container" data-ix="fade-in-from-bottom">
        <div>
          <h2 class="txt-color-white">{{$admissions->tuition_title}}</h2>
          <div class="txt-color-white">{!! editor($admissions->tuition_description) !!}</div>
          <div class="btn-b m-align-center">
            <a data-w-id="3a2eeea4-c435-af02-0868-38417c39e388" href="{{$admissions->tuition_url}}" target="_blank" class="btn-arrow w-inline-block">
              <div data-is-ix2-target="1" class="img" data-w-id="3a2eeea4-c435-af02-0868-38417c39e389" data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.admissions_menu .nav-dropdown-link-b a').eq(0).addClass(" w--current")
    $('.admissions_menu .nav-dropdown-link-b a').eq(2).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
</script>
@endsection