
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:12:27 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images/logo_fab.png">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/search.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/dashbord-mobile-menu.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/lightcase.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/menu.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/slick.css">
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


hr{
    border: 2px solid #bfb8b8bd;
    margin: 23px 0px;
    border-radius: 3px;

}


    </style>
</head>

<body class="maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <!-- Header -->
                <div id="header">
                    <div class="container-fluid">



                        <!-- Header Menu Start -->
                    @include('frontend.header_manu')
                    <!-- Header Menu end -->




                    </div>
                </div>
                <!-- Header / End -->
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION USER PROFILE -->
        <section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">

                            <div class="header clearfix">
                                @if (Auth::guard('client')->user()->image == '')
                                <img src="{{asset('uploads')}}/profile/null_profile.png" alt="avatar" class="img-fluid profile-img">
                                @else

                                <img src="{{asset('uploads')}}/profile/{{Auth::guard('client')->user()->image}}" alt="avatar" class="img-fluid profile-img">
                                @endif
                            </div>
                            <div class="active-user">
                                <h2> {{Auth::guard('client')->user()->name}}</h2>
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a href="{{route('client.dashboard')}}">
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="{{route('client.profile')}}">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('not.found')}}">
                                            <i class="fa fa-list" aria-hidden="true"></i>My Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('not.found')}}">
                                            <i class="fa fa-heart" aria-hidden="true"></i>Favorited Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-property.html">
                                            <i class="fa fa-list" aria-hidden="true"></i>Add Property
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('not.found')}}">
                                            <i class="fas fa-credit-card"></i>Payments
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('not.found')}}">
                                            <i class="fa fa-lock"></i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('client.logout')}}">
                                            <i class="fas fa-sign-out-alt"></i>Log Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 widget-boxed mt-33 mt-0 offset-lg-2 offset-md-3">
                       <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a href="{{route('client.dashboard')}}">
                                                <i class="fa fa-map-marker mr-3"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" href="{{route('client.profile')}}">
                                                <i class="fa fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('not.found')}}">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('not.found')}}">
                                                <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('not.found')}}">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('not.found')}}">
                                                <i class="fas fa-credit-card mr-3"></i>Payments
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{route('not.found')}}">
                                                <i class="fa fa-lock mr-3"></i>Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('client.logout')}}">
                                                <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="widget-boxed-header">
                            <h4>Profile Details</h4>
                        </div>
                        <div class="sidebar-widget author-widget2">
                            <div class="author-box clearfix">
                                <img src="{{asset('frontend')}}/assets/images/testimonials/user.jpg" alt="author-image" class="author__img">
                                <h4 class="author__title"> {{Auth::guard('client')->user()->name}}</h4>
                                <p class="author__meta">Agent of Property</p>
                            </div>
                            <ul class="author__contact">
                                <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>192-Shantinag, Dhaka-1217</li>
                                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">{{Auth::guard('client')->user()->phone}}</a></li>
                                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">{{Auth::guard('client')->user()->email}}</a></li>
                            </ul>
                        </div> --}}


                        <div class=" mb-0">
                            <h4 class="heading pt-0">Profile Details</h4>
                            <div class="section-inforamation">

                                <div class="sidebar-widget author-widget2">
                                    <div class="author-box clearfix">

                                        @if (Auth::guard('client')->user()->image == '')
                                        <img src="{{asset('uploads')}}/profile/null_profile.png" alt="avatar" class="author__img">
                                        @else

                                        <img src="{{asset('uploads')}}/profile/{{Auth::guard('client')->user()->image}}" alt="avatar" class="author__img">
                                        @endif


                                        <h4 class="author__title"> {{Auth::guard('client')->user()->name}}</h4>
                                        <p class="author__meta">Agent of Property</p>
                                    </div>
                                    <ul class="author__contact">
                                        <li class="text-{{Auth::guard('client')->user()->address == ''?'secondary': 'primary' }}" ><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>
                                            {{Auth::guard('client')->user()->address == ''?'Address Null': Auth::guard('client')->user()->address }}</li>
                                        <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">{{Auth::guard('client')->user()->phone}}</a></li>
                                        <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">{{Auth::guard('client')->user()->email}}</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <hr class="hr-4 ">

                        <div class="dashborad-box mb-0">
                            <h4 class="heading pt-0">Edit Information</h4>
                            <div class="section-inforamation">
                                <form action="{{route('client.profile.update',Auth::guard('client')->user()->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{Auth::guard('client')->user()->name}}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" name="phone" class="form-control" placeholder="Ex: +1-800-7700-00" value="{{Auth::guard('client')->user()->phone}}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Ex: example@domain.com" value="{{Auth::guard('client')->user()->email}}" required>
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea name="address" class="form-control" placeholder="Write your address here" required>{{Auth::guard('client')->user()->address}}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Profile Image</label>
                                                <input type="file" accept=".jpg, .png" name="image" class="form-control" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">

                                                @error('image')
                                                    <strong class="text-danger text-capitalize"> {{$message}}</strong>
                                                @enderror

                                                <img src="" class="mt-4" id="image" alt="" width="200" />
                                            </div>
                                        </div>




                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg mt-2">Update</button>
                                </form>
                            </div>
                        </div>



                        <div class="dashborad-box mb-0 mt-4">
                            <h4 class="heading pt-0">Update Password</h4>
                            @if (session('changed'))
                                <strong class="text-danger">{{session('wrong')}}</strong>
                            @endif
                            <div class="section-inforamation">
                                <form action="{{route('client.password.change', Auth::guard('client')->user()->id)}}" method="POST">
                                    @csrf
                                    <div class="password-section">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" name="password" class="form-control" placeholder="Write new password">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Repeat Password</label>
                                                    <input type="password" name="confirmation_password" class="form-control" placeholder="Write same password again">
                                                </div>
                                                @if (session('wrong'))
                                                    <strong class="text-danger">{{session('wrong')}}</strong>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg mt-2">Update</button>
                                </form>
                            </div>
                        </div>










                    </div>



                </div>
            </div>
        </section>
        <!-- END SECTION USER PROFILE -->










        <div class="second-footer ad mt-3">
            <div class="container">
                <p>2021 © Copyright - All Rights Reserved.</p>
                <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By Code-Theme</p>
            </div>
        </div>

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="{{asset('frontend')}}/assets/js/jquery-3.5.1.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery-ui.js"></script>
        <script src="{{asset('frontend')}}/assets/js/tether.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/moment.js"></script>
        <script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.js"></script>
        <script src="{{asset('frontend')}}/assets/js/swiper.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/swiper.js"></script>
        <script src="{{asset('frontend')}}/assets/js/slick.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/slick2.js"></script>
        <script src="{{asset('frontend')}}/assets/js/fitvids.js"></script>
        <script src="{{asset('frontend')}}/assets/js/jquery.waypoints.min.js"></script>
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
        <script src="{{asset('frontend')}}/assets/js/dashbord-mobile-menu.js"></script>
        <script src="{{asset('frontend')}}/assets/js/forms-2.js"></script>
        <script src="{{asset('frontend')}}/assets/js/color-switcher.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- MAIN JS -->
        <script src="{{asset('frontend')}}/assets/js/script.js"></script>

        <script>
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });

        </script>

        @if (session('update'))
            <script>
                Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{session('update')}}",
                showConfirmButton: false,
                timer: 1500
                });
            </script>
        @endif
    </div>
    <!-- Wrapper / End -->
</body>


</html>
