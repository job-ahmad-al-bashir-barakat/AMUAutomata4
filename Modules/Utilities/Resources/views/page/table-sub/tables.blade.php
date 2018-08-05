@component('control.component.modal', [
    'id'                  => 'language-table-modal',
    'title'               => trans('utilities::app.language-table'),
    'stopForm'            => true,
    'stopFooter'          => true,
    'bodyClass'           => 'p0'
])
    {!! datatable('language-tables', '', 'false') !!}
@endcomponent

<script>
    function languageTablesModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#language-table-modal', "?table_name=" + $($this).data('key'));
    }
</script>
