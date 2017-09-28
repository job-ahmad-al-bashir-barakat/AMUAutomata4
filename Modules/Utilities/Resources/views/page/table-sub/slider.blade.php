{{ Form::bsImageUpload('slider' ,'slider' ,'' ,'' ,'1920' ,'1280' ,[
    'modalId'    => 'slider-image-upload',
    'modalTitle' => trans('admin::app.upload_lab_image')
] ,'#datatable-slider', true, '.image', ['maxFileCount' => 1]) }}

{{ Form::bsImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $('#slider-image-upload').find('.upload-file'),
            datatableRaw = _aut_datatable_getSelectedRowData('#datatable-slider' ,$($this).closest('tr'));

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        APP_AMU.fileUpload.load(inputFile ,datatableRaw);

        $('#slider-image-upload').modal('show');
    }
</script>
