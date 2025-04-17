<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Around | Conference (Event)</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="">
    <meta name="keywords" content=" ">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" color="#6366f1" href="assets/favicon/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="white">
    <!-- Theme mode-->
    <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== undefined && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
      
      
    </script>
    <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .dark-mode .page-loading {
        background-color: #121519;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #6f788b;
      }
      .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        background-color: #d7dde2; 
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      .dark-mode .page-spinner {
        background-color: rgba(255,255,255,.25);
      }
      @-webkit-keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      @keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1500);
        };
      })();
      
    </script>
    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">
    <!-- Vendor styles-->
    <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="assets/vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="assets/vendor/lightgallery/css/lightgallery-bundle.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">
    <!-- Customizer generated styles-->
    <style id="customizer-styles"></style>
    <!-- Google Tag Manager-->
    
  </head>
  <!-- Body-->
  <body>
    <!-- Google Tag Manager (noscript)-->
    
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Carregando...</span>
      </div>
    </div>
   
    <!-- Page wrapper-->
    <main class="page-wrapper">
      <div class="dark-mode">
        <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
        <header class="navbar navbar-expand-lg fixed-top">
          <div class="container"><a class="navbar-brand pe-sm-3" href="index.html"><span class="text-primary flex-shrink-0 me-2">
          <img class="d-block  mb-2 rounded-circle" src="{{ asset('assets/img/roree-removebg-preview.png') }}" width="75"></span>ROREE</a>
            <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
              <input class="form-check-input" type="checkbox" id="theme-mode">
              <label class="form-check-label" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
              <label class="form-check-label" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
            </div>
            <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="https://themes.getbootstrap.com/product/around-multipurpose-template-ui-kit/" target="_blank" rel="noopener">
                <i class="ai-cart fs-xl me-2 ms-n1"></i>Buy now

             
            </a>

            <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="https://themes.getbootstrap.com/product/around-multipurpose-template-ui-kit/" target="_blank" rel="noopener">
                <i class="ai-cart fs-xl me-2 ms-n1"></i>Registrar

             
            </a>

            
            <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <nav class="collapse navbar-collapse" id="navbarNav">
             {{--  <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                               <li class="nav-item"><a class="nav-link" href="components/typography.html">UI Kit</a></li>
                <li class="nav-item"><a class="nav-link" href="docs/getting-started.html">Docs</a></li>
              </ul> --}}
              <div class="d-sm-none p-3 mt-n3"><a class="btn btn-primary w-100  mb-1" href="https://themes.getbootstrap.com/product/around-multipurpose-template-ui-kit/" target="_blank" rel="noopener"><i class="ai-cart fs-xl me-2 ms-n1"></i>Buy now</a></div>
            </nav>
          </div>
        </header>
      </div>
      <!-- Page content-->
      <!-- Hero-->
      <section class="bg-dark dark-mode position-relative py-5">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url(assets/img/landing/conference/noise.png); mix-blend-mode: soft-light; opacity: 12%"></div>
        <div class="container position-relative zindex-2 py-md-3 py-lg-4 py-xl-5">
          <div class="row align-items-center justify-content-center pt-5 pb-2 pb-sm-3 mt-sm-4">
            <div class="col-10 col-sm-8 col-md-6 col-xl-5 offset-lg-1 offset-xl-2 order-md-2 pb-3 pb-md-0 mb-3 mb-sm-4 mb-md-0">
              <div class="swiper" data-swiper-options="{
              &quot;effect&quot;: &quot;creative&quot;,
              &quot;loop&quot;: true,
              &quot;allowTouchMove&quot;: false,
              &quot;speed&quot;: 450,
              &quot;autoplay&quot;: {
                &quot;delay&quot;: 6000,
                &quot;disableOnInteraction&quot;: false
              },
              &quot;creativeEffect&quot;: {
                &quot;prev&quot;: {
                  &quot;shadow&quot;: true,
                  &quot;translate&quot;: [&quot;-20%&quot;, 0, -1]
                },
                &quot;next&quot;: {
                  &quot;translate&quot;: [&quot;100%&quot;, 0, 0]
                }
              },
              &quot;thumbnails&quot;: {
                &quot;el&quot;: &quot;#thumbnails&quot;,
                &quot;images&quot;: [
                  &quot;assets/img/landing/conference/hero/th01.jpg&quot;,
                  &quot;assets/img/landing/conference/hero/th02.jpg&quot;,
                  &quot;assets/img/landing/conference/hero/th03.jpg&quot;
                ]
              }
            }" style="border-radius: 50%; border-bottom-right-radius: 0;">
                <div class="swiper-wrapper">
                  <!-- Item-->
                  <div class="swiper-slide">
                    <div class="position-relative overflow-hidden" style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;"><img src="assets/img/landing/conference/hero/01.jpg" alt="Image">
                      <div class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100" style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                        <div class="text-end pe-4 pb-4">
                          <h3 class="h5 mb-1">Esther Howard</h3>
                          <p class="fs-sm mb-0">VP of Strategy, Stretto Inc.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Item-->
                  <div class="swiper-slide">
                    <div class="position-relative overflow-hidden" style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;"><img src="assets/img/landing/conference/hero/02.jpg" alt="Image">
                      <div class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100" style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                        <div class="text-end pe-4 pb-4">
                          <h3 class="h5 mb-1">Albert Flores</h3>
                          <p class="fs-sm mb-0">Product Manager, Google</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Item-->
                  <div class="swiper-slide">
                    <div class="position-relative overflow-hidden" style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;"><img src="assets/img/landing/conference/hero/03.jpg" alt="Image">
                      <div class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100" style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                        <div class="text-end pe-4 pb-4">
                          <h3 class="h5 mb-1">Kathryn Murphy</h3>
                          <p class="fs-sm mb-0">VP of Marketing, Glassdoor</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Thumbnails-->
              <div class="swiper-thumbnails swiper-thumbnails-circle flex-nowrap justify-content-end pt-4" id="thumbnails"></div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-5 order-md-1">
              <div class="d-flex align-items-center lead pb-3 pb-sm-4 pb-lg-5 mb-2 mb-md-3 mb-lg-0 mb-xl-2">
                <div class="text-light">Faça parte</div>
                <div class="text-warning mx-3 mx-sm-4">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z"></path>
                  </svg>
                </div>
                <div class="text-light"></div>
              </div>
              <h1 class="display-3 text-uppercase d-none d-lg-block pb-3 mb-4">Da maior comunidade de IA do Brasil</h1>
              <h1 class="display-5 text-uppercase d-lg-none pb-1 pb-sm-2">The biggest international conference</h1>
              <p class="fs-lg pb-2 pb-sm-3 pb-md-4 pb-xl-5 mb-xl-2">Mattis aliquet faucibus senectus feugiat sapien mi diam nibh velit nunc purus elementum faucibus lectuset mauris.</p>
              <div class="d-sm-flex"><a class="btn btn-lg btn-primary w-100 w-md-auto mb-3 mb-sm-0 me-sm-3 me-lg-4" href="#tickets" data-scroll data-scroll-offset="120">Buy access pass<i class="ai-arrow-down ms-2 me-n2"></i></a><a class="btn btn-lg btn-outline-light w-100 w-md-auto" href="#"><i class="ai-calendar me-2 ms-n2"></i>Add to calendar</a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Statistics-->
      <section class="bg-secondary position-relative py-4 py-md-5">
        <div class="container position-relative zindex-2">
          <div class="row row-cols-2 row-cols-md-4">
            <div class="col">
              <div class="py-3 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">16</div>
                <p class="fs-xl mb-0">Speakers</p>
              </div>
            </div>
            <div class="col">
              <div class="py-3 ps-xl-4 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">12+</div>
                <p class="fs-xl mb-0">Hours on stage</p>
              </div>
            </div>
            <div class="col d-flex justify-content-md-center">
              <div class="py-3 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">1,5k</div>
                <p class="fs-xl mb-0">Offline attendees</p>
              </div>
            </div>
            <div class="col d-flex justify-content-md-end">
              <div class="py-3 pe-xl-4 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">100%</div>
                <p class="fs-xl mb-0">Good times</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Target audience-->
      <section class="container pt-5 mt-xl-3 mt-xxl-5">
        <div class="row pt-1 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2">
          <div class="col-lg-4">
            <h2 class="h1 pb-1 pb-sm-2 mb-4">Who may attend Conference?</h2>
          </div>
          <div class="col-lg-8 col-xl-7 offset-xl-1">
            <div class="ps-lg-4 ps-xl-0">
              <div data-simplebar>
                <ul class="nav nav-tabs flex-nowrap mb-2" role="tablist">
                  <li class="nav-item"><a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4 active" href="#designers" data-bs-toggle="tab" role="tab">UI/UX Designers</a></li>
                  <li class="nav-item"><a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#developers" data-bs-toggle="tab" role="tab">Developers</a></li>
                  <li class="nav-item"><a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#managers" data-bs-toggle="tab" role="tab">Managers</a></li>
                  <li class="nav-item"><a class="nav-link text-nowrap px-4 px-lg-3 px-xl-4" href="#marketers" data-bs-toggle="tab" role="tab">Marketers</a></li>
                </ul>
              </div>
              <div class="tab-content py-2 pb-md-0 pt-sm-3 pt-lg-4 mb-4 mb-md-5">
                <div class="tab-pane fade show active" id="designers" role="tabpanel">
                  <p class="fs-xl mb-4">Ipsum sed nascetur dolor accumsan integer phasellus tincidunt. Nulla quisque pellentesque adipiscing placerat integer feugiat facilisi elit mi. Dictum nunc lacinia vel molestie laoreet aliquet ridiculus diam justo viverra.</p>
                  <ul class="fs-xl mb-0">
                    <li class="mb-1">At donec auctor quam ut scelerisque dui.</li>
                    <li class="mb-1">Mollis sed fringilla placerat lobortis viverra aliquam ut nisl nisi.</li>
                    <li class="mb-1">Odio ullamcorper in praesent venenatis non non sed pharetra dipise.</li>
                    <li class="mb-1">Lobortis dui nibh at condimentum.</li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="developers" role="tabpanel">
                  <p class="fs-xl mb-4">Etiam sed porta massa. In sapien metus, lobortis eu tortor id, maximus commodo enim. Phasellus feugiat mi vitae enim cursus, ut scelerisque augue scelerisque. Pellentesque habitant morbi tristique senectus et netus.</p>
                  <ul class="fs-xl mb-0">
                    <li class="mb-1">Donec imperdiet dolor at leo sodales.</li>
                    <li class="mb-1">Fringilla placerat lobortis viverra aliquam ut nisl nisi.</li>
                    <li class="mb-1">Lobortis ullamcorper in praesent venenatis non non sed pharetra dipise.</li>
                    <li class="mb-1">Mollis dui nibh at condimentum.</li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="managers" role="tabpanel">
                  <p class="fs-xl mb-4">Ipsum sed nascetur dolor accumsan integer phasellus tincidunt. Nulla quisque pellentesque adipiscing placerat integer feugiat facilisi elit mi. Dictum nunc lacinia vel molestie laoreet aliquet ridiculus diam justo viverra.</p>
                  <ul class="fs-xl mb-0">
                    <li class="mb-1">At donec auctor quam ut scelerisque dui.</li>
                    <li class="mb-1">Mollis sed fringilla placerat lobortis viverra aliquam ut nisl nisi.</li>
                    <li class="mb-1">Odio ullamcorper in praesent venenatis non non sed pharetra dipise.</li>
                    <li class="mb-1">Lobortis dui nibh at condimentum.</li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="marketers" role="tabpanel">
                  <p class="fs-xl mb-4">Etiam sed porta massa. In sapien metus, lobortis eu tortor id, maximus commodo enim. Phasellus feugiat mi vitae enim cursus, ut scelerisque augue scelerisque. Pellentesque habitant morbi tristique senectus et netus.</p>
                  <ul class="fs-xl mb-0">
                    <li class="mb-1">Donec imperdiet dolor at leo sodales.</li>
                    <li class="mb-1">Fringilla placerat lobortis viverra aliquam ut nisl nisi.</li>
                    <li class="mb-1">Lobortis ullamcorper in praesent venenatis non non sed pharetra dipise.</li>
                    <li class="mb-1">Mollis dui nibh at condimentum.</li>
                  </ul>
                </div>
              </div><a class="btn btn-lg btn-primary w-100 w-sm-auto" href="#tickets" data-scroll data-scroll-offset="120">Buy access pass<i class="ai-arrow-down ms-2 me-n2"></i></a>
            </div>
          </div>
        </div>
      </section>
      <!-- Speakers-->
      <section class="container py-5 mb-lg-3 mb-xl-4 mt-xl-3 my-xxl-5">
        <h2 class="h1 text-center pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2 mb-5">Meet our speakers</h2>
        <div class="mb-4 mb-lg-5 pb-4 px-3" data-simplebar>
          <div class="row row-cols-lg-4 flex-nowrap flex-lg-wrap gy-lg-5 mx-n3">
            <div class="col"><a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;"><img class="rounded-circle" src="assets/img/avatar/36.jpg" width="120" alt="Avatar">
                <h3 class="h5 pt-4 mb-1">Marvin McKinney</h3>
                <p class="text-muted mb-0">Founder &amp; CEO, Uber</p></a></div>
            <div class="col"><a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;"><img class="rounded-circle" src="assets/img/avatar/37.jpg" width="120" alt="Avatar">
                <h3 class="h5 pt-4 mb-1">Jenny Wilson</h3>
                <p class="text-muted mb-0">Marketer, Glassdoor</p></a></div>
            <div class="col"><a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;"><img class="rounded-circle" src="assets/img/avatar/38.jpg" width="120" alt="Avatar">
                <h3 class="h5 pt-4 mb-1">Albert Flores</h3>
                <p class="text-muted mb-0">Product Manager, Google</p></a></div>
            <div class="col"><a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;"><img class="rounded-circle" src="assets/img/avatar/39.jpg" width="120" alt="Avatar">
                <h3 class="h5 pt-4 mb-1">Anneta Nikson</h3>
                <p class="text-muted mb-0">Founder &amp; CEO, Perfecto</p></a></div>
            <div class="col"><a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;"><img class="rounded-circle" src="assets/img/avatar/40.jpg" width="120" alt="Avatar">
                <h3 class="h5 pt-4 mb-1">Esther Howard</h3>
                <p class="text-muted mb-0">VP of Strategy, Stretto Inc.</p></a></div>
            <div class="col"><a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;"><img class="rounded-circle" src="assets/img/avatar/41.jpg" width="120" alt="Avatar">
                <h3 class="h5 pt-4 mb-1">Jerome Bell</h3>
                <p class="text-muted mb-0">Strategic Advisor, Shopify</p></a></div>
            <div class="col"><a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;"><img class="rounded-circle" src="assets/img/avatar/42.jpg" width="120" alt="Avatar">
                <h3 class="h5 pt-4 mb-1">Kathryn Murphy</h3>
                <p class="text-muted mb-0">Marketing Coordinator</p></a></div>
            <div class="col"><a class="d-block text-center text-decoration-none" href="#" style="min-width: 210px;"><img class="rounded-circle" src="assets/img/avatar/43.jpg" width="120" alt="Avatar">
                <h3 class="h5 pt-4 mb-1">Guy Hawkins</h3>
                <p class="text-muted mb-0">President of Sales</p></a></div>
          </div>
        </div>
        <div class="card bg-primary overflow-hidden py-2 py-sm-3 py-md-4 mb-sm-2 mb-md-4">
          <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-5"></div>
          <div class="position-absolute top-0 start-0 w-100 h-100 opacity-15" style="background-image: url(assets/img/landing/conference/noise.png); mix-blend-mode: soft-light;"></div>
          <div class="card-body position-relative d-sm-flex align-items-center justify-content-between zindex-2 text-center">
            <div class="d-md-flex align-items-center pe-md-4">
              <div class="d-none d-md-block text-warning flex-shrink-0 me-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z"></path>
                </svg>
              </div>
              <h2 class="text-light pb-1 pb-md-0 mb-md-0">Do you have an experience you want to share?</h2>
            </div><a class="btn btn-lg btn-warning me-xl-4" href="#">Become our speaker</a>
          </div>
        </div>
      </section>
      <!-- Sponsors-->
      <section class="bg-secondary pb-md-2 pt-lg-2 pb-lg-4 py-xl-4 py-xxl-5">
        <div class="container py-5">
          <h2 class="h1 text-center pb-sm-2 py-md-3 mt-sm-2 mb-lg-4">Sponsored by</h2>
          <div class="mb-4 mb-lg-5 pb-3 px-3" data-simplebar>
            <div class="row row-cols-lg-4 flex-nowrap flex-lg-wrap gy-lg-5 mx-n3">
              <div class="col" style="min-width: 225px;"><img class="d-block d-dark-mode-none mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/envato-dark.svg" alt="Logo"><img class="d-none d-dark-mode-block mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/envato-light.svg" alt="Logo">
                <p class="text-muted mb-2">Faucibus amet cursus accumsan eleifend tempus diam id duis. Mi velit nulla purus commodo non.</p>
              </div>
              <div class="col" style="min-width: 225px;"><img class="d-block d-dark-mode-none mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/angular-dark.svg" alt="Logo"><img class="d-none d-dark-mode-block mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/angular-light.svg" alt="Logo">
                <p class="text-muted mb-2">Nulla consequat tincidunt ut aliquet quam dignissim. Sagittis, enim libero ultrices eleifend congue.</p>
              </div>
              <div class="col" style="min-width: 225px;"><img class="d-block d-dark-mode-none mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/pingdom-dark.svg" alt="Logo"><img class="d-none d-dark-mode-block mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/pingdom-light.svg" alt="Logo">
                <p class="text-muted mb-2">Ornare leo sed gravida quam volutpat vulputate massa aliquam. Sem lacus, quam tellus duis sit pellentesque.</p>
              </div>
              <div class="col" style="min-width: 225px;"><img class="d-block d-dark-mode-none mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/woocommerce-dark.svg" alt="Logo"><img class="d-none d-dark-mode-block mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/woocommerce-light.svg" alt="Logo">
                <p class="text-muted mb-2">Imperdiet nunc, mauris, sed at egestas. Massa laoreet facilisis turpis adipiscing semper venenatis ipsum.</p>
              </div>
              <div class="col" style="min-width: 225px;"><img class="d-block d-dark-mode-none mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/magento-dark.svg" alt="Logo"><img class="d-none d-dark-mode-block mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/magento-light.svg" alt="Logo">
                <p class="text-muted mb-2">Purus eu faucibus at vel, aliquam. Faucibus nibh odio sed elementum blandit ut sociis et.</p>
              </div>
              <div class="col" style="min-width: 225px;"><img class="d-block d-dark-mode-none mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/bootstrap-dark.svg" alt="Logo"><img class="d-none d-dark-mode-block mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/bootstrap-light.svg" alt="Logo">
                <p class="text-muted mb-2">Adipiscing ultrices risus maecenas libero donec nam. In sollicitudin nulla sagittis, neque sit ullamcorper.</p>
              </div>
              <div class="col" style="min-width: 225px;"><img class="d-block d-dark-mode-none mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/laravel-dark.svg" alt="Logo"><img class="d-none d-dark-mode-block mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/laravel-light.svg" alt="Logo">
                <p class="text-muted mb-2">Pharetra morbi id nibh ut at risus tortor consequat. Dictum urna vulputate quis ut facilisis turpis purus commodo.</p>
              </div>
              <div class="col" style="min-width: 225px;"><img class="d-block d-dark-mode-none mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/react-dark.svg" alt="Logo"><img class="d-none d-dark-mode-block mb-2 mb-lg-2" src="assets/img/landing/conference/sponsors/react-light.svg" alt="Logo">
                <p class="text-muted mb-2">Suspendisse luctus maecenas tristique urna turpis aenean est. Porttitor porta nec tincidunt ut aliquet quam.</p>
              </div>
            </div>
          </div>
          <div class="text-center mb-2 mb-sm-3"><a class="btn btn-lg btn-primary" href="#">Become sponsor</a></div>
        </div>
      </section>
      <!-- Schedule-->
      <section class="container py-5 mb-lg-2 mt-lg-3 my-xl-4 my-xxl-5">
        <div class="d-md-flex align-items-center justify-content-between pt-2 pt-sm-3 pb-3 mt-md-3 mb-3 mb-lg-4">
          <div class="d-flex align-items-center mb-4 mb-md-0">
            <h2 class="h1 mb-0">Event schedule</h2>
            <div class="text-warning flex-shrink-0 ps-sm-1 ms-3">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z"></path>
              </svg>
            </div>
          </div>
          <ul class="nav nav-tabs flex-nowrap mb-0" role="tablist">
            <li class="nav-item me-1"><a class="nav-link px-3 px-sm-4 active" href="#dayOne" data-bs-toggle="tab" role="tab">Day one (Nov 15)</a></li>
            <li class="nav-item"><a class="nav-link px-3 px-sm-4" href="#dayTwo" data-bs-toggle="tab" role="tab">Day two (Nov 16)</a></li>
          </ul>
        </div>
        <div class="tab-content border-top border-bottom mb-3 mb-sm-4 mb-lg-5">
          <!-- Day 1 tab-->
          <div class="tab-pane fade show active" id="dayOne" role="tabpanel">
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">9:30 - 10:30 am</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">Opening party &amp; registration</h3>
                <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies aliquet nunc sit metus turpis enim urna nec risus vehicula pharetra diam erat ac proin donec.</p>
              </div>
              <div class="col-md-3 text-md-end">
                <div class="d-inline-flex">
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/05.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-3 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/08.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-2 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/09.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-1 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/12.jpg" width="48" alt="Avatar"></div>
                </div>
              </div>
            </div>
            <hr>
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">10:30 - 11:30 am</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">What are the top ideas for startup in 2023</h3>
                <p class="pt-2 pt-md-3 mb-md-0">Iaculis tellus morbi dui metus non leo pellentesque et euismod et tellus.</p>
              </div>
              <div class="col-md-3 text-md-end">
                <div class="d-inline-flex">
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/10.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-3 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/06.jpg" width="48" alt="Avatar"></div>
                </div>
              </div>
            </div>
            <hr>
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">11:30 - 12:00 am</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">Coffee break</h3>
              </div>
            </div>
            <hr>
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">12:00 - 15:00 am</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">Workshop: leading UI/UX design trends</h3>
                <p class="pt-2 pt-md-3 mb-md-0">Mi ullamcorper porttitor auctor nunc dui massa mattis fusce convallis. Aliquam quam nulla faucibus id. Eu cum quisque imperdiet semper ut ligula scelerisque. </p>
              </div>
              <div class="col-md-3 text-md-end">
                <div class="d-inline-flex">
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/19.jpg" width="48" alt="Avatar"></div>
                </div>
              </div>
            </div>
            <hr>
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">15:00 - 17:30 pm</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">Group discussion: How to align and empower cross-team success</h3>
                <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies aliquet nunc sit metus.</p>
              </div>
              <div class="col-md-3 text-md-end">
                <div class="d-inline-flex">
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/08.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-3 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/06.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-2 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/09.jpg" width="48" alt="Avatar"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Day 2 tab-->
          <div class="tab-pane fade" id="dayTwo" role="tabpanel">
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">12:00 - 15:00 am</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">Workshop: How Blockchain affects modern IT market</h3>
                <p class="pt-2 pt-md-3 mb-md-0">Mi ullamcorper porttitor auctor nunc dui massa mattis fusce convallis. Aliquam quam nulla faucibus id. Eu cum quisque imperdiet semper ut ligula scelerisque. </p>
              </div>
              <div class="col-md-3 text-md-end">
                <div class="d-inline-flex">
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/19.jpg" width="48" alt="Avatar"></div>
                </div>
              </div>
            </div>
            <hr>
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">9:30 - 10:30 am</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">The future of front-end frameworks</h3>
                <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies aliquet nunc sit metus turpis enim urna nec risus vehicula pharetra diam erat ac proin donec.</p>
              </div>
              <div class="col-md-3 text-md-end">
                <div class="d-inline-flex">
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/05.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-3 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/08.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-2 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/09.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-1 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/12.jpg" width="48" alt="Avatar"></div>
                </div>
              </div>
            </div>
            <hr>
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">11:30 - 12:00 am</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">Coffee break</h3>
              </div>
            </div>
            <hr>
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">15:00 - 17:30 pm</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">Group discussion: How good UI desig influences our perception</h3>
                <p class="pt-2 pt-md-3 mb-md-0">Vitae lectus metus non dolor mattis penatibus ultricies aliquet nunc sit metus.</p>
              </div>
              <div class="col-md-3 text-md-end">
                <div class="d-inline-flex">
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/08.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-3 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/06.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-2 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/09.jpg" width="48" alt="Avatar"></div>
                </div>
              </div>
            </div>
            <hr>
            <div class="row py-3 my-2 my-md-3">
              <div class="col-md-3">
                <div class="h6 mb-2 mb-md-0">10:30 - 11:30 am</div>
              </div>
              <div class="col-md-6">
                <h3 class="h4 mb-0">What are the top ideas for startup in 2024</h3>
                <p class="pt-2 pt-md-3 mb-md-0">Iaculis tellus morbi dui metus non leo pellentesque et euismod et tellus.</p>
              </div>
              <div class="col-md-3 text-md-end">
                <div class="d-inline-flex">
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/10.jpg" width="48" alt="Avatar"></div>
                  <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-3 ms-n3" style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/06.jpg" width="48" alt="Avatar"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Tickets (Pricing)-->
      <section class="container" id="tickets">
        <div class="row border border-light rounded-5 overflow-hidden g-0">
          <div class="col-md-7 col-xl-8">
            <div class="card h-100 dark-mode bg-dark border-0 rounded-0 py-md-3 py-lg-4 py-xl-5 px-3 px-sm-4 px-lg-5">
              <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url(assets/img/landing/conference/noise.png); mix-blend-mode: soft-light; opacity: 12%"></div>
              <div class="card-body position-relative zindex-2 py-5 px-2 mx-auto" style="max-width: 732px;">
                <h2 class="h1">In-Person Experience</h2>
                <p class="pb-3 mb-lg-4">Aenean sollicitudin sit convallis auctor egestas urna massa semper ultrices libero suspendisse venenatis urna ac in vitae pharetra aliquam.</p>
                <div class="display-3 text-primary fw-bold pb-3 mb-1 mb-lg-3">$299</div>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex pt-1 mt-2"><i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>Non egestas pretium iaculis venenatis ipsum cras enim et amet.</li>
                  <li class="d-flex pt-1 mt-2"><i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>Et purus quis laoreet ipsum.</li>
                  <li class="d-flex pt-1 mt-2"><i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>Suspendisse turpis vehicula id ornare ut ut sollicitudin tempus vel.</li>
                  <li class="d-flex pt-1 mt-2"><i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>Justo, quam tortor leo sed varius arcu sit rhoncus.</li>
                  <li class="d-flex pt-1 mt-2"><i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>Sed maecenas sit vestibulum id ornare habitasse sit scelerisque.</li>
                </ul>
              </div>
              <div class="card-footer w-100 border-0 pt-0 pb-5 px-2 mx-0">
                <button class="btn btn-lg btn-primary" type="button">Buy ticket</button>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-xl-4 border-top border-md-0 border-start-md border-light">
            <div class="card h-100 bg-secondary border-0 rounded-0 py-md-3 py-lg-4 py-xl-5 px-3 px-sm-4 px-lg-5">
              <div class="card-body py-5 px-2">
                <h2 class="h1">Live Stream</h2>
                <p class="pb-3 mb-lg-4">Sit facilisis viverra ullamcorper vestibulum nunc tincidunt egestas.</p>
                <div class="display-3 text-primary fw-bold pb-3 mb-1 mb-lg-3">$89</div>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex pt-1 mt-2"><i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>Integer lacinia quisque etiam quis morbi aliquam commodo.</li>
                  <li class="d-flex pt-1 mt-2"><i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>Neque, ullamcorper elit sit natoque.</li>
                  <li class="d-flex pt-1 mt-2"><i class="ai-circle-check text-primary fs-xl mt-1 me-2"></i>Sed orci, lacus, nunc vestibulum mi vel etiam pulvinar erat.</li>
                </ul>
              </div>
              <div class="card-footer w-100 border-0 pt-0 pb-5 px-2 mx-0">
                <button class="btn btn-lg btn-primary" type="button">Buy ticket</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials (Infinite slider)-->
      <section class="pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
        <h2 class="h1 contaier text-center pt-2 pt-sm-3 pt-md-4 pb-3 mt-md-2 mt-xxl-3 mb-lg-4">What attendees say</h2>
        <div class="swiper pb-4" data-swiper-options="{
      &quot;spaceBetween&quot;: 24,
      &quot;loop&quot;: true,
      &quot;grabCursor&quot;: false,
      &quot;centeredSlides&quot;: true,
      &quot;autoplay&quot;: {
        &quot;delay&quot;: 0,
        &quot;disableOnInteraction&quot;: false
      },
      &quot;freeMode&quot;: true,
      &quot;speed&quot;: 10000,
      &quot;freeModeMomentum&quot;: false,
      &quot;breakpoints&quot;: {
        &quot;0&quot;: { &quot;slidesPerView&quot;: 1 },
        &quot;500&quot;: { &quot;slidesPerView&quot;: 2 },
        &quot;900&quot;: { &quot;slidesPerView&quot;: 3 },
        &quot;1300&quot;: { &quot;slidesPerView&quot;: 4 },
        &quot;1600&quot;: { &quot;slidesPerView&quot;: 5 }
      }
    }">
          <div class="swiper-wrapper" style="transition-timing-function: linear !important;">
            <div class="swiper-slide h-auto">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/23.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Wade Warren</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star text-muted opacity-70"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Sit facilisis dolor arcu, fermentum vestibulum arcu elementum imperdiet. Mauris duis eleifend faucibus amet sagittis amet consequat aucibus."</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/26.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Jenny Wilson</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Netus vel, amet placerat eget sit eleifend. Urna laoreet ultricies orci feugiat amet egestas semper praesent. Risus ut porttitor metus."</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/27.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Bessie Cooper</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-half text-warning"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Netus vel, amet placerat eget sit eleifend. Urna laoreet ultricies orci feugiat amet egestas semper praesent. Risus ut porttitor metus."</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/32.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Ralph Edwards</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star text-muted opacity-70"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Odio viverra tristique id adipiscing varius. Leo vel tincidunt amet arcu. Auctor ipsum fames lacus vestibulum. Ultricies cras et at sed sed turpis."</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/28.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Cameron Williamson</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-half text-warning"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Mauris fermentum vitae volutpat orci mattis dolor malesuada porta id. Enim, dis nisi eget tincidunt bibendum leo pulvinar in. At justo hacsit diam."</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/24.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Annette Black</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Nisi et venenatis vitae, purus arcu. Integer lacus maecenas rhoncus nibh aliquam, enim sollicitudin interdum hendrerit. Proin venenatis varius."</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper" dir="rtl" data-swiper-options="{
      &quot;spaceBetween&quot;: 24,
      &quot;loop&quot;: true,
      &quot;grabCursor&quot;: false,
      &quot;centeredSlides&quot;: true,
      &quot;autoplay&quot;: {
        &quot;delay&quot;: 0,
        &quot;disableOnInteraction&quot;: false
      },
      &quot;freeMode&quot;: true,
      &quot;speed&quot;: 10000,
      &quot;freeModeMomentum&quot;: false,
      &quot;breakpoints&quot;: {
        &quot;0&quot;: { &quot;slidesPerView&quot;: 1 },
        &quot;500&quot;: { &quot;slidesPerView&quot;: 2 },
        &quot;900&quot;: { &quot;slidesPerView&quot;: 3 },
        &quot;1300&quot;: { &quot;slidesPerView&quot;: 4 },
        &quot;1600&quot;: { &quot;slidesPerView&quot;: 5 }
      }
    }">
          <div class="swiper-wrapper" style="transition-timing-function: linear !important;">
            <div class="swiper-slide h-auto" dir="ltr">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/23.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Guy Hawkins</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star text-muted opacity-70"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Sit facilisis dolor arcu, fermentum vestibulum arcu elementum imperdiet. Mauris duis eleifend faucibus amet sagittis amet consequat aucibus."</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto" dir="ltr">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/22.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Esther Howard</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Netus vel, amet placerat eget sit eleifend. Urna laoreet ultricies orci feugiat amet egestas semper praesent. Risus ut porttitor metus."</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto" dir="ltr">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/27.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Anneta Nikson</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-half text-warning"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Netus vel, amet placerat eget sit eleifend. Urna laoreet ultricies orci feugiat amet egestas semper praesent. Risus ut porttitor metus."</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto" dir="ltr">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/32.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Darrell Steward</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star text-muted opacity-70"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Odio viverra tristique id adipiscing varius. Leo vel tincidunt amet arcu. Auctor ipsum fames lacus vestibulum. Ultricies cras et at sed sed turpis."</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto" dir="ltr">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/28.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Martha Stewart</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-half text-warning"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Mauris fermentum vitae volutpat orci mattis dolor malesuada porta id. Enim, dis nisi eget tincidunt bibendum leo pulvinar in. At justo hacsit diam."</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto" dir="ltr">
              <div class="card h-100 border-0 bg-secondary rounded-4">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4"><img class="rounded-circle" src="assets/img/avatar/24.jpg" width="60" alt="Avatar">
                    <div class="ps-3">
                      <div class="h5 mb-0">Kathryn Murphy</div>
                      <div class="text-nowrap"><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning me-1"></i><i class="ai-star-filled text-warning"></i></div>
                    </div>
                  </div>
                  <p class="mb-0">"Nisi et venenatis vitae, purus arcu. Integer lacus maecenas rhoncus nibh aliquam, enim sollicitudin interdum hendrerit. Proin venenatis varius."</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Gallery-->
      <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
        <div class="py-2 py-sm-3 py-md-4 my-md-2 my-xxl-3">
          <h2 class="h1 text-center pt-xxl-1">See how the previous event unfolded</h2>
          <p class="fs-lg text-center pb-3 mb-lg-4">Get inspired with a selection of the keynotes about the Conference 2022</p>
          <div class="gallery row g-3 g-md-4" data-video="true">
            <div class="col-sm-6">
              <div class="row g-3 g-md-4">
                <div class="col-6"><a class="gallery-item d-block card-hover zoom-effect" href="assets/img/landing/conference/gallery/01.jpg">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0"><i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th01.jpg" alt="Auditorium"></div></a></div>
                <div class="col-6"><a class="gallery-item d-block card-hover zoom-effect" href="assets/img/landing/conference/gallery/02.jpg">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0"><i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th02.jpg" alt="Comfortable chairs"></div></a></div>
                <div class="col-12"><a class="gallery-item d-block card-hover zoom-effect" href="https://www.youtube.com/watch?v=5-A8_ocajCM">
                    <div class="btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle zindex-3"><i class="ai-play-filled"></i></div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0">
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th05.jpg" alt="Conferece showreel"></div></a></div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="row g-3 g-md-4">
                <div class="col-6 order-sm-2"><a class="gallery-item d-block card-hover zoom-effect" href="assets/img/landing/conference/gallery/03.jpg">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0"><i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th03.jpg" alt="Whiteboard"></div></a></div>
                <div class="col-6 order-sm-3"><a class="gallery-item d-block card-hover zoom-effect" href="assets/img/landing/conference/gallery/04.jpg">
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0"><i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th04.jpg" alt="Coffee break"></div></a></div>
                <div class="col-12 order-sm-1"><a class="gallery-item d-block card-hover zoom-effect" href="https://www.youtube.com/watch?v=Omr18ybhPKI">
                    <div class="btn btn-icon btn-lg btn-primary rounded-circle pe-none position-absolute top-50 start-50 translate-middle zindex-3"><i class="ai-play-filled"></i></div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0">
                      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                    </div>
                    <div class="zoom-effect-wrapper rounded-4"><img class="zoom-effect-img" src="assets/img/landing/conference/gallery/th06.jpg" alt="Speaker on stage"></div></a></div>
              </div>
            </div>
          </div>
          <div class="text-center pb-lg-2 pb-xl-3 pb-xxl-3 pt-4 pt-md-5 mt-3 mt-md-0"><a class="btn btn-lg btn-outline-primary" href="#">See more<i class="ai-image ms-2"></i></a></div>
        </div>
      </section>
      <!-- Contact form-->
      
    </main>
    <!-- Footer-->
    <footer class="footer dark-mode bg-dark py-5">
      <div class="container pt-1 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
        <div class="border-bottom text-center pb-4"><a class="navbar-brand d-inline-flex text-nav py-0 mb-3 mb-md-4" href="index.html"><span class="text-primary flex-shrink-0 me-2">
              <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
              </svg></span><span>Around</span></a>
          <ul class="nav justify-content-center py-1 pb-sm-2">
            <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#">Speakers</a></li>
            <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#">Event schedule</a></li>
            <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#">Tickets</a></li>
            <li class="nav-item"><a class="nav-link py-2 px-3 mx-1" href="#">Reviews</a></li>
          </ul>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between pt-4 mt-2 mt-sm-0">
          <div class="d-flex justify-content-center order-sm-2 mb-4 mb-sm-0"><a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle me-3" href="#"><i class="ai-instagram"></i></a><a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle me-3" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-secondary btn-youtube rounded-circle" href="#"><i class="ai-youtube"></i></a></div>
          <p class="fs-sm order-sm-1 text-center mb-0"><span class="opacity-70">&copy; All rights reserved. Made by </span><a class="nav-link d-inline fw-normal p-0" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></p>
        </div>
      </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
      <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
      </svg><i class="ai-arrow-up"></i></a>
    <!-- Vendor scripts: js libraries and plugins-->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/vendor/lightgallery/lightgallery.min.js"></script>
    <script src="assets/vendor/lightgallery/plugins/video/lg-video.min.js"></script>
    <script src="assets/vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js"></script>
    <script src="assets/vendor/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
    <!-- Main theme script-->
    <script src="assets/js/theme.min.js"></script>
    <!-- Customizer-->
    <script>!function(){function e(e){return localStorage.getItem(e)}function r(e,r){localStorage.setItem(e,r)}var t=document.getElementById("customizer-styles"),n=document.getElementById("custom-generated-styles"),o=`\n    :root {\n      ${e("theme-primary")&&`--ar-primary: ${e("theme-primary")};`}\n      ${e("theme-primary-rgb")&&`--ar-primary-rgb: ${e("theme-primary-rgb")};`}\n      ${e("theme-warning")&&`--ar-warning-rgb: ${e("theme-warning")};`}\n      ${e("theme-warning-rgb")&&`--ar-warning-rgb: ${e("theme-warning-rgb")};`}\n      ${e("theme-info")&&`--ar-info-rgb: ${e("theme-info")};`}\n      ${e("theme-info-rgb")&&`--ar-info-rgb: ${e("theme-info-rgb")};`}\n      ${e("theme-success")&&`--ar-success-rgb: ${e("success-info")};`}\n      ${e("theme-success-rgb")&&`--ar-success-rgb: ${e("success-info-rgb")};`}\n      ${e("theme-danger")&&`--ar-danger-rgb: ${e("danger-info")};`}\n      ${e("theme-danger-rgb")&&`--ar-danger-rgb: ${e("danger-info-rgb")};`}\n      ${e("theme-font-family")&&`--ar-body-font-family: ${e("theme-font-family")};`}\n      ${e("theme-root-font-size")&&`--ar-root-font-size: ${e("theme-root-font-size")};`}\n      ${e("theme-body-font-size")&&`--ar-body-font-size: ${e("theme-body-font-size")};`}\n      ${e("theme-border-width")&&`--ar-border-width: ${e("theme-border-width")};`}\n      ${e("theme-border-radius")&&`--ar-border-radius: ${e("theme-border-radius")};`}\n      ${e("theme-border-radius-sm")&&`--ar-border-radius-sm: ${e("theme-border-radius-sm")};`}\n      ${e("theme-border-radius-lg")&&`--ar-border-radius-lg: ${e("theme-border-radius-lg")};`}\n      ${e("theme-border-radius-xl")&&`--ar-border-radius-xl: ${e("theme-border-radius-xl")};`}\n      ${e("theme-border-radius-2xl")&&`--ar-border-radius-2xl: ${e("theme-border-radius-2xl")};`}\n      ${e("theme-primary")&&`--ar-link-color: ${e("theme-primary")};`}\n      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--ar-link-hover-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n    }\n    .btn-primary {\n      ${e("theme-primary")&&`--ar-btn-bg: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-border-color: ${e("theme-primary")};`}\n      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--ar-btn-hover-bg: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--ar-btn-hover-border-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--ar-btn-active-bg: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--ar-btn-active-border-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n      ${e("theme-primary")&&`--ar-btn-disabled-bg: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-disabled-border-color: ${e("theme-primary")};`}\n    }\n    .btn-warning {\n      ${e("theme-warning")&&`--ar-btn-bg: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-border-color: ${e("theme-warning")};`}\n      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--ar-btn-hover-bg: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--ar-btn-hover-border-color: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--ar-btn-active-bg: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--ar-btn-active-border-color: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n      ${e("theme-warning")&&`--ar-btn-disabled-bg: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-disabled-border-color: ${e("theme-warning")};`}\n    }\n    .btn-info {\n      ${e("theme-info")&&`--ar-btn-bg: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-border-color: ${e("theme-info")};`}\n      ${e("theme-info-btn-hover-active-border-bg-color")&&`--ar-btn-hover-bg: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n      ${e("theme-info-btn-hover-active-border-bg-color")&&`--ar-btn-hover-border-color: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n      ${e("theme-info-btn-hover-active-border-bg-color")&&`--ar-btn-active-bg: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n      ${e("theme-info-btn-hover-active-border-bg-color")&&`--ar-btn-active-border-color: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n      ${e("theme-info")&&`--ar-btn-disabled-bg: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-disabled-border-color: ${e("theme-info")};`}\n    }\n    .btn-success {\n      ${e("theme-success")&&`--ar-btn-bg: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-border-color: ${e("theme-success")};`}\n      ${e("theme-success-btn-hover-active-border-bg-color")&&`--ar-btn-hover-bg: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n      ${e("theme-success-btn-hover-active-border-bg-color")&&`--ar-btn-hover-border-color: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n      ${e("theme-success-btn-hover-active-border-bg-color")&&`--ar-btn-active-bg: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n      ${e("theme-success-btn-hover-active-border-bg-color")&&`--ar-btn-active-border-color: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n      ${e("theme-success")&&`--ar-btn-disabled-bg: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-disabled-border-color: ${e("theme-success")};`}\n    }\n    .btn-danger {\n      ${e("theme-danger")&&`--ar-btn-bg: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-border-color: ${e("theme-danger")};`}\n      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--ar-btn-hover-bg: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--ar-btn-hover-border-color: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--ar-btn-active-bg: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--ar-btn-active-border-color: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n      ${e("theme-danger")&&`--ar-btn-disabled-bg: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-disabled-border-color: ${e("theme-danger")};`}\n    }\n    .btn-outline-primary {\n      ${e("theme-primary")&&`--ar-btn-color: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-border-color: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-hover-bg: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-hover-border-color: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-active-bg: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-active-border-color: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-disabled-color: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-disabled-border-color: ${e("theme-primary")};`}\n    }\n    .btn-outline-warning {\n      ${e("theme-warning")&&`--ar-btn-color: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-border-color: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-hover-bg: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-hover-border-color: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-active-bg: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-active-border-color: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-disabled-color: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-disabled-border-color: ${e("theme-warning")};`}\n    }\n    .btn-outline-info {\n      ${e("theme-info")&&`--ar-btn-color: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-border-color: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-hover-bg: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-hover-border-color: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-active-bg: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-active-border-color: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-disabled-color: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-disabled-border-color: ${e("theme-info")};`}\n    }\n    .btn-outline-success {\n      ${e("theme-success")&&`--ar-btn-color: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-border-color: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-hover-bg: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-hover-border-color: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-active-bg: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-active-border-color: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-disabled-color: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-disabled-border-color: ${e("theme-success")};`}\n    }\n    .btn-outline-danger {\n      ${e("theme-danger")&&`--ar-btn-color: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-border-color: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-hover-bg: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-hover-border-color: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-active-bg: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-active-border-color: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-disabled-color: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-disabled-border-color: ${e("theme-danger")};`}\n    }\n  `,a=o;a=o.replace(/null|\s*(?![A-Z])/g,"");t.append(a),a.split("}").map(function(e){-1!==e.indexOf("{--")&&n.append(e+"}")});var i={root:t.sheet.cssRules[0],primaryBtn:t.sheet.cssRules[1],warningBtn:t.sheet.cssRules[2],infoBtn:t.sheet.cssRules[3],successBtn:t.sheet.cssRules[4],dangerBtn:t.sheet.cssRules[5],primaryOutlineBtn:t.sheet.cssRules[6],warningOutlineBtn:t.sheet.cssRules[7],infoOutlineBtn:t.sheet.cssRules[8],successOutlineBtn:t.sheet.cssRules[9],dangerOutlineBtn:t.sheet.cssRules[10]};function b(){n.innerHTML=i.root.cssText.replace(/null|\s*(?![A-Z])/g,""),n.innerHTML+=-1===i.primaryBtn.cssText.indexOf("{ }")?i.primaryBtn.cssText.replace(/ /g,""):"",n.innerHTML+=-1===i.warningBtn.cssText.indexOf("{ }")?i.warningBtn.cssText.replace(/ /g,""):"",n.innerHTML+=-1===i.infoBtn.cssText.indexOf("{ }")?i.infoBtn.cssText.replace(/ /g,""):"",n.innerHTML+=-1===i.successBtn.cssText.indexOf("{ }")?i.successBtn.cssText.replace(/ /g,""):"",n.innerHTML+=-1===i.dangerBtn.cssText.indexOf("{ }")?i.dangerBtn.cssText.replace(/ /g,""):"",n.innerHTML+=-1===i.primaryOutlineBtn.cssText.indexOf("{ }")?i.primaryOutlineBtn.cssText.replace(/ /g,""):"",n.innerHTML+=-1===i.warningOutlineBtn.cssText.indexOf("{ }")?i.warningOutlineBtn.cssText.replace(/ /g,""):"",n.innerHTML+=-1===i.infoOutlineBtn.cssText.indexOf("{ }")?i.infoOutlineBtn.cssText.replace(/ /g,""):"",n.innerHTML+=-1===i.successOutlineBtn.cssText.indexOf("{ }")?i.successOutlineBtn.cssText.replace(/ /g,""):"",n.innerHTML+=-1===i.dangerOutlineBtn.cssText.indexOf("{ }")?i.dangerOutlineBtn.cssText.replace(/ /g,""):""}function s(e){var r=0,t=0,n=0;return 4==e.length?(r="0x"+e[1]+e[1],t="0x"+e[2]+e[2],n="0x"+e[3]+e[3]):7==e.length&&(r="0x"+e[1]+e[2],t="0x"+e[3]+e[4],n="0x"+e[5]+e[6]),+r+","+ +t+","+ +n}function c(e,r){var t=parseInt(e.replace("#",""),16),n=Math.round(2.55*r),o=(t>>16)+n,a=(t>>8&255)+n,i=(255&t)+n;return"#"+(16777216+65536*(o<255?o<1?0:o:255)+256*(a<255?a<1?0:a:255)+(i<255?i<1?0:i:255)).toString(16).slice(1)}for(var l=document.querySelectorAll("#theme-colors .color-swatch"),d=0;d<l.length;d++){var m=l[d].querySelector("label"),h=l[d].querySelector('input[type="color"]');colorInput=l[d].querySelector('input[type="text"]'),colorInput.value=e(l[d].id)||colorInput.value,h.value=e(l[d].id)||h.value,m.style.backgroundColor=e(l[d].id)||h.value,h.addEventListener("input",function(e){var n=e.target.parentElement.querySelector("label"),o=e.target.parentElement.querySelector('input[type="text"]'),a=e.target.value;t.sheet.cssRules[d+1];r("theme-"+e.target.id,a),r("theme-"+e.target.id+"-rgb",s(a)),r("theme-"+e.target.id+"-btn-hover-active-border-bg-color",c(a,-10)),n.style.backgroundColor=a,o.value=a,i.root.style.setProperty("--ar-"+e.target.id,a),i.root.style.setProperty("--ar-"+e.target.id+"-rgb",s(a)),i[e.target.id+"Btn"].style.setProperty("--ar-btn-bg",a),i[e.target.id+"Btn"].style.setProperty("--ar-btn-border-color",a),i[e.target.id+"Btn"].style.setProperty("--ar-btn-hover-bg",c(a,-10)),i[e.target.id+"Btn"].style.setProperty("--ar-btn-hover-border-color",c(a,-10)),i[e.target.id+"Btn"].style.setProperty("--ar-btn-active-bg",c(a,-10)),i[e.target.id+"Btn"].style.setProperty("--ar-btn-active-border-color",c(a,-10)),i[e.target.id+"Btn"].style.setProperty("--ar-btn-disabled-bg",a),i[e.target.id+"Btn"].style.setProperty("--ar-btn-disabled-border-color",a),i[e.target.id+"OutlineBtn"].style.setProperty("--ar-btn-color",a),i[e.target.id+"OutlineBtn"].style.setProperty("--ar-btn-border-color",a),i[e.target.id+"OutlineBtn"].style.setProperty("--ar-btn-hover-bg",a),i[e.target.id+"OutlineBtn"].style.setProperty("--ar-btn-hover-border-color",a),i[e.target.id+"OutlineBtn"].style.setProperty("--ar-btn-active-bg",a),i[e.target.id+"OutlineBtn"].style.setProperty("--ar-btn-active-border-color",a),i[e.target.id+"OutlineBtn"].style.setProperty("--ar-btn-disabled-color",a),i[e.target.id+"OutlineBtn"].style.setProperty("--ar-btn-disabled-border-color",a),"primary"===e.target.id&&(r("theme-link-hover-color",c(a,-10)),i.root.style.setProperty("--ar-link-color",a),i.root.style.setProperty("--ar-link-hover-color",c(a,-10))),b()}),colorInput.addEventListener("change",function(e){var t=e.target.parentElement.querySelector("label"),n=e.target.parentElement.querySelector('input[type="color"]'),o=e.target.value;0!=o.length&&o.startsWith("#")&&(r("theme-"+n.id,o),r("theme-"+n.id+"-rgb",s(o)),r("theme-"+n.id+"-btn-hover-active-border-bg-color",c(o,-10)),t.style.backgroundColor=o,n.value=o,i.root.style.setProperty("--ar-"+n.id,o),i.root.style.setProperty("--ar-"+n.id+"-rgb",s(o)),i[n.id+"Btn"].style.setProperty("--ar-btn-bg",o),i[n.id+"Btn"].style.setProperty("--ar-btn-border-color",o),i[n.id+"Btn"].style.setProperty("--ar-btn-hover-bg",c(o,-10)),i[n.id+"Btn"].style.setProperty("--ar-btn-hover-border-color",c(o,-10)),i[n.id+"Btn"].style.setProperty("--ar-btn-active-bg",c(o,-10)),i[n.id+"Btn"].style.setProperty("--ar-btn-active-border-color",c(o,-10)),i[n.id+"Btn"].style.setProperty("--ar-btn-disabled-bg",o),i[n.id+"Btn"].style.setProperty("--ar-btn-disabled-border-color",o),i[n.id+"OutlineBtn"].style.setProperty("--ar-btn-color",o),i[n.id+"OutlineBtn"].style.setProperty("--ar-btn-border-color",o),i[n.id+"OutlineBtn"].style.setProperty("--ar-btn-hover-bg",o),i[n.id+"OutlineBtn"].style.setProperty("--ar-btn-hover-border-color",o),i[n.id+"OutlineBtn"].style.setProperty("--ar-btn-active-bg",o),i[n.id+"OutlineBtn"].style.setProperty("--ar-btn-active-border-color",o),i[n.id+"OutlineBtn"].style.setProperty("--ar-btn-disabled-color",o),i[n.id+"OutlineBtn"].style.setProperty("--ar-btn-disabled-border-color",o),"primary"===n.id&&(r("theme-link-hover-color",c(o,-10)),i.root.style.setProperty("--ar-link-color",o),i.root.style.setProperty("--ar-link-hover-color",c(o,-10))),b())})}var g=document.getElementById("font-url"),u=document.getElementById("google-font");u.href=e("theme-font-url")||g.value,g.value=e("theme-font-url")||g.value,g.addEventListener("blur",function(e){var t=e.target.value;r("theme-font-url",t),u.href=t});var v=document.getElementById("body-font-family");v.value=e("theme-font-family")||v.value,v.addEventListener("blur",function(e){var t=e.target.value;r("theme-font-family",t),i.root.style.setProperty("--ar-body-font-family",t),b()});var $=document.getElementById("root-font-size");$.value=e("theme-root-font-size")||$.value,$.addEventListener("change",function(e){var t=e.target.value;r("theme-root-font-size",t),i.root.style.setProperty("--ar-root-font-size",t),b()});var y=document.getElementById("body-font-size");y.value=e("theme-body-font-size")||y.value,y.addEventListener("change",function(e){var t=e.target.value;r("theme-body-font-size",t),i.root.style.setProperty("--ar-body-font-size",t),b()});var p=document.getElementById("border-width");p.value=parseInt(e("theme-border-width"))||p.value,p.addEventListener("input",function(e){var t=e.target.value;r("theme-border-width",t+"px"),i.root.style.setProperty("--ar-border-width",t+"px"),b()});var f=document.getElementById("border-radius");f.value=parseFloat(e("theme-border-radius"))||f.value,f.addEventListener("input",function(e){var t=e.target.value;r("theme-border-radius",t+"rem"),i.root.style.setProperty("--ar-border-radius",t+"rem"),b()});var B=document.querySelectorAll('#theme-border-radiuses input[type="number"');for(d=0;d<B.length;d++)B[d].value=e("theme-"+B[d].id+"multiplier")||B[d].value,B[d].addEventListener("input",function(e){var t=e.target.value;r("theme-"+e.target.id,"calc(var(--ar-border-radius) * "+t+")"),r("theme-"+e.target.id+"multiplier",t),i.root.style.setProperty("--ar-"+e.target.id,"calc(var(--ar-border-radius) * "+t+")"),b()});var w=document.getElementById("customizer"),x=document.getElementById("customizer-btns");e("theme-customizer-btns")&&x.classList.remove("d-none"),w.addEventListener("change",function(e){r("theme-customizer-btns",!0),x.classList.remove("d-none")}),document.getElementById("customizer-reset-btn").addEventListener("click",function(){for(var e=[],r=0;r<localStorage.length;r++)"theme"==localStorage.key(r).substring(0,5)&&e.push(localStorage.key(r));for(r=0;r<e.length;r++)localStorage.removeItem(e[r]);window.location.reload()});var P=document.getElementById("copy-styles-btn");P.addEventListener("click",function(){var e=document.createRange();e.selectNode(n),window.getSelection().removeAllRanges(),window.getSelection().addRange(e),navigator.clipboard.writeText(n.innerHTML),this.innerHTML='<i class="ai-check me-2 ms-n1"></i>Copied!',setTimeout(function(){P.innerHTML='<i class="ai-copy me-2 ms-n1"></i>Copy styles'},2e3)})}();</script>
  </body>
</html>



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
