<div class="col-md-{{ $data['width'] ?? 12 }}">
    <div class="row blog-posts">
        <div class="col-md-12">
            <div id="events_list" class="gallery-isotope grid-2 masonry gutter-30 clearfix">

            </div>
        </div>
    </div>
    <div class="row mtli-row-clearfix">
        <div class="col-md-12 form-group text-center">
            <a href="{{ RouteUrls::eventsListHtml() }}"
               class="btn btn-default btn-circled ajax-link-module"
               data-trigger-on-load
               data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> @lang('app.loading')"
               data-page="1"
               data-append_to="#events_list"
               data-append_method="appendNews"
            >@lang('app.load_more')</a>
        </div>
    </div>
</div>
<script>
    function appendNews($cont, res) {
        var $items = $(res);
        // $cont.append($items).isotope( 'appended', $items ).isotope('layout');
        // console.log('News Appended with isotope', 1);
        window.setTimeout(function (){
            $cont.append($items).isotope( 'appended', $items ).isotope('layout');
        }, 50);
    }
</script>


