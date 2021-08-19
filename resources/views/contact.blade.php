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
@include('templates/header')
<div class="content">
    <div class="contents_scroll">
        <div class="contact_page">
            <div class="custom_container">
                <div class="page_row">
                    <div class="contact_info animation_block left_animation">
                        <div class="banner_inner">
                            <h1 class="main_title">Contact</h1>
                            <ul class="contact_list">
                                <li>
                                    <div class="section_subtitle">Address</div>
                                    <div class="standard_text">Los Angeles, CA 90035 USA</div>
                                </li>
                                <li>
                                    <div class="section_subtitle">Tel</div>
                                    <a href="tel:+37491599000" class="phone_link standard_text">+ (374) 91599000</a>
                                </li>
                                <li>
                                    <div class="section_subtitle">Email address</div>
                                    <a href="" class="standard_text">travelerman0770@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact_form animation_block right_animation">
                        <div class="banner_inner">
                            <div class="inner_description">Message a Private Aviation Advisor.</div>
                            <form>
                                <div class="inner_form">
                                    <div class="field_block standard_input">
                                        <select class="ignore" name="name" data-validation="required">
                                            <option value="1">Male</option>
                                            <option value="2">Gender</option>
                                        </select>
                                        <span class="error_hint">mandatory field</span>
                                    </div>
                                    <div class="field_block standard_input">
                                        <input type="text" name="name" placeholder="Name" autocomplete="off" data-validation="required"/>
                                        <span class="error_hint">mandatory field</span>
                                    </div>
                                    <div class="field_block">
                                        <input type="text" name="email" placeholder="Email Address" autocomplete="off" data-validation="email"/>
                                        <span class="error_hint">
										<span class="standard_hint">mandatory field</span>
										<span class="individual_hint">invalid email</span>
									</span>
                                    </div>
                                    <div class="field_block full_field">
                                        <textarea name="message" placeholder="How may we help you?" autocomplete="off" data-validation="required"></textarea>
                                        <span class="error_hint">mandatory field</span>
                                    </div>
                                    <button type="submit"  class="validate_btn">SEND MESSAGE</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="map_block animation_block bottom_animation" data-coords="40.183355, 44.515851">
                    <div class="banner_inner">
                        <div id="map-canvas"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('body-js')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
@endsection
@include('templates/footer')
