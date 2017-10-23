@extends('temp_layout')

@section('header')
    <style>
        .list-group .list-group-item { border-radius:0; }
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
                        <div class="panel panel-info">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Courses</div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Department</th>
                                        <th>Course</th>
                                        <th class="text-center">Code</th>
                                        <th class="text-center">Credit</th>
                                        <th>Prerequisite</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($courses as $course)
                                            @php($rowspan = $course->prerequisiteGroup->count() ? "rowspan=".$course->prerequisiteGroup->count() : "")
                                            <tr>
                                                <td style="vertical-align: middle;">{{ $course->department->lang_name[App::getLocale()]['text'] }}</td>
                                                <td style="vertical-align: middle;">
                                                    <b>{{ $course->lang_name[App::getLocale()]['text'] }}</b>
                                                    @if($course->degree->count())
                                                        <div style="font-size: 12px;">({{ $course->degree->lang_name[App::getLocale()]['text'] }})</div>
                                                    @endif
                                                </td>
                                                <td class="text-center" style="vertical-align: middle;">{{ $course->code }}</td>
                                                <td class="text-center" style="vertical-align: middle;">{{ $course->credit }}</td>
                                                @if($course->prerequisiteGroup->count())
                                                    <td style="vertical-align: middle;">
                                                        @foreach($course->prerequisiteGroup as $group)
                                                           <div class="m-10">
                                                               <div class="p-5">Group {{ $group->code }}:</div>
                                                               @foreach($group->courses as $_course)
                                                                   <i class="label label-primary m-5">
                                                                       {{ $_course->lang_name[App::getLocale()]['text']  }}
                                                                   </i>
                                                               @endforeach
                                                           </div>
                                                        @endforeach
                                                    </td>
                                                @else
                                                    <td colspan="{{$rowspan}}"></td>
                                                @endif
                                            </tr>
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
