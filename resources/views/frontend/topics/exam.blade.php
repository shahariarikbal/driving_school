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
                    </ul>
                </div>
            </div>
        </div>
        <section class="course-wrap ptb-100">
        	<form id="exam_form" action="{{ url('quiz/submit/' .  $topic->id) }}" method="POST">
            <div class="container">

	            <div class="row">
	                <div class="col-12">
	                		@csrf
		                    <div class="section-title style1 text-center mb-40">
		                        <span>{{ $topic->name }}</span>
		                        <h2 class="text-capitalize">Please answer all the questions</h2>

		                        <br>
		                        <br>


		                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
								  <div class="carousel-inner">

								  	{{-- @dd($topic->questions) --}}
									@foreach ($topic->questions as $key=>$question)
								    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">


										<div class="single_question_box">
											<h1 class="question">{{ $key + 1 }}. {{ $question->question  }}</h1>


											<div class="row">
												<div class="col-md-6">
													<img src="{{ asset('assets/question/' . $question->image) }}" alt="" class="" style="width: 200px">
												</div>
												<div class="col-md-6">
													<div class="answers">
														
														<input type="radio" name="question[{{ $question->id }}]" value="1" id="true{{ $key }}"> <label for="true{{ $key }}">Yes</label>
														<input type="radio" name="question[{{ $question->id }}]" value="0" id="false{{ $key }}"> <label for="false{{ $key }}">No</label>	

														<button type="button" class="instruction" onclick="toggle('exp{{ $question->id }}')">Explanation</button>
														<p id="exp{{ $question->id }}" style="display: none;">{{ $question->explanation }}</p>
													</div>								
												</div>
											</div>


										</div>




								    </div>
									@endforeach	
								  </div>
								  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
								    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Previous</span>
								  </button>
								  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
								    <span class="carousel-control-next-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Next</span>
								  </button>
								</div>

		                    </div>
	                		
	                </div>
	            </div>

	            <script>
	            	let toggle = (explanation_id) => {
	            		let explanation = document.querySelector('#' + explanation_id);

	            		if(explanation.style.display == 'none'){
	            			explanation.style.display = 'block';
	            		}else{
	            			explanation.style.display = 'none';
	            		}
	            	}
	            </script>

	            <div class="row">
	            	<div class="col-md-6">
	            		<h1 class="timer"><span class="minutes">30</span>:<span class="seconds">00</span></h1>


	            		<script>
	            			var total_minutes = 29;
	            			total_seconds = 60;
							var downloadTimer = setInterval(function(){

								// jodi second 0 te ashe taile minute 1 kore kombe
								if(total_seconds <= 0){
									total_minutes--;
									total_seconds = 59;
								}

								// second always 1 kore kombe
								total_seconds--;

								// jodi minute 0 te ashe tahole form submit hobe
								if(total_minutes <= 0 && total_seconds == 0){
									clearInterval(downloadTimer);
									document.getElementById('exam_form').submit();
								}


								document.querySelector(".timer .minutes").innerHTML = total_minutes;
								document.querySelector(".timer .seconds").innerHTML = total_seconds;
							}, 1000);
	            		</script>

	            	</div>
	            	<div class="col-md-6">
	            		<button type="submit" class="btn submit style1 text-right ml-auto">Submit</button>
	            	</div>
	            </div>
            </div>
    		</form>
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

