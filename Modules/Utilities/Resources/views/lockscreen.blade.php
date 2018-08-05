<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>Angle - Bootstrap Admin Template</title>
    <!-- =============== VENDOR STYLES ===============-->
    <link rel="stylesheet" href="{{ asset(mix("css/admin-membership-$dir.css")) }}">
    <link rel="stylesheet" href="{{ asset('admin-custom.css') }}">
</head>

<body>
<div class="wrapper animated fadeIn">
    <div class="abs-center wd-xl">
        <!-- START panel-->
        <div class="p">
            <img src="{{ asset('img/user/02.jpg') }}" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle center-block">
        </div>
        <div class="panel widget b0">
            <div class="panel-body">
                <p class="text-center">{{ trans('utilities::app.unlock_caption') }}</p>
                <form role="form" method="post" action="{{ RouteUrls::unlockscreen() }}">
                    {{ csrf_field() }}
                    <div class="form-group has-feedback">
                        <input id="password" type="password" name="password" placeholder="{{ trans('utilities::app.password') }}" class="form-control">
                        <span class="fa fa-lock form-control-feedback text-muted"></span>
                        @foreach ($errors->all() as $error)
                            <div class="error_password validate-error validate-error-help-block validate-error-style animated fadeInDown">{{ $error }}</div>
                        @endforeach
                    </div>
                    <div class="clearfix">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-sm btn-primary">{{ trans('utilities::app.unlock') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END panel-->
        <div class="p-lg text-center">
            <span>{{ trans('utilities::app.amu') }}</span>
            <span>&copy;</span>
            <span>{{ date('Y') }}</span>
        </div>
    </div>
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<script src="{{ asset(mix("js/admin-membership-{$dir}.js")) }}"></script>
@include('control.global-js')
<!-- =============== APP SCRIPTS ===============-->
<script src="{{ asset('app.js') }}"></script>
<script src="{{ asset('admin-custom.js') }}"></script>
</body>

</html>