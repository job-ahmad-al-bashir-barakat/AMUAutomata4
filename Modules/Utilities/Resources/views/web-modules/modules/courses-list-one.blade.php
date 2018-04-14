<div class="col-md-{{ $data['width'] }}">
    <div id="courses_list" class="row mtli-row-clearfix form-group">

    </div>
    <div class="row mtli-row-clearfix">
        <div class="col-md-12 form-group text-center">
            <a href="{{ RouteUrls::coursesListHtml() }}"
               class="btn btn-default btn-circled ajax-link-module"
               data-trigger-on-load
               data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> @lang('app.loading')"
               data-page="1"
               data-append_to="#courses_list"
            >@lang('app.load_more')</a>
        </div>
    </div>
</div>
