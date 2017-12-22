{{--@php($persons = \Modules\Admin\Entities\Person::paginate(1))--}}
<div class="col-md-{{ $data['width'] }}">
    <div id="faculty_instructors" class="row mtli-row-clearfix form-group">
        {{--@include('utilities::web-modules.modules.sub.persons-card-2', ['persons' => $persons])--}}
    </div>
    <div class="row mtli-row-clearfix">
        <div class="col-md-12 form-group text-center">
            <a href="{{ RouteUrls::facultyInstructorsHtml() }}"
               class="btn btn-default btn-circled ajax-link-module"
               data-trigger-on-load
               data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> @lang('app.loading')"
               data-page="1"
               data-append_to="#faculty_instructors"
            >@lang('app.load_more')</a>
        </div>
    </div>
</div>