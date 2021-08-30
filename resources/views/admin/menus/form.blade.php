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

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/admin-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
@include('admin.header')
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('admin.sidebar')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
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
                                <h4 class="card-title">Create partner</h4>
                            </div>

                            <div class="card-body">
                                @include('forms.messages')
                                @if(isset($menu))
                                    <form class="form" method="POST" action="{{route('menus.update', ['menu'=>$menu->id])}}">
                                        {{method_field('PUT')}}
                                        @else
                                            <form class="form" method="POST" action="/admin/menus">
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
                                                                   value="{{isset($menu) ? $menu->title : old('title')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <input type="text" id="status" class="form-control" placeholder="Status" name="status"
                                                                   value="{{isset($menu) ? $menu->status : old('status')}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="position">Position</label>
                                                            <input type="text" id="position" class="form-control" placeholder="Position" name="position"
                                                                   value="{{isset($partner) ? $partner->position : old('position')}}" />
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
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="/admin-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="/admin-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="/admin-assets/vendors/js/extensions/toastr.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/admin-assets/js/core/app-menu.js"></script>
<script src="/admin-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="/admin-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
<!-- END: Page JS-->

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
