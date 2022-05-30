@extends('frontend.master')

@section('page-css')
<style>

</style>
@endsection

@section('content')


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
@endsection

@section('page-js')

<script type="text/javascript">

</script>

@endsection






