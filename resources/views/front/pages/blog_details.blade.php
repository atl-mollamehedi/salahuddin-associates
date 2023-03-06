@extends('front.layouts.front_app');
@section('front_content')
    <div class="row">
        <div class="col-lg-12">
            <div class="blog_hero_banner">
                <a href="">
                    <img src="{{ asset('uploads/banner/blog_image.jpg') }}" alt="blog" class="img-fluid" width="100%">
                </a>
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
                @endforeach
            </div>


        </div>
    </div>








    <!-- End Contact Area -->
@endsection
