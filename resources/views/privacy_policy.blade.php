@section('css')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/jquery.form-validator.js')}}"></script>
@endsection
@include('templates/header')
<div class="content">
    <div class="contents_scroll">
        <div class="privacy_policy">
            <div class="custom_container">
                <h1 class="main_title">{{$page->title}}</h1>
                <div class="page_title">{{$page->summary}}</div>
                <ul>
                    <li>
                        {!! $page->body !!}
                    </li>
                </ul>
                @if(isset($pageSections) && count($pageSections) > 0)
                    @if($section1 = $pageSections->where('position', 1)->first())
                        <div class="page_title">{{$section1->title}}</div>
                        <div class="inner_description">
                            {{$section1->summary}}
                        </div>
                    @endif
                    @if($section2 = $pageSections->where('position', 2)->first())
                        <div class="page_title">{!! $section2->title !!}</div>
                        <div class="inner_description">
                            {{$section2->summary}}
                        </div>
                    @endif
                @endif
            </div>
            </div>
        </div>
    </div>
</div>
@section('body-js')
<script src="{{asset('js/main.js')}}"></script>
@endsection
@include('templates/footer')

