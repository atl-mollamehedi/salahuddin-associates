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

<section class="pt-20 pb-20 blog-area page_top_space" id="case_study">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-headding mb-40 text-center">
                    <h2>{{ __("Case Study") }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Contact Area -->
@endsection