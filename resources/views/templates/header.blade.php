<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="format-detection" content="telephone=no"/>
    <title>Home Page</title>
    @section('css')
    @show

    @include('templates/favicons')

    @section('js')
    @show
</head>
<body>
<div class="header <?php if (strpos($_SERVER['SCRIPT_FILENAME'], 'privacy_policy.php') == true) echo 'one_header' ?>">
    <div class="header_inner">
        <div class="custom_container">
            <div class="main_logo">
                <?php if( strpos($_SERVER['SCRIPT_FILENAME'], 'index.php') == false):?> <a href="index.php"><?php endif?>
                    <img class="logo_standard" src="../css/images/logo.png" alt="" title=""/>
                    <img class="one_logo" src="../css/images/footer_logo.png" alt="" title=""/>
                    <?php if( strpos($_SERVER['SCRIPT_FILENAME'], 'index.php') == false):?> </a><?php endif?>
            </div>
            <div class="menu_block">
                <div class="menu_inner">
                    <ul class="main_menu">
                        @foreach($menus->where('title','header') as $menu)
{{--                            {{dd($menu->menuLinks)}}--}}
                            @foreach($menu->menuLinks as $link)
                                @php($hasChildrens = isset($link->childrens) && count($link->childrens) > 0)
                                <li>
                                    <a href="{{$link->url}}" class="{{$hasChildrens ? 'submenu_btn' : ''}}">{{$link->title}}</a>
                                    @if($hasChildrens)
                                        <ul class="submenu_list">
                                            @foreach($link->childrens as $child)
                                                <li><a href="{{$child->url}}">{{$child->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        @endforeach

                    </ul>
                </div>
            </div>
            <a href="contact_private.php" class="book_btn">BOOK A JET</a>
            <button class="menu_btn"><span></span></button>
        </div>
    </div>
</div>




