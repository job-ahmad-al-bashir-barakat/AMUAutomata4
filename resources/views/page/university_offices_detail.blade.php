@extends('temp_layout')

@section('content')

    <!-- Start main-content -->
    <div class="main-content">

        <section class="inner-header layer-overlay" data-bg-img="http://placehold.it/1920x1280" style="background-image: url('http://placehold.it/1920x1280');">
            <div class="container pt-10 pb-10">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="title text-white name">Sakib Smith</h2>
                            <h6 class="title text-white font-24">Chemistry Teachers</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Experts Details -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row mt-30">
                        <div class="col-md-4">
                            <div class="volunteer-address">
                                <ul>
                                    <li>
                                        <div class="bg-light media border-bottom p-15 mb-15">
                                            <div class="media-left">
                                                <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0 pb-5">Contact:</h5>
                                                <p>
                                                    <strong>Phone:</strong> +262 695 2601<br>
                                                    <strong>Email:</strong> +262 695 2601<br>
                                                    <strong>Mobile:</strong> +262 695 2601<br>
                                                    <strong>Fax:</strong> +262 695 2601<br>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bg-light media border-bottom p-15">
                                            <div class="media-left">
                                                <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0 pb-5">Address:</h5>
                                                <p>
                                                    <div class="mt-5">
                                                        <strong>Address 1:</strong> <a class="popup-gmaps" href="https://maps.google.com/maps?q=Aleppo">Address one</a><br>
                                                    </div>
                                                    <div class="mt-5">
                                                        <strong>Address 2:</strong> <a class="popup-gmaps" href="https://maps.google.com/maps?q=Homs">Address two</a>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="clearfix">
                                <h4 class="line-bottom">Quick Contact:</h4>
                            </div>
                            <form id="contact-form" class="contact-form-transparent">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Name" id="contact_name" name="contact_name" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Email" id="contact_email" name="contact_email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Subject" id="contact_subject" name="contact_subject" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" placeholder="Enter Message" id="contact_message" name="contact_message" required class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button data-loading-text="Please wait..." class="btn btn-flat btn-dark btn-theme-colored mt-5" type="submit">Send your message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
                            <h3>CharityFund Office</h3>
                            <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                        </div>
                    </div>
                    <!-- Google Map Javascript Codes -->

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
