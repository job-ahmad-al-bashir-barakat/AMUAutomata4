@extends('temp_layout')

@section('header')
    <style xmlns="">
        .list-group .list-group-item { border-radius:0; }

        .filter-plan {
            background-color: white;
            color: black;
            border: 1px solid;
        }

        .filter-plan:hover {
            border: 1px dashed;
        }

        .td-center {
            text-align: center;
            vertical-align: middle !important;
            background-color: rgba(35, 35, 35, 0.05);
            width: 200px;
        }

        /**
         * td vertical
         */

        .td-rotate {
            vertical-align: middle !important;
            text-align: center;
            transform: rotate(270deg);
            display: table-cell;
            white-space: nowrap;
            width: 1.5em;
        }

    </style>
@endsection

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white">Courses</h2>
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

    <section class="bg-lighter">
        <div class="container pb-30">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="sub-title">Sub Title Here</h5>
                        <h2 class="title">Title Style One</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo et adipisci, beatae ad sapiente aspernatur accusamus!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 mt-40">
                        <h4 class="widget-title line-bottom">
                            <a href="#">
                                <b>Filter Table</b>
                            </a>
                            <span class="pull-right">
                                <i class="fa fa-print m-5 hand"></i>
                            </span>
                        </h4>
                        <div class="col-xs-12 p-0">
                            <ul class="list-group">
                                <li class="list-group-item clearfix p-20">
                                    <div class="col-xs-12 pb-10 filter-area">
                                        <span class="filter-apply m-5">
                                            <span class="fa fa-filter"></span>
                                        </span>
                                        <span class="search-choose m-5 hide">
                                            <span class="search-title"></span>
                                            <span class="search-remove hand fa fa-times-circle"></span>
                                        </span>
                                    </div>
                                    <div class="col-xs-12 pb-5">
                                        <div><b>Degree</b></div>
                                        @foreach($degrees as $degree)
                                            <span data-filter="{{ \Illuminate\Support\Str::slug($degree ,'-') }}" class="label label-default filter-plan hand">{{ $degree }}</span>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 mt-40">
                        <div class="panel panel-info">
                            <!--Default panel contents-->
                            <div class="panel-heading">Courses</div>

                            <!--Table-->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Study Year</th>
                                            <th class="text-center">Semester</th>
                                            <th>Course</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($studyYears as $studyYearTitle => $studyYear)
                                            <tr>
                                                <td class="td-rotate" rowspan="{{ count($studyYear) + 1 }}">
                                                    {{ $studyYearTitle }}
                                                </td>
                                            </tr>
                                            @foreach($studyYear as $semesterTitle => $courses)
                                                <tr>
                                                    <td class="td-center">{{ $semesterTitle }}</td>
                                                    <td>
                                                        @foreach($courses as $indexCourse => $course)
                                                            @php($degree = $course->degree->lang_name[App::getLocale()]['text'])
                                                            <span data-filter="{{ \Illuminate\Support\Str::slug($degree ,'-') }}" class="target-filter label label-default" style="display: inline-block; background-color: rgba(212, 212, 212, 0.56); color: #656565; text-align: left; padding: 5px; margin: 5px 2px;">
                                                                <span>{{ $course->lang_name[App::getLocale()]['text'] }}</span>
                                                                @if($course->degree->count())
                                                                    <span style="display: block; margin-top: 5px; font-weight: normal;">({{ $degree }})</span>
                                                                @endif
                                                            </span>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
 <script>

     $('.filter-plan').on('click' ,function () {

         // clone
         var $this = $(this),
             item  = $('.search-choose.hide')
             .clone()
             .removeClass('hide');

         // add data filter
         item.data('filter' ,$this.data('filter'))
         // add text
         item.find('.search-title').text($this.text());
         // append
         item.appendTo('.filter-apply');
         // hide it
         $this.hide();


         var findIn = [];
         $('.search-choose:not(.hide)').each(function (i ,v) {
             findIn.push('.target-filter[data-filter=' + $(v).data('filter') + ']');
         });

         var selector = $(findIn.join(','));
         if(selector.length) {
             $('.target-filter').not('.choosen').fadeOut();
             selector.addClass('choosen').fadeIn();
         }
     });

     $('.filter-area').on('click' ,'.search-remove' ,function () {

         var $this        = $(this),
             filter       = $this.closest(".search-choose:not(.hide)").data('filter'),
             filterPlan   = $('.filter-plan[data-filter='+ filter +']'),
             targetFilter = $('.target-filter[data-filter=' + filter + ']');

         filterPlan.show();

         $this.closest(".search-choose:not('.hide')").remove();

         targetFilter.removeClass('choosen');

         if($('.target-filter.choosen').length)
             targetFilter.fadeOut();
         else
            $('.target-filter').fadeIn();
     });

 </script>
@endsection
