{!!
    FileUpload::modal('block-details-image-upload',trans('admin::app.upload_image'))
        ->tab('block_front_image','Front 250 x 250','',true)
        ->ImageUpload('block-front' ,'block-front' ,'' ,'' ,'250' ,'250' ,[] ,'#datatable-block-details',true,'.front_image',['autoReplace' => true, 'maxFileCount' => 1])
        ->tab('block_back_image','Back 250 x 250')
        ->ImageUpload('block-back' ,'block-back' ,'' ,'' ,'250' ,'250' ,[] ,'#datatable-block-details',true,'.back_image',['autoReplace' => true, 'maxFileCount' => 1])
        ->render()
 !!}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {
        AUT_UPLOAD.initFileUploadWithDatatable($this, '#block-details-image-upload', '#datatable-block-details');
    }
</script>
