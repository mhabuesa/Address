
<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->

  <head>
    <title>Home | Able Pro Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded">

    <!-- [Favicon] icon -->
    <link rel="icon" href="https://ableproadmin.com/assets/images/favicon.svg" type="image/x-icon">
 <!-- [Font] Family -->
<link rel="stylesheet" href="{{asset('backend')}}/assets/fonts/inter/inter.css" id="main-font-link" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="{{asset('backend')}}/assets/fonts/tabler-icons.min.css" />
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="{{asset('backend')}}/assets/fonts/feather.css" />
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="{{asset('backend')}}/assets/fonts/fontawesome.css" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="{{asset('backend')}}/assets/fonts/material.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{asset('backend')}}/assets/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="{{asset('backend')}}/assets/css/style-preset.css" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-14K1GBX9FG');
</script>
<!-- WiserNotify -->
<script>
  !(function () {
    if (window.t4hto4) console.log('WiserNotify pixel installed multiple time in this page');
    else {
      window.t4hto4 = !0;
      var t = document,
        e = window,
        n = function () {
          var e = t.createElement('script');
          (e.type = 'text/javascript'),
            (e.async = !0),
            (e.src = '../../pt.wisernotify.com/pixel6d4c.js?ti=1jclj6jkfc4hhry'),
            document.body.appendChild(e);
        };
      'complete' === t.readyState ? n() : window.attachEvent ? e.attachEvent('onload', n) : e.addEventListener('load', n, !1);
    }
  })();
</script>
<!-- Microsoft clarity -->
<script type="text/javascript">
  (function (c, l, a, r, i, t, y) {
    c[a] =
      c[a] ||
      function () {
        (c[a].q = c[a].q || []).push(arguments);
      };
    t = l.createElement(r);
    t.async = 1;
    t.src = 'https://www.clarity.ms/tag/' + i;
    y = l.getElementsByTagName(r)[0];
    y.parentNode.insertBefore(t, y);
  })(window, document, 'clarity', 'script', 'gkn6wuhrtb');
</script>
<style>
    p {
      margin: 0;
    }


    .upload__inputfile {
      width: 0.1px;
      height: 0.1px;
      opacity: 0;
      overflow: hidden;
      position: absolute;
      z-index: -1;
    }
    .upload__btn {
      display: inline-block;
      font-weight: 600;
      color: #fff;
      text-align: center;
      min-width: 316px;
      padding: 5px;
      transition: all 0.3s ease;
      cursor: pointer;
      border: 2px solid;
      background-color: #4045ba;
      border-color: #4045ba;
      border-radius: 10px;
      line-height: 26px;
      font-size: 14px;
    }
    .upload__btn:hover {
      background-color: unset;
      color: #4045ba;
      transition: all 0.3s ease;
    }

    .upload__img-wrap {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -10px;
    }
    .upload__img-box {
      width: 200px;
      padding: 0 10px;
      margin-bottom: 12px;
    }
    .upload__img-close {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background-color: rgba(0, 0, 0, 0.5);
      position: absolute;
      top: 10px;
      right: 10px;
      text-align: center;
      line-height: 24px;
      z-index: 1;
      cursor: pointer;
    }
    .upload__img-close:after {
      content: "✖";
      font-size: 14px;
      color: white;
    }

    .img-bg {
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      position: relative;
      padding-bottom: 100%;
    }
    .upload__box{
        padding: 10px;
    }


    .pc-sidebar .card.pc-user-card .card-body {
        padding: 20px;
        background-color: black;
        color: white;
        text-decoration: none;
        border-radius: 12px;
    }

    .a-text{
        color: white
    }

    </style>

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">

    <div class="navbar-content">
      <div class="card pc-user-card">

        <div class="card-body">
            <a class="text-decoration-none a-text link-light" href="{{route('dashboard')}}">
              <div class=" d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="{{asset('backend')}}/assets/images/logo.png" alt="user-image" class="user-avtar wid-45 rounded-circle" />
                  </div>
                  <div class="flex-grow-1 ms-3 me-2">
                    <h4 class="mb-0 text-light">{{Auth::user()->name}}</h4>
                    <small>Administrator</small>
                  </div>

                </div>
            </a>

          </div>

      </div>

      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Navigation</label>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="{{route('dashboard')}}" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-status-up"></use>
              </svg>
            </span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>

        <li class="pc-item">
            <a href="{{route('working.partner')}}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-story"></use>
                </svg>
              </span>
              <span class="pc-mtext">Working Partner</span>
            </a>
          </li>
        <li class="pc-item">
            <a href="{{route('place')}}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-story"></use>
                </svg>
              </span>
              <span class="pc-mtext">Places</span>
            </a>
          </li>


        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-document"></use>
              </svg>
            </span>
            <span class="pc-mtext">Properties</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{route('properties.list')}}">Properties List</a></li>
            <li class="pc-item"><a class="pc-link" href="{{route('add.properties')}}">Add Properties</a></li>

          </ul>
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-document"></use>
              </svg>
            </span>
            <span class="pc-mtext">Upcoming Project</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{route('properties.list')}}">Project List</a></li>
            <li class="pc-item"><a class="pc-link" href="{{route('add.upcoming')}}">Add Project</a></li>

          </ul>
        </li>

        <li class="pc-item">
            <a href="{{route('agent')}}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-story"></use>
                </svg>
              </span>
              <span class="pc-mtext">Agents</span>
            </a>
          </li>

        <li class="pc-item">
            <a href="{{route('testimonial')}}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-story"></use>
                </svg>
              </span>
              <span class="pc-mtext">Testimonial</span>
            </a>
          </li>







        <li class="pc-item pc-caption">
          <label>Menu Bar</label>
          <svg class="pc-icon">
            <use xlink:href="#custom-presentation-chart"></use>
          </svg>
        </li>

        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-document"></use>
                </svg>
              </span>
              <span class="pc-mtext">About Us</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="{{route('about.banner')}}">Banner Image</a></li>
              <li class="pc-item"><a class="pc-link" href="{{route('about.section')}}">About Section</a></li>
              <li class="pc-item"><a class="pc-link" href="{{route('why.choose')}}">Why Choose Us</a></li>
            </ul>
          </li>

        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-document"></use>
                </svg>
              </span>
              <span class="pc-mtext">Blogs</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="{{route('blog.list')}}">BLog List</a></li>
              <li class="pc-item"><a class="pc-link" href="{{route('add.blog')}}"> Add BLog </a></li>
            </ul>
          </li>

        <li class="pc-item">
          <a href="{{route('contact.info')}}" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-story"></use>
              </svg>
            </span>
            <span class="pc-mtext">Contact Info</span>
          </a>
        </li>


        <li class="pc-item">
          <a href="{{route('organizer.dash')}}" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-story"></use>
              </svg>
            </span>
            <span class="pc-mtext">Organizers</span>
          </a>
        </li>



        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-document"></use>
                </svg>
              </span>
              <span class="pc-mtext">Neighbor</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="{{route('neighbor.apartment')}}">Neighbor Apartment </a></li>
                <li class="pc-item"><a class="pc-link" href="{{route('neighbor.person')}}">Neighbor Person </a></li>
            </ul>
          </li>

        <li class="pc-item">
          <a href="{{route('partner.list')}}" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-story"></use>
              </svg>
            </span>
            <span class="pc-mtext">Partner</span>
          </a>
        </li>









        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-document"></use>
                </svg>
              </span>
              <span class="pc-mtext">Message</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            </a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="{{route('message')}}">Property Message</a></li>
              <li class="pc-item"><a class="pc-link" href="{{route('service.message')}}">Service Message </a></li>
            </ul>
          </li>

        <li class="pc-item">
          <a href="{{route('users')}}" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-fatrows"></use>
              </svg>
            </span>
            <span class="pc-mtext">Users</span>
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
 <header class="pc-header">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
  <div class="me-auto pc-mob-drp">
    <ul class="list-unstyled">
      <!-- ======= Menu collapse Icon ===== -->
      <li class="pc-h-item pc-sidebar-collapse">
        <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
      <li class="pc-h-item pc-sidebar-popup">
        <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>

    </ul>
  </div>
  <!-- [Mobile Media Block end] -->
  <div class="ms-auto">
    <ul class="list-unstyled">

      <li class="dropdown pc-h-item">
        <a
          class="pc-head-link dropdown-toggle arrow-none me-0"
          data-bs-toggle="dropdown"
          href="#"
          role="button"
          aria-haspopup="false"
          aria-expanded="false"
        >
          <svg class="pc-icon">
            <use xlink:href="#custom-notification"></use>
          </svg>
          <span class="badge bg-success pc-h-badge">
              {{App\Models\Message::where('status', 0)->count()+App\Models\ServiceMessage::where('status', 0)->count()}}
          </span>
        </a>

        <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">


          @if (App\Models\Message::where('status', 0)->count() != 0)
          <div class="dropdown-header d-flex align-items-center justify-content-between">
            <h5 class="m-0">Messages</h5>
          </div>
          @endif

          <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">


              @foreach (App\Models\Message::where('status','0')->get() as $message )

              <div class="card mb-2">
                  <div class="card-body">
                      <div class="d-flex">
                          <div class="flex-shrink-0">
                              <svg class="pc-icon text-primary">
                                  <use xlink:href="#custom-sms"></use>
                              </svg>
                          </div>
                          <div class="flex-grow-1 ms-3">
                              <a class="text-decoration-none" href="{{route('message.read',$message->id)}}">
                                  <span class="float-end text-m text-muted">{{$message->created_at->diffForHumans()}}</span>
                                  <h5 class="text-body mb-2">{{$message->name}}</h5>
                                  <p class="mb-0">{{$message->email}}</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              @endforeach


              @if (App\Models\Message::where('status', 0)->count() == 0)
                  @if (App\Models\ServiceMessage::where('status', 0)->count() == 0)
                  <div class="card mb-2">
                      <div class="card-body">
                          <div class="d-flex">
                              <div class="flex-grow-1 ms-3 text-center">
                                      <span class="text-center">No Unread Message Found</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endif
              @endif
          </div>




          @if (App\Models\ServiceMessage::where('status', 0)->count() != 0)
              <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <h5 class="m-0">Service Messages</h5>
                </div>


          @endif

          <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">


               @foreach (App\Models\ServiceMessage::where('status','0')->get() as $message )

              <div class="card mb-2">
                  <div class="card-body">
                      <div class="d-flex">
                          <div class="flex-shrink-0">
                              <svg class="pc-icon text-primary">
                                  <use xlink:href="#custom-sms"></use>
                              </svg>
                          </div>
                          <div class="flex-grow-1 ms-3">
                              <a class="text-decoration-none" href="{{route('service.message.read',$message->id)}}">
                                  <span class="float-end text-m text-muted">{{$message->created_at->diffForHumans()}}</span>
                                  <h5 class="text-body mb-2">{{$message->name}}</h5>
                                  <p class="mb-0">{{$message->email}}</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              @endforeach



          </div>







      </div>





      </li>
      <li class="dropdown pc-h-item header-user-profile">
        <a
          class="pc-head-link dropdown-toggle arrow-none me-0"
          data-bs-toggle="dropdown"
          href="#"
          role="button"
          aria-haspopup="false"
          data-bs-auto-close="outside"
          aria-expanded="false"
        >
          <img src="{{asset('backend')}}/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
        </a>
        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
          <div class="dropdown-header d-flex align-items-center justify-content-between">
            <h5 class="m-0">Profile</h5>
          </div>
          <div class="dropdown-body">
            <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
              <div class="d-flex mb-1">
                <div class="flex-shrink-0">
                  <img src="{{asset('backend')}}/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-1">{{Auth::user()->name}}</h6>
                  <span>{{Auth::user()->email}}</span>
                </div>
              </div>
              <hr class="border-secondary border-opacity-50" />

              <a href="{{route('user.edit',Auth::user()->id)}}" class="dropdown-item">
                <span>
                  <svg class="pc-icon text-muted me-2">
                    <use xlink:href="#custom-setting-outline"></use>
                  </svg>
                  <span>Propile</span>
                </span>
              </a>

              <a href="#" class="dropdown-item">
                <span>
                  <svg class="pc-icon text-muted me-2">
                    <use xlink:href="#custom-setting-outline"></use>
                  </svg>
                  <span>Settings</span>
                </span>
              </a>






              <hr class="border-secondary border-opacity-50" />


              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <div class="d-grid mb-3">
                  <a href="{{route('logout')}}" class="btn btn-primary" onclick="event.preventDefault();
                  this.closest('form').submit();">
                      <svg class="pc-icon me-2">
                      <use xlink:href="#custom-logout-1-outline"></use></svg
                      >Logout
                  </a>
              </div>
          </form>










            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
   </div>
  </header>

<!-- [ Header ] end -->






    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">





        @yield('content')




      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col my-1">
            <p class="m-0"
              >Able Pro &#9829; crafted by Team <a href="https://themeforest.net/user/phoenixcoded" target="_blank">Phoenixcoded</a></p
            >
          </div>

        </div>
      </div>
    </footer>



    <!-- [Page Specific JS] start -->
    <script src="{{asset('backend')}}/assets/js/plugins/apexcharts.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/pages/dashboard-default.js"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{asset('backend')}}/assets/js/plugins/popper.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/plugins/simplebar.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/fonts/custom-font.js"></script>
    <script src="{{asset('backend')}}/assets/js/pcoded.js"></script>
    <script src="{{asset('backend')}}/assets/js/plugins/feather.min.js"></script>





    <script>layout_change('light');</script>




    <script>layout_sidebar_change('false');</script>



    <script>change_box_container('false');</script>


    <script>layout_caption_change('true');</script>




    <script>layout_rtl_change('false');</script>


    <script>preset_change("preset-1");</script>

  </body>
  <!-- [Body] end -->
</html>
