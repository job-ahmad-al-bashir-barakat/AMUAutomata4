<div class="col-md-{{ $data['width'] }}">
    <div id="offices_list_1" class="row mtli-row-clearfix">

    </div>
    <div class="row mtli-row-clearfix">
        <div class="col-md-12 form-group text-center">
            <a href="{{ RouteUrls::officesListHtml() }}"
               class="btn btn-default btn-circled ajax-link-module"
               data-trigger-on-load
               data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> @lang('app.loading')"
               data-page="1"
               data-append_to="#offices_list_1"
               data-onsuccess="googlemap_initialize"
            >@lang('app.load_more')</a>
        </div>
    </div>
</div>