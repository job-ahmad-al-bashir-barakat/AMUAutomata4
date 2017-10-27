
{{ Form::bsImageUpload('course' ,'course' ,'' ,'' ,'265' ,'195' ,[
    'modalId'    => 'course-image-upload',
    'modalTitle' => trans('admin::app.upload_image')
] ,'#datatable-course') }}

{{ Form::bsImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

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

        var inputFile = $('#course-image-upload').find('.upload-file'),
            datatableRaw = _aut_datatable_getSelectedRowData('#datatable-course' ,$($this).closest('tr'));

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        APP_AMU.fileUpload.load(inputFile ,datatableRaw);

        $('#course-image-upload').modal('show');
    }

    function prerequisiteModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#prerequisite-custom', "?course=" + $($this).data('key') + "&parent=" + $($this).data('parent'));
    }
</script>
