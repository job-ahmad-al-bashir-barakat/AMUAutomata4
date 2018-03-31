{{ FileUpload::ImageUpload('gallery' ,'gallery' ,'' ,'' ,'100', '100' ,[
    'modalId'    => 'gallery-image-upload',
    'modalTitle' => trans('utilities::app.upload_gallery_image')
] ,'#datatable-gallery', false, '.image', ['appendLocation' => '#images', 'appendName' => 'webModule[images][]']) }}

{{ FileUpload::ImageUpload('small_gallery' ,'small_gallery' ,'' ,'' ,'560', '200' ,[
    'modalId'    => 'small-gallery-image-upload',
    'modalTitle' => trans('utilities::app.upload_small_gallery')
] ,'#datatable-small-gallery', false, '.image', ['appendLocation' => '#images', 'appendName' => 'webModule[images][]', 'allowRatio' => true]) }}


{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModalGallery($this) {
        var inputFile = $('#gallery-image-upload').find('.upload-file');
        AUT_UPLOAD.fileUpload.load(inputFile);
        $('#gallery-image-upload').modal('show');
    }
    function showFileUploadModalSmallGallery($this) {
        var inputFile = $('#small-gallery-image-upload').find('.upload-file');
        AUT_UPLOAD.fileUpload.load(inputFile);
        $('#small-gallery-image-upload').modal('show');
    }
    $(document).on('change','#module-id' ,function () {
        var id = $(this).val();
        var $template = $('#datatable-custom-modules-modal #custom-module-temp');
        if(id) {
            $.get("{{ RouteUrls::moduleAttributesInputs() }}", {customModuleId: id}, function (res) {
                $template.html(res.html);
                if($template.find('.datatable-text-editor').length){
                    AUTOMATA_APP.ckeditor.reset('' ,'' ,'single' ,'module-textarea-id');
                    AUTOMATA_APP.ckeditor.init('body' ,'.datatable-text-editor');
                }
                if($template.find('.autocomplete').length){
                    AUT_AUTOCOMPLETE_PACK.autocomplete.initAutocomplete($template.find('.autocomplete'));
                }
            });
        } else {
            $template.html('');
        }
    });
</script>
