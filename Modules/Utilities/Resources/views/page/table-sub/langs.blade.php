{{ FileUpload::ImageUpload('lang' ,'lang' ,'' ,'' ,'18' ,'12' ,[
    'modalId'    => 'lang-image-upload',
    'modalTitle' => trans('utilities::app.upload_images')
] ,'#datatable-langs' ,'true' ,'.image',['allowRatio' => 'true']) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $('#lang-image-upload').find('.upload-file'),
            datatableRaw = _aut_datatable_getSelectedRowData('#datatable-langs' ,$($this).closest('tr'));

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        AUT_UPLOAD.fileUpload.load(inputFile ,datatableRaw);

        $('#lang-image-upload').modal('show');
    }
</script>
