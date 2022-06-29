@extends('frontend.master')

@section('page-css')
<style>

	.title_image{
		/*height: 410px;*/
	}

</style>
@endsection

@section('content')
	
    <div class="content-wrapper">   
        <div class="breadcrumb-wrap bg-f br-4">
            <div class="overlay op-8 bg-downriver"></div>
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>License Quiz</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{ url('/') }}">Home </a></li>
                        <li>Quiz</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <section class="course-wrap ptb-100 bg-concrete">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title style1 text-center mb-40">
                        <span>License Quiz</span>
                        <h2 class="text-capitalize">Welcome to simulation center</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">                

                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="course-card style2">
                        <div class="course-img">

                            <img src="https://cdn.pixabay.com/photo/2016/03/05/19/35/ad-1238450_960_720.jpg" alt="Image" class="img-fluid title_image" />

                        </div>
                        <div class="course-info">
                            <h3><a href="{{ url('/topics') }}">Quiz By Topics</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Eos nisi molestias, labore ex alias sequi recusandae eaque, totam. Aliquam veritatis, ab vel necessitatibus quasi dignissimos. Tempora aliquid hic beatae recusandae.</p>

                            <a href="{{ url('/topics') }}" class="btn style2"> Click To Visit <i class="flaticon-right-arrow"></i> </a>
                        </div>
                    </div>
                </div>             

                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="course-card style2">
                        <div class="course-img">

                            <img src="https://cdn.pixabay.com/photo/2018/09/04/10/06/man-3653346_960_720.jpg" alt="Image" class="img-fluid title_image" />

                        </div>

                        {{-- make a random topic to start simulation --}}

                        @php
                            $random_topic = App\Models\Topic::inRandomOrder()->first();
                        @endphp

                        <div class="course-info">
                            <h3><a href="{{ url('/quiz/by-topic/'.$random_topic->slug) }}">Exam Simulation Center</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Eos nisi molestias, labore ex alias sequi recusandae eaque, totam. Aliquam veritatis, ab vel necessitatibus quasi dignissimos. Tempora aliquid hic beatae recusandae.</p>

                            <a href="{{ url('/quiz/by-topic/'.$random_topic->slug) }}" class="btn style2"> Click To Visit <i class="flaticon-right-arrow"></i> </a>
                        </div>
                    </div>
                </div>             

                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="course-card style2">
                        <div class="course-img">

                            <img src="https://cdn.pixabay.com/photo/2019/03/28/16/09/conference-4087444_960_720.jpg" alt="Image" class="img-fluid title_image" />

                        </div>
                        <div class="course-info">
                            <h3><a href="{{ url('lessons') }}">All Lessons</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Eos nisi molestias, labore ex alias sequi recusandae eaque, totam. Aliquam veritatis, ab vel necessitatibus quasi dignissimos. Tempora aliquid hic beatae recusandae.</p>

                            <a href="{{ url('lessons') }}" class="btn style2"> Click To Visit <i class="flaticon-right-arrow"></i> </a>
                        </div>
                    </div>
                </div>                     

                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="course-card style2">
                        <div class="course-img">

                            <img src="https://cdn.pixabay.com/photo/2015/03/24/12/42/woman-687560_960_720.jpg" class="" />

                        </div>
                        <div class="course-info">
                            <h3><a href="{{ url('faq') }}">Frequently Asked Question</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Eos nisi molestias, labore ex alias sequi recusandae eaque, totam. Aliquam veritatis, ab vel necessitatibus quasi dignissimos. Tempora aliquid hic beatae recusandae.</p>

                            <a href="{{ url('faq') }}" class="btn style2"> Click To Visit <i class="flaticon-right-arrow"></i> </a>
                        </div>
                    </div>
                </div>             

                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="course-card style2">
                        <div class="course-img">

                            <img src="https://cdn.pixabay.com/photo/2018/03/09/11/13/subscribe-3211257_960_720.png" />

                        </div>
                        <div class="course-info">
                            <h3><a href="{{ url('price/table') }}">Memberships</a></h3>
                            <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Eos nisi molestias, labore ex alias sequi recusandae eaque, totam. Aliquam veritatis, ab vel necessitatibus quasi dignissimos. Tempora aliquid hic beatae recusandae.</p>

                            <a href="{{ url('price/table') }}" class="btn style2"> Click To Visit <i class="flaticon-right-arrow"></i> </a>
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

