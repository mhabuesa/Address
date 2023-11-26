
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 10:12:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Verification | BD ADDRESS</title>
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

    <style>
        .form-group a{
            display: none;
        }

        #countdown {
            display: none;
            font-size: 18px;
        }

        .message{
            font-size: 12px;
        }


    </style>


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
                <form action="{{route('verification',$user_id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Enter Your Verification Code</label>


                        <label class="message">Verification Code Sent to <strong>{{App\Models\TempUser::where('id',$user_id)->get()->first()->phone}}</strong> </label>

                        <input type="text" class="form-control" name="code" >
                        @if (session('invalid'))
                            <strong class="text-danger"> {{session('invalid')}}</strong>
                        @endif
                    </div>
                    <div class="form-group text-center">
                        <label>Did you not Get the Verification Code?</label>
                        <div class="text-center">
                            <div id="countdown">30</div>
                            <a id="myLink" class="text-decoration-none resend" href="{{route('resend',$user_id)}}">Resend Code</a>
                        </div>

                    </div>


                    <button type="submit" class="btn_1 rounded full-width">Verify</button>

                </form>
            </div>
        </div>
        <!-- END SECTION LOGIN -->

        <!-- Footer Start -->
        @include('frontend.footer')
        <!-- Footer End -->





        <script>
           // Get the link element by its ID
            var link = document.getElementById("myLink");

            // After 5 seconds, make the link visible
            setTimeout(function() {
                link.style.display = "inline"; // or use "block" depending on your styling needs
            }, 62150);
        </script>

        <script>
            // Get the countdown element by its ID
            var countdown = document.getElementById("countdown");

            // Update the countdown every second
            var seconds = 61;
            var countdownInterval = setInterval(function() {
                seconds--;
                countdown.textContent = seconds;

                // Show the countdown after 1 second
                countdown.style.display = "inline";

                // Stop the countdown and hide it when it reaches 0
                if (seconds === 0) {
                    clearInterval(countdownInterval);
                    setTimeout(function() {
                        countdown.style.display = "none";
                    }, 1000);
                }
            }, 1000);
        </script>




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


        @if (session('SendCode'))
        <script>
            Swal.fire({
            position: "center",
            icon: "success",
            title: "{{session('SendCode')}}",
            showConfirmButton: false,
            timer: 5500
            });
        </script>
        @endif

    </div>
    <!-- Wrapper / End -->




</body>



</html>
