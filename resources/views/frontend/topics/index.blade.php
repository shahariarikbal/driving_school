@extends('frontend.master')

@section('page-css')
<style>

    .wh-promo-video-bg {

        width: 100%;
        height: 400px;
        overflow: hidden;
        position: relative;
        z-index: 1;
        text-align: center;
        margin: 0 auto;
    }

    .wh-promo-video-bg .play-video {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }

    .wh-promo-video-bg .play-text {
        position: absolute;
        top: 0;
        left: 0;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        text-align: center;
        background: 0 0;
        display: block;
        width: 55%;
        height: 100%;
        padding: 15px 0 0;
    }
    .wh-promo-video-bg .play-text:after {
        position: absolute;
        top: -15px;
        left: -15%;
        content: "";
        background: #ED1D24;
        z-index: -1;
        width: 130%;
        height: 70px;
    }
    .wh-promo-video-bg .play-text span {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
    }
    .wh-promo-video-bg .play-video .play-now {
        background: #fff;
        width: 60px;
        height: 60px;
        line-height: 64px;
    }
    .wh-promo-video-bg .play-video .play-now i {
        color: #ED1D24;
        font-size: 18px;
    }
    .wh-promo-video-bg .play-video .play-now .ripple {
        width: 60px;
        height: 60px;
    }
    .wh-promo-video-bg .play-video .play-now .ripple:before,
    .wh-promo-video-bg .play-video .play-now .ripple:after {
        width: 60px;
        height: 60px;
    }
    .cat_image{
        height: 356px;
    }
</style>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-f br-4">
            <div class="overlay op-8 bg-downriver"></div>
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>All Topics</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{ url('/') }}">Home </a></li>
                        <li>Topics</li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="course-wrap ptb-100">
            <div class="container">

            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title style1 text-center mb-40">
                        <span>Topic List</span>
                        <h2 class="text-capitalize">Pick a topic to start exam</h2>
                    </div>
                </div>
            </div>
                <div class="row justify-content-center">
                    @foreach($categories as $category)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="course-card style1">
                                <div class="course-img">
                                    <img src="{{ asset('/assets/topic/'.$category->image) }}" alt="Image" class="img-fluid cat_image" />
                                </div>
                                <div class="course-info">
                                    <h3><a href="{{ url('/quiz/question/'.$category->id. '/'.$category->slug) }}">{{ $category->name }}</a></h3>
                                    <div class="course-author-wrap">
                                        <a class="course-link link style1" href="{{ url('/quiz/question/'.$category->id. '/'.$category->slug) }}"> Read More <i class="flaticon-right-arrow"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection

@section('page-js')

<script type="text/javascript">

</script>

@endsection

