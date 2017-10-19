@extends('temp_layout')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: home -->
        <section id="home" class="divider parallax" data-bg-img="http://placehold.it/1920x1280">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container pt-150 pb-150">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <div class="inline-block mt-40 pb-60 pl-60 pr-60 pt-40" data-bg-color="rgba(255,255,255, 0.8)">
                                    <h1 class="text-uppercase text-theme-colored font-raleway font-weight-800 mb-0 mt-0 font-48" >We Are <span class="text-theme-color-2">Studypress</span></h1>
                                    <p class="font-16 text-black font-raleway letter-spacing-1 mb-20">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.</p>
                                </div>
                            </div>
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
                        <ul>
                            <li>
                                <h5>Client:</h5>
                                <p>Kodesolution Lmd.</p>
                            </li>
                            <li>
                                <h5>Location:</h5>
                                <p>#405, Lan Streen, Los Vegas, USA</p>
                            </li>
                            <li>
                                <h5>Category:</h5>
                                <p>Web design & development, Graphics design</p>
                            </li>
                            <li>
                                <h5>Start Date:</h5>
                                <p>January 26, 2016</p>
                            </li>
                            <li>
                                <h5>End Date:</h5>
                                <p>February 10, 2016</p>
                            </li>
                            <li>
                                <h5>Website:</h5>
                                <p>kodesolution.com</p>
                            </li>
                            <li>
                                <h5>Share:</h5>
                                <div class="styled-icons icon-sm icon-gray icon-circled">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <img src="{{ asset('tempImage/755x480.png') }}" alt="">
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-md-12">
                        <h4 class="mt-0">Project Description</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</p>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-md-12">
                        <h4 class="mb-20">Recent Projects</h4>
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
