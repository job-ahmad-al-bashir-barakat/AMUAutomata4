{{ FileUpload::ImageUpload('lab' ,'lab' ,'' ,'' ,'1366' ,'768' ,[
    'modalId'    => 'lab-image-upload',
    'modalTitle' => trans('admin::app.upload_images')
] ,'#datatable-labs' ,true ,'.image') }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

{!! autGoogleMap('labs',trans('admin::app.gelocation'),'',10,setting('UGL')->first()->value,'#datatable-labs-modal .input-location input') !!}

<script>
    function showFileUploadModal($this) {

        AUT_UPLOAD.initFileUploadWithDatatable($this,'#lab-image-upload','#datatable-labs');
    }
</script>
