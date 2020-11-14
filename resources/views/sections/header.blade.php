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
                            <li class="dropdown simple_menu">
                                @if ($user)
                                    <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a href="javascript:;" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{ $user->name }} <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li > <a href="{{ route('admin.dashboard') }}">
                                                        <i class="fa fa-user"></i> @lang('front.myAccount')</a></li>
                                                <li > <a href="javascript:;"
                                                        onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                                        <i class="fa fa-sign-out mr-2"> </i>@lang('app.logout')</a></li>
                                            </ul>                                
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
                        <li><a href="/" >HOME</a></li>
                        <li><a href="{{ route('front.rooms.index') }}">ROOMS </a></li>
                        <li><a href="{{ route('front.ourservices') }}">OUR SERVICES</a></li>
                        <li><a href="{{ route('front.aboutus') }}">ABOUT US</a></li>
                        <li><a href="{{ route('front.contactus') }}">CONTACT US</a></li>
                        <li class="menu_button">
                            <a href="{{ route('front.rooms.index') }}" class="button  btn_yellow"><i
                                    class="fa fa-calendar"></i>BOOK ONLINE</a>
                        </li>
                        <li>
                            <a href="{{ route('front.cartPage') }}"><i class="fa fa-shopping-cart"></i>
                                <span>{{ $productsCount }}</span></a>
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
