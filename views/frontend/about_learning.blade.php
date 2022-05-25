@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    <div class="inner-banner-img learning" data-ix="inner-banner-img"></div>
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$about_learning->title_1}}</h1>
      </div>
    </div>
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$about_learning->title_2}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>About</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Learning Environment</div>
  </div>
</div>
<div class="section-content wf-section">
  <div class="container-full w-container">
    <div class="learning-list-all">
      @foreach ($about_learning->content as $index)
      <?php 
      if($loop->index % 2 ==0){
        ?>
        <div class="learning-list">
          <div class="learning-list-txt-b" data-ix="fade-in-from-left">
            <div class="heading2-b">
              <h2>{{$index['title']}}</h2>
            </div>
            <div>{{$index['description']}}</div>
            <div class="learning-list-line"></div>
          </div>
          @if($index['medias'])
            <div class="learning-img-b learning-img01" data-ix="fade-in-from-right" style="background-image:url({{$index['medias']['image'][0]['path']}})"></div>
          @endif
        </div>
        <?php
      }
      else{
        ?>
        <div class="learning-list w-clearfix">
          <div class="learning-list-txt-b _02" data-ix="fade-in-from-right">
            <div class="heading2-b">
              <h2>{{$index['title']}}</h2>
            </div>
            <div>{{$index['description']}}</div>
            <div class="learning-list-line"></div>
          </div>
          @if($index['medias'])
            <div class="learning-img-b learning-img02" data-ix="fade-in-from-left" style="background-image:url({{$index['medias']['image'][0]['path']}})"></div>
          @endif
        </div>
        <?php
      }
      ?>
      @endforeach
    </div>
  </div>
</div>
<div class="section-content bg-learning wf-section">
  <div class="container-full w-container">
    <div class="align-center">
      <div class="txt-mask">
        <h2 data-ix="txt-appear-from-bottom">{{$about_learning->image_list_title}}</h2>
      </div>
    </div>
  </div>
  <div class="learning-gallery-b-all">
    <div class="learning-gallery-b">
      <div data-w-id="16419a6d-97ba-6656-4fec-2654a2f3d815" class="learning-gallery-img01">
        <img src="{{$about_learning->getMedia('image_1')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 41vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_1_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_1_title}}</div>
        </div>
      </div>
      <div data-w-id="6271eeb1-5000-2a23-90d9-f37ef9e83fdf" class="learning-gallery-img02">
        <img src="{{$about_learning->getMedia('image_2')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_2_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_2_title}}</div>
        </div>
      </div>
      <div data-w-id="c204fcb7-6e41-bdb9-d52f-5de6d3b31575" class="learning-gallery-img03">
        <img src="{{$about_learning->getMedia('image_3')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_3_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_3_title}}</div>
        </div>
      </div>
      <div data-w-id="6d2a90c2-7e28-a593-e83c-e8363a0a88d6" class="learning-gallery-img04">
        <img src="{{$about_learning->getMedia('image_4')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_4_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_4_title}}</div>
        </div>
      </div>
      <div data-w-id="a1c0312f-5846-0ccf-9ee9-b5e1ffeccfa1" class="learning-gallery-img05">
        <img src="{{$about_learning->getMedia('image_5')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 41vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_5_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_5_title}}</div>
        </div>
      </div>
      <div data-w-id="f5136cf7-cd09-4b4e-ffa8-ade7dd124e2b" class="learning-gallery-img06">
        <img src="{{$about_learning->getMedia('image_6')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 29vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b align-right" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_6_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_6_title}}</div>
        </div>
      </div>
      <div data-w-id="d878b038-ad7e-b1b1-1262-59e0fc7c0bbf" class="learning-gallery-img07">
        <img src="{{$about_learning->getMedia('image_7')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_7_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_7_title}}</div>
        </div>
      </div>
      <div data-w-id="383aa7fe-7399-ba15-36ec-20fc5e68d4e1" class="learning-gallery-img08">
        <img src="{{$about_learning->getMedia('image_8')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_8_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_8_title}}</div>
        </div>
      </div>
      <div data-w-id="4c7e595a-3199-db28-6162-890168650717" class="learning-gallery-img09">
        <img src="{{$about_learning->getMedia('image_9')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 29vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_9_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_9_title}}</div>
        </div>
      </div>
      <div data-w-id="40dc0d83-26f0-0310-a138-a63b365a2fff" class="learning-gallery-img10">
        <img src="{{$about_learning->getMedia('image_10')->getResizedImage(1000)}}" loading="lazy" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_10_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_10_title}}</div>
        </div>
      </div>
      <div data-w-id="39f07b88-467b-c662-c69c-f2a40927fe9b" class="learning-gallery-img11">
        <img src="{{$about_learning->getMedia('image_11')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_11_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_11_title}}</div>
        </div>
      </div>
      <div data-w-id="8caa536f-5e14-b61a-5307-7a3780bae8da" class="learning-gallery-img12">
        <img src="{{$about_learning->getMedia('image_12')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_12_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_12_title}}</div>
        </div>
      </div>
    </div>
    <div class="learning-gallery-b">
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b47" class="learning-gallery-img01">
        <img src="{{$about_learning->getMedia('image_13')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 41vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_13_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_13_title}}</div>
        </div>
      </div>
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b4f" class="learning-gallery-img02">
        <img src="{{$about_learning->getMedia('image_14')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_14_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_14_title}}</div>
        </div>
      </div>
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b57" class="learning-gallery-img03">
        <img src="{{$about_learning->getMedia('image_15')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_15_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_15_title}}</div>
        </div>
      </div>
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b5f" class="learning-gallery-img04">
        <img src="{{$about_learning->getMedia('image_16')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_16_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_16_title}}</div>
        </div>
      </div>
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b67" class="learning-gallery-img05">
        <img src="{{$about_learning->getMedia('image_17')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 41vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_17_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_17_title}}</div>
        </div>
      </div>
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b6f" class="learning-gallery-img06">
        <img src="{{$about_learning->getMedia('image_18')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 29vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b align-right" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_18_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_18_title}}</div>
        </div>
      </div>
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b77" class="learning-gallery-img07">
        <img src="{{$about_learning->getMedia('image_19')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_19_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_19_title}}</div>
        </div>
      </div>
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b7f" class="learning-gallery-img08">
        <img src="{{$about_learning->getMedia('image_20')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_20_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_20_title}}</div>
        </div>
      </div>
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b87" class="learning-gallery-img09">
        <img src="{{$about_learning->getMedia('image_21')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 29vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_21_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_21_title}}</div>
        </div>
      </div>
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b8f" class="learning-gallery-img10">
        <img src="{{$about_learning->getMedia('image_22')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 41vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_22_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_22_title}}</div>
        </div>
      </div>
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b97" class="learning-gallery-img11">
        <img src="{{$about_learning->getMedia('image_23')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_23_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_23_title}}</div>
        </div>
      </div>
      <div data-w-id="415ed12f-453f-ee33-d2d9-202841fd9b9f" class="learning-gallery-img12">
        <img src="{{$about_learning->getMedia('image_24')->getResizedImage(1000)}}" loading="lazy" sizes="(max-width: 991px) 90vw, 19vw" alt="" class="learning-gallery-img">
        <div class="learning-gallery-txt-b" data-ix="learning-gallery-img-txt-b">
          <div>{{$about_learning->image_24_title}}</div>
        </div>
        <div class="learning-gallery-txt-b-mobile">
          <div>{{$about_learning->image_24_title}}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.about_menu .nav-dropdown-link-b a').eq(4).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
  </script>
@endsection