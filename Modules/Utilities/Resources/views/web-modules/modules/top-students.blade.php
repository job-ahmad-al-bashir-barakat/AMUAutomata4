<div class="col-md-{{ $data['width'] }}">
    <h2 class="mt-0 font-28 text-center line-height-1"><span id="title" class="text-theme-color-2 font-weight-400"></span></h2>
    @foreach($data['students'] as $level)
        <div class="study-level-hide">
            @php($studyLevel = $level->first()->studyYear)
            <h2 class="mt-0 font-28 line-height-1 line-bottom">@lang('app.study_level') <span class="text-theme-color-2 font-weight-400">{{ $studyLevel->lang_name[app()->getLocale()]->text }}</span></h2>
            <div class="row multi-row-clearfix top-student-cont">
                @foreach($level as $topStudent)
                    @php($student = $topStudent->student)
                    <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30 filters  filter_top_student_{{ $student->academic->graduate->id }}">
                        <div class="team maxwidth400">
                            <div class="thumb"><img class="img-fullwidth" src="{{ asset($student->image_path['sm']) }}" alt=""></div>
                            <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                                <h4 class="name text-theme-color-2 mt-0">{{ $student->lang_name[app()->getLocale()]->text }}</h4>
                                <p class="mb-20">@lang('app.graduate_gpa'):
                                        <small>{{ $topStudent->gpa }}</small>
                                </p>
                                <p class="mb-20">@lang('app.rank'):
                                    <small>{{ $topStudent->rank->lang_name[app()->getLocale()]->text }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr>
        </div>
    @endforeach

    <div class="row">
        @foreach($data['semesters'] as $semester)
            <div id="student_semester_{{ $semester->id }}"
                 data-custom-filter=".filter_top_student_{{ $semester->id }}"
                 class="col-sm-6 col-md-3 wow fadeInLeft hand"
                 data-wow-duration="1s"
                 data-wow-delay="0.3s"
                 data-check-empty-cont=".top-student-cont"
                 data-check-empty-hide=".study-level-hide"
                 style="visibility: visible;animation-duration: 1s;animation-delay: 0.3s;"
            >
                <div class="text-center content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                    <h4 class="name text-theme-color-2 mt-0">@lang('app.study_semester')</h4>
                    <small id="title_text">{{ $semester->lang_name[app()->getLocale()]->text }}</small>
                </div>
            </div>
        @endforeach
    </div>
</div>
