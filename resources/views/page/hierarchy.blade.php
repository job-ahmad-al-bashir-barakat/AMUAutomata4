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
                            <h2 class="title text-white">Portfolio 4 Boxed Title Gutter</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Works Filter -->
                        <div class="portfolio-filter font-alt align-center">
                            <a href="#" class="active" data-filter="*">All</a>
                            @foreach($hierarchyType as $index => $type)
                                <a href="#{{ $index }}" data-filter=".{{ $index }}">{{ $type->first()->hierarchyType->lang_name[App::getLocale()]['text'] }}</a>
                            @endforeach
                        </div>
                        <!-- End Works Filter -->

                        <!-- Portfolio Gallery Grid -->
                        <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
                        {!! $hierarchy !!}
                        </div>
                        <!-- End Portfolio Gallery Grid -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

@endsection
