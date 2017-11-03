<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>Angle - Bootstrap Admin Template</title>
    <link rel="stylesheet" href="{{ asset(mix("css/admin-login.css")) }}">
    <link rel="stylesheet" href="{{ asset('admin-custom.css') }}">

</head>

<body>
<div class="wrapper">
    <div class="block-center mt-xl wd-xl">
        <!-- START panel-->
        <div class="panel panel-dark panel-flat">
            <div class="panel-heading text-center">
                <a href="#">
                    <img src="{{ asset('img/logo.png') }}" alt="Image" class="block-center img-rounded">
                </a>
            </div>
            <div class="panel-body">
                <p class="text-center pv">SIGN IN TO CONTINUE.</p>
                <div class="ajaxCont">
                    <form class="mb-lg ajax-form" method="post" action="#">
                        {{ csrf_field() }}
                        <div class="form-group has-feedback">
                            <input type="text" name="name" placeholder="Enter name" autocomplete="off" class="form-control required">
                            <span class="fa fa-user  form-control-feedback text-muted"></span>
                            <div id='error_name'></div>
                        </div>
                        <div class="form-group has-feedback">
                            <input name="password" type="password" placeholder="Password" class="form-control required">
                            <span class="fa fa-lock form-control-feedback text-muted"></span>
                            <div id='error_password'></div>
                        </div>
                        <div class="clearfix">
                            <div class="checkbox c-checkbox pull-left mt0">
                                <label>
                                    <input type="checkbox" name="remember">
                                    <span class="fa fa-check"></span>Remember Me</label>
                            </div>
                            <div class="pull-right"><a href="recover.html" class="text-muted">Forgot your password?</a>
                            </div>
                        </div>
                        <button type="submit" data-method="post" data-action="{{ RouteUrls::login() }}" data-stop-operation-message data-ajax-form-success="loginSuccess" class="btn btn-block btn-primary mt-lg">Login</button>
                    </form>
                </div>
                {{--<p class="pt-lg text-center">Need to Signup?</p><a href="register.html" class="btn btn-block btn-default">Register Now</a>--}}
            </div>
        </div>
        <!-- END panel-->
        <div class="p-lg text-center">
            <span>Al-Andalus Medical Sciences University</span>
            <span>&copy;</span>
            <span>{{ date('Y') }}</span>
        </div>
    </div>
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<script src="{{ asset(mix("js/admin-login.js")) }}"></script>
@include('controle.global-js')
<!-- =============== APP SCRIPTS ===============-->
<script src="{{ asset('app.js') }}"></script>
<script src="{{ asset('admin-custom.js') }}"></script>
<script>
    function loginSuccess(form ,res) {
        window.location.href = "{{ RouteUrls::admin() }}";
    }
</script>
</body>
</html>