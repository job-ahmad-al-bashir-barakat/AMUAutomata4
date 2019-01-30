@component('control.component.modal', [
    'id'                  => 'events-modal',
    'title'               => trans('utilities::app.events'),
    'stopForm'            => true,
    'stopFooter'          => true,
    'bodyClass'           => 'p0'
])
    {!! datatable('events', '', 'false') !!}
@endcomponent

{{ FileUpload::ImageUpload('events' ,'events' ,'' ,'' , null , null ,[
    'modalId'    => 'events-image-upload',
    'modalTitle' => trans('utilities::app.events')
] ,'#datatable-events' ,'true' ,'.image',['autoReplace' => true, 'maxFileCount' => 1]) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}


<script>
    function eventsModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#events-modal', "?event_group_id=" + $($this).data('key'));
    }

    function showFileUploadModal($this)
    {
        AUT_UPLOAD.initFileUploadWithDatatable($this, '#events-image-upload', '#datatable-events');
    }
</script>