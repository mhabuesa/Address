
<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Know Your Neighbor</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images/logo_fab.png">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/search.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/lightcase.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/menu.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/styles.css">
    <link rel="stylesheet" id="color" href="{{asset('frontend')}}/assets/css/default.css">

    {{-- Nav Css --}}
    @include('frontend.nav_css')
</head>

<body class="inner-pages listing homepage-4 agents hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header">
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
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-right featured portfolio ho-17 blog pt-5">
            <div class="container">
               <section class="headings-2 pt-0 pb-55">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p class="pb-2"><a href="{{route('index')}}">Home </a> &nbsp;/&nbsp; <span>Know Your Neighbor</span></p>
                                </div>
                                <h3>Your Neighbor</h3>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-lg-12 col-md-12 blog-pots">
                        <div class="row portfolio-items">





                            @foreach ($neighborApartment as $apartment )


                            <div class="item col-lg-3 col-md-6 col-xs-12 people landscapes rent h-17 no-pb">
                                <a href="{{route('single.neighbor',$apartment->slug)}}" class="recent-16" data-aos="fade-up">
                                    <div class="recent-img16 img-center" style="background-image: url({{asset('uploads')}}/neighbor/apartment/{{$apartment->image}});"></div>
                                    <div class="recent-content"></div>
                                    <div class="recent-details">
                                        <div class="recent-title">{{$apartment->name}}</div>
                                        <div class="">{{$apartment->address}}</div>

                                    </div>
                                    <div class="view-proper">View Details</div>
                                </a>
                            </div>

                            @endforeach



                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->


                <!-- Footer Start -->
                @include('frontend.footer')
                <!-- Footer End -->


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
        <script src="{{asset('frontend')}}/assets/js/slick.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/slick4.js"></script>
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

    </div>
    <!-- Wrapper / End -->
</body>



</html>
