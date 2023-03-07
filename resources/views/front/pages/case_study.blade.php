@extends('front.layouts.front_app')
@section('front_content')

<section id="breadcumb">
    <div class="row">
        <div class="col-lg-12">
            <div class="blog_hero_banner">


                <div class="bread">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Case Study</li>
                    </ol>
                </div>

            </div>

        </div>
    </div>
  </section>

<section class="services-area pt-40 pb_350" id="services">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-headding mb-40 text-center">
                   <p>Case Studies</p>
                    <h2>Project We Have Done</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($casestudies as $casestudy)
            <!-- Services Single -->
            <div class="col-lg-4 col-md-6 mb-30 custom_services">
                <div class="services_bg_img">
                    <a href="{{route('front.cs_details', $casestudy->id)}}"><img src="{{asset('uploads/services/services1.jpg')}}" alt="service img"></a>
                    <div class="services-box">
                        <div class="icon">
                            <i class=""></i>
                        </div>
                        <a href="{{route('front.cs_details', $casestudy->id)}}"><h2>{{$casestudy->name}}</h2></a>
                        <a href="{{route('front.cs_details', $casestudy->id)}}"><p >{{$casestudy->description}}</p></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- End Contact Area -->
@endsection
