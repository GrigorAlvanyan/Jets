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
                                <h4 class="card-title">Create country</h4>
                            </div>

                            <div class="card-body">
                                @include('forms.messages')
                                @if(isset($country))
                                    <form class="form" method="POST" action="{{route('countries.update', ['country'=>$country->id])}}">
                                        {{method_field('PUT')}}

                                        @else
                                            <form class="form" method="POST" action="/admin/countries">
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
                                                            <label for="image_id">Image Id</label>
                                                            <input type="text" id="image_id" class="form-control" placeholder="Image Id" name="image_id"
                                                                   value="{{isset($country) ? $country->image_id : old('image_id')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="continent_id">Continent Id</label>
                                                            <input type="text" id="continent_id" class="form-control" placeholder="Continent Id" name="continent_id"
                                                                   value="{{isset($country) ? $country->continent_id : old('continent_id')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" id="title" class="form-control" placeholder="Title" name="title"
                                                                   value="{{isset($country) ? $country->title : old('title')}}" />
                                                        </div>
                                                    </div>
                                                    @if(isset($continents) && $continents->count())
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="model">Continent</label>
                                                                <select class="form-control" id="cont" name="continent_id">
                                                                    <option default>Select</option>
                                                                    @foreach($continents as $continent)
                                                                        <option value="{{$continent->id}}" {{isset($country) && $country->continent_id == $continent->id ? 'selected' : ''}}>{{$continent->title}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    @endif
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
