<header class="header">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-lg-2 col-12 align-self-center">
                <div class="logo">
                    <a href="{{ route('front.index') }}">
                        <img src="{{ setting()->logo }}"/>
                    </a>
                </div>
                <div class="mobile-menu-tg">
                    <div class="mobile-lg-toggle">
                        <div class="toggle-btn-lg">
                            <span class="drak"></span>
                        </div>
                    </div>
                    <div class="mobile-menu">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
            <!-- Header Right -->
            <div class="col-lg-10 col-12">
                <!-- Right Button -->
                <div class="dl-cv desk_dark_light_button">
                    <div class="toggle-btn-lg">
                        <span class=""></span>
                    </div>
                </div>
                <div class="dl-cv">
                    <a class="button-1" download href="{{  asset(setting()->cv) }}"> <i class="fas fa-download"></i> {{ __(' Company Profile') }}</a>
                </div>


                <!-- Menu -->
                <div class="menu">
                    <nav>
                        <ul>
                            <li class="nav-item current">
                                <a class="nav-link" href="{{route('front.index')}}">{{ __('Home') }}</a>
                            </li>
                            @if (section__status('About') == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.about') }}">{{ __('About') }}</a>
                            </li>
                            @endif
                            @if (section__status('Service') == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.service') }}">{{ __('Services') }}</a>
                            </li>
                            @endif
                            @if (section__status('Portfolio') == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.experience') }}">{{ __('Experience') }}</a>
                            </li>
                            @endif
                            @if (section__status('Blog') == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.blog') }}">{{ __('Blog') }}</a>
                            </li>
                            @endif

                            @if (section__status('Contact') == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.contact_us') }}">{{ __('Contact Us') }}</a>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login') }}">{{ __('Login') }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
