@inject('seoBuilder', 'SeoBuilder')
{!! FormComponent::modalOpen('page_seos_modal') !!}
    {!! FormComponent::setAjax()->getData('get')->formOpen('seo_form', 'post', RouteUrls::builderSeo()) !!}
        {!! FormComponent::modalHeaderOpen('Search Engine Optimization') !!}
        {!! FormComponent::modalHeaderClose() !!}
        {!! FormComponent::modalBodyOpen() !!}
            <div class="row">
                <div class="col-md-2 bhoechie-tab-menu">
                    <div class="list-group">
                        <a role="tab" data-tab="seo_tab" href="#seo_tab" class="list-group-item text-center active" data-toggle="tab" aria-expanded="true">
                            <h4 class="fa fa-user fa-2x"></h4><br><span>Seo</span>
                        </a>
                        <a role="tab" data-tab="graph_tab" href="#graph_tab" class="list-group-item text-center" data-toggle="tab" aria-expanded="false">
                            <h4 class="fa fa-user fa-2x"></h4><br><span>Graph</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-10 bhoechie-tab tabs tabs-content">
                    <div id="seo_tab" data-tab="seo_tab" class="bhoechie-tab-content animated zoomInUp active">
                        {!! FormComponent::fill('id')->primarykey('id', 'id') !!}
                        {!! FormComponent::hidden('page_id', 'page_id') !!}
                        {!! FormComponent::hidden('optional_id', 'optional_id') !!}
                        {!! FormComponent::hidden('table_name', 'table_name') !!}
                        {!! FormComponent::fill('lang_title.{lang}.text')->trans()->langs()->text('Title', 'title', 'title') !!}
                        {!! FormComponent::fill('lang_description.{lang}.text')->trans()->langs()->text('Description', 'description', 'description') !!}
                        {!! FormComponent::fill('lang_keyword.{lang}.text')->tagInput()->trans()->langs()->text('Keyword', 'keyword', 'keyword') !!}
                    </div>
                    <div id="graph_tab" data-tab="graph_tab" class="bhoechie-tab-content animated zoomInUp">
                        {{--{!! FormComponent::fill('lang_graph_title.{lang}.text')->trans()->langs()->text('Title', 'graph_title', 'graph_title') !!}--}}

                        <div class="form-group ">
                            <label class="label control-label" for="limit">Graph Image</label>
                            <div class="col-lg-8">
                                <i class="fa fa-image hand" style="font-size: 25px" onclick="showFileUploadGraphImage(this)"></i>
                                <div id="images" class="hide">
                                    {!! FormComponent::fill('graph_image_id')->hidden('graph_image_id', 'graph_image_id') !!}
                                </div>
                                <div id="error_limit"></div>
                            </div>
                        </div>

                        {!! FormComponent::fill('image.lang_alt.{lang}.text')->trans()->langs()->text('Image Alt', 'alt', 'alt') !!}
                        {!! FormComponent::fill('graph_type')->select('Graph Types', 'graph_type', 'graph_type', $seoBuilder->getGraphTypesTrans(), '', '', [
                            'select-filter-with' => '#graph_attributes_cont',
                            'select-filter-disabled' => true,
                        ]) !!}
                        <div id="graph_attributes_cont">
                            @foreach($seoBuilder->getGraphTypes() as $graphType)
                                <div select-filter-item="{{ $graphType }}" >
                                    @include('seo_builder::sub.render-inputs', ['inputs' => $seoBuilder->getGraphAttributes($graphType), 'graphType' => $graphType])
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        {!! FormComponent::modalBodyClose() !!}
        {!! FormComponent::modalFooterOpen() !!}
            {!! FormComponent::formAjaxButtons() !!}
        {!! FormComponent::modalFooterClose() !!}
    {!! FormComponent::formClose() !!}
{!! FormComponent::modalClose() !!}

{{ FileUpload::ImageUpload('graph_image' ,'graph_image' ,'' ,'' ,'100', '100' ,[
    'modalId'    => 'graph-image-upload',
    'modalTitle' => trans('utilities::app.upload_graph_image')
] ,'', false, '.image', ['appendLocation' => '#images', 'appendName' => 'graph_image_id']) }}

<script>
    $(function () {
        $(document).on('change', '[select-filter-with]', function () {
            var $element = $(this);
            var value = $element.val();
            var linkedWith = $element.attr('select-filter-with');
            var disabled = $element.attr('select-filter-disabled');
            var $container = $(linkedWith);
            var $activeElements = $container.find('[select-filter-item="' + value + '"]');
            if ($activeElements.length) {
                $container.find('[select-filter-item]').addClass('hide');
                if(disabled) {
                    $container.find('[select-filter-item] :input').attr('disabled', true);
                    $activeElements.find(':input').attr('disabled', false);
                }
                $activeElements.removeClass('hide');
            }
        });
        $('[select-filter-with]').trigger('change');
    });

    function showFileUploadGraphImage($this) {
        var inputFile = $('#graph-image-upload').find('.upload-file');
        AUT_UPLOAD.fileUpload.load(inputFile);
        $('#graph-image-upload').modal('show');
    }

</script>