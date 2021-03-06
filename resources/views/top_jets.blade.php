@section('css')
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/top_jets.css')}}">
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.form-validator.js')}}"></script>
@endsection
@include('templates/header')
<div class="content top_jets_page">
    <div class="contents_scroll">
        <div class="animation_block fade_animation">
            <div class="banner_inner">
                <div class="main_block">
                    <div class="main_img">
                        <img src="images/Mask Group.png" title="" alt=""/>
                    </div>
                    <div class="custom_container">
                        <div class="main_info">
                            <div class="main_title">{{$jetPage->title}}</div>
                            <div class="inner_description">
                                {{$jetPage->summary}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_container">
            <div class="our_blocks">
                <h1 class="page_title">HERE ARE OUR TOP JETS</h1>
                <div class="jets_list">
                    <ul class="inner_list">
                        @forelse($topJets as $jet)
                        <li>
                            <div class="our_block">
                                <div class="img_block_our">
                                    <a href="jets_inner.php"><img src="images/image 23.png" title="" alt="" /></a>
                                </div>
                                <div class="our_info">
                                    <a href="{{route('show_jet', ['slug'=> $jet->slug])}}" class="section_subtitle">{{ $jet->title }}</a>
                                    <div class="jet_text">Seats:<span>{{ $jet->seats }}</span></div>
                                    <div class="jet_text">Speed:<span>{{ $jet->speed }}</span></div>
                                    <div class="jet_text">Range:<span>{{ $jet->range }}</span></div>
                                    <div class="inner_description">
                                        {!! $jet->summary !!}
                                    </div>
                                </div>
                            </div>
                        </li>
                            @empty
                            @endforelse
                    </ul>
                </div>

                {{ $topJets->links()}}

            </div>
        </div>
    </div>
</div>
@section('body-js')
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/top_jets.js')}}"></script>
@endsection
@include('templates/footer')
