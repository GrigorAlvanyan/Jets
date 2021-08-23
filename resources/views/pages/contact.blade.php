@section('css')
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/jquery.form-validator.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.js')}}"></script>
    <script src="{{asset('https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyAJIk0uOuhLnht2g6fYVM_L-tlrKKrxELE')}}"></script>
@endsection
@include('../templates/header')
<div class="content">
    <div class="contents_scroll">
        <div class="contact_page">
            <div class="custom_container">
                <div class="page_row">
                    <div class="contact_info animation_block left_animation">
                        <div class="banner_inner">
                            <h1 class="main_title">{{$page->title}}</h1>
                            <ul class="contact_list">
                                @if(!empty($contacts))
                                    <li>
                                        <div class="section_subtitle">Address</div>
                                        <div class="standard_text">{{$contacts->address}}</div>
                                    </li>
                                    <li>
                                        <div class="section_subtitle">Tel</div>
                                        <a href="{{$contacts->phone}}" class="phone_link standard_text">{{$contacts->phone}}</a>
                                    </li>
                                    <li>
                                        <div class="section_subtitle">Email address</div>
                                        <a href="{{$contacts->email}}" class="standard_text">{{$contacts->email}}</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="contact_form animation_block right_animation">
                        <div class="banner_inner">
                            <div class="inner_description">{{$page->summary}}</div>
                            @if(session()->has('message'))
                                {{session()->get('message')}}
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <p><strong>Opps Something went wrong</strong></p>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="{{route('subscribe_request')}}">
                                @csrf
                                <div class="inner_form">
                                    <div class="field_block standard_input">
                                        <select class="ignore" name="sex" data-validation="required">
                                            <option value="male">Male</option>
                                            <option value="female">Gender</option>
                                        </select>
                                        <span class="error_hint">mandatory field</span>
                                    </div>
                                    <div class="field_block standard_input">
                                        <input type="text" name="name" value="{{old('name')}}" placeholder="Name" autocomplete="off" data-validation="required"/>
                                        <span class="error_hint">mandatory field</span>
                                    </div>
                                    <div class="field_block">
                                        <input type="text" name="email" value="{{old('email')}}" placeholder="Email Address" autocomplete="off" data-validation="email"/>
                                        <span class="error_hint">
										<span class="standard_hint">mandatory field</span>
										<span class="individual_hint">invalid email</span>
									</span>
                                    </div>
                                    <div class="field_block full_field">
                                        <textarea name="messages" placeholder="How may we help you?" autocomplete="off" data-validation="required">
                                            {{old('messages')}}
                                        </textarea>
                                        <span class="error_hint">mandatory field</span>
                                    </div>
                                    <button type="submit"  class="validate_btn">SEND MESSAGE</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if(!empty($contacts))
                    <div class="map_block animation_block bottom_animation" data-coords="{{$contacts->latitude}}, {{$contacts->longitude}}}}">
                        <div class="banner_inner">
                            <div id="map-canvas"></div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@section('body-js')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
@endsection
@include('../templates/footer')
