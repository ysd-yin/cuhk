@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    <div class="inner-banner-img structure" data-ix="inner-banner-img"></div>
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$curriculum_structure->title_1}}</h1>
      </div>
    </div>
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$curriculum_structure->title_2}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="index.html" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Curriculum</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Programme Structure</div>
  </div>
</div>
<div class="section-content wf-section">
  <div class="container-full w-container">
    <div class="structure-chart-row">
      <div class="structure-chart-col-r" data-ix="fade-in-from-bottom">
        <p>{!! editor($curriculum_structure->description)!!}</p>
        <div class="structure-chart-txt-b">
          <?php
          $total = 0;
          $total += $curriculum_structure->unit_1;
          $total += $curriculum_structure->unit_2;
          $total += $curriculum_structure->unit_3;
          $total += $curriculum_structure->unit_4;
            ?>
          <div class="structure-chart-txt01"><?=$total?></div>
          <div class="structure-chart-txt02 txt-stroke"><span class="structure-chart-txt03">Units</span> in Total</div>
        </div>
        <div class="structure-chart-info-b">
          <div class="structure-chart-info-txt-b">
            <div class="structure-chart-info-dot-b">
              <div class="structure-chart-info-dot dot-purple"></div>
            </div>
            <div class="structure-chart-info-txt-col01">
              <div><strong>{{$curriculum_structure->unit_title_1}}</strong></div>
            </div>
            <div class="structure-chart-info-txt-col02">
              <div><strong>{{$curriculum_structure->unit_1}}</strong></div>
            </div>
          </div>
          <div class="structure-chart-info-txt-b">
            <div class="structure-chart-info-dot-b">
              <div class="structure-chart-info-dot dot-gold"></div>
            </div>
            <div class="structure-chart-info-txt-col01">
              <div><strong>{{$curriculum_structure->unit_title_2}}</strong></div>
            </div>
            <div class="structure-chart-info-txt-col02">
              <div><strong>{{$curriculum_structure->unit_2}}</strong></div>
            </div>
          </div>
          <div class="structure-chart-info-txt-b">
            <div class="structure-chart-info-dot-b">
              <div class="structure-chart-info-dot dot-red"></div>
            </div>
            <div class="structure-chart-info-txt-col01">
              <div><strong>{{$curriculum_structure->unit_title_3}}</strong></div>
            </div>
            <div class="structure-chart-info-txt-col02">
              <div><strong>{{$curriculum_structure->unit_3}}</strong></div>
            </div>
          </div>
          <div class="structure-chart-info-txt-b">
            <div class="structure-chart-info-dot-b">
              <div class="structure-chart-info-dot dot-darkpurple"></div>
            </div>
            <div class="structure-chart-info-txt-col01">
              <div><strong>{{$curriculum_structure->unit_title_4}}</strong></div>
            </div>
            <div class="structure-chart-info-txt-col02">
              <div><strong>{{$curriculum_structure->unit_4}}</strong></div>
            </div>
          </div>
        </div>
      </div>
      <div class="structure-chart-col-l">
        <div class="structure-chart-b">
          <div data-w-id="c16b3f59-5171-c5bd-76e5-1431720eac12" data-is-ix2-target="1" data-animation-type="lottie" data-src="{{ asset_frontend('documents/structure-chart.json') }}" data-loop="0" data-direction="1" data-autoplay="1" data-renderer="svg" data-default-duration="4.004003840917587" data-duration="0" data-ix2-initial-state="0"></div>
          <div data-w-id="03c9424b-7e8a-a48d-e464-9be121d79fe2" style="opacity:1" class="structure-chart-txt-stat-b _01">
            <div><strong>{{$curriculum_structure->unit_short_title_1}}</strong></div>
            <div class="structure-chart-txt-stat">{{$curriculum_structure->unit_1}}</div>
          </div>
          <div data-w-id="e4254299-2f3d-478f-4e99-e04d1ba8cb2c" style="opacity:1" class="structure-chart-txt-stat-b _02">
            <div><strong>{{$curriculum_structure->unit_short_title_2}}</strong></div>
            <div class="structure-chart-txt-stat">{{$curriculum_structure->unit_2}}</div>
          </div>
          <div data-w-id="bbf0ee8a-d7fd-8fe9-309c-1fc4b504f9b2" style="opacity:1" class="structure-chart-txt-stat-b _03">
            <div><strong>{{$curriculum_structure->unit_short_title_4}}</strong></div>
            <div class="structure-chart-txt-stat">{{$curriculum_structure->unit_4}}</div>
          </div>
          <div data-w-id="fd9376b9-5a2e-9069-f355-71a6dad3712a" style="opacity:1" class="structure-chart-txt-stat-b _04">
            <div><strong>{{$curriculum_structure->unit_short_title_3}}</strong></div>
            <div class="structure-chart-txt-stat">{{$curriculum_structure->unit_3}}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="structure-row02">
      <div class="structure-col-02" data-ix="fade-in-from-bottom">
        <div class="structure-b">
          <div class="structure-b-content">
            <div class="structure-subrow">
              <div class="structure-subcol-l">
                <div class="structure-b-txt01">{{$curriculum_structure->left_content_1}}</div>
                <div class="structure-b-txt02 txt-color-gold">{{$curriculum_structure->left_content_2}}</div>
                <div class="structure-b-txt01">{{$curriculum_structure->left_content_3}}</div>
                <div class="structure-b-txt03 txt-color-gold">{{$curriculum_structure->left_content_4}}</div>
              </div>
              <div class="structure-subcol-r">
                @if($image = $curriculum_structure->getMedia('left_image'))
                <img src="{{$image->getResizedImage(200)}}" loading="lazy" alt="" class="structure-logo01">
                @endif
                <div class="structure-b-txt03">{{$curriculum_structure->left_content_5}}</div>
              </div>
            </div>
            <div>{!! editor($curriculum_structure->left_editor) !!}</div>
          </div>
        </div>
      </div>
      <div class="structure-col-02" data-ix="fade-in-from-bottom">
        <div class="structure-b">
          <div class="structure-b-content">
            <div class="structure-b-txt02">{{$curriculum_structure->right_content_1}}</div>
            <div class="structure-row03">
              <div class="structure-logo-jd gradient"
              @if($image = $curriculum_structure->getMedia('right_image'))
              style="background-image:url({{$image->getResizedImage(200)}}), linear-gradient(180deg, #5c33ad, #a72024)"
              @endif
              ></div>
              <div class="structure-b-txt01">{{$curriculum_structure->right_content_2}}</div>
              <div class="structure-b-txt03 txt-color-gold">{{$curriculum_structure->right_content_3}}</div>
            </div>
            <div>{!! editor($curriculum_structure->right_editor) !!}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section-content structure-program wf-section">
  <div class="container home-program w-container">
    <div class="heading-b align-center">
      <div class="txt-mask">
        <div class="heading txt-color-purple" data-ix="txt-appear-from-bottom">{{$home_data->forth_title_1}}</div>
      </div>
      <div class="txt-mask">
        <div class="heading txt-color-purple txt-stroke" data-ix="txt-appear-from-bottom">{{$home_data->forth_title_2}}</div>
      </div>
    </div>
    <div class="home-program-txt-b" data-ix="fade-in-from-bottom">
      <div>{{$home_data->forth_description}}</div>
    </div>
  </div>
  <div class="home-program-desktop">
    <div class="home-program-img-b"><img src="{{ asset_frontend('images/program-bg2x.png') }}" loading="lazy" sizes="100vw" alt="" class="img">
      <div data-w-id="13b163bc-3a28-5e8f-b1b8-2cef1ca346de" data-is-ix2-target="1" class="home-program-animate" data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-running.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-renderer="svg" data-default-duration="18.018017284129144" data-duration="0"></div>
    </div>
    <div class="home-program-content-b">
      <div class="container-full w-container">
        <div class="home-program-row">
          <div class="home-program-col" data-ix="fade-in-from-bottom">
            <div class="home-program-bottom-txt-b"><img src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="">
              <div class="subtitle">Year 1-3</div>
              <div>{{$home_data->year_1}}</div>
            </div>
          </div>
          <div class="home-program-col" data-ix="fade-in-from-bottom">
            <div class="home-program-bottom-txt-b"><img src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="">
              <div class="subtitle">Year 4</div>
              <div>{{$home_data->year_4_1}}</div>
              <div class="home-program-dot-more" data-w-id="13b163bc-3a28-5e8f-b1b8-2cef1ca346f0" data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="4.004003840917587" data-duration="0"></div>
              <div>{{$home_data->year_4_2}}</div>
            </div>
          </div>
          <div class="home-program-col" data-ix="fade-in-from-bottom">
            <div class="home-program-bottom-txt-b"><img src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="">
              <div class="subtitle">Year 5</div>
              <div>{{$home_data->year_5_1}}</div>
              <div class="home-program-dot-more" data-w-id="13b163bc-3a28-5e8f-b1b8-2cef1ca346fa" data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="4.004003840917587" data-duration="0"></div>
              <div>{{$home_data->year_5_2}}</div>
              <div class="home-program-bottom-list"><img src="{{ asset_frontend('images/program-icon-grad-s.svg') }}" loading="lazy" alt="" class="home-program-bottom-list-icon">
                <div>{{$home_data->year_5_3}}</div>
              </div>
              <div class="home-program-bottom-list"><img src="{{ asset_frontend('images/program-icon-grad-l.svg') }}" loading="lazy" alt="" class="home-program-bottom-list-icon">
                <div>{{$home_data->year_5_4}}</div>
              </div>
            </div>
          </div>
          <div class="home-program-col" data-ix="fade-in-from-bottom">
            <div class="home-program-bottom-txt-b"><img src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="">
              <div class="subtitle">PCLL</div>
              <div class="home-program-dot-more" data-w-id="13b163bc-3a28-5e8f-b1b8-2cef1ca3470a" data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="4.004003840917587" data-duration="0"></div>
              <div>{{$home_data->year_pcll}}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="home-program-mobile">
    <div class="home-program-img-b"><img src="{{ asset_frontend('images/program-bg2x.png') }}" loading="lazy" sizes="100vw" alt="" class="img"></div>
    <div class="home-program-content-b">
      <div class="container-full w-container">
        <div class="home-program-row">
          <div class="home-program-col-l">
            <div data-w-id="13b163bc-3a28-5e8f-b1b8-2cef1ca34714" data-is-ix2-target="1" class="home-program-animate-mobile" data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-running-mobile.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="15.015014403440953" data-duration="0"></div>
          </div>
          <div class="home-program-col-r">
            <div class="home-program-bottom-txt-b" data-ix="fade-in-from-left"><img src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="" class="home-program-dot-mobile">
              <div class="subtitle">Year 1-3</div>
              <div>Study BBA, LLB and University Core courses</div>
            </div>
            <div class="home-program-bottom-txt-b" data-ix="fade-in-from-left"><img src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="" class="home-program-dot-mobile">
              <div class="subtitle">Year 4</div>
              <div>Study BBA, JD and University core courses</div>
              <div class="home-program-dot-more" data-w-id="13b163bc-3a28-5e8f-b1b8-2cef1ca34722" data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="4.004003840917587" data-duration="0"></div>
              <div>Flexible opt-out option: Graduate with a BBA degree or a BBA (Minor in Law) degree</div>
            </div>
            <div class="home-program-bottom-txt-b" data-ix="fade-in-from-left"><img src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="" class="home-program-dot-mobile">
              <div class="subtitle">Year 5</div>
              <div>Full engaged in JD study</div>
              <div class="home-program-dot-more" data-w-id="13b163bc-3a28-5e8f-b1b8-2cef1ca3472b" data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="4.004003840917587" data-duration="0"></div>
              <div>Graduate with</div>
              <div class="home-program-bottom-list"><img src="{{ asset_frontend('images/program-icon-grad-s.svg') }}" loading="lazy" alt="" class="home-program-bottom-list-icon">
                <div>Bachelor’s degree</div>
              </div>
              <div class="home-program-bottom-list"><img src="{{ asset_frontend('images/program-icon-grad-l.svg') }}" loading="lazy" alt="" class="home-program-bottom-list-icon">
                <div>Master’s degree</div>
              </div>
            </div>
            <div class="home-program-bottom-txt-b last" data-ix="fade-in-from-left"><img src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="" class="home-program-dot-mobile">
              <div class="subtitle">PCLL</div>
              <div class="home-program-dot-more" data-w-id="13b163bc-3a28-5e8f-b1b8-2cef1ca3473a" data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="4.004003840917587" data-duration="0"></div>
              <div>Graduates may apply for admission to the PCLL Programme</div>
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
    $('.curriculum_menu .nav-dropdown-link-b a').eq(0).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
</script>
@endsection