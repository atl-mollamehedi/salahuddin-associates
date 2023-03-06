@extends('front.layouts.front_app')
@section('front_content')

<section id="breadcumb">
    <div class="row">
        <div class="col-lg-12">
            <div class="blog_hero_banner">


                <div class="bread">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </div>

            </div>

        </div>
    </div>
  </section>

@if (section__status('Blog') == 1)
<section class="pt-20 pb-20 blog-area page_top_space" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-headding mb-40 text-center">
                    <h2>{{ __("Our blogs") }}</h2>
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
                        <a href="{{route('front.blog_details', $blog->id)}}"  >
                            <img src="{{ asset($blog->photo) }}" alt="blog">
                        </a>
                    </div>
                    <div class="content">
                        <div class="meta">
                            <span><a href="{{route('front.blog_details', $blog->id)}}"><i class="fas fa-user"></i> by: {{ $blog->user->name }}</a></span>
                            <span><a href="{{route('front.blog_details', $blog->id)}}"><i class="fas fa-tags"></i>
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
                        <h2 class="title"><a href="{{route('front.blog_details', $blog->id)}}">{{ $blog->name }} </a></h2>
                        <p>{{ Str::limit($blog->description, 45) }} </p>
                        <div class="btm-meta">
                            <div class="date">
                                <span><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('Y M d') }}</span>
                            </div>
                            <div class="read-more">
                                <a href="{{route('front.blog_details', $blog->id)}}" >{{ __("Read More") }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="blog-item">
                    <div class="thumbnail">
                        <a href="{{route('front.blog_details', $blog->id)}}">
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

<!-- End Contact Area -->
@endsection
