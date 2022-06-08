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

                {{-- intro video check --}}
                @php
                    $file_intro = App\Models\File::where('is_active', 1)->where('type', 'intro')->first();

                    $files = App\Models\File::where('is_active', 1)->where('type', '!=', 'intro')->orderBy('type', 'asc')->get();


                    // tweak this variable to change to permission to watch the videos

                    if (Auth::check() && Auth::user()->subscription_id != null && Auth::user()->is_paid == true ) {
                        
                        $is_allowed_to_see_video = 1;
                    }else{
                        $is_allowed_to_see_video = 0;                        
                    }

                @endphp

                @if ($file_intro)
                <section class="course-wrap ptb-100">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-xl-10 offset-xl-1">
                                <article>

                                    <div class="wh-promo-video-bg bg-f" style="

                                        background-image: url({{ asset('assets/files/' . $file_intro->image) }});

                                    ">
                                        <a class="play-video" data-fancybox href="{{ asset('/assets/files/' . $file_intro->file) }}">
                                            <span class="play-now icon"> 
                                                <i class="flaticon-play-1"></i>
                                                <span class="ripple"></span>
                                            </span>
                                        </a>
                                    </div>

                                <div class="content-title style1 text-center mt-4">
                                    <h2>Simulazione aggiornata alla nuova modalità di esame con 30 quiz</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt labore et dolore sitor magna aliqua. Quis ipsum suspendisse ultrices <strong>gravida</strong>. Risus
                                                commodo viverra manas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. viverra manas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
                @endif

                <section class="course-wrap ptb-100 bg-concrete">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-lg-12 aos-init aos-animate">

                                <div class="content-title style1 text-center mb-4">
                                    <span>Video Lessons</span>
                                    <h2>25 Lezioni per Patente B e A</h2>
                                </div>
                                
                            </div>

                            @if ($files->count() > 0)
                            @foreach ($files as $file)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">

                                        @if ($is_allowed_to_see_video)
                                            
                                            <div class="wh-promo-video-bg bg-f" style="

                                                background-image: url({{ asset('assets/files/' . $file->image) }});
                                                height: 250px;

                                            ">
                                                <a class="play-video" data-fancybox href="{{ asset('/assets/files/' . $file->file) }}">
                                                    <span class="play-now icon"> 
                                                        <i class="flaticon-play-1"></i>
                                                        <span class="ripple"></span>
                                                    </span>
                                                </a>
                                            </div>

                                        @else

                                            <img src="{{ url('assets/files/' . $file->image)}}" alt="Image" />
                                        @endif

                                    </div>
                                    <div class="course-info">
                                        <h3><a href="#">{{ $file->title }}</a></h3>
                                        <p>{{ mb_strimwidth($file->description, 0, 85, "...") }}</p>

                                        @if ($is_allowed_to_see_video)
                                            <a class="btn style2" data-fancybox href="{{ asset('/assets/files/' . $file->file) }}"> Watch Lesson <i class="flaticon-right-arrow"></i> </a>
                                        @else
                                            
                                            <a href="{{ url('price/table') }}" class="btn style2"> Purchase Membership <i class="flaticon-right-arrow"></i> </a>

                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                    </div>
                </section>
            </div>
@endsection

@section('page-js')

<script type="text/javascript">

</script>

@endsection

