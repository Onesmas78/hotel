{{-- <footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="company-details text-center">
                        <div class="row justify-content-center mb-5 pb-4 border-bottom">
                            <div class="col-md-4 col-sm-6 col-12 mb-30">
                                <div class="f-content">
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                        <strong>{{ $settings->company_name }}</strong>
                                    </p>
                                    <p>{!! $settings->formatted_address !!}</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 mb-30">
                                <div class="f-content">
                                    <i class="fa fa-phone"></i>
                                    {{ $settings->company_phone }}

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 mb-30">
                                <div class="f-content">
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:{{ $settings->company_email }}">{{ $settings->company_email }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quick-link d-flex flex-wrap align-items-center justify-content-between">
                @foreach ($pages as $page)
                    @if ($page->id !== 2)
                        <a href="{{ route('front.page', $page->slug) }}">{{ $page->title }}</a>
                        @else
                        @php
                        $contactPageSlug = $page->slug;
                        $contactPageTitle = $page->title;
                        @endphp
                    @endif
                @endforeach
                <a href="{{ route('front.page', $contactPageSlug) }}">{{ $contactPageTitle }}</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    © {{ ucfirst($settings->company_name) }} {{ \Carbon\Carbon::now()->year }}
                </div>
            </div>
        </div>
    </div>
</footer> --}}
{{--
<footer class="dark">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 widget">
                    <div class="about">
                        <a href="/"><img class="logo" src="{{ $frontThemeSettings->logo_url }}" height="32"
                                alt="Logo"></a>
                        <p>Stanjo Karen Suites is a family-owned hotel facility located along Langata road,opposite
                            Tangaza University.Over looking Ngong Hills and
                            the leafy suburbs of Karen,the hotel is situated ina serene environment
                            ideal for a holiday vacation,a weekend gateway,or a business.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 widget">
                    <h5>Latest News</h5>
                    <ul class="blog_posts">
                        <li><a href="#">Stanjo Karen Suites </a> <small>AUGUST 13, 2017</small></li>
                        <li><a href="#">Stanjo Karen Suites </a> <small>AUGUST 16, 2017</small></li>
                        <li><a href="#">Stanjo Karen Suites</a> <small>SEPTEMBER 15, 2017</small></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 widget">
                    <h5>Useful Links</h5>
                    <ul class="useful_links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Location</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 widget">
                    <h5>Contact Us</h5>
                    <address>
                        <ul class="address_details">
                            <li><i class="glyphicon glyphicon-map-marker"></i> {!! $settings->formatted_address !!}</li>
                            <li><i class="glyphicon glyphicon-phone-alt"></i> Phone: {{ $settings->company_phone }}
                            </li>
                            <li><i class="fa fa-envelope"></i> Email: <a
                                    href="mailto:{{ $settings->company_email }}">{{ $settings->company_email }}</a></li>
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
                        {{ \Carbon\Carbon::now()->year }} <a href="/">© {{ ucfirst($settings->company_name) }}</a> All
                        Rights Reserved.
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="social_media">
                        <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#"><i
                                class="fa fa-facebook"></i></a>
                        <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#"><i
                                class="fa fa-twitter"></i></a>
                        <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#"><i
                                class="fa fa-google-plus"></i></a>
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
</footer> --}}

<footer class="dark">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 widget">
                    <div class="about">
                        <a href="index.html"><img class="logo" src="{{ $frontThemeSettings->logo_url }}" height="80"
                                alt="Logo"></a>
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
                        <li><a href="{{ route('front.cartPage') }}">Cart</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 widget">
                    <h5>Useful Links</h5>
                    <ul class="useful_links">
                        <li><a href="{{ route('front.aboutus') }}">About us</a></li>
                        <li><a href="{{ route('front.contactus') }}">Contact us</a></li>
                        <li><a href="{{ route('front.ourservices') }}">Our Services</a></li>
                        <li><a href="{{ route('front.cartPage') }}">Cart</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 widget">
                    <h5>Contact Us</h5>
                    <address>
                        <ul class="address_details">
                            <li><i class="glyphicon glyphicon-map-marker"></i> {!! $settings->formatted_address !!}</li>
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
                        <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#"><i
                                class="fa fa-google-plus"></i></a>
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
