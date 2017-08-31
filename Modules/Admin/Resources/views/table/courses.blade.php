@component('controle.component.modal', [
    'id'                  => 'prerequisite-custom',
    'title'               => trans('admin::app.prerequisite'),
    'stopForm'            => true,
    'stopFooter'          => true,
    'bodyClass'           => 'p0'
])
    {!! datatable('prerequisite' ,'' ,'false') !!}
@endcomponent

<script>
    function prerequisiteModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#prerequisite-custom', "?course=" + $($this).data('key') + "&parent=" + $($this).data('parent'));
    }
</script>
