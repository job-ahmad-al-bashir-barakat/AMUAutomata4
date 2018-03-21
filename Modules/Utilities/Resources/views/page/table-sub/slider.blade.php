{{ FileUpload::ImageUpload('slider' ,'slider' ,'' ,'' ,'1920' ,'1280' ,[
    'modalId'    => 'slider-image-upload',
    'modalTitle' => trans('utilities::app.upload_slider_image')
] ,'#datatable-slider', true, '.image', ['maxFileCount' => 1]) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $('#slider-image-upload').find('.upload-file');
        var datatableRaw = _aut_datatable_getSelectedRowData('#datatable-slider' ,$($this).closest('tr'));

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        AUTOMATA_APP.fileUpload.load(inputFile ,datatableRaw);

        $('#slider-image-upload').modal('show');
    }
</script>
