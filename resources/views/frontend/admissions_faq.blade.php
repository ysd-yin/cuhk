@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    @if($image = $admissions_faq->getMedia('top_banner'))
      <div class="inner-banner-img faqs" data-ix="inner-banner-img" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
    @endif
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$admissions_faq->title}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Admissions</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>FAQs</div>
  </div>
</div>
<div class="section-content no-overflow wf-section">
  <div class="container-full w-container">
    <div class="content-b-all">
      <div class="content-b">
        <div class="heading2-b">
          <h2 data-ix="txt-appear-from-bottom">{{$admissions_faq->admissions_title}}</h2>
        </div>
        <div class="listing-content-b">
          @foreach ($admissions_faq->admissions as $item)
          <div class="faqs-listing-b">
            <a href="#" class="faqs-expand-btn w-inline-block" data-ix="faqs-expand-btn">
              <div class="listing-hover-bg"></div>
              <div class="listing-hover-bg02"></div><img src="{{ asset_frontend('images/listing-graphic.svg') }}" loading="lazy" alt="" class="listing-graphic"><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-hover">
              <div class="faqs-col-l">{{$loop->index+1}}</div>
              <div class="faqs-col-r">
                <div>{{$item['title']}}</div>
              </div><img src="{{ asset_frontend('images/expand-purple.svg') }}" loading="lazy" alt="" class="listing-expand"><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-close">
            </a>
            <a href="#" class="faqs-expand-btn-open w-inline-block" data-ix="faqs-expand-btn-open">
              <div class="listing-hover-bg"></div><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-open">
              <div class="faqs-col-l">{{$loop->index+1}}</div>
              <div class="faqs-col-r">
                <div>{{$item['title']}}</div>
              </div><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-open">
            </a>
            <div class="faqs-expand" data-ix="faqs-expand">
              <div class="faqs-expand-content">
                <div>{!! editor($item['content']) !!}</div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="content-b">
        <div class="heading2-b">
          <h2 data-ix="txt-appear-from-bottom">{{$admissions_faq->prospects_recognitions_title}}</h2>
        </div>
        <div class="listing-content-b">
          @foreach ($admissions_faq->prospects_recognitions as $item2)
          <div class="faqs-listing-b">
            <a href="#" class="faqs-expand-btn w-inline-block" data-ix="faqs-expand-btn">
              <div class="listing-hover-bg"></div>
              <div class="listing-hover-bg02"></div><img src="{{ asset_frontend('images/listing-graphic.svg') }}" loading="lazy" alt="" class="listing-graphic"><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-hover">
              <div class="faqs-col-l">{{$loop->index+1}}</div>
              <div class="faqs-col-r">
                <div>{{$item2['title']}}</div>
              </div><img src="{{ asset_frontend('images/expand-purple.svg') }}" loading="lazy" alt="" class="listing-expand"><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-close">
            </a>
            <a href="#" class="faqs-expand-btn-open w-inline-block" data-ix="faqs-expand-btn-open">
              <div class="listing-hover-bg"></div><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-open">
              <div class="faqs-col-l">{{$loop->index+1}}</div>
              <div class="faqs-col-r">
                <div>{{$item2['title']}}</div>
              </div><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-open">
            </a>
            <div class="faqs-expand" data-ix="faqs-expand">
              <div class="faqs-expand-content">
                <div>{!! editor($item2['content']) !!}</div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="faqs-expand-all-btn">
        <a href="#" class="content-link-btn faqs-expand-all w-inline-block" data-ix="faqs-expand-all-btn">
          <div class="content-link-btn-hover"></div>
          <div class="content-link-btn-icon">
            <div class="content-link-btn-icon-img-b"><img src="{{ asset_frontend('images/expand-purple.svg') }}" loading="lazy" alt="" class="content-link-btn-icon-img"><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="content-link-btn-icon-img-hover"></div>
            <div class="content-link-btn-txt">Expand All</div>
            <div class="content-link-btn-txt-hide">Hide All</div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<script>
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.admissions_menu .nav-dropdown-link-b a').eq(3).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
</script>
@endsection