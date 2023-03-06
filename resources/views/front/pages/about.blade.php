@extends('front.layouts.front_app')
@section('front_content')
<section id="breadcumb">
    <div class="row">
        <div class="col-lg-12">
            <div class="blog_hero_banner">


                <div class="bread">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </div>

            </div>

        </div>
    </div>
  </section>
    <!-- Start About Area -->
    @if (section__status('About') == 1)
    <section class="about-area pt-40 page_top_space" id="about">
        <div class="container">
            <div class="row">
                <!-- About Image -->
                <div class="col-lg-5 mb-40">
                    <div class="about__area_img">
                    <div class="about-img wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset(setting()->about_image) }}" alt="img">
                    </div>
                </div>
                </div>
                <!-- About Content -->
                <div class="col-lg-7 align-self-center mb-40">
                    <div class="about-content wow fadeInUp">
                        <h4 class="left-border-s">{{ __("About Us") }}</h4>
                        <h2>{{ setting()->about_title }}</h2>
                        <p class="text-justify">{{ setting()->about_description }}</p>
                        <a class="button-1" download="" href="{{  asset(setting()->cv) }}">{{ __("Download CV") }}</a>
                        <div class="row">
                            <!-- row -->
                            <div class="col-md-6 col-sm-12">
                                <!-- col-6 -->
                                <div class="about-cn">
                                    <ul>
                                        <li><i class="fas fa-user-tie"></i> {{ setting()->name }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i> {{ setting()->address }}</li>
                                    </ul>
                                </div>
                            </div> <!-- end col-6 -->
                            <div class="col-md-6 col-sm-12">
                                <!-- col-6 -->
                                <div class="about-cn">
                                    <ul>
                                        
                                        <li><i class="far fa-envelope"></i>{{ setting()->email }}</li>
                                        <li><i class="fab fa-whatsapp"></i> {{ setting()->number }}</li>
                                    </ul>
                                </div>
                            </div> <!-- end col-6 -->
                        </div>
                    </div>
                </div>
                <!-- About Your Skill -->
                @if (section__status('Skill') == 1)
                <div class="col-lg-12 mb-40">
                    <div class="about-your-skill">
                        <div class="row">
                            @foreach ($skills as $skill)
                            <div class="col-md-6">
                                <!-- Single -->
                                <div class="progress-bars wow fadeInUp" data-wow-delay=".1s">
                                    <div class="single-progress">
                                        <h3>{{ $skill->name }}</h3>
                                        <div class="progress">
                                            <div class="progress-bar wow" style="width: {{ $skill->percentage }}%">
                                                <span class="percent" color="{{ $skill->color_dark }}" data="{{ $skill->color_dark }}">{{ $skill->percentage }}%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                <!-- Counter Area -->
                @if (section__status('Achievement') == 1)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-headding mb-40 text-center">
                            <h2>{{ __("Our Achievement") }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($achievements as $achievement)
                    <!-- Counter ITEM -->
                    <div class="col-lg-3 col-sm-6 mb-30">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="{{ $achievement->icon }}"></i>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <h2 class="counter">{{ $achievement->count }}</h2>
                                </div>
                                <p>{{ $achievement->name }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                <!-- Counter Area -->
            </div>
        </div>
    </section>
    @endif
<!-- End Contact Area -->
@endsection