@extends('front.layouts.front_app')
@section('front_content')
  <section id="breadcumb">
    <div class="row">
        <div class="col-lg-12">
            <div class="blog_hero_banner">


                <div class="bread">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('front.case_study') }}">Case Study</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                    </ol>
                </div>

            </div>

        </div>
    </div>
  </section>


    <div class="container">
        <div class="row" class="single_blog_all">

            <div class="col-lg-8">
                <div class="single_blog_item">
                    <div class="single_blog_item_image">
                        <a href="">
                            <img src="{{ asset($casestudy->photo) }}" alt="" class="w-100 img-fluid">
                        </a>
                    </div>


                    <div class="user_items">

                        <div>
                            <span><i class="fas fa-user"></i></span>
                            <span class="para">{{ $casestudy->name }}</span>


                            {{-- <span><i class="fas fa-tags"></i></span>
                            <span class="para">{{ $casestudy->tage }}</span> --}}

                        </div>


                        <span class="daty">
                            <span><i class="far fa-calendar-alt"></i></span>
                            <span class="para">{{ $casestudy->created_at->format('Y M d') }}</span>
                        </span>
                    </div>








                    <div class="single_blog_item_title">
                        <a href="">
                            <h5>
                                {{ $casestudy->name }}</h5>
                        </a>
                    </div>
                    <div class="single_blog_item_text">
                        <a href="">
                            <p>{{ $casestudy->description }}</p>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
               
                @foreach ($casestudies as $casestudy)
                    <div class="super_card">
                        <div class="card">



                            <div class="card-body">


                                <div class="user_items_sys">

                                    <a href="{{ route('front.cs_details', $casestudy->id) }}">
                                        <span><i class="fas fa-user"></i></span>
                                        <span class="parab">{{ $casestudy->name }}</span>


                                        {{-- <span><i class="fas fa-tags"></i></span>
                                        <span class="parab">{{ $casestudy->tage }}</span> --}}
                                    </a>



                                </div>

                                <div class="row">


                                    <div class="col-lg-4">
                                        <a href="{{ route('front.cs_details', $casestudy->id) }}">
                                            <img src="{{ asset($casestudy->photo) }}" alt="" class="w-100 img-fluid">
                                        </a>
                                    </div>

                                    <div class="col-lg-8">

                                        <div>

                                            <div class="name_imp">
                                                <a  href="{{ route('front.cs_details', $casestudy->id) }}">
                                                    <h6>
                                                        {{ $casestudy->name }}</h6>
                                                </a>
                                            </div>



                                            <a href="{{ route('front.cs_details', $casestudy->id) }}">
                                                <small>{{ Str::limit($casestudy->description, 65) }}</small>
                                            </a>
                                        </div>




                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>








    <!-- End Contact Area -->
@endsection

