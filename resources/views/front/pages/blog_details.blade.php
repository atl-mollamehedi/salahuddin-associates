@extends('front.layouts.front_app');
@section('front_content')
    <div class="row">
        <div class="col-lg-12">
            <div class="blog_hero_banner">


                <div class="bread">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('front.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('front.blog')}}">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                    </ol>
                </div>

            </div>

        </div>
    </div>


    <div class="container">
        <div class="row" class="single_blog_all">

            <div class="col-lg-8">
                <div class="single_blog_item">
                    <div class="single_blog_item_image">
                        <a href="">
                            <img src="{{ asset($blog->photo) }}" alt="" class="w-100 img-fluid">
                        </a>
                    </div>


                    <div class="user_items">
                        <span><i class="fas fa-user"></i></span>
                        <span class="para">{{ $blog->user->name }}</span>


                        <span><i class="fas fa-tags"></i></span>
                        <span class="para">{{ $blog->tage }}</span>
                    </div>

                    {{-- <div class="date">
                        <span><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('Y M d') }}</span>
                    </div> --}}




                    <div class="single_blog_item_title">
                        <a href="">
                            <h5>
                                {{ $blog->name }}</h5>
                        </a>
                    </div>
                    <div class="single_blog_item_text">
                        <a href="">
                            <p>{{ $blog->description }}</p>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                @foreach ($blogs as $blog)
                    <div class="single_blog_item">
                        <div class="single_blog_item_image">
                            <a href="">
                                <img src="{{ asset($blog->photo) }}" alt="" class="w-100 img-fluid">
                            </a>
                        </div>


                        <div class="user_items">
                            <span><i class="fas fa-user"></i></span>
                            <span class="para">{{ $blog->user->name }}</span>


                            <span><i class="fas fa-tags"></i></span>
                            <span class="para">{{ $blog->tage }}</span>


                        </div>




                        <div class="single_blog_item_title">
                            <a href="">
                                <h6>
                                    {{ $blog->name }}</h6>
                            </a>
                        </div>
                        <div class="single_blog_item_text">
                            <a href="">
                                <p>{{ Str::limit($blog->description) }}</p>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>








    <!-- End Contact Area -->
@endsection
