{{ FileUpload::VideoUpload('videos' ,'videos' ,'' ,'' ,'' ,'' ,[
    'modalId'    => 'videos-file-upload',
    'modalTitle' => trans('utilities::app.upload_videos')
] ,'#datatable-video', true, '.file') }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {
        AUT_UPLOAD.initFileUploadWithDatatable($this,'#videos-file-upload','#datatable-video');
    }
</script>
