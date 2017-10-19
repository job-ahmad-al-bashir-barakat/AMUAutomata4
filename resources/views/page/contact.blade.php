@extends('temp_layout')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white">Contact</h2>
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

    @include('utilities::web-modules.modules.modules')

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
                        <h3>CharityFund Office</h3>
                        <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')

    <!-- Google Map Javascript Codes -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
    <script src="{{ asset('js/google-map-init.js') }}"></script>

    <!-- Contact Form Validation-->
    <script type="text/javascript">
        $("#contact_form").validate({
            submitHandler: function(form) {
                var form_btn = $(form).find('button[type="submit"]');
                var form_result_div = '#form-result';
                $(form_result_div).remove();
                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                var form_btn_old_msg = form_btn.html();
                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                        if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                });
            }
        });
    </script>
@endsection