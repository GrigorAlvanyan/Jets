@section('css')
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection
@section('js')
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.timepicker.js"></script>
    <script src="js/jquery.form-validator.js"></script>
    <script src="js/slick.js"></script>
@endsection
@include('templates/header')
<div class="content">
    @include('main_slider')
    @php($block1 = $homeBlocks->where('slug', 'block_1')->first())
    @php($block2 = $homeBlocks->where('slug', 'block_2')->first())
    @php($block3 = $homeBlocks->where('slug', 'block_3')->first())
    @php($block4 = $homeBlocks->where('slug', 'block_4')->first())
    @php($sliderDestinations = $destinations->where('is_top', 0))
    @php($topDestinations = $destinations->where('is_top', 1))
    <div class="contents_scroll">
        @if(isset($block1))
            <div class="custom_container">
                <div class="head_block animation_block fade_animation">
                    <div class="banner_inner">
                        <h1 class="page_title">{{$block1->title}}</h1>
                        <div class="page_description">
                            {!! $block1->summary !!}
                        </div>
                    </div>
                </div>
                @if(!empty($block1->youtube_link))
                    <div class="comfort_block animation_block fade_animation">
                        <div class="banner_inner">
                            <a data-fancybox href="https://www.youtube.com/watch?v={{$block1->youtube_link}}">
                                <img src="images/slider1.png" alt="" title=""/>
                                <span class="video_btn"></span>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        @endif

        <div class="slider_jets">
            <div class="custom_container">
                @if(isset($block2))
                    <div class="head_block animation_block fade_animation">
                        <div class="banner_inner">
                            <h1 class="page_title">{{$block2->title}}</h1>
                            <div class="page_description">
                                {!! $block2->summary !!}
                            </div>
                        </div>
                    </div>
                @endif

                @if(count($sliderDestinations) > 0)
                        <div class="images_slider">
                            @foreach($sliderDestinations as $destination)
                                <div class="slide_block">
                                    <div class="slide_inner">
                                        {{$destination->title}}
                                        <img src="images/josie-josie-ybz7WB39uB4-unsplash 1.png" alt="" title="{{$destination->title}}"/>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                @endif

            </div>
        </div>
        <div class="jets_block">
            <div class="custom_container animation_block fade_animation">
                <div class="banner_inner">
                    <div class="inner_slider">
                        <div class="inner_jets">
                            <div class="info_jets">
                                <div class="page_title">top jets</div>
                                <div class="info_block">
                                    <div class="page_description">
                                        Nextant 400XT
                                    </div>
                                    <div class="inner_description">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration in some form, by injected humour, or randomised words
                                    </div>
                                    <a href="" class="see_more">SEE MORE</a>
                                </div>
                            </div>
                            <div class="jets_image">
                                <img src="images/jets.png" alt="" title=""/>
                            </div>
                        </div>
                        <div class="inner_jets">
                            <div class="info_jets">
                                <div class="page_title">top jets</div>
                                <div class="info_block">
                                    <div class="page_description">
                                        Nextant 400XT
                                    </div>
                                    <div class="inner_description">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration in some form, by injected humour, or randomised words
                                    </div>
                                    <a href="" class="see_more">SEE MORE</a>
                                </div>
                            </div>
                            <div class="jets_image">
                                <img src="images/slider1.png" alt="" title=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_container">
            @if(isset($block4))
            <div class="head_block animation_block fade_animation">
                <div class="banner_inner">
                    <h1 class="page_title">{{ $block4->title }}</h1>
                    <div class="page_description">{!! $block4->summary !!}</div>
                </div>
            </div>
            @endif
            <div class="top_slider">
                <div class="inner_top">
                    <div class="top_list animation_block left_animation">
                        <div class="banner_inner">
                            <ul class="list_btn">
                                <li class="active_slide"><a href="" data-slide="1">Palma de Mallorcav</a></li>
                                <li><a href="" data-slide="2">Geneva Cointrin</a></li>
                                <li><a href="" data-slide="3">Zurich Kloten</a></li>
                                <li><a href="" data-slide="4">Paris Le Bourget</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="top_image animation_block right_animation">
                        <div class="banner_inner">
                            <div class="slider_block">
                                <div class="top_slider">
                                    <div class="top_img"><img src="images/kevin-wolf-xAoM_IlBO9c-unsplash 1.png" alt=""
                                                              title=""/></div>
                                </div>
                                <div class="top_slider">
                                    <div class="top_img"><img src="images/PrivateJetDecoder-2021-XO 1.png" alt=""
                                                              title=""/></div>
                                </div>
                                <div class="top_slider">
                                    <div class="top_img"><img src="images/slider1.png" alt="" title=""/></div>
                                </div>
                                <div class="top_slider">
                                    <div class="top_img"><img src="images/slider1.png" alt="" title=""/></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info_list">
                <h1 class="page_title">top DESTINATIONS</h1>
                <div class="list_inner">
                    @if(count($topDestinations) > 0)
                            @foreach($topDestinations as $destination)
                                <div class="block_text">
                                    <div class="text_title">{{$destination->title}}</div>
                                    <div class="inner_description">
                                        {!! $destination->summary !!}
                                    </div>
                                </div>
                            @endforeach
                    @endif
                </div>
            </div>
        </div>
            @if(isset($block3))
                <div class="bottom_block">
                    <div class="custom_container">
                        <div class="inner_bottom animation_block" style="background-image: url('images/image 4.png')">
                            <div class="bottom_inner">
                                <div class="info_inner_bottom">
                                    <div class="page_title">{{$block3->title}}</div>
                                    <div class="inner_description">
                                        {{$block3->summary}}
                                    </div>
                                    <a href="{{url($block3->url)}}" class="order_btn">{{$block3->url_title}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

    </div>
</div>
@section('body-js')
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
@endsection
@include('templates/footer')



