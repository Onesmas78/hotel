<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stanjo Karen Suites</title>

    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon" />

    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/revolution/css/layers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/revolution/css/settings.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/famfamfam-flags.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/front-styles.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">


    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/front-scripts.js') }}"></script> --}}

    <style>
        :root {
            --primary-color: {{ $frontThemeSettings->primary_color }};

            --dark-primary-color: {{ $frontThemeSettings->primary_color }};
        }

            {!! $frontThemeSettings->custom_css !!}

    </style>

</head>


<body>
    <!-- ========== PRELOADER ========== -->


    <div class="wrapper">

        <!-- ========== TOP MENU ========== -->
        <div class="top_menu">
            <div class="container">
                <div class="welcome_mssg hidden-xs">
                    Welcome to Stanjo Karen Suites
                </div>
                <ul class="top_menu_right">
                    <li><i class="fa fa-phone"></i><a href="tel:{{ $settings->company_phone }}">
                            {{ $settings->company_phone }} </a></li>
                    <li class="email hidden-xxs"><i class="fa fa-envelope-o "></i> <a
                            href="mailto:{{ $settings->company_email }}">{{ $settings->company_email }}</a></li>
                    <li>
                        @if ($user)
                            <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <div class="dropdown simple-menu">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">{{ $user->name }}<span class="fa fa-caret-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"> <a href="{{ route('admin.dashboard') }}">
                                                <i class="fa fa-user"></i> @lang('front.myAccount')</a></li>
                                        <li class="dropdown-item"> <a href="javascript:;"
                                                onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                                <i class="fa fa-sign-out mr-2"> </i>@lang('app.logout')</a></li>
                                    </ul>
                                </div>
                            </form>
                        @else
                            <a href="{{ route('login') }}">
                                <i class="fa fa-user mr-2"> </i>@lang('app.signIn')
                            </a>
                        @endif
                    </li>

                </ul>
            </div>
        </div>

        <!-- ========== HEADER ========== -->
        <header class="fixed">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse"
                        data-target=".mobile_menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="{{ $frontThemeSettings->logo_url }}" height="32" alt="Logo">
                    </a>
                </div>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display:none;">MENU</li>
                        <li class="dropdown simple_menu active">
                            <a href="/" class="menu_button" data-toggle="dropdown">HOME</a>
                             
                        </li>
                         <li class="dropdown simple_menu">
                            <a href="{{ route('front.rooms.index') }}" class="" data-toggle="">ROOMS <b class="caret"></b></a></li>
                            <!--
                            <ul class="dropdown-menu">
                                <li><a href="rooms-list.html">Rooms List View</a></li>
                                <li><a href="rooms-grid.html">Rooms Grid View</a></li>
                                <li><a href="rooms-block.html">Rooms Block View</a></li>
                                <li><a href="room.html">Room Details 1</a></li>
                                <li><a href="room2.html">Room Details 2</a></li>
                            </ul>
                        </li>
                        -->
                                           
                        <li><a href="{{ route('front.ourservices') }}">OUR SERVICES</a></li>
                        <li><a href="{{ route('front.aboutus') }}">ABOUT US</a></li>
                        <li><a href="{{ route('front.contactus') }}">CONTACT US</a></li>
                        
                        
                        <li class="menu_button">
                            <a href="{{ route('front.rooms.index') }}" class="button  btn_yellow"><i
                                    class="fa fa-calendar"></i>BOOK ONLINE</a>
                        </li>
                        
                        <li>
                            <a href="{{ route('front.cartPage') }}"><i
                                    class="fa fa-cart"></i>CART</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        @yield('content')

    <!-- ========== FOOTER ========== -->

        <footer class="dark">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 widget">
                            <div class="about">
                                <a href="index.html"><img class="logo" src="{{ $frontThemeSettings->logo_url }}"
                                        height="80" alt="Logo"></a>
                                <p>Over looking Ngong Hills and the leafy suburbs of Karen, Stanjo Karen Suites is a
                                    family-owned hotel facility situated in a serene environment.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>Useful Links</h5>
                            <ul class="useful_links">
                                <li><a href="{{ route('front.aboutus') }}">About us</a></li>
                                <li><a href="{{ route('front.contactus') }}">Contact us</a></li>
                                <li><a href="{{ route('front.ourservices') }}">Our Services</a></li>
                                <li><a href="{{ route('front.cart') }}">Cart</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>Useful Links</h5>
                            <ul class="useful_links">
                                <li><a href="{{ route('front.aboutus') }}">About us</a></li>
                                <li><a href="{{ route('front.contactus') }}">Contact us</a></li>
                                <li><a href="{{ route('front.ourservices') }}">Our Services</a></li>
                                <li><a href="{{ route('front.cart') }}">Cart</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5>Contact Us</h5>
                            <address>
                                <ul class="address_details">
                                    <li><i class="glyphicon glyphicon-map-marker"></i> {!! $settings->formatted_address
                                        !!}</li>
                                    <li><i class="glyphicon glyphicon-phone-alt"></i> Phone:
                                        {{ $settings->company_phone }}
                                    </li>
                                    <li><i class="fa fa-envelope"></i> Email: <a
                                            href="mailto:{{ $settings->company_email }}">{{ $settings->company_email }}</a>
                                    </li>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="copyrights">
                                {{ \Carbon\Carbon::now()->year }} <a href="/">{{ ucfirst($settings->company_name) }}</a>
                                All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="social_media">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#"><i
                                        class="fa fa-facebook"></i></a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#"><i
                                        class="fa fa-twitter"></i></a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip"
                                    href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#"><i
                                        class="fa fa-pinterest"></i></a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#"><i
                                        class="fa fa-linkedin"></i></a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#"><i
                                        class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>



    <!-- ========== BACK TO TOP ========== -->
    <div id="back_to_top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- ========== NOTIFICATION ========== -->
    <div id="notification"></div>

    <!-- ========== JAVASCRIPT ========== -->
    @stack('footer-script')
    <script type="text/javascript" src="{{ asset('assets/stanjo/jquery.min.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWEnbyzmLtVvA5Yk5vyN4DXS24AYZJDRM"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/jquery.smoothState.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/morphext.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/owl.carousel.thumbs.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/jPushMenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/imagesloaded.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/countUp.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/stanjo/main.js') }}"></script>

    <!-- ========== REVOLUTION SLIDER ========== -->
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    @push('footer-script')
        <script>
            (function($) {
                function logoutUser(e) {
                    e.preventDefault();
                    $('#logoutForm').submit();
                }

            })(jQuery);

        </script>
        <script>
            $(function() {
                toastr.options = {
                    "progressBar": true,
                    "positionClass": "toast-bottom-right",
                    "preventDuplicates": true
                };
            });

            function goToPage(method, pageUrl, data = null) {
                var options = {
                    url: pageUrl,
                    type: method,
                    // container: 'section.section'
                    success: function(response) {
                        if (response.status !== 'fail') {
                            window.location.href = pageUrl
                        }
                    }
                };

                if (data) {
                    options.data = data
                }

                $.easyAjax(options)
            }

            var LightenColor = function(color, percent) {
                var num = parseInt(color.replace('#', ''), 16),
                    amt = Math.round(2.55 * percent),
                    R = (num >> 16) + amt,
                    B = (num >> 8 & 0x00FF) + amt,
                    G = (num & 0x0000FF) + amt;

                return (0x1000000 + (R < 255 ? R < 1 ? 0 : R : 255) * 0x10000 + (B < 255 ? B < 1 ? 0 : B : 255) *
                    0x100 + (G < 255 ? G < 1 ? 0 : G : 255)).toString(16).slice(1);
            };

            var DarkenColor = function(color, percent) {
                var num = parseInt(color.replace('#', ''), 16),
                    amt = Math.round(2.55 * percent),
                    R = (num >> 16) - amt,
                    B = (num >> 8 & 0x00FF) - amt,
                    G = (num & 0x0000FF) - amt;

                return (0x1000000 + (R < 255 ? R < 1 ? 0 : R : 255) * 0x10000 + (B < 255 ? B < 1 ? 0 : B : 255) *
                    0x100 + (G < 255 ? G < 1 ? 0 : G : 255)).toString(16).slice(1);
            };

            var primaryColor = getComputedStyle(document.documentElement)
                .getPropertyValue('--primary-color');

            document.documentElement.style.setProperty('--dark-primary-color', '#' + DarkenColor(primaryColor, 15));

        </script>
    @endpush


</body>

</html>
