<header id="header-container">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="{{route('index')}}"><img src="{{asset('frontend/assets')}}/images/logo.png" data-sticky-logo="{{asset('frontend/assets')}}/images/logo-red.svg" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>

                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">


                        <li><a href="{{route('about.us')}}">About Us</a></li>
                        <li><a href="{{route('properties')}}">Properties</a></li>
                        <li><a href="{{route('loan')}}">Home Loan</a></li>
                        <li><a href="{{route('blog')}}">Blogs</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>






                            <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->

            </div>
            <!-- Left Side Content / End -->


            <!-- Right Side Content / End -->
            <div class="header-user-menu user-menu add">
                <div class="header-user-name">
                    <span><img src="{{asset('frontend/assets')}}/images/testimonials/user.jpg" alt=""></span>Yaseen Chowdhury
                </div>
                <ul>
                    <li><a href="user-profile.html"> Edit profile</a></li>
                    <li><a href="add-property.html"> Add Property</a></li>
                    <li><a href="payment-method.html">  Payments</a></li>
                    <li><a href="change-password.html"> Change Password</a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
            </div>
            <!-- Right Side Content / End -->

            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                <!-- Header Widget -->
                <div class="header-widget sign-in">
                    <div class="show-reg-form modal-open"><a href="#">Sign In</a></div>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->



        </div>
    </div>
    <!-- Header / End -->

</header>
















































<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Address - Secure Your Living</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">

    <!-- GOOGLE FONTS -->
    <link href="../../css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/font-awesome.min.css">

    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/leaflet.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/leaflet.markercluster.default.css">

    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/search.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/aos.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/aos2.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/lightcase.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/menu.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/styles.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/maps.css">
    <link rel="stylesheet" id="color" href="{{asset('frontend/assets')}}/css/colors/pink.css">

    <style>
        .parallax-searchs.thome-1{
            background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url({{asset('frontend')}}/assets/images/bg/bg-h-1.jpg) no-repeat center top !important;
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{asset('frontend')}}/assets/images/bg/bg-h-1.jpg) no-repeat center top !important;
        }
    </style>

    <style>

    .custom .headings-2 span.category-tag {
    font-size: 14px;
    background: #FF385C;
    color: #fff;
    border: 1px solid #fff;
    padding: 5px 15px;
    border-radius: 50px;
    top: -3px;
    margin-left: 0.5rem;
    position: relative;

    }

    .custom .headings-2 .listing-title-bar h3 {
    font-size: 28px;
    line-height: 34px;
    font-weight: 600;
    color: #222;
    text-transform: capitalize !important;
}






        </style>







</head>

<body class="homepage-9 custom hp-6 homepage-1 mh ">

    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0&appId=882519935864814" nonce="xA4TQlZd"></script>

{{-- <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script> --}}

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
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


    <!-- STAR HEADER SEARCH -->
    <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">
        <div class="hero-main">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-inner">
                            <!-- Welcome Text -->
                            <div class="welcome-text">
                                <h1 class="h1">Find Your Dream
                                <br class="d-md-none">
                                <span class="typed border-bottom"></span>
                            </h1>
                                <p class="mt-4">Secure Your <span class="living-red">Living</span></p>
                            </div>
                            <!--/ End Welcome Text -->
                            <!-- Search Form -->
                            <div class="col-12">
                                <div class="banner-search-wrap">

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs_1">
                                            <div class="rld-main-search">
                                            <form action="{{route('search')}}" method="get">
                                                @csrf
                                                    <div class="row justify-content-center">
                                                        <div class="rld-single-select ml-22">
                                                            <select name="status" class="select single-select ">

                                                                <option value="buy">For Buy</option>
                                                                <option value="rent">For Rent</option>
                                                            </select>
                                                        </div>
                                                        <div class="rld-single-select ml-22">
                                                            <select name="type" class="select single-select">

                                                                <option value="commercial">Commercial</option>
                                                                <option value="residential">Residential</option>
                                                            </select>
                                                        </div>
                                                        <div class="rld-single-select">
                                                            <select name="place" class="select single-select mr-10">

                                                                @foreach ($place as $place )

                                                                <option value="{{$place->id}}">{{$place->name}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>


                                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                            <button class="btn btn-yellow" >Search Now</button>
                                                        </div>
                                                    </div>

                                            </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HEADER SEARCH -->

    <!-- START SECTION POPULAR PLACES -->
    <section class="feature-categories bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Working </span>Partner</h2>
                <p>Properties In Most Popular Places.</p>
            </div>
            <div class="row">

                <!-- Single category -->
                @foreach ($places as $place )

                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450 ">
                    <div class="small-category-2  si-mt">
                        <div class="small-category-2-thumb img-11">
                            <a href="{{route('place.properties',$place->id)}}"><img src="{{asset('uploads')}}/place/{{$place->image}}" alt=""></a>
                        </div>
                        <div class="sc-2-detail">
                            <h4 class="sc-jb-title"><a href="{{route('place.properties',$place->id)}}">{{$place->name}}</a></h4>
                            <span>{{$place->count}} Properties</span>
                        </div>
                    </div>
                </div>

                @endforeach









            </div>
            <!-- /row -->
        </div>
    </section>
    <!-- END SECTION POPULAR PLACES -->

    <!-- START SECTION FEATURED PROPERTIES -->
    <section class="featured portfolio bg-white-2 rec-pro full-l">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Upcomming </span>Project</h2>
                <p>These are our featured properties</p>
            </div>
            <div class="row portfolio-items">



                @foreach ($properties as $key=> $property )


                <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                    <div class="project-single" data-aos="fade-{{$key%2==0?'right':'left'}}">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="#">
                                    <div class="text-capitalize  homes-tag button alt featured">{{App\Models\Place::where('id',$property->place)->get()->first()->name}}</div>
                                    </a>
                                <a href="single-property-1.html" class="homes-img">
                                    <div class="text-capitalize homes-tag button alt sale">For {{$property->status}}</div>

                                    <img src="{{asset('uploads')}}/properties/preview/{{$property->preview}}" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">

                                <a href="{{explode("&", $property->video)[0]}}" class="btn {{Auth::guard('client')->user()?'popup-video popup-youtube':'show-reg-form modal-open'}}"><i class="fas fa-video"></i></a>

                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="{{route('single.property',$property->id)}}">{{$property->title}}</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-1.html">
                                    <i class="fa fa-map-marker"></i><span>{{$property->location}}</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>{{$property->bedroom}} Bedrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>{{$property->c_bath}} Bathrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>{{$property->size}} sq ft</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>{{$property->garage}} Garages</span>
                                </li>
                            </ul>
                            <div class="price-properties footer pt-3 pb-0">
                                <h3 class="title mt-3">
                                 <a href="single-property-1.html">&#2547; {{$property->price}}</a>
                                </h3>
                                <div class="compare">

                                    <a href="#" title="Favorites">
                                        <i class="flaticon-heart"></i>
                                    </a>

                                    <a href="#" title="Share">

                                    </a>

                                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="" data-size="">
                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach








            </div>
            <div class="bg-all">
                <a href="{{route('properties')}}" class="btn btn-outline-light">View More</a>
            </div>
        </div>
    </section>
    <!-- END SECTION FEATURED PROPERTIES -->



    <!-- START SECTION RECENTLY PROPERTIES -->
    <section class="featured portfolio rec-pro disc">
        <div class="container-fluid">
            <div class="sec-title discover">
                <h2><span>Under </span>Construction</h2>
                <p>The foundation of success.</p>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">



                    @foreach ($popular as $key=> $popular )


                    <div class="agents-grid" data-aos="fade-up" data-aos-delay="{{$key == '0'?'150':''}}{{$key == '1'?'250':''}}{{$key == '2'?'350':''}}{{$key == '3'?'450':''}}">
                        <div class="landscapes">

                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{route('single.property',$popular->id)}}" class="homes-img">
                                            <div class="homes-tag button alt sale text-capitalize">For {{$popular->status}}</div>
                                            <img src="{{asset('uploads')}}/properties/preview/{{$popular->preview}}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">

                                        <a href="{{$popular->video}}" class="btn {{Auth::guard('client')->user()?'popup-video popup-youtube':'show-reg-form modal-open'}}"><i class="fas fa-video"></i></a>

                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{route('single.property',$popular->id)}}">{{$popular->title}}</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="{{route('single.property',$popular->id)}}">
                                            <i class="fa fa-map-marker"></i><span>{{$popular->location}}</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>{{$popular->bedroom}} Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>{{$popular->a_bath+$popular->c_bath}} Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>{{$popular->size}} sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>{{$popular->garage}} Garages</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a href="{{route('single.property',$popular->id)}}">&#2547 {{$popular->price}}</a>
                                        </h3>

                                        <div class="compare">
                                            <div class="fb-share-button" data-href="{{route('single.property',$popular->id)}}" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION RECENTLY PROPERTIES -->

    <!-- START SECTION AGENTS -->
    <section class="team bg-white rec-pro">
        <div class="container-fluid">

            <div class="sec-title">
                <h2><span>Handover </span>Project</h2>
                <p>Our Agents are here to help you</p>
            </div>

            <div class="row team-all">
                @foreach ($agents as $key=> $agent )

                <!--Team Block-->
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="{{$key+1}}50">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="{{asset('uploads/agent/'.$agent->image)}}" alt=""></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a target="_blank" href="{{$agent->facebook}}" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="{{$agent->twitter}}" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="{{$agent->instagram}}" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a target="_blank" href="{{$agent->linkedin}}" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="">{{$agent->name}}</a></h3>
                            <div class="designation">{{$agent->title}}</div>
                        </div>
                    </div>
                </div>

                @endforeach






            </div>
        </div>
    </section>
    <!-- END SECTION AGENTS -->

    <!-- START SECTION TESTIMONIALS -->
    <section class="testimonials bg-white-2 rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Happy </span>Clients</h2>
                <p>We collect reviews from our Clients.</p>
            </div>
            <div class="owl-carousel job_clientSlide">

                @foreach ($testimonials as $key=> $testimonial )

                <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="150">
                    <p>
                        {{$testimonial->desp}}
                    </p>
                    <div class="detailJC">
                        <span><img src="{{asset('uploads')}}/testimonial/{{$testimonial->image}}" alt=""></span>
                        <h5>{{$testimonial->name}}</h5>
                        <p>{{$testimonial->address}}</p>
                    </div>
                </div>

                @endforeach



            </div>
        </div>
    </section>
    <!-- END SECTION TESTIMONIALS -->


    @include('frontend.footer')





<!-- START PRELOADER -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- END PRELOADER -->

{{-- Whats App Plugin Start --}}
{{-- <div class="commonninja_component pid-acdb31c0-eeaa-4610-b002-bceb2541a3cd"></div> --}}
{{-- Whats App Plugin End --}}










<!-- ARCHIVES JS -->
<script src="{{asset('frontend/assets')}}/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/rangeSlider.js"></script>
<script src="{{asset('frontend')}}/assets/js/jquery-ui.js"></script>
<script src="{{asset('frontend')}}/assets/js/range-slider.js"></script>
<script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/slick4.js"></script>
<script src="{{asset('frontend')}}/assets/js/popup.js"></script>
<script src="{{asset('frontend')}}/assets/js/timedropper.js"></script>
<script src="{{asset('frontend')}}/assets/js/datedropper.js"></script>
<script src="{{asset('frontend')}}/assets/js/jqueryadd-count.js"></script>
<script src="{{asset('frontend')}}/assets/js/leaflet.js"></script>
<script src="{{asset('frontend')}}/assets/js/leaflet-gesture-handling.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/leaflet-providers.js"></script>
<script src="{{asset('frontend')}}/assets/js/leaflet.markercluster.js"></script>
<script src="{{asset('frontend')}}/assets/js/map-single.js"></script>

<script src="{{asset('frontend/assets')}}/js/tether.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/moment.js"></script>
<script src="{{asset('frontend/assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/mmenu.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/mmenu.js"></script>
<script src="{{asset('frontend/assets')}}/js/aos.js"></script>
<script src="{{asset('frontend/assets')}}/js/aos2.js"></script>
<script src="{{asset('frontend/assets')}}/js/animate.js"></script>
<script src="{{asset('frontend/assets')}}/js/slick.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/fitvids.js"></script>
<script src="{{asset('frontend/assets')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/typed.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/smooth-scroll.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/lightcase.js"></script>
<script src="{{asset('frontend/assets')}}/js/search.js"></script>
<script src="{{asset('frontend/assets')}}/js/owl.carousel.js"></script>
<script src="{{asset('frontend/assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/ajaxchimp.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/newsletter.js"></script>
<script src="{{asset('frontend/assets')}}/js/jquery.form.js"></script>
<script src="{{asset('frontend/assets')}}/js/jquery.validate.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/searched.js"></script>
<script src="{{asset('frontend/assets')}}/js/forms-2.js"></script>
<script src="{{asset('frontend/assets')}}/js/map-style2.js"></script>
<script src="{{asset('frontend/assets')}}/js/range.js"></script>
<script src="{{asset('frontend/assets')}}/js/color-switcher.js"></script>
<script src="{{asset('frontend')}}/assets/js/inner.js"></script>
<script>
    $(window).on('scroll load', function() {
        $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
    });

</script>

<!-- Slider Revolution scripts -->
<script src="{{asset('frontend/assets')}}/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('frontend/assets')}}/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script>
    var typed = new Typed('.typed', {
        strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
        smartBackspace: false,
        loop: true,
        showCursor: true,
        cursorChar: "|",
        typeSpeed: 50,
        backSpeed: 30,
        startDelay: 800
    });

</script>

<script>
    $('.slick-lancers').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 1292,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 993,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 769,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            }
        }]
    });

</script>

<script>
    $('.job_clientSlide').owlCarousel({
        items: 2,
        loop: true,
        margin: 30,
        autoplay: false,
        nav: true,
        smartSpeed: 1000,
        slideSpeed: 1000,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            991: {
                items: 3
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
                items: 7,
                margin: 20
            }
        }
    });

</script>

<script>
$(document).ready(function() {
$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
});
});

</script>

<script>
$('.slick-carousel').each(function() {
var slider = $(this);
$(this).slick({
    infinite: true,
    dots: false,
    arrows: false,
    centerMode: true,
    centerPadding: '0'
});

$(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
    slider.slick('slickPrev');
});
$(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
    slider.slick('slickNext');
});
});

</script>

<script>
$('#reservation-date').dateDropper();

</script>
<!-- Time Dropper Script-->
<script>
this.$('#reservation-time').timeDropper({
setCurrentTime: false,
meridians: true,
primaryColor: "#e8212a",
borderColor: "#e8212a",
minutesInterval: '15'
});

</script>


<script>
    $(".dropdown-filter").on('click', function() {

        $(".explore__form-checkbox-list").toggleClass("filter-block");

    });

</script>

<!-- MAIN JS -->
<script src="{{asset('frontend/assets')}}/js/script.js"></script>

</div>
<!-- Wrapper / End -->





</body>

</html>

