
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
                                <li><i class="flaticon-call"></i> <a href="tel:02459271449">(+024) 592 71 449</a></li>
                                <li>
                                    <i class="flaticon-envelope"></i>
                                    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#4a222f2626250a2e23303f64292527">
                                        <span class="__cf_email__" data-cfemail="8ce4e9e0e0e3cce8e5f6f9a2efe3e1">[email&#160;protected]</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="flaticon-location-1"></i>
                                    <p>St. Here Mandalay, New York, U.K</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="header-top-right">
                            <ul class="social-profile list-style style2">
                                <li>
                                    <a target="_blank" href="https://facebook.com/">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://linkedin.com/">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com/">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://pinterest.com/">
                                        <i class="ri-pinterest-fill"></i>
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
                                            <img src="{{asset('/frontend/')}}/assets/img/uk.png" alt="flag" />
                                            English
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="{{asset('/frontend/')}}/assets/img/china.png" alt="flag" />
                                            简体中文
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <img src="{{asset('/frontend/')}}/assets/img/uae.png" alt="flag" />
                                            العربيّة
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
                            <li class="nav-item has-dropdown">
                                <a href="#" class="nav-link active">
                                    Home
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url('/') }}" class="nav-link active">Home One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Three</a>
                                    </li>
                                </ul>

                            </li>
                            <li class="nav-item has-dropdown">
                                <a href="{{ url('/quiz') }}" class="nav-link">
                                    Driving Licence Quiz
                                </a>
                            </li>
                            <li class="nav-item has-dropdown">
                                <a href="#" class="nav-link">
                                    Patent Quiz
                                    <i class="ri-arrow-down-s-fill"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Vehicles
                                            <i class="ri-arrow-right-s-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="vehicles.html" class="nav-link">Our Vehicles</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="vehicle-details.html" class="nav-link">Single Vehicle</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('lessons') }}" class="nav-link">
                                            Lessons
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="team-details.html" class="nav-link">Instructor Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pricing.html" class="nav-link">Pricing Plan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            User Pages
                                            <i class="ri-arrow-right-s-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="login.html" class="nav-link">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="register.html" class="nav-link">Register</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="recover-password.html" class="nav-link">Recover Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-of-service.html" class="nav-link">Terms of Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="error-404.html" class="nav-link">404 Error Page</a>
                                    </li>
                                </ul>
                            </li>
{{--                             <li class="nav-item has-dropdown">
                                <a href="{{ url('lessons') }}" class="nav-link">
                                    Lessons
                                    <i class="ri-arrow-down-s-fill"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Blog Layout
                                            <i class="ri-arrow-right-s-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="blog-no-sidebar.html" class="nav-link">Blog Grid</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Single Blog
                                            <i class="ri-arrow-right-s-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="blog-details-no-sidebar.html" class="nav-link">Blog Details No Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-details-left-sidebar.html" class="nav-link">Blog Details Left Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-details-right-sidebar.html" class="nav-link">Blog Details Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ url('lessons') }}" class="nav-link">
                                    Lessons
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">
                                    Prices
                                </a>
                            </li>
                            <li class="nav-item xl-none">
                                <a href="course-one.html" class="btn style1">Get Started</a>
                            </li>
                        </ul>
                        <div class="others-options lg-none">
                            <div class="option-item">
                                <button class="searchbtn" type="button">
                                    <i class="flaticon-search"></i>
                                </button>
                            </div>
                            <div class="header-btn">
                                <a href="course-one.html" class="btn style1">Get Started</a>
                            </div>
                        </div>
                    </div>
                </nav>
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
