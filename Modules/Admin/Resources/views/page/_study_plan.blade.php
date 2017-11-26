@if($semesters->count())
    <div class="animated bounceIn">
        <div class="col-lg-12 col-xs-12">
            <h4>@lang('admin::app.courses')</h4>
            <div id="target" class="target box-placeholder p-10" style="min-height: 40px;">
                @foreach($courses as $course)
                    <div class="label label-primary btn-xs m-5 hand" data-course="{{ $course->id }}" style="font-size: 12px;">
                        <input type="hidden" class="study-year" name="study-plan[{{ $course->id }}][faculty_study_year_id]" value="{{ $studyYear }}">
                        <span>{{ $course->lang_name[\App::getLocale()]['text'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-lg-12 col-xs-12">
            <div class="ajaxCont">
                {!! Form::open(['id' => 'form-study-plan' ,'url' => RouteUrls::studyPlan(), 'method' => 'post' ,'class' => 'form-horizontal  ajax-form']) !!}
                @component('controle.component.panel' ,[
                      'title' => trans('admin::app.study_plan'),
                      'class' => 'footer',
                ])
                    <div class="delete-study-plan"></div>
                    @foreach($semesters as $index => $semester)
                        <h5>{{ $semester->lang_name[App::getLocale()]['text'] }}</h5>
                        <div id="destination-{{$index}}" class="destination box-placeholder p-10" style="min-height: 40px;" data-semester="{{ $semester->id }}">
                            @if(isset($semester_courses[$semester->id]))
                                @foreach($semester_courses[$semester->id] as $index => $course)
                                    <div class="label label-primary btn-xs m-5 hand" data-course="{{ $course->id }}" style="font-size: 12px;">
                                        <input type="hidden" class="study-year" name="study-plan[{{ $course->id }}][faculty_study_year_id]" value="{{ $studyYear }}">
                                        <input type=hidden class="semester" name="study-plan[{{ $course->id }}][semester_id]" value="{{ $semester->id }}">
                                        <span>{{ $course->lang_name[\App::getLocale()]['text'] }}</span>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    @endforeach

                    @slot('footer')
                        <div class="text-center">
                            <button type="submit" class="btn btn-success" data-method="post" data-action="{{ RouteUrls::studyPlan() }}">{{ trans('app.save') }}</button>
                        </div>
                    @endslot
                @endcomponent
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@else
    <div class="col-lg-12 col-xs-12">
        <div class="alert alert-warning alert-dismissible fade in mt-10">
            <div class="p-5">
                <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="icons icon-info"></i>
                @lang('admin::app.error_semesters')
            </div>
        </div>
    </div>
@endunless