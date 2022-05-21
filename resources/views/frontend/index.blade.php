@extends('layouts.frontend')

@section('content')
<?php 
// echo "<pre>";
?>
{{-- {{$home_banner}} --}}
<?php 
// echo "</pre>";
?>
<div class="section-home-banner wf-section">
    <div data-delay="5000" data-animation="over" class="home-banner-slider w-slider" data-autoplay="true"
        data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
        data-nav-spacing="10" data-duration="600" data-infinite="true" id="home-banner-slider">
        <div class="w-slider-mask">
            <div class="home-banner-slide w-slide" data-ix="home-banner-slide">
                <div class="home-banner-img banner01" data-ix="home-banner-img"></div>
                <div style="-webkit-transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="home-banner-tag">
                    <div class="home-banner-tag-arrow"></div>
                    <div class="home-banner-tag-txt-b">
                        <div>BBA-JD Double Degree Programme</div>
                    </div>
                </div>
            </div>
            <div class="home-banner-slide w-slide" data-ix="home-banner-slide">
                <div class="home-banner-img banner02" data-ix="home-banner-img"></div>
            </div>
        </div>
        <div class="hidden w-slider-arrow-left"></div>
        <div class="hidden w-slider-arrow-right"></div>
        <div class="home-banner-slide-nav w-slider-nav w-round"></div>
    </div>
    <div data-delay="4000" data-animation="fade" class="home-banner-txt-slider w-slider" data-autoplay="false"
        data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
        data-nav-spacing="3" data-duration="600" data-infinite="true" id="home-banner-txt-slider"
        data-thumbs-for="#home-banner-slider">
        <div class="home-banner-txt-slide-mask w-slider-mask">
            <div class="home-banner-txt-slide w-slide" data-ix="home-thumbnail-slide">
                <div class="home-banner-txt-b active">
                    <div>
                        <div class="txt-mask">
                            <div class="home-banner-txt txt-color-purple" data-ix="home-banner-txt"><span
                                    class="txt-stroke-white">2 Degrees</span></div>
                        </div>
                    </div>
                    <div>
                        <div class="txt-mask">
                            <div class="home-banner-txt txt-color-gold" data-ix="home-banner-txt"><span
                                    class="txt-stroke-white">in 5 Years</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-banner-txt-slide w-slide" data-ix="home-thumbnail-slide">
                <div class="home-banner-txt-b">
                    <div>
                        <div class="txt-mask">
                            <div class="home-banner-txt txt-color-purple" data-ix="home-banner-txt"><span
                                    class="txt-stroke-white">Growing with</span></div>
                        </div>
                    </div>
                    <div>
                        <div class="txt-mask">
                            <div class="home-banner-txt txt-color-gold" data-ix="home-banner-txt"><span
                                    class="txt-stroke-white">BBA-JD</span></div>
                        </div>
                    </div>
                    <div class="home-banner-btn-b">
                        <a data-w-id="d54a4ed4-5e5f-c241-7849-3c8e458de629" href="#" class="btn-arrow w-inline-block">
                            <div data-is-ix2-target="1" class="img" data-w-id="d54a4ed4-5e5f-c241-7849-3c8e458de62a"
                                data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0"
                                data-direction="1" data-autoplay="0" data-renderer="svg"
                                data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hide w-slider-arrow-left"></div>
        <div class="hide w-slider-arrow-right"></div>
        <div class="hide w-slider-nav"></div>
    </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy"
        style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
        alt="" class="home-banner-mask"><img src="{{ asset_frontend('images/home-banner-mask-mobile.svg') }}" loading="lazy"
        style="-webkit-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
        alt="" class="home-banner-mask-mobile">
</div>
<div class="section-content bg-map wf-section">
    <div class="container-full w-container">
        <div class="heading-b">
            <div class="txt-mask">
                <div class="heading txt-color-purple" data-ix="txt-appear-from-bottom">
                    {{$home_page->second_title_1}}</div>
            </div>
            <div class="txt-mask">
                <div class="heading txt-color-purple align-right" data-ix="txt-appear-from-bottom"><span
                        class="txt-stroke" data-ix="txt-appear-from-bottom">{{$home_page->second_title_2}}</span></div>
            </div>
        </div>
    </div>
    <div class="container w-container">
        <div class="home-about-img-content" data-ix="home-about-img-content">
            <div class="home-about-img-b img-jd" data-ix="home-about-img-b-bba">
                <div class="home-about-img-border"></div><img src="{{ asset_frontend('images/home-about-bba-txt.svg') }}" loading="lazy" alt=""
                    class="home-about-img-txt-rotate" data-ix="home-about-img-txt-rotate">
                <div class="home-about-img-txt-b">
                    <div class="home-about-img-txt" data-ix="home-about-img-txt">BBA</div>
                </div>
            </div>
            <div class="home-about-img-b img-bba" data-ix="home-about-img-b-jd">
                <div class="home-about-img-border"></div><img src="{{ asset_frontend('images/home-about-jd-txt.svg') }}" loading="lazy" alt=""
                    class="home-about-img-txt-rotate" data-ix="home-about-img-txt-rotate">
                <div class="home-about-img-txt-b">
                    <div class="home-about-img-txt" data-ix="home-about-img-txt">JD</div>
                </div>
            </div>
            <div class="home-about-overlap-b" data-ix="home-about-overlap-b"><img src="{{ asset_frontend('images/home-about-overlap.svg') }}"
                    loading="lazy" alt="" class="home-about-overlap-img">
                <div class="home-about-overlap-txt">2 Degrees<br>in<br>5 Years</div>
            </div>
        </div>
        <div class="codirectors-msg-img-content-mobile" data-ix="home-about-img-content-mobile">
            <div class="home-about-img-b img-jd" data-ix="home-about-img-b-bba-mobile">
                <div class="home-about-img-border"></div><img src="{{ asset_frontend('images/home-about-jd-txt.svg') }}" loading="lazy" alt=""
                    class="home-about-img-txt-rotate jd-mobile" data-ix="home-about-img-txt-rotate-mobile-jd">
                <div class="home-about-img-txt-b">
                    <div class="home-about-img-txt" data-ix="home-about-img-txt">JD</div>
                </div>
            </div>
            <div class="home-about-img-b img-bba" data-ix="home-about-img-b-jd-mobile">
                <div class="home-about-img-border"></div><img src="{{ asset_frontend('images/home-about-bba-txt.svg') }}" loading="lazy" alt=""
                    class="home-about-img-txt-rotate bba-mobile" data-ix="home-about-img-txt-rotate-mobile-bba">
                <div class="home-about-img-txt-b">
                    <div class="home-about-img-txt" data-ix="home-about-img-txt">BBA</div>
                </div>
            </div>
            <div class="home-about-overlap-b" data-ix="home-about-overlap-b"><img
                    src="{{ asset_frontend('images/home-about-overlap-mobile.svg') }}" loading="lazy" alt="" class="home-about-overlap-img">
                <div class="home-about-overlap-txt">2 Degrees<br>in 5 Years</div>
            </div>
        </div>
        <div class="home-about-row">
            <div class="home-about-col" data-ix="fade-in-from-bottom">
                <div class="heading txt-color-gold">{{$home_page->second_left_description}}</div>
                <div class="btn-b hidden-in-mobile">
                    <a data-w-id="470b1bb9-18cf-77cf-f91d-17133cf1c279" href="{{$home_data->second_left_url}}"
                        class="btn-arrow w-inline-block">
                        <div data-is-ix2-target="1" class="img" data-w-id="4fbd6c11-0f7e-d6ef-317b-f3dba8cc5305"
                            data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0"
                            data-direction="1" data-autoplay="0" data-renderer="svg"
                            data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0">
                        </div>
                    </a>
                </div>
            </div>
            <div class="home-about-col">
                <div class="home-about-txt-content">
                    <div class="home-about-txt-b" data-ix="fade-in-from-left">
                        <div class="home-about-icon-b">
                            <div class="content-icon" data-w-id="2a0efd4b-16f4-367a-57d9-d3e8eca02784"
                                data-animation-type="lottie" data-src="{{ asset_frontend('documents/home-about-icon01.json') }}" data-loop="1"
                                data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                                data-default-duration="2.0020019204587935" data-duration="0"></div>
                        </div>
                        <div>{{$home_data->icon_1}}</div>
                    </div>
                    <div class="home-about-txt-b" data-ix="fade-in-from-left">
                        <div class="home-about-icon-b">
                            <div class="content-icon" data-w-id="7f817615-dfcc-a1c4-a3ed-6cc68b59859e"
                                data-animation-type="lottie" data-src="{{ asset_frontend('documents/home-about-icon02.json') }}" data-loop="1"
                                data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                                data-default-duration="2.0020019204587935" data-duration="0"></div>
                        </div>
                        <div>{{$home_data->icon_2}}</div>
                    </div>
                    <div class="home-about-txt-b" data-ix="fade-in-from-left">
                        <div class="home-about-icon-b">
                            <div class="content-icon" data-w-id="a2293b1c-b5c1-c33f-adca-76040dbfcfb6"
                                data-animation-type="lottie" data-src="{{ asset_frontend('documents/home-about-icon03.json') }}" data-loop="1"
                                data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                                data-default-duration="2.0020019204587935" data-duration="0"></div>
                        </div>
                        <div>{{$home_data->icon_3}}</div>
                    </div>
                </div>
                <div class="btn-b show-in-mobile" data-ix="fade-in-from-left">
                    <a data-w-id="0c4b0b11-18b3-7dac-ec52-68aaac7611b3" href="about-programme-overview.html"
                        class="btn-arrow w-inline-block">
                        <div data-is-ix2-target="1" class="img" data-w-id="0c4b0b11-18b3-7dac-ec52-68aaac7611b4"
                            data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0"
                            data-direction="1" data-autoplay="0" data-renderer="svg"
                            data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home-learn w-clearfix">
    <div class="home-learn-img-b">
        <div class="home-learn-img"></div>
    </div>
    <div class="home-learn-title-b">
        <div>
            <div class="txt-mask">
                <div class="heading txt-color-white" data-ix="txt-appear-from-bottom">{{$home_data->third_title_1}}</div>
            </div>
        </div>
        <div>
            <div class="txt-mask">
                <div class="heading txt-color-white txt-stroke-white-nobg" data-ix="txt-appear-from-bottom">{{$home_data->third_title_2}}</div>
            </div>
        </div>
    </div>
    <div class="home-learn-content-b">
        <div class="section-content home-learn wf-section">
            <div class="subtitle" data-ix="fade-in-from-left">{{$home_data->third_description}}</div>
            @foreach ($home_data->point as $item2)
            <div class="home-learn-txt-b" data-ix="fade-in-from-left">
                <div data-w-id="bd41a2d3-4f25-5829-750e-537cf83ffe06" data-is-ix2-target="1" class="home-learn-icon"
                    data-animation-type="lottie" data-src="{{ asset_frontend('documents/home-learn-icon.json') }}" data-loop="0"
                    data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="2.0020019204587935"
                    data-duration="0" data-ix2-initial-state="0"></div>
                <div>{{$item2['description']}}</div>
            </div>
            @endforeach
            <div class="btn-b align-right" data-ix="fade-in-from-left">
                <a data-w-id="4bb75539-13cf-cd20-6a92-d764460ca8e1" href="{{$home_data->third_url}}"
                    class="btn-arrow w-inline-block">
                    <div data-is-ix2-target="1" class="img" data-w-id="4bb75539-13cf-cd20-6a92-d764460ca8e2"
                        data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0"
                        data-direction="1" data-autoplay="0" data-renderer="svg"
                        data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="section-content home-program wf-section">
    <div class="container home-program w-container">
        <div class="heading-b align-center">
            <div class="txt-mask">
                <div class="heading txt-color-purple" data-ix="txt-appear-from-bottom">{{$home_data->forth_title_1}}</div>
            </div>
            <div class="txt-mask">
                <div class="heading txt-color-purple txt-stroke" data-ix="txt-appear-from-bottom">{{$home_data->forth_title_2}}
                </div>
            </div>
        </div>
        <div class="home-program-txt-b" data-ix="fade-in-from-bottom">
            <div>{{$home_data->forth_description}}</div>
            <div class="btn-b m-align-center">
                <a data-w-id="979d4643-2400-d94f-e7c3-7784b633852a" href="curriculum-programme-structure.html"
                    class="btn-arrow w-inline-block">
                    <div data-is-ix2-target="1" class="img" data-w-id="979d4643-2400-d94f-e7c3-7784b633852b"
                        data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0"
                        data-direction="1" data-autoplay="0" data-renderer="svg"
                        data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="home-program-desktop">
        <div class="home-program-img-b"><img src="{{ asset_frontend('images/program-bg2x.png') }}" loading="lazy" sizes="100vw"
                alt="" class="img">
            <div data-w-id="eedf9f81-20e3-1655-8456-6d61252a8e1c" data-is-ix2-target="1" class="home-program-animate"
                data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-running-v02.json') }}" data-loop="1"
                data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="18.018017284129144"
                data-duration="0" data-ix2-initial-state="0"></div>
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
                            <div class="home-program-dot-more" data-w-id="a92d5e77-7021-13ea-8ad0-b8839173cd68"
                                data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1"
                                data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                                data-default-duration="4.004003840917587" data-duration="0"></div>
                            <div>{{$home_data->year_4_2}}
                            </div>
                        </div>
                    </div>
                    <div class="home-program-col" data-ix="fade-in-from-bottom">
                        <div class="home-program-bottom-txt-b"><img src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="">
                            <div class="subtitle">Year 5</div>
                            <div>{{$home_data->year_5_1}}</div>
                            <div class="home-program-dot-more" data-w-id="db684137-764d-ce87-7451-2248a6036e1a"
                                data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1"
                                data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                                data-default-duration="4.004003840917587" data-duration="0"></div>
                            <div>{{$home_data->year_5_2}}</div>
                            <div class="home-program-bottom-list"><img src="{{ asset_frontend('images/program-icon-grad-s.svg') }}"
                                    loading="lazy" alt="" class="home-program-bottom-list-icon">
                                <div>{{$home_data->year_5_3}}</div>
                            </div>
                            <div class="home-program-bottom-list"><img src="{{ asset_frontend('images/program-icon-grad-l.svg') }}"
                                    loading="lazy" alt="" class="home-program-bottom-list-icon">
                                <div>{{$home_data->year_5_4}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="home-program-col" data-ix="fade-in-from-bottom">
                        <div class="home-program-bottom-txt-b"><img src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="">
                            <div class="subtitle">PCLL</div>
                            <div class="home-program-dot-more" data-w-id="6bf826ce-2358-0cfa-e6b0-dfe22682b7a9"
                                data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1"
                                data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                                data-default-duration="4.004003840917587" data-duration="0"></div>
                            <div>{{$home_data->year_pcll}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-program-mobile">
        <div class="home-program-img-b"><img src="{{ asset_frontend('images/program-bg2x.png') }}" loading="lazy" sizes="100vw"
                alt="" class="img"></div>
        <div class="home-program-content-b">
            <div class="container-full w-container">
                <div class="home-program-row">
                    <div class="home-program-col-l">
                        <div data-w-id="35ccb048-8ec1-0315-9598-fabda659d2b0" data-is-ix2-target="1"
                            class="home-program-animate-mobile" data-animation-type="lottie"
                            data-src="{{ asset_frontend('documents/program-running-mobile.json') }}" data-loop="0" data-direction="1"
                            data-autoplay="0" data-renderer="svg" data-default-duration="15.015014403440953"
                            data-duration="0"></div>
                    </div>
                    <div class="home-program-col-r">
                        <div class="home-program-bottom-txt-b" data-ix="fade-in-from-left"><img
                                src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="" class="home-program-dot-mobile">
                            <div class="subtitle">Year 1-3</div>
                            <div>{{$home_data->year_1}}</div>
                        </div>
                        <div class="home-program-bottom-txt-b" data-ix="fade-in-from-left"><img
                                src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="" class="home-program-dot-mobile">
                            <div class="subtitle">Year 4</div>
                            <div>{{$home_data->year_4_1}}</div>
                            <div class="home-program-dot-more" data-w-id="13de1669-0259-5af9-3c9a-61cd665137f7"
                                data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1"
                                data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                                data-default-duration="4.004003840917587" data-duration="0"></div>
                            <div>{{$home_data->year_4_2}}
                            </div>
                        </div>
                        <div class="home-program-bottom-txt-b" data-ix="fade-in-from-left"><img
                                src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="" class="home-program-dot-mobile">
                            <div class="subtitle">Year 5</div>
                            <div>{{$home_data->year_5_1}}</div>
                            <div class="home-program-dot-more" data-w-id="2995db3e-123f-3565-c6f7-8906ca937c61"
                                data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1"
                                data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                                data-default-duration="4.004003840917587" data-duration="0"></div>
                            <div>{{$home_data->year_5_2}}</div>
                            <div class="home-program-bottom-list"><img src="{{ asset_frontend('images/program-icon-grad-s.svg') }}"
                                    loading="lazy" alt="" class="home-program-bottom-list-icon">
                                <div>{{$home_data->year_5_3}}</div>
                            </div>
                            <div class="home-program-bottom-list"><img src="{{ asset_frontend('images/program-icon-grad-l.svg') }}"
                                    loading="lazy" alt="" class="home-program-bottom-list-icon">
                                <div>{{$home_data->year_5_4}}</div>
                            </div>
                        </div>
                        <div class="home-program-bottom-txt-b last" data-ix="fade-in-from-left"><img
                                src="{{ asset_frontend('images/program-dot.svg') }}" loading="lazy" alt="" class="home-program-dot-mobile">
                            <div class="subtitle">PCLL</div>
                            <div class="home-program-dot-more" data-w-id="fe7b6105-4f54-c073-940e-a4d322a2df20"
                                data-animation-type="lottie" data-src="{{ asset_frontend('documents/program-dot-more.json') }}" data-loop="1"
                                data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                                data-default-duration="4.004003840917587" data-duration="0"></div>
                            <div>{{$home_data->year_pcll}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-content home-growing wf-section">
    <div class="container-full w-container">
        <div class="heading-b align-right">
            <div class="txt-mask">
                <div class="heading txt-color-purple" data-ix="txt-appear-from-bottom">{{$home_data->fifth_title_1}}</div>
            </div>
            <div class="txt-mask">
                <div class="heading txt-color-purple txt-stroke" data-ix="txt-appear-from-bottom">{{$home_data->fifth_title_2}}</div>
            </div>
        </div>
    </div>
    <div class="home-growing-img-b" data-ix="home-growing-img-b"><img src="{{ asset_frontend('images/home-growing-graphic01.svg') }}"
            loading="lazy" alt="" class="home-growing-graphic01" data-ix="home-growing-img-initial"><img
            src="{{ asset_frontend('images/home-growing-graphic02.svg') }}" loading="lazy" alt="" class="home-growing-graphic02"
            data-ix="home-growing-img-initial"><img src="{{ asset_frontend('images/home-growing-img012x.png') }}" loading="lazy"
            sizes="(max-width: 479px) 45vw, 33vw" alt=""
            class="home-growing-img01" data-ix="home-growing-img-initial"><img src="{{ asset_frontend('images/home-growing-img022x.png') }}"
            loading="lazy" sizes="(max-width: 479px) 45vw, 33vw"
            alt="" class="home-growing-img02" data-ix="home-growing-img-initial"><img
            src="{{ asset_frontend('images/home-growing-img032x.png') }}" loading="lazy" sizes="(max-width: 479px) 67vw, 50vw"
            alt="" class="home-growing-img03" data-ix="home-growing-img-initial"><img
            src="{{ asset_frontend('images/home-growing-img042x.png') }}" loading="lazy" sizes="(max-width: 479px) 45vw, 33vw"
            alt="" class="home-growing-img04" data-ix="home-growing-img-initial"></div>
    <div class="home-growing-txt-b">
        <div data-ix="fade-in-from-bottom">{!!editor($home_data->fifth_description)!!}</div>
        <div class="home-growing-btn-b" data-ix="fade-in-from-bottom">
            <a data-w-id="e27b4974-c93a-eade-c604-6c1e6d163d9d"
                href="{{$home_data->fifth_url}}" class="btn-arrow w-inline-block">
                <div data-is-ix2-target="1" class="img" data-w-id="e27b4974-c93a-eade-c604-6c1e6d163d9e"
                    data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0" data-direction="1"
                    data-autoplay="0" data-renderer="svg" data-default-duration="1.0010009602293968" data-duration="0"
                    data-ix2-initial-state="0"></div>
            </a>
        </div>
    </div>
</div>
<div class="section-content bg-home-student-voices wf-section">
    <div class="container-full w-container">
        <div class="heading-b">
            <div class="txt-mask">
                <div class="heading txt-color-purple" data-ix="txt-appear-from-bottom">Student <span
                        class="txt-stroke">Voices</span></div>
            </div>
        </div>
    </div>
    <div class="container w-container">
        <div data-delay="4000" data-animation="slide" class="student-voices-slider w-slider" data-autoplay="true"
            data-easing="ease" data-ix="student-voices-slider" data-hide-arrows="false" data-disable-swipe="false"
            data-autoplay-limit="0" data-nav-spacing="3" data-duration="600" data-infinite="true">
            <div class="student-voices-slide-mask w-slider-mask">
                <div class="student-voices-slide w-slide" data-ix="student-voices-slide">
                    <a href="student-voices-details.html" class="student-voices-slide-b w-inline-block">
                        <div class="student-voices-slide-row">
                            <div class="student-voices-slide-img-b"><img src="{{ asset_frontend('images/student-voices-img-tina2x.jpg') }}"
                                    loading="lazy"
                                    sizes="(max-width: 479px) 73vw, (max-width: 767px) 36vw, (max-width: 1279px) 41vw, (max-width: 1439px) 33vw, 29vw"
                                    alt="" class="img"><img src="{{ asset_frontend('images/student-voices-slide-mask.svg') }}" loading="lazy"
                                    alt="" class="student-voices-slide-img-mask"
                                    data-ix="student-voices-slide-img-mask"></div>
                            <div class="student-voices-slide-content-b"><img
                                    src="{{ asset_frontend('images/student-voices-slide-mask-mobile2x.png') }}" loading="lazy" alt=""
                                    class="student-voices-slide-img-mask-mobile"
                                    data-ix="student-voices-slide-img-mask-mobile">
                                <div class="student-voices-slide-txt-b">
                                    <div class="student-voices-slide-txt-quote"><img
                                            src="{{ asset_frontend('images/student-voices-graphic-quote.svg') }}" loading="lazy" alt=""
                                            class="student-voices-slide-quote">
                                        <div class="student-voices-slide-txt">I always wanted to do both business and
                                            law because the two do go hand in hand. This seems a cliché but it is also
                                            true. Business is not just about numbers, but is also about how one&#x27;s…
                                        </div>
                                    </div>
                                    <div class="student-voices-slide-txt-info">
                                        <div class="content-name"><em>Tina Wong</em></div>
                                        <ul role="list" class="w-list-unstyled">
                                            <li>
                                                <div class="txt-color-bk">BBA (Hons) (CUHK); JD (CUHK); PCLL (CUHK)
                                                </div>
                                            </li>
                                            <li>
                                                <div class="txt-color-bk">Vice President, Deutsche Bank AG, Hong Kong
                                                    Branch</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gradient-line"></div>
                    </a>
                </div>
                <div class="student-voices-slide w-slide" data-ix="student-voices-slide">
                    <a href="student-voices-details.html" class="student-voices-slide-b w-inline-block">
                        <div class="student-voices-slide-row">
                            <div class="student-voices-slide-img-b"><img src="{{ asset_frontend('images/student-voices-img-amy2x.jpg') }}"
                                    loading="lazy"
                                    sizes="(max-width: 479px) 73vw, (max-width: 767px) 36vw, (max-width: 1279px) 41vw, (max-width: 1439px) 33vw, 29vw"
                                    alt="" class="img"><img src="{{ asset_frontend('images/student-voices-slide-mask.svg') }}" loading="lazy"
                                    alt="" class="student-voices-slide-img-mask"
                                    data-ix="student-voices-slide-img-mask"></div>
                            <div class="student-voices-slide-content-b"><img
                                    src="{{ asset_frontend('images/student-voices-slide-mask-mobile2x.png') }}" loading="lazy" alt=""
                                    class="student-voices-slide-img-mask-mobile"
                                    data-ix="student-voices-slide-img-mask-mobile">
                                <div class="student-voices-slide-txt-b">
                                    <div class="student-voices-slide-txt-quote"><img
                                            src="{{ asset_frontend('images/student-voices-graphic-quote.svg') }}" loading="lazy" alt=""
                                            class="student-voices-slide-quote">
                                        <div class="student-voices-slide-txt">CUHK BBA-JD being a double degree
                                            programme, undoubtedly, can sometimes be stressful and tough. However,
                                            potentials can only be reached if you dare challenge yourself and go beyond
                                            ...</div>
                                    </div>
                                    <div class="student-voices-slide-txt-info">
                                        <div class="content-name" data-ix="fade-in-from-left"><em>Amy Chung</em></div>
                                        <ul role="list" class="w-list-unstyled">
                                            <li>
                                                <div class="txt-color-bk">BBA-JD, Class of 2022</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gradient-line"></div>
                    </a>
                </div>
                <div class="student-voices-slide w-slide" data-ix="student-voices-slide">
                    <a href="student-voices-details.html" class="student-voices-slide-b w-inline-block">
                        <div class="student-voices-slide-row">
                            <div class="student-voices-slide-img-b"><img src="{{ asset_frontend('images/student-voices-img-max2x.jpg') }}"
                                    loading="lazy"
                                    sizes="(max-width: 479px) 73vw, (max-width: 767px) 36vw, (max-width: 1279px) 41vw, (max-width: 1439px) 33vw, 29vw"
                                    alt="" class="img"><img src="{{ asset_frontend('images/student-voices-slide-mask.svg') }}" loading="lazy"
                                    alt="" class="student-voices-slide-img-mask"
                                    data-ix="student-voices-slide-img-mask"></div>
                            <div class="student-voices-slide-content-b"><img
                                    src="{{ asset_frontend('images/student-voices-slide-mask-mobile2x.png') }}" loading="lazy" alt=""
                                    class="student-voices-slide-img-mask-mobile"
                                    data-ix="student-voices-slide-img-mask-mobile">
                                <div class="student-voices-slide-txt-b">
                                    <div class="student-voices-slide-txt-quote"><img
                                            src="{{ asset_frontend('images/student-voices-graphic-quote.svg') }}" loading="lazy" alt=""
                                            class="student-voices-slide-quote">
                                        <div class="student-voices-slide-txt">At first glance, I was impressed by the
                                            CUHK BBA-JD Programme as it is very eye-catching and distinctive. I wondered
                                            how business and law …</div>
                                    </div>
                                    <div class="student-voices-slide-txt-info">
                                        <div class="content-name" data-ix="fade-in-from-left"><em>Max Chan</em></div>
                                        <ul role="list" class="w-list-unstyled">
                                            <li>
                                                <div class="txt-color-bk">BBA-JD, Class of 2022</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gradient-line"></div>
                    </a>
                </div>
            </div>
            <div class="student-voices-slide-arrow-l w-slider-arrow-left"></div>
            <div class="student-voices-slide-arrow-r w-slider-arrow-right"></div>
            <div class="hidden w-slider-nav w-round"></div>
        </div>
    </div>
</div>
<div class="section-content bg-home-career wf-section">
    <div data-w-id="50b17bd7-28a6-3642-443b-a0f7478e9a0d" class="home-career-content-b">
        <div class="home-career-title-b">
            <div class="home-career-title-txt-b">
                <div class="txt-mask">
                    <div class="heading txt-color-purple home-career-title" data-ix="txt-appear-from-bottom">{{$home_data->sixth_title_1}}
                    </div>
                </div>
                <div class="txt-mask">
                    <div class="heading txt-color-purple txt-stroke home-career-title" data-ix="txt-appear-from-bottom">
                        {{$home_data->sixth_title_2}}</div>
                </div>
                <div data-ix="fade-in-from-bottom">
                    <div class="home-career-title-txt">{{$home_data->sixth_desc}}</div>
                    <a data-w-id="af148b8c-891c-8ead-20b7-1b2794d3f4e7" href="{{$home_data->sixth_url}}"
                        class="btn-arrow w-inline-block">
                        <div data-is-ix2-target="1" class="img" data-w-id="af148b8c-891c-8ead-20b7-1b2794d3f4e8"
                            data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0"
                            data-direction="1" data-autoplay="0" data-renderer="svg"
                            data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div data-is-ix2-target="1" class="home-career-line" data-w-id="5a3b185b-55be-7e6b-4387-6478fb8b7764"
            data-animation-type="lottie" data-src="{{ asset_frontend('documents/home-career-line.json') }}" data-loop="0" data-direction="1"
            data-autoplay="0" data-renderer="svg" data-default-duration="10" data-duration="0"
            data-ix2-initial-state="0"></div>
        <div class="home-career-line-mobile" data-w-id="dfdb78cf-f616-753e-d934-5841c92785f0"
            data-animation-type="lottie" data-src="{{ asset_frontend('documents/home-career-line-mobile.json') }}" data-loop="0"
            data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="10"
            data-duration="0"></div>
        <div data-w-id="564216b1-4e8a-0874-cf42-99cb6f6f62a3" class="home-career-txt-b _01">
            <div class="home-career-txt-bg" data-ix="home-career-txt-bg03">
                <div class="home-career-txt-b-border"></div>
                <div class="home-career-txt">{{$home_data->ball_1}}</div>
            </div>
        </div>
        <div data-w-id="073ea10e-c6b5-7a70-043c-91efd47b1bbb" class="home-career-txt-b _02">
            <div class="home-career-txt-bg" data-ix="home-career-txt-bg02">
                <div class="home-career-txt-b-border"></div>
                <div class="home-career-txt">{{$home_data->ball_2}}</div>
            </div>
        </div>
        <div data-w-id="95067e1b-a6e9-3206-bde3-f90d50e8be31" class="home-career-txt-b _03">
            <div class="home-career-txt-bg" data-ix="home-career-txt-bg01">
                <div class="home-career-txt-b-border"></div>
                <div class="home-career-txt">{{$home_data->ball_3}}</div>
            </div>
        </div>
        <div data-w-id="7a83bf23-1182-1e30-a984-27a0b9ffc7d2" class="home-career-txt-b _04">
            <div class="home-career-txt-bg" data-ix="home-career-txt-bg03">
                <div class="home-career-txt-b-border"></div>
                <div class="home-career-txt">{{$home_data->ball_4}}</div>
            </div>
        </div>
        <div data-w-id="b08dd851-7cc2-a792-3264-312f41d2125c" class="home-career-txt-b _05">
            <div class="home-career-txt-bg" data-ix="home-career-txt-bg01">
                <div class="home-career-txt-b-border"></div>
                <div class="home-career-txt">{{$home_data->ball_5}}</div>
            </div>
        </div>
        <div data-w-id="a2813832-26ff-ea96-4dbe-fd55fdf62bac" class="home-career-txt-b _06">
            <div class="home-career-txt-bg" data-ix="home-career-txt-bg02">
                <div class="home-career-txt-b-border"></div>
                <div class="home-career-txt">{{$home_data->ball_6}}</div>
            </div>
        </div>
        <div data-w-id="32a2498e-f85e-f867-970d-47551cd7562e" class="home-career-txt-b _07">
            <div class="home-career-txt-bg" data-ix="home-career-txt-bg01">
                <div class="home-career-txt-b-border"></div>
                <div class="home-career-txt">{{$home_data->ball_7}}</div>
            </div>
        </div>
        <div data-w-id="1d84458f-418f-157b-77f5-e115ec824ce4" class="home-career-txt-b _08">
            <div class="home-career-txt-bg" data-ix="home-career-txt-bg03">
                <div class="home-career-txt-b-border"></div>
                <div class="home-career-txt">{{$home_data->ball_8}}</div>
            </div>
        </div>
        <div data-w-id="cf1e2e8e-60e3-550c-6f69-95c6d55e28ae" class="home-career-graphic _01"><img
                src="{{ asset_frontend('images/home-career-dot.svg') }}" loading="lazy" alt="" class="img" data-ix="home-career-graphic-img01">
        </div>
        <div data-w-id="a965b502-9f55-0360-4831-c01760c61a0b" class="home-career-graphic _02"><img
                src="{{ asset_frontend('images/home-career-dot.svg') }}" loading="lazy" alt="" class="img" data-ix="home-career-graphic-img02">
        </div>
        <div data-w-id="2d34d5ce-9e7a-fa1e-e263-cb844393e0db" class="home-career-graphic _03"><img
                src="{{ asset_frontend('images/home-career-dot.svg') }}" loading="lazy" alt="" class="img" data-ix="home-career-graphic-img02">
        </div>
        <div data-w-id="a7ffb6b4-624d-d0b3-c54f-dc44bfad4b13" class="home-career-graphic _04"><img
                src="{{ asset_frontend('images/home-career-dot.svg') }}" loading="lazy" alt="" class="img" data-ix="home-career-graphic-img01">
        </div>
    </div>
</div>
@endsection
