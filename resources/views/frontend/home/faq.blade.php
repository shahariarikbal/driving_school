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
                    <h2>Faq</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{ url('/') }}">Home </a></li>
                        <li>Faq</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



	<section class="faq-wrap ptb-100">
	    <div class="container">
	        <div class="row gx-5">
	            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
	                <div class="accordion" id="accordionExample">
	                	@foreach (App\Models\Faq::where('is_active', true)->get() as $key => $faq)
	                    <div class="accordion-item">
	                        <h2 class="accordion-header" id="headingOne">
	                            <button class="accordion-button {{ $key == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" aria-controls="collapseOne">
	                                <span>
	                                    <i class="flaticon-right-arrow-1 plus"></i>
	                                    <i class="flaticon-down-arrow minus"></i>
	                                </span>
	                                {{ $faq->question }}
	                            </button>
	                        </h2>
	                        <div id="collapseOne" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
	                            <div class="accordion-body">
	                                <div class="single-product-text">
	                                    <p>{{ $faq->answer }}</p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                	@endforeach
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

