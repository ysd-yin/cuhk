@extends('layouts.frontend')

@section('content')
<style>
  .video-row03 {
    pointer-events: none;
  }
  .video-row04 {
    pointer-events: none;
  }
  .pop-video-border {
    pointer-events: none;
  }
  .pop-video-graphic01 {
    pointer-events: none;
  }
  .pop-video-graphic02 {
    pointer-events: none;
  }
  .pop-video-graphic03 {
    pointer-events: none;
  }
  .pop-video-graphic04 {
    pointer-events: none;
  }
  .video-col03 {
    pointer-events: auto;
  }
  .video-col04 {
    pointer-events: auto;
  }
</style>
<div class="pop-video" data-ix="pop">
  <a href="#" class="pop-btn-close popup-close w-inline-block" data-ix="pop-btn-close"><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="pop-btn-close-icon">
    <div class="pop-btn-close-txt">Close</div>
  </a>
  <div class="popup-content">
    <div class="section-content wf-section">
      <div class="container w-container">
        <div class="pop-video-b">
          <div style="padding-top:56.17021276595745%" class="w-embed-youtubevideo video-youtube">
            {{-- <iframe class="video_link" src="https://www.youtube.com/embed/wOVbS6GGN0U?rel=0&amp;controls=1&amp;autoplay=0&amp;mute=0&amp;start=0" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe> --}}
          </div><img src="{{ asset_frontend('images/development-graphic02.svg') }}" loading="lazy" alt="" class="pop-video-graphic01"><img src="{{ asset_frontend('images/development-graphic01.svg') }}" loading="lazy" alt="" class="pop-video-graphic02"><img src="{{ asset_frontend('images/codirectors-message-graphic02.svg') }}" loading="lazy" alt="" class="pop-video-graphic03"><img src="{{ asset_frontend('images/international-academic-faculty-graphic01.svg') }}" loading="lazy" alt="" class="pop-video-graphic04">
          <div class="pop-video-border"></div>
        </div>
        <div class="pop-video-txt-b">
          <div class="pop-video-line"></div>
          <div class="video_text"><strong>How do you like CUHK BBA-JD?</strong></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    @if($image = $admissions_programme->getMedia('top_banner'))
      <div class="inner-banner-img brochure" data-ix="inner-banner-img" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
    @endif
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$admissions_programme->title_1}}</h1>
      </div>
    </div>
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$admissions_programme->title_2}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Admissions</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Programme Brochure &amp; Videos</div>
  </div>
</div>
<div class="section-content wf-section">
  <div class="container-full w-container">
    <div class="brochure-row">
      <div class="brochure-col" data-ix="fade-in-from-bottom"><img src="{{ asset_frontend('images/brochure-img2x.png') }}" loading="lazy" sizes="(max-width: 479px) 90vw, 43vw" alt="" class="img"></div>
      <div class="brochure-col">
        <div data-ix="fade-in-from-bottom">{!! editor($admissions_programme->description) !!}</div>
        <div class="brochure-txt-b">
          <div class="txt-mask" data-ix="txt-appear-from-bottom">
            <h2 data-ix="txt-appear-from-bottom">{{$admissions_programme->url_title}}</h2>
          </div>
          <div class="btn-b brochure-btn" data-ix="fade-in-from-bottom">
            <a data-w-id="8f329a88-8d3b-0a84-041d-893aaa845b82" href="{{$admissions_programme->url}}" target="_blank" class="btn-arrow w-inline-block">
              <div data-is-ix2-target="1" class="img" data-w-id="8f329a88-8d3b-0a84-041d-893aaa845b83" data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section-content bg-video wf-section">
  <div class="container-full w-container">
    <div class="heading2-b align-center">
      <div class="txt-mask">
        <h2 class="align-center" data-ix="txt-appear-from-bottom">Programme Videos</h2>
      </div>
    </div>
    @foreach ($admissions_programme->video as $item)
        @if($loop->index == 0 || $loop->index == 5 || $loop->index == 10 )
        <div class="video-row01 video_block">
          <div class="video-col01" data-ix="video-col">
            <a data-w-id="c6124f18-2741-8a50-f1e5-bc824e1d665b" href="#" class="video-list popup-link w-inline-block" data-ix="video-list"><img src="{{$item['medias']['thumbnail'][0]['path']}}" loading="lazy" sizes="(max-width: 479px) 90vw, (max-width: 767px) 54vw, (max-width: 991px) 36vw, (max-width: 1279px) 32vw, (max-width: 1439px) 31vw, 32vw" alt="" class="img">
              <div class="video-list-hover" data-ix="video-list-hover">
                <input type="hidden" class="url_link" value="{{$item['video']}}">
                <input type="hidden" class="url_title" value="{{$item['title']}}">
                <div>{{$item['title']}}</div>
              </div>
              <div class="video-icon">
                <div class="video-icon-img"></div>
              </div>
              <div class="video-border"></div>
            </a>
            <div class="video-list-txt-mobile">{{$item['title']}}</div>
          </div>
        </div>
        @elseif($loop->index == 1 || $loop->index == 6 || $loop->index == 11 )
        <div class="video-row02 video_block">
          <div class="video-col02" data-ix="video-col">
            <a data-w-id="40c82e62-652b-1a71-05f9-108797b66ca1" href="#" class="video-list popup-link w-inline-block" data-ix="video-list"><img src="{{$item['medias']['thumbnail'][0]['path']}}" loading="lazy" sizes="(max-width: 479px) 90vw, (max-width: 767px) 54vw, (max-width: 991px) 50vw, 54vw" alt="" class="img">
              <div class="video-list-hover" data-ix="video-list-hover">
                <input type="hidden" class="url_link" value="{{$item['video']}}">
                <input type="hidden" class="url_title" value="{{$item['title']}}">
                <div>{{$item['title']}}</div>
              </div>
              <div class="video-icon">
                <div class="video-icon-img"></div>
              </div>
              <div class="video-border"></div>
            </a>
            <div class="video-list-txt-mobile">{{$item['title']}}</div>
          </div>
        </div>
        @elseif($loop->index == 2 || $loop->index == 7 || $loop->index == 12 )
        <div class="video-row03 video_block">
          <div class="video-col03" data-ix="video-col">
            <a data-w-id="c5fa1f87-f038-fd18-b9fe-30af8848ef59" href="#" class="video-list popup-link w-inline-block" data-ix="video-list"><img src="{{$item['medias']['thumbnail'][0]['path']}}" loading="lazy" sizes="(max-width: 479px) 90vw, (max-width: 767px) 54vw, (max-width: 991px) 36vw, (max-width: 1279px) 32vw, (max-width: 1439px) 31vw, 32vw" alt="" class="img">
              <div class="video-list-hover" data-ix="video-list-hover">
                <input type="hidden" class="url_link" value="{{$item['video']}}">
                <input type="hidden" class="url_title" value="{{$item['title']}}">
                <div>{{$item['title']}}</div>
              </div>
              <div class="video-icon">
                <div class="video-icon-img"></div>
              </div>
              <div class="video-border"></div>
            </a>
            <div class="video-list-txt-mobile">{{$item['title']}}</div>
          </div>
        </div>
        @elseif($loop->index == 3 || $loop->index == 8 || $loop->index == 13 )
        <div class="video-row04 video_block">
          <div class="video-col04" data-ix="video-col">
            <a data-w-id="60d1ef64-7045-c4ca-5034-103f15e50b59" href="#" class="video-list popup-link w-inline-block" data-ix="video-list"><img src="{{$item['medias']['thumbnail'][0]['path']}}" loading="lazy" sizes="(max-width: 479px) 90vw, (max-width: 767px) 54vw, (max-width: 991px) 36vw, (max-width: 1279px) 32vw, (max-width: 1439px) 31vw, 32vw" alt="" class="img">
              <div class="video-list-hover" data-ix="video-list-hover">
                <input type="hidden" class="url_link" value="{{$item['video']}}">
                <input type="hidden" class="url_title" value="{{$item['title']}}">
                <div>{{$item['title']}}</div>
              </div>
              <div class="video-icon">
                <div class="video-icon-img"></div>
              </div>
              <div class="video-border"></div>
            </a>
            <div class="video-list-txt-mobile">{{$item['title']}}</div>
          </div>
        </div>
        @elseif($loop->index == 4 || $loop->index == 9 || $loop->index == 14 )
        <div class="video-row05 video_block">
          <div class="video-col05" data-ix="video-col">
            <a data-w-id="72d05e21-ec73-6c11-d920-b505164fc5ef" href="#" class="video-list popup-link w-inline-block" data-ix="video-list"><img src="{{$item['medias']['thumbnail'][0]['path']}}" loading="lazy" sizes="(max-width: 479px) 90vw, (max-width: 767px) 54vw, (max-width: 991px) 50vw, 54vw" alt="" class="img">
              <div class="video-list-hover" data-ix="video-list-hover">
                <input type="hidden" class="url_link" value="{{$item['video']}}">
                <input type="hidden" class="url_title" value="{{$item['title']}}">
                <div>{{$item['title']}}</div>
              </div>
              <div class="video-icon">
                <div class="video-icon-img"></div>
              </div>
              <div class="video-border"></div>
            </a>
            <div class="video-list-txt-mobile">{{$item['title']}}</div>
          </div>
        </div>
        @endif
    @endforeach
  </div><img src="{{ asset_frontend('images/study-squence-course-graphic-l01.svg') }}" loading="lazy" alt="" class="video-graphic01"><img src="{{ asset_frontend('images/development-graphic02.svg') }}" loading="lazy" alt="" class="video-graphic02"><img src="{{ asset_frontend('images/study-squence-course-graphic-l03.svg') }}" loading="lazy" alt="" class="video-graphic03"><img src="{{ asset_frontend('images/development-graphic05.svg') }}" loading="lazy" alt="" class="video-graphic04"><img src="{{ asset_frontend('images/development-graphic02.svg') }}" loading="lazy" alt="" class="video-graphic05"><img src="{{ asset_frontend('images/study-squence-course-graphic-r03.svg') }}" loading="lazy" alt="" class="video-graphic06">
</div>
<script>
  window.onload = (event) => {
    $( ".video_block" ).click(function() {
      var link = $(this).find('.url_link').attr('value');
      var text = $(this).find('.url_title').attr('value');
      $('.video-youtube').html('<iframe class="video_link" src="'+link+'" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>');
      $('.video_text').html("<strong>"+text+"</strong>")
    });
  };
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.admissions_menu .nav-dropdown-link-b a').eq(1).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
</script>
@endsection