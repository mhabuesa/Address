
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:12:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Login | BD ADDRESS</title>
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

        <!-- START SECTION LOGIN -->
        <div id="login">
            <div class="login">
                <form action="{{route('client.login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                        <i class="icon_mail_alt"></i>
                        @if (session('exists'))
                            <strong class="text-danger"> {{session('exists')}}</strong>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" >
                        <i class="icon_lock_alt"></i>
                        @if (session('wrong'))
                            <strong class="text-danger"> {{session('wrong')}}</strong>
                        @endif
                    </div>
                    <div class="fl-wrap filter-tags clearfix add_bottom_30">

                        <div class="float-right mt-1"><a id="forgot" href="{{route('forget')}}">Forgot Password?</a></div>
                    </div>
                    <button type="submit" href="#0" class="btn_1 rounded full-width">Login to BD Address</button>
                    <div class="text-center add_top_10">Don't Have an Account? <strong><a href="{{route('client.register')}}">Sign up!</a></strong></div>
                </form>
            </div>
        </div>
        <!-- END SECTION LOGIN -->

        <!-- Footer Start -->
        @include('frontend.footer')
        <!-- Footer End -->



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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </div>
    <!-- Wrapper / End -->

    @if (session('verified'))
        <script>
            Swal.fire({
            position: "center",
            icon: "success",
            title: "{{session('verified')}}",
            showConfirmButton: false,
            timer: 1500
            });
        </script>
    @endif
</body>



</html>
