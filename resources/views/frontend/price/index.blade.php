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
                    <h2>Pricing Plan</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{ url('/') }}">Home </a></li>
                        <li>Pricing Plan</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="pricing-wrap pt-100 pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($prices as $price)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="pricing-card">
                            <h5 class="pricing-subheader">{{ $price->title }}</h5>
                            <div class="pricing-header">
                                <h2>${{ number_format($price->price,2) }}</h2>
                                <span>{{ $price->duration }} Per Month</span>
                            </div>
                            <p style="text-align: justify">
                                {{ $price->features }}
                            </p>
                            <div class="purchase-btn">
                                @if(auth()->check())
                                    <a href="{{ url('/enrolled/'.$price->id) }}" class="btn style2">Get Enrolled</a>
                                @else
                                    <a href="{{ url('/login') }}" class="btn style2">Get Enrolled</a>
                                @endif
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

