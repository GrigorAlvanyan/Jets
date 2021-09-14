@section('css')
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/why_jets.css')}}">
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/jquery.form-validator.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.js')}}"></script>
@endsection
@include('templates/header')
<div class="content why_jets_page">
    <div class="contents_scroll">
        <div class="animation_block fade_animation">
            <div class="banner_inner">
                <div class="main_block">
                    <div class="main_img">
{{--                        {{dd($page->file)}}--}}
                        <img src="{{asset('images/pages/' . $page->file->name)}}" title="" alt=""/>
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
                    <div class="jet_block">
                        <div class="info_jet animation_block left_animation">
                            <div class="banner_inner">
                                <h1 class="page_title">{{$section1->title}}</h1>
                                <div class="inner_description">
                                    {{$section1->summary}}
                                </div>
                            </div>
                        </div>
                        <div class="images_jet animation_block right_animation">
                            <div class="banner_inner">
                                <img class="large_img" src="/images/pexels-rodnae-productions-5778298 (1) 1.png" title="" alt="" />
                                <img  class="small_img" src="/images/pexels-rodnae-productions-5778305 1.png" title="" alt="" />
                            </div>
                        </div>
                    </div>
                @endif
            @endif



            @if(isset($statistics))
            <div class="statistics_block">
                    <div class="head_block animation_block fade_animation">
                        <div class="banner_inner">
                            <h1 class="page_title">{{$statistics->title}}</h1>
                            <div class="page_description">
                                {{$statistics->summary}}
                            </div>
                        </div>
                    </div>
                <div class="statistics_inner animation_block bottom_animation">
                    <div class="banner_inner">
                        <ul class="office_params">
                            <li>
                                <div class="size_block">
                                    <span class="num_block" data-num="{{$statistics->private_jets}}"></span>
                                    <div class="param_type">Private jets</div>
                                </div>

                            </li>
                            <li>
                                <div class="size_block">
                                    <span class="num_block" data-num="{{$statistics->flights_per_day}}"></span>
                                    <div class="param_type">Flights per day</div>
                                </div>

                            </li>
                            <li>
                                <div class="size_block">
                                    <span class="num_block" data-num="{{$statistics->professionals}}"></span>
                                    <div class="param_type">Professionals</div>
                                </div>
                            </li>
                        </ul>
                        <img class="statistics_img" src="/images/How-To-Fly-By-Private-Jet-During-The-COVID-19-Pandemic.png" alt="" title="" />
                    </div>
                </div>
            </div>
            @endif
        </div>

        <div class="slider_jets">
            <div class="custom_container">
                @if(isset($pageBlock1))
                    <div class="head_block animation_block fade_animation">
                        <div class="banner_inner">
                            <h1 class="page_title">{{$pageBlock1->title}}</h1>
                            <div class="page_description">
                                {!! $pageBlock1->summary !!}
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
                                    <img src="/images/martyna-bober-yd1_Tupnls4-unsplash 1.png" alt="" title="{{$destination->title}}"/>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@section('body-js')
<script src="{{asset('js/main.js')}}"></script>
@endsection
@include('templates/footer')
