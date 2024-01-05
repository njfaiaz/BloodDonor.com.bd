<!doctype html>
<html class="no-js " lang="en">

<head>
    @stack('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.min.css') }}">

    <title>@yield('title', 'Admin')</title>
</head>

<body class="theme-blush">

    @yield('content')


    @stack('script')
</body>

</html>
