@php($facultyId = '')
@if(request()->route())
    @php(list($type, $typeId, $facultyId) = explode('.', request()->route()->getName()))
@endif
@if($data['faculty'] ?? false)
    @php($facultyId = $data['faculty']->id)
@endif
<div class="col-md-{{ $data['width'] }}">
    <div id="labs_list" class="row mtli-row-clearfix">

    </div>
    <div class="row mtli-row-clearfix">
        <div class="col-md-12 form-group text-center">
            <a href="{{ RouteUrls::LabsListHtml() . "?facultyId=$facultyId" }}"
               class="btn btn-default btn-circled ajax-link-module"
               data-trigger-on-load
               data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> @lang('app.loading')"
               data-page="1"
               data-append_to="#labs_list"
            >@lang('app.load_more')</a>
        </div>
    </div>
</div>
