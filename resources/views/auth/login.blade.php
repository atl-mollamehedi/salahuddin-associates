

<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
        
<meta property="og:image" content="https://demopharma.ayaantec.com/public/pharmacy-new.jpg" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Pharmacy Software solution is built to manage overall pharmacy business activities including medicine management, purchase management, supplier or manufacturers management, stock management, sales management, daily or monthly accounts management. Most importantly follow up the low stock medicine manage purchase from manufacturers, manage the customers and manufacturers due payment. This software is easy to use and manage with easy medicine search, easy invoice creation, pharmacy faster daily operation and date wise details report.">
    <meta name="keywords" content="Complete Pharmacy Software Solutions, web app">
    <meta name="author" content="PIXINVENT">
    <title>ATL-Pharma</title>
    <link rel="apple-touch-icon" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="https://demopharma.ayaantec.com/public/dashboard/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo">
                          <!--<img src="{{asset('backend_asset/assets/images/porto.png')}}" height="24" width="24">-->
                          <!--  <h2 class="brand-text ms-1 text-uppercase" style="color:#ffffff;">ATL-Pharma</h2>-->
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <!--<div class="d-none d-lg-flex col-lg-8 align-items-center"  style="background:#fff">-->
                        <!--    <div class="w-100 d-lg-flex align-items-center justify-content-center"><img class="" style="object-fit: cover; width:100%; height: 100%" src="{{asset('backend_asset/assets/images/businessman.jpg')}}" alt="ATL-Pharma" /></div>-->
                        <!--</div>-->
                        
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5" style="background:#596ca0">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{asset('backend_asset/assets/images/meta-tag.png')}}" alt="ATL-Pharma"></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5 ">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1 text-black text-uppercase">Welcome to ATL-Porto.</h2>
                                <p class="card-text mb-2 text-black">Please sign-in to your account.</p>
                                <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                                    @csrf
                                       <div class="mb-1">
                                        <label class="form-label text-black" for="login-email">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" autofocus/>
                                         @error('email')-->
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label text-black" for="login-password">Password</label>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" type="password"/>
                                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                             @error('password')-->
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                 @enderror
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember" name="remember" id="remember" />
                                            <label class="form-check-label text-black" for="remember-me"> Remember Me </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-dark w-100 text-black" tabindex="4">Sign in</button>
                                    
                                </form>
                              <div class="mb-1 mt-4">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td style="padding-left:5px !important; padding-right:5px !important; color:#ffffff">admin@gmail.com</td>
                                            <td style="padding-left:5px !important; padding-right:5px !important; color:#ffffff">123456789</td>
                                            <td style="padding-left:5px !important; padding-right:5px !important; color:#ffffff"><button class="btn btn-dark" onclick="autoFill()">Copy</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                               
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="https://demopharma.ayaantec.com/public/dashboard/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="https://demopharma.ayaantec.com/public/dashboard/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="https://demopharma.ayaantec.com/public/dashboard/app-assets/js/core/app-menu.js"></script>
    <script src="https://demopharma.ayaantec.com/public/dashboard/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="https://demopharma.ayaantec.com/public/dashboard/app-assets/js/scripts/pages/auth-login.js"></script>
    <!-- END: Page JS-->
<script type="text/javascript">
        function autoFill(){
            $('#email').val('admin@gmail.com');
            $('#password').val('123456789');
        }
    </script>
   
</body>
<!-- END: Body-->

</html>

















<!--<section id="wrapper">-->
<!--    <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">-->
<!--        <div class="login-box card">-->
<!--            <div class="card-body">-->
<!--                <form class="form-horizontal form-material" id="loginform" action="{{ route('login')}}" method="post">-->
<!--                    @csrf-->
<!--                    <h3 class="text-center m-b-20">Sign In</h3>-->
<!--                    <div class="form-group ">-->
<!--                        <div class="col-xs-12">-->
<!--                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">-->

<!--                                @error('email')-->
<!--                                    <span class="invalid-feedback" role="alert">-->
<!--                                        <strong>{{ $message }}</strong>-->
<!--                                    </span>-->
<!--                                @enderror </div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <div class="col-xs-12">-->
<!--                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">-->

<!--                                @error('password')-->
<!--                                    <span class="invalid-feedback" role="alert">-->
<!--                                        <strong>{{ $message }}</strong>-->
<!--                                    </span>-->
<!--                                @enderror </div>-->
<!--                    </div>-->
<!--                    <div class="form-group row">-->
<!--                        <div class="col-md-12">-->
<!--                            <div class="d-flex no-block align-items-center">-->
<!--                                <div class="custom-control custom-checkbox">-->
<!--                                    <input type="checkbox" class="custom-control-input" id="customCheck1">-->
<!--                                    <label class="custom-control-label" for="customCheck1">Remember me</label>-->
<!--                                </div> -->
<!--                                <div class="ml-auto">-->
<!--                                    <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Forgot pwd?</a> -->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group text-center">-->
<!--                        <div class="col-xs-12 p-b-20">-->
<!--                            <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
<!--                <div>-->
<!--                    <p>User Email = admin@gmail.com</p>-->
<!--                    <p>Password = 123456789</p>-->
<!--                </div>-->
<!--                <form class="form-horizontal" id="recoverform" action="index.html">-->
<!--                    <div class="form-group ">-->
<!--                        <div class="col-xs-12">-->
<!--                            <h3>Recover Password</h3>-->
<!--                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group ">-->
<!--                        <div class="col-xs-12">-->
<!--                            <input class="form-control" type="text" required="" placeholder="Email"> </div>-->
<!--                    </div>-->
<!--                    <div class="form-group text-center m-t-20">-->
<!--                        <div class="col-xs-12">-->
<!--                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->



<!--{{-- <div class="container">-->
<!--    <div class="row justify-content-center">-->
<!--        <div class="col-md-8">-->
<!--            <div class="card">-->
<!--                <div class="card-header">{{ __('Login') }}</div>-->

<!--                <div class="card-body">-->
<!--                    <form method="POST" action="{{ route('login') }}">-->
<!--                        @csrf-->

<!--                        <div class="row mb-3">-->
<!--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>-->

<!--                            <div class="col-md-6">-->
<!--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>-->

<!--                                @error('email')-->
<!--                                    <span class="invalid-feedback" role="alert">-->
<!--                                        <strong>{{ $message }}</strong>-->
<!--                                    </span>-->
<!--                                @enderror-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="row mb-3">-->
<!--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>-->

<!--                            <div class="col-md-6">-->
<!--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">-->

<!--                                @error('password')-->
<!--                                    <span class="invalid-feedback" role="alert">-->
<!--                                        <strong>{{ $message }}</strong>-->
<!--                                    </span>-->
<!--                                @enderror-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="row mb-3">-->
<!--                            <div class="col-md-6 offset-md-4">-->
<!--                                <div class="form-check">-->
<!--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->

<!--                                    <label class="form-check-label" for="remember">-->
<!--                                        {{ __('Remember Me') }}-->
<!--                                    </label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="row mb-0">-->
<!--                            <div class="col-md-8 offset-md-4">-->
<!--                                <button type="submit" class="btn btn-primary">-->
<!--                                    {{ __('Login') }}-->
<!--                                </button>-->

<!--                                @if (Route::has('password.request'))-->
<!--                                    <a class="btn btn-link" href="{{ route('password.request') }}">-->
<!--                                        {{ __('Forgot Your Password?') }}-->
<!--                                    </a>-->
<!--                                @endif-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div> --}}-->