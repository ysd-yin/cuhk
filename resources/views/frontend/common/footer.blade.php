<div class="footer">
    <div class="footer-row">
      <div class="footer-col-l">
        <div class="section-content footer-left wf-section">
          <div>
            <div class="footer-logo-align">
              <a href="https://www.bschool.cuhk.edu.hk/" target="_blank" class="footer-logo-b bba w-inline-block"><img src="{{ asset_frontend('images/footer-logo-bba2x.png') }}" loading="lazy" width="68" alt=""></a>
              <a href="https://www.law.cuhk.edu.hk/app/" target="_blank" class="footer-logo-b law w-inline-block"><img src="{{ asset_frontend('images/footer-logo-law2x.png') }}" loading="lazy" width="95" alt=""></a>
              <a href="https://www.cuhk.edu.hk/english/index.html" target="_blank" class="footer-logo-b cuhk-mobile w-inline-block"><img src="{{ asset_frontend('images/footer-logo-cuhk2x.png') }}" loading="lazy" width="88" alt=""></a>
            </div>
            <div class="txt-color-white opacity-50">
              <a href="#" class="txt-link-white opacity50 footer-col-l-txt popup-link" data-ix="link-privacy">Privacy Policy</a><span class="footer-txt-dot">・</span>
              <a href="#" class="txt-link-white opacity50 footer-col-l-txt popup-link" data-ix="link-disclaimer">Disclaimer</a>
            </div>
          </div>
          <a href="https://www.cuhk.edu.hk/english/index.html" target="_blank" class="footer-logo-cuhk w-inline-block"><img src="{{ asset_frontend('images/footer-logo-cuhk2x.png') }}" loading="lazy" width="88" alt=""></a>
        </div>
      </div>
      <div class="footer-col-r">
        <div class="section-content wf-section">
          <div class="footer-sitemap">
            <div class="footer-sitemap-row">
              <div class="footer-sitemap-col">
                <div class="footer-sitemap-list">
                  <div class="footer-sitemap-title">{{$header->about_menu}}</div>
                  <ul role="list" class="footer-sitemap-listing w-list-unstyled">
                    <li>
                      <a href="{{route('about_message')}}" class="txt-link-white">{{$header->about_menu_1}}</a>
                    </li>
                    <li>
                      <a href="{{route('about_overview')}}" class="txt-link-white">{{$header->about_menu_2}}</a>
                    </li>
                    <li>
                      <a href="{{route('about_management')}}" class="txt-link-white">{{$header->about_menu_3}}</a>
                    </li>
                    <li>
                      <a href="{{route('about_faculty')}}" class="txt-link-white">{{$header->about_menu_4}}</a>
                    </li>
                    <li>
                      <a href="{{route('about_learning')}}" class="txt-link-white">{{$header->about_menu_5}}</a>
                    </li>
                    <li>
                      <a href="{{route('about_news')}}" class="txt-link-white">{{$header->about_menu_6}}</a>
                    </li>
                    <li>
                      <a href="{{route('about_contact_us')}}" class="txt-link-white">{{$header->about_menu_7}}</a>
                    </li>
                  </ul>
                </div>
                <div class="footer-sitemap-list">
                  <div class="footer-sitemap-title">{{$header->curriculum_menu}}</div>
                  <ul role="list" class="footer-sitemap-listing w-list-unstyled">
                    <li>
                      <a href="{{route('curriculum_structure')}}" class="txt-link-white">{{$header->curriculum_menu_1}}</a>
                    </li>
                    <li>
                      <a href="{{route('curriculum_sequence')}}" class="txt-link-white">{{$header->curriculum_menu_2}}</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="footer-sitemap-col">
                <div class="footer-sitemap-list">
                  <div class="footer-sitemap-title">{{$header->student_menu}}</div>
                  <ul role="list" class="footer-sitemap-listing w-list-unstyled">
                    <li>
                      <a href="{{route('student_development')}}" class="txt-link-white">{{$header->student_menu_1}}</a>
                    </li>
                    <li>
                      <a href="{{route('student_achievement')}}" class="txt-link-white">{{$header->student_menu_2}}</a>
                    </li>
                  </ul>
                </div>
                <div class="footer-sitemap-list">
                  <div class="footer-sitemap-title">
                    <a href="{{route('student_voices')}}" class="txt-link-white">{{$header->student_voices_menu}}</a>
                  </div>
                </div>
                <div class="footer-sitemap-list">
                  <div class="footer-sitemap-title">
                    <a href="{{route('career_prospects')}}" class="txt-link-white">{{$header->career_menu}}</a>
                  </div>
                </div>
              </div>
              <div class="footer-sitemap-col">
                <div class="footer-sitemap-list">
                  <div class="footer-sitemap-title">{{$header->admissions_menu}}</div>
                  <ul role="list" class="footer-sitemap-listing w-list-unstyled">
                    <li>
                      <a href="{{route('admissions')}}" class="txt-link-white">{{$header->admissions_menu_1}}</a>
                    </li>
                    <li>
                      <a href="{{route('admissions_programme')}}" class="txt-link-white">{{$header->admissions_menu_2}}</a>
                    </li>
                    <li>
                      <a href="{{route('admissions')}}#tuition-fee" class="txt-link-white">{{$header->admissions_menu_3}}</a>
                    </li>
                    <li>
                      <a href="{{route('admissions_faq')}}" class="txt-link-white">{{$header->admissions_menu_4}}</a>
                    </li>
                  </ul>
                </div>
                <div class="footer-sitemap-list">
                  <div class="footer-sitemap-title">{{$footer->protals}}</div>
                  <ul role="list" class="footer-sitemap-listing w-list-unstyled">
                    <li>
                      <a href="{{$footer->url_1}}" target="_blank" class="txt-link-white">{{$footer->title_1}}</a>
                    </li>
                    <li>
                      <a href="{{$footer->url_2}}" target="_blank" class="txt-link-white">{{$footer->title_2}}</a>
                    </li>
                    <li>
                      <a href="{{$footer->url_3}}" target="_blank" class="txt-link-white">{{$footer->title_3}}</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-sitemap-mobile">
            <div class="footer-sitemap-list">
              <a href="#" class="footer-sitemap-title w-inline-block" data-ix="footer-sitemap-btn">
                <div>{{$header->about_menu}}</div><img src="{{ asset_frontend('images/expand-gold.svg') }}" loading="lazy" alt="" class="footer-sitemap-expand-icon">
              </a>
              <div class="footer-sitemap-expand" data-ix="footer-sitemap-expand">
                <ul role="list" class="footer-sitemap-listing w-list-unstyled">
                  <li>
                    <a href="{{route('about_message')}}" class="txt-link-white">{{$header->about_menu_1}}</a>
                  </li>
                  <li>
                    <a href="{{route('about_overview')}}" class="txt-link-white">{{$header->about_menu_2}}</a>
                  </li>
                  <li>
                    <a href="{{route('about_management')}}" class="txt-link-white">{{$header->about_menu_3}}</a>
                  </li>
                  <li>
                    <a href="{{route('about_faculty')}}" class="txt-link-white">{{$header->about_menu_4}}</a>
                  </li>
                  <li>
                    <a href="{{route('about_learning')}}" class="txt-link-white">{{$header->about_menu_5}}</a>
                  </li>
                  <li>
                    <a href="{{route('about_news')}}" class="txt-link-white">{{$header->about_menu_6}}</a>
                  </li>
                  <li>
                    <a href="{{route('about_contact_us')}}" class="txt-link-white">{{$header->about_menu_7}}</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="footer-sitemap-list">
              <a href="#" class="footer-sitemap-title w-inline-block" data-ix="footer-sitemap-btn">
                <div>{{$header->curriculum_menu}}</div><img src="{{ asset_frontend('images/expand-gold.svg') }}" loading="lazy" alt="" class="footer-sitemap-expand-icon">
              </a>
              <div class="footer-sitemap-expand" data-ix="footer-sitemap-expand">
                <ul role="list" class="footer-sitemap-listing w-list-unstyled">
                  <li>
                    <a href="{{route('curriculum_structure')}}" class="txt-link-white">{{$header->curriculum_menu_1}}</a>
                  </li>
                  <li>
                    <a href="{{route('curriculum_sequence')}}" class="txt-link-white">{{$header->curriculum_menu_2}}</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="footer-sitemap-list">
              <a href="#" class="footer-sitemap-title w-inline-block" data-ix="footer-sitemap-btn">
                <div>{{$header->student_menu}}</div><img src="{{ asset_frontend('images/expand-gold.svg') }}" loading="lazy" alt="" class="footer-sitemap-expand-icon">
              </a>
              <div class="footer-sitemap-expand" data-ix="footer-sitemap-expand">
                <ul role="list" class="footer-sitemap-listing w-list-unstyled">
                  <li>
                    <a href="{{route('student_development')}}" class="txt-link-white">{{$header->student_menu_1}}</a>
                  </li>
                  <li>
                    <a href="{{route('student_achievement')}}" class="txt-link-white">{{$header->student_menu_2}}</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="footer-sitemap-list">
              <a href="{{route('student_voices')}}" class="footer-sitemap-title w-inline-block">
                <div>{{$header->student_voices_menu}}</div>
              </a>
            </div>
            <div class="footer-sitemap-list">
              <a href="{{route('career_prospects')}}" class="footer-sitemap-title w-inline-block">
                <div>{{$header->career_menu}}</div>
              </a>
            </div>
            <div class="footer-sitemap-list">
              <a href="#" class="footer-sitemap-title w-inline-block" data-ix="footer-sitemap-btn">
                <div>{{$header->admissions_menu}}</div><img src="{{ asset_frontend('images/expand-gold.svg') }}" loading="lazy" alt="" class="footer-sitemap-expand-icon">
              </a>
              <div class="footer-sitemap-expand" data-ix="footer-sitemap-expand">
                <ul role="list" class="footer-sitemap-listing w-list-unstyled">
                  <li>
                    <a href="{{route('admissions')}}" class="txt-link-white">{{$header->admissions_menu_1}}</a>
                  </li>
                  <li>
                    <a href="{{route('admissions_programme')}}" class="txt-link-white">{{$header->admissions_menu_2}}</a>
                  </li>
                  <li>
                    <a href="{{route('admissions')}}#tuition-fee" class="txt-link-white">{{$header->admissions_menu_3}}</a>
                  </li>
                  <li>
                    <a href="{{route('admissions_faq')}}" class="txt-link-white">{{$header->admissions_menu_4}}</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="footer-sitemap-list">
              <a href="#" class="footer-sitemap-title w-inline-block" data-ix="footer-sitemap-btn">
                <div>{{$footer->protals}}</div><img src="{{ asset_frontend('images/expand-gold.svg') }}" loading="lazy" alt="" class="footer-sitemap-expand-icon">
              </a>
              <div class="footer-sitemap-expand" data-ix="footer-sitemap-expand">
                <ul role="list" class="footer-sitemap-listing w-list-unstyled">
                  <li>
                    <a href="{{$footer->url_1}}" target="_blank" class="txt-link-white">{{$footer->title_1}}</a>
                  </li>
                  <li>
                    <a href="{{$footer->url_2}}" target="_blank" class="txt-link-white">{{$footer->title_2}}</a>
                  </li>
                  <li>
                    <a href="{{$footer->url_3}}" target="_blank" class="txt-link-white">{{$footer->title_3}}</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-bottom-row">
            <div class="footer-bottom-col-l">
              <div class="txt-color-white opacity-50">Copyright © 2022. All Rights Reserved. The Chinese University of Hong Kong.</div>
            </div>
            <div class="footer-bottom-col-r w-clearfix">
              <a href="https://www.aacsb.edu/about-us" target="_blank" class="footer-bottom-logo w-inline-block"><img src="{{ asset_frontend('images/footer-logo-aacsb2x.png') }}" loading="lazy" width="120" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=622e9dcd9a2c51920e6316d0" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset_frontend('js/cuhk-bba-jd-ysd-v01.js') }}" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script>
      $(document).ready(function() {
        $('img').attr('loading', 'eager')
      })
    </script>
  <script src="https://cdn.jsdelivr.net/npm/body-scroll-lock@3.0.3/lib/bodyScrollLock.min.js"></script>
  <script>
      $(document).on('click', 'html:not(.popup-opened) .popup-link', function() {
        $('html').addClass('popup-opened');
        $('.popup-scroll').scrollTop(0);
        $('.popup-scroll').each(function() {
          bodyScrollLock.disableBodyScroll($(this)[0]);
        })
      })
      $(document).on('click', 'html.popup-opened .popup-close', function() {
        bodyScrollLock.clearAllBodyScrollLocks();
        $('html').removeClass('popup-opened');
      })
    </script>
    <script>
      // setInterval(function () {
      //   if($('.section-home-banner').find($('.w-slider-aria-label'))){
      //     var banner = $('.section-home-banner').find($('.w-slider-aria-label')).text();
      //     var banner_showing = banner.substring(6, 7);
          
      //   }
      //   }, 1000);
      //   $( ".section-home-banner" ).click(function() {
      //     // window.location.href = $( ".section-home-banner" ).attr('href');
      //   });
    </script>
    <style>
      /* .section-home-banner{
        cursor: pointer;
      } */
    </style>
  <script>
      //--------------------------------
      $(document).ready(function() {
        var config = {
          attributes: true,
          childList: false,
          subtree: false,
          attributeFilter: ['class']
        };
        // set up setObserver function
        function setObserver(target, index) {
          // create a new instance of the MutationObserver
          var observer = new MutationObserver(function(mutations) {
            // for each mutation object being observed
            mutations.forEach(function(mutation) {
              // check for its 'class' attribute
              if (mutation.attributeName === 'class') {
                // get the list of all classes
                var classList = mutation.target.className;
                // if the class 'w-active' exists
                if (/w-active/.exec(classList)) {
                  // add 'active' class to current custom dot of same index as the .w-slider-dot 
                  $('#home-banner-txt-slider').find('.home-banner-txt-b').removeClass('active');
                  var tempElement = $('#home-banner-txt-slider .home-banner-txt-slide:nth-child(' + (index + 1) + ')');
                  $('#home-banner-txt-slider').find('.w-slider-nav').children().eq(index).trigger('tap');
                  tempElement.find('.home-banner-txt-b').addClass('active');
                }
              }
            });
          });
          // call the MutationObserver on the target element
          observer.observe(target, config);
        }
        // for each .w-slider-dot
        $('.home-banner-slider .w-slider-dot').each(function(index, dot) {
          // call the setObserver function to run the MutationObserver
          setObserver(dot, index)
        });
      });
    </script>
    </div>