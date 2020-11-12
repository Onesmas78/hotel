@extends('layouts.main')



@section('content')


<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
<div class="container">
<div class="inner">
<h1>About Stanjo Suites Hotel</h1>
<ol class="breadcrumb">
<li><a href="index.html">Home</a></li>
<li>About Stanjo Karen Suites Hotel</li>
</ol>
</div>
</div>
</div>

<main id="about_us_page">
<div class="container">
<div class="row">
<div class="col-md-7">
<h1 class="mb30">Stanjo Suites Hotel - Since 2018</h1>
<p>Stanjo Karen Suites is a family-owned hotel facility located along Langata road, opposite Tangaza University. Overlooking Ngong Hills and the leafy suburbs of Karen, the hotel is situated in a serene environment 
    ideal for a holiday vacation, a weekend gateway, or a business conference. </p>

   



<p>Stanjo has a CEO, and staff in various departments including sales and marketing, front office, restaurant, room service, housekeeping, kitchen, purchasing, and security. The staff at Stanjo Karen Suites comprises of diverse
     individuals from different parts of the country.At Stanjo Karen Suites, quality is our priority. We pride on providing the best to our customers when it comes to the services and products we offer.  </p>
</div>
<div class="col-md-5">
<div class="about_img">
<img src="{{ asset('assets/img/stanjohotel.jpg') }}" class="img1 img-responsive" alt="Image">
<img src="{{ asset('assets/img/stanjohotel.jpg') }}" class="img2 img-responsive" alt="Image">
</div>
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-6">
<div class="countup_box">
<div class="inner">
<div class="countup number" data-count="56"></div>
<div class="text">Ensuite Rooms</div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-6">
<div class="countup_box">
<div class="inner">
<div class="countup number" data-count="20"></div>
<div class="text">Massage Rooms</div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-6">
<div class="countup_box">
<div class="inner">
<div class="countup number" data-count="3"></div>
<div class="text">Noah Vans </div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-6">
<div class="countup_box">
<div class="inner">
<div class="countup number" data-count="2"></div>
<div class="text">pools</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row image-gallery">
<div class="col-md-3 col-sm-6 mt20 mb20 br2">
<a href="{{ asset('assets/img/stanjoroom.jpg') }}" class="hover_effect h_lightbox h_blue">
<img src="{{ asset('assets/img/stanjoroom.jpg') }}" class="img-responsive full_width br2" alt="Image">
</a>
</div>
<div class="col-md-3 col-sm-6 mt20 mb20 br2">
<a href="{{ asset('assets/img/spa.jpg') }}" class="hover_effect h_lightbox h_blue">
<img src="{{ asset('assets/img/spa.jpg') }}" class="img-responsive full_width br2" alt="Image">
</a>
</div>
<div class="col-md-3 col-sm-6 mt20 mb20 br2">
<a href="{{ asset('assets/img/noah.jpg') }}" class="hover_effect h_lightbox h_blue">
<img src="{{ asset('assets/img/noah.jpg') }}" class="img-responsive full_width br2" alt="Image">
</a>
</div>
<div class="col-md-3 col-sm-6 mt20 mb20 br2">
<a href="{{ asset('assets/img/stanjogym.jpg') }}" class="hover_effect h_lightbox h_blue">
<img src="{{ asset('assets/img/stanjogym.jpg') }}" class="img-responsive full_width br2" alt="Image">
</a>
</div>
</div>

<div class="row">
<div class="col-md-4">
<div class="main_title mt_wave mt_yellow a_center">
<h2>Our Vision</h2>
</div>
<div class="s_description a_left">
<p>To exceed the expectations of our guests, be the preferred provider of hospitality services, and uphold the reputation we have among customers, stakeholders, and the community.</p>
</div>
</div>
<div class="col-md-4">
<div class="main_title mt_wave mt_yellow a_center">
<h2>Our Mission</h2>
</div>
<div class="main_description a_center">
<p>The mission is to put hospitality services on the highest level in a bid to satisfy the expectations and demands of customers. Our aim is to make Stanjo hotel a place of serene stay, pleasant meetings.</p>
</div>
</div>
<div class="col-md-4">
<div class="main_title mt_wave mt_yellow a_center">
<h2>Our Philosophy </h2>
</div>
<div class="col-md-">
<div class="main_description a_center">
<p>Everything we do is centred on our guests to ensure we provide them with an unforgettable experience each time they visit or stay at our hotel.</p>
</div>
 </div>
</div>
</div>

<p> </p>
     <h2>Our Core Values</h2>
<ul class="list_menu">
<li><h5>Customer centric</h5> Our primary goal is to ensure customer satisfaction.</li>
<li><h5>Professionalism</h5> We carry out our duties with high levels of professionalism by adhering to industry standards.</li>
<li><h5>Innovative</h5> We are aware of market changes and always position ourselves to modern technologies and with a high sense of entrepreneurship.</li>
<li><h5>Loyalty</h5> We focus on creating long lasting collaborations with clients and stakeholders..</li>
<li><h5>Integrity</h5> We conduct our business with openness and hold ourselves accountable to every action we take.</li>
<li><h5>Respect</h5> We treat all our clients and staff with a high sense of respect, instill human dignity and promote self-worth.</li>
</ul>

<p>  </p>
</div>
</main>

       
@endsection