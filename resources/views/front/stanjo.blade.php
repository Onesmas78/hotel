@extends('layouts.main')



@section('content')


        <!-- ========== REVOLUTION SLIDER ========== -->
            <div id="classic_slider" class="rev_slider" style="display:none">
                <ul>
                    <!-- SLIDE NR. 1 -->
                    <li data-transition="crossfade">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('user-uploads/carousel-images/'.$images[0]->file_name) }}" 
                             alt="Image" 
                             title="slider_bg2"
                             data-bgposition="center center" 
                             data-bgfit="cover" 
                             data-bgrepeat="no-repeat" 
                             data-bgparallax="10" 
                             class="rev-slidebg" 
                             data-no-retina="">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="center" 
                             data-hoffset="" 
                             data-y="320" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="['60','50','40','30']" 
                             data-lineheight="['60','50','40','30']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 5; color: #fff; font-weight: 900;">{{ strtoupper($settings->company_name)}} </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" 
                             data-x="center" 
                             data-hoffset="" 
                             data-y="410" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="16" 
                             data-lineheight="16"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 6; color: #fff;">Stay with Us</div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             data-x="center" 
                             data-hoffset="-170" 
                             data-y="414"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']"
                             data-transform_idle="o:1;"
                             data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;" 
                             data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                             data-start="2000"
                             style="z-index: 7;background: url(images/icons/wave_white.svg);"> 
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                             data-x="center"
                             data-hoffset="-170" 
                             data-y="418" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;"
                             data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;"
                             data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;"
                             data-start="2100"
                             style="z-index: 7;background: url(images/icons/wave_white.svg);"> </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                             data-x="center" 
                             data-hoffset="170"
                             data-y="414"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;" 
                             data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;"
                             data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                             data-start="2000" 
                             style="z-index: 7;background: url(images/icons/wave_white.svg);"> 
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"  
                             data-x="center"
                             data-hoffset="170" 
                             data-y="418" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;"
                             data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:500;" 
                             data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                             data-start="2100"
                             style="z-index: 7;background: url(images/icons/wave_white.svg);">
                        </div>
                       <!-- LAYER NR. 7 -->
                       <a class="tp-caption button btn_blue" 
                          href="booking-form.html"
                          data-x="center"
                          data-hoffset="-100"
                          data-y="480" 
                          data-voffset=""
                          data-responsive_offset="on" 
                          data-fontsize="14"
                          data-whitespace="nowrap"
                          data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                          style="z-index: 11;"><i class="fa fa-calendar"></i>BOOK A ROOM TODAY
                        </a>
                       <!-- LAYER NR. 8 -->
                       <a class="tp-caption button btn_yellow " 
                          href="contact.html"
                          data-x="center" 
                          data-hoffset="108"
                          data-y="480" 
                          data-voffset=""
                          data-responsive_offset="on" 
                          data-fontsize="14"
                          data-whitespace="nowrap"
                          data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                          style="z-index: 11;"><i class="fa fa-envelope-o" aria-hidden="true"></i>CONTACT US
                        </a>
                        <!-- LAYER NR. 9 -->
                        {{-- <div class="tp-caption tp_m_title tp-resizeme" 
                             data-x="center" 
                             data-hoffset="" 
                             data-y="200"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="['18','18','16','16']"
                             data-lineheight="['18','18','16','16']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div> --}}
                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption tp_m_title tp-resizeme"
                             data-x="center"
                             data-hoffset="" 
                             data-y="240" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="['25','25','18','18']" 
                             data-lineheight="['25','25','18','18']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            Luxury Suites
                        </div>
                        <!-- Overlay -->
                        <div id="slider-11-slide-23-layer-1" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,16,10,4;l:0,21,13,6;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index: 8; background-color: rgba(0, 0, 0, 0.5); color: rgb(255, 255, 255); width: 100%; height: 100%; min-height: 0px; min-width: 0px; max-height: none; max-width: none; transform-origin: 50% 50%; opacity: 1; transform: translate(0px, 0px); visibility: visible;" class="rs-layer" data-idcheck="true" data-stylerecorder="true" data-initialised="true"> 
                        </div>
                    </li>
                    
                    <!-- SLIDE NR. 2 -->
                    <li data-transition="crossfade">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('user-uploads/carousel-images/'.$images[1]->file_name) }}" 
                             alt="Image" 
                             title="slider_bg2"
                             data-bgposition="center center"
                             data-bgfit="cover" 
                             data-bgrepeat="no-repeat"
                             data-bgparallax="10"
                             class="rev-slidebg" 
                             data-no-retina="">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme" 
                             data-x="center" 
                             data-hoffset="" 
                             data-y="320" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="['60','50','40','25']" 
                             data-lineheight="['60','50','40','25']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 5; color: #fff; font-weight: 900;">ENJOY YOUR HOLIDAYS HERE
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="center" 
                             data-hoffset="" 
                             data-y="410" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="16" 
                             data-lineheight="16"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 6; color: #fff;">Serene Environment
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                             data-x="center" 
                             data-hoffset="-134" 
                             data-y="414"
                             data-voffset=""
                             data-width="['100']" 
                             data-height="['4']"
                             data-transform_idle="o:1;" 
                             data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:300;" 
                             data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                             data-start="2000" 
                             data-responsive_offset="on"
                             style="z-index: 7;background: url(images/icons/wave_white.svg);"> 
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                             data-x="center" 
                             data-hoffset="-134"
                             data-y="418"
                             data-voffset=""
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;" 
                             data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:300;" 
                             data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;"
                             data-start="2100" 
                             data-responsive_offset="on" 
                             style="z-index: 8;background: url(images/icons/wave_white.svg);">
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                             data-x="center" 
                             data-hoffset="134" 
                             data-y="414"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-width="['100']"
                             data-height="['4']" 
                             data-transform_idle="o:1;" 
                             data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:300;" 
                             data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                             data-start="2000" 
                             style="z-index: 9;background: url(images/icons/wave_white.svg);">
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                             data-x="center"
                             data-hoffset="134"
                             data-y="418" 
                             data-voffset=""
                             data-width="['100']"
                             data-height="['4']"
                             data-transform_idle="o:1;" 
                             data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:300;" 
                             data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                             data-start="2100" 
                             data-responsive_offset="on" 
                             style="z-index: 10;background: url(images/icons/wave_white.svg);">
                        </div>
                       <!-- LAYER NR. 7 -->
                       <a class="tp-caption button btn_yellow" 
                          href="booking-form.html"
                          data-x="center" 
                          data-hoffset="-100"
                          data-y="480"
                          data-voffset=""
                          data-responsive_offset="on" 
                          data-fontsize="14" 
                          data-whitespace="nowrap"
                          data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                          style="z-index: 11;"><i class="fa fa-calendar"></i>BOOK A ROOM NOW
                        </a>  
                        <!-- LAYER NR. 8 -->
                        <a class="tp-caption button btn_yellow "
                           href="contact.html"
                           data-x="center" 
                           data-hoffset="108"
                           data-y="480" 
                           data-voffset=""
                           data-responsive_offset="on" 
                           data-fontsize="14" 
                           data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                           style="z-index: 11;"><i class="fa fa-envelope-o" aria-hidden="true"></i>CONTACT US NOW
                        </a>
                        <!-- LAYER NR. 9 -->
                        {{-- <div class="tp-caption tp-resizeme" 
                             data-x="center" 
                             data-hoffset="" 
                             data-y="200"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 12;"><img src="{{ $frontThemeSettings->logo_url }}" width="200" alt="Image">
                        </div> --}}
                        <!-- Overlay -->
                        <div id="slider-11-slide-23-layer-1" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,16,10,4;l:0,21,13,6;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index: 8; background-color: rgba(0, 0, 0, 0.5); color: rgb(255, 255, 255); width: 100%; height: 100%; min-height: 0px; min-width: 0px; max-height: none; max-width: none; transform-origin: 50% 50%; opacity: 1; transform: translate(0px, 0px); visibility: visible;" class="rs-layer" data-idcheck="true" data-stylerecorder="true" data-initialised="true"> 
                        </div>
                    </li>
                    
                    <!-- SLIDE NR. 3 -->
                    <li data-transition="crossfade">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('user-uploads/carousel-images/'.$images[2]->file_name) }}" 
                             alt="Image" 
                             title="slider_bg3"
                             data-bgposition="center center"
                             data-bgfit="cover" 
                             data-bgrepeat="no-repeat"
                             data-bgparallax="10" 
                             class="rev-slidebg"
                             data-no-retina="">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme" 
                             data-x="center" 
                             data-hoffset="" 
                             data-y="305" 
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="['80','70','60','40']" 
                             data-lineheight="['80','70','60','40']"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 5; color: #fff; font-weight: 900;">Treat Your Family
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" 
                             data-x="center" 
                             data-hoffset=""
                             data-y="410"
                             data-voffset=""
                             data-responsive_offset="on" 
                             data-fontsize="16" 
                             data-lineheight="16"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             style="z-index: 6; color: #fff;">Family Room from Ksh 10000
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                             data-x="center" 
                             data-hoffset="-180" 
                             data-y="414" 
                             data-voffset=""
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;" 
                             data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1000;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:300;" 
                             data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;"
                             data-start="2300" 
                             data-responsive_offset="on" 
                             style="z-index: 7;background: url(images/icons/wave_white.svg);"> 
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                             data-x="center"
                             data-hoffset="-180" 
                             data-y="418" 
                             data-voffset=""
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;" 
                             data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1000;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:300;"
                             data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                             data-start="2400" 
                             data-responsive_offset="on" 
                             style="z-index: 8;background: url(images/icons/wave_white.svg);"> 
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                             data-x="center"
                             data-hoffset="180"
                             data-y="414" 
                             data-voffset=""
                             data-width="['100']"
                             data-height="['4']" 
                             data-transform_idle="o:1;" 
                             data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1000;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:300;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                             data-start="2300" 
                             data-responsive_offset="on" 
                             style="z-index: 9;background: url(images/icons/wave_white.svg);">
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                             data-x="center" 
                             data-hoffset="180"
                             data-y="418" 
                             data-voffset=""
                             data-width="['100']" 
                             data-height="['4']" 
                             data-transform_idle="o:1;" 
                             data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;s:1000;e:Power3.easeOut;" 
                             data-transform_out="opacity:0;s:300;" 
                             data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                             data-start="2400" 
                             data-responsive_offset="on" 
                             style="z-index: 10;background: url(images/icons/wave_white.svg);"> 
                        </div>
                        <!-- Overlay -->
                        <div id="slider-11-slide-23-layer-1" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,16,10,4;l:0,21,13,6;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index: 8; background-color: rgba(0, 0, 0, 0.5); color: rgb(255, 255, 255); width: 100%; height: 100%; min-height: 0px; min-width: 0px; max-height: none; max-width: none; transform-origin: 50% 50%; opacity: 1; transform: translate(0px, 0px); visibility: visible;" class="rs-layer" data-idcheck="true" data-stylerecorder="true" data-initialised="true"> 
                        </div>
                    </li>
                    
                </ul>
            </div>
        
             <!-- ========== HORIZONTAL BOOKING FORM ========== -->
             {{-- <div class="hbf">
                <div class="container">
                    <div class="inner">
                        <form id="booking-form">

                            <div class="col-md-2 md_pr5">
                                <div class="form-group">
                                    <label>Your Email
                                        <a href="#" title="Your Email" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Type Your Email"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                    </label>
                                    <input class="form-control" name="booking-email" type="email" placeholder="Your Email Address">
                                </div>
                            </div>
                            <div class="col-md-2 md_p5">
                                <div class="form-group">
                                     <label>Room Type
                                        <a href="#" title="Room Type" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Select Room Type: Single Room, Double Room or Deluxe Room"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                    </label>
                                    <div class="form_select">
                                        <select name="booking-roomtype" class="form-control" title="Select Room Type" data-header="Room Type">
                                            <option value="Single">Single Room</option>
                                            <option value="Double">Double Room</option>
                                            <option value="Deluxe">Deluxe Room</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row">

                                    <div class="col-md-6 col-sm-6 arrival_date md_pl5 md_nopadding_right">
                                        <div class="form-group">
                                             <label>Arrival
                                                <a href="#" title="Arrival" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Check In from 11:00 am"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>

                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control md_noborder_right" name="booking-checkin" placeholder="Arrival Date" readonly>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 departure_date md_pr5 md_nopadding_left">
                                        <div class="form-group">
                                             <label>Departure
                                                <a href="#" title="Departure" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Check Out from 12:00 am"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_date departure">
                                                <input type="text" class="datepicker form-control" name="booking-checkout" placeholder="Departure Date" readonly>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row">

                                    <div class="col-md-6 col-sm-6 adults md_pl5 md_nopadding_right">
                                        <div class="form-group">
                                            <label>Adults
                                                <a href="#" title="Adults" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="+18 years"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_select">
                                                <select name="booking-adults" class="form-control md_noborder_right" title="Adults" data-header="Adults">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 children md_pr5 md_nopadding_left">
                                        <div class="form-group">
                                             <label>Children
                                                <a href="#" title="Children" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="0-18 years"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_select children_select">
                                                <select name="booking-children" class="form-control" title="Children" data-header="Children">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 md_pl5">
                                <button type="submit" class="button  btn_blue btn_full">BOOK A ROOM</button>
                                <div class="advanced_form_link"> <a href="booking-form.html"> Advanced Booking Form </a> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}

            <!-- ========== ABOUT & ROOMS ========== -->
            <section id="about_rooms">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div id="about">
                                <div class="main_title mt_wave a_left">
                                    <h2>ABOUT HOTEL ZANTE</h2>
                                </div>
                                <p class="main_description a_left">Stanjo Karen Suites is a family-owned hotel facility located along Langata road,opposite Tangaza University.Over looking Ngong Hills and the leafy suburbs of Karen,the hotel is situated ina serene environment ideal for a holiday vacation,a weekend gateway,or a business.</p>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div id="rooms">
                                <div class="main_title mt_wave a_left">
                                    <h2>OUR FAVORITE ROOMS</h2>
                                </div> 
                                    <p class="main_description">The establishment now boasts a total of 56 ensuite rooms, which are tastefully done to meet and exceed customer needs. There are different types of rooms to match the your needs</p> 
                                <div class="row">
                                    <div class="col-md-4">
                                        <article class="room">
                                            <figure>
                                                <div class="price">Ksh 6500 <span>/night</span></div>
                                                <a class="hover_effect h_blue h_link" href="room.html">
                                                    <img src="{{ asset('assets/img/single-room.jpg') }}" class="img-responsive" alt="Image">
                                                </a>
                                                <figcaption>
                                                    <h5><a href="room.html">Single Room</a></h5>
                                                    <span class="f_right"><a href="rooms-list.html" class="button btn_xs btn_blue">VIEW DETAILS</a></span>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article class="room">
                                            <figure>
                                                <div class="price">Ksh 8500 <span>/night</span></div>
                                                <a class="hover_effect h_blue h_link" href="room.html">
                                                    <img src="{{ asset('assets/img/single-room.jpg') }}" class="img-responsive" alt="Image">
                                                </a>
                                                <figcaption>
                                                    <h5><a href="room.html">Double Room</a></h5>
                                                    <span class="f_right"><a href="room.html" class="button btn_xs btn_blue">VIEW DETAILS</a></span>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <article class="room">
                                            <figure>
                                                <div class="price"> Ksh 12500 <span>/night</span></div>
                                                <a class="hover_effect h_blue h_link" href="room.html">
                                                    <img src="{{ asset('assets/img/single-room.jpg') }}" class="img-responsive" alt="Image">
                                                </a>
                                                <figcaption>
                                                    <h5><a href="room.html">Twin Room</a></h5>
                                                    <span class="f_right"><a href="room.html" class="button btn_xs btn_blue">VIEW DETAILS</a></span>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                </div>
            </section> 
        
            <!-- ========== FEATURES ========== -->
            <section class="lightgrey_bg" id="features">
                <div class="container">
                    <div class="main_title mt_wave a_center">
                        <h2>OUR AWESOME SERVICES</h2>
                    </div>
                    <p class="main_description a_center">At Stanjo Karen Suites, quality is our priority. We pride on providing the best to our customers when it comes to the services and products we offer.</p>

                    <div class="row">
                        <div class="col-md-7">
                            <div data-slider-id="features" id="features_slider" class="owl-carousel">
                                <div><img src="{{ asset('assets/img/safaris.jpg') }}" class="img-responsive" alt="Image"></div>
                                <div><img src="{{ asset('assets/img/restaurant.jpg') }}" class="img-responsive" alt="Image"></div>
                                <div><img src="{{ asset('assets/img/gym-spa.jpg') }}" class="img-responsive" alt="Image"></div>
                                <div><img src="{{ asset('assets/img/airport-transfer.jpg') }}" class="img-responsive" alt="Image"></div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="owl-thumbs" data-slider-id="features">
                                <div class="owl-thumb-item">
                                    <span class="media-left"><i class="fas fa-shuttle-van"></i></span>
                                    <div class="media-body">
                                        <h5>Safaris</h5>
                                        <p>After choosing to stay at Stanjo for holiday, you wouldn’t want to stay in your hotel room throughout</p>
                                    </div>
                                </div>
                                <div class="owl-thumb-item">
                                    <span class="media-left"><i class="fas fa-hotel"></i></span>
                                    <div class="media-body">
                                        <h5>Restaurant</h5>
                                        <p>Our restaurant is the place you will find a broad variety of fresh, tasty, and nutritious foods.</p>
                                    </div>
                                </div>
                                <div class="owl-thumb-item">
                                    <span class="media-left"><i class="fas fa-dumbbell"></i></span>
                                    <div class="media-body">
                                        <h5>Gym &amp; SPA</h5>
                                        <p>The Nairobi gyms can be costly, which is why we have a fitness centre right at the heart of Stanjo Karen Suites to help you save more.</p>
                                    </div>
                                </div>
                                <div class="owl-thumb-item">
                                    <span class="media-left"><i class="fas fa-plane-arrival"></i></span>
                                    <div class="media-body">
                                        <h5>Airport Transfer</h5>
                                        <p>Often, we have international guests checking in at Stanjo. We always want to give them a warm welcome right from the airport, thanks to our airport transfer services</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== GALLERY ========== -->
            {{-- <section id="gallery" class="blue_bg">
                <div class="container">
                    <div class="main_title mt_wave mt_white a_center">
                        <h2>ZANTE GALLERY PHOTOS</h2>
                    </div> 
                        <p class="main_description md_white a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p> 
                </div>
                <div id="gallery_slider" class="owl-carousel image-gallery">
                    <!-- ITEM -->
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="images/gallery/gallery1.jpg">
                            <img src="images/gallery/gallery1.jpg" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Rooms Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="images/gallery/gallery2.jpg">
                            <img src="images/gallery/gallery2.jpg" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Rooms Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="images/gallery/gallery3.jpg">
                            <img src="images/gallery/gallery3.jpg" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Rooms Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="images/gallery/gallery4.jpg">
                            <img src="images/gallery/gallery4.jpg" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Rooms Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="images/gallery/gallery5.jpg">
                            <img src="images/gallery/gallery5.jpg" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Rooms Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="images/gallery/gallery6.jpg">
                            <img src="images/gallery/gallery6.jpg" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Rooms Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="images/gallery/gallery7.jpg">
                            <img src="images/gallery/gallery7.jpg" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Rooms Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="item">
                        <a class="hover_effect h_yellow h_lightbox" href="images/gallery/gallery8.jpg">
                            <img src="images/gallery/gallery8.jpg" alt="Image">
                        </a>
                        <div class="gallery_item_info">
                            <h4>Rooms Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
                        </div>
                    </div>
                    <!-- END ITEM -->
                </div>

                 <div class="container">
                    <div class="mt40 a_center">
                        <a class="button btn_sm btn_dark upper" href="gallery.html">View Full Gallery</a>
                    </div>
                </div>

            </section> --}}

            <!-- ========== TESTIMONIALS ========== -->
            <section id="testimonials_style_2" class="grey_bg">
                <div class="container">
                    <div class="main_title mt_wave a_center">
                        <h2>WHAT PEOPLE SAY ABOUT US</h2>
                    </div> 
                        <p class="main_description a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p> 
                    <div class="row">
                        <!-- ITEM -->
                        <div class="col-md-4">
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>Excellent! </h3>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                                <div class="review_author">
                                    <img src="images/users/user1.jpg" alt="Image">
                                    <div class="author_info">
                                        <h5>John Doe</h5>
                                        <span class="place">Athens, Greece</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4">
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>Excellent! </h3>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                                <div class="review_author">
                                    <img src="images/users/user2.jpg" alt="Image">
                                    <div class="author_info">
                                        <h5>Ina Aldrich</h5>
                                        <span class="place">Athens, Greece</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-4">
                            <div class="review_item">
                                <div class="review_content">
                                    <h3>Excellent! </h3>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                                <div class="review_author">
                                    <img src="images/users/user3.jpg" alt="Image">
                                    <div class="author_info">
                                        <h5>William W.</h5>
                                        <span class="place">Athens, Greece</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== CONTACT ========== -->
            <section class="white_bg" id="contact">
                <div class="container">
                    <div class="main_title mt_wave a_center">
                        <h2>LOCATION - CONTACT US</h2>
                    </div> 
                  <p class="main_description a_center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p> 
                    <div class="row">
                        <div class="col-md-6">
                            <div id="map-canvas"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="contact-items">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="contact-item">
                                            <i class="glyphicon glyphicon-phone-alt"></i>
                                            <h6 class="text-center">{{ $settings->company_phone }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="contact-item">
                                            <i class="fa fa-envelope"></i>
                                            <h6 class="text-center">{{ $settings->company_email }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="contact-form" name="contact-form">
                                <div id="contact-result"></div>
                                <div class="form-group">
                                    <input class="form-control" name="name" placeholder="Your Name" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" placeholder="Your Email Address" type="email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                                </div>
                                <button class="button btn_lg btn_blue btn_full upper" type="submit"><i class="fa fa-location-arrow"></i>Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- ========== SUBSCRIBE ========== -->
            {{-- <section id="subscribe" class="gradient_overlay">
                <div class="inner">
                    <div class="container">
                        <div class="main_title mt_wave mt_white a_center">
                            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                        </div>
                        <p class="main_description md_white a_center">Subscribe to our newsletter to receive exclusive offers and the latest news.</p>
                        <form id="subscribe-form" name="subscribe">
                            <div class="form-group">
                                <input type="email" name="subscribe-email" class="form-control" placeholder="Enter your email">
                                <button class="button btn_lg btn_yellow" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            </div>
                        </form> 
                    </div>
                </div>
            </section> --}}

@endsection