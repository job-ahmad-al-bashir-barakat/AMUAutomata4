@extends('utilities::layouts.layout')

@section('content_header')
    @include('utilities::layouts._content_header',['title' => $title])
@endsection

@section('content')
    <div class="sub-container">
        <div class="row">
            @foreach($pageableTables as $pageableTable)
            <div class="col-md-6">
                @component('control.component.panel', [
                    'id'    => "panel-pages-{$pageableTable->table_name}",
                    'title' => "{$title}: {$pageableTable->lang_name[$lang]->text}",
                    'active' => false,
                    'class'  => 'p0',
                ])
                    {!! datatable('builder-pages', "?tableName={$pageableTable->table_name}") !!}
                @endcomponent
            </div>
            @endforeach
        </div>
    </div>
@stop

@section('footer')

    @component('control.component.modal', [
        'id'                  => 'sub-pages-modal',
        'title'               => trans('utilities::app.pages'),
        'stopForm'            => true,
        'stopFooter'          => true,
        'bodyClass'           => 'p0'
    ])
        {!! datatable('builder-pages', '', 'false') !!}
    @endcomponent

    @include('seo_builder::seo-form')

    {!! FormComponent::modalOpen('page_menu_modal') !!}
        {!! FormComponent::setAjax()->getData('get')->formOpen('page_menu_form', 'post', RouteUrls::builderMenu(),'',['data-editable-target' => RouteUrls::builderMenu()]) !!}
            {!! FormComponent::modalHeaderOpen(trans('utilities::app.menu')) !!}
            {!! FormComponent::modalHeaderClose() !!}
            {!! FormComponent::modalBodyOpen() !!}
                {!! FormComponent::fill('id')->primarykey('id', 'id') !!}
                {!! FormComponent::fill('page_id')->hidden('page_id', 'page_id', '', '', ['data-fixed-value', 'data-permanent=true']) !!}
                {!! FormComponent::fill('optional_id')->hidden('optional_id', 'optional_id', '', '', ['data-fixed-value', 'data-permanent=true']) !!}
                {!! FormComponent::fill('table_name')->hidden('table_name', 'table_name', '', '', ['data-fixed-value', 'data-permanent=true']) !!}
                {{--before fill('menu_id')--}}
                {!! FormComponent::fill(['id' => 'menu_id','name' => 'menu.lang_name.'.\App::getLocale().'.text'])->autocomplete(trans('utilities::app.menu'), 'menu_id', 'menu_id', 'autocomplete/menus', [], '0') !!}
                {!! FormComponent::fill('color')->select(trans('app.color'), 'color', 'color', \Modules\Utilities\Entities\MenuPage::getColorOptions()) !!}
                <div class="col-lg-8">
                    <i class="fa fa-image hand" style="font-size: 25px" onclick="showFileUploadLogoImage(this)"></i>
                    <div id="image_menu" class="hide">
                        {!! FormComponent::fill('image_id')->hidden('image_id', 'image_id') !!}
                    </div>
                    <div id="error_limit"></div>
                </div>
            {!! FormComponent::modalBodyClose() !!}
            {!! FormComponent::modalFooterOpen() !!}
            {!! FormComponent::formAjaxButtons() !!}
            {!! FormComponent::modalFooterClose() !!}
    {!! FormComponent::formAjaxButtons() !!}
        {!! FormComponent::formClose() !!}
    {!! FormComponent::modalClose() !!}

    {{ FileUpload::ImageUpload('logo_image' ,'logo_image' ,'' ,'' ,'', '' ,[
        'modalId'    => 'logo-image-upload',
        'modalTitle' => trans('app.logo')
    ] ,'', false, '.image', ['appendLocation' => '#image_menu', 'appendName' => 'image_id' ,'allowRatio' => true]) }}

    {{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

    <div id="page_modules" class="modal fade" role="dialog" aria-hidden="true" aria-labeledby="page modules">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(['id' => 'page_module_form']) }}
                    {!! FormComponent::hidden('page_id', 'page_id') !!}
                    {!! FormComponent::hidden('optional_id', 'optional_id') !!}
                    {!! FormComponent::hidden('table_name', 'table_name') !!}
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 id="myModalLabel" class="modal-title">
                            <span class="text-dialog">@lang('utilities::app.page-modules') [<i id="page_name"></i>]</span>
                        </h4>
                    </div>
                    <div class="modal-body clearfix">
                        <div class="table-responsive">
                            <table id="page_modules_table" class="table table-striped table-dynamic sortable" table-dynamic-input="id">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th style="width: 200px">@lang('utilities::app.custom-modules')</th>
                                    {{--<th style="width: 100px">@lang('utilities::app.position_location')</th>--}}
                                    <th class="center" style="width: 10px">@lang('app.delete')</th>
                                </tr>
                                <tr id="template_row" class="template-row hide">
                                    <td class="move">1</td>
                                    <td>
                                        {!! FormComponent::hidden('id', 'id[]', null, '', ['table-dynamic-modal' => 'id']) !!}
                                        {!! FormComponent::select(false, 'custom_module', 'custom_module[]', [], null, '', ['table-dynamic-class' => 'autocomplete', 'data-letter' => '0', "data-remote" => autocompleteURL('custom-modules'), 'table-dynamic-modal-option' => "custom_module_id:custom_module.lang_name.{$lang}.text", "data-target" => "body"]) !!}
                                    </td>
                                    {{--<td>{!! FormComponent::select(false, 'module_position' ,'module_position[]', \Modules\Utilities\WebModules\Modules\Module::POSITION, null, '', ['table-dynamic-class' => 'select', 'table-dynamic-modal' => 'position']) !!}</td>--}}
                                    {{--<td>{!! Form::bsNumber(false, 'order', 'order[]', null, '', ['table-dynamic-modal' => 'order']) !!}</td>--}}
                                    <td class="center"><span class="delete-action"></span></td>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default datatable-m-top-5">Close</button>
                        <button table-copy-row="#page_modules_table" type="button" class="btn btn-primary datatable-m-top-5"><span class="text-dialog">Add Row</span></button>
                        <button type="submit" class="btn btn-primary datatable-m-top-5 ajax"><span class="text-dialog">Save Changes</span></button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <script>
        function subPagesModal(btn)
        {
            var $this = $(btn);
            var tableName = $this.data('table_name');
            var objectId = $this.data('object_id');
            _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#sub-pages-modal', "?tableName=" + tableName +"&objectId=" + objectId);
        }
        $(function () {
            var $pageModulesModal = $('#page_modules');
            $pageModulesModal.on('show.bs.modal', function (e) {
                var $modal = $(this);
                var $btn = $(e.relatedTarget);
                var pageId = $btn.data('page_id');
                var pageName = $btn.data('page_name');
                var tableName = $btn.data('table_name');
                var objectId = $btn.data('object_id');
                $modal.find('[name="page_id"]').val(pageId);
                $modal.find('[name="table_name"]').val(tableName);
                $modal.find('[name="optional_id"]').val(objectId);
                $modal.find('#page_name').html(pageName);
                $modal.find('table.sortable').sortable({
                    items: "tbody>tr",
                    placeholder: "sortable-placeholder-dot"
                });
                var url = '{{ RouteUrls::getBuilderPageModules() }}' + '/' + tableName;
                if (pageId) {
                    url = url + '/' + pageId;
                    if (objectId) {
                        url = url + '/' + objectId;
                    }
                }
                $.get(url, function (res) {
                    AUTOMATA_APP.htmlTable.clearRows($('#page_modules_table'));
                    AUTOMATA_APP.htmlTable.fillTableData($('#page_modules_table'), res);
                });
            });
            //@todo should use FormComponent
            $('form#page_module_form').submit(function (e) {
                e.preventDefault();
                var $form = $(this);
                var url = $form.attr('action');
                var method = $form.attr('method');
                var inputs = $form.serialize();

                $.ajax({
                    url: url,
                    type: method,
                    data: inputs,
                    success: function (res) {
                        AUT_HELPER.notify({
                            message: OPERATION_MESSAGE_SUCCESS,
                            status: 'success',
                            icon: 'check'
                        });
                        $pageModulesModal.modal('toggle');
                    },
                    dataType: 'json'
                });

                return false;
            });
        });

        function showFileUploadLogoImage($this) {
            var inputFile = $('#logo-image-upload').find('.upload-file');
            AUT_UPLOAD.fileUpload.load(inputFile);
            $('#logo-image-upload').modal('show');
        }
    </script>
@endsection