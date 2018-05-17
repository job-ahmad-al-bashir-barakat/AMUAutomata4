@extends('temp_layout')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
            <div class="container pt-70 pb-20">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title text-white">مخبر التحاليل الطبية</h2>
                            <ol class="breadcrumb text-left text-black mt-10">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active text-gray-silver">Page Title</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-pin text-theme-colored"></i></a>
                                    <div class="media-body">
                                        <strong>Lab Description</strong>
                                        <p class="pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                    <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                                        <p>+325 12345 65478</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <img src="{{ asset('tempImage/755x480.png') }}" alt="">
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-md-12">
                        <h4 class="mb-20">Lab Photo</h4>
                        <div class="owl-carousel-6col">
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->


    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid p-0">
            <div class="row">

                <!-- Google Map HTML Codes -->
                <div
                        data-address="121 King Street, Melbourne Victoria 3000 Australia"
                        data-popupstring-id="#popupstring1"
                        class="map-canvas autoload-map"
                        data-mapstyle="style8"
                        data-height="400"
                        data-latlng="-37.817314,144.955431"
                        data-title="sample title"
                        data-zoom="12"
                        data-marker="{{ asset('images/map-marker.png') }}">
                </div>
                <div class="map-popupstring hidden" id="popupstring1">
                    <div class="text-center">
                        <h3>Medinova Office</h3>
                        <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- end main-content -->

@endsection

@section('footer')
    <!-- Google Map Javascript Codes -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
    <script src="{{ asset('js/google-map-init.js') }}"></script>
@endsection
