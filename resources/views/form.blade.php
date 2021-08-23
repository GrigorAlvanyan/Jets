<div class="form_request">
    <div class="custom_container">

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
        <form class="inner_request" method="POST" action="{{route('request_quotes')}}">
            @csrf
            <div class="field_block width_full icon_path1">
                <label>
                    <span class="placeholder_input">FROM</span>
                    <input type="text" name="from" autocomplete="off"/>
                </label>
            </div>
            <div class="field_block width_full icon_path2">
                <label>
                    <span class="placeholder_input">TO</span>
                    <input type="text" name="to" autocomplete="off"/>
                </label>
            </div>
            <div class="field_block date_time">
                <label>
                    <input type="text" class="when_input" placeholder="WHEN" name="when" value="" />
                    <input class="time_picker" data-time-format="H:i" data-step="15" data-min-time="12:00" data-max-time="24:00" type="text" placeholder="TIME" name="time" />
                </label>
            </div>
            <div class="field_block passenger_block icon_group">
                <label>
                    <input type="text" name="passangers_count" placeholder="1" autocomplete="off"/>
                </label>
                <div class="passenger_list">
                    <div class="answer_block">
                        <div class="inner_answer">
                            <div class="inner_description">Adults</div>
                            <div class="product_count">
                                <span class="decrease_btn inactive"></span>
                                <label>
                                    <input type="text" maxlength="3" name="adults"
                                           oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="1"/>
                                </label>
                                <span class="increase_btn"></span>
                            </div>
                        </div>
                        <div class="inner_answer">
                            <div class="inner_description">Children</div>
                            <div class="product_count">
                                <span class="decrease_btn inactive"></span>
                                <label>
                                    <input type="text" maxlength="3" name="childrens"
                                           oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="1"/>
                                </label>
                                <span class="increase_btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn_request">REQUEST QUOTES</button>
        </form>
    </div>
</div>
