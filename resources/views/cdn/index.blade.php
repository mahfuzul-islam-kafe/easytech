<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from wphix.com/template/outstock-prv/outstock/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2024 05:12:25 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Outstock - Clean, Minimal eCommerce HTML5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('cdn/assets/img/favicon.png')}}">
        {{-- custom bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('cdn/assets/css/preloader.css')}}">
        <link rel="stylesheet" href="{{asset('cdn/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('cdn/assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('cdn/assets/css/metisMenu.css')}}">
        <link rel="stylesheet" href="{{asset('cdn/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('cdn/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('cdn/assets/css/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('cdn/assets/css/fontAwesome5Pro.css')}}">
        <link rel="stylesheet" href="{{asset('cdn/assets/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('cdn/assets/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('cdn/assets/css/style.css')}}">
    </head>
    <body>
        {{-- for up and show image  --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="container-scroller">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->  

        <!-- prealoder area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                <div class="object" id="first_object"></div>
                <div class="object" id="second_object"></div>
                <div class="object" id="third_object"></div>
                </div>
            </div>      
        </div>
        <!-- prealoder area end -->
        @yield('main')
        {{-- custom bootstrap  --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="{{asset('cdn/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('cdn/assets/js/vendor/waypoints.min.js')}}"></script>
        <script src="{{asset('cdn/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('cdn/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('cdn/assets/js/slick.min.js')}}"></script>
        <script src="{{asset('cdn/assets/js/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('cdn/assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('cdn/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('cdn/assets/js/jquery-ui-slider-range.js')}}"></script>
        <script src="{{asset('cdn/assets/js/ajax-form.js')}}"></script>
        <script src="{{asset('cdn/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('cdn/assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('cdn/assets/js/main.js')}}"></script>
        <script>
            // Hide alerts after 5 seconds
            setTimeout(() => {
                const sessionAlert = document.getElementById('sessionAlert');
                if (sessionAlert) {
                    sessionAlert.style.display = 'none';
                }

                const errorAlert = document.getElementById('errorAlert');
                if (errorAlert) {
                    errorAlert.style.display = 'none';
                }
            }, 5000);
        </script>
    </body>

<!-- Mirrored from wphix.com/template/outstock-prv/outstock/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2024 05:12:29 GMT -->
</html>
