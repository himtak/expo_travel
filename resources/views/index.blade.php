<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Noor Al-Shams</title>
    <meta name="description" content="Travel Agency Services" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{ asset('img/icon/favicon.png') }}"
    />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style-2.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

  </head>
  <body>
    <header>
      <div class="header-area">
        <div class="main-header header-sticky">
          <div class="container-fluid">
            <div class="row align-items-center">
              <!-- Logo -->
              <div class="col-4 col-xl-2 col-lg-2">
                <div class="logo">
                  <a href="index.html"
                    ><img
                      src="{{ asset('img/logo/logo1.png') }}"
                      alt="noor alshams"
                      class="logo_img"
                  /></a>
                </div>
              </div>
              <div class="col-8 col-xl-10 col-lg-10">
                <div
                  class="
                    menu-wrapper
                    d-flex
                    align-items-center
                    justify-content-end
                  "
                >
                  <!-- Main-menu -->
                  <div class="main-menu d-flex">
                    <nav>
                      <ul id="navigation">
                        <!-- Button -->
                        <li class="button-header">
                          <a
                            href="tel://+971{{ config('settings.call_number_main') }}"
                            class="header-btn"
                            target="_blank"
                          >
                            <i class="fas fa-phone-alt"></i
                            ><span class="header-spans">Call</span></a
                          >
                        </li>
                        <li class="button-header">
                          <a
                            href="https://wa.me/971{{ config('settings.whatsapp_number') }}"
                            class="header-btn"
                            style="background-color: #25d366"
                          >
                            <i class="fab fa-whatsapp"></i>
                            <span class="header-spans">Whatsapp</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <!--? slider Area Start-->
      <div class="slider-area fix">
        <div class="slider-active">
          <div class="single-slider">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-9 col-sm-12">
                  <div class="hero__caption text-center">
                    <h1 data-animation="fadeInUp" data-delay="0.1s">
                        {{ config('settings.welcome_message_b') }}
                    </h1>
                    <p data-animation="fadeInUp" data-delay="0.6s">
                        {{ config('settings.welcome_message_s') }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="
            car-img
            slider-bg1 slider-height
            d-flex
            justify-content-center
            align-items-end
          "
        >
          <div class="container">
            <div class="row">
              <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8">
                <div class="car running">
                  <img src="{{ asset('img/hero/car.png') }}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- slider Area End-->
      <!--? services area start -->
      <section class="services-section section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5">
              <!-- Section Tittle -->
              <div class="section-tittle text-center mb-45">
                <span>Check our best promotional tour</span>
                <h2>Upcoming Events</h2>
              </div>
            </div>
          </div>
          <div class="services-active">
            @for($i = 1; $i < 5; $i++)
            @if(config('settings.promotion_'. $i .'_title') != '' and config('settings.promotion_'. $i .'_title') != null)
                <div class="col-lg-{{ 3/12 }} col-md-{{ 3/12 }} col-sm-6">
                <div class="single-cat mb-30">
                  <div class="cat-img">
                    <img src="{{ asset('img/web/'.config('settings.promotion_'.$i.'_photo')) }}" alt="" />
                  </div>
                  <div class="cat-cap">
                    <div class="pricing d-flex justify-content-between">
                      <h3><a href="events_details.html"> {{ config('settings.promotion_'.$i.'_title') }} </a></h3>
                      <span class="price">{{ config('settings.promotion_'.$i.'_price') }}</span>
                    </div>
                    <p>
                        <a href="#">
                            {{ date('d M', strtotime(config('settings.promotion_'.$i.'_start'))) }}
                             -
                             {{ date('d M', strtotime(config('settings.promotion_'.$i.'_end'))) }}
                        </a>
                        {{ \Carbon\Carbon::parse(config('settings.promotion_'.$i.'_start'))->diffInDays(\Carbon\Carbon::parse(config('settings.promotion_'.$i.'_end')))+1 }}
                         Days
                    </p>
                  </div>
                </div>
              </div>
            @endif
            @endfor
          </div>
        </div>
      </section>
      <!-- Services End -->
      <!--? About -->
      <div class="support-company-area bottom-padding">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-10">
              <div class="support-location-img">
                <img src="{{ asset('img/gallery/about.png') }}" alt="" />
              </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-10">
              <div class="right-caption">
                <!-- Section Tittle -->
                <div class="section-tittle">
                  <span>About Us</span>
                  <h2>{{ config('settings.about_title') }}</h2>
                </div>
                <div class="support-caption">
                  <p class="mb-50">
                    {{ config('settings.about_decs') }}
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About Area End-->
      <!--? Testimonial Start -->
      <div
        class="testimonial-area testimonial-padding section-img-bg2"
        data-background="{{ asset('img/gallery/section_bg1.jpg') }}"
      >
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-xl-11 col-lg-11 col-md-9">
              <div class="h1-testimonial-active">
                @for($i = 1; $i < 3; $i++)
                <!-- Single Testimonial -->
                <div class="single-testimonial text-center">
                  <div class="testimonial-caption">
                    <div class="testimonial-top-cap">
                      <h2>What customers say</h2>
                      <p>
                        "{{ config('settings.testimonial_content_'.$i) }}"
                      </p>
                    </div>
                    <!-- founder -->
                    <div
                      class="
                        testimonial-founder
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >

                      <div class="founder-text">
                        <span>{{ config('settings.testimonial_writer_'.$i) }}</span>
                      </div>
                    </div>
                  </div>
                </div>
                @endfor
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->
      <!--? project us start-->
      <section class="project-us pb-padding section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-7 col-md-10">
              <div class="section-tittle text-center mb-40">
                <span>Services</span>
                <h2>Full range of travel service</h2>
              </div>
            </div>
          </div>
          <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-6 col-md-10">
              <div class="project-caption">
                <!-- collapse-wrapper -->
                <div class="collapse-wrapper">
                  <div class="accordion" id="accordionExample">
                    <!-- single-one -->
                    @for($i = 1; $i < 6; $i++)
                    @if(config('settings.service_title_'. $i ) != '' and config('settings.service_title_'. $i ) != null)
                    <div class="card">
                        <div class="card-header" id="heading_{{ $i }}">
                          <h2 class="mb-0">
                            <a
                              href="#"
                              class="btn-link collapsed"
                              data-toggle="collapse"
                              data-target="#collapse_{{ $i }}"
                              aria-expanded="false"
                              aria-controls="collapse_{{ $i }}"
                              >{{ config('settings.service_title_'.$i) }}</a
                            >
                          </h2>
                        </div>
                        <div
                          id="collapse_{{ $i }}"
                          class="collapse"
                          aria-labelledby="heading_{{ $i }}"
                          data-parent="#accordion_{{ $i }}"
                        >
                          <div class="card-body">
                            {{ config('settings.service_desc_'.$i) }}
                          </div>
                        </div>
                    </div>
                    @endif
                    @endfor

                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-10 col-sm-10">
              <div class="project-right-cap">
                <div class="project-right-img">
                  <img src="{{ asset('img/gallery/about2.png') }}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  project us end-->

      <!--? video_start -->
      <div class="bottom-padding">
        <div class="container">
          <div
            class="video-area section-img-bg2 d-flex align-items-center"
            data-background="{{ asset('img/web/'.config('settings.video_photo')) }}"
          >
            <div class="video-wrap">
              <div class="video-icon">
                <a
                  class="popup-video"
                  href="{{ config('settings.video_link') }}"
                >
                  <img src="{{ asset('img/icon/play-butto.svg') }}" alt="" />
                </a>
              </div>
              <h3>{{ config('settings.video_title') }}</h3>
            </div>
          </div>
        </div>
      </div>
      <!-- video_end -->

      <!--?  Contact Area start  -->
      <section class="contact-section" id="contact-section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="contact-title text-center">Contact Us</h2>
            </div>
            @if(session()->has('success'))
                <div class="col-12 alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="col-lg-12">
              <form
                class="form-contact contact_form"
                action="{{ route('contact_us') }}"
                method="GET"
              >
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                          <input
                            class="form-control"
                            name="contact_subject"
                            id="contact_subject"
                            type="text"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Write Subject'"
                            placeholder="Write Subject"
                            required
                          />
                        </div>
                      </div>
                  <div class="col-12">
                    <div class="form-group">
                      <textarea
                        class="form-control w-100"
                        name="contact_message"
                        id="contact_message"
                        cols="30"
                        rows="9"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Write Message'"
                        placeholder=" Write Message"
                        required
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input
                        class="form-control valid"
                        name="contact_name"
                        id="contact_name"
                        type="text"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Write your name'"
                        placeholder="Write your name"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input
                        class="form-control valid"
                        name="contact_email"
                        id="contact_email"
                        type="email"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Write email address'"
                        placeholder="Write your email address"
                        required
                      />
                    </div>
                  </div>

                </div>
                <div class="form-group mt-3">
                  <button
                    type="submit"
                    class="button button-contactForm btn btn-success"
                    style="background-color: #25d366"
                  >
                    Send
                  </button>
                </div>
              </form>
            </div>
            <div class="col-lg-3 offset-lg-1"></div>
          </div>
        </div>
      </section>
      <!-- Contact Area End -->

      <!--? instagram-social start -->
      <div class="instagram-area fix">
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col-xl-12">
              <div class="instagram-active owl-carousel">
                @for($i = 1; $i < 6; $i++)
                <div class="single-instagram">
                    <img src="{{ asset('img/gallery/instra'. $i .'.jpg') }}" alt="" />
                    <a href="{{ config('settings.instagram_link') }}"><i class="ti-instagram"></i></a>
                </div>
                @endfor

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- instagram-social End -->
    </main>
    <footer>
      <div class="footer-wrapper">
        <div class="footer-area footer-padding pt-5">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                <div class="single-footer-caption mb-50">
                  <div class="single-footer-caption mb-30">
                    <!-- logo -->
                    <div class="footer-logo mb-35">
                      <a href="index.html"
                        ><img
                          src="{{ asset('img/logo/logo2.png') }}"
                          alt=""
                          height="150"
                      /></a>
                    </div>
                    <div class="footer-tittle">
                      <div class="footer-pera">
                        <p>
                          {{ config('settings.welcome_message_b') }},<br>
                          {{ config('settings.welcome_message_s') }}
                        </p>
                      </div>
                      <!-- social -->
                      <div class="footer-social">
                        <a target="_blank" href="{{ config('settings.instagram_link') }}"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="{{ config('settings.twitter_link') }}"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="{{ config('settings.facebook_link') }}"><i class="fab fa-facebook"></i></a>
                        <a target="_blank" href="{{ config('settings.linkedin_link') }}"><i class="fab fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe
                      width="300"
                      height="300"
                      id="gmap_canvas"
                      src="https://maps.google.com/maps?q=-%20Industrial%20Area%2011%20-%20Sharjah%20-%20United%20Arab%20Emirates&t=k&z=17&ie=UTF8&iwloc=&output=embed"
                      frameborder="0"
                      scrolling="no"
                      marginheight="0"
                      marginwidth="0"
                    ></iframe
                    ><a href="https://www.whatismyip-address.com"></a
                    ><br /><style>
                      .mapouter {
                        position: relative;
                        text-align: right;
                        height: 300px;
                        width: 300px;
                      }</style
                    ><a href="https://www.embedgooglemap.net"
                      >google maps websites</a
                    ><style>
                      .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 300px;
                        width: 300px;
                      }
                    </style>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle mb-20">
                    <h4>Contact Us</h4>
                    <p>
                      Shop No. 5, Mobile Building, Near Pak Ghazi Restaurant -
                      National Paint, Industrial Area 11, Sharjah, UAE
                    </p>
                    <a href="mailto://info@nooralshams.ae"
                      >info@nooralshams.ae</a
                    >
                    <p></p>
                  </div>
                  <ul class="mb-20">
                    <li class="number">
                      <a href="tel://+971{{ config('settings.call_number_main') }}">+971 {{ config('settings.call_number_main') }}</a>
                    </li>
                    <li class="number">
                        <a href="tel://+971{{ config('settings.call_number_sec') }}">+971 {{ config('settings.call_number_sec') }}</a>
                    </li>
                </ul>
                @auth()
                <li class="button-header d-none d-lg-flex ml-0">
                    <a
                      href="{{ route('dashboard') }}"
                      class="header-btn"
                      target="_blank"
                      style="background-color: #25d366"
                    >
                      <i class="fas fa-key"></i
                      ><span class="">Admin Dashboard</span></a
                    >
                </li>
                @endauth
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
          <div class="container">
            <div class="footer-border">
              <div class="row">
                <div class="col-xl-12">
                  <div class="footer-copy-right text-center">
                    <p>
                      Copyright &copy;
                      <script>
                        document.write(new Date().getFullYear());
                      </script>
                      All rights reserved | by
                      <a
                        href="https://macberry.ae"
                        target="_blank"
                        rel="nofollow noopener"
                        >Macberry</a
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" style="background-color: #ff000086">
      <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>

    <!-- wow, Mobile Menu -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

    <!-- counter , waypoint ,Nice-select -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Plugins, main-Jquery -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
