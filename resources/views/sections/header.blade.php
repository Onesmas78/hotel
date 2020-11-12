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
                        <img src="{{ $frontThemeSettings->logo_url }}" height="32" alt="Logo"
                            style="height: 32px !important">
                    </a>
                </div>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display:none;">MENU</li>
                        <li class="dropdown simple_menu active">
                            <a href="/" class="menu_button" data-toggle="dropdown">HOME</a>
                            {{-- <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version 1</a></li>
                                <li><a href="index2.html">Home Version 2</a></li>
                                <li><a href="index3.html">Home Version 3</a></li>
                                <li><a href="index4.html">Home Version 4</a></li>
                                <li><a href="boxed.html">Boxed Layout</a></li>
                            </ul> --}}
                        </li>
                        <li class="dropdown simple_menu">
                            <a href="{{ route('front.rooms.index') }}" class="" data-toggle="">ROOMS <b class="caret"></b></a></li>
                        {{-- <li class="dropdown simple_menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ROOMS <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="rooms-list.html">Rooms List View</a></li>
                                <li><a href="rooms-grid.html">Rooms Grid View</a></li>
                                <li><a href="rooms-block.html">Rooms Block View</a></li>
                                <li><a href="room.html">Room Details 1</a></li>
                                <li><a href="room2.html">Room Details 2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown mega_menu mega_menu_fullwidth"><a href="#" data-toggle="dropdown"
                                class="dropdown-toggle" aria-expanded="true">PAGES <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega_menu_inner">
                                        <div class="row">
                                            <ul class="col-md-3">
                                                <li class="list_title">PAGES</li>
                                                <li><a href="gallery.html">Gallery 4 Columns</a></li>
                                                <li><a href="gallery-3columns.html">Gallery 3 Columns</a></li>
                                                <li><a href="gallery-2columns.html">Gallery 2 Columns</a></li>
                                                <li><a href="gallery-withoutdetails.html">Gallery Without Details</a>
                                                </li>
                                                <li><a href="gallery-withoutfilters.html">Gallery Without Filters</a>
                                                </li>
                                                <li><a href="gallery-slider.html">Gallery Slider</a></li>
                                                <li><a href="gallery2.html">Gallery Version 2</a></li>
                                            </ul>
                                            <ul class="col-md-3">
                                                <li class="list_title">PAGES</li>
                                                <li><a href="contact2.html">Contact Us Version 2</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="404.html">404 Page Version 1</a></li>
                                                <li><a href="404-v2.html">404 Page Version 2</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="location.html">Our Location</a></li>
                                                <li><a href="restaurant.html">Our Restaurant</a></li>
                                            </ul>
                                            <ul class="col-md-3">
                                                <li class="list_title">PAGES</li>
                                                <li><a href="blog-post.html">Blog Details 1</a></li>
                                                <li><a href="blog-post2.html">Blog Details 2</a></li>
                                                <li><a href="places.html">Places</a></li>
                                                <li><a href="place-details.html">Place Details</a></li>
                                                <li><a href="events.html">Events</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="spa.html">Our Spa</a></li>
                                            </ul>
                                            <ul class="col-md-3">
                                                <li class="list_title">MORE PAGES</li>
                                                <li><a href="loading.html">Loading Page </a></li>
                                                <li><a href="loading2.html">Loading Page 2</a></li>
                                                <li><a href="loading3.html">Loading Page 3</a></li>
                                                <li><a href="full-width.html">Full Width Page</a></li>
                                                <li><a href="right-sidebar.html">Right Sidebar Page</a></li>
                                                <li><a href="left-sidebar.html">Left Sidebar Page</a></li>
                                                <li><a href="our-staff.html">Our Staff</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown simple_menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle"
                                aria-expanded="true">ELEMENTS <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="icons.html">Icons</a></li>
                            </ul>
                        </li> --}}
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

        @push('footer-script')
            <script>
                var substringMatcher = function(strs) {
                    return function findMatches(q, cb) {
                        var matches, substringRegex;

                        // an array that will be populated with substring matches
                        matches = [];

                        // regex used to determine if a string contains the substring `q`
                        substrRegex = new RegExp(q, 'i');

                        // iterate through the pool of strings and for any string that
                        // contains the substring `q`, add it to the `matches` array
                        $.each(strs, function(i, str) {
                            if (substrRegex.test(str)) {
                                matches.push(str);
                            }
                        });

                        cb(matches);
                    };
                };

                $(function() {

                    // var countries = {!!  $locations !!}.map(location => location.name);
                    // countries.unshift('@lang('front.allLocations')');

                    $('.select2').select2();

                    if (localStorage.getItem('location')) {
                        $('#location.select2').val(localStorage.getItem('location')).trigger('change');
                    }
                    // else {
                    //     $('#location.select2').val(0);
                    //     localStorage.setItem('location', 0);
                    // }



                    let searchParams = new URLSearchParams(window.location.search);
                    if (searchParams.has('search_term')) {
                        $('#search_term').val(searchParams.get('search_term'));
                    }

                    setActiveClassToLanguage();
                });

                function logoutUser(e) {
                    e.preventDefault();
                    $('#logoutForm').submit();
                }

                function setActiveClassToLanguage() {
                    // language switcher
                    if ('{{ \Cookie::has('
                        appointo_language_code ') }}') {
                        $('.language-drop .dropdown-item').filter(function() {
                            return $(this).data('lang-code') === '{{ \Cookie::get('
                            appointo_language_code ') }}'
                        }).addClass('active');
                    } else {
                        $('.language-drop .dropdown-item').filter(function() {
                            return $(this).data('lang-code') === '{{ $settings->locale }}'
                        }).addClass('active');
                    }
                }

            </script>
        @endpush
