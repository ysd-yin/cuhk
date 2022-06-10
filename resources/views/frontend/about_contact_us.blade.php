@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    @if($image = $about_contact_us->getMedia('top_banner'))
      <div class="inner-banner-img contact" data-ix="inner-banner-img" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
    @endif
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$about_contact_us->banner_title}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>About</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Contact Us</div>
  </div>
</div>
<div class="section-content wf-section">
  <div class="container w-container">
    <div class="align-center" data-ix="fade-in-from-bottom">
      <div class="heading2-b">
        <div>
          <div class="txt-mask">
            <h2>{{$about_contact_us->title_1}}</h2>
          </div>
        </div>
        <div>
          <div class="txt-mask">
            <h2 class="txt-stroke">{{$about_contact_us->title_2}}</h2>
          </div>
        </div>
      </div>
      <div class="contact-row">
        <div class="contact-col">
          <a href="//{{$about_contact_us->website}}" target="_blank" class="contact-link-b w-inline-block">
            <div class="contact-icon">
              <div class="content-icon" data-w-id="9e889050-1a5e-1ce1-7eea-76f972c54d49" data-animation-type="lottie" data-src="{{ asset_frontend('documents/contact-icon-web.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="3.0030028806881908" data-duration="0"></div>
            </div>
            <div>{{$about_contact_us->website}}</div>
          </a>
        </div>
        <div class="contact-col">
          <a href="mailto:{{$about_contact_us->email}}" class="contact-link-b w-inline-block">
            <div class="contact-icon">
              <div class="content-icon" data-w-id="f54d46d6-885a-1246-483c-72afdc41dcf2" data-animation-type="lottie" data-src="{{ asset_frontend('documents/contact-icon-mail.json') }}" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="4.004003840917587" data-duration="0"></div>
            </div>
            <div>{{$about_contact_us->email}}</div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wf-section">
  <div class="contact-bottom-row" data-ix="contact-bottom-row"><img src="{{ asset_frontend('images/contact-graphic01.svg') }}" loading="lazy" alt="" class="contact-bottom-graphic01" data-ix="contact-bottom-initial"><img src="{{ asset_frontend('images/contact-graphic02.svg') }}" loading="lazy" alt="" class="contact-bottom-graphic02" data-ix="contact-bottom-initial">
    <div class="contact-bottom-col contact-bottom-bg-bba" data-ix="contact-bottom-initial" 
    @if($image = $about_contact_us->getMedia('undergraduate_office_image'))
    style="background-image:url('{{ $image->getResizedImage(2000) }}')"
    @endif
    >
      <div class="subtitle-b">
        <div class="subtitle">{{$about_contact_us->undergraduate_office_title}}</div>
      </div>
      <div class="contact-bottom-txt-b">
        <a href="{{$about_contact_us->undergraduate_office_map}}" target="_blank" class="txt-link-white">{!! editor($about_contact_us->undergraduate_office_address) !!}</a>
      </div>
      <div class="contact-bottom-txt-b">
        <a href="tel:+852{{$about_contact_us->undergraduate_office_tel}}" class="txt-link-white">Tel: {{$about_contact_us->undergraduate_office_tel}}</a>
      </div>
      <div class="contact-bottom-txt-b">
        <a href="tel:+852{{$about_contact_us->undergraduate_office_fax}}" class="txt-link-white">Fax: {{$about_contact_us->undergraduate_office_fax}}</a>
      </div>
      <div>
        <a href="{{$about_contact_us->undergraduate_office_fb}}" target="_blank" class="btn-icon w-inline-block" data-ix="btn-icon"><img src="{{ asset_frontend('images/contact-icon-fb.svg') }}" loading="lazy" alt="" class="btn-icon-img"><img src="{{ asset_frontend('images/contact-icon-fb-hover.svg') }}" loading="lazy" alt="" class="btn-icon-img-hover"></a>
        <a href="{{$about_contact_us->undergraduate_office_in}}" target="_blank" class="btn-icon w-inline-block" data-ix="btn-icon"><img src="{{ asset_frontend('images/contact-icon-linkedin2x.png') }}" loading="lazy" width="32" alt="" class="btn-icon-img"><img src="{{ asset_frontend('images/contact-icon-linkedin-hover2x.png') }}" loading="lazy" alt="" class="btn-icon-img-hover"></a>
        <a href="{{$about_contact_us->undergraduate_office_ig}}" target="_blank" class="btn-icon w-inline-block" data-ix="btn-icon"><img src="{{ asset_frontend('images/contact-icon-ig.svg') }}" loading="lazy" alt="" class="btn-icon-img"><img src="{{ asset_frontend('images/contact-icon-ig-hover.svg') }}" loading="lazy" alt="" class="btn-icon-img-hover"></a>
        <a href="{{$about_contact_us->undergraduate_office_wechat}}" target="_blank" class="btn-icon w-inline-block" data-ix="btn-icon"><img src="{{ asset_frontend('images/contact-icon-wechat.svg') }}" loading="lazy" alt="" class="btn-icon-img"><img src="{{ asset_frontend('images/contact-icon-wechat-hover.svg') }}" loading="lazy" alt="" class="btn-icon-img-hover"></a>
        <a href="{{$about_contact_us->undergraduate_office_youtube}}" target="_blank" class="btn-icon w-inline-block" data-ix="btn-icon"><img src="{{ asset_frontend('images/contact-icon-youtube.svg') }}" loading="lazy" alt="" class="btn-icon-img"><img src="{{ asset_frontend('images/contact-icon-youtube-hover.svg') }}" loading="lazy" alt="" class="btn-icon-img-hover"></a>
      </div>
    </div>
    <div class="contact-bottom-col contact-bottom-bg-jd" data-ix="contact-bottom-initial"
    @if($image = $about_contact_us->getMedia('faculty_law_image'))
    style="background-image:url('{{ $image->getResizedImage(2000) }}')"
    @endif
    >
      <div class="subtitle-b">
        <div class="subtitle">{{$about_contact_us->faculty_law_title}}</div>
      </div>
      <div class="contact-bottom-txt-b">
        <a href="{{$about_contact_us->faculty_law_map}}" target="_blank" class="txt-link-white">{!! editor($about_contact_us->faculty_law_address) !!}</a>
      </div>
      <div class="contact-bottom-txt-b">
        <a href="tel:+852{{$about_contact_us->faculty_law_tel}}" class="txt-link-white">Tel: {{$about_contact_us->faculty_law_tel}}</a>
      </div>
      <div class="contact-bottom-txt-b">
        <a href="tel:+852{{$about_contact_us->faculty_law_fax}}" class="txt-link-white">Fax: {{$about_contact_us->faculty_law_fax}}</a>
      </div>
      <div>
        <a href="{{$about_contact_us->faculty_law_fb}}" target="_blank" class="btn-icon w-inline-block" data-ix="btn-icon"><img src="{{ asset_frontend('images/contact-icon-fb.svg') }}" loading="lazy" alt="" class="btn-icon-img"><img src="{{ asset_frontend('images/contact-icon-fb-hover.svg') }}" loading="lazy" alt="" class="btn-icon-img-hover"></a>
        <a href="{{$about_contact_us->faculty_law_twitter}}" target="_blank" class="btn-icon w-inline-block" data-ix="btn-icon"><img src="{{ asset_frontend('images/contact-icon-twitter.svg') }}" loading="lazy" alt="" class="btn-icon-img"><img src="{{ asset_frontend('images/contact-icon-twitter-hover.svg') }}" loading="lazy" alt="" class="btn-icon-img-hover"></a>
        <a href="{{$about_contact_us->faculty_law_ln}}" target="_blank" class="btn-icon w-inline-block" data-ix="btn-icon"><img src="{{ asset_frontend('images/contact-icon-linkedin2x.png') }}" loading="lazy" width="32" alt="" class="btn-icon-img"><img src="{{ asset_frontend('images/contact-icon-linkedin-hover2x.png') }}" loading="lazy" alt="" class="btn-icon-img-hover"></a>
        <a href="{{$about_contact_us->faculty_law_youtube}}" target="_blank" class="btn-icon w-inline-block" data-ix="btn-icon"><img src="{{ asset_frontend('images/contact-icon-youtube.svg') }}" loading="lazy" alt="" class="btn-icon-img"><img src="{{ asset_frontend('images/contact-icon-youtube-hover.svg') }}" loading="lazy" alt="" class="btn-icon-img-hover"></a>
      </div>
    </div>
  </div>
</div>
<script>
add_current_page = setInterval(jQ, 1000);

function jQ(){
  $('.about_menu .nav-dropdown-link-b a').eq(6).addClass(" w--current")
}

function StopInteval() {
  clearInterval(add_current_page);
}
</script>
@endsection