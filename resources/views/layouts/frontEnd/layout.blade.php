<!DOCTYPE html>
<html lang="en">


<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Zenith Fitness</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontEnd/img/logo/favicon.png') }}">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('frontEnd/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/custom.css') }}">

</head>

<body class="">

    <!-- preloader -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader end -->

    @yield('content')
    
    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('frontEnd/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/counter-up.js') }}"></script>
    <script src="{{ asset('frontEnd/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/main.js') }}"></script>

</body>


</html>