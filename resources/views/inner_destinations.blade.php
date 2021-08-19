@section('css')
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/ibiza.css')}}">
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.min.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/jquery.form-validator.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.js')}}"></script>
@endsection
@include('templates/header')
<div class="content ibiza_page">
    <div class="contents_scroll">
        <div class="animation_block fade_animation">
            <div class="banner_inner">
                <div class="main_block">
                    <div class="main_img">
                        <img src="/images/josie-josie-ybz7WB39uB4-unsplash.png" title="" alt=""/>
                    </div>
                    <div class="custom_container">
                        <div class="main_info form_blocks">
                            <div class="main_title">IBIZA</div>
                        </div>
                    </div>
                    @include('form')
                </div>
            </div>
        </div>
        <div class="custom_container">
            <div class="jet_block">
                <div class="info_jet animation_block left_animation">
                    <div class="banner_inner">
                        <h1 class="page_title">Hire a Private Jet to Ibiza</h1>
                        <div class="inner_description">

                            {{$destination->summary}}
                        </div>
                    </div>
                </div>
                <div class="images_jet animation_block right_animation">
                    <div class="banner_inner">
                        <img class="large_img" src="/images/ferran-feixas-gCHdv7IE9Gg-unsplash.png" title="" alt=""/>
                        <img class="small_img" src="/images/david-svihovec-34OyD0zZjao-unsplash 1.png" title="" alt=""/>
                    </div>
                </div>
            </div>
            <div class="block_story">
                <div class="inner_story">
                    <div class="story_info animation_block left_animation">
                        <div class="banner_inner">
                            <h1 class="page_title">Why Visit Ibiza?</h1>
                            <div class="inner_description">
                                Ibiza is a small island in Spain located in the Mediterranean Sea. While it started out
                                as a port town, Ibiza is now known far more for hedonism than hard work. Its natural
                                beauty, amazing weather and fun attractions have turned Ibiza into a hotspot for
                                European getaways.
                            </div>
                        </div>
                    </div>
                    <div class="story_img animation_block right_animation">
                        <div class="banner_inner">
                            <img src="/images/Zurich-to-Mykonos-Private-Jet-Charter-824x522.png" title="" alt=""/>
                            <div class="inner_description">Café del Mar</div>
                        </div>
                    </div>
                </div>
                <div class="images_block animation_block fade_animation">
                    <div class="left_img banner_inner"><img src="/images/belinda-fewings-EHPq7LxwFog-unsplash 1.png"
                                                            alt="" title=""/></div>
                    <div class="right_img banner_inner"><img src="/images/Ibiza-Habor.png" alt="" title=""/></div>
                </div>
            </div>
            <div class="slider_right">
                <div class="story_info animation_block left_animation">
                    <div class="banner_inner">
                        <h1 class="page_title">Why Visit Ibiza?</h1>
                        <div class="inner_description">
                            Ibiza is a small island in Spain located in the Mediterranean Sea. While it started out
                            as a port town, Ibiza is now known far more for hedonism than hard work. Its natural
                            beauty, amazing weather and fun attractions have turned Ibiza into a hotspot for
                            European getaways.
                        </div>
                    </div>
                </div>
                <div class="ibiza_slider animation_block right_animation">
                    <div class="images_slider banner_inner">
                        <div class="slide_block">
                            <div class="slide_inner">
                                <img src="/images/matty-adame-nLUb9GThIcg-unsplash.png" alt="" title=""/>
                            </div>
                        </div>
                        <div class="slide_block">
                            <div class="slide_inner">
                                <img src="/images/martyna-bober-yd1_Tupnls4-unsplash 1.png" alt="" title=""/>
                            </div>
                        </div>
                        <div class="slide_block">
                            <div class="slide_inner">
                                <img src="/images/image 22.png" alt="" title=""/>
                            </div>
                        </div>
                        <div class="slide_block">
                            <div class="slide_inner">
                                <img src="/images/image 18.png" alt="" title=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_texts animation_block fade_animation">
                <div class="banner_inner">
                    <img src="/images/slideshow-1624622648.png" alt="">
                    <div class="jet_text">
                        <a href="">Cova Santa</a>
                        July events start from 1 July 2021 and you can expect more to be added in the coming weeks.
                    </div>
                </div>
            </div>
            <div class="page_row">
                <div class="story_info animation_block left_animation">
                    <div class="banner_inner">
                        <h1 class="page_title">Why Choose YourJets?</h1>
                        <div class="inner_description">
                            YourJets has taken what used to be a daunting process of flying and driving to more out of
                            the way locations and has turned it into a fast and easy process. The YourJets app allows
                            tourists to think of a travel destination, look it up and book it in a matter of minutes.
                            <br/>
                            <br/>
                            From there all that's required of the traveler is to pack their bags and make their dinner
                            reservations. YourJets handles the itinerary, travel arrangements and can even provide
                            transportation to and from the jet. Quick trips in style have never been so easy to make
                            happen.
                        </div>
                    </div>
                </div>
                <div class="image_block animation_block right_animation">
                    <img src="/images/The-First-Ever-Private-Jet-Shuttle-Flights-Between-Ibiza-and-Mykonos-1200x900 1.png"
                         class="banner_inner" alt="" title=""/>
                </div>
            </div>
        </div>
        <div class="order_table">
            <div class="custom_container">
                <div class="animation_block bottom_animation">
                    <div class="banner_inner">
                        <div class="page_title">How much does it cost to charter a private jet to Ibiza?</div>
                        <div class="inner_description">To charter a private jet charter to Ibiza it cost from € 4,610 from Palma, up to € 19,950 from London.</div>
                    </div>
                </div>
                <div class="order_history_block animation_block bottom_animation">
                    <ul class="order_details_titles banner_inner">
                        <li class="order_from">FROM</li>
                        <li class="order_to">TO</li>
                        <li class="order_aircraft">AIRCRAFT</li>
                        <li class="order_seats">SEATS</li>
                        <li class="order_price">ESTIMATED PRICE</li>
                    </ul>
                    <ul class="order_lists banner_inner">
                        <li class="order_drop_row">
                            <ul>
                                <li data-title="FROM" class="order_from">London</li>
                                <li data-title="TO" class="order_to">Ibiza</li>
                                <li data-title="AIRCRAFT" class="order_aircraft">Citation CJ2 Light Jet</li>
                                <li data-title="SEATS" class="order_seats">6</li>
                                <li data-title="ESTIMATED PRICE" class="order_price">€ 11,550</li>
                            </ul>
                        </li>
                        <li class="order_drop_row">
                            <ul>
                                <li data-title="FROM" class="order_from">London</li>
                                <li data-title="TO" class="order_to">Ibiza</li>
                                <li data-title="AIRCRAFT" class="order_aircraft">Phenom 100 Very Light Jet</li>
                                <li data-title="SEATS" class="order_seats">3</li>
                                <li data-title="ESTIMATED PRICE" class="order_price">€ 17,50</li>
                            </ul>
                        </li>
                        <li class="order_drop_row">
                            <ul>
                                <li data-title="FROM" class="order_from">London</li>
                                <li data-title="TO" class="order_to">Ibiza</li>
                                <li data-title="AIRCRAFT" class="order_aircraft">Citation CJ2 Light Jet</li>
                                <li data-title="SEATS" class="order_seats">2</li>
                                <li data-title="ESTIMATED PRICE" class="order_price">€ 74,550</li>
                            </ul>
                        </li>
                        <li class="order_drop_row">
                            <ul>
                                <li data-title="FROM" class="order_from">London</li>
                                <li data-title="TO" class="order_to">Ibiza</li>
                                <li data-title="AIRCRAFT" class="order_aircraft">Phenom 100 Very Light Jet</li>
                                <li data-title="SEATS" class="order_seats">6</li>
                                <li data-title="ESTIMATED PRICE" class="order_price">€ 50,550</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@section('body-js')
<script src="{{asset('js/main.js')}}"></script>
@endsection
@include('templates/footer')
