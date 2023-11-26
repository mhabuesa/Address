
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/properties-full-grid-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:11:40 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Upcoming Projects</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images/logo_fab.png">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <style>
        #header{
            background: black;
        }

        .hd-white .header-widget.sign-in a, .hd-white .show-lang, .hd-white .show-lang .fa-caret-down.arrlan {
            color: #fff;
        }
        .inner-pages.agents .header-user-name, .inner-pages.agents .header-user-name:before, .inner-pages.sin-1 .header-user-name, .inner-pages.sin-1 .header-user-name:before {
            color: #fff;
    }
    .homepage-4 #navigation.style-2.cloned .header-user-name, .homepage-4 #header.cloned.sticky .header-user-name, .homepage-4 #navigation.style-2.cloned .header-user-name:before, .homepage-4 #header.cloned.sticky .header-user-name:before {
    color: #fff;
}
#header.cloned.sticky .show-lang span .fa-globe-americas, #header.cloned.sticky .show-lang span strong, #header.cloned.sticky .fa-caret-down:before, #header.cloned.sticky .right-side.sign a {
    color: #ffffff;
}



    </style>
</head>

<body class="inner-pages homepage-4 agents hp-6 full hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
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
                                    <p><a href="{{route('index')}}">Home </a> &nbsp;/&nbsp; <span>Upcoming </span></p>
                                </div>
                                <h3> Properties in Upcoming</h3>
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



                    @foreach($upcoming as $property )



                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="{{route('single.property',$property->id)}}" class="homes-img">


                                        <div class="homes-tag button alt sale text-capitalize">For {{$property->status}}</div>
                                        <div class="homes-price">&#2547 {{$property->price}}</div>
                                        <img src="{{asset('uploads')}}/properties/preview/{{$property->preview}}" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">

                                    <a href="{{Auth::guard('client')->user()?$partner->video:route('client.login.page')}}" class="btn {{Auth::guard('client')->user()?'popup-video popup-youtube':''}}"><i class="fas fa-video"></i></a>
                                    <a href="{{route('single.property',$property->id)}}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="{{route('single.property',$property->id)}}">{{$property->title}}</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="{{route('single.property',$property->id)}}">
                                        {{App\Models\Place::where('id', $property->place)->get()->first()->name}}
                                    </a><br>
                                    <a href="{{route('single.property',$property->id)}}">
                                        <i class="fa-solid fa-location-dot"></i><span>{{$property->location}}</span>
                                    </a>

                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>{{$property->bedroom}} Bedrooms</span>
                                    </li>

                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>{{$property->size}} sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>{{$property->garage}} Garages</span>
                                    </li>

                                    <li class="the-icons">
                                        <i class="fa-regular fa-building"></i>
                                        <span>{{$property->unit}} Unit</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>





                    @endforeach









                </div>

            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->

        <!-- Footer Start -->
        @include('frontend.footer')
        <!-- Footer End -->

        <!--register form -->
<div class="login-and-register-form modal">
    <div class="main-overlay"></div>
    <div class="main-register-holder">
        <div class="main-register fl-wrap">
            <div class="close-reg"><i class="fa fa-times"></i></div>
            <h3>Welcome to <span><strong>BD Address</strong> </span></h3>


            <div id="tabs-container">
                <ul class="tabs-menu">
                    <li class="current"><a href="#tab-1">Login</a></li>
                    <li><a href="#tab-2">Register</a></li>
                </ul>
                <div class="tab">
                    <div id="tab-1" class="tab-contents">
                        <div class="custom-form">
                            <form method="post" name="registerform">
                                <label>Username or Email Address * </label>
                                <input name="email" type="text" onClick="this.select()" value="">
                                <label>Password * </label>
                                <input name="password" type="password" onClick="this.select()" value="">

                                <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                <div class="clearfix"></div>

                            </form>

                        </div>
                    </div>
                    <div class="tab">
                        <div id="tab-2" class="tab-contents">
                            <div class="custom-form">
                                <form method="post" action="" class="main-register-form" id="main-register-form2">
                                    @csrf
                                    <label>First Name * </label>
                                    <input name="name" type="text" onClick="this.select()" value="">

                                    <label>Phone Number *</label>
                                    <input name="phone" type="text" onClick="this.select()" value="">

                                    <label>Email Address *</label>
                                    <input name="email" type="text" onClick="this.select()" value="">

                                    <label>Password *</label>
                                    <input name="password" type="password" onClick="this.select()" value="">


                                    <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--register form end -->

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
