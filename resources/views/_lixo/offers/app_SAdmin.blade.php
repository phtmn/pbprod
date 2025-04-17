<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- SEO Meta Tags-->
    <meta name="description" content="bla bla bla">
    <meta name="keywords" content="bla bla bla">
    <meta name="author" content="bla bla bla">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/roree-icon.png">
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
    <!-- Scroll down animated button-->
    <style>
        .scroll-down-btn {
            display: inline-block;
            text-decoration: none;
        }

        .scroll-down-btn p {
            margin-top: 1.25rem;
            color: white;
            font-size: .875rem;
            font-weight: 500;
            letter-spacing: .375rem;
            text-indent: .375rem;
            animation: colorText 5s ease-out infinite, nudgeText 5s ease-out infinite;
        }

        .mouse {
            background: #2c333e linear-gradient(transparent 0%, transparent 50%, white 50%, white 100%);
            position: relative;
            width: 38px;
            height: 65px;
            margin: 0 auto;
            border-radius: 6rem;
            background-size: 100% 200%;
            animation: colorSlide 5s linear infinite, nudgeMouse 5s ease-out infinite;
        }

        .mouse:before,
        .mouse:after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
        }

        .mouse:before {
            width: 34px;
            height: 61px;
            background-color: #121519;
            border-radius: 6rem;
        }

        .mouse:after {
            background-color: white;
            width: .375rem;
            height: .375rem;
            border-radius: 100%;
            animation: trackBallSlide 5s linear infinite;
        }

        @keyframes colorSlide {
            0% {
                background-position: 0% 100%;
            }

            20% {
                background-position: 0% 0%;
            }

            21% {
                background-color: #2c333e;
            }

            29.99% {
                background-color: white;
                background-position: 0% 0%;
            }

            30% {
                background-color: #2c333e;
                background-position: 0% 100%;
            }

            50% {
                background-position: 0% 0%;
            }

            51% {
                background-color: #2c333e;
            }

            59% {
                background-color: white;
                background-position: 0% 0%;
            }

            60% {
                background-color: #2c333e;
                background-position: 0% 100%;
            }

            80% {
                background-position: 0% 0%;
            }

            81% {
                background-color: #2c333e;
            }

            90%,
            100% {
                background-color: white;
            }
        }

        @keyframes trackBallSlide {
            0% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            6% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            14% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            15%,
            19% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            28%,
            29.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            30% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            36% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            44% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            45%,
            49% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            58%,
            59.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            60% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            66% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            74% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            75%,
            79% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            88%,
            100% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
        }

        @keyframes nudgeMouse {

            0%,
            30%,
            60%,
            90% {
                transform: translateY(0);
            }

            20%,
            50%,
            80% {
                transform: translateY(8px);
            }
        }

        @keyframes nudgeText {

            0%,
            30%,
            60%,
            90% {
                transform: translateY(0);
            }

            20%,
            50%,
            80% {
                transform: translateY(2px);
            }
        }

        @keyframes colorText {

            21%,
            51%,
            81% {
                color: #2c333e;
            }

            30%,
            60%,
            90% {
                color: white;
            }
        }
    </style>
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
    <!-- Page loading scripts-->
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
    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" id="google-font">
    <!-- Vendor styles-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/vendor/aos/dist/aos.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('assets/vendor/img-comparison-slider/dist/styles.css') }}" />
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <!-- Customizer generated styles-->
    <style id="customizer-styles"></style>

</head>

<body class="bg-secondary">

    <!-- Page loading spinner-->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Carregando...</span>
        </div>
    </div>


    @include('layouts.around.header_SAdmin')

    @yield('content')

    <!-- Divider for dark mode only-->

    <!-- Sidebar toggle button-->
    <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas"
        data-bs-target="#sidebarAccount"><i class="ai-dots-horizontal me-2"></i></button>
    </main>

    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/parallax-js/dist/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js') }}"></script>
    <script src="{{ asset('assets/vendor/img-comparison-slider/dist/index.js') }}"></script>
    <script src="{{ asset('assets/js/dark-mode.js') }}"></script>
    <script src="{{ asset('assets/js/utilities/functions.js') }}"></script>

    <!-- Main theme script-->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- Customizer-->
    <script>
        ! function() {
            function e(e) {
                return localStorage.getItem(e)
            }

            function r(e, r) {
                localStorage.setItem(e, r)
            }
            var t = document.getElementById("customizer-styles"),
                n = document.getElementById("custom-generated-styles"),
                o =
                `\n    :root {\n      ${e("theme-primary")&&`--ar-primary: ${e("theme-primary")};`}\n      ${e("theme-primary-rgb")&&`--ar-primary-rgb: ${e("theme-primary-rgb")};`}\n      ${e("theme-warning")&&`--ar-warning-rgb: ${e("theme-warning")};`}\n      ${e("theme-warning-rgb")&&`--ar-warning-rgb: ${e("theme-warning-rgb")};`}\n      ${e("theme-info")&&`--ar-info-rgb: ${e("theme-info")};`}\n      ${e("theme-info-rgb")&&`--ar-info-rgb: ${e("theme-info-rgb")};`}\n      ${e("theme-success")&&`--ar-success-rgb: ${e("success-info")};`}\n      ${e("theme-success-rgb")&&`--ar-success-rgb: ${e("success-info-rgb")};`}\n      ${e("theme-danger")&&`--ar-danger-rgb: ${e("danger-info")};`}\n      ${e("theme-danger-rgb")&&`--ar-danger-rgb: ${e("danger-info-rgb")};`}\n      ${e("theme-font-family")&&`--ar-body-font-family: ${e("theme-font-family")};`}\n      ${e("theme-root-font-size")&&`--ar-root-font-size: ${e("theme-root-font-size")};`}\n      ${e("theme-body-font-size")&&`--ar-body-font-size: ${e("theme-body-font-size")};`}\n      ${e("theme-border-width")&&`--ar-border-width: ${e("theme-border-width")};`}\n      ${e("theme-border-radius")&&`--ar-border-radius: ${e("theme-border-radius")};`}\n      ${e("theme-border-radius-sm")&&`--ar-border-radius-sm: ${e("theme-border-radius-sm")};`}\n      ${e("theme-border-radius-lg")&&`--ar-border-radius-lg: ${e("theme-border-radius-lg")};`}\n      ${e("theme-border-radius-xl")&&`--ar-border-radius-xl: ${e("theme-border-radius-xl")};`}\n      ${e("theme-border-radius-2xl")&&`--ar-border-radius-2xl: ${e("theme-border-radius-2xl")};`}\n      ${e("theme-primary")&&`--ar-link-color: ${e("theme-primary")};`}\n      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--ar-link-hover-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n    }\n    .btn-primary {\n      ${e("theme-primary")&&`--ar-btn-bg: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-border-color: ${e("theme-primary")};`}\n      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--ar-btn-hover-bg: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--ar-btn-hover-border-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--ar-btn-active-bg: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--ar-btn-active-border-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}\n      ${e("theme-primary")&&`--ar-btn-disabled-bg: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-disabled-border-color: ${e("theme-primary")};`}\n    }\n    .btn-warning {\n      ${e("theme-warning")&&`--ar-btn-bg: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-border-color: ${e("theme-warning")};`}\n      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--ar-btn-hover-bg: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--ar-btn-hover-border-color: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--ar-btn-active-bg: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--ar-btn-active-border-color: ${e("theme-warning-btn-hover-active-border-bg-color")};`}\n      ${e("theme-warning")&&`--ar-btn-disabled-bg: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-disabled-border-color: ${e("theme-warning")};`}\n    }\n    .btn-info {\n      ${e("theme-info")&&`--ar-btn-bg: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-border-color: ${e("theme-info")};`}\n      ${e("theme-info-btn-hover-active-border-bg-color")&&`--ar-btn-hover-bg: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n      ${e("theme-info-btn-hover-active-border-bg-color")&&`--ar-btn-hover-border-color: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n      ${e("theme-info-btn-hover-active-border-bg-color")&&`--ar-btn-active-bg: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n      ${e("theme-info-btn-hover-active-border-bg-color")&&`--ar-btn-active-border-color: ${e("theme-info-btn-hover-active-border-bg-color")};`}\n      ${e("theme-info")&&`--ar-btn-disabled-bg: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-disabled-border-color: ${e("theme-info")};`}\n    }\n    .btn-success {\n      ${e("theme-success")&&`--ar-btn-bg: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-border-color: ${e("theme-success")};`}\n      ${e("theme-success-btn-hover-active-border-bg-color")&&`--ar-btn-hover-bg: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n      ${e("theme-success-btn-hover-active-border-bg-color")&&`--ar-btn-hover-border-color: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n      ${e("theme-success-btn-hover-active-border-bg-color")&&`--ar-btn-active-bg: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n      ${e("theme-success-btn-hover-active-border-bg-color")&&`--ar-btn-active-border-color: ${e("theme-success-btn-hover-active-border-bg-color")};`}\n      ${e("theme-success")&&`--ar-btn-disabled-bg: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-disabled-border-color: ${e("theme-success")};`}\n    }\n    .btn-danger {\n      ${e("theme-danger")&&`--ar-btn-bg: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-border-color: ${e("theme-danger")};`}\n      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--ar-btn-hover-bg: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--ar-btn-hover-border-color: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--ar-btn-active-bg: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--ar-btn-active-border-color: ${e("theme-danger-btn-hover-active-border-bg-color")};`}\n      ${e("theme-danger")&&`--ar-btn-disabled-bg: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-disabled-border-color: ${e("theme-danger")};`}\n    }\n    .btn-outline-primary {\n      ${e("theme-primary")&&`--ar-btn-color: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-border-color: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-hover-bg: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-hover-border-color: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-active-bg: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-active-border-color: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-disabled-color: ${e("theme-primary")};`}\n      ${e("theme-primary")&&`--ar-btn-disabled-border-color: ${e("theme-primary")};`}\n    }\n    .btn-outline-warning {\n      ${e("theme-warning")&&`--ar-btn-color: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-border-color: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-hover-bg: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-hover-border-color: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-active-bg: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-active-border-color: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-disabled-color: ${e("theme-warning")};`}\n      ${e("theme-warning")&&`--ar-btn-disabled-border-color: ${e("theme-warning")};`}\n    }\n    .btn-outline-info {\n      ${e("theme-info")&&`--ar-btn-color: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-border-color: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-hover-bg: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-hover-border-color: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-active-bg: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-active-border-color: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-disabled-color: ${e("theme-info")};`}\n      ${e("theme-info")&&`--ar-btn-disabled-border-color: ${e("theme-info")};`}\n    }\n    .btn-outline-success {\n      ${e("theme-success")&&`--ar-btn-color: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-border-color: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-hover-bg: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-hover-border-color: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-active-bg: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-active-border-color: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-disabled-color: ${e("theme-success")};`}\n      ${e("theme-success")&&`--ar-btn-disabled-border-color: ${e("theme-success")};`}\n    }\n    .btn-outline-danger {\n      ${e("theme-danger")&&`--ar-btn-color: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-border-color: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-hover-bg: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-hover-border-color: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-active-bg: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-active-border-color: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-disabled-color: ${e("theme-danger")};`}\n      ${e("theme-danger")&&`--ar-btn-disabled-border-color: ${e("theme-danger")};`}\n    }\n  `,
                a = o;
            a = o.replace(/null|\s*(?![A-Z])/g, "");
            t.append(a), a.split("}").map(function(e) {
                -1 !== e.indexOf("{--") && n.append(e + "}")
            });
            var i = {
                root: t.sheet.cssRules[0],
                primaryBtn: t.sheet.cssRules[1],
                warningBtn: t.sheet.cssRules[2],
                infoBtn: t.sheet.cssRules[3],
                successBtn: t.sheet.cssRules[4],
                dangerBtn: t.sheet.cssRules[5],
                primaryOutlineBtn: t.sheet.cssRules[6],
                warningOutlineBtn: t.sheet.cssRules[7],
                infoOutlineBtn: t.sheet.cssRules[8],
                successOutlineBtn: t.sheet.cssRules[9],
                dangerOutlineBtn: t.sheet.cssRules[10]
            };

            function b() {
                n.innerHTML = i.root.cssText.replace(/null|\s*(?![A-Z])/g, ""), n.innerHTML += -1 === i.primaryBtn.cssText
                    .indexOf("{ }") ? i.primaryBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.warningBtn
                    .cssText.indexOf("{ }") ? i.warningBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.infoBtn
                    .cssText.indexOf("{ }") ? i.infoBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.successBtn
                    .cssText.indexOf("{ }") ? i.successBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.dangerBtn
                    .cssText.indexOf("{ }") ? i.dangerBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i
                    .primaryOutlineBtn.cssText.indexOf("{ }") ? i.primaryOutlineBtn.cssText.replace(/ /g, "") : "", n
                    .innerHTML += -1 === i.warningOutlineBtn.cssText.indexOf("{ }") ? i.warningOutlineBtn.cssText.replace(
                        / /g, "") : "", n.innerHTML += -1 === i.infoOutlineBtn.cssText.indexOf("{ }") ? i.infoOutlineBtn
                    .cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.successOutlineBtn.cssText.indexOf("{ }") ? i
                    .successOutlineBtn.cssText.replace(/ /g, "") : "", n.innerHTML += -1 === i.dangerOutlineBtn.cssText
                    .indexOf("{ }") ? i.dangerOutlineBtn.cssText.replace(/ /g, "") : ""
            }

            function s(e) {
                var r = 0,
                    t = 0,
                    n = 0;
                return 4 == e.length ? (r = "0x" + e[1] + e[1], t = "0x" + e[2] + e[2], n = "0x" + e[3] + e[3]) : 7 == e
                    .length && (r = "0x" + e[1] + e[2], t = "0x" + e[3] + e[4], n = "0x" + e[5] + e[6]), +r + "," + +t +
                    "," + +n
            }

            function c(e, r) {
                var t = parseInt(e.replace("#", ""), 16),
                    n = Math.round(2.55 * r),
                    o = (t >> 16) + n,
                    a = (t >> 8 & 255) + n,
                    i = (255 & t) + n;
                return "#" + (16777216 + 65536 * (o < 255 ? o < 1 ? 0 : o : 255) + 256 * (a < 255 ? a < 1 ? 0 : a : 255) + (
                    i < 255 ? i < 1 ? 0 : i : 255)).toString(16).slice(1)
            }
            for (var l = document.querySelectorAll("#theme-colors .color-swatch"), d = 0; d < l.length; d++) {
                var m = l[d].querySelector("label"),
                    h = l[d].querySelector('input[type="color"]');
                colorInput = l[d].querySelector('input[type="text"]'), colorInput.value = e(l[d].id) || colorInput.value, h
                    .value = e(l[d].id) || h.value, m.style.backgroundColor = e(l[d].id) || h.value, h.addEventListener(
                        "input",
                        function(e) {
                            var n = e.target.parentElement.querySelector("label"),
                                o = e.target.parentElement.querySelector('input[type="text"]'),
                                a = e.target.value;
                            t.sheet.cssRules[d + 1];
                            r("theme-" + e.target.id, a), r("theme-" + e.target.id + "-rgb", s(a)), r("theme-" + e.target
                                    .id + "-btn-hover-active-border-bg-color", c(a, -10)), n.style.backgroundColor = a, o
                                .value = a, i.root.style.setProperty("--ar-" + e.target.id, a), i.root.style.setProperty(
                                    "--ar-" + e.target.id + "-rgb", s(a)), i[e.target.id + "Btn"].style.setProperty(
                                    "--ar-btn-bg", a), i[e.target.id + "Btn"].style.setProperty("--ar-btn-border-color", a),
                                i[e.target.id + "Btn"].style.setProperty("--ar-btn-hover-bg", c(a, -10)), i[e.target.id +
                                    "Btn"].style.setProperty("--ar-btn-hover-border-color", c(a, -10)), i[e.target.id +
                                    "Btn"].style.setProperty("--ar-btn-active-bg", c(a, -10)), i[e.target.id + "Btn"].style
                                .setProperty("--ar-btn-active-border-color", c(a, -10)), i[e.target.id + "Btn"].style
                                .setProperty("--ar-btn-disabled-bg", a), i[e.target.id + "Btn"].style.setProperty(
                                    "--ar-btn-disabled-border-color", a), i[e.target.id + "OutlineBtn"].style.setProperty(
                                    "--ar-btn-color", a), i[e.target.id + "OutlineBtn"].style.setProperty(
                                    "--ar-btn-border-color", a), i[e.target.id + "OutlineBtn"].style.setProperty(
                                    "--ar-btn-hover-bg", a), i[e.target.id + "OutlineBtn"].style.setProperty(
                                    "--ar-btn-hover-border-color", a), i[e.target.id + "OutlineBtn"].style.setProperty(
                                    "--ar-btn-active-bg", a), i[e.target.id + "OutlineBtn"].style.setProperty(
                                    "--ar-btn-active-border-color", a), i[e.target.id + "OutlineBtn"].style.setProperty(
                                    "--ar-btn-disabled-color", a), i[e.target.id + "OutlineBtn"].style.setProperty(
                                    "--ar-btn-disabled-border-color", a), "primary" === e.target.id && (r(
                                        "theme-link-hover-color", c(a, -10)), i.root.style.setProperty("--ar-link-color",
                                    a), i.root.style.setProperty("--ar-link-hover-color", c(a, -10))), b()
                        }), colorInput.addEventListener("change", function(e) {
                        var t = e.target.parentElement.querySelector("label"),
                            n = e.target.parentElement.querySelector('input[type="color"]'),
                            o = e.target.value;
                        0 != o.length && o.startsWith("#") && (r("theme-" + n.id, o), r("theme-" + n.id + "-rgb", s(o)),
                            r("theme-" + n.id + "-btn-hover-active-border-bg-color", c(o, -10)), t.style
                            .backgroundColor = o, n.value = o, i.root.style.setProperty("--ar-" + n.id, o), i.root
                            .style.setProperty("--ar-" + n.id + "-rgb", s(o)), i[n.id + "Btn"].style.setProperty(
                                "--ar-btn-bg", o), i[n.id + "Btn"].style.setProperty("--ar-btn-border-color", o), i[
                                n.id + "Btn"].style.setProperty("--ar-btn-hover-bg", c(o, -10)), i[n.id + "Btn"]
                            .style.setProperty("--ar-btn-hover-border-color", c(o, -10)), i[n.id + "Btn"].style
                            .setProperty("--ar-btn-active-bg", c(o, -10)), i[n.id + "Btn"].style.setProperty(
                                "--ar-btn-active-border-color", c(o, -10)), i[n.id + "Btn"].style.setProperty(
                                "--ar-btn-disabled-bg", o), i[n.id + "Btn"].style.setProperty(
                                "--ar-btn-disabled-border-color", o), i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-color", o), i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-border-color", o), i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-hover-bg", o), i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-hover-border-color", o), i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-active-bg", o), i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-active-border-color", o), i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-disabled-color", o), i[n.id + "OutlineBtn"].style.setProperty(
                                "--ar-btn-disabled-border-color", o), "primary" === n.id && (r(
                                "theme-link-hover-color", c(o, -10)), i.root.style.setProperty(
                                "--ar-link-color", o), i.root.style.setProperty("--ar-link-hover-color", c(o, -
                                10))), b())
                    })
            }
            var g = document.getElementById("font-url"),
                u = document.getElementById("google-font");
            u.href = e("theme-font-url") || g.value, g.value = e("theme-font-url") || g.value, g.addEventListener("blur",
                function(e) {
                    var t = e.target.value;
                    r("theme-font-url", t), u.href = t
                });
            var v = document.getElementById("body-font-family");
            v.value = e("theme-font-family") || v.value, v.addEventListener("blur", function(e) {
                var t = e.target.value;
                r("theme-font-family", t), i.root.style.setProperty("--ar-body-font-family", t), b()
            });
            var $ = document.getElementById("root-font-size");
            $.value = e("theme-root-font-size") || $.value, $.addEventListener("change", function(e) {
                var t = e.target.value;
                r("theme-root-font-size", t), i.root.style.setProperty("--ar-root-font-size", t), b()
            });
            var y = document.getElementById("body-font-size");
            y.value = e("theme-body-font-size") || y.value, y.addEventListener("change", function(e) {
                var t = e.target.value;
                r("theme-body-font-size", t), i.root.style.setProperty("--ar-body-font-size", t), b()
            });
            var p = document.getElementById("border-width");
            p.value = parseInt(e("theme-border-width")) || p.value, p.addEventListener("input", function(e) {
                var t = e.target.value;
                r("theme-border-width", t + "px"), i.root.style.setProperty("--ar-border-width", t + "px"), b()
            });
            var f = document.getElementById("border-radius");
            f.value = parseFloat(e("theme-border-radius")) || f.value, f.addEventListener("input", function(e) {
                var t = e.target.value;
                r("theme-border-radius", t + "rem"), i.root.style.setProperty("--ar-border-radius", t + "rem"), b()
            });
            var B = document.querySelectorAll('#theme-border-radiuses input[type="number"');
            for (d = 0; d < B.length; d++) B[d].value = e("theme-" + B[d].id + "multiplier") || B[d].value, B[d]
                .addEventListener("input", function(e) {
                    var t = e.target.value;
                    r("theme-" + e.target.id, "calc(var(--ar-border-radius) * " + t + ")"), r("theme-" + e.target.id +
                        "multiplier", t), i.root.style.setProperty("--ar-" + e.target.id,
                        "calc(var(--ar-border-radius) * " + t + ")"), b()
                });
            var w = document.getElementById("customizer"),
                x = document.getElementById("customizer-btns");
            e("theme-customizer-btns") && x.classList.remove("d-none"), w.addEventListener("change", function(e) {
                r("theme-customizer-btns", !0), x.classList.remove("d-none")
            }), document.getElementById("customizer-reset-btn").addEventListener("click", function() {
                for (var e = [], r = 0; r < localStorage.length; r++) "theme" == localStorage.key(r).substring(0,
                    5) && e.push(localStorage.key(r));
                for (r = 0; r < e.length; r++) localStorage.removeItem(e[r]);
                window.location.reload()
            });
            var P = document.getElementById("copy-styles-btn");
            P.addEventListener("click", function() {
                var e = document.createRange();
                e.selectNode(n), window.getSelection().removeAllRanges(), window.getSelection().addRange(e),
                    navigator.clipboard.writeText(n.innerHTML), this.innerHTML =
                    '<i class="ai-check me-2 ms-n1"></i>Copied!', setTimeout(function() {
                        P.innerHTML = '<i class="ai-copy me-2 ms-n1"></i>Copy styles'
                    }, 2e3)
            })
        }();
    </script>

</body>

</html>
