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
@include('../templates/header')
<div class="content our_company">
    <div class="contents_scroll">
        <div class="animation_block fade_animation">
            <div class="banner_inner">
                <div class="main_block">
                    <div class="main_img">
                        <img src="/images/private-jet-costs-1140x600.png" title="" alt=""/>
                    </div>
                    <div class="custom_container">
                        <div class="main_info">
                            <div class="main_title">{{$page->title}}</div>
                            <div class="inner_description">
                                {{$page->summary}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_container">

            @if(isset($pageSections) && count($pageSections) > 0)
                @if($section1 = $pageSections->where('position', 1)->first())
                    <div class="block_story">
                        <div class="inner_story">
                            <div class="story_info animation_block left_animation">
                                <div class="banner_inner">
                                    <h1 class="page_title">{{$section1->title}}</h1>
                                    <div class="inner_description">
                                       {!! $section1->summary !!}
                                    </div>
                                </div>
                            </div>
                            <div class="story_img animation_block right_animation">
                                <div class="banner_inner">
                                    <img src="/images/Zurich-to-Mykonos-Private-Jet-Charter-824x522.png" title="" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                    @if($section2 = $pageSections->where('position', 2)->first())
                        <div class="jets_main animation_block bottom_animation">
                            <div class="banner_inner">
                                <div class="page_title">{{$section2->title}}</div>
                                <div class="inner_description">
                                    {!! $section2->summary !!}
                                </div>
                                <img src="/images/1-cx0cy1130cw4256ch1702q85w1920h0.png" title="" alt="" />
                            </div>
                        </div>
                    @endif
                @if($section3 = $pageSections->where('position', 3)->first())
                <div class="premium_block">
                    <div class="page_title">{{$section3->title}}</div>
                    <div class="inner_description">{{$section3->summary}}</div>
                    <div class="premium_img">
                        <div class="animation_block left_animation "><img src="/images/pexels-rodnae-productions-5778717.png" class="banner_inner" title="" alt="" /></div>
                        <div class="animation_block bottom_animation"><img src="/images/pexels-rodnae-productions-5778563.png" class="banner_inner" title="" alt="" /></div>
                        <div class="animation_block right_animation"><img src="/images/pexels-rodnae-productions-5778661.png" class="banner_inner" title="" alt="" /></div>
                    </div>


                </div>
                @endif
                @if($section4 = $pageSections->where('position', 4)->first())
                    <div class="comfort_block animation_block fade_animation">
                        <div class="banner_inner">
                            <a data-fancybox href="{{$section4->youtube_id}}">
                                <img src="/images/PrivateJetDecoder-2021-XO 1.png" alt="" title=""/>
                                <span class="video_btn"></span>
                            </a>
                        </div>
                    </div>
                @endif
            @endif


                <div class="partners_block animation_block">
                    <div class="banner_inner">
                        <div class="page_title">OUR PARTNERS</div>
                        <ul class="list_partners">
                            @forelse($partners as $partner)
                                <li>
                                    <div class="img_partners">
                                        <a href="{{$partner->url}}">
                                            <img src="/images/image 10.png" title="" alt="" />
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
@section('body-js')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/index.js')}}"></script>
@endsection
@include('../templates/footer')


