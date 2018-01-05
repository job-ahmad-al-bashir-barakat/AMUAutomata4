{{ Form::bsImageUpload('person' ,'person' ,'' ,'' ,'260' ,'230' ,[
    'modalId'    => 'person-image-upload',
    'modalTitle' => trans('admin::app.personal_image')
] ,'#datatable-persons') }}

{{ Form::bsImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $('#person-image-upload').find('.upload-file'),
            datatableRaw = _aut_datatable_getSelectedRowData($($this).data('tableid') ,$($this).closest('tr'));

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        APP_AMU.fileUpload.load(inputFile ,datatableRaw);

        $('#person-image-upload').modal('show');
    }
</script>