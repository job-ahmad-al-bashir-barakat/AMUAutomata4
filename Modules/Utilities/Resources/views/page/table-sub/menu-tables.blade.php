@component('controle.component.modal', [
    'id'                  => 'table-columns-custom',
    'title'               => trans('utilities::app.table_columns'),
    'stopForm'            => true,
    'stopFooter'          => true,
    'bodyClass'           => 'p0'
])
    {!! datatable('menu-table-columns' ,'' ,'false') !!}
@endcomponent

<script>
    function tableColumnModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#table-columns-custom', "?id=" + $($this).data('key'));
    }
</script>
