{!!
    FileUpload::modal('news-image-upload',trans('admin::app.upload_image'))
        ->tab('news_image','750 x 500','',true)
        ->ImageUpload('news' ,'news' ,'' ,'' ,'750' ,'500' ,[] ,'#datatable-news',true,'.image',['autoReplace' => true, 'maxFileCount' => 1])
        ->render()
 !!}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        AUT_UPLOAD.initFileUploadWithDatatable($this,'#news-image-upload','#datatable-news');
    }
</script>
