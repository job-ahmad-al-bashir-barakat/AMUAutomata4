@extends('temp_layout')

@section('header')
    <style>
        .list-group .list-group-item { border-radius:0; }
    </style>
@endsection

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
                            <h2 class="title text-white">Event List without Sidebar</h2>
                            <ol class="breadcrumb text-center text-black mt-10">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active text-theme-colored">Page Title</li>
                                <li class="active text-theme-colored">Event List without Sidebar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: event calendar -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="widget-title line-bottom">Filter Lab</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                Cras justo odio
                            </a>
                            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item">Morbi leo risus</a>
                            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item">Vestibulum at eros</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div id="university-offices-wrapper" class="university-offices">
                            <div class="upcoming-events bg-white-f3 mb-20">
                                <div class="row">
                                    <div class="col-sm-4 pr-0 pr-sm-15">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="https://placehold.it/220x160" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pl-0 pl-sm-15">
                                        <div class="event-details p-15 mt-20">
                                            <h4 class="mt-0 text-uppercase font-weight-500">feed a hungry child</h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante Nulla vel metus scelerisque ante.</p>
                                            <a href="#" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10">Details <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="event-count p-15 mt-15">
                                            <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                                                <li class="p-15 mr-5 bg-lightest">Dec</li>
                                                <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                                                <li class="p-15 bg-lightest">2015</li>
                                            </ul>
                                            <ul>
                                                <li class="mb-10"><a href="#"><i class="fa fa-clock-o mr-5"></i> at 5.00 pm - 7.30 pm</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City.</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-events bg-white-f3 mb-20">
                                <div class="row">
                                    <div class="col-sm-4 pr-0 pr-sm-15">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="https://placehold.it/220x160" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pl-0 pl-sm-15">
                                        <div class="event-details p-15 mt-20">
                                            <h4 class="mt-0 text-uppercase font-weight-500">feed a hungry child</h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante Nulla vel metus scelerisque ante.</p>
                                            <a href="#" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10">Details <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="event-count p-15 mt-15">
                                            <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                                                <li class="p-15 mr-5 bg-lightest">Dec</li>
                                                <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                                                <li class="p-15 bg-lightest">2015</li>
                                            </ul>
                                            <ul>
                                                <li class="mb-10"><a href="#"><i class="fa fa-clock-o mr-5"></i> at 5.00 pm - 7.30 pm</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City.</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upcoming-events bg-white-f3 mb-20">
                                <div class="row">
                                    <div class="col-sm-4 pr-0 pr-sm-15">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="https://placehold.it/220x160" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pl-0 pl-sm-15">
                                        <div class="event-details p-15 mt-20">
                                            <h4 class="mt-0 text-uppercase font-weight-500">feed a hungry child</h4>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante Nulla vel metus scelerisque ante.</p>
                                            <a href="#" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10">Details <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="event-count p-15 mt-15">
                                            <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                                                <li class="p-15 mr-5 bg-lightest">Dec</li>
                                                <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                                                <li class="p-15 bg-lightest">2015</li>
                                            </ul>
                                            <ul>
                                                <li class="mb-10"><a href="#"><i class="fa fa-clock-o mr-5"></i> at 5.00 pm - 7.30 pm</a></li>
                                                <li><a href="#"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City.</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div id="load-next-university-offices" class="pt-0 pb-0">
                            <a href="#" class="btn btn-default btn-lg btn-block">Load more...</a>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </div>
    <!-- end main-content -->

@endsection

@section('footer')

    <script>
        /////////////////////////////////////
        // هي ما عم تشتغل لسبب ما تأكد ليش أنا حاولت ما عرفت
        ////////////////////////////////////
        $(function () {
            $('#load-next-university-offices a').appear();
            $(document.body).on('appear', '#load-next-university-offices a', function() {

                var $infinityload_container = $('#university-offices-wrapper');
                $infinityload_container.infinitescroll({
                        //debug         : true,
                        loading: {
                            finishedMsg: '<i class="fa fa-check"></i>',
                            msgText: '<i class="fa fa-spinner fa-spin"></i>',
                            img: "{{ asset("images/preloaders/1.gif") }}",
                            speed: 'normal'
                        },
                        state: {
                            isDone: false
                        },
                        nextSelector: "#load-next-university-offices a",
                        navSelector: "#load-next-university-offices",
                        itemSelector  :"#university-offices-wrapper > .upcoming-events",
                        //behavior: 'twitter'
                    },
                    function( newElements ) {
                        $infinityload_container.find('#infscr-loading').remove();
                    });
            });
        });

    </script>
@endsection
