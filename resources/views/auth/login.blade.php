@extends('layouts.main')

@section('content')

<style type="text/css">

/*
    Note: It is best to use a less version of this file ( see http://css2less.cc
    For the media queries use @screen-sm-min instead of 768px.
    For .omb_spanOr use @body-bg instead of white.
*/

@media (min-width: 768px) {
    .omb_row-sm-offset-3 div:first-child[class*="col-"] {
        margin-left: 25%;
    }
}

.omb_login .omb_authTitle {
    text-align: center;
    line-height: 300%;
}
    
.omb_login .omb_socialButtons a {
    color: white; // In yourUse @body-bg 
    opacity:0.9;
}
.omb_login .omb_socialButtons a:hover {
    color: white;
    opacity:1;      
}
.omb_login .omb_socialButtons .omb_btn-facebook {background: #3b5998;}
.omb_login .omb_socialButtons .omb_btn-twitter {background: #00aced;}
.omb_login .omb_socialButtons .omb_btn-google {background: #c32f10;}


.omb_login .omb_loginOr {
    position: relative;
    font-size: 1.5em;
    color: #aaa;
    margin-top: 1em;
    margin-bottom: 1em;
    padding-top: 0.5em;
    padding-bottom: 0.5em;
}
.omb_login .omb_loginOr .omb_hrOr {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
}
.omb_login .omb_loginOr .omb_spanOr {
    display: block;
    position: absolute;
    left: 50%;
    top: -0.6em;
    margin-left: -1.5em;
    background-color: white;
    width: 3em;
    text-align: center;
}           

.omb_login .omb_loginForm .input-group.i {
    width: 2em;
}
.omb_login .omb_loginForm  .help-block {
    color: red;
}
    
@media (min-width: 768px) {
    .omb_login .omb_forgotPwd {
        text-align: right;
        margin-top:10px;
    }       
}
</style>

<div class="container">
    <div class="row omb_row-sm-offset-3">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label class="col-md-4 control-label">E-Mail Address</label> -->

                            <div class="col-md-6 col-offset-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label class="col-md-4 control-label">Password</label> -->

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>

                    <!-- OR -->
                    <div class="omb_login">
                        <div class="row omb_row-sm-offset-3 omb_loginOr">
                            <div class="col-xs-12 col-sm-6">
                                <hr class="omb_hrOr">
                                <span class="omb_spanOr">or</span>
                            </div>
                        </div>
                    </div>

                    <!-- Login FB/TW -->
                    <a href="redirect/facebook" class="btn btn-block btn-social btn-facebook">
                        <span class="fa fa-facebook"></span> Sign in with Facebook
                    </a>
                    <a href="redirect/twitter" class="btn btn-block btn-social btn-twitter">
                        <span class="fa fa-twitter"></span> Sign in with Twitter
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
