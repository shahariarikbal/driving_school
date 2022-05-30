@extends('frontend.master')

@section('page-css')
<style>

</style>
@endsection

@section('content')


            <div class="content-wrapper">
                <div class="breadcrumb-wrap bg-f br-4">
                    <div class="overlay op-8 bg-downriver"></div>
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>All Lessons</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home </a></li>
                                <li>Lessons</li>
                            </ul>
                        </div>
                    </div>
                </div>



                <section class="course-wrap ptb-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-4.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Advance</li>
                                            <li><i class="flaticon-clock"></i>8 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">Highway Driving</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-4.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">Roger Federar</a>
                                            </div>
                                            <p class="course-price">$75</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-5.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Advance</li>
                                            <li><i class="flaticon-clock"></i>3 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">Pre-Licensing Course</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-5.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">Jay Watson</a>
                                            </div>
                                            <p class="course-price">$45</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-6.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Beginner</li>
                                            <li><i class="flaticon-clock"></i>6 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">Teen Driving Course</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-6.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">Tonu Stark</a>
                                            </div>
                                            <p class="course-price">$89</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-1.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Advance</li>
                                            <li><i class="flaticon-clock"></i>6 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">International Driving</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-1.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">David Watt</a>
                                            </div>
                                            <p class="course-price">$55</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-2.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Beginner</li>
                                            <li><i class="flaticon-clock"></i>4 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">Traffic Science</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-2.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">Liam Noah</a>
                                            </div>
                                            <p class="course-price">$80</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-3.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Intermediate</li>
                                            <li><i class="flaticon-clock"></i>6 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">Defensive Driving</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-3.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">David Watt</a>
                                            </div>
                                            <p class="course-price">$60</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-navigation mt-10">
                            <ul class="page-nav list-style">
                                <li>
                                    <a href="course-one.html"><i class="flaticon-left-arrow"></i></a>
                                </li>
                                <li><a class="active" href="course-one.html">1</a></li>
                                <li><a href="course-one.html">2</a></li>
                                <li><a href="course-one.html">3</a></li>
                                <li>
                                    <a href="course-one.html"><i class="flaticon-right-arrow-1"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="course-wrap ptb-100 bg-concrete">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-4.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Advance</li>
                                            <li><i class="flaticon-clock"></i>8 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">Highway Driving</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-4.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">Roger Federar</a>
                                            </div>
                                            <p class="course-price">$75</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-5.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Advance</li>
                                            <li><i class="flaticon-clock"></i>3 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">Pre-Licensing Course</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-5.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">Jay Watson</a>
                                            </div>
                                            <p class="course-price">$45</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-6.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Beginner</li>
                                            <li><i class="flaticon-clock"></i>6 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">Teen Driving Course</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-6.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">Tonu Stark</a>
                                            </div>
                                            <p class="course-price">$89</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-1.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Advance</li>
                                            <li><i class="flaticon-clock"></i>6 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">International Driving</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-1.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">David Watt</a>
                                            </div>
                                            <p class="course-price">$55</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-2.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Beginner</li>
                                            <li><i class="flaticon-clock"></i>4 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">Traffic Science</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-2.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">Liam Noah</a>
                                            </div>
                                            <p class="course-price">$80</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <img src="{{ url('frontend/')}}/assets/img/courses/course-3.jpg" alt="Image" />
                                    </div>
                                    <div class="course-info">
                                        <ul class="course-metainfo list-style">
                                            <li><i class="flaticon-graph"></i>Intermediate</li>
                                            <li><i class="flaticon-clock"></i>6 Week</li>
                                        </ul>
                                        <h3><a href="course-details.html">Defensive Driving</a></h3>
                                        <p>Praesentium exercitationem ornare litorac thinan distinctio iaculis modi.</p>
                                        <div class="course-author-wrap">
                                            <div class="course-author">
                                                <span class="course-author-img">
                                                    <img src="{{ url('frontend/')}}/assets/img/team/instructor-3.jpg" alt="Image" />
                                                </span>
                                                <a href="team-details.html">David Watt</a>
                                            </div>
                                            <p class="course-price">$60</p>
                                        </div>
                                        <a class="btn style2" href="course-details.html"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-navigation mt-10">
                            <ul class="page-nav list-style">
                                <li>
                                    <a href="course-one.html"><i class="flaticon-left-arrow"></i></a>
                                </li>
                                <li><a class="active" href="course-one.html">1</a></li>
                                <li><a href="course-one.html">2</a></li>
                                <li><a href="course-one.html">3</a></li>
                                <li>
                                    <a href="course-one.html"><i class="flaticon-right-arrow-1"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
@endsection

@section('page-js')

<script type="text/javascript">

</script>

@endsection

