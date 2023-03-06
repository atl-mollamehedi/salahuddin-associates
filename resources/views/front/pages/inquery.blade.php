@extends('front.layouts.front_app')
@section('front_content')
<section id="breadcumb">
    <div class="row">
        <div class="col-lg-12">
            <div class="blog_hero_banner">


                <div class="bread">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Inquery</li>
                    </ol>
                </div>

            </div>

        </div>
    </div>
  </section>
<!-- Start Contact Area -->
<section class="contact-area page_top_space pb-50" id="inquery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-headding mb-40 text-center">
                    <h2>{{ __("Contact Now") }}</h2>
                    <p class="pb-5 pt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, voluptatibus.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 align-self-center mb-30">
                <div class="contact-form">
                    @if ($errors->all())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('front.inquery.store') }}" method="post">
                        @csrf
                        <div class="row">
                           
                            <div class="col-md-6">
                                <label for="">Service</label>
                                <div class="single-input">
                                    <select class="form-select" name="service_id">
                                        <option value="">Select One</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Date</label>
                                <div class="single-input">
                                    <input type="date" name="date" placeholder="Your Date">
                                    <i class="far fa-date"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Start Time</label>
                                <div class="single-input">
                                    <input type="time" name="start" placeholder="Your Start Time">
                                    <i class="far fa-times"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">End Time</label>
                                <div class="single-input">
                                    <input type="time" name="end" placeholder="Your End Time">
                                    <i class="far fa-times"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <div class="single-input">
                                    <input type="text" name="name" placeholder="Your Name">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <div class="single-input">
                                    <input type="email" name="email" placeholder="Your Email">
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="">Number</label>
                                <div class="single-input">
                                    <input type="text" name="number" placeholder="Your Phone">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Subject</label>
                                <div class="single-input">
                                    <input type="text" name="subject" placeholder="Your Subjects">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="">Description</label>
                                <div class="single-input">
                                    <textarea name="message" placeholder="Write Message" spellcheck="false"></textarea>
                                    <i class="fas fa-pen"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="button-1">{{ __("Send Message") }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <div class="contact-form-info"
                    style="background-image:url('{{ asset('front_asset') }}/img/contact.jpg');">
                    <h2>{{ __("Don't hesitate to contact Me") }}</h2>
                    <div class="contact-info-list">
                        <div class="item mb-20">
                            <div class="icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="content">
                                <h4>{{ __("Locations") }}</h4>
                                <p>{{ setting()->address }}</p>
                            </div>
                        </div>
                        <div class="item mb-20">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h4>{{ __("Drop A Mail") }}</h4>
                                <p>{{ setting()->email }}</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="content">
                                <h4>{{ __("Call Me") }}</h4>
                                <p> {{ setting()->number }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Contact Area -->
@endsection