<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    @stack('css')

    <title>Xton - eCommerce HTML Template</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>

    <!-- Start Top Header Area -->
    @if (!Request::routeIs('login') && !Request::routeIs('register') && !Request::routeIs('EmailForm') && !Request::routeIs('password.reset'))
    @include('layout.topNavbar')
    @include('layout.nav')
    @endif



    <!-- End Top Header Area -->

    <!-- Start Navbar Area -->

    <!-- End Header Area -->

    <!-- Start Search Overlay -->
    @yield('content')
    <!-- End Search Overlay -->

    @include('layout.modals')
    <!-- Start Sidebar Modal -->
    <!-- End Products Filter Modal Area -->

    <!-- Start Footer Area -->
    @if (!Request::routeIs('login') && !Request::routeIs('register') && !Request::routeIs('EmailForm') && !Request::routeIs('password.reset'))
    @include('layout.footer')
    @endif

    <!-- End Footer Area -->

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

    <!-- Links of JS files -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/parallax.min.js')}}"></script>
    <script src="{{ asset('assets/js/rangeSlider.min.js')}}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/meanmenu.min.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/js/slick.min.js')}}"></script>
    <script src="{{ asset('assets/js/sticky-sidebar.min.js')}}"></script>
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js')}}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js')}}"></script>
    <script src="{{ asset('assets/js/ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    @stack('scripts')
</body>

</html>
