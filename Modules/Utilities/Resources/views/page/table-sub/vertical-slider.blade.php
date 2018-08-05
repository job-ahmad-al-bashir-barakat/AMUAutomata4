{{ FileUpload::ImageUpload('vertical_slider' ,'vertical_slider' ,'' ,'' ,'100' ,'100' ,[
    'modalId'    => 'vertical-slider-image-upload',
    'modalTitle' => trans('utilities::app.upload_vertical_slider_image')
] ,'#datatable-vertical-slider', true, '.image', ['maxFileCount' => 1]) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>

    function showFileUploadModal($this) {

        AUT_UPLOAD.initFileUploadWithDatatable($this,'#vertical-slider-image-upload','#datatable-vertical-slider');
    }

</script>
