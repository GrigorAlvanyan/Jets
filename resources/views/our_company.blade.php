@section('css')
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/our_company.css')}}">
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/jquery.form-validator.js')}}"></script>
@endsection
@include('templates/header')
<div class="content our_company">
    <div class="contents_scroll">
        <div class="animation_block fade_animation">
            <div class="banner_inner">
                <div class="main_block">
                    <div class="main_img">
                        <img src="images/private-jet-costs-1140x600.png" title="" alt=""/>
                    </div>
                    <div class="custom_container">
                        <div class="main_info">
                            <div class="main_title">OUR MISSION</div>
                            <div class="inner_description">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or randomised
                                words which don't look even slightly believable. If you a
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_container">
            <div class="block_story">
                <div class="inner_story">
                    <div class="story_info animation_block left_animation">
                        <div class="banner_inner">
                            <h1 class="page_title">The Story of YOURJets</h1>
                            <div class="inner_description">
                                Founded in December 2021 by current CEO Eymeric Segard, YourJets has revolutionazed the private jet charter. The first independent website platform to request and hook a private jet.
                                <br />
                                <br />
                                Before us the charter industry was controlled by a cartel of operators and small brokers overcharging in an opaque market. YourJets has contributed to lower the charter prices and to offer real independent services."
                            </div>
                        </div>
                    </div>
                    <div class="story_img animation_block right_animation">
                        <div class="banner_inner">
                            <img src="images/Zurich-to-Mykonos-Private-Jet-Charter-824x522.png" title="" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="jets_main animation_block bottom_animation">
                <div class="banner_inner">
                    <div class="page_title">THIS IS YOURJETS</div>
                    <div class="inner_description">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</div>
                    <img src="images/1-cx0cy1130cw4256ch1702q85w1920h0.png" title="" alt="" />
                </div>
            </div>
            <div class="premium_block">
                <div class="page_title">PREMIUM CLASS SERVICES</div>
                <div class="inner_description">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</div>
                <div class="premium_img">
                    <div class="animation_block left_animation "><img src="images/pexels-rodnae-productions-5778717.png" class="banner_inner" title="" alt="" /></div>
                    <div class="animation_block bottom_animation"><img src="images/pexels-rodnae-productions-5778563.png" class="banner_inner" title="" alt="" /></div>
                    <div class="animation_block right_animation"><img src="images/pexels-rodnae-productions-5778661.png" class="banner_inner" title="" alt="" /></div>
                </div>
                <div class="comfort_block animation_block fade_animation">
                    <div class="banner_inner">
                        <a data-fancybox href="https://www.youtube.com/watch?v=pf3d1zQ2mMM">
                            <img src="images/PrivateJetDecoder-2021-XO 1.png" alt="" title=""/>
                            <span class="video_btn"></span>
                        </a>
                    </div>
                </div>
                <div class="partners_block animation_block">
                    <div class="banner_inner">
                        <div class="page_title">OUR PARTNERS</div>
                        <ul class="list_partners">
                            @forelse($partners as $partner)
                            <li>
                                <div class="img_partners">
                                    <a href="{{$partner->url}}">
                                        <img src="images/image 10.png" title="" alt="" />
                                    </a>
                                </div>
                            </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('body-js')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/index.js')}}"></script>
@endsection
@include('templates/footer')


