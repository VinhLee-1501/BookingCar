<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('meta_title', 'BeeCar')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin/images/logos/favicon.png') }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"/>
    <link rel="stylesheet" href="{{ asset('admin/css/styles.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin/css/PT.css') }}">

</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <x-Admin.Sidebar></x-Admin.Sidebar>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <x-Admin.Header></x-Admin.Header>
        <!--  Header End -->
        <div class="container-fluid">
            <!--  body -->
            @yield('content')
            <x-Admin.Footer></x-Admin.Footer>
        </div>
    </div>
</div>
<script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('admin/js/app.min.js') }}"></script>
<script src="{{ asset('admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/libs/simplebar/dist/simplebar.js') }}"></script>
<script src="{{ asset('admin/js/dashboard.js') }}"></script>

</body>

</html>
