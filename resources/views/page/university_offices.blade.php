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
                            <h2 class="title text-white">University office</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
                    <div class="col-md-6">
                        <h4 class="mt-0">Project Description</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</p>
                    </div>
                    <div class="col-md-6">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
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
                <div style="font-size: 30px; padding-top: 25px;">
                    Google Map For Location
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection