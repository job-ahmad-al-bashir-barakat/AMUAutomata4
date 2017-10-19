@extends('temp_layout')

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
                    <div class="col-xs-3 mt-40">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                Faculty 1
                                <span class="badge">7</span>
                            </a>
                            <a href="#" class="list-group-item">
                                Faculty 2
                                <span class="badge">4</span>
                            </a>
                            <a href="#" class="list-group-item">
                                Faculty 3
                                <span class="badge">4</span>
                            </a>
                            <a href="#"  class="list-group-item">
                                Faculty 4
                                <span class="badge">4</span>
                            </a>
                            <a href="#" class="list-group-item">
                                Faculty 5
                                <span class="badge">4</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-9 mt-40">
                        <div class="panel panel-info">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Courses</div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Department</th>
                                        <th>Degree</th>
                                        <th class="text-center">Name</th>
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
                                            <td style="vertical-align: middle;">{{ $course->degree->lang_name[App::getLocale()]['text'] }}</td>
                                            <td class="text-center" style="vertical-align: middle;">{{ $course->lang_name[App::getLocale()]['text'] }}</td>
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
