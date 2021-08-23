@section('css')
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact_info.css')}}">
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.min.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.js')}}"></script>
    <script src="{{asset('js/jquery.form-validator.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
@endsection')}}
@include('../templates/header')
<div class="content">
    <div class="contact_info_page contact_private">
        <div class="custom_container">
            <h1 class="main_title">{{$page->title}}</h1>
            <div class="page_title">{!! $page->summary !!}</div>
            <div class="inner_description">{{$page->body}}</div>
            @include('../form')
            @if(isset($pageSections) && count($pageSections) > 0)
                @if($section1 = $pageSections->where('position', 1)->first())
                    <div class="bottom_block">
                        <a href="/" class="standard_text icon_left">{{$section1->title}}</a>
                        <div class="standard_text">{{$section1->summary}}<a href="{{$section1->youtube_id}}" class="phone_link"></a></div>
                    </div>
                @endif
            @endif
        </div>
    </div>
</div>
@section('body-js')
<script src="js/main.js"></script>
<script src="js/contact_info.js"></script>
@endsection
@include('../templates/footer')
