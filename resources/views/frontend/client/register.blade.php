
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:12:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Sign Up | BD ADDRESS</title>
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
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/menu.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/styles.css">
    <link rel="stylesheet" id="color" href="{{asset('frontend')}}/assets/css/default.css">

    @include('frontend.nav_css')

</head>

<body class="inner-pages hd-white">
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

        <!-- START SECTION 404 -->
        <div id="login">
            <div class="login">
                <form autocomplete="off" action="{{route('client.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Your Name</label>
                        <input name="name" class="form-control" type="text" value="{{old('name')}}">
                        <i class="ti-user"></i>
                        @error('name')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input name="phone" class="form-control" type="text" value="{{old('phone')}}">
                        <i class="icon_mail_alt"></i>
                        @error('phone')
                        <strong class="text-danger">The phone has already been registered.</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Your Email</label>
                        <input name="email" class="form-control" type="email" value="{{old('email')}}">
                        <i class="icon_mail_alt"></i>
                        @error('email')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Your password</label>
                        <input name="password" class="form-control" type="password" id="password1">
                        <i class="icon_lock_alt"></i>
                        @error('password')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>

                    <div id="pass-info" class="clearfix"></div>
                    <button type="submit" class="btn_1 rounded full-width add_top_30">Register Now!</button>
                    <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{route('client.login.page')}}">Sign In</a></strong></div>
                </form>
            </div>
        </div>
        <!-- END SECTION 404 -->

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
        <script src="{{asset('frontend')}}/assets/js/tether.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/mmenu.js"></script>
        <script src="{{asset('frontend')}}/assets/js/smooth-scroll.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/ajaxchimp.min.js"></script>
        <script src="{{asset('frontend')}}/assets/js/newsletter.js"></script>
        <script src="{{asset('frontend')}}/assets/js/color-switcher.js"></script>
        <script src="{{asset('frontend')}}/assets/js/inner.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>



</html>
