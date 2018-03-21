{{ FileUpload::ImageUpload('vertical_slider' ,'vertical_slider' ,'' ,'' ,'100' ,'100' ,[
    'modalId'    => 'vertical-slider-image-upload',
    'modalTitle' => trans('utilities::app.upload_vertical_slider_image')
] ,'#datatable-vertical-slider', true, '.image', ['maxFileCount' => 1]) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $('#vertical-slider-image-upload').find('.upload-file');
        var datatableRaw = _aut_datatable_getSelectedRowData('#datatable-vertical-slider' ,$($this).closest('tr'));

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        AUTOMATA_APP.fileUpload.load(inputFile ,datatableRaw);

        $('#vertical-slider-image-upload').modal('show');
    }
</script>
