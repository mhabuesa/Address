






<!-- START FOOTER -->
<footer class="first-footer ">
    <div class="top-footer">
        <div class="container ">


            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="netabout">
                        <a href="{{route('index')}}" class="logo">
                            <img src="{{asset('frontend/assets')}}/images/logo.png" alt="netcom">
                        </a>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6">

                    <div class="contactus">
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
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Navigation</h3>
                        <div class="nav-footer">
                            <ul>
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('organizer')}}">Organizer</a></li>
                                <li><a href="{{route('neighbor')}}">Know Your Neighbor</a></li>

                            </ul>
                            <ul class="nav-right">

                                <li><a href="{{route('partners')}}">Happy Partners</a></li>
                                <li class="no-mgb"><a href="{{route('service')}}">Services</a></li>
                                <li><a href="{{route('about.us')}}">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p>2023 © Copyright - All Rights Reserved.</p>
            <ul class="netsocials">
                @if ($contact->facebook != '')
                <li><a target="_blank" href="{{$contact->facebook}}" title="Facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                @endif

                @if ($contact->twitter != '')
                <li><a target="_blank" href="{{$contact->twitter}}" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>

                @endif

                @if ($contact->youtube != '')
                <li><a target="_blank" href="{{$contact->youtube}}" title="Youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>

                @endif

            </ul>
        </div>
    </div>

{{-- Whats App Plugin Start --}}
<div class="commonninja_component pid-acdb31c0-eeaa-4610-b002-bceb2541a3cd"></div>
{{-- Whats App Plugin End --}}

</footer>

<a data-scroll="" href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<!-- END FOOTER -->







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
                            <form method="post" name="registerform" action="{{route('client.login')}}">
                                @csrf
                                <label>Email Address * </label>
                                <input name="email" type="text" onClick="this.select()"  required>
                                    @error('email')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror

                                    @if (session('exists'))
                                        <strong class="text-danger">{{session('exists')}}</strong>
                                    @endif
                                <label>Password * </label>
                                <input name="password" type="password" onClick="this.select()" required>
                                @error('password')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror

                                @if (session('wrong'))
                                <strong class="text-danger">{{session('wrong')}}</strong>
                                @endif

                                <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                <div class="clearfix"></div>

                            </form>

                        </div>
                    </div>
                    <div class="tab">
                        <div id="tab-2" class="tab-contents">
                            <div class="custom-form">
                                <form method="post" action="{{route('client.store')}}" class="main-register-form" id="main-register-form2">
                                    @csrf
                                    <label> Name * </label>
                                    <input name="name" type="text" onClick="this.select()"  required>
                                    @error('name')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror

                                    <label>Phone Number *</label>
                                    <input name="phone" type="text" onClick="this.select()" required>
                                    @error('phone')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror

                                    <label>Email Address *</label>
                                    <input name="email" type="text" onClick="this.select()" required>
                                    @error('email')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror

                                    <label>Password *</label>
                                    <input name="password" type="password" onClick="this.select()" required>
                                    @error('password')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror


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





{{-- Whats App Start --}}

{{-- <div class="center">
    <img  width="63" id="show-login" src="{{asset('frontend')}}/assets/images/whatsapp.png" alt="">
</div>
<div class="popup ">
    <div class="close-btn"><i class="fa-solid fa-x"></i></div>
    <div class="form">
        <div class="card">
            <div class="card-header ">
                <div class="chat-avatar" title="Help" ><img width="50" src="{{asset('frontend')}}/assets/images/logo_black.jpg" alt="Help"></div>

                <div class="header-text">
                    <div class="title">
                        <strong>BD ADDRESS</strong>
                    </div>
                    <div class="subtitle">
                        <span>Typically replies instantly</span>
                    </div>
                </div>

            </div>
            <div class="text-Content" style="background: url({{asset('frontend')}}/assets/images/wa_bg.png)" >
                    <div class="text">
                        <div style="color: gray; font-size: 14px; font-weight: bold;">BD ADDRESS</div>
                    <div style="color: gray; font-size: 14px;">Hey there! 😀 How can I help you?</div>
                    <div class="time text-right" style="font-size: 12px;"> <strong>{{ now('Asia/dhaka')->format('g:i a')}}</strong></div>
                    </div>
            </div>

            <div class="card-footer">
            <a href="https://wa.me/8801706944396?text=Assalamu Alaikum" target="_blank" title="Send Message">

                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" style="color: white; margin-right: 8px;"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>

                Click to Start Chat
            </a>
            </div>
        </div>
    </div>
</div>


<script>
    var wIcon =  document.querySelector("#show-login") ;
    var dIcon =  document.querySelector(".close-btn");
    var popup =  document.querySelector(".popup");


    popup.style.display = 'none';

    wIcon.addEventListener('click', function() {
        if( popup.style.display == 'none'){


            popup.style.display = 'block';
        }

        else{

            popup.style.display = 'none';
        }
    })


    dIcon.addEventListener('click', function() {

            popup.style.display = 'none';

    })


</script> --}}




{{-- Whats App End --}}


