<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="StudyPress | Education & Courses HTML Template" />
    <meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
    <meta name="author" content="automata4" />

    <!-- Page Title -->
    <title>StudyPress | Education & Courses HTML Template</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/css-plugin-collections.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{ asset('css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Main style file -->
    <link href="{{ asset('css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- CSS | Theme Color -->
    <link href="{{ asset('css/colors/theme-skin-color-set-1.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="animated fadeIn">
<div id="wrapper" class="clearfix">

    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="bg-lightest fullscreen layer-overlay overlay-dark-6" data-bg-img="http://placehold.it/1920x1280" style="background-image: url(&quot;http://placehold.it/1920x1280&quot;); height: 381px;">
            <div class="display-table text-center">
                <div class="display-table-cell">
                    <div class="container pt-0 pb-0"><div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <h1 class="text-white font-weight-400 font-64 mb-0">{{ trans('utilities::app.under_maintenance') }}</h1>
                                <p class="font-14 text-gray-lightgray">{!! trans('utilities::app.under_maintenance_message') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer id="footer" class="footer bg-black-333 text-center pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-black-777 m-0">{{ trans('utilities::app.copyright',['date' => date('Y')]) }}</p>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- external javascripts -->
<script src="{{ asset(mix('js/main.js')) }}"></script>

<!--[if lt IE 9]>
<script src="{{ asset(mix('js/ie.js')) }}"></script>
<![endif]-->

<!-- JS | Custom script for all pages -->
{{--<script src="js/custom.js"></script>--}}

</body>
</html>