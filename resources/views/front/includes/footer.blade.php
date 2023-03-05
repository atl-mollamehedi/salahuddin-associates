<!-- Site footer -->
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>{{ __("About") }}</h6>
          <p class="text-justify">{{ Str::limit(setting()->about_description, 320) }} <a href='#about'>Read more</a></p>
        </div>
        <div class="col-xs-6 col-md-3">
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>{{ __("Quick Links") }}</h6>
          <ul class="footer-links">
            <li><a href="#home">{{ __("Home") }}</a></li>
            @if (section__status('About') == 1) 
            <li><a href="#about">{{ __("About") }}</a></li>
            @endif
            @if (section__status('Service') == 1) 
            <li><a href="#services">{{ __("Service") }}</a></li>
            @endif
            @if (section__status('POrtfolio') == 1) 
            <li><a href="#portfolio">{{ __("Portfolio") }}</a></li>
            @endif
            @if (section__status('Blog') == 1) 
            <li><a href="#blog">{{ __("Blog") }}</a></li>
            @endif
            @if (section__status('Contact') == 1) 
            <li><a href="#contact">{{ __("Contact Us") }}</a></li>
            @endif
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">{{ setting()->copyright }}
       <a href="#">{{ __("Atl Porto") }}</a>
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            @foreach (socials() as $social)     
            <li><a class="facebook" href="{{ $social->link }}"><i class="{{ $social->icon }}"></i></a></li>
            @endforeach
        </ul>
        </div>
      </div>
    </div>
</footer>