@component('control.component.modal', [
    'id'                  => 'schema-language-table-modal',
    'title'               => trans('utilities::app.language-table'),
    'stopForm'            => true,
    'stopFooter'          => true,
    'bodyClass'           => 'p0'
])
    {!! datatable('schema-language-tables', '', 'false') !!}
@endcomponent

<script>
    function schemaLanguageTablesModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#schema-language-table-modal', "?table_name=" + $($this).data('key'));
    }
</script>
