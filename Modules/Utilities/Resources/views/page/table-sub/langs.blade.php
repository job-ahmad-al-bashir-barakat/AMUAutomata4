{{ Form::bsImageUpload('lang' ,'lang' ,'' ,'' ,'18' ,'12' ,[
    'modalId'    => 'lang-image-upload',
    'modalTitle' => trans('utilities::app.upload_images')
] ,'#datatable-langs' ,'true' ,'.image',['allowRatio' => 'true']) }}

{{ Form::bsImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $('#lang-image-upload').find('.upload-file'),
            datatableRaw = _aut_datatable_getSelectedRowData('#datatable-langs' ,$($this).closest('tr'));

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        APP_AMU.fileUpload.load(inputFile ,datatableRaw);

        $('#lang-image-upload').modal('show');
    }
</script>
