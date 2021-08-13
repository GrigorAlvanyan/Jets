{{--@foreach($menus->where('title','footer') as $menu)--}}
{{--    @foreach($menu->menuLinks as $link)--}}
{{--        {{dump($link->title)}}--}}
{{--    @endforeach--}}
{{--@endforeach--}}
<div class="footer">
    <div class="footer_inner">
        <div class="custom_container">
            <div class="page_title">JOIN OUR NEWSLETTER</div>
            <form class="subscribe_form">
                <div class="field_block">
                    <div class="inner_field">
                        <input type="text" name="subscribe_email" data-validation="email"
                               placeholder="Enter your email address"/>
                        <button type="submit" class="validate_btn icon_right"></button>
                    </div>
                    <span class="error_hint">
                <span class="standard_hint">mandatory field</span>
                <span class="individual_hint">invalid e-mail format</span>
            </span>
                </div>
            </form>
            <div class="footer_menues">
                <div class="footer_logo">
                    <img src="../css/images/footer_logo.png" title="" alt=""/>
                </div>
                @foreach($menus->where('title','footer') as $menu)
                    @foreach($menu->menuLinks->where('title','SITEMAP') as $link)
                        <div class="middle_lists">
                                <div class="footer_title">{{$link->title}}</div>
                                    @if(isset($link->childrens) && $link->childrens->count())
                                        <ul class="list_menu">
                                            @foreach($link->childrens as $child)
                                                    <li><a href="{{url($child->url)}}">{{$child->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                        </div>
                    @endforeach
                            @foreach($menu->menuLinks->where('title','CONTACTS') as $link)
                                <div class="contact_block">
                                    <div class="footer_title">{{$link->title}}</div>
                                    @if(isset($link->childrens) && $link->childrens->count())
                                            @foreach($link->childrens as $child)
{{--                                                <a href="tel:{{$child->title}}" class="phone_link "> <span>Tel:</span> {{$child->title}}</a>--}}
                                                <a href="tel:{{$child->title}}" class="phone_link "> {{$child->title}}</a>
                                            @endforeach
                                    @endif
                                </div>
                            @endforeach
                        @foreach($menu->menuLinks->where('title','SOCIAL') as $link)
                            <div class="social_block">
                                <div class="footer_title">{{$link->title}}</div>
                                @if(isset($link->childrens) && $link->childrens->count())
                                    @foreach($link->childrens as $child)
                                        <a href="{{url($child->url)}}" target="_blank">{{$child->title}}</a>
                                    @endforeach
                                @endif
                            </div>
                        @endforeach
                @endforeach
            </div>
        </div>
        <div class="footer_bottom">
            <div class="custom_container">
                <div class="copyrights"><span>All Rights Reserved 2021</span></div>
                <div class="developer">Designed and developed by <a href="https://www.studio-one.am" target="_blank">Studio One</a></div>
            </div>
        </div>
    </div>
</div>
