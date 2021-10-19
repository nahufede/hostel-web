<nav class="navbar navbar-expand-lg navbar-light py-3 mynav {{contactPage()}}">
    <div class="container-fluid mx-4">
        <a class="navbar-brands" href="{{route('index')}}"><img src="/../img/{{request()->routeIs('contact') ? 'logo-only-white' : 'logo-complete'}}.png" alt="" style="width: 60px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-justify"></i>
        </button>
        <div class="collapse navbar-collapse w-100 justify-content-center" id="navbarSupportedContent">
            <div class="nav-items">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item d-lg-none">
                        <a class="nav-links" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-links {{setActive('services')}}" href="{{route('services')}}">{{__('ui.services')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-links {{setActive('about')}}" href="{{route('about')}}">{{__('ui.about')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-links {{setActive('contact')}}" href="{{route('contact')}}">{{__('ui.contact')}}</a>
                    </li>
                    <li class="d-lg-none pt-3">
                        <img src="/../img/logo-text.png" alt="" style="width: 200px"></a>
                    </li>
                </ul>
            </div>
            <div class="social d-none d-lg-block">
                <ul class="m-0">
                    <li>
                        <a href=""><i class="bi bi-arrow-right"></i>instagram</a>
                    </li>
                    <li>
                        <a href=""><i class="bi bi-arrow-right"></i>email us</a>
                    </li>
                </ul>
            </div>
            <div id="nav-langdrop" class="btn-group dropdown ps-4">
                <button type="button" class="btn {{langButton()}} dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-globe pe-2"></i></button>
                <div class="dropdown-menu ms-4">
                    @include('partials._locale',["lang"=>'es','nation'=>'es'])  
                    @include('partials._locale',["lang"=>'en','nation'=>'gb']) 
                </div>
              </div>
        </div>
    </div>
</nav>