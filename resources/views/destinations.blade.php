@section('css')
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/destinations.css')}}">
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.min.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.js')}}"></script>
    <script src="{{asset('js/jquery.form-validator.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.js')}}"></script>
@endsection
@include('templates/header')
<div class="content destinations_page">
    <div class="contents_scroll">
        <div class="animation_block fade_animation">
            <div class="banner_inner">
                <div class="main_block">
                    <div class="main_img">
                        <img src="images/private-jet-costs-1140x600.png" title="" alt=""/>
                    </div>
                    <div class="custom_container">
                        <div class="main_info form_blocks">
                            <div class="main_title">DESTINATIONS</div>
                        </div>
                    </div>
                    @include('form')
                </div>
            </div>
        </div>
        <div class="custom_container">
            @if(isset($block))
                <div class="head_block animation_block fade_animation">
                    <div class="banner_inner">
                        <h1 class="page_title">{{$block->title}}</h1>
                        <div class="page_description">
                            {!! $block->summary !!}
                        </div>
                    </div>
                </div>
            @endif
            <div class="destination_block">
                <div class="filter_list animation_block left_animation">
                    <div class="banner_inner filter_block">
                        <ul class="inner_filter">
                            <li class="{{request()->has('continent') && !empty(request()->continent) ? '' : 'active_btn'}}">
                                <a href="{{ request()->fullUrlWithQuery(['continent' => '', 'country' => '']) }}">ALL</a>
                            </li>
                            @forelse($continents as $continent)
                                <li class="{{request()->has('continent') && request()->continent == $continent->id ? 'active_btn' : ''}}"><a href="{{ request()->fullUrlWithQuery(['continent' => $continent->id, 'country' => '']) }}" >{{$continent->title}}</a></li>
                                @empty
                            @endforelse
                        </ul>
                    </div>
                    <div class="field_block animation_block right_animation">
                        <div class="banner_inner">
                            <select class="ignore" id="country" name="name" data-validation="required">
                                @forelse($countries as $country)
                                    <option
                                    {{request()->has('country') && !empty(request()->country) && request()->country == $country->id ? 'selected' : '' }}
                                    value="{{ request()->fullUrlWithQuery(['country' => $country->id]) }}">{{$country->title}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
                <div class="destinations_inner">
                    <ul class="city_list">
                        @forelse($destinations as $destination)
                        <li>
                            <div class="city_inner">
                                <a href="{{route('show_destination', ['slug'=> $destination->slug])}}" class="img_block"><img src="images/image {{$destination->image_id}}.png" title="" alt=""/></a>
                                <a href="{{route('show_destination', ['slug'=> $destination->slug])}}" class="destinations_name">{{$destination->title }}</a>
                            </div>
                        </li>
                        @empty
                        @endforelse
                    </ul>

                        <div class="paging">
                        <ul>
                            <li><a href="" class="prev_page inactive">Back</a></li>
                            <li><a href="total" class="current_page">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li>...</li>
                            <li><a href="">5</a></li>
                            <li><a href="" class="next_page">Next</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@section('body-js')
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/destination.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('#country').on('change', function() {
                var href = $(this).find(":selected").val();

                window.location.href = href;
            })
        })
    </script>
@endsection
@include('templates/footer')
