
    <header class="header-wrap style1">
        <div class="header-top">
            <button type="button" class="close-sidebar">
                <i class="ri-close-fill"></i>
            </button>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="header-top-left">
                            <ul class="contact-info list-style">
                                <li><i class="flaticon-call"></i> <a href="tel:393511014852">(+39) 351 101 4852</a></li>
                                <li><i class="flaticon-call"></i> <a href="tel:3889965593">(+39) 388 996 5593</a></li>
                                <li><i class="flaticon-call"></i> <a href="tel:0645478893">(+39) 06 4547 8893</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="header-top-right">
                            <ul class="social-profile list-style style2">
                                <li>
                                    <a target="_blank" href="https://youtube.com/">
                                        <i class="ri-youtube-fill"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="select-lang">
                                <i class="ri-global-line"></i>
                                <div class="navbar-option-item navbar-language dropdown language-option">
                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="lang-name"></span>
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu">
                                        <a class="dropdown-item" href="#">
                                            <img src="https://cdn-icons-png.flaticon.com/512/323/323325.png" alt="flag" />
                                            Italiano
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            {{-- <img src="{{asset('/frontend/')}}/assets/img/uk.png" alt="flag" /> --}}
                                            <img src="https://cdn-icons-png.flaticon.com/512/323/323299.png" alt="flag" />
                                            Bangla
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-bottom">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('/frontend/')}}/assets/img/logo.png" alt="logo" />
                    </a>
                    <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                        <div class="menu-close xl-none">
                            <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                        </div>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link {{ Request::url() == url('') ? 'active' : '' }}">
                                    Home
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/quiz') }}" class="nav-link {{ Request::url() == url('/quiz') ? 'active' : '' }}">
                                    Simulazione Esame 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/topics') }}" class="nav-link {{ Request::url() == url('/topics') ? 'active' : '' }}">
                                    Esame su Capitolo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/quiz') }}" class="nav-link {{ Request::url() == url('/topics') ? 'active' : '' }}">
                                    Esame su Argumento
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('lessons') }}" class="nav-link {{ Request::url() == url('lessons') ? 'active' : '' }}">
                                    Lezioni
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('price/table') }}" class="nav-link {{ Request::url() == url('price/table') ? 'active' : '' }}">
                                    Pricings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('register') }}" class="nav-link {{ Request::url() == url('register') ? 'active' : '' }}">
                                    Register
                                </a>
                            </li>
                            <li class="nav-item xl-none">
                                @if(Auth::check())

                                    <a onclick="document.querySelector('#logout-form').submit()" style="cursor: pointer;" class="btn style1">{{ 'Logout' }}</a>


                                @else
                                    <a href="{{ url('/login') }}" class="btn style1">Get Started</a>
                                @endif
                            </li>
                        </ul>
                        <div class="others-options lg-none">
                            <div class="option-item">
                                <button class="searchbtn" type="button">
                                    <i class="flaticon-search"></i>
                                </button>
                            </div>
                            <div class="header-btn">

                               @if(Auth::check())

                                    <a href="#" class="btn style1">{{ Auth::user()->name }}</a>

                                    <ul class="dropdown-menu user_hover_box">
                                        <li class="nav-item">

                                            <a onclick="document.querySelector('#logout-form').submit()" style="cursor: pointer;" class="nav-link">{{ 'Logout' }}</a>
                                        </li>
                                    </ul>

                               @else
                                 <a href="{{ url('/login') }}" class="btn style1">Get Started</a>
                               @endif
                            </div>
                        </div>
                    </div>
                </nav>


                <form action="{{ url('/logout') }}" id="logout-form" method="POST" class="d-none">
                    @csrf
                    
                </form>
                <div class="mobile-bar-wrap">
                    <div class="mobile-sidebar">
                        <i class="ri-menu-4-line"></i>
                    </div>
                    <button class="searchbtn xl-none" type="button">
                        <i class="flaticon-search"></i>
                    </button>
                    <div class="mobile-menu xl-none">
                        <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="search-area">
                <div class="container">
                    <form action="#">
                        <div class="form-group">
                            <input type="search" placeholder="Search Here" autofocus />
                        </div>
                    </form>
                    <button type="button" class="close-searchbox">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
