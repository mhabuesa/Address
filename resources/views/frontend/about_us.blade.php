
<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>About Us</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images/logo_fab.png">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/lightcase.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/menu.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/styles.css">
    <link rel="stylesheet" id="color" href="{{asset('frontend')}}/assets/css/default.css">


    <style>
.inner-pages.about .headings {
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(18, 27, 34, 0.6)), to(rgba(18, 27, 34, 0.6))), url({{asset('uploads')}}/about/banner/{{$banner->image}}) no-repeat center center;
  background: linear-gradient(rgba(18, 27, 34, 0.6), rgba(18, 27, 34, 0.6)), url({{asset('uploads')}}/about/banner/{{$banner->image}}) no-repeat center center;
}
    </style>
@include('frontend.nav_css')

</head>

<body class="inner-pages hd-white about">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- START SECTION HEADINGS -->
        <header id="header-container">
            <!-- Header -->
            <div id="header" class="head-tr bottom">
                <div class="container container-header">



                    <!-- Header Menu Start -->
                    @include('frontend.header_manu')
                    <!-- Header Menu end -->










                </div>
            </div>
            <!-- Header / End -->

        </header>


        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>About Our Company</h1>
                    <h2><a href="{{route('index')}}">Home </a> &nbsp;/&nbsp; About Us</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION ABOUT -->
        <section class="about-us fh">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 who-1">
                        <div>
                            <h2 class="text-left mb-4">About <span>BD ADDRESS</span></h2>
                        </div>
                        <div class="pftext">
                            <p>{!!$aboutSection->desp!!}</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-xs-12">

                        <div class="wprt-image-video w50">
                            <img alt="image" src="{{asset('uploads')}}/about/cover/{{$aboutSection->image}}">
                            <a class="icon-wrap  popup-video youtube-waves {{Auth::guard('client')->user()?'popup-youtube':''}}" href="{{Auth::guard('client')->user()?$aboutSection->video : route('client.login.page')}}">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>






                    </div>

                </div>
            </div>
        </section>
        <!-- END SECTION ABOUT -->

        <!-- START SECTION WHY CHOOSE US -->
        <section class="how-it-works bg-white-2">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Why </span>Choose Us</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="{{asset('frontend')}}/assets/images/icons/icon-4.svg" alt="">
                                <h3>{{$why_choose->title1}}</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">{{$why_choose->desp1}}</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="{{asset('frontend')}}/assets/images/icons/icon-5.svg" alt="">
                                <h3>{{$why_choose->title2}}</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">{{$why_choose->desp2}}</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="{{asset('frontend')}}/assets/images/icons/icon-6.svg" alt="">
                                <h3>{{$why_choose->title3}}</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">{{$why_choose->desp3}}</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- END SECTION WHY CHOOSE US -->

        <!-- START SECTION COUNTER UP -->
        <section class="counterup">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="countr">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">{{$counter->number1}}</p>
                                <h3>{{$counter->title1}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="countr">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">{{$counter->number2}}</p>
                                <h3>{{$counter->title2}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="countr mb-0">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">{{$counter->number3}}</p>
                                <h3>{{$counter->title3}}</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- END SECTION COUNTER UP -->






        <!-- Footer Start -->
        @include('frontend.footer')
        <!-- Footer End -->


        <!-- ARCHIVES JS -->
        <script src="{{asset('frontend')}}/assets/js/jquery-3.5.1.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/tether.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.js"></script>
        <script src="{{asset('frontend')}}/assets/js/smooth-scroll.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/popup.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.waypoints.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.counterup.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/counterup.js"></script>
        <script src="{{asset('frontend')}}/assets/js/owl.carousel.js"></script>
        <script src="{{asset('frontend')}}/assets/js/ajaxchimp.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/newsletter.js"></script>
        <script src="{{asset('frontend')}}/assets/js/color-switcher.js"></script>
        <script src="{{asset('frontend')}}/assets/js/inner.js"></script>

        <script>
            $('.style1').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: false,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    400: {
                        items: 1,
                        margin: 20
                    },
                    500: {
                        items: 1,
                        margin: 20
                    },
                    768: {
                        items: 1,
                        margin: 20
                    },
                    991: {
                        items: 1,
                        margin: 20
                    },
                    1000: {
                        items: 1,
                        margin: 20
                    }
                }
            });

        </script>
        <script>
            $('.style2').owlCarousel({
                loop: true,
                margin: 0,
                dots: false,
                autoWidth: false,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 2,
                        margin: 20
                    },
                    400: {
                        items: 2,
                        margin: 20
                    },
                    500: {
                        items: 3,
                        margin: 20
                    },
                    768: {
                        items: 4,
                        margin: 20
                    },
                    992: {
                        items: 5,
                        margin: 20
                    },
                    1000: {
                        items: 6,
                        margin: 20
                    }
                }
            });

        </script>

    </div>
    <!-- Wrapper / End -->
</body>



</html>
