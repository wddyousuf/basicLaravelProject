<!doctype html>
<html lang="en" class="fixed accounts sign-in">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/') }}assets/backend/favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/') }}assets/backend/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/') }}assets/backend/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}assets/backend/favicon/favicon-16x16.png">
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/backend/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/backend/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/backend/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/backend/stylesheets/css/style.css">
</head>

<body>
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body animated slideInDown">
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--LOGO-->
        <div class="logo">
            <img alt="logo" src="{{ asset('/') }}assets/backend/images/logo-dark.png" />
        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="remember-me" value="option1" checked>
                                <label class="check" for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sign In" name="submit" class="btn btn-primary btn-block">
                        </div>
                        <div class="form-group text-center">
                            <a href="">Forgot password?</a>
                            <hr/>
                             <span>Don Not have an account?</span>
                            <a href="{{ route('register') }}" class="btn btn-block mt-sm">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>
</div>
<!--BASIC scripts-->
<!-- ========================================================= -->
<script src="{{ asset('/') }}assets/backend/vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="{{ asset('/') }}assets/backend/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets/backend/vendor/nano-scroller/nano-scroller.js"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="{{ asset('/') }}assets/backend/javascripts/template-script.min.js"></script>
<script src="{{ asset('/') }}assets/backend/javascripts/template-init.min.js"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
</body>

</html>
