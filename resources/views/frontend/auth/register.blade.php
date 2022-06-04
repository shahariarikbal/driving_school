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
                    <h2>Register</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{ url('/') }}">Home </a></li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="Login-wrap ptb-100">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="login-form-wrap">
                            <div class="login-header">
                                <h3>Register New Account</h3>
                                <p>Welcome!! Create A New Account</p>
                            </div>
                            <div class="login-form">
                                <div class="login-body">
                                    <form class="form-wrap" action="{{ url('/register') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="text" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror" type="text" placeholder="Full Name" required>
                                                </div>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" type="email" placeholder="Email" required>
                                                </div>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="phone" name="phone" value="{{ old('phone') }}" class="@error('phone') is-invalid @enderror" type="tel" placeholder="Phone" required>
                                                </div>
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="pwd" name="password" class="@error('password') is-invalid @enderror" type="password" placeholder="Password" required>
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="pwd_2" name="password_confirmation" class="@error('password') is-invalid @enderror" placeholder="Confirm Password" type="password" required>
                                                </div>
                                                @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button class="btn style1" type="submit"> Register Now </button>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="mb-0">Have an Account? <a class="link style1" href="{{ url('/login') }}">Sign In</a></p>
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

