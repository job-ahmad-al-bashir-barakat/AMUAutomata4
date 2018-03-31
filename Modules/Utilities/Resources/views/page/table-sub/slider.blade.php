{{ FileUpload::ImageUpload('slider' ,'slider' ,'' ,'' ,'1920' ,'1280' ,[
    'modalId'    => 'slider-image-upload',
    'modalTitle' => trans('utilities::app.upload_slider_image')
] ,'#datatable-slider', true, '.image', ['maxFileCount' => 1]) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {
        AUT_UPLOAD.initFileUploadWithDatatable($this,'#slider-image-upload','#datatable-slider');
    }
</script>
