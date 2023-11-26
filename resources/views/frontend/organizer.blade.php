
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/properties-full-grid-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:11:40 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Organizer</title>
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

    @include('frontend.nav_css')
</head>

<body class="inner-pages homepage-4 agents hp-6 full hd-white">
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
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-list featured portfolio blog">
            <div class="container">
                <section class="headings-2 pt-0 pb-0">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p><a href="{{route('index')}}">Home </a> &nbsp;/&nbsp; <span>Organizer</span></p>
                                </div>
                                <h3>All Organizers</h3>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Search Form -->
                <div class="col-12 px-0 parallax-searchs">
                    <div class="banner-search-wrap">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs_1">
                                <div class="rld-main-search">

                                    <form action="{{route('search')}}" method="get">
                                        @csrf
                                            <div class="row justify-content-center">
                                                <div class="rld-single-select ml-22">
                                                    <select name="status" class="select single-select ">
                                                        <option>Property Status</option>
                                                        <option value="buy">For Buy</option>
                                                        <option value="rent">For Rent</option>
                                                    </select>
                                                </div>
                                                <div class="rld-single-select ml-22">
                                                    <select name="type" class="select single-select">
                                                        <option>Property Type</option>
                                                        <option value="commercial">Commercial</option>
                                                        <option value="residential">Residential</option>
                                                    </select>
                                                </div>
                                                <div class="rld-single-select">
                                                    <select name="place" class="select single-select mr-10">
                                                        <option value="">Location</option>
                                                        @foreach ($places as $place )

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

                <div class="row">




                    <div class="col-lg-12 col-md-12 blog-pots">

                         <div class="row">


                            @foreach ($organizers as $organizer )

                            <div class="item col-lg-3 col-md-6 col-xs-12 landscapes sale">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <img src="{{asset('uploads')}}/organizer/{{$organizer->image}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <div class="the-agents">
                                            <h3>{{$organizer->name}}</h3>
                                            <ul class="the-agents-details">
                                                <li><a href="tel:{{$organizer->phone}}"><strong>Phone:</strong> {{$organizer->phone}}</a></li>
                                                <li><a href="mailto:{{$organizer->email}}"><strong>Email:</strong> {{$organizer->email}}</a></li>
                                                <li><strong>Address:</strong>
                                                   <p>{{$organizer->address}}</p>
                                               </li>

                                                <li>
                                                   <div class="button-effect">

                                                       <a href="{{Auth::guard('client')->user()?$organizer->video:route('client.login.page')}}" class="btn {{Auth::guard('client')->user()?'popup-video popup-youtube':''}}"><i class="fas fa-video"></i></a>

                                                   </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
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
