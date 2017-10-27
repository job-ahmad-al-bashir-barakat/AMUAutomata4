{{ Form::bsImageUpload('gallery' ,'gallery' ,'' ,'' ,'100', '100' ,[
    'modalId'    => 'slider-image-upload',
    'modalTitle' => trans('utilities::app.upload_slider_image')
] ,'#datatable-slider', 'false', '.image', ['appendLocation' => '#images', 'appendName' => 'webModule[images][]']) }}

{{ Form::bsImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {
        var inputFile = $('#slider-image-upload').find('.upload-file');
        APP_AMU.fileUpload.load(inputFile);
        $('#slider-image-upload').modal('show');
    }
    // update by basheer
    $(document).on('change','#module-id' ,function () {
        var id = $(this).val();
        var $template = $('#datatable-custom-modules-modal #custom-module-temp');
        if(id) {
            $.get("{{ RouteUrls::moduleAttributesInputs() }}", {customModuleId: id}, function (res) {
                $template.html(res.html);
                if($template.find('.datatable-text-editor').length){
                    APP_AMU.ckeditor.reset('' ,'' ,'single' ,'module-textarea-id');
                    APP_AMU.ckeditor.init('body' ,'.datatable-text-editor');
                }
                if($template.find('.autocomplete').length){
                    APP_AMU.autocomplete.initAutocomplete($template.find('.autocomplete'));
                }
            });
        } else {
            $template.html('');
        }
    });
</script>
