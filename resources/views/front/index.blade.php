@extends('front.layouts.front_app')
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
                            <p class=" text-white">{{ setting()->banner_description }}</p>
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
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit sed do eiusmod tempor incididunt ut
                                labore et</p>
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
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit sed do eiusmod tempor incididunt ut
                                labore et</p>
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
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit sed do eiusmod tempor incididunt ut
                                labore et</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Area -->
        </div>
    </div>

    <!-- Start About Area -->
    @if (section__status('About') == 1)
        <section class="about-area pt-40 {{ section__status('Banner') === 2 ? 'mt-70' : '' }}" id="about">
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
                            <h4 class="left-border-s">{{ __('About Me') }}</h4>
                            <h2>{{ setting()->about_title }}</h2>
                            <p class="text-justify">{{ setting()->about_description }}</p>
                            <a class="button-1" download="" href="{{ asset(setting()->cv) }}"> <i
                                    class="fas fa-download"></i>{{ __(' Company Profile') }}</a>
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
                            <h2>{{ __('Our Services') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($services->take(3) as $service)
                        <!-- Services Single -->
                        <div class="col-lg-4 col-md-6 mb-30 custom_services">
                            <div class="services_bg_img">
                                <img src="{{ asset('uploads/services/services1.jpg') }}" alt="service img">
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
                <div class="read_more_button_margin">
                    <a href="{{ route('front.service') }}" class="button-1">Read More</a>
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
                            <h2>{{ __('My Resume') }}</h2>
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
                                            <span>{{ date('Y', strtotime($resumes_education->start_date)) }}-
                                                {{ date('Y', strtotime($resumes_education->end_date)) }}</span>
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
                            <h3>{{ __('Experience') }} </h3>
                            <div class="resume__list">
                                @foreach ($resumes_experiences as $resumes_experience)
                                    <!-- Single -->
                                    <div class="single-resume__list  wow fadeInUp">
                                        <div class="year">
                                            <span>{{ date('Y', strtotime($resumes_experience->start_date)) }}-
                                                {{ date('Y', strtotime($resumes_experience->end_date)) }}</span>
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

    <section class="hero-area   section-bg" id="project_done">
        <div class="container-fluid">
            <div class="row m-0">
                <!-- Hero Content -->
                <div class="col-lg-6 order-lg-first order-last align-self-center d-flex justify-content-center ">
                    <div class="hero-caption w-75 carousel-nav">
                        <div class="experience_slide banner_slider_img  owl-carousel">
                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Experience
                                                                                                                                                ') }}
                                </h4>
                                <h2 class="text-white">Banks and Financial Institution</h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>The Hongkong and Shanghai Banking Corporation Ltd.(HSBC), Bangladesh Branch </li>
                                    <li>CitiBank N.A.</li>
                                    <li>Standard Chartered Bank</li>
                                    <li>IDLC finance limited </li>
                                    <li>IPDC </li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>
                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Experience
                                                                                                                                                ') }}
                                </h4>
                                <h2 class=" text-white">Communication</h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>Orascom Telecom Bangladesh Limited </li>
                                    <li>Alcatel</li>
                                    <li>Ericsson</li>
                                    <li>Grameen Phone Ltd.</li>
                                    <li>IBM India Pvt. Ltd. </li>
                                    <li>Motorola </li>
                                    <li>Siemens Bangladesh Limited </li>
                                    <li>Warid Telecom International Limited </li>
                                    <li>WorldTel Bangladesh Ltd.</li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>
                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Experience
                                                                                                                                                ') }}
                                </h4>
                                <h2 class=" text-white"> Manufacturing </h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>Advanced Chemical Industries Ltd. (ACI) </li>
                                    <li>Bayer CropScience Ltd</li>
                                    <li>Aventis Limited</li>
                                    <li>BASF Bangladesh Ltd </li>
                                    <li>Bata Shoe Co. (Bangladesh) Ltd. </li>
                                    <li>BOC Bangladesh Ltd.</li>
                                    <li>British American Tobacco Bangladesh Company Ltd</li>
                                    <li>Cemex Cement Bangladesh Ltd.</li>
                                    <li>Coats Bangladesh Ltd.</li>
                                    <li>Holcim (Bangladesh) Ltd.</li>
                                    <li>Integrated Beverage Services Bangladesh Ltd.</li>
                                    <li>Karnaphuli Fertilizer Company Ltd.</li>
                                    <li>Nestle Bangladesh Limited</li>
                                    <li>Renata Limited</li>
                                    <li>Scancement International Ltd.</li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>

                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Experience
                                                                                                                                                ') }}
                                </h4>
                                <h2 class=" text-white"> >Energy and Power </h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>BP Middle East Ltd.</li>
                                    <li>Cairn Energy PLC</li>
                                    <li>Chevron Bangladesh</li>
                                    <li>Halliburton International, Inc</li>
                                    <li>Haripur Power Limited</li>
                                    <li>Kellog Brown and Root Bangladesh Ltd. </li>
                                    <li>Khulna Power Company Ltd. </li>
                                    <li>Niko Resources (Bangladesh) Ltd. </li>
                                    <li>Wartsila Bangladesh Limited</li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>

                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Experience
                                                                                                                                                ') }}
                                </h4>
                                <h2 class=" text-white"> >Construction </h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>Chiyoda Corporation </li>
                                    <li>Mitsui Construction Co. Ltd.</li>
                                    <li>Degremont SA, France</li>
                                    <li>Hanil Construction Co. Ltd. </li>
                                    <li>Hyundai Engineering & Construction Co. Ltd. </li>
                                    <li>Samwhan Corporation</li>
                                    <li>Shimizu Construction Co. Ltd.</li>
                                    <li>Toyo Engineering Corporation</li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>
                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Experience
                                                                                                                                                ') }}
                                </h4>
                                <h2 class=" text-white"> >Trading </h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>Kanematsu-Gosho Ltd., Bangladesh branch</li>
                                    <li>Marubeni Corporation, Bangladesh branch</li>
                                    <li>Mitsui & Co. Ltd., Bangladesh branch</li>
                                    <li>Sumitomo Corporation, Bangladesh branch</li>
                                    <li>Toyota Tsusho Corporation, Bangladesh branch</li>
                                    <li>Associated Merchandising Corporation </li>
                                    <li>Procter & Gamble Bangladesh Private Ltd.</li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>
                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Experience
                                                                                                                                                ') }}
                                </h4>
                                <h2 class=" text-white"> >Others </h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>Dhaka Sheraton Hotel </li>
                                    <li>Grey International Bangladesh Ltd</li>
                                    <li>Jibtex Ltd</li>
                                    <li>Mondial Orient Limited </li>
                                    <li>P&O Nedlloyd Bangladesh Ltd. </li>
                                    <li>Sainsbury‟s Asia Limited</li>
                                    <li>Sears Buying Services, Inc.</li>
                                    <li>Pan Pacific Sonargaon Hotel</li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>

                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Experience
                                                                                                                                                ') }}
                                </h4>
                                <h2 class=" text-white"> >Garments </h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>Dhaka Sheraton Hotel </li>
                                    <li>Grey International Bangladesh Ltd</li>
                                    <li>Jibtex Ltd</li>
                                    <li>Mondial Orient Limited </li>
                                    <li>P&O Nedlloyd Bangladesh Ltd. </li>
                                    <li>Sainsbury‟s Asia Limited</li>
                                    <li>Sears Buying Services, Inc.</li>
                                    <li>Pan Pacific Sonargaon Hotel</li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>

                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Existence
                                                                                                                                                ') }}
                                </h4>
                                <h2 class=" text-white"> >Construction </h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>Posco International Corporation</li>
                                    <li>Korea Engineering Consultancy Corporation (KECC)</li>
                                    <li>Samwhan Corporation</li>
                                    <li>S. J. Construction and Trade Ltd. </li>
                                    <li>Dongfang Electric International Corporation </li>
                                    <li>Adam Smith International Ltd.</li>
                                    <li>Momen Real Estate Ltd.</li>
                                    <li>Momen Infrastructure Ltd.</li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>
                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Existence
                                                                                                                                                ') }}
                                </h4>
                                <h2 class=" text-white"> >Manufacturing </h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>Advanced Animal Science Ltd</li>
                                    <li>Karnaphuli Fertilizer Company Ltd.</li>
                                    <li>Akota Agro Ltd.</li>
                                    <li>Bicyle Shop Ltd</li>
                                    <li>Boond Engineering Bangladesh Pvt. Limited</li>
                                    <li>Boond SPV-1 Bangladesh Pvt. Limited </li>
                                    <li>Naafco Pharma Ltd.</li>
                                    <li>Naafco Agrovet Ltd.</li>
                                    <li>Naafco (Pvt.) Ltd.</li>
                                    <li>Semco Energy Ltd.</li>
                                    <li>Semco Corporation Ltd.</li>
                                    <li>AG Bricks Ltd</li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>
                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Existence
                                                                                                                                                ') }}
                                </h4>
                                <h2 class=" text-white"> >Energy and Power </h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>Wartsila Bangladesh Limited</li>
                                    <li>Dongfang Electric International Corporation</li>
                                    <li>Dupont BD Ltd.</li>
                                    <li>Akota Electric Ltd</li>
                                    <li>Akota Pole Industries Ltd.</li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>
                            <div class="experience_item">
                                <h4 class="left-border-s text-white">
                                    {{ __('Existence
                                                                                                                                                ') }}
                                </h4>
                                <h2 class=" text-white"> >Others </h2>
                                <ul style="list-style:circle;color:rgb(255, 255, 255);padding:10px 0px 10px 45px">
                                    <li>Pan Pacific Hotel and Resorts </li>
                                    <li>Health Labs Ltd.</li>
                                    <li>Freight Zone Ltd.</li>
                                    <li>Alliance Management Services Ltd</li>
                                    <li>Wasseq Dredging Limited</li>
                                    <li>Astra Bio Pharmaceuticals Ltd. </li>
                                    <li>Trauma Centre and AO Orthopedic Hospital Ltd</li>
                                    <li>Prabat Services Ltd. </li>
                                    <li>Prabat Social Infrastructure Ltd</li>
                                    <li>Anfords Bangladesh Ltd.</li>
                                    <li>Zaman Pharmaceuticals Ltd.</li>
                                    <li>Fakhrul Islam Securities Ltd.</li>
                                </ul>
                                <a class="button-1" href="{{ route('front.experience') }}">Read More</a>

                            </div>



                        </div>
                    </div>
                </div>
                <!-- Hero Image -->
                <div class="col-lg-6 align-self-end p-0">
                    <div>
                        <div class="banner_slider_img  owl-carousel">
                            <img src="{{ asset('uploads/experience/bank-financial-ins.jpg') }}" alt="img"
                                class="img-fluid">
                            <img src="{{ asset('uploads/experience/communication.jpg') }}" alt="img"
                                class="img-fluid">
                            <img src="{{ asset('uploads/experience/manufacturing.jpg') }}" alt="img"
                                class="img-fluid">
                            <img src="{{ asset('uploads/experience/energy-power.jpg') }}" alt="img"
                                class="img-fluid">
                            <img src="{{ asset('uploads/experience/construction.jpg') }}" alt="img"
                                class="img-fluid">
                            <img src="{{ asset('uploads/experience/trading.jpg') }}" alt="img" class="img-fluid">
                            <img src="{{ asset('uploads/experience/others.jpg') }}" alt="img" class="img-fluid">
                            <img src="{{ asset('uploads/experience/garments.jpg') }}" alt="img" class="img-fluid">
                            <img src="{{ asset('uploads/experience/construction1.jpg') }}" alt="img"
                                class="img-fluid">
                            <img src="{{ asset('uploads/experience/manufacturing1.jpg') }}" alt="img"
                                class="img-fluid">
                            <img src="{{ asset('uploads/experience/energy-power1.jpg') }}" alt="img"
                                class="img-fluid">
                            <img src="{{ asset('uploads/experience/others1.jpg') }}" alt="img" class="img-fluid">

                            <!-- Image -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <!-- End Portfolio Area -->



    {{-- start case studies --}}


    <section class="pt-20 pb-20 blog-area" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-headding mb-40 text-center">
                        <h2>{{ __('Latest blog') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($casestudies as $casestudy)
                    <!-- Single -->

                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="blog-item">
                            <div class="thumbnail">
                                <a href="{{ route('front.cs_details', $casestudy->id) }}">
                                    <img src="{{ asset($casestudy->photo) }}" alt="blog">
                                </a>
                            </div>
                            <div class="content">
                                
                                <h2 class="title"><a
                                        href="{{ route('front.cs_details', $casestudy->id) }}">{{ $casestudy->name }}
                                    </a></h2>
                                <p>{{ Str::limit($casestudy->description, 45) }} </p>
                                <div class="btm-meta">
                                    <div class="date">
                                        <span><i class="far fa-calendar-alt"></i>
                                            {{ $casestudy->created_at->format('Y M d') }}</span>
                                    </div>
                                    <div class="read-more">
                                        <a
                                            href="{{ route('front.cs_details', $casestudy->id) }}">{{ __('Read More') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="read_more_button_margin">
                <a href="{{ route('front.cs_details' , $casestudy->id) }}" class="button-1">Read More</a>
            </div>
        </div>
    </section>


    {{-- end case studies --}}








    <!-- Start Latest Blog Area -->
    @if (section__status('Blog') == 1)
        <section class="pt-20 pb-20 blog-area" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-headding mb-40 text-center">
                            <h2>{{ __('Latest blog') }}</h2>
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
                                        <a href="{{ route('front.blog_details', $blog->id) }}">
                                            <img src="{{ asset($blog->photo) }}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="meta">
                                            <span><a href="{{ route('front.blog_details', $blog->id) }}"><i
                                                        class="fas fa-user"></i> by: {{ $blog->user->name }}</a></span>
                                            <span><a href="{{ route('front.blog_details', $blog->id) }}"><i
                                                        class="fas fa-tags"></i>
                                                    @php
                                                        $tages = json_decode($blog->tage, true);
                                                        $tage_data = '';
                                                    @endphp
                                                    @foreach ($tages as $tage)
                                                        @php
                                                            print_r($tage . ' ');
                                                        @endphp
                                                    @endforeach
                                                </a></span>
                                        </div>
                                        <h2 class="title"><a
                                                href="{{ route('front.blog_details', $blog->id) }}">{{ $blog->name }}
                                            </a></h2>
                                        <p>{{ Str::limit($blog->description, 45) }} </p>
                                        <div class="btm-meta">
                                            <div class="date">
                                                <span><i class="far fa-calendar-alt"></i>
                                                    {{ $blog->created_at->format('Y M d') }}</span>
                                            </div>
                                            <div class="read-more">
                                                <a
                                                    href="{{ route('front.blog_details', $blog->id) }}">{{ __('Read More') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="blog-item">
                                    <div class="thumbnail">
                                        <a href="{{ route('front.blog_details', $blog->id) }}">
                                            <iframe src="{{ $blog->link }}" class="blog__ifram"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="fas fa-user"></i> by:
                                                    {{ $blog->user->name }}</a></span>
                                            <span><a href="javascript:void(0)"><i class="fas fa-tags"></i>
                                                    @php
                                                        $tages = json_decode($blog->tage, true);
                                                        $tage_data = '';
                                                    @endphp
                                                    @foreach ($tages as $tage)
                                                        @php
                                                            print_r($tage . ' ');
                                                        @endphp
                                                    @endforeach
                                                </a></span>
                                        </div>
                                        <h2 class="title"><a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#blog_{{ $blog->id }}">{{ Str::limit($blog->name, 22) }}
                                            </a></h2>
                                        <p>{{ Str::limit($blog->description, 45) }}</p>
                                        <div class="btm-meta">
                                            <div class="date">
                                                <span><i class="far fa-calendar-alt"></i>
                                                    {{ $blog->created_at->format('Y M d') }}</span>
                                            </div>
                                            <div class="read-more">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#blog_{{ $blog->id }}">{{ __('Read More') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @include('front.includes.blog')
                    @endforeach
                </div>
                <div class="read_more_button_margin">
                    <a href="{{ route('front.blog') }}" class="button-1">Read More</a>
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
                            <h2>{{ __('Reviews') }}</h2>
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
                                        <img class="pb-3" src="{{ asset($testimonial->review_photo) }}"
                                            alt="" height="90" />
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
