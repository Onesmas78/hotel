@extends('layouts.main')



@section('content')


<!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <h1>Rooms</h1>
                </div>
            </div>
        </div>
        
        <!-- =========== MAIN ========== -->
        <main id="rooms_grid">
          <div class="container">
              @foreach ($allrooms as $room)
                <!-- ITEM -->
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="room_grid_item">
                       <figure>
                          <a href="{{ route('front.rooms.show', $room->slug) }}" class="hover_effect h_link h_blue"><img src="{{ $room->service_image_url }}" class="img-responsive" alt="{{ ucwords($room->name) }}"></a>
                       </figure>
                       <div class="room_info">
                          <h3><a href="{{ route('front.rooms.show', $room->slug) }}">{{ ucwords($room->name) }}</a></h3>
                          <span class="text-primary h6"><sup>{{ $settings->currency->currency_symbol}}</sup> {{ $room->discounted_price }} /night</span>
                          <p>{!! substr($room->description,0,100). "..." !!}</p>
                          <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i> 
                            <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Restaurant" data-original-title=" Restaurant"></i> 
                          </div>
                          <a href="{{ route('front.rooms.show', $room->slug) }}" class="button  btn_blue btn_full upper mt20">View Room</a>
                       </div>
                    </div>
                 </div>
              @endforeach

              {{$allrooms->links()}}
          </div>
        </main>



@endsection