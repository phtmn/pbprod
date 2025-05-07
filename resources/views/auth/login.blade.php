<!DOCTYPE html>
 <html lang="pt-br">

@include('auth.head')

 <body>
     <!-- Gerenciador de tags do Google (noscript)-->
     <noscript>
         <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
     </noscript>
     <!-- Girador de carregamento de página -->
     <div class="page-loading active">
         <div class="page-loading-inner">
             <div class="page-spinner"></div><span>Carregando...</span>
         </div>
     </div>
 

     <!-- Page wrapper-->
     <main class="page-wrapper">
         <!-- Page content-->
         <div class="d-lg-flex position-relative h-100">
             <!-- Home button<a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="{{ url('/') }}" data-bs-toggle="tooltip" data-bs-placement="left" ><i class="ai-home"></i></a>-->
             <!-- Sign in form-->
             <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
                 <div class="w-100 mt-auto" style="max-width: 526px;">
                     <h1>Faça login</h1>
                     <p class=" pb-3 mb-3 mb-lg-4">Ainda não possui conta? <a href="{{ route('register') }}" class="text-dark">Cadastre-se aqui!</a></p>
                     <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                         @csrf

                         <div class="pb-3 mb-3">
                             <div class="position-relative"><i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                 <input class="form-control form-control-lg ps-5" name="email" :value="old('email')" type="email" placeholder="Email" required>
                             </div>
                         </div>
                         <div class="mb-4">
                             <div class="position-relative"><i class="ai-lock-closed fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                 <div class="password-toggle">
                                     <input class="form-control form-control-lg ps-5" name="password" type="password" placeholder="Senha" required>
                                     <label class="password-toggle-btn" aria-label="Show/hide password"></label>
                                 </div>
                             </div>
                         </div>
                         <div class="d-flex flex-wrap align-items-center justify-content-between pb-4">
                             <form-check class="my-1">
                             </form-check> <a class="fs-sm fw-semibold text-decoration-none my-1 text-dark" href="{{ route('password.request') }}  "  >Esqueceu sua senha?</a> 
                         </div>
                         <button class="btn btn-lg w-100 mb-4 btn-outline-primary" type="submit">Entrar</button>

                     </form>
                 </div>
                 <!-- Direitos-->
                 <p class="w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;">
             </div>
             <!-- Cover image-->
             <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url(assets/img/sec.png);"></div>
         </div>
     </main>
     <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
         <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
             <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
         </svg><i class="ai-arrow-up"></i></a>
     <!-- Vendor scripts: js libraries and plugins-->
     <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
     <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
     <!-- Main theme script-->
     <script src="assets/js/theme.min.js"></script>
     <!-- Customizer-->

 </body>

 </html>

