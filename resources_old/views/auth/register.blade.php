<!doctype html>
<html class="no-js " lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Internal Example">

    <title>:: Internal Example :: Sign Up</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('register') }}" class="card auth_form">
                    @csrf
                    <div class="header">
                        <img class="logo" src="{{asset('assets/images/logo.jpeg')}}" alt="">
                        <h5>Sign Up</h5>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control"
                                   placeholder="Enter Your Password">
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="#" class="forgot" title="Forgot Password"><i
                                            class="zmdi zmdi-lock"></i></a></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="Confirm Password">
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="#" class="forgot" title="Forgot Password"><i
                                            class="zmdi zmdi-lock"></i></a></span>
                            </div>
                        </div>
                        <div class="checkbox">
                            <input id="remember_me" type="checkbox">
                            <label for="remember_me">Remember Me</label>
                        </div>
                        <button type="submit" href="index.html"
                                class="btn btn-primary btn-block waves-effect waves-light">SIGN Up
                        </button>
{{--                                                <div class="signin_with mt-3">--}}
{{--                                                    <p class="mb-0">or Sign Up using</p>--}}
{{--                                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round facebook"><i class="zmdi zmdi-facebook"></i></button>--}}
{{--                                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round twitter"><i class="zmdi zmdi-twitter"></i></button>--}}
{{--                                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round google"><i class="zmdi zmdi-google-plus"></i></button>--}}
{{--                                                </div>       <div class="signin_with mt-3">--}}
{{--                                                    <p class="mb-0">or Sign Up using</p>--}}
{{--                                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round facebook"><i class="zmdi zmdi-facebook"></i></button>--}}
{{--                                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round twitter"><i class="zmdi zmdi-twitter"></i></button>--}}
{{--                                                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round google"><i class="zmdi zmdi-google-plus"></i></button>--}}
{{--                                                </div>--}}
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    ,
                    <span><a href="#">Internal Example</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{asset('assets/images/signin.svg')}}" alt="Sign In"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
</body>


</html>


