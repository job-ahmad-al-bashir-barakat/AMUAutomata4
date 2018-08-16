@inject('seoBuilder', 'SeoBuilder')
{!! FormComponent::modalOpen('page_seos_modal') !!}
    {!! FormComponent::setAjax()->getData('get')->formOpen('seo_form', 'post', RouteUrls::builderSeo()) !!}
        {!! FormComponent::modalHeaderOpen('Search Engine Optimization') !!}
        {!! FormComponent::modalHeaderClose() !!}
        {!! FormComponent::modalBodyOpen('pt-0') !!}
            <div class="row">
                <div class="col-lg-2 col-md-2 visible-lg visible-md darkness tab-area datatable-sidebar-tab-erea"></div>
                <div class="col-md-2 bhoechie-tab-menu">
                    <div class="list-group">
                        <a role="tab" data-tab="seo_tab" href="#seo_tab" class="list-group-item text-center active" data-toggle="tab" aria-expanded="true">
                            <h4 class="fa fa-rss fa-2x"></h4><br><span>Seo</span>
                        </a>
                        <a role="tab" data-tab="graph_tab" href="#graph_tab" class="list-group-item text-center" data-toggle="tab" aria-expanded="false">
                            <h4 class="fa fa-facebook fa-2x"></h4><br><span>Graph</span>
                        </a>
                        <a role="tab" data-tab="card_tab" href="#card_tab" class="list-group-item text-center" data-toggle="tab" aria-expanded="false">
                            <h4 class="fa fa-twitter fa-2x"></h4><br><span>Card</span>
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
                    <div id="card_tab" data-tab="card_tab" class="bhoechie-tab-content animated zoomInUp">
                        {!! FormComponent::fill('card_type')->select('Card Types', 'card_type', 'card_type', $seoBuilder->getCardTypesTrans(), '', '', [
                            'select-filter-with' => '#graph_attributes_cont',
                            'select-filter-disabled' => true,
                        ]) !!}
                        <div class="form-group ">
                            <label class="label control-label" for="limit">Card Image</label>
                            <div class="col-lg-8">
                                <i class="fa fa-image hand" style="font-size: 25px" onclick="showFileUploadCardImage(this)"></i>
                                <div id="card_image" class="hide">
                                    {!! FormComponent::fill('card_image_id')->hidden('card_image_id', 'card_image_id') !!}
                                </div>
                                <div id="error_limit"></div>
                            </div>
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
] ,'', false, '.image', ['appendLocation' => '#images', 'appendName' => 'graph_image_id' ,'allowRatio' => true]) }}

{{ FileUpload::ImageUpload('card_image' ,'card_image' ,'' ,'' ,'100', '100' ,[
    'modalId'    => 'card-image-upload',
    'modalTitle' => trans('utilities::app.upload_card_image')
] ,'', false, '.image', ['appendLocation' => '#card_image', 'appendName' => 'card_image_id','allowRatio' => true]) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

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

    function showFileUploadCardImage($this) {
        var inputFile = $('#card-image-upload').find('.upload-file');
        AUT_UPLOAD.fileUpload.load(inputFile);
        $('#card-image-upload').modal('show');
    }
</script>