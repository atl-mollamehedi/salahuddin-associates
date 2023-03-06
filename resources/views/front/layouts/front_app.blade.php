<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="{{ setting()->meta_author }}">
    <meta name="keywords" content="@foreach (json_decode(setting()->meta_keywords) as $item){{ $item }},@endforeach"/> 
    <meta name="description" content="{{ setting()->meta_description }}" /> 
    <meta property="og:image" content="{{ asset(setting()->meta_photo) }}" />
    <title>{{ __('ATL-Porto') }}</title>
    <link rel="icon" href="{{ asset(setting()->fav_icon) }}" type="image/gif" sizes="16x16" />
 
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/fontawesome.all.min.css" />
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/animate.css" />
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/lightcase.css" />
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/normalize.css" />
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/responsive.css" />
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/custom.css" />
</head>

<body class="">
    @include('front.includes.header')
 
    <!-- End Hero Area -->


    <!-- Start Services Area -->
   @yield('front_content')

    <!-- Start Footer Area -->
    @include('front.includes.footer')
    <!-- End Footer Area -->
    <div class="scroll-area">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- Js File -->
    <script src="{{ asset('front_asset') }}/js/modernizr.min.js"></script>
    <script src="{{ asset('front_asset') }}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('front_asset') }}/js/popper.min.js"></script>
    <script src="{{ asset('front_asset') }}/js/bootstrap.min.js"></script>
    
    <script src="{{ asset('front_asset') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('front_asset') }}/js/jquery.nav.min.js"></script>
    <script src="{{ asset('front_asset') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('front_asset') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('front_asset') }}/js/lightcase.js"></script>
    <script src="{{ asset('front_asset') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('front_asset') }}/js/wow.min.js"></script>
    <script src="{{ asset('front_asset') }}/js/script.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('front_asset') }}/js/typescript.js"></script>
    <script src="{{ asset('front_asset') }}/js/typescript_demo.js"></script>
    <script>
        color('red');
        function color(css_color){
            let percentage = document.querySelector('.parcent')
            console.log(percentage);    
        //    let parcent =  $('.percent').css('background-color','red')
        //    let parcent_border =  $('.percent::after').css('border-color','red')
        //    console.log(parcent);
           
        }
    </script>
{!! Toastr::message() !!}
</body>

</html>
