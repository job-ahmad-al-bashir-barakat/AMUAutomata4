@component('control.component.modal', [
    'id'                  => 'events-modal',
    'title'               => trans('utilities::app.events'),
    'stopForm'            => true,
    'stopFooter'          => true,
    'bodyClass'           => 'p0'
])
    {!! datatable('events', '', 'false') !!}
@endcomponent

<script>
    function eventsModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#events-modal', "?event_group_id=" + $($this).data('key'));
    }
</script>
