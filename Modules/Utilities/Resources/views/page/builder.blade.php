@extends('utilities::layouts.layout')

@section('content_header')
    @include('utilities::layouts._content_header',['title' => $title])
@endsection

@section('content')

    <div class="container">
        <!-- START row-->
        <div class="row">

            <div class="col-md-6">

                @component('controle.component.panel', [
                    'id'    => 'panel-pages',
                    'title' => $title
                ])
                {!! datatable('builder-pages') !!}
                @endcomponent

            </div>
        </div>
    </div>

@stop

@section('footer')
    <div id="page_modules" class="modal fade" role="dialog" aria-hidden="true" aria-labeledby="page modules">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(['class' => 'ajax-form']) }}
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 id="myModalLabel" class="modal-title">
                            <span class="text-dialog">Page Modules [<i id="page_name"></i>]</span>
                        </h4>
                    </div>
                    <div class="modal-body clearfix">
                        <div class="table-responsive">
                            <table id="page_modules_table" class="table table-striped table-dynamic" >
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Custom Modules</th>
                                    <th>Position</th>
                                    <th>Order</th>
                                </tr>
                                <tr id="template_row" class="hide">
                                    <td>1</td>
                                    <td>{{ Form::bsAutocomplete(false,'custom_module', 'custom_module[]', autocompleteURL('modules'), [''=>''],'0') }}</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
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
        $(function () {
            var $pageModulesModal = $('#page_modules');
            $pageModulesModal.on('show.bs.modal', function (e) {
                var $modal = $(this);
                var $btn = $(e.relatedTarget);
                var pageId = $btn.data('page_id');
                var pageName = $btn.data('page_name');
                $modal.find('[name="page_id"]').val(pageId);
                $modal.find('#page_name').html(pageName);
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
                        console.log(res)
                    },
                    dataType: 'json',
                });

                return false;
            });
            //todo should be global
            //todo this will make duplicated clicks when reloading from pjax it will set the delegate for each pjax reload
            $(document).on('click.table_copy_row', '[table-copy-row]', function () {
                var $btn = $(this);
                var $table = $($btn.attr('table-copy-row'));
                var $templateRow = $table.find('thead #template_row');
                var rowId = $templateRow.data('id') || null;
                var $newRow = $templateRow.clone().removeClass('hide').attr('id', rowId).appendTo($table.find('tbody'));
            });
        });
    </script>
@endsection