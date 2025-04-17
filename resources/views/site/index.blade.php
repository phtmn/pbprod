<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ROREE </title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
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
          <div class="container"><a class="navbar-brand pe-sm-3" href="{{ route('home.index')}}"><span class="text-primary flex-shrink-0 me-2">
          <img class="d-block  mb-2 rounded-circle" src="{{ asset('assets/img/roree-removebg-preview.png') }}" width="75"></span>ROREE</a>

         <a class="btn btn-outline-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex " href="{{ route('login') }}"  rel="noopener" style="margin-right: 20px"> Entrar</a>

         <a class="btn btn-secondary bg text-dark btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="{{ route('register') }}"  rel="noopener"> Registrar</a>


          <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <nav class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">

              </ul>
              <div class="d-sm-none p-3 mt-n3">
                <a class="btn btn-outline-primary btn btn-lg w-100 mb-2 btn-outline-primary  mb-1" href="{{ route('login') }}" rel="noopener"> Entrar</a></div>
              <div class="d-sm-none p-3 mt-n3">
                <a class="btn btn-secondary bg text-dark btn btn-lg w-100 mb-2 btn-outline-primary" href="{{ route('register') }}" rel="noopener"> Registrar</a></div>
            </nav>
          </div>
        </header>
      </div>
      <section class="bg-dark dark-mode position-relative py-5">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url(assets/img/landing/conference/noise.png); mix-blend-mode: soft-light; opacity: 12%"></div>
        <div class="container position-relative zindex-2 py-md-3 py-lg-4 py-xl-5">
          <div class="row align-items-center justify-content-center pt-5 pb-2 pb-sm-3 mt-sm-4">
            <div class="col-10 col-sm-8 col-md-6 col-xl-5 offset-lg-1 offset-xl-2 order-md-2 pb-3 pb-md-0 mb-3 mb-sm-4 mb-md-0">
              <div class="swiper"  >
                <div class="swiper-wrapper">
                  <!-- Item-->
                  <div class="swiper-slide">
                    <div class="position-relative overflow-hidden" style="border-bottom-left-radius: 50%; border-top-left-radius: 50%;"><img src="assets/img/01.jpg" alt="Image">
                      <div class="d-flex align-items-end justify-content-end position-absolute start-0 bottom-0 w-100" style="height: 215px; background: linear-gradient(0deg, rgba(15, 17, 21, 0.8) 0%, rgba(16, 20, 24, 0) 100%);">
                        <div class="text-end pe-4 pb-4">
                         <!-- <h3 class="h5 mb-1">Esther Howard</h3>
                          <p class="fs-sm mb-0">VP of Strategy, Stretto Inc.</p> -->
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

                <div class="text-warning mx-3 mx-sm-4">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z"></path>
                  </svg>
                </div>

              </div>
              <h1 class="display-3 text-uppercase d-none d-lg-block pb-3 mb-4">Descubra um novo nível de excelência
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z"></path>
                  </svg>
              </h1>
              <h1 class="display-5 text-uppercase d-lg-none pb-1 pb-sm-2">
              Descubra um novo nível de excelência
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 0L12.6798 4.12733C13.2879 7.81883 16.1812 10.7121 19.8727 11.3202L24 12L19.8727 12.6798C16.1812 13.2879 13.2879 16.1812 12.6798 19.8727L12 24L11.3202 19.8727C10.7121 16.1812 7.81882 13.2879 4.12733 12.6798L0 12L4.12733 11.3202C7.81883 10.7121 10.7121 7.81882 11.3202 4.12733L12 0Z"></path>
                  </svg>
              </h1>
              <p class="fs-lg pb-2 pb-sm-3 pb-md-4 pb-xl-5 mb-xl-2">Os melhores prompts e o melhores engenheiros de prompt estão aqui!</p>

             
             {{--<div class="d-sm-flex">
                <h3 class="  w-100 mb-4 btn-outline-primary  w-100 w-md-auto mb-3 mb-sm-0 me-sm-3 me-lg-4"   >
                Pesquisar Prompts</h3>
                 </div>--}}
            </div>
          </div>
        </div>
      </section>

      {{--     <section class="bg-secondary position-relative py-4 py-md-5">
        <div class="container position-relative zindex-2">
          <div class="row row-cols-2 row-cols-md-4">
            <div class="col">
              <div class="py-3 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">{{ getCount('prompts') }}</div>
                <p class="fs-xl mb-0">Prompts</p>
              </div>
            </div>
            <div class="col">
              <div class="py-3 ps-xl-4 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">{{ getCount('tags') }}</div>
                <p class="fs-xl mb-0">Tags</p>
              </div>
            </div>
            <div class="col d-flex justify-content-md-center">
              <div class="py-3 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">{{ getCount('prompt_spaces') }}</div>
                <p class="fs-xl mb-0">Prompts Spaces</p>
              </div>
            </div>
            <div class="col d-flex justify-content-md-end">
              <div class="py-3 pe-xl-3 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">{{ getCount('users') }}</div>
                <p class="fs-xl mb-0">Usuários</p>
              </div>
            </div>
           <div class="col d-flex justify-content-md-end">
              <div class="py-3 pe-xl-3 my-lg-2 my-xl-3">
                <div class="text-dark display-4 mb-1">{{ getCount('users') }}</div>
                <p class="fs-xl mb-0">Ferramentas</p>
              </div> 
            </div>
          </div>
        </div>
      </section>  --}}

      @include('site.promptsHome')

    </main>
    <!-- Footer-->
    <footer class="footer dark-mode bg-dark py-5">
      <div class="container pt-1 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
        <div class="border-bottom text-center pb-4"><a class="navbar-brand d-inline-flex text-nav py-0 mb-3 mb-md-4" ><span class="text-primary flex-shrink-0 me-2">
            </a>


        </div>
        <div class="d-sm-flex align-items-center justify-content-between pt-4 mt-2 mt-sm-0">
          <div class="d-flex justify-content-center order-sm-2 mb-4 mb-sm-0">
            <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle me-3" href="https://www.instagram.com/roree.com.br/">
              <i class="ai-instagram"></i></a>
            <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle me-3" href="#">
              <i class="ai-facebook"></i></a>
            <a class="btn btn-icon btn-sm btn-secondary btn-youtube rounded-circle me-3" href="#">
              <i class="ai-youtube"></i></a>
            <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle" href="#">
              <i class="ai-linkedin"></i></a>
            </div>
          <p class="fs-sm order-sm-1 text-center mb-0"><span class="opacity-70"> www.roree.com.br </span></p>
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


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <!-- Google Tag Manager-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZF1X5YWM9F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZF1X5YWM9F');
</script>


  <script>
    new DataTable('#example');
  </script>
  <!-- Main theme script-->
  <script src="assets/js/theme.min.js"></script>

  </body>
</html>


