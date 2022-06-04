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
        <div class="breadcrumb-wrap bg-f br-3">
            <div class="overlay op-8 bg-downriver"></div>
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Login</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{ url('/') }}">Home </a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="Login-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="login-form-wrap">
                            <div class="login-header">
                                <h3>Login Here</h3>
                                <p>Welcome Back!! Login To Your Account</p>
                            </div>
                            <div class="login-form">
                                <div class="login-body">
                                    <form class="form-wrap" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="text" name="email" type="email" class="@error('email') is-invalid @enderror" placeholder="Username Or Email Address" required>
                                                </div>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="pwd" name="password" type="password" class="@error('password') is-invalid @enderror" placeholder="Password">
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end mb-20"> <a href="#" class="link style1">Forgot Password?</a> </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button class="btn style1" type="submit"> Login Now </button>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <p class="mb-0">Don’t Have an Account? <a class="link style1" href="{{ url('/register') }}">Create One</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('page-js')

<script type="text/javascript">

</script>

@endsection

