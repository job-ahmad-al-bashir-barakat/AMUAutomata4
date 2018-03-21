{{ FileUpload::ImageUpload('partner-large-image' ,'partner-large-image' ,'' ,'image_type=large' ,'755' ,'480' ,[
    'modalId'    => 'partner-larg-image-upload',
    'modalTitle' => trans('admin::app.upload_images')
] ,'#datatable-partner' ,'true' ,'.image_large',['allowRatio' => 'true']) }}

{{ FileUpload::ImageUpload('partner-small-image' ,'partner-small-image' ,'' ,'image_type=small' ,'320' ,'300' ,[
    'modalId'    => 'partner-small-image-upload',
    'modalTitle' => trans('admin::app.upload_images')
] ,'#datatable-partner' ,'true' ,'.image_small',['allowRatio' => 'true']) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

{!! autGoogleMap('partner',trans('admin::app.gelocation'),'',10,setting('UGL')->value,'#datatable-partner-modal .input-location input') !!}

<script>
    function showFileUploadModal($this) {

        AUT_UPLOAD.initFileUploadWithDatatable(
            $this,
            $($this).data('modal'),
            '#datatable-partner',
            $.param(AUT_HELPER.convertStringParamToJson(inputFile.attr('data-param') ,'id=' + $($this).data('key')))
        );
    }
</script>
