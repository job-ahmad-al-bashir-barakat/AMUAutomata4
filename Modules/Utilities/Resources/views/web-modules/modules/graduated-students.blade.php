<div class="col-md-{{ $data['width'] }}">
    <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">@lang('app.graduate_semester') <span id="title" class="text-theme-color-2 font-weight-400"></span></h2>
    <div class="row multi-row-clearfix">
        @foreach($data['graduated'] as $student)
            <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30 filters hide filter_graduate_semester_{{ $student->academic->graduate->id }}" >
                <div class="team maxwidth400">
                    <div class="thumb"><img class="img-fullwidth" src="{{ asset($student->image_path['sm']) }}" alt=""></div>
                    <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                        <h4 class="name text-theme-color-2 mt-0">{{ $student->lang_name[app()->getLocale()]->text }}</h4>
                        <p class="mb-20">Graduation GPA: <small>{{ $student->academic->gpa }}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <hr>
    <div class="row">
        @foreach($data['semesters'] as $semester)
        <div id="#graduate_semester_{{ $semester->id }}"
             data-filter=".filter_graduate_semester_{{ $semester->id }}"
             class="col-sm-6 col-md-3 wow fadeInLeft hand"
             data-wow-duration="1s"
             data-wow-delay="0.3s"
             style="visibility: visible;animation-duration: 1s;animation-delay: 0.3s;"
        >
            <div class="text-center content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                <h4 class="name text-theme-color-2 mt-0">@lang('app.graduated_student')</h4>
                <small id="title_text">{{ $semester->lang_name[app()->getLocale()]->text }}</small>
            </div>
        </div>
        @endforeach
    </div>
</div>
