<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <title>Kharna-Admin Dashboard</title>

    <!--favicon -->
    <link rel="icon" href="/admin/assets/img/favicon.ico" type="image/x-icon"/>

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="/admin/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!--Icons css-->
    <link rel="stylesheet" href="/admin/assets/css/icons.css">

    <!--Style css-->
    <link rel="stylesheet" href="/admin/assets/css/style.css">

    <!--mCustomScrollbar css-->
    <link rel="stylesheet" href="/admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

    <!--Sidemenu css-->
    <link rel="stylesheet" href="/admin/assets/plugins/toggle-menu/sidemenu.css">

    <!--Morris css-->
    <link rel="stylesheet" href="/admin/assets/plugins/morris/morris.css">

</head>

<body class="app ">

<div id="spinner"></div>

<div id="app">
    <div class="main-wrapper" >

        @include('admin.public.navbar')

        @include('admin.public.sidebar')

        <div class="app-content">
            <section class="section">

                @include('admin.public.breadcrumb')

                @yield('content')

            </section>
        </div>

        @include('admin.public.footer')
    </div>
</div>

<!--Jquery.min js-->
<script src="/admin/assets/js/jquery.min.js"></script>

<!--popper js-->
<script src="/admin/assets/js/popper.js"></script>

<!--Tooltip js-->
<script src="/admin/assets/js/tooltip.js"></script>

<!--Bootstrap.min js-->
<script src="/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!--Jquery.nicescroll.min js-->
<script src="/admin/assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

<!--Scroll-up-bar.min js-->
<script src="/admin/assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

<!--mCustomScrollbar js-->
<script src="/admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--Sidemenu js-->
<script src="/admin/assets/plugins/toggle-menu/sidemenu.js"></script>

<!--Jquery.knob js-->
<script src="/admin/assets/plugins/othercharts/jquery.knob.js"></script>

<!--Jquery.sparkline js-->
<script src="/admin/assets/plugins/othercharts/jquery.sparkline.min.js"></script>

<!--othercharts js-->
<script src="/admin/assets/js/othercharts.js"></script>

<!--Morris js-->
<script src="/admin/assets/plugins/morris/morris.min.js"></script>
<script src="/admin/assets/plugins/morris/raphael.min.js"></script>

<!--Scripts js-->
<script src="/admin/assets/js/scripts.js"></script>
<script src="/admin/assets/js/apexcharts.js"></script>
<script src="/admin/assets/js/dashboard3.js"></script>
<script src="/admin/layer/layer.js"></script>
<script src="/admin/js/login.js"></script>

@yield('js')

</body>
</html>
