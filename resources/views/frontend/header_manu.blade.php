

{{-- <div style="position:fixed; bottom:20px; left:20px;">
    <a target="_blank" href="https://wa.me/8801706944396?text=Assalamu Alaikum">
        <img width="60" src="{{asset('frontend')}}/assets/images/whatsapp.png" alt="">
    </a>
</div> --}}

<!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo" class="text-center">
                            <a class="text-decoration-none a-text" href="{{route('index')}}"><img src="{{asset('frontend/assets')}}/images/logo.png" data-sticky-logo="{{asset('frontend/assets')}}/images/logo.png" alt=""><span class="text-white">BD Address</span></a>

                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 head-tr">
                            <ul id="responsive">


                                <li><a href="{{route('organizer')}}">Organizer</a></li>
                                <li><a href="{{route('neighbor')}}">Know Your Neigobour</a></li>
                                <li><a href="{{route('partners')}}">Happy Partners</a></li>
                                <li><a href="{{route('service')}}">Services</a></li>
                                <li><a href="{{route('about.us')}}">About Us</a></li>

                                @auth('client')

                                @else
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="{{route('client.login.page')}}">Login / Register</a></li>
                                @endauth



                                    {{-- <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0">
                                        <a href="add-property.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                                    </li> --}}






                                   </ul>
                        </nav>
                        <!-- Main Navigation / End -->

                    </div>
                    <!-- Left Side Content / End -->


                    <!-- Right Side Content Start -->






                    <!-- Right Side Content / End -->

                    @auth('client')

                    <div class="header-user-menu user-menu add">
                        <div class="header-user-name">
                             {{Auth::guard('client')->user()->name}}
                        </div>
                        <ul>
                            <li><a href="{{route('client.profile')}}">profile</a></li>
                            <li><a href="{{route('client.logout')}}">Log Out</a></li>
                        </ul>
                    </div>



                        @else


                        <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                            <!-- Header Widget -->
                            <div class="header-widget sign-in">
                                <div class=""><a href="{{route('client.login.page')}}">Sign In</a></div>
                            </div>
                            <!-- Header Widget / End -->
                        </div>

                    @endauth
