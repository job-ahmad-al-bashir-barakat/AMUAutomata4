@extends('temp_layout')

@section('header')
    <style>
        .list-group .list-group-item { border-radius:0; }
    </style>
@endsection

@section('content')
    <div class="main-content">
        <section id="team">
            <div class="container">
                <div class="row mtli-row-clearfix">
                    <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
                        <div class="team-members maxwidth400">
                            <div class="team-thumb">
                                <div
                                    id="google-map1"
                                    data-address="121 King Street, Melbourne Victoria 3000 Australia"
                                    data-popupstring-id="#popupstring1"
                                    class="map-canvas autoload-map"
                                    data-mapstyle="style1"
                                    data-height="200"
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
                                {{--<img class="img-fullwidth" alt="" src="http://placehold.it/260x230">--}}
                            </div>
                            <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10">
                                <h4 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="page-teachers-details.html"> David Zakaria</a></h4>
                                <h5 class="text-theme-color">Teacher - MBA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
                        <div class="team-members maxwidth400">
                            <div class="team-thumb">
                                <div
                                    id="google-map2"
                                    data-address="121 King Street, Melbourne Victoria 3000 Australia"
                                    data-popupstring-id="#popupstring2"
                                    class="map-canvas autoload-map"
                                    data-mapstyle="style1"
                                    data-height="200"
                                    data-latlng="-37.817314,144.955431"
                                    data-title="sample title"
                                    data-zoom="12"
                                    data-marker="{{ asset('images/map-marker.png') }}">
                                </div>
                                <div class="map-popupstring hidden" id="popupstring2">
                                    <div class="text-center">
                                        <h3>Medinova Office</h3>
                                        <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                                    </div>
                                </div>
                                {{--<img class="img-fullwidth" alt="" src="http://placehold.it/260x230">--}}
                            </div>
                            <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10">
                                <h4 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="page-teachers-details.html"> David Zakaria</a></h4>
                                <h5 class="text-theme-color">Teacher - MBA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
                        <div class="team-members maxwidth400">
                            <div class="team-thumb">
                                <div
                                    id="google-map3"
                                    data-address="121 King Street, Melbourne Victoria 3000 Australia"
                                    data-popupstring-id="#popupstring3"
                                    class="map-canvas autoload-map"
                                    data-mapstyle="style1"
                                    data-height="200"
                                    data-latlng="-37.817314,144.955431"
                                    data-title="sample title"
                                    data-zoom="12"
                                    data-marker="{{ asset('images/map-marker.png') }}">
                                </div>
                                <div class="map-popupstring hidden" id="popupstring3">
                                    <div class="text-center">
                                        <h3>Medinova Office</h3>
                                        <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                                    </div>
                                </div>
                                {{--<img class="img-fullwidth" alt="" src="http://placehold.it/260x230">--}}
                            </div>
                            <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10">
                                <h4 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="page-teachers-details.html"> David Zakaria</a></h4>
                                <h5 class="text-theme-color">Teacher - MBA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
                        <div class="team-members maxwidth400">
                            <div class="team-thumb">
                                <div
                                    id="google-map4"
                                    data-address="121 King Street, Melbourne Victoria 3000 Australia"
                                    data-popupstring-id="#popupstring4"
                                    class="map-canvas autoload-map"
                                    data-mapstyle="style1"
                                    data-height="200"
                                    data-latlng="-37.817314,144.955431"
                                    data-title="sample title"
                                    data-zoom="12"
                                    data-marker="{{ asset('images/map-marker.png') }}">
                                </div>
                                <div class="map-popupstring hidden" id="popupstring4">
                                    <div class="text-center">
                                        <h3>Medinova Office</h3>
                                        <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                                    </div>
                                </div>
                                {{--<img class="img-fullwidth" alt="" src="http://placehold.it/260x230">--}}
                            </div>
                            <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10">
                                <h4 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="page-teachers-details.html"> David Zakaria</a></h4>
                                <h5 class="text-theme-color">Teacher - MBA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-sm-30">
                        <div class="team-members maxwidth400">
                            <div class="team-thumb">
                                <div
                                    id="google-map5"
                                    data-address="121 King Street, Melbourne Victoria 3000 Australia"
                                    data-popupstring-id="#popupstring5"
                                    class="map-canvas autoload-map"
                                    data-mapstyle="style1"
                                    data-height="200"
                                    data-latlng="-37.817314,144.955431"
                                    data-title="sample title"
                                    data-zoom="12"
                                    data-marker="{{ asset('images/map-marker.png') }}">
                                </div>
                                <div class="map-popupstring hidden" id="popupstring5">
                                    <div class="text-center">
                                        <h3>Medinova Office</h3>
                                        <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                                    </div>
                                </div>
                                {{--<img class="img-fullwidth" alt="" src="http://placehold.it/260x230">--}}
                            </div>
                            <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10">
                                <h4 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="page-teachers-details.html"> David Zakaria</a></h4>
                                <h5 class="text-theme-color">Teacher - MBA</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection