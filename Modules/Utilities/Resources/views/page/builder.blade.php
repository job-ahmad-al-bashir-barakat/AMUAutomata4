@extends('utilities::layouts.layout')

@section('content_header')
    @include('utilities::layouts._content_header',['title' => $title])
@endsection

@section('content')
    <div class="sub-container">
        <div class="row">
            @foreach($pageableTables as $pageableTable)
            <div class="col-md-6">
                @component('controle.component.panel', [
                    'id'    => "panel-pages-{$pageableTable->table_name}",
                    'title' => "{$title}: {$pageableTable->table_name_humane}",
                    'active' => false,
                ])
                    {!! datatable('builder-pages', "?tableName={$pageableTable->table_name}") !!}
                @endcomponent
            </div>
            @endforeach
        </div>
    </div>
@stop

@section('footer')

    @component('controle.component.modal', [
        'id'                  => 'sub-pages-modal',
        'title'               => trans('utilities::app.pages'),
        'stopForm'            => true,
        'stopFooter'          => true,
        'bodyClass'           => 'p0'
    ])
        {!! datatable('builder-pages', '', 'false') !!}
    @endcomponent


    <div id="page_modules" class="modal fade" role="dialog" aria-hidden="true" aria-labeledby="page modules">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(['class' => 'ajax-form']) }}
                    {!! Form::bsHidden('page_id', 'page_id') !!}
                    {!! Form::bsHidden('object_id', 'object_id') !!}
                    {!! Form::bsHidden('table_name', 'table_name') !!}
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
                                    <th style="width: 100px">@lang('utilities::app.position_location')</th>
                                    <th class="center" style="width: 10px">@lang('app.delete')</th>
                                </tr>
                                <tr id="template_row" class="template-row hide">
                                    <td class="move">1</td>
                                    <td>
                                        {!! Form::bsHidden('id', 'id[]', null, '', ['table-dynamic-modal' => 'id']) !!}
                                        {{ Form::bsSelect(false,'custom_module', 'custom_module[]',[], null,'',['table-dynamic-class' => 'autocomplete', 'data-letter' => '0', "data-remote" => autocompleteURL('custom-modules'), 'table-dynamic-modal-option' => "custom_module_id:custom_module.lang_name.{$lang}.text"]) }}
                                    </td>
                                    <td>{!! Form::bsSelect(false, 'module_position' ,'module_position[]', \Modules\Utilities\WebModules\Modules\Module::POSITION, null, '', ['table-dynamic-class' => 'select', 'table-dynamic-modal' => 'position']) !!}</td>
{{--                                    <td>{!! Form::bsNumber(false, 'order', 'order[]', null, '', ['table-dynamic-modal' => 'order']) !!}</td>--}}
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
                $modal.find('[name="object_id"]').val(objectId);
                $modal.find('#page_name').html(pageName);
                $modal.find('table.sortable').sortable({
                    items: "tbody>tr",
                    placeholder: "sortable-placeholder-dot"
                });
                $.get('{{ RouteUrls::getBuilderPageModules() }}' + '/' + tableName + '/' + pageId + (objectId ? ( '/' + objectId) : ''), function (res) {
                    APP_AMU.htmlTable.clearRows($('#page_modules_table'));
                    APP_AMU.htmlTable.fillTableData($('#page_modules_table'), res);
                });
            });
            //todo should be global
            $('form.ajax-form').submit(function (e) {
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
                        HELPER_AMU.notify({
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
    </script>
@endsection