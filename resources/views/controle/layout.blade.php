<!DOCTYPE html>
<html lang="{{ $lang }}" dir="{{ $dir }}">

<head>
    @include("$module::layouts._meta")
    <!-- =============== VENDOR STYLES ===============-->
    <link id="maincss" rel="stylesheet" href="{{ asset(mix("css/admin-all-$dir.css")) }}">
    <link id="autoloaded-stylesheet" rel="stylesheet" href="{{ isset($_COOKIE['controleThemeColorUrl']) ? asset($_COOKIE['controleThemeColorUrl']) : asset('css/theme-a.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-custom.css') }}">
    @include('controle._style')
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{ asset('/') }}">

    <div role="header">
        @yield('header')
    </div>
</head>

<body>
<div class="wrapper">

    <div class="preloader animated fadeIn theme-color">
        <div class="preloader-progress" style="background-image: url({{ asset("img/preloader/preloader.empty-$dir.png") }});">
            <div class="preloader-progress-bar" style="background-image: url({{ asset("img/preloader/preloader.full-$dir.png") }});"></div>
        </div>
    </div>

    <!-- top navbar-->
    @include("$module::layouts._header")
    <!-- sidebar-->
    @include("controle._aside_modules")
    <!-- offsidebar-->
    @include("$module::layouts._offsidebar")
    <!-- Main section-->
    <section>
        <!-- Loader -->
        <div class="progressLine">
            <!-- Ajax Content -->
            <div id="pjax-container">
                <!-- Page content-->
                <div class="content-wrapper">

                    @yield('content_header')

                    @yield('content')

                </div>
            </div>
        </div>
    </section>
    <!-- Page footer-->
    <footer>
        <span>&copy; {{ date('Y') }} - {{ trans('app.automata4_group') }}</span>
    </footer>

</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<script>
    LTR_CSS = '{{ asset(mix('css/admin-all-ltr.css')) }}';
    RTL_CSS = '{{ asset(mix('css/admin-all-rtl.css')) }}';

    paceOptions = {
        elements: true,
        restartOnRequestAfter: false,
        ajax: true,
        startOnPageLoad: false,
        document: false,
        target: '.progressLine',
        elements: {
            selectors: ['.progressLine']
        }
    }
</script>

{{--maps-api-ssl.google.com/maps--}}
{{--maps.googleapis.com/maps/api/js?v=3.exp&sensor=true--}}
{{--maps.google.com/maps/api/js--}}

{{--async defer--}}
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCC3X-thsM5s1FkNqwFtRKTaa1CMFctf1k&language={{$lang}}&libraries=places"></script>
<script src="{{ asset(mix("js/admin-all-$dir.js")) }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('admin-custom.js') }}"></script>

@include('controle.global-js')
<div role="footer">
    @yield('footer')
</div>

</body>
</html>

