
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:12:28 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Error 404</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images/logo_fab.png">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/menu.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/styles.css">
    <link rel="stylesheet" id="color" href="{{asset('frontend')}}/assets/css/default.css">
    @include('frontend.nav_css')
</head>

<body class="inner-pages hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container container-header">


                    @include('frontend.header_manu')

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION 404 -->
        <section class="notfound pt-0">
            <div class="container">
                <div class="top-headings text-center">
                    <img src="{{asset('frontend')}}/assets/images/bg/error-404.jpg" alt="Page 404">
                    <h3 class="text-center">Page Not Found!</h3>
                    <p class="text-center">Oops! Looks Like Something Going Rong We can’t seem to find the page you’re looking for make sure that you have typed the currect URL</p>
                </div>
                <div class="port-info">
                    <a href="{{route('index')}}" class="btn btn-primary btn-lg">Go To Home</a>
                </div>
            </div>
        </section>
        <!-- END SECTION 404 -->

        @include('frontend.footer')



        <!-- ARCHIVES JS -->
        <script src="{{asset('frontend')}}/assets/js/jquery-3.5.1.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/tether.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.js"></script>
        <script src="{{asset('frontend')}}/assets/js/slick.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/slick3.js"></script>
        <script src="{{asset('frontend')}}/assets/js/smooth-scroll.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/ajaxchimp.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/newsletter.js"></script>
        <script src="{{asset('frontend')}}/assets/js/color-switcher.js"></script>
        <script src="{{asset('frontend')}}/assets/js/inner.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>



</html>
