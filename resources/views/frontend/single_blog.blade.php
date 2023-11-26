
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:12:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Blog Details | Address</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images/logo_fab.png">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/lightcase.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/menu.css">
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/styles.css">
    <link rel="stylesheet" id="color" href="{{asset('frontend/assets')}}/css/default.css">


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


            .inner-pages .headings {
                background: -webkit-gradient(linear, left top, left bottom, from(rgba(18, 27, 34, 0.6)), to(rgba(18, 27, 34, 0.6))), url({{asset('frontend')}}/assets/images/bg/bg-details.jpg) no-repeat center center;
          background: linear-gradient(rgba(18, 27, 34, 0.6), rgba(18, 27, 34, 0.6)), url({{asset('frontend')}}/assets/images/bg/bg-details.jpg) no-repeat center center;
            }
                    </style>

</head>

<body class="inner-pages hd-white">
    <!-- START SECTION HEADINGS -->
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

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Blog Details</h1>
                    <h2><a href="{{route('index')}}">Home </a> &nbsp;/&nbsp; Blog Details</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION BLOG -->
        <section class="blog blog-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="news-item details no-mb2">

                                        <div class="news-item-img">
                                            <img class="img-responsive" src="{{asset('uploads')}}/blog/{{$blog->image}}" alt="blog image">
                                        </div>

                                    <div class="news-item-text details pb-0">
                                        <a href="blog-details.html"><h3>{{$blog->title}}</h3></a>
                                        <div class="dates">
                                            <span class="date">{{$blog->created_at->format('d-M-Y')}}</span>

                                        </div>
                                        <div class="news-item-descr big-news details visib mb-0">
                                            <p class="mb-3">{!! $blog->desp!!}</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <aside class="col-lg-3 col-md-12">
                        <div class="widget">




                            <div class="recent-post pt-5">
                                <h5 class="font-weight-bold mb-4">Recent Posts</h5>

                                @foreach ($blogs as  $blog )

                                <div class="recent-main my-4">
                                    <div class="recent-img">
                                        <a href="{{route('single.blog', $blog->id)}}"><img src="{{asset('uploads')}}/blog/{{$blog->image}}" alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="{{route('single.blog', $blog->id)}}"><h6>{{substr($blog->title, 0, 15).'...'}}</h6></a>
                                        <p>{{$blog->created_at->format('d-M-Y')}}</p>
                                    </div>
                                </div>
                                @endforeach



                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

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
        <script src="{{asset('frontend/assets')}}/js/jquery-3.5.1.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/tether.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/popper.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/mmenu.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/mmenu.js"></script>
        <script src="{{asset('frontend/assets')}}/js/smooth-scroll.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/ajaxchimp.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/newsletter.js"></script>
        <script src="{{asset('frontend/assets')}}/js/color-switcher.js"></script>
        <script src="{{asset('frontend/assets')}}/js/inner.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:12:32 GMT -->
</html>
