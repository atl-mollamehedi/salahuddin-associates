@extends('front.layouts.front_app');
@section('front_content')
    <!-- Start Hero Area -->
    @if (section__status('Banner') == 1)
    <section class="hero-area section-bg" id="home">
        <div class="">
            <div class="row m-0">
                <!-- Hero Content -->
                <div class="col-lg-6 order-lg-first order-last align-self-center d-flex justify-content-center ">
                    <div class="hero-caption w-50">
                        <h4 class="left-border-s text-white">{{ __('Hello') }}</h4>
                        <h2 class=" text-white">{{ setting()->banner_name }}</h2>
                        <p class=" text-white">{{  setting()->banner_description }}</p>
                        <button class="button-1">Contact Us</button>
                   </div>
                </div>
                <!-- Hero Image -->
                <div class="col-lg-6 align-self-end p-0">
                    <div class="hero-image">
                        {{-- @foreach ($sliders as $slider) --}}
                        <img src="{{ asset($sliders->photo) }}" alt="img" class="">
                        {{-- @endforeach --}}
                       <!-- Image -->

                    </div>

                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- End Hero Area -->


<div id="support">
    <div class="container">
         <!-- Counter Area -->
 <div class="row">
    <!-- Counter ITEM -->
    <div class="col-lg-4 col-sm-4 mb-30">
        <div class="counter-item">
            <div class="icon">
                <i class="fa fa-hand-holding-usd"></i>
            </div>
            <div class="content">
                <div class="title">
                    <h2 class="counte">Saving Strategies</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit sed do eiusmod tempor incididunt ut labore et</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4 mb-30">
        <div class="counter-item center">
            <div class="icon">
                <i class="fa fa-book-reader"></i>
            </div>
            <div class="content">
                <div class="title">
                    <h2 class="counte">Competitive Price</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit sed do eiusmod tempor incididunt ut labore et</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4 mb-30">
        <div class="counter-item">
            <div class="icon">
                <i class="fa fa-chalkboard-teacher"></i>
            </div>
            <div class="content">
                <div class="title">
                    <h2 class="counte">24/7 Support</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit sed do eiusmod tempor incididunt ut labore et</p>
            </div>
        </div>
    </div>
</div>
<!-- Counter Area -->
    </div>
</div>

    <!-- Start About Area -->
    @if (section__status('About') == 1)
    <section class="about-area pt-40 {{ section__status('Banner') === 2? 'mt-70':'' }}" id="about">
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
                        <h4 class="left-border-s">{{ __("About Me") }}</h4>
                        <h2>{{ setting()->about_title }}</h2>
                        <p class="text-justify">{{ setting()->about_description }}</p>
                        <a class="button-1" download="" href="{{  asset(setting()->cv) }}"> <i class="fas fa-download"></i>{{ __(" Company Profile") }}</a>
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
            </div>
        </div>
    </section>
    @endif

    <!-- End About Area -->
    <!-- Start Services Area -->
    @if (section__status('Service') == 1)
    <section class="services-area pt-40 pb-20" id="services">
        <div class="container">
            <!-- Section Headding -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-headding mb-40 text-center">
                        <h2>{{ __("Our Services") }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services->take(3) as $service)
                <!-- Services Single -->
                <div class="col-lg-4 col-md-6 mb-30 custom_services">
                    <div class="services_bg_img">
                        <img src="{{asset('uploads/services/services1.jpg')}}" alt="service img">
                        <div class="services-box">
                            <div class="icon">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <h2>{{ $service->name }}</h2>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- End Services Area -->
    <!-- Start Resume Area -->
    @if (section__status('Resume') == 1)
    <section class="resume-area pt-20 pb-20">
        <div class="container">
            <!-- Section Headding -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-headding mb-40 text-center">
                        <h2>{{ __("My Resume") }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="resume-box">
                        <h3>{{ __('Education') }} </h3>
                        <div class="resume__list">
                            @foreach ($resumes_educations as $resumes_education)

                            <!-- Single -->
                            <div class="single-resume__list  wow fadeInUp">
                                <div class="year">
                                    <span>{{ date('Y',strtotime($resumes_education->start_date)) }}- {{ date('Y',strtotime($resumes_education->end_date)) }}</span>
                                </div>
                                <h4 class="university-name">{{ $resumes_education->orgamization }}</h4>
                                <p class="degree">{{ $resumes_education->experience }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="resume-box">
                        <h3>{{ __("Experience") }}  </h3>
                        <div class="resume__list">
                            @foreach ($resumes_experiences as $resumes_experience)
                            <!-- Single -->
                            <div class="single-resume__list  wow fadeInUp">
                                <div class="year">
                                    <span>{{ date('Y',strtotime($resumes_experience->start_date)) }}- {{ date('Y',strtotime($resumes_experience->end_date)) }}</span>
                                </div>
                                <h4 class="university-name"> {{ $resumes_experience->orgamization }} </h4>
                                <p class="degree">{{ $resumes_experience->experience }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- End Resume Area -->
    <!-- Start Portfolio Area -->
    @if (section__status('Portfolio') == 1)
    <section class="portfolio-area pt-20 pb-20" id="portfolio">
        <div class="container">
            <!-- Section Headding -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-headding mb-40 text-center">
                        <h2>{{ __("Our Portfolio") }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="portfolio-category mb-40 text-center">
                    <ul>
                        <li data-filter="all">{{ __("All") }}</li>
                        @foreach ($categories as $category)

                        <li data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="row portfolio-full portF">
                    @foreach ($portfolios as $portfolio)
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30 mix {{$portfolio->category->slug}}">
                        <div class="portfolio-item">
                            <img src="{{ asset('uploads/portfolio') }}/{{ $portfolio->image }}" alt="{{ $portfolio->image }}">
                            <div class="portfolio-item-overly">
                                <div class="portfolio-item-overly-full">
                                    <a href="jqury:0;" data-bs-toggle="modal" data-bs-target="#portfoliod_{{ $portfolio->id }}"><i
                                            class="fas fa-search-plus"></i></a>
                                    <a href="{{ $portfolio->link }}" >
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('front.includes.portfolio')
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- Start Hero Area -->
    <section class="hero-area   section-bg" id="project_done">
        <div class="">
            <div class="row m-0">
                <!-- Hero Content -->
                <div class="col-lg-6 order-lg-first order-last align-self-center d-flex justify-content-center ">
                    <div class="hero-caption w-75">
                        <div class="experience_slide">
                            <h4 class="left-border-s text-white">{{ __('Our Diversified Experiences With Happy Clients') }}</h4>
                        <h2 class=" text-white"> Banks and Financial Institution </h2>
                       <ul style="list-style:circle;color:white">
                        <li>The Hongkong and Shanghai Banking Corporation Ltd.(HSBC), Bangladesh Branch </li>
                        <li>CitiBank N.A.</li>
                        <li>Standard Chartered Bank</li>
                        <li>IDLC finance limited </li>
                        <li>IPDC </li>
                       </ul>
                        <button class="button-1">Contact Us</button>
                        </div>
                   </div>
                </div>
                <!-- Hero Image -->
                <div class="col-lg-6 align-self-end p-0">
                    <div class="hero-image">
                        {{-- @foreach ($sliders as $slider) --}}
                        <img src="{{ asset($sliders->photo) }}" alt="img" class="">
                        {{-- @endforeach --}}
                       <!-- Image -->

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <!-- End Portfolio Area -->

    <!-- Start Latest Blog Area -->
    @if (section__status('Blog') == 1)
    <section class="pt-20 pb-20 blog-area" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-headding mb-40 text-center">
                        <h2>{{ __("Latest blog") }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                <!-- Single -->
                @if ($blog->type == 1)
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#blog_{{ $blog->id }}">
                                <img src="{{ asset($blog->photo) }}" alt="blog">
                            </a>
                        </div>
                        <div class="content">
                            <div class="meta">
                                <span><a href="javascript:void(0)"><i class="fas fa-user"></i> by: {{ $blog->user->name }}</a></span>
                                <span><a href="javascript:void(0)"><i class="fas fa-tags"></i>
                                    @php
                                    $tages = json_decode($blog->tage, true);
                                   $tage_data = '';
                                     @endphp
                                     @foreach($tages as $tage)
                                     @php
                                         print_r($tage.' ');
                                     @endphp
                                     @endforeach
                                </a></span>
                            </div>
                            <h2 class="title"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blog_{{ $blog->id }}">{{ $blog->name }} </a></h2>
                            <p>{{ Str::limit($blog->description, 45) }} </p>
                            <div class="btm-meta">
                                <div class="date">
                                    <span><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('Y M d') }}</span>
                                </div>
                                <div class="read-more">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blog_{{ $blog->id }}">{{ __("Read More") }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#blog_{{ $blog->id }}">
                                <iframe src="{{ $blog->link }}" class="blog__ifram" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </a>
                        </div>
                        <div class="content">
                            <div class="meta">
                                <span><a href="javascript:void(0)"><i class="fas fa-user"></i> by: {{ $blog->user->name }}</a></span>
                                <span><a href="javascript:void(0)"><i class="fas fa-tags"></i>
                                    @php
                                    $tages = json_decode($blog->tage, true);
                                   $tage_data = '';
                                     @endphp
                                     @foreach($tages as $tage)
                                     @php
                                         print_r($tage.' ');
                                     @endphp
                                     @endforeach
                                </a></span>
                            </div>
                            <h2 class="title"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blog_{{ $blog->id }}">{{ Str::limit($blog->name, 22) }} </a></h2>
                            <p>{{ Str::limit($blog->description, 45) }}</p>
                            <div class="btm-meta">
                                <div class="date">
                                    <span><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('Y M d') }}</span>
                                </div>
                                <div class="read-more">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blog_{{ $blog->id }}">{{ __('Read More') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @include('front.includes.blog')
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- End Latest Blog Area -->
        <!-- Start Testimonial Area -->
        @if (section__status('Review') == 1)
        <section class="testimonial-area pt-20 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-headding mb-40 text-center">
                            <h2>{{ __("Reviews") }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="testimonial-full owl-carousel">
                        @foreach ($testimonials as $testimonial)
                        <!-- Single -->
                        <div class="testimonial-item">
                            <div class="thumbnail">
                                <img src="{{ asset($testimonial->photo) }}" alt="">
                            </div>
                            <div class="content">
                                @if ($testimonial->type == 1)
                                <img class="pb-3" src="{{ asset($testimonial->review_photo) }}" alt="" height="90"/>
                                @else
                                <p>{{ $testimonial->review_text }}</p>
                                @endif

                                <h2>{{ $testimonial->name }}</h2>
                                <h4>{{ $testimonial->title }}</h4>
                            </div>
                            <div class="btm-big-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @endif



@endsection
