{!!
    FileUpload::modal('news-image-upload',trans('admin::app.upload_image'))
        ->tab('news_first_image','250 x 250','',true)
        ->ImageUpload('news-250-250' ,'news-250-250' ,'' ,'' ,'250' ,'250' ,[] ,'#datatable-news',true,'.image_250',['autoReplace' => true, 'maxFileCount' => 1])
        ->tab('news_second_image','750 x 400')
        ->ImageUpload('news-750-400' ,'news-750-400' ,'' ,'' ,'750' ,'400' ,[] ,'#datatable-news',true,'.image_750',['autoReplace' => true, 'maxFileCount' => 1])
        ->render()
 !!}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        AUT_UPLOAD.initFileUploadWithDatatable($this,'#news-image-upload','#datatable-news');
    }
</script>
