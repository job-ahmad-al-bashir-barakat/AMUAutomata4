@php
    $facultySlug = \Route::input('faculty');
    $facultyId = getIdFromSlug($facultySlug);
    $studyYears = \Modules\Admin\Entities\Course::with(['degree' ,'department' ,'semester' ,'facultyStudyYear.studyYear'])
            ->where('faculty_id', '=', $facultyId)
            ->whereNotNull('faculty_study_year_id')
            ->whereNotNull('semester_id')
            ->get();
    $degrees = $studyYears->pluck("degree.lang_name.{$lang}.text" ,'degree_id');
    $studyYears = $studyYears->sortBy(function ($item) {
        return $item->faculty_study_year_id;
    })->groupBy(function ($item) {
        return $item->facultyStudyYear->studyYear->lang_name[$lang]['text'];
    })->map(function ($item) {
        return $item->sortBy(function ($item) {
            return $item->semester_id;
        })->groupBy(function ($item) {
            return $item->semester->lang_name[$lang]['text'];
        });
    });
@endphp
<div class="col-md-{{ $data['width'] }}">
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
                <div class="panel-heading">Courses</div>
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
                                            @php($degree = $course->degree->lang_name[$lang]['text'])
                                            <span data-filter="{{ \Illuminate\Support\Str::slug($degree ,'-') }}" class="target-filter label label-default" style="display: inline-block; background-color: rgba(212, 212, 212, 0.56); color: #656565; text-align: left; padding: 5px; margin: 5px 2px;">
                                                <span>{{ $course->lang_name[$lang]['text'] }}</span>
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