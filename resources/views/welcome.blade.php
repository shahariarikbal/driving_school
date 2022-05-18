<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from templates.hibootstrap.com/dizu/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 May 2022 17:46:39 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('/frontend/')}}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('/frontend/')}}/assets/css/flaticon.css" />
    <link rel="stylesheet" href="{{asset('/frontend/')}}/assets/css/remixicon.css" />
    <link rel="stylesheet" href="{{asset('/frontend/')}}/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('/frontend/')}}/assets/css/odometer.css" />
    <link rel="stylesheet" href="{{asset('/frontend/')}}/assets/css/fancybox.css" />
    <link rel="stylesheet" href="{{asset('/frontend/')}}/assets/css/aos.css" />
    <link rel="stylesheet" href="{{asset('/frontend/')}}/assets/css/style.css" />
    <link rel="stylesheet" href="{{asset('/frontend/')}}/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="{{asset('/frontend/')}}/assets/css/responsive.css" />
    <title>Bii Patente - Driving School HTML Template</title>
    <link rel="icon" type="image/png" href="{{asset('/frontend/')}}/assets/img/favicon.png" />
</head>
<body>
<div class="loader js-preloader">
    <svg class="car" width="102" height="40" xmlns="http://www.w3.org/2000/svg">
        <g transform="translate(2 1)" stroke="#091851" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
            <path
                class="car__body"
                d="M47.293 2.375C52.927.792 54.017.805 54.017.805c2.613-.445 6.838-.337 9.42.237l8.381 1.863c2.59.576 6.164 2.606 7.98 4.531l6.348 6.732 6.245 1.877c3.098.508 5.609 3.431 5.609 6.507v4.206c0 .29-2.536 4.189-5.687 4.189H36.808c-2.655 0-4.34-2.1-3.688-4.67 0 0 3.71-19.944 14.173-23.902zM36.5 15.5h54.01"
                stroke-width="2"
            />
            <ellipse class="car__wheel--left" stroke-width="2.2" fill="#FFF" cx="83.493" cy="30.25" rx="6.922" ry="6.808" />
            <ellipse class="car__wheel--right" stroke-width="2.2" fill="#FFF" cx="46.511" cy="30.25" rx="6.922" ry="6.808" />
            <path class="car__line car__line--top" d="M22.5 16.5H2.475" stroke-width="2" />
            <path class="car__line car__line--middle" d="M20.5 23.5H.4755" stroke-width="2" />
            <path class="car__line car__line--bottom" d="M25.5 9.5h-19" stroke-width="2" />
        </g>
    </svg>
</div>

<div class="page-wrapper">
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
                    <a class="navbar-brand" href="index.html">
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
                                    <i class="ri-arrow-down-s-fill"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link active">Home One</a>
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
                                <a href="#" class="nav-link">
                                    Driving Licence Quiz
                                    <i class="ri-arrow-down-s-fill"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="course-one.html" class="nav-link">Course One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="course-two.html" class="nav-link">Course Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="course-details.html" class="nav-link">Course Details</a>
                                    </li>
                                </ul>
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
                                        <a href="team.html" class="nav-link">
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
                            <li class="nav-item has-dropdown">
                                <a href="#" class="nav-link">
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

    <div class="hero-wrap style1 bg-concrete">
        <img src="{{asset('/frontend/')}}/assets/img/hero/home-bg.png" alt="Image" class="hero-shape-one" />
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 col-md-11">
                    <div class="hero-content">
                        <h1 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300" class="home-text-inner">
                            <span>LEARN DRIVING</span> in just 10 Days !
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="book-course-wrap style1">
        <div class="container">
            <div class="book-course-form">
                <div class="row">
                    <div class="col-md-3">
                        <div class="driving-course-item">
                            <div class="driving-course-item-image">
                                <img src="{{asset('/frontend/')}}/assets/img/home-bottom/driving-course-4.png" alt="Image" />
                            </div>
                            <div class="driving-course-item-content">
                                <h2 class="item-title">
                                    Simulazione Esame
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="driving-course-item">
                            <div class="driving-course-item-image">
                                <img src="{{asset('/frontend/')}}/assets/img/home-bottom/driving-course-3.png" alt="Image" />
                            </div>
                            <div class="driving-course-item-content">
                                <h2 class="item-title">
                                    Esame Su Capitolo
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="driving-course-item">
                            <div class="driving-course-item-image">
                                <img src="{{asset('/frontend/')}}/assets/img/home-bottom/driving-course-2.png" alt="Image" />
                            </div>
                            <div class="driving-course-item-content">
                                <h2 class="item-title">
                                    Esame Per Argumento
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="driving-course-item">
                            <div class="driving-course-item-image">
                                <img src="{{asset('/frontend/')}}/assets/img/home-bottom/driving-course-1.png" alt="Image" />
                            </div>
                            <div class="driving-course-item-content">
                                <h2 class="item-title">
                                    Lezione <br>Teoria
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-wrap style1 ptb-100">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <div class="about-img-wrap">
                        <div class="about-bg-1 bg-f"></div>
                        <div class="about-promo-box bounce">
                            <i class="flaticon-star"></i>
                            <h4>228 <span>Driving Courses</span></h4>
                        </div>
                        <img src="{{asset('/frontend/')}}/assets/img/about/about-shape-1.png" alt="Image" class="about-shape-one moveHorizontal" />
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <div class="about-content">
                        <div class="content-title style1">
                            <span>ABOUT US</span>
                            <h2>We're Experienced Driving School You Can Rely On</h2>
                            <p>
                                There are many variations of passages of Lorem Ipsum amet avoilble but majority have suffered alteration in some form, by injected humur or randomise words which don't sure amet sit dolor quras solo
                                dolor.
                            </p>
                        </div>
                        <div class="feature-item-wrap">
                            <div class="feature-item style1">
                                <div class="feature-icon">
                                    <i class="flaticon-check"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Learning Roads</h3>
                                    <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque .</p>
                                </div>
                            </div>
                            <div class="feature-item style1">
                                <div class="feature-icon">
                                    <i class="flaticon-check"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Driving Insurance</h3>
                                    <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-wrap ptb-100 bg-concrete">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title style1 text-center mb-40">
                        <span>OUR LESSONS</span>
                        <h2>We Offer Best Driving Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="course-card style1">
                        <div class="course-img">
                            <img src="{{asset('/frontend/')}}/assets/img/courses/course-1.jpg" alt="Image" />
                        </div>
                        <div class="course-info">
                            <span class="horizontal-line"></span>
                            <h3><a href="course-details.html">International Driving</a></h3>
                            <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                            <div class="course-author-wrap">
                                <div class="course-author">
                                            <span class="course-author-img">
                                                <img src="{{asset('/frontend/')}}/assets/img/team/instructor-1.jpg" alt="Image" />
                                            </span>
                                    <a href="team-details.html">Willium James</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                    <div class="course-card style1">
                        <div class="course-img">
                            <img src="{{asset('/frontend/')}}/assets/img/courses/course-2.jpg" alt="Image" />
                        </div>
                        <div class="course-info">
                            <span class="horizontal-line"></span>
                            <h3><a href="course-details.html">Traffic Science</a></h3>
                            <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                            <div class="course-author-wrap">
                                <div class="course-author">
                                            <span class="course-author-img">
                                                <img src="{{asset('/frontend/')}}/assets/img/team/instructor-2.jpg" alt="Image" />
                                            </span>
                                    <a href="team-details.html">Liam Noah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                    <div class="course-card style1">
                        <div class="course-img">
                            <img src="{{asset('/frontend/')}}/assets/img/courses/course-3.jpg" alt="Image" />
                        </div>
                        <div class="course-info">
                            <span class="horizontal-line"></span>
                            <h3><a href="course-details.html">Defensive Driving</a></h3>
                            <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                            <div class="course-author-wrap">
                                <div class="course-author">
                                            <span class="course-author-img">
                                                <img src="{{asset('/frontend/')}}/assets/img/team/instructor-3.jpg" alt="Image" />
                                            </span>
                                    <a href="team-details.html">David Watt</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <p class="section-subtext">
                    <a href="course-one.html" class="link style1"> View All Courses <i class="flaticon-right-arrow"></i></a>
                </p>
            </div>
        </div>
    </section>

    <section class="why-choose-wrap style1 ptb-100">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 col-12 order-lg-1 order-2" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <div class="wh-content">
                        <div class="content-title style1">
                            <span>WHY CHOOSE US</span>
                            <h2>Modern Technologies For Much Easier Driving</h2>
                            <p>
                                There are many variations of passages of Lorem Ipsum amet avoilble but majority have suffered alteration in some form, by injected humur or randomise words which don't sure amet sit dolor quras solo
                                dolor.
                            </p>
                        </div>
                        <div class="feature-item-wrap">
                            <div class="feature-item style1">
                                <div class="feature-icon">
                                    <i class="flaticon-check"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Fully Licensed</h3>
                                    <p>Nunc quam arcu pretium quisq uam sed laoreet.</p>
                                </div>
                            </div>
                            <div class="feature-item style1">
                                <div class="feature-icon">
                                    <i class="flaticon-check"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Online Tracking</h3>
                                    <p>Nunc quam arcu pretium quisq uam sed laoreet.</p>
                                </div>
                            </div>
                            <div class="feature-item style1">
                                <div class="feature-icon">
                                    <i class="flaticon-check"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Afordable Fee</h3>
                                    <p>Nunc quam arcu pretium quisq uam sed laoreet.</p>
                                </div>
                            </div>
                            <div class="feature-item style1">
                                <div class="feature-icon">
                                    <i class="flaticon-check"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Best Trainers</h3>
                                    <p>Nunc quam arcu pretium quisq uam sed laoreet.</p>
                                </div>
                            </div>
                        </div>
                        <a href="course-one.html" class="btn style1">Start Courses</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-lg-2 order-1" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <div class="wh-img-wrap">
                        <div class="wh-bg-1 bg-f">
                            <div class="wh-promo-video">
                                <div class="wh-promo-video-bg bg-f">
                                    <div class="play-text"><span>PLAY NOW</span></div>
                                    <a class="play-video" data-fancybox href="https://www.youtube.com/watch?v=8PmM6SUn7Es">
                                        <span class="play-now icon"> <i class="flaticon-play-1"></i> <span class="ripple"></span></span>
                                    </a>
                                </div>
                                <div class="wh-promo-text">
                                    <h5>Mountains Are Pleasure If You Drive With Leisure</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-wrap pt-60">
        <div class="container">
            <div class="row pb-40">
                <div class="footer-content">
                    <img src="{{asset('/frontend/')}}/assets/img/logo.png">
                    <div class="footer-nav-item">
                        <ul class="footer-nav-list">
                            <li class="footer-nav-list-item">
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li class="footer-nav-list-item">
                                <a href="#">
                                    Driving Licence Quiz
                                </a>
                            </li>
                            <li class="footer-nav-list-item">
                                <a href="#">
                                    Patent Quiz
                                </a>
                            </li>
                            <li class="footer-nav-list-item">
                                <a href="#">
                                    Lessons
                                </a>
                            </li>
                            <li class="footer-nav-list-item">
                                <a href="#">
                                    Prices
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-address-item">
                        <ul class="footer-address-list">
                            <li class="footer-address-list-item">
                                <a href="tel:+000 999 12345">
                                    <i class="flaticon-call"></i>
                                    +000 999 12345
                                </a>
                            </li>
                            <li class="footer-address-list-item">
                                <a href="mailto:info@biipatente.com">
                                    <i class="flaticon-envelope"></i>
                                    info@biipatente.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>

<script src="{{asset('/frontend/')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/form-validator.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/contact-form-script.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/aos.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/odometer.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/fancybox.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/jquery.appear.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/tweenmax.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/dizu/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 May 2022 17:46:57 GMT -->
</html>
