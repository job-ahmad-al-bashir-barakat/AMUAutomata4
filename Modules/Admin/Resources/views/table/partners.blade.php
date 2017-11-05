{{ FormComponent::bsImageUpload('partner-large-image' ,'partner-large-image' ,'' ,'' ,'755' ,'480' ,[
    'modalId'    => 'partner-larg-image-upload',
    'modalTitle' => trans('admin::app.upload_images')
] ,'#datatable-partner' ,'true' ,'.image_large',['allowRatio' => 'true']) }}

{{ FormComponent::bsImageUpload('partner-small-image' ,'partner-small-image' ,'' ,'' ,'320' ,'300' ,[
    'modalId'    => 'partner-small-image-upload',
    'modalTitle' => trans('admin::app.upload_images')
] ,'#datatable-partner' ,'true' ,'.image_small',['allowRatio' => 'true']) }}

{{ FormComponent::bsImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $($($this).data('modal')).find('.upload-file'),
            datatableRaw = _aut_datatable_getSelectedRowData('#datatable-partner' ,$($this).closest('tr'));

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        APP_AMU.fileUpload.load(inputFile ,datatableRaw);

        $($($this).data('modal')).modal('show');
    }
</script>
