{{ Form::bsImageUpload('lab' ,'lab' ,'' ,'' ,'1366' ,'768' ,[
    'modalId'    => 'lab-image-upload',
    'modalTitle' => trans('admin::app.upload_images')
] ,'#datatable-labs' ,'true' ,'.image' ,['allowRatio' => 'true']) }}

{{ Form::bsImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $('#lab-image-upload').find('.upload-file'),
            datatableRaw = _aut_datatable_getSelectedRowData('#datatable-labs' ,$($this).closest('tr'));

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        APP_AMU.fileUpload.load(inputFile ,datatableRaw);

        $('#lab-image-upload').modal('show');
    }
</script>
