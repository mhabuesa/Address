<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Property Details</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images/logo_fab.png">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:500,600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/leaflet.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/leaflet.markercluster.default.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/timedropper.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/datedropper.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/magnific-popup.css">
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

<body class="inner-pages sin-1 homepage-4 hd-white">
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
        <section class="single-proper blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="headings-2 pt-0">
                                    <div class="pro-wrapper">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h3>{{$properties->title}}</h3>
                                                <span class="mrg-l-5 category-tag text-capitalize">For {{$properties->status}}</span>
                                                <div class="mt-0">
                                                </a>

                                                    <a href="#listing-location" class="listing-address">
                                                        <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{$properties->location}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single detail-wrapper mr-2">
                                            <div class="detail-wrapper-body">
                                                <div class="listing-title-bar">
                                                    <h4>&#2547 {{$properties->price}}</h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- main slider carousel items -->
                                <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                    <h5 class="mb-4">Gallery</h5>
                                    <div class="carousel-inner">
                                        @foreach ($galleries as $key=> $gallery )
                                        <div class="{{$key==0?'active':''}} item carousel-item" data-slide-number="{{$key}}">
                                            <img src="{{asset('uploads')}}/properties/gallery/{{$gallery->gallery}}" class="img-fluid" alt="slider-listing">
                                        </div>

                                        @endforeach





                                        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                                    </div>
                                    <!-- main slider carousel nav controls -->
                                    <ul class="carousel-indicators smail-listing list-inline">
                                        @foreach ($galleries as $key=> $gallery )

                                        <li class="list-inline-item {{$key==0?'active':''}}">
                                            <a id="carousel-selector-{{$key}}" class="{{$key==0?'selected':''}}" data-slide-to="{{$key}}" data-target="#listingDetailsSlider">
                                                <img src="{{asset('uploads')}}/properties/gallery/{{$gallery->gallery}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        @endforeach


                                    </ul>
                                    <!-- main slider carousel items -->
                                </div>
                                <div class="blog-info details mb-30">
                                    <h5 class="mb-4">Description</h5>
                                    <p class="mb-3">{!!$properties->desp!!}</p>

                                </div>
                            </div>
                        </div>
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4">Property Details</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">Property ID:</span>
                                    <span class="det">{{$properties->property_id}}</span>
                                </li>

                                <li>
                                    <span class="font-weight-bold mr-1">Property Price:</span>
                                    <span class="det">&#2547 {{$properties->price}}</span>
                                </li>

                                <li>
                                    <span class="font-weight-bold mr-1">Property Size:</span>
                                    <span class="det">{{$properties->size}} <span class="font-weight-bold ml-1">Sqr ft</span></span>
                                </li>

                                <li>
                                    <span class="font-weight-bold mr-1">Property Type:</span>
                                    <span class="det">{{$properties->type}}</span>
                                </li>

                                <li>
                                    <span class="font-weight-bold mr-1">Property status:</span>
                                    <span class="det">{{$properties->status}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Rooms:</span>
                                    <span class="det">{{$properties->room}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Bedrooms:</span>
                                    <span class="det">{{$properties->bedroom}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Bathroom:</span>
                                    <span class="det">{{$properties->bath}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Unit:</span>
                                    <span class="det">{{$properties->unit}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Garages:</span>
                                    <span class="det">{{$properties->garage}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Year Built:</span>
                                    <span class="det">{{$properties->date}}</span>
                                </li>



                            </ul>


                            <!-- title -->
                            <h5 class="mt-5">Amenities</h5>
                            <!-- cars List -->
                            <ul class="homes-list clearfix">
                                @if ($properties->air != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Air Cond</span>
                                </li>
                                @endif

                                @if ($properties->balconie != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Balcony</span>
                                </li>
                                @endif

                                @if ($properties->balconie != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Balcony</span>
                                </li>
                                @endif

                                @if ($properties->emergency != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Emergency Exit</span>
                                </li>
                                @endif

                                @if ($properties->parking != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Parking</span>
                                </li>
                                @endif

                                @if ($properties->cable != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Cable TV Provision</span>
                                </li>
                                @endif

                                @if ($properties->fire != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Fire Extinguisher</span>
                                </li>
                                @endif

                                @if ($properties->tiled != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Tiled Floor</span>
                                </li>
                                @endif

                                @if ($properties->electric != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Electricity Supply</span>
                                </li>
                                @endif

                                @if ($properties->lift != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Lift</span>
                                </li>
                                @endif

                                @if ($properties->dining != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span class="font-weight-bold mr-1">Dining Space</span>
                                </li>
                                @endif

                                @if ($properties->living != '' )
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span class="font-weight-bold mr-1"> Living Room</span>
                                </li>
                                @endif

                            </ul>
                        </div>
                        <div class="floor-plan property wprt-image-video w50 pro">
                            <h5>Floor Plans</h5>
                            <img alt="image" src="{{asset('uploads')}}/properties/plan/{{$properties->plan}}">
                        </div>

                        <div class="property wprt-image-video w50 pro">
                            <h5>Property Video</h5>
                            <img alt="image" src="{{asset('uploads')}}/properties/preview/{{$properties->preview}}">


                            <a class="icon-wrap popup-video youtube-waves  {{Auth::guard('client')->user()?'popup-video popup-youtube':''}}" href="{{Auth::guard('client')->user()?$properties->video:route('client.login.page')}}">
                                <i class="fa fa-play"></i>
                            </a>

                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>



                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">

                            <!-- end author-verified-badge -->
                            <div class="sidebar">
                                <div class="widget-boxed mt-33 mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Pertner Information</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="sidebar-widget author-widget2">
                                            <div class="author-box clearfix">
                                                <img src="{{asset('frontend')}}/assets/images/logo_fab.png" alt="author-image" class="author__img">
                                                <h4 class="author__title">BD ADDRESS</h4>
                                                <p class="author__meta">Pertner of Property</p>
                                            </div>
                                            <ul class="author__contact">
                                                <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>{{$contact->address}}</li>
                                                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">{{$contact->phone}}</a></li>
                                                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">{{$contact->email}}</a></li>
                                            </ul>
                                            <div class="agent-contact-form-sidebar">
                                                <h4>Request Inquiry</h4>
                                                <form name="contact_form" method="post" action="{{route('send.message',$properties->id)}}">
                                                    @csrf
                                                    <input type="text" id="fname" name="name" placeholder="Full Name" required />
                                                    <input type="text" id="number" name="number" placeholder="Phone Number" required />
                                                    <input type="email" id="emailid" name="email" placeholder="Email Address" />
                                                    <textarea placeholder="Message" name="message" required></textarea>

                                                    <button type="submit" class="multiple-send-message">Send Messae</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-search-field-2">
                                    <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>Recent Properties</h4>
                                        </div>

                                        <div class="widget-boxed-body">
                                            <div class="recent-post">
                                                @foreach ($recent_properties as $key=> $recent )

                                                <div class="recent-main {{$key == 1?'my-4':''}} ">
                                                    <div class="recent-img">
                                                        <a href="{{route('single.property',$recent->id)}}"><img src="{{asset('uploads')}}/properties/preview/{{$recent->preview}}" alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="{{route('single.property',$recent->id)}}"><h6>{{$recent->title}}</h6></a>
                                                        <p>&#2547 {{$recent->price}}</p>
                                                    </div>
                                                </div>

                                                @endforeach

                                            </div>
                                        </div>

                                    </div>
                                    <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header mb-5">
                                            <h4>Feature Properties</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="slick-lancers">


                                                @foreach ($status as $status )

                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="{{route('single.property',$status->id)}}" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">&#2547 {{$status->price}}</span>
                                                                <span class="text-capitalize">For {{$status->status}}</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">{{$status->title}}
                                                                    <i>{{App\Models\Place::where('id',$status->place)->get()->first()->name }}</i>
                                                                </span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>{{$status->size}} sq ft</span></li>
                                                                    <li>Rooms <span>{{$status->room}}</span></li>
                                                                    <li>Beds <span>{{$status->bedroom}}</span></li>
                                                                    <li>Baths <span>{{$status->c_bath}}</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="{{asset('uploads')}}/properties/preview/{{$status->preview}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- START SIMILAR PROPERTIES -->
                <section class="similar-property featured portfolio p-0 bg-white-inner">
                    <div class="container">
                        <h5>Similar Properties</h5>
                        <div class="row portfolio-items">



                            {{-- @foreach ($places as $place )


                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{route('single.property',$place->id)}}" class="homes-img">
                                                <div  class="homes-tag button alt featured custom">{{App\Models\Place::where('id',$place->place)->get()->first()->name}}</div>
                                                <div class="homes-tag button alt sale text-capitalize">For {{$place->status}}</div>
                                                <div class="homes-price">&#2547 {{$place->price}}</div>
                                                <img src="{{asset('uploads')}}/properties/preview/{{$place->preview}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">

                                            <a href="{{$place->video}}" class="btn {{Auth::guard('client')->user()?'popup-video popup-youtube':'show-reg-form modal-open'}}"><i class="fas fa-video"></i></a>

                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="{{route('single.property',$place->id)}}"> {{$place->title}}</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="{{route('single.property',$place->id)}}">
                                                <i class="fa fa-map-marker"></i><span>{{$place->location}}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>{{$place->bedroom}} Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>{{$place->c_bath}} Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>{{$place->size}} sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>{{$place->garage}} Garages</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            @endforeach --}}









                        </div>
                    </div>
                </section>
                <!-- END SIMILAR PROPERTIES -->
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->

        <!-- Footer Start -->
        @include('frontend.footer')
        <!-- Footer End -->



        <!-- ARCHIVES JS -->
        <script src="{{asset('frontend')}}/assets/js/jquery-3.5.1.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery-ui.js"></script>
        <script src="{{asset('frontend')}}/assets/js/range-slider.js"></script>
        <script src="{{asset('frontend')}}/assets/js/tether.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.js"></script>
        <script src="{{asset('frontend')}}/assets/js/slick.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/slick4.js"></script>
        <script src="{{asset('frontend')}}/assets/js/fitvids.js"></script>
        <script src="{{asset('frontend')}}/assets/js/smooth-scroll.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/popup.js"></script>
        <script src="{{asset('frontend')}}/assets/js/ajaxchimp.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/newsletter.js"></script>
        <script src="{{asset('frontend')}}/assets/js/timedropper.js"></script>
        <script src="{{asset('frontend')}}/assets/js/datedropper.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jqueryadd-count.js"></script>
        <script src="{{asset('frontend')}}/assets/js/leaflet.js"></script>
        <script src="{{asset('frontend')}}/assets/js/leaflet-gesture-handling.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/leaflet-providers.js"></script>
        <script src="{{asset('frontend')}}/assets/js/leaflet.markercluster.js"></script>
        <script src="{{asset('frontend')}}/assets/js/map-single.js"></script>
        <script src="{{asset('frontend')}}/assets/js/color-switcher.js"></script>
        <script src="{{asset('frontend')}}/assets/js/inner.js"></script>

        <!-- Date Dropper Script-->
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

    </div>
    <!-- Wrapper / End -->
</body>


</html>
