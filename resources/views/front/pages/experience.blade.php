@extends('front.layouts.front_app');
@section('front_content')

    <!-- Start Hero Area -->
    <section class="hero-area   bg-white" id="project_done">
        <div class="">
            <div class="row m-0">
                <!-- Hero Content -->
                <div class="col-lg-6 order-lg-first order-last align-self-center d-flex justify-content-center ">
                    <div class="hero-caption w-75">
                        {{-- <h4 class="left-border-s text-white">{{ __('Banks and Financial Institution
                            ') }}</h4> --}}
                        <h2 class=" text-text-dark">Banks and Financial Institution</h2>
                       <ul style="list-style:circle;color:rgb(19, 19, 19);padding:10px 0px 10px 45px">
                        <li>The Hongkong and Shanghai Banking Corporation Ltd.(HSBC), Bangladesh Branch </li>
                        <li>CitiBank N.A.</li>
                        <li>Standard Chartered Bank</li>
                        <li>IDLC finance limited </li>
                        <li>IPDC </li>
                       </ul>
                   </div>
                </div>
                <!-- Hero Image -->
                <div class="col-lg-6 align-self-end p-0">
                    <div class="hero-image">
                        <img src="{{ asset($sliders->photo) }}" alt="img" class="">

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->


    <!-- Start Hero Area -->
    <section class="hero-area   bg-white" id="project_done">
            <div class="row m-0">
                <!-- Hero Content -->
                 <!-- Hero Image -->
                 <div class="col-lg-6 p-0">
                    <div class="hero-image">
                        <img src="{{ asset($sliders->photo) }}" alt="img" class="">

                    </div>

                </div>

                <div class="col-lg-6  d-flex align-items-center justify-content-center">
                    <div class="hero-caption w-75">
                        {{-- <h4 class="left-border-s text-white">{{ __('Banks and Financial Institution
                            ') }}</h4> --}}
                        <h2 class=" text-dark"> Banks and Financial Institution </h2>
                       <ul style="list-style:circle;color:rgb(8, 8, 8);padding:10px 0px 10px 45px">
                        <li>The Hongkong and Shanghai Banking Corporation Ltd.(HSBC), Bangladesh Branch </li>
                        <li>CitiBank N.A.</li>
                        <li>Standard Chartered Bank</li>
                        <li>IDLC finance limited </li>
                        <li>IPDC </li>
                       </ul>
                   </div>
                </div>

            </div>
    </section>
    <!-- End Hero Area -->


        <!-- Start Hero Area -->
        <section class="hero-area   bg-white" id="project_done">
            <div class="">
                <div class="row m-0">
                    <!-- Hero Content -->
                    <div class="col-lg-6 order-lg-first order-last align-self-center d-flex justify-content-center ">
                        <div class="hero-caption w-75">
                            {{-- <h4 class="left-border-s text-white">{{ __('Banks and Financial Institution
                                ') }}</h4> --}}
                            <h2 class=" text-dark"> Banks and Financial Institution </h2>
                           <ul style="list-style:circle;color:rgb(35, 35, 35);padding:10px 0px 10px 45px">
                            <li>The Hongkong and Shanghai Banking Corporation Ltd.(HSBC), Bangladesh Branch </li>
                            <li>CitiBank N.A.</li>
                            <li>Standard Chartered Bank</li>
                            <li>IDLC finance limited </li>
                            <li>IPDC </li>
                           </ul>
                       </div>
                    </div>
                    <!-- Hero Image -->
                    <div class="col-lg-6 align-self-end p-0">
                        <div class="hero-image">
                            <img src="{{ asset($sliders->photo) }}" alt="img" class="">

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Area -->
@endsection
