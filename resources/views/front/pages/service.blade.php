@extends('front.layouts.front_app');
@section('front_content')
@if (section__status('Service') == 1)
<section class="services-area  pb-20 page_top_space" id="services">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-headding mb-40 text-center">
                    <h2>{{ __("My Services") }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
            <!-- Services Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="services-box">
                    <div class="icon">
                        <i class="{{ $service->icon }}"></i>
                    </div>
                    <h2>{{ $service->name }}</h2>
                    <p>{{ $service->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif   
<!-- End Contact Area -->
@endsection