<header class="header">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-lg-2 col-12 align-self-center">
                <div class="logo">
                    <a href="">
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
                    <a class="button-1" download href="{{  asset(setting()->cv) }}">{{ __('Download CV') }}</a>
                </div>
               
                
                <!-- Menu -->
                <div class="menu">
                    <nav>
                        <ul>
                            <li class="nav-item current">
                                <a class="nav-link" href="#home">{{ __('Home') }}</a>
                            </li>
                            @if (section__status('About') == 1) 
                            <li class="nav-item">
                                <a class="nav-link" href="#about">{{ __('About Me') }}</a>
                            </li>
                            @endif
                            @if (section__status('Service') == 1) 
                            <li class="nav-item">
                                <a class="nav-link" href="#services">{{ __('Services') }}</a>
                            </li>
                            @endif
                            @if (section__status('Portfolio') == 1) 
                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio">{{ __('Portfolio') }}</a>
                            </li>
                            @endif
                            @if (section__status('Blog') == 1) 
                            <li class="nav-item">
                                <a class="nav-link" href="#blog">{{ __('Blog') }}</a>
                            </li>
                            @endif
                            @if (section__status('Contact') == 1) 
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">{{ __('Contact Us') }}</a>
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