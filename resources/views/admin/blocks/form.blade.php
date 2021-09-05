<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="/admin-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/admin-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    @include('admin.main_styles.forms.css')

</head>
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

@include('admin.header')

@include('admin.sidebar')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create block</h4>
                            </div>

                            <div class="card-body">
                                @include('forms.messages')
                                @if(isset($block))
                                    <form class="form" method="POST" action="{{route('blocks.update', ['block'=>$block->id])}}">
                                        {{method_field('PUT')}}
                                        @else
                                            <form class="form" method="POST" action="/admin/blocks">
                                                @endif
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" id="title" class="form-control" placeholder="Title" name="title"
                                                                   value="{{isset($block) ? $block->title : old('title')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="slug">Slug</label>
                                                            <input type="text" id="slug" class="form-control" placeholder="Slug" name="slug"
                                                                   value="{{isset($block) ? $block->slug : old('slug')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="show_on_home">Show On Home</label>
                                                            <input type="text" id="show_on_home" class="form-control" placeholder="Show On Home" name="show_on_home"
                                                                   value="{{isset($block) ? $block->show_on_home : old('show_on_home')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="summary">Summary</label>
                                                            <textarea class="form-control" id="summary" rows="3" placeholder="Summary" name="summary">{{isset($block) ? $block->summary : old('summary')}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="youtube_link">Youtube Link</label>
                                                            <input type="text" id="youtube_link" class="form-control" placeholder="Youtube Link" name="youtube_link"
                                                                   value="{{isset($block) ? $block->youtube_link : old('youtube_link')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="url">Url</label>
                                                            <input type="text" id="url" class="form-control" placeholder="Url" name="url"
                                                                   value="{{isset($block) ? $block->url : old('url')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="url_title">Url Title</label>
                                                            <input type="text" id="url_title" class="form-control" placeholder="Url Title" name="url_title"
                                                                   value="{{isset($block) ? $block->url_title : old('url_title')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="image_id">Image Id</label>
                                                            <input type="text" id="image_id" class="form-control" placeholder="Image Id" name="image_id"
                                                                   value="{{isset($block) ? $block->image_id : old('image_id')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="created_at">Created at</label>
                                                            <input type="text" id="created_at" class="form-control" placeholder="Created at" name="created_at"
                                                                   value="{{isset($block) ? $block->created_at : old('created_at')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="model">Model</label>
                                                            <select class="form-control" id="model" name="model">
                                                                <option selected default>Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                                    </div>
                                                </div>
                                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>

@include('admin.main_styles.forms.js')

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>
