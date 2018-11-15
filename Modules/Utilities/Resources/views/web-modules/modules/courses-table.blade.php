{{--@php($facultySlug = \Route::input('faculty'))--}}
{{--@php($facultyId = getIdFromSlug($facultySlug))--}}
@php($facultyId = getRouteOptionalValue())
@php($courses = \Modules\Admin\Entities\Course::with(['degree' ,'department' ,'prerequisiteGroup.courses'])->whereFacultyId($facultyId)->get())
<div class="col-md-{{ $data['width'] }} mt-40">
    <div class="panel panel-info">
        <div class="panel-heading">Courses</div>
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