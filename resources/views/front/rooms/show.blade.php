@extends('layouts.main')



@section('content')
    <!-- =========== PAGE TITLE ========== -->
    <div class="page_title gradient_overlay">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1>{{ $service->name }}</h1>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('front.rooms.index') }}">Rooms</a></li>
                            <li>{{ $service->name }}</li>
                        </ol>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="price">
                            <div class="inner">
                                {{ $service->price }}<sup>{{ $settings->currency->currency_symbol }}</sup>
                                <span>per night</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== MAIN ========== -->
    <main id="room_page">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="slider">
                        <div id="slider-larg" class="owl-carousel image-gallery">
                            @foreach ($service->image as $service_image)
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="{{ asset('user-uploads/service/' . $service->id . '/' . $service_image) }}"
                                        class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive"
                                            src="{{ asset('user-uploads/service/' . $service->id . '/' . $service_image) }}"
                                            alt="Image">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div id="thumbs" class="owl-carousel">
                            @foreach ($service->image as $service_image)
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive"
                                        src="{{ asset('user-uploads/service/' . $service->id . '/' . $service_image) }}"
                                        alt="Image"></div>
                            @endforeach
                        </div>
                    </div>
                    <div class="main_title mt50">
                        <h2>About {{ $service->name }}</h2>
                    </div>

                    <div>
                        {!! $service->description !!}
                    </div>

                    <div class="main_title t_style a_left s_title mt50">
                        <div class="c_inner">
                            <h2 class="c_title">ROOM SERVICES</h2>
                        </div>
                    </div>
                    <div class="room_facilitys_list">
                        <div class="all_facility_list">
                            <div class="col-sm-4 nopadding">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-check"></i>Double Bed</li>
                                    <li><i class="fa fa-check"></i>80 Sq mt</li>
                                    <li><i class="fa fa-check"></i>6 Persons</li>
                                    <li><i class="fa fa-check"></i>Free Internet</li>
                                </ul>
                            </div>
                            <div class="col-sm-4 nopadding">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-check"></i>Free Wi-Fi</li>
                                    <li><i class="fa fa-check"></i>Breakfast Include</li>
                                    <li><i class="fa fa-check"></i>Private Balcony</li>
                                    <li class="no"><i class="fa fa-times"></i>Free Newspaper</li>
                                </ul>
                            </div>
                            <div class="col-sm-4 nopadding_left">
                                <ul class="list-unstyled">
                                    <li class="no"><i class="fa fa-times"></i>Flat Screen Tv</li>
                                    <li><i class="fa fa-check"></i>Full Ac</li>
                                    <li class="no"><i class="fa fa-times"></i>Beach View</li>
                                    <li><i class="fa fa-check"></i>Room Service</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="similar_rooms">
                        <div class="main_title t_style5 l_blue s_title a_left">
                            <div class="c_inner">
                                <h2 class="c_title">SIMILAR ROOMS</h2>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($services as $service)
                                <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="{{ route('front.rooms.show', $service->slug) }}"
                                                class="hover_effect h_blue h_link"><img
                                                    src="{{ asset('user-uploads/service/' . $service->id . '/' . $service->default_image) }}"
                                                    alt="Image" class="img-responsive"></a>
                                            <div class="price"> <sup>{{ $settings->currency->currency_symbol }}</sup>
                                                {{ $service->price }}<span> /night</span>
                                            </div>
                                            <figcaption>
                                                <h4><a href="">{{ $service->name }}</a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <aside class="widget">
                            <div class="vbf">
                                 <h2 class="form_title"><i class="fa fa-calendar"></i>
                                    Book Room</h2>
                                    {{--
                                <form method="POST" class="inner" action="{{ route('front.booker.store') }}">
                                    @csrf
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                        <div class="input-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control md_noborder_right"
                                                    name="checkin" placeholder="Checkin Date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                        <div class="input-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control" name="checkout"
                                                    placeholder="Checkout Date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="service-slug" value="{{ $service->slug }}" hidden>

                                </form> --}}
                                <button class=" add-to-cart button btn_lg btn_blue btn_full"
                                    data-service-price="{{ $service->discounted_price }}"
                                    data-service-id="{{ $service->id }}"
                                    data-service-name="{{ ucwords($service->name) }}">Book Room</button>
                            </div>
                        </aside>
                        <aside class="widget">
                            <h4>NEED HELP?</h4>
                            <div class="help">
                                If you have any question please don't hesitate to contact us
                                <div class="phone"><i class="fa  fa-phone"></i><a href="tel:{{ $settings->company_phone }}">
                                        {{ $settings->company_phone }} </a></div>
                                <div class="email"><i class="fa  fa-envelope-o "></i><a
                                        href="mailto:{{ $settings->company_email }}">{{ $settings->company_email }}</a> or
                                    use <a href="#"> our contact form</a></div>
                            </div>
                        </aside>
                        {{-- <aside class="widget">
                            <h4>Latest Posts</h4>
                            <div class="latest_posts">
                                <article class="latest_post">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_link h_blue">
                                            <img src="images/blog/thumb1.jpg" alt="Image">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <h6><a href="blog-post.html">Live your myth in Greece</a></h6>
                                        <span><i class="fa fa-calendar"></i>23/11/2017</span>
                                    </div>
                                </article>
                                <article class="latest_post">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_link h_blue">
                                            <img src="images/blog/thumb2.jpg" alt="Image">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <h6><a href="blog-post.html">Hotel Zante in pictures</a></h6>
                                        <span><i class="fa fa-calendar"></i>18/10/2017</span>
                                    </div>
                                </article>
                                <article class="latest_post">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_link h_blue">
                                            <img src="images/blog/thumb3.jpg" alt="Image">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <h6><a href="blog-post.html">Hotel Zante family party</a></h6>
                                        <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                    </div>
                                </article>
                                <article class="latest_post">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_link h_blue">
                                            <img src="images/blog/thumb4.jpg" alt="Image">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <h6><a href="blog-post.html">Hotel Zante weddings</a></h6>
                                        <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                    </div>
                                </article>
                                <article class="latest_post">
                                    <figure>
                                        <a href="blog-post.html" class="hover_effect h_link h_blue">
                                            <img src="images/blog/thumb5.jpg" alt="Image">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <h6><a href="blog-post.html">10 things you should know</a></h6>
                                        <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                    </div>
                                </article>
                            </div>
                        </aside> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // add items to cart
        $('body').on('click', '.add-to-cart', function() {
            let serviceId = $(this).data('service-id');
            let servicePrice = $(this).data('service-price');
            let serviceName = $(this).data('service-name');

            var data = {
                serviceId,
                servicePrice,
                serviceName,
                '_token': $("meta[name='csrf-token']").attr('content')
            };

            $.ajax({
                url: '{{ route('front.addOrUpdateProduct') }}',
                type: 'POST',
                data: data,
                success: function(response) {
                    $('.cart-badge').text(response.productsCount);
                    window.location.href = '{{ route('front.cartPage') }}'
                }
            })
        });

    </script>
@endsection
