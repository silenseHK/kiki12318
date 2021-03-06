<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kharna-Admin Dashboard</title>

    <!--Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

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

</head>

<body class="bg-primary">
<div id="app">
    <section class="section section-2">
        <div class="container">
            <div class="row">
                <div class="single-page single-pageimage construction-bg cover-image " data-image-src="/admin/assets/img/news/img14.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="wrapper wrapper2">
                                <form id="login" class="card-body" tabindex="500">
                                    <h3>Login</h3>
                                    <div class="mail">
                                        <input type="text" name="account">
                                        <label>Phone or Email</label>
                                    </div>
                                    <div class="passwd">
                                        <input type="password" name="password">
                                        <label>Password</label>
                                    </div>
                                    <div class="submit">
                                        <a class="btn btn-primary btn-block" href="javascript:;" onclick="doLogin();">Login</a>
                                    </div>
                                    <p class="mb-2"><a href="forgot.html" >Forgot Password</a></p>
                                    <p class="text-dark mb-0">Don't have account?<a href="register.html" class="text-primary ml-1">Sign UP</a></p>
                                </form>
                                <div class="card-body border-top">
                                    <a class="btn  btn-social btn-facebook btn-block"><i class="fa fa-facebook"></i> Sign in with Facebook</a>
                                    <a class="btn  btn-social btn-google btn-block mt-2"><i class="fa fa-google-plus"></i> Sign in with Google</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="log-wrapper text-center">
                                <img src="/admin/assets/img/brand/logo-white.png" class="mb-2 mt-4 mt-lg-0 " alt="logo">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                <a class="btn btn-primary mt-3" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

<script src="/admin/assets/js/moment.min.js"></script>

<!--mCustomScrollbar js-->
<script src="/admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--Sidemenu js-->
<script src="/admin/assets/plugins/toggle-menu/sidemenu.js"></script>

<!--Scripts js-->
<script src="/admin/assets/js/scripts.js"></script>
<script src="/admin/layer/layer.js"></script>
<script src="/admin/js/myPost.js"></script>
<script src="/admin/js/reg.js"></script>
<script src="/admin/js/login.js"></script>

</body>
</html>