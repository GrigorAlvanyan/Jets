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
            <div class="field_block width_full icon_path1 from_block">
                <div class="after_click_input">
                    <label>
                        <div>
                            <img src="https://www.qcadvisor.com/wp-content/uploads/2019/09/pngtree-vector-location-icon-png-image_317888.jpg" alt="">
                        </div>
                        <div>
                            <input type="text" name="from" autocomplete="off"/>
                        </div>
                    </label>
                </div>

                <label class="before_click_input">
                    <span class="placeholder_input">FROM</span>
                    <input type="text" name="from" autocomplete="off" class="before_click_input"/>
                </label>
                <div class="from_results" style="display: none">
                    <ul>
                        <li>
                            <div class="from_results-block">
                                <div class="block-left">
                                    <p class="block-left-country">
                                        <img src="https://iconarchive.com/download/i109144/wikipedia/flags/GE-Georgia-Flag.ico" alt="">
                                        <span>GEORGIA</span>
                                    </p>
                                    <p class="block-left-airport">Tbilisi airport</p>
                                    <p class="block-left-countryCity">Tbilisi, Georgia</p>
                                </div>
                                <div class="block-right">
                                    <p class="block-right-airportName">
                                        ASD LASD
                                    </p>
                                    <p class="block-right-airportIcon">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plane-departure" class="svg-inline--fa fa-plane-departure fa-w-20 fa-fw " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 1800"><path fill="currentColor" d="M624 448H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h608c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM80.55 341.27c6.28 6.84 15.1 10.72 24.33 10.71l130.54-.18a65.62 65.62 0 0 0 29.64-7.12l290.96-147.65c26.74-13.57 50.71-32.94 67.02-58.31 18.31-28.48 20.3-49.09 13.07-63.65-7.21-14.57-24.74-25.27-58.25-27.45-29.85-1.94-59.54 5.92-86.28 19.48l-98.51 49.99-218.7-82.06a17.799 17.799 0 0 0-18-1.11L90.62 67.29c-10.67 5.41-13.25 19.65-5.17 28.53l156.22 98.1-103.21 52.38-72.35-36.47a17.804 17.804 0 0 0-16.07.02L9.91 230.22c-10.44 5.3-13.19 19.12-5.57 28.08l76.21 82.97z"></path></svg>
                                    </p>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="from_results-block">
                                <div class="block-left">
                                    <p class="block-left-country">
                                        <img src="https://iconarchive.com/download/i109144/wikipedia/flags/GE-Georgia-Flag.ico" alt="">
                                        <span>GEORGIA</span>
                                    </p>
                                    <p class="block-left-airport">Tbilisi airport</p>
                                    <p class="block-left-countryCity">Tbilisi, Georgia</p>
                                </div>
                                <div class="block-right">
                                    <p class="block-right-airportName">
                                        ASD LASD
                                    </p>
                                    <p class="block-right-airportIcon">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plane-departure" class="svg-inline--fa fa-plane-departure fa-w-20 fa-fw " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 1800"><path fill="currentColor" d="M624 448H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h608c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM80.55 341.27c6.28 6.84 15.1 10.72 24.33 10.71l130.54-.18a65.62 65.62 0 0 0 29.64-7.12l290.96-147.65c26.74-13.57 50.71-32.94 67.02-58.31 18.31-28.48 20.3-49.09 13.07-63.65-7.21-14.57-24.74-25.27-58.25-27.45-29.85-1.94-59.54 5.92-86.28 19.48l-98.51 49.99-218.7-82.06a17.799 17.799 0 0 0-18-1.11L90.62 67.29c-10.67 5.41-13.25 19.65-5.17 28.53l156.22 98.1-103.21 52.38-72.35-36.47a17.804 17.804 0 0 0-16.07.02L9.91 230.22c-10.44 5.3-13.19 19.12-5.57 28.08l76.21 82.97z"></path></svg>
                                    </p>
                                </div>

                            </div>
                        </li>

                    </ul>
                </div>

            </div>


            <script>
                $('.from_block').on('click', function () {
                    $('.from_results').css('display', 'block');
                    $('.after_click_input').css('display', 'block');
                    $('.before_click_input').css('display', 'none');

                })


                // $(document).click(function(event) {
                //     var $target = $(event.target);
                //
                //     if(!$target.closest('.after_click_input').length > 0) {
                //         $('.from_results').css('display', 'none');
                //         $('.after_click_input').css('display', 'none');
                //         $('.before_click_input').css('display', 'block');
                //     } else {
                //         $('.from_results').css('display', 'block');
                //         $('.after_click_input').css('display', 'block');
                //         $('.before_click_input').css('display', 'none');
                //     }
                // });

            </script>


            <style>
                .after_click_input {
                    display: none;
                }

                .after_click_input label {
                    display: block;
                }

                .after_click_input img {
                    width: 30px;
                    height: 30px;
                }

                .after_click_input label input {
                    width: 100%;
                    padding-left: 10px;
                    max-height: 63px;
                }



                .from_results {
                    width: 100%;
                    font-size: 14px;
                    min-height: 75px;
                    background-color: #fff;
                    z-index: 1000;
                    position: absolute;
                    -webkit-flex-direction: column;
                    flex-direction: column;
                    box-shadow: 0 26px 65px 0 rgb(0 0 0 / 30%), 0 18px 26px 0 rgb(0 0 0 / 20%);
                }

                .from_results ul {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-flex-direction: column;
                    flex-direction: column;
                    box-shadow: inset 0 1px 0 0 rgb(0 0 0 / 5%);
                    -webkit-flex: 1;
                    flex: 1 1;
                    overflow: hidden;
                }

                .from_results ul li {
                    padding: 10px;
                    border: 1px solid #eee;
                    margin: 0;
                    box-shadow: inset 0 1px 0 0 rgb(0 0 0 / 5%);
                    -webkit-flex: 1;
                    flex: 1 1;
                    cursor: pointer;
                }

                .from_results ul li:hover {
                    background-color: #eee;
                }

                .from_results-block {
                    display: flex;
                }

                .from_results-block {
                    min-height: 75px;
                    position: relative;
                }

                .block-left {
                    position: absolute;
                    left: 0;
                    width: 70%;
                }

                .block-left p {
                    margin: 0;
                    margin-bottom: 10px;
                    font-size: 15px;

                }

                .block-left .block-left-country {
                    margin-bottom: 13px;
                    font-weight: bold;
                }

                .block-left .block-left-country img {
                    width: 20px;
                    height: 20px;
                    margin-right: 5px;
                }

                .block-right {
                    position: absolute;
                    right: 0;
                    width: 30%;
                    text-align: right;
                }

                .block-right-airportName {
                    font-weight: bold;
                }
            </style>




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
