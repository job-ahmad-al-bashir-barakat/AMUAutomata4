{{ FileUpload::ImageUpload('person' ,'person' ,'' ,'' ,'260' ,'230' ,[
    'modalId'    => 'person-image-upload',
    'modalTitle' => trans('admin::app.personal_image')
] ,'#datatable-persons') }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>

    function showFileUploadModal($this) {

        AUT_UPLOAD.initFileUploadWithDatatable($this,'#person-image-upload',$($this).data('tableid'));
    }
</script>