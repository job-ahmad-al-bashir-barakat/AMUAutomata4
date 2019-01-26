{{ FileUpload::ImageUpload('tenders' ,'tenders' ,'' ,'' , null , null ,[
    'modalId'    => 'tenders-image-upload',
    'modalTitle' => trans('admin::app.tenders')
] ,'#datatable-tenders' ,'true' ,'.image',['autoReplace' => true, 'maxFileCount' => 1]) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this)
    {
        AUT_UPLOAD.initFileUploadWithDatatable($this, '#tenders-image-upload', '#datatable-tenders');
    }
</script>
