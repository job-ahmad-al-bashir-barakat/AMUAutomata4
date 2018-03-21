
{{ FileUpload::ImageUpload('course' ,'course' ,'' ,'' ,'265' ,'195' ,[
    'modalId'    => 'course-image-upload',
    'modalTitle' => trans('admin::app.upload_image')
] ,'#datatable-course') }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

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
    function showFileUploadModal($this) {

        AUT_UPLOAD.initFileUploadWithDatatable($this,'#course-image-upload','#datatable-course');
    }

    function prerequisiteModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#prerequisite-custom', "?course=" + $($this).data('key') + "&parent=" + $($this).data('parent'));
    }
</script>
