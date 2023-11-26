
<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Services</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images/logo_fab.png">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/font-awesome.min.css">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/leaflet.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/leaflet.markercluster.default.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/lightcase.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/menu.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/styles.css">
    <link rel="stylesheet" id="color" href="{{asset('frontend/assets')}}/css/default.css">


    <style>
            .inner-pages .headings {
                background: -webkit-gradient(linear, left top, left bottom, from(rgba(18, 27, 34, 0.6)), to(rgba(18, 27, 34, 0.6))), url({{asset('frontend')}}/assets/images/bg/bg-details.jpg) no-repeat center center;
          background: linear-gradient(rgba(18, 27, 34, 0.6), rgba(18, 27, 34, 0.6)), url({{asset('frontend')}}/assets/images/bg/bg-details.jpg) no-repeat center center;
            }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @include('frontend.nav_css')

</head>

<body class="inner-pages hd-white">
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
                    <h1>Services</h1>
                    <h2><a href="{{route('index')}}">Home </a> &nbsp;/&nbsp; Services</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION CONTACT US -->
        <section class="contact-us">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-lg-12 col-md-12">
                        <h2 class="text-center">Our Services</h2>
                        <div class="row mb-4 d-flex justify-content-center">
                                <div class="col-lg-3 service-container content-1 ">
                                    <div class=" service-content ">
                                        <span>RAJUK</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 service-container  content-2">
                                    <div class=" service-content ">
                                        <span>REGISTRATION</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 service-container content-3">
                                    <div class=" service-content ">
                                        <span>NUTATION</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 service-container content-4">
                                    <div class=" service-content ">
                                        <span>DESCO / DPDC / CITY CORPORATION</span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h3 class="mb-4">Requerment</h3>
                        @if (session('message'))
                        <h3 class="alert alert-success text-center">{{session('message')}}</h3>
                        @endif

                        <form  class="contact-form"  action="{{route('service.message.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="name" placeholder="Your Name" >
                            </div>

                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="phone" placeholder="Phone Number" >
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control input-custom " name="email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control textarea-custom input-full" required id="ccomment" name="message"  rows="8" placeholder="Please tell us, How can we help you? &#013;Our representative will Contact you Immediately." ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 bgc">
                        <div class="call-info">
                            <h3>Contact Details</h3>
                            <p class="mb-5">Please find below contact details and contact us today!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">{{$contact->address}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">{{$contact->phone}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">{{$contact->email}}</p>
                                    </div>
                                </li>

                                <li>

                                    <a href="https://wa.link/uhofm1">

                                    <div class="info">
                                        <i class="fa-brands fa-whatsapp fa-xl" style="color: #ffffff;"></i>
                                        <p class="in-p ti">01325712579</p>
                                    </div>

                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT US -->


        <!-- Footer Start -->
        @include('frontend.footer')
        <!-- Footer End -->



        <!-- ARCHIVES JS -->
        <script src="{{asset('frontend/assets')}}/js/jquery-3.5.1.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/tether.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/popper.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/mmenu.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/mmenu.js"></script>
        <script src="{{asset('frontend/assets')}}/js/jquery.form.js"></script>
        <script src="{{asset('frontend/assets')}}/js/jquery.validate.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/smooth-scroll.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/forms.js"></script>
        <script src="{{asset('frontend/assets')}}/js/ajaxchimp.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/newsletter.js"></script>
        <script src="{{asset('frontend/assets')}}/js/leaflet.js"></script>
        <script src="{{asset('frontend/assets')}}/js/leaflet-gesture-handling.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/leaflet-providers.js"></script>
        <script src="{{asset('frontend/assets')}}/js/leaflet.markercluster.js"></script>
        <script src="{{asset('frontend/assets')}}/js/map-single.js"></script>
        <script src="{{asset('frontend/assets')}}/js/color-switcher.js"></script>
        <script src="{{asset('frontend/assets')}}/js/inner.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


</html>
