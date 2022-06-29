@extends('frontend.master')

@section('page-css')<style>

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
    .section-title span:after, .content-title span:after {
	    position: absolute;
	    bottom: 0;
	    left: 0;
	    content: "";
	    width: 50px;
	    height: 3px;
	    background-color: unset !important;
	}
	.section-title span:before, .content-title span:before {
	    position: absolute;
	    bottom: 0;
	    left: 55px;
	    content: "";
	    width: 4px;
	    height: 3px;
	    background-color: unset !important;
	}

</style>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-f br-4">
            <div class="overlay op-8 bg-downriver"></div>
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Exam Center</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{ url('/') }}">Home </a></li>
                        <li>Topics</li>
                        <li>Exam</li>
                        <li>Result</li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="course-wrap ptb-100">
            <div class="container">

	            <div class="row">
	                <div class="col-12">
	                		@csrf
		                    <div class="section-title style1 text-center mb-40">
		                        <span>{{ $topic->name }}</span>
		                        <h2 class="text-capitalize">Exam Result</h2>

		                        <br>
		                        <br>


		                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
								  <div class="carousel-inner">

								  	{{-- @dd($topic->questions) --}}
								    <div class="carousel-item active">


										<div class="single_question_box">
											<div class="icon mb-4">
												@if ($is_passed)
													
											 		<img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" width="100px"  alt="">

											 	@else
											 		<img src="https://cdn-icons-png.flaticon.com/512/1828/1828843.png" width="100px"  alt="">

												@endif
											</div>

											<h3 class="question">Your answers are submitted successfully</h3>
											<h3 class="question">You have scored {{ $correct_marks }} out of {{ $total_marks }}</h3>
											<h3 class="question">Result: 

												@if ($is_passed)
													<span class="text-success">Passed</span>
												@else
													<span class="text-danger">Failed</span>
												@endif

											</h3>


										</div>




								    </div>
								  </div>
								</div>

		                    </div>
	                		
	                </div>
	            </div>

	            <div class="row">
	            	<div class="col-md-12">
	            		<button type="button" onclick="location.href='{{ url('topics') }}'" class="btn submit style1 text-center" style="margin: 0 auto!important;">Give Another Exam</button>
	            	</div>
	            </div>
            </div>
        </section>
    </div>
@endsection

@section('page-js')

<script type="text/javascript">
const myCarouselElement = document.querySelector('#carouselExampleControls')
const carousel = new bootstrap.Carousel(myCarouselElement, {
  ride: false,
  interval: false,
  // pause: true,
  // wrap: false,
})
</script>

@endsection

