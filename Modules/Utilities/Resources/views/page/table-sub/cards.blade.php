{{ FileUpload::ImageUpload('cards' ,'cards' ,'' ,'' ,'600' ,'300' ,[
    'modalId'    => 'cards-image-upload',
    'modalTitle' => trans('utilities::app.upload_images')
] ,'#datatable-cards', true, '.image') }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {
        AUT_UPLOAD.initFileUploadWithDatatable($this, '#cards-image-upload', '#datatable-cards');
    }
</script>
