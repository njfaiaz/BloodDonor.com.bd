<!doctype html>
<html class="no-js " lang="en">

<head>
    @stack('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/plugins/charts-c3/plugin.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/plugins/morrisjs/morris.min.css') }}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.min.css') }}">

    <title>@yield('title', 'Admin')</title>
</head>

<body class="theme-blush">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48"
                    alt="Aero"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- Main Search -->
    <div id="search">
        <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
        <form>
            <input type="search" value="" placeholder="Search..." />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Left sidebar menu -->
    @include('layouts.admin.leftSidebarMenu')
    <!-- right sidebar menu -->
    @include('layouts.admin.rightSidebarMenu')

    <!-- main content start -->
    @yield('content')
    <!-- Jquery Core Js -->
    <script src="{{ asset('admin/bundles/libscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="{{ asset('admin/bundles/vendorscripts.bundle.js') }}"></script>
    <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="{{ asset('admin/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
    <script src="{{ asset('admin/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
    <script src="{{ asset('admin/bundles/c3.bundle.js') }}"></script>

    <script src="{{ asset('admin/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/pages/index.js') }}"></script>


    @stack('footer_scripts')

</body>

</html>
