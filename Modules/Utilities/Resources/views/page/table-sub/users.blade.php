{{ FileUpload::ImageUpload('user' ,'user' ,'' ,'' ,'60' ,'60' ,[
    'modalId'    => 'user-image-upload',
    'modalTitle' => trans('utilities::app.upload_images')
] ,'#datatable-users' ,'true' ,'.image',['allowRatio' => true]) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $('#user-image-upload').find('.upload-file'),
            datatableRaw = _aut_datatable_getSelectedRowData('#datatable-users' ,$($this).closest('tr'));

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        AUT_UPLOAD.fileUpload.load(inputFile ,datatableRaw);

        $('#user-image-upload').modal('show');
    }
</script>
