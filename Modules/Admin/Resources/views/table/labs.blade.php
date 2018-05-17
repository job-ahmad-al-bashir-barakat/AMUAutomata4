{{ FileUpload::ImageUpload('main-lab' ,'main-lab' ,'' ,'' ,'755' ,'480' ,[
    'modalId'    => 'lab-main-image-upload',
    'modalTitle' => trans('admin::app.main_image')
] ,'#datatable-labs' ,true ,'.main_image',['autoReplace' => true, 'maxFileCount' => 1]) }}

{{ FileUpload::ImageUpload('lab' ,'lab' ,'' ,'' ,'285' ,'215' ,[
    'modalId'    => 'lab-image-upload',
    'modalTitle' => trans('admin::app.upload_images')
] ,'#datatable-labs' ,true ,'.image') }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

{!! autGoogleMap('labs',trans('admin::app.gelocation'),'',10,setting('UGL')->first()->value,'#datatable-labs-modal .input-location input') !!}

<script>
    function showMainImageModal($this) {

        AUT_UPLOAD.initFileUploadWithDatatable($this,'#lab-main-image-upload','#datatable-labs');
    }

    function showFileUploadModal($this) {

        AUT_UPLOAD.initFileUploadWithDatatable($this,'#lab-image-upload','#datatable-labs');
    }
</script>
