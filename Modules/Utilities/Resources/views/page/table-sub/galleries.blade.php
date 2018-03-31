{{ FileUpload::ImageUpload('galleries' ,'galleries' ,'' ,'' ,'570' ,'390' ,[
    'modalId'    => 'galleries-image-upload',
    'modalTitle' => trans('utilities::app.upload_galleries_image')
] ,'#datatable-galleries', true, '.image', ['maxFileCount' => 1]) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {
        AUT_UPLOAD.initFileUploadWithDatatable($this,'#galleries-image-upload','#datatable-galleries');
    }
</script>
