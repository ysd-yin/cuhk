@extends('layouts.frontend')

@section('content')
<div class="section-inner-banner wf-section">
  <div class="inner-banner-img-b">
    @if($image = $curriculum_sequence->getMedia('top_banner'))
      <div class="inner-banner-img study-sequence" data-ix="inner-banner-img" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
    @endif
  </div>
  <div class="inner-banner-txt-b">
    <div>
      <div class="txt-mask">
        <h1 class="txt-stroke-white" data-ix="txt-appear-from-bottom">{{$curriculum_sequence->title}}</h1>
      </div>
    </div>
  </div><img src="{{ asset_frontend('images/home-banner-mask.svg') }}" loading="lazy" alt="" class="inner-banner-mask">
</div>
<div class="breadcrumb-b w-clearfix">
  <div class="breadcrumb">
    <a href="/" class="breadcrumb-link">Home</a><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Curriculum</div><img src="{{ asset_frontend('images/breadcrumb-arrow.svg') }}" loading="lazy" alt="" class="breadcrumb-arrow">
    <div>Study Sequence</div>
  </div>
</div>
<div class="section-content study-sequence wf-section">
  <div>
    <div class="container-full w-container">
      <div class="subtitle-b align-center">
        <div class="subtitle" data-ix="fade-in-from-bottom">{{$curriculum_sequence->year_header}}</div>
      </div>
      <div class="study-sequence-year-row">
        <div class="study-sequence-year-col" data-ix="study-sequence-year-scroll">
          <div class="study-sequence-year-line" data-ix="study-sequence-year-line"></div>
          <div class="study-sequence-year-dot" data-ix="study-sequence-year-initial">
            <div class="study-sequence-year-indot"></div>
          </div>
          <div class="study-sequence-year-fr" data-ix="study-sequence-year-initial">
            <div class="study-sequence-year-fr-txt-b">
              <div><strong>YEAR</strong></div>
              <div class="study-sequence-year-fr-txt">1-3</div>
            </div>
          </div>
          <div class="study-sequence-year-content-b" data-ix="study-sequence-year-content-b">
            <div class="study-sequence-year-icon bba"></div>
            <div class="study-sequence-year-txt-b">
              <div class="study-sequence-year-txt01">{{$curriculum_sequence->year_1_top_unit}}</div>
              <div class="study-sequence-year-txt02">{{$curriculum_sequence->year_1_top_title}}</div>
            </div>
          </div>
          <div class="study-sequence-year-content-b" data-ix="study-sequence-year-content-b">
            <div class="study-sequence-year-icon jd"></div>
            <div class="study-sequence-year-txt-b">
              <div class="study-sequence-year-txt01">{{$curriculum_sequence->year_1_top_unit}}</div>
              <div class="study-sequence-year-txt02">{{$curriculum_sequence->year_1_bottom}}</div>
            </div>
          </div>
        </div>
        <div class="study-sequence-year-col" data-ix="study-sequence-year-scroll">
          <div class="study-sequence-year-line" data-ix="study-sequence-year-line"></div>
          <div class="study-sequence-year-dot" data-ix="study-sequence-year-initial">
            <div class="study-sequence-year-indot"></div>
          </div>
          <div class="study-sequence-year-fr" data-ix="study-sequence-year-initial">
            <div class="study-sequence-year-fr-txt-b">
              <div><strong>YEAR</strong></div>
              <div class="study-sequence-year-fr-txt">4</div>
            </div>
          </div>
          <div class="study-sequence-year-content-b" data-ix="study-sequence-year-content-b">
            <div class="study-sequence-year-icon bba"></div>
            <div class="study-sequence-year-txt-b">
              <div class="study-sequence-year-txt01">{{$curriculum_sequence->year_4_top_unit}}</div>
              <div class="study-sequence-year-txt02">{{$curriculum_sequence->year_4_top_title}}</div>
            </div>
          </div>
          <div class="study-sequence-year-content-b" data-ix="study-sequence-year-content-b">
            <div class="study-sequence-year-icon jd"></div>
            <div class="study-sequence-year-txt-b">
              <div class="study-sequence-year-txt01">{{$curriculum_sequence->year_4_bottom_unit}}</div>
              <div class="study-sequence-year-txt02">{{$curriculum_sequence->year_4_bottom}}</div>
            </div>
          </div>
        </div>
        <div class="study-sequence-year-col" data-ix="study-sequence-year-scroll">
          <div class="study-sequence-year-line" data-ix="study-sequence-year-line"></div>
          <div class="study-sequence-year-dot" data-ix="study-sequence-year-initial">
            <div class="study-sequence-year-indot"></div>
          </div>
          <div class="study-sequence-year-fr" data-ix="study-sequence-year-initial">
            <div class="study-sequence-year-fr-txt-b">
              <div><strong>YEAR</strong></div>
              <div class="study-sequence-year-fr-txt">5</div>
            </div>
          </div>
          <div class="study-sequence-year-content-b" data-ix="study-sequence-year-content-b">
            <div class="study-sequence-year-icon jd"></div>
            <div class="study-sequence-year-txt-b">
              <div class="study-sequence-year-txt01">{{$curriculum_sequence->year_5_top_unit}}</div>
              <div class="study-sequence-year-txt02">{{$curriculum_sequence->year_5_top_title}}</div>
            </div>
          </div>
        </div>
        <div class="study-sequence-year-fr-last" data-ix="study-sequence-year-graduate">
          <div class="study-sequence-year-fr-txt-b">
            <div><strong>Graduation</strong></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="study-sequence-img">
    <div class="container w-container" data-ix="fade-in-from-bottom">
      <div class="structure-chart-txt-b">
        <?php
        $total = 0;
        $total += $curriculum_structure->unit_1;
        $total += $curriculum_structure->unit_2;
        $total += $curriculum_structure->unit_3;
        $total += $curriculum_structure->unit_4;
          ?>
        <div class="study-sequence-img-txt01">{{$curriculum_sequence->unit}}</div>
        <div class="study-sequence-img-txt02 txt-stroke"><span class="study-sequence-img-txt03">{{$curriculum_sequence->unit_text_1}}</span> {{$curriculum_sequence->unit_text_2}}</div>
      </div>
      <div>{!! editor($curriculum_sequence->course_description) !!}</div>
    </div>
  </div>
</div>
<div class="section-content wf-section">
  <div class="container-full w-container">
    <div>
      <div class="study-sequence-expand-all-btn">
        <a href="#" class="content-link-btn faqs-expand-all w-inline-block" data-ix="study-sequence-expand-all-btn">
          <div class="content-link-btn-hover"></div>
          <div class="content-link-btn-icon">
            <div class="content-link-btn-icon-img-b"><img src="{{ asset_frontend('images/expand-purple.svg') }}" loading="lazy" alt="" class="content-link-btn-icon-img"><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="content-link-btn-icon-img-hover"></div>
            <div class="content-link-btn-txt">Expand All</div>
            <div class="content-link-btn-txt-hide">Hide All</div>
          </div>
        </a>
      </div>
      <div class="study-sequence-listing-b">
        <a href="#" class="study-sequence-expand-btn w-inline-block" data-ix="study-sequence-expand-btn">
          <div class="listing-hover-bg"></div>
          <div class="listing-hover-bg02"></div><img src="{{ asset_frontend('images/listing-graphic.svg') }}" loading="lazy" alt="" class="listing-graphic"><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-hover">
          <div class="study-sequence-col">
            <div><strong>{{$curriculum_sequence->year_1}}</strong></div>
          </div><img src="{{ asset_frontend('images/expand-purple.svg') }}" loading="lazy" alt="" class="listing-expand"><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-close">
        </a>
        <a href="#" class="study-sequence-expand-btn-open w-inline-block" data-ix="study-sequence-expand-btn-open">
          <div class="listing-hover-bg"></div><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-open">
          <div class="study-sequence-col">
            <div><strong>{{$curriculum_sequence->year_1}}</strong></div>
          </div><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-open">
        </a>
        <div class="study-sequence-expand" data-ix="faqs-expand">
          <div class="study-sequence-expand-content">
            <div class="tb">
              <div class="tb-row bg-gold">
                <div class="tb-col study-sequence01">
                  <div><strong>{{$curriculum_sequence_year_1->table_title_1}}</strong></div>
                </div>
                <div class="tb-col study-sequence02">
                  <div><strong>{{$curriculum_sequence_year_1->table_title_2}}</strong></div>
                </div>
              </div>
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Term 1</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_1->team_1 as $item)
                <div class="tb-row">
                  <div class="tb-col study-sequence01">
                    <div>{{$item['coruse_code']}}</div>
                  </div>
                  <div class="tb-col study-sequence02">
                    <div>{{$item['course_title']}}</div>
                  </div>
                </div>
              @endforeach
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Term 2</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_1->team_2 as $item)
                <div class="tb-row">
                  <div class="tb-col study-sequence01">
                    <div>{{$item['coruse_code']}}</div>
                  </div>
                  <div class="tb-col study-sequence02">
                    <div>{{$item['course_title']}}</div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="study-sequence-listing-b">
        <a href="#" class="study-sequence-expand-btn w-inline-block" data-ix="study-sequence-expand-btn">
          <div class="listing-hover-bg"></div>
          <div class="listing-hover-bg02"></div><img src="{{ asset_frontend('images/listing-graphic.svg') }}" loading="lazy" alt="" class="listing-graphic"><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-hover">
          <div class="study-sequence-col">
            <div><strong>{{$curriculum_sequence->year_2}}</strong></div>
          </div><img src="{{ asset_frontend('images/expand-purple.svg') }}" loading="lazy" alt="" class="listing-expand"><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-close">
        </a>
        <a href="#" class="study-sequence-expand-btn-open w-inline-block" data-ix="study-sequence-expand-btn-open">
          <div class="listing-hover-bg"></div><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-open">
          <div class="study-sequence-col">
            <div><strong>{{$curriculum_sequence->year_2}}</strong></div>
          </div><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-open">
        </a>
        <div class="study-sequence-expand" data-ix="faqs-expand">
          <div class="study-sequence-expand-content">
            <div class="tb">
              <div class="tb-row bg-gold">
                <div class="tb-col study-sequence01">
                  <div><strong>{{$curriculum_sequence_year_2->table_title_1}}</strong></div>
                </div>
                <div class="tb-col study-sequence02">
                  <div><strong>{{$curriculum_sequence_year_2->table_title_2}}</strong></div>
                </div>
              </div>
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Term 1</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_2->team_1 as $item)
                <div class="tb-row">
                  <div class="tb-col study-sequence01">
                    <div>{{$item['coruse_code']}}</div>
                  </div>
                  <div class="tb-col study-sequence02">
                    <div>{{$item['course_title']}}</div>
                  </div>
                </div>
              @endforeach
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Term 2</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_2->team_2 as $item)
              <div class="tb-row">
                <div class="tb-col study-sequence01">
                  <div>{{$item['coruse_code']}}</div>
                </div>
                <div class="tb-col study-sequence02">
                  <div>{{$item['course_title']}}</div>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="study-sequence-listing-b">
        <a href="#" class="study-sequence-expand-btn w-inline-block" data-ix="study-sequence-expand-btn">
          <div class="listing-hover-bg"></div>
          <div class="listing-hover-bg02"></div><img src="{{ asset_frontend('images/listing-graphic.svg') }}" loading="lazy" alt="" class="listing-graphic"><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-hover">
          <div class="study-sequence-col">
            <div><strong>{{$curriculum_sequence->year_3}}</strong></div>
          </div><img src="{{ asset_frontend('images/expand-purple.svg') }}" loading="lazy" alt="" class="listing-expand"><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-close">
        </a>
        <a href="#" class="study-sequence-expand-btn-open w-inline-block" data-ix="study-sequence-expand-btn-open">
          <div class="listing-hover-bg"></div><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-open">
          <div class="study-sequence-col">
            <div><strong>{{$curriculum_sequence->year_3}}</strong></div>
          </div><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-open">
        </a>
        <div class="study-sequence-expand" data-ix="faqs-expand">
          <div class="study-sequence-expand-content">
            <div class="tb">
              <div class="tb-row bg-gold">
                <div class="tb-col study-sequence01">
                  <div><strong>{{$curriculum_sequence_year_3->table_title_1}}</strong></div>
                </div>
                <div class="tb-col study-sequence02">
                  <div><strong>{{$curriculum_sequence_year_3->table_title_2}}</strong></div>
                </div>
              </div>
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Term 1</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_3->team_1 as $item)
                <div class="tb-row">
                  <div class="tb-col study-sequence01">
                    <div>{{$item['coruse_code']}}</div>
                  </div>
                  <div class="tb-col study-sequence02">
                    <div>{{$item['course_title']}}</div>
                  </div>
                </div>
              @endforeach
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Term 2</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_3->team_2 as $item)
                <div class="tb-row">
                  <div class="tb-col study-sequence01">
                    <div>{{$item['coruse_code']}}</div>
                  </div>
                  <div class="tb-col study-sequence02">
                    <div>{{$item['course_title']}}</div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="study-sequence-listing-b">
        <a href="#" class="study-sequence-expand-btn w-inline-block" data-ix="study-sequence-expand-btn">
          <div class="listing-hover-bg"></div>
          <div class="listing-hover-bg02"></div><img src="{{ asset_frontend('images/listing-graphic.svg') }}" loading="lazy" alt="" class="listing-graphic"><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-hover">
          <div class="study-sequence-col">
            <div><strong>{{$curriculum_sequence->year_4}}</strong></div>
          </div><img src="{{ asset_frontend('images/expand-purple.svg') }}" loading="lazy" alt="" class="listing-expand"><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-close">
        </a>
        <a href="#" class="study-sequence-expand-btn-open w-inline-block" data-ix="study-sequence-expand-btn-open">
          <div class="listing-hover-bg"></div><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-open">
          <div class="study-sequence-col">
            <div><strong>{{$curriculum_sequence->year_4}}</strong></div>
          </div><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-open">
        </a>
        <div class="study-sequence-expand" data-ix="faqs-expand">
          <div class="study-sequence-expand-content">
            <div class="tb">
              <div class="tb-row bg-gold">
                <div class="tb-col study-sequence01">
                  <div><strong>{{$curriculum_sequence_year_4->table_title_1}}</strong></div>
                </div>
                <div class="tb-col study-sequence02">
                  <div><strong>{{$curriculum_sequence_year_4->table_title_2}}</strong></div>
                </div>
              </div>
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Term 1</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_4->team_1 as $item)
                <div class="tb-row">
                  <div class="tb-col study-sequence01">
                    <div>{{$item['coruse_code']}}</div>
                  </div>
                  <div class="tb-col study-sequence02">
                    <div>{{$item['course_title']}}</div>
                  </div>
                </div>
              @endforeach
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Term 2</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_4->team_2 as $item)
                <div class="tb-row">
                  <div class="tb-col study-sequence01">
                    <div>{{$item['coruse_code']}}</div>
                  </div>
                  <div class="tb-col study-sequence02">
                    <div>{{$item['course_title']}}</div>
                  </div>
                </div>
              @endforeach
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Summer Term</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_4->team_3 as $item)
                <div class="tb-row">
                  <div class="tb-col study-sequence01">
                    <div>{{$item['coruse_code']}}</div>
                  </div>
                  <div class="tb-col study-sequence02">
                    <div>{{$item['course_title']}}</div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="study-sequence-listing-b">
        <a href="#" class="study-sequence-expand-btn w-inline-block" data-ix="study-sequence-expand-btn">
          <div class="listing-hover-bg"></div>
          <div class="listing-hover-bg02"></div><img src="{{ asset_frontend('images/listing-graphic.svg') }}" loading="lazy" alt="" class="listing-graphic"><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-hover">
          <div class="study-sequence-col">
            <div><strong>{{$curriculum_sequence->year_5}}</strong></div>
          </div><img src="{{ asset_frontend('images/expand-purple.svg') }}" loading="lazy" alt="" class="listing-expand"><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-close">
        </a>
        <a href="#" class="study-sequence-expand-btn-open w-inline-block" data-ix="study-sequence-expand-btn-open">
          <div class="listing-hover-bg"></div><img src="{{ asset_frontend('images/listing-graphic-hover.svg') }}" loading="lazy" alt="" class="listing-graphic-open">
          <div class="study-sequence-col">
            <div><strong>{{$curriculum_sequence->year_5}}</strong></div>
          </div><img src="{{ asset_frontend('images/expand-white.svg') }}" loading="lazy" alt="" class="listing-expand-open">
        </a>
        <div class="study-sequence-expand" data-ix="faqs-expand">
          <div class="study-sequence-expand-content">
            <div class="tb">
              <div class="tb-row bg-gold">
                <div class="tb-col study-sequence01">
                  <div><strong>{{$curriculum_sequence_year_5->table_title_1}}</strong></div>
                </div>
                <div class="tb-col study-sequence02">
                  <div><strong>{{$curriculum_sequence_year_5->table_title_2}}</strong></div>
                </div>
              </div>
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Term 1</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_5->team_1 as $item)
              <div class="tb-row">
                <div class="tb-col study-sequence01">
                  <div>{{$item['coruse_code']}}</div>
                </div>
                <div class="tb-col study-sequence02">
                  <div>{{$item['course_title']}}</div>
                </div>
              </div>
            @endforeach
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Term 2</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_5->team_2 as $item)
              <div class="tb-row">
                <div class="tb-col study-sequence01">
                  <div>{{$item['coruse_code']}}</div>
                </div>
                <div class="tb-col study-sequence02">
                  <div>{{$item['course_title']}}</div>
                </div>
              </div>
            @endforeach
              <div class="tb-row bg-lightgold">
                <div class="tb-col study-sequence01">
                  <div><strong>Summer Term</strong></div>
                </div>
                <div class="tb-col study-sequence02"></div>
              </div>
              @foreach ($curriculum_sequence_year_5->team_3 as $item)
              <div class="tb-row">
                <div class="tb-col study-sequence01">
                  <div>{{$item['coruse_code']}}</div>
                </div>
                <div class="tb-col study-sequence02">
                  <div>{{$item['course_title']}}</div>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
      <div data-ix="fade-in-from-bottom">
        <div class="subtitle">{{$curriculum_sequence->notes_title}}:</div>
        {!! editor($curriculum_sequence->notes) !!}
      </div>
    </div>
  </div>
</div>
<div class="bottom-banner" data-ix="study-sequence-course">
  @if($image = $curriculum_sequence->getMedia('bottom_banner_banner'))
  <div class="study-sequence-course-bg" style="background-image:url('{{ $image->getResizedImage(2000) }}')"></div>
  @endif
  <img src="{{ asset_frontend('images/study-squence-course-graphic-l01.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-l01" data-ix="study-sequence-course-graphic-initial"><img src="{{ asset_frontend('images/study-squence-course-graphic-l02.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-l02" data-ix="study-sequence-course-graphic-initial"><img src="{{ asset_frontend('images/study-squence-course-graphic-l03.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-l03" data-ix="study-sequence-course-graphic-initial"><img src="{{ asset_frontend('images/study-squence-course-graphic-r01.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-r01" data-ix="study-sequence-course-graphic-initial"><img src="{{ asset_frontend('images/study-squence-course-graphic-l02.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-r02" data-ix="study-sequence-course-graphic-initial"><img src="{{ asset_frontend('images/study-squence-course-graphic-r03.svg') }}" loading="lazy" alt="" class="bottom-banner-graphic-r03" data-ix="study-sequence-course-graphic-initial">
  <div class="bottom-banner-txt-b">
    <div class="section-content wf-section">
      <div class="container-full w-container" data-ix="fade-in-from-bottom">
        <h2 class="txt-color-white">{{$curriculum_sequence->course_list}}</h2>
        <div class="txt-color-white">{!!editor($curriculum_sequence->course_list_description)!!}</div>
        <div class="btn-b m-align-center">
          <a data-w-id="3a2eeea4-c435-af02-0868-38417c39e388" href="{{$curriculum_sequence->url}}" target="_blank" class="btn-arrow w-inline-block">
            <div data-is-ix2-target="1" class="img" data-w-id="3a2eeea4-c435-af02-0868-38417c39e389" data-animation-type="lottie" data-src="{{ asset_frontend('documents/btn-arrow.json') }}" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1.0010009602293968" data-duration="0" data-ix2-initial-state="0"></div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  add_current_page = setInterval(jQ, 1000);
  
  function jQ(){
    $('.curriculum_menu .nav-dropdown-link-b a').eq(1).addClass(" w--current")
  }
  
  function StopInteval() {
    clearInterval(add_current_page);
  }
  </script>
@endsection