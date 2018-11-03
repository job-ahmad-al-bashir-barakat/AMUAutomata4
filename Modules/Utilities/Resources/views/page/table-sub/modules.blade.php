{{ FileUpload::ImageUpload('modules' ,'modules' ,'' ,'' , null , null ,[
    'modalId'    => 'modules-image-upload',
    'modalTitle' => trans('utilities::app.upload_images')
] ,'#datatable-modules' ,'true' ,'.image',['allowRatio' => true]) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {
        AUT_UPLOAD.initFileUploadWithDatatable($this, '#modules-image-upload', '#datatable-modules');
    }
</script>
