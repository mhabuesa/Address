
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/properties-full-grid-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:11:40 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Happy Partners</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images/logo_fab.png">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/search.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/lightcase.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/menu.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/styles.css">
    <link rel="stylesheet" id="color" href="{{asset('frontend')}}/assets/css/default.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @include('frontend.nav_css')
</head>

<body class="inner-pages homepage-4 agents hp-6 full hd-white">
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

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-list featured portfolio blog">
            <div class="container">
                <section class="headings-2 pt-0 pb-0">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p><a href="index.html">Home </a> &nbsp;/&nbsp; <span>Happy Partners</span></p>
                                </div>
                                <h3>Our Partners</h3>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Search Form -->


                <div class="row">

                    @foreach ($partners as $partner )


                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <img src="{{asset('uploads')}}/partner/{{$partner->image}}" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">

                                    <a href="{{Auth::guard('client')->user()?$partner->video:route('client.login.page')}}" class="btn {{Auth::guard('client')->user()?'popup-video popup-youtube':''}}"><i class="fas fa-video"></i></a>

                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3>{{$partner->name}}</h3>
                                    <p> </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix ">
                                        <p><i class="fa-solid fa-landmark" style="color: #000000;"></i>&nbsp; Bulding Name: &nbsp; {{$partner->building}}</p>
                                </ul>
                                <ul class="homes-list clearfix ">
                                    <p><i class="fa-solid fa-phone" style="color: #000000;"></i>&nbsp; Phone: &nbsp; {{$partner->phone}}</p>
                                </ul>
                                <ul class="homes-list clearfix ">
                                    <p><i class="fa-solid fa-envelope" style="color: #000000;"></i>&nbsp; Email: &nbsp; {{$partner->email}}</p>
                                </ul>
                                <ul class="homes-list clearfix ">
                                    <p><i class="fa-solid fa-location-dot" style="color: #000000;"></i>&nbsp; Address: &nbsp; {{$partner->address}}</p>
                                </ul>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->

        @include('frontend.footer')

        <!-- ARCHIVES JS -->
        <script src="{{asset('frontend')}}/assets/js/jquery-3.5.1.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/rangeSlider.js"></script>
        <script src="{{asset('frontend')}}/assets/js/tether.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.js"></script>
        <script src="{{asset('frontend')}}/assets/js/aos.js"></script>
        <script src="{{asset('frontend')}}/assets/js/aos2.js"></script>
        <script src="{{asset('frontend')}}/assets/js/smooth-scroll.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/lightcase.js"></script>
        <script src="{{asset('frontend')}}/assets/js/search.js"></script>
        <script src="{{asset('frontend')}}/assets/js/light.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/popup.js"></script>
        <script src="{{asset('frontend')}}/assets/js/searched.js"></script>
        <script src="{{asset('frontend')}}/assets/js/ajaxchimp.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/newsletter.js"></script>
        <script src="{{asset('frontend')}}/assets/js/inner.js"></script>
        <script src="{{asset('frontend')}}/assets/js/color-switcher.js"></script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>
