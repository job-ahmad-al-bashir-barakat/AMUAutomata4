{{ Form::bsImageUpload('gallery' ,'gallery' ,'' ,'' ,'100', '100' ,[
    'modalId'    => 'slider-image-upload',
    'modalTitle' => trans('utilities::app.upload_slider_image')
] ,'#datatable-slider', 'false', '.image', ['appendLocation' => '#images', 'appendName' => 'webModule[images][]']) }}

{{ Form::bsImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $('#slider-image-upload').find('.upload-file');
        //var datatableRaw = _aut_datatable_getSelectedRowData('#datatable-slider' ,$($this).closest('tr'));

//        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        APP_AMU.fileUpload.load(inputFile);

        $('#slider-image-upload').modal('show');
    }
</script>

