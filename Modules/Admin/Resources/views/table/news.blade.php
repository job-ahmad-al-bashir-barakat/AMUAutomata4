{!!
    FileUpload::modal('news-image-upload',trans('admin::app.upload_image'))
        ->tab('news_first_image','570 x 390','',true)
        ->ImageUpload('news-570-390' ,'news-570-390' ,'' ,'' ,'570' ,'390' ,[] ,'#datatable-news',true,'.image_570',['autoReplace' => true, 'maxFileCount' => 1])
        ->tab('news_second_image','1920 x 1280')
        ->ImageUpload('news-1920-1280' ,'news-1920-1280' ,'' ,'' ,'1920' ,'1280' ,[] ,'#datatable-news',true,'.image_1920',['autoReplace' => true, 'maxFileCount' => 1])
        ->render()
 !!}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        AUT_UPLOAD.initFileUploadWithDatatable($this,'#news-image-upload','#datatable-news');
    }
</script>
