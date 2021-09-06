@section('css')
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/jets_inner.css')}}">
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.form-validator.js')}}"></script>
@endsection
@include('templates/header')
<div class="content top_jets_inner">
    <div class="contents_scroll">
        <div class="animation_block fade_animation">
            <div class="banner_inner">
                @if(isset($jet))
                    <div class="main_block">
                        <div class="main_img">
                            <img src="/images/{{$jet->image_id}}.png" title="" alt=""/>
                        </div>
                        <div class="custom_container">
                            <div class="main_info">
                                <div class="main_title">{{$jet->title}}</div>
                                <div class="inner_description">
                                    {{$jet->summary}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="jets_inner_block">
            <div class="custom_container">
                <h1 class="page_title">Performance and Specifications</h1>
                <div class="inner_block">
                    <div class="animation_block fade_animation">
                        <ul class="list_jets banner_inner">
                            <li>
                                <div class="jets_blocks">
                                    <div class="jet_text">Manufacturer:</div>
                                    <div class="jet_text">{{$topJet->manufacturer}}</div>
                                </div>
                            </li>
                            <li>
                                <div class="jets_blocks">
                                    <div class="jet_text">Height:</div>
                                    <div class="jet_text">{{ $topJet->height }}</div>
                                </div>
                            </li>

                            <li>
                                <div class="jets_blocks">
                                    <div class="jet_text">Speed:</div>
                                    <div class="jet_text">{{ $topJet->speed }}</div>
                                </div>
                            </li>

                            <li>
                                <div class="jets_blocks">
                                    <div class="jet_text">Range:</div>
                                    <div class="jet_text">{{ $topJet->range }}</div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="animation_block bottom_animation">
                        <img src="/images/hawker_750-07-1280.png" class="banner_inner" alt="" title=""/>
                    </div>
                </div>
            </div>
            <div class="specifications_block">
                <div class="custom_container">
                    <div class="head_block animation_block fade_animation">
                        <div class="banner_inner">
                            <h1 class="page_title">{{ $topJet->cabin->title }}</h1>
                            <div class="page_description">
                                {!! $topJet->cabin->summary !!}
                            </div>
                        </div>
                    </div>
                    <div class="page_row">
                        <div class="info_block animation_block left_animation">
                            <div class="statistics_inner banner_inner">
                                <ul class="office_params">
                                    <li>
                                        <div class="size_block">
                                            <span class="num_block" data-num="{{  $topJet->cabin->seats }}"></span>
                                            <div class="param_type">Seats</div>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="size_block">
                                            <span class="num_block" data-num="{{  $topJet->cabin->suitcase }}"></span>
                                            <div class="param_type">Suitcase</div>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="size_block">
                                            <span class="num_block" data-num="{{  $topJet->cabin->carry_on }}"></span>
                                            <div class="param_type">Carry-on</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <img src="/images/hawker-750-int.png" class="banner_inner" alt="" title=""/>
                        </div>
                        <div class="image_block animation_block right_animation">
                            <img src="/images/hawker-700-750-2.png" class="banner_inner" alt="" title=""/>
                        </div>
                    </div>
                    <div class="animation_block bottom_animation">
                        <ul class="list_jets banner_inner">
                            <li>
                                <div class="jets_blocks">
                                    <div class="jet_text">Manufacturer:</div>
                                    <div class="jet_text">{{  $topJet->cabin->manufacturer }}</div>
                                </div>
                            </li>
                            <li>
                                <div class="jets_blocks">
                                    <div class="jet_text">Height:</div>
                                    <div class="jet_text">{{  $topJet->cabin->height }}</div>
                                </div>
                            </li>
                            <li>
                                <div class="jets_blocks">
                                    <div class="jet_text">Speed:</div>
                                    <div class="jet_text">{{  $topJet->cabin->speed }}</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="destinations_jets">
                <div class="custom_container">
                    <a href="{{route('books')}}" class="btn_view">BOOK A JET</a>
                </div>
            </div>
        </div>
    </div>
</div>
@section('body-js')
    <script src="{{asset('js/main.js')}}"></script>
@endsection
@include('templates/footer')
