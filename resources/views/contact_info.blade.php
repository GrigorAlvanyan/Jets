@section('css')
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact_info.css')}}">
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/jquery.form-validator.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.js')}}"></script>
    <script src="{{asset('js/intlInput.js')}}"></script>
@endsection
@include('templates/header')
<div class="content">
    <div class="contact_info_page">
        <div class="custom_container">
            <h1 class="main_title">Request your next flight</h1>
            <div class="page_title">Contact <br /> information</div>
            <div class="inner_description">* Prices for a private jet flight start as low as 2,500€/hour up to 10,000€/hour, depending on your aircraft size.</div>
            <form>
                <div class="inner_form">
                    <div class="field_block standard_input">
                        <select class="ignore" name="name" data-validation="required">
                            <option value="1">Italy</option>
                            <option value="2">England</option>
                            <option value="3">Austria</option>
                            <option value="4">France</option>
                            <option value="5">Spain</option>
                            <option value="6">Brazil</option>
                            <option value="7">Portugal</option>
                            <option value="8">Italy</option>
                            <option value="9">England</option>
                            <option value="10">Austria</option>
                            <option value="11">France</option>
                            <option value="12">Spain</option>
                            <option value="13">Brazil</option>
                            <option value="14">Portugal</option>
                        </select>
                        <span class="error_hint">mandatory field</span>
                    </div>
                    <div class="field_block standard_input">
                        <input type="text" name="name" placeholder="Name" autocomplete="off" data-validation="required"/>
                        <span class="error_hint">mandatory field</span>
                    </div>
                    <div class="field_block standard_input">
                        <input type="text" name="name" placeholder="Last name" autocomplete="off" data-validation="required"/>
                        <span class="error_hint">mandatory field</span>
                    </div>
                    <div class="field_block standard_input">
                        <input type="text" name="email" placeholder="Email Address" autocomplete="off" data-validation="email"/>
                        <span class="error_hint">
										<span class="standard_hint">mandatory field</span>
										<span class="individual_hint">invalid email</span>
									</span>
                    </div>
                    <div class="field_block standard_input">
                        <input type="tel" autocomplete="off" placeholder="Phone number" oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                               class="telephone_block" data-validation="email"/>
                        <span class="error_hint">mandatory field</span>
                    </div>
                    <div class="field_block full_field">
                        <textarea name="message" placeholder="Additional info" autocomplete="off" data-validation="required"></textarea>
                        <span class="error_hint">mandatory field</span>
                    </div>
                    <button type="submit" class="validate_btn">CONFIRM</button>
                    <button class="reset_btn" type="reset">CLEAR FORM</button>
                </div>
            </form>
            <div class="bottom_block">
                <a href="" class="standard_text icon_left">Back to home page</a>
                <div class="standard_text">Need help?<a href="tel:+37491599000" class="phone_link">+374 91599000</a></div>
            </div>
        </div>
    </div>
</div>
@section('body-js')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/contact_info.js')}}"></script>
@endsection
@include('templates/footer')
