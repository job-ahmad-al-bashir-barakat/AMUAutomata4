<!DOCTYPE html>
<html lang="{{ $lang }}" dir="{{ $dir }}">

<head>
    @include('control._meta')
    <link rel="stylesheet" href="{{ asset(mix("css/admin-membership-$dir.css")) }}">
    <link rel="stylesheet" href="{{ asset('admin-custom.css') }}">
</head>

<body style="background: url({{asset('images/login-bg.jpg')}}) 50% 50%">
<div class="wrapper animated fadeIn">
    <div class="block-center mt-xl wd-xl">
        <!-- START panel-->
        <div class="panel panel-dark panel-flat">
            <div class="panel-heading text-center" style="{{setting('login_header_style')->value}}">
                <a href="#">
                    <img src="{{ asset('img/logo.png') }}" alt="Image" class="block-center img-rounded">
                </a>
            </div>
            <div class="panel-body" data-form-loader>
                <p class="text-center pv">{{ trans('utilities::app.sign_in_to_continue') }}</p>
                <div class="ajaxCont">
                    <form class="mb-lg ajax-form" method="post" action="{{ RouteUrls::login() }}">

                        {{ csrf_field() }}

                        <div class="form-group has-feedback">
                            <input type="text" name="name" placeholder="{{ trans('utilities::app.enter_name') }}" autocomplete="off" class="form-control required">
                            <span class="fa fa-user  form-control-feedback text-muted"></span>
                            <div id='error_name'></div>
                        </div>

                        <div class="form-group has-feedback">
                            <input name="password" type="password" placeholder="{{ trans('utilities::app.password') }}" class="form-control required">
                            <span class="fa fa-lock form-control-feedback text-muted"></span>
                            <div id='error_password'></div>
                        </div>

                        <div class="clearfix">
                            <div class="checkbox c-checkbox pull-left mt0">
                                <label>
                                    <input type="checkbox" name="remember">
                                    <span class="fa fa-check"></span>{{ trans('utilities::app.remember_me') }}
                                </label>
                            </div>
                        </div>
                        <button type="submit" data-method="post"
                                data-action="{{ RouteUrls::login() }}"
                                data-stop-operation-message
                                class="btn btn-block btn-primary mt-lg">{{ trans('utilities::app.login') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END panel-->
        <div class="p-md text-center text-white">
            <span>{{ trans('app.automata4_group') }}</span>
        </div>
    </div>
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<script src="{{ asset(mix("js/admin-membership-{$dir}.js")) }}"></script>
@include('control.global-js')
<!-- =============== APP SCRIPTS ===============-->
<script src="{{ asset('admin-custom.js') }}"></script>
</body>
</html>