
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/index-24.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:11:11 GMT -->
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
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/search.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/aos.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/aos2.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/lightcase.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/menu.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/styles.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/maps.css">
    <link rel="stylesheet" id="color" href="{{asset('frontend')}}/assets/css/colors/pink.css">

    @include('frontend.nav_css')
</head>

<body class="homepage-24 homepage-9 hp-6 homepage-1 hd-white">
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









        <!-- START SECTION AGENTS -->
        <section class="team bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Know Your Neighbor </span></h2>
                    <p>Your Neighbor Info</p>
                </div>
                <div class="row team-all">


                    @foreach ($neighbors as $key=> $neighbor )

                    <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 team-pro" data-aos="fade-up" data-aos-delay="{{$key+1}}50">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{asset('uploads')}}/neighbor/person/{{$neighbor->image}}" alt="" />
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>{{$neighbor->name}}</h3>

                                    <span> Flat: {{$neighbor->flat}}</span>
                                    <div class="team-socials">
                                        @if ($neighbor->phone != '')

                                        <span><strong>Phone:</strong> &nbsp; {{$neighbor->phone}}</span>
                                        @else

                                        @endif
                                        <span><strong>Email:</strong> &nbsp; {{$neighbor->email}}</span><br>



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </section>
        <!-- END SECTION AGENTS -->




       @include('frontend.footer')

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->





        <!-- ARCHIVES JS -->
        <script src="{{asset('frontend')}}/assets/js/jquery-3.5.1.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/rangeSlider.js"></script>
        <script src="{{asset('frontend')}}/assets/js/tether.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/moment.js"></script>
        <script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.js"></script>
        <script src="{{asset('frontend')}}/assets/js/aos.js"></script>
        <script src="{{asset('frontend')}}/assets/js/aos2.js"></script>
        <script src="{{asset('frontend')}}/assets/js/animate.js"></script>
        <script src="{{asset('frontend')}}/assets/js/slick.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/fitvids.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.waypoints.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/typed.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.counterup.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/isotope.pkgd.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/smooth-scroll.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/lightcase.js"></script>
        <script src="{{asset('frontend')}}/assets/js/search.js"></script>
        <script src="{{asset('frontend')}}/assets/js/owl.carousel.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/ajaxchimp.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/newsletter.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.form.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.validate.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/searched.js"></script>
        <script src="{{asset('frontend')}}/assets/js/forms-2.js"></script>
        <script src="{{asset('frontend')}}/assets/js/map-style2.js"></script>
        <script src="{{asset('frontend')}}/assets/js/range.js"></script>
        <script src="{{asset('frontend')}}/assets/js/color-switcher.js"></script>
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });

        </script>

        <!-- Slider Revolution scripts -->
        <script src="{{asset('frontend')}}/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="{{asset('frontend')}}/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

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
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>

        <!-- MAIN JS -->
        <script src="{{asset('frontend')}}/assets/js/script.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>



</html>
