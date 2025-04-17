<head>
     <meta charset="utf-8">
     <title>ROREE</title>
     <!-- SEO Meta Tags-->
     <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
     <meta name="keywords" content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative">
     <meta name="author" content="Createx Studio">
     <!-- Viewport-->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Favicon e Touch Icons-->
     <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
     <link rel="manifest" href="assets/favicon/site.webmanifest">
     <link rel="mask-icon" color="#6366f1" href="assets/favicon/safari-pinned-tab.svg">
     <meta name="msapplication-TileColor" content="#080032">
     <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
     <meta name="theme-color" content="white">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

     <!-- Modo de tema -->
     <script>
         let mode = window.localStorage.getItem('mode'),
             root = document.getElementsByTagName('html')[0];
         if (mode !== undefined && mode === 'dark') {
             root.classList.add('dark-mode');
         } else {
             root.classList.remove('dark-mode');
         }
     </script>

     <!-- Estilos de Carregamento de Página-->
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

         .page-loading.active>.page-loading-inner {
             opacity: 1;
         }

         .page-loading-inner>span {
             display: block;
             font-family: 'Inter', sans-serif;
             font-size: 1rem;
             font-weight: normal;
             color: #6f788b;
         }

         .dark-mode .page-loading-inner>span {
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
             background-color: rgba(255, 255, 255, .25);
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
     <!-- Scripts de Carregamento de Página -->
     <script>
         (function() {
             window.onload = function() {
                 const preloader = document.querySelector('.page-loading');
                 preloader.classList.remove('active');
                 setTimeout(function() {
                     preloader.remove();
                 }, 1500);
             };
         })();
     </script>

     <!-- Fontes -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">
     <!-- Estilos dos temas principais + Bootstrap-->
     <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">
     <!-- Estilos gerados pelo personalizador-->
     <style id="customizer-styles"></style>
     <!-- Gerenciador de tags do Google -->
     <script>
         (function(w, d, s, l, i) {
             w[l] = w[l] || [];
             w[l].push({
                 'gtm.start': new Date().getTime(),
                 event: 'gtm.js'
             });
             var f = d.getElementsByTagName(s)[0],
                 j = d.createElement(s),
                 dl = l != 'dataLayer' ? '&l=' + l : '';
             j.async = true;
             j.src =
                 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
             f.parentNode.insertBefore(j, f);
         })(window, document, 'script', 'dataLayer', 'GTM-WKV3GT5');
     </script>
 </head>
 
 