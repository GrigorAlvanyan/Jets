<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

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
                                <h4 class="card-title">Create jet</h4>
                            </div>

                            <div class="card-body">
                                @include('forms.messages')
                                @if(isset($jet))
                                    <form class="form" method="POST" action="{{route('jets.update', ['jet'=>$jet->id])}}">
                                        {{method_field('PUT')}}
                                        @else
                                     <form class="form" method="POST" action="/admin/jets">
                                @endif
                                    @csrf
                                    <div class="row">
{{--                                        <div class="col-md-6 col-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label for="image">Image</label>--}}
{{--                                                <input type="image" id="image" class="form-control" placeholder="Image" name="image"--}}
{{--                                                       value="{{isset($page) ? $page->title : old('title')}}" />--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" class="form-control" placeholder="Title" name="title"
                                                       value="{{isset($jet) ? $jet->title : old('title')}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="slug">Slug</label>
                                                <input type="text" id="slug" class="form-control" placeholder="Slug" name="slug"
                                                       value="{{isset($jet) ? $jet->slug : old('slug')}}"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="is_top">Is top</label>
                                                <input type="text" id="is_top" class="form-control" placeholder="Is top" name="is_top"
                                                       value="{{isset($jet) ? $jet->is_top : old('is_top')}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="manufacturer">Manufacturer</label>
                                                <input type="text" id="manufacturer" class="form-control" placeholder="Manufacturer" name="manufacturer"
                                                       value="{{isset($jet) ? $jet->manufacturer : old('manufacturer')}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="speed">Speed</label>
                                                <input type="text" id="speed" class="form-control" placeholder="Speed" name="speed"
                                                       value="{{isset($jet) ? $jet->speed : old('speed')}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="height">Height</label>
                                                <input type="text" id="height" class="form-control" placeholder="Height" name="height"
                                                       value="{{isset($jet) ? $jet->height : old('height')}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="range">Range</label>
                                                <input type="text" id="range" class="form-control" placeholder="Range" name="range"
                                                       value="{{isset($jet) ? $jet->range : old('range')}}" />
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
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->

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
